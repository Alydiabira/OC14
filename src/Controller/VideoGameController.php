<?php

declare(strict_types=1);

namespace App\Controller;

use App\Doctrine\Repository\VideoGameRepository;
use App\Form\ReviewType;
use App\Model\ValueObject\Sorting;
use App\Model\ValueObject\Direction;
use App\List\VideoGameList\VideoGamesList;
use App\List\VideoGameList\Pagination;
use App\List\VideoGameList\Filter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Form\FormFactoryInterface;

#[Route('/video-games', name: 'video_games_')]
final class VideoGameController extends AbstractController
{
    #[Route('/', name: 'list', methods: ['GET'])]
    public function list(
        Request $request,
        VideoGameRepository $repo,
        UrlGeneratorInterface $urlGenerator,
        FormFactoryInterface $formFactory
    ): Response {

        // 1) Lecture des paramètres GET
        $page = (int) $request->query->get('page', 1);
        $limit = (int) $request->query->get('limit', 10);
        $sorting = $request->query->get('sorting');
        $direction = $request->query->get('direction', 'Descending');
        $search = $request->query->all('filter')['search'] ?? null;
        $tagsIds = $request->query->all('filter')['tags'] ?? [];

        // 2) Récupération des jeux
        $games = $repo->findAll();

        // 3) Filtre search
        if ($search) {
            $games = array_filter($games, fn($g) => str_contains($g->getTitle(), $search));
        }

        // 4) Filtre tags (IDs)
        if (!empty($tagsIds)) {
            $games = array_filter(
                $games,
                fn($g) =>
                count(array_intersect($tagsIds, $g->getTagsIds())) === count($tagsIds)
            );
        }

        // 5) Tri
        if ($sorting === 'Title') {
            usort(
                $games,
                fn($a, $b) =>
                $direction === 'Ascending'
                    ? strcmp($a->getTitle(), $b->getTitle())
                    : strcmp($b->getTitle(), $a->getTitle())
            );
        }

        // 6) Pagination
        $total = count($games);
        $offsetFrom = (($page - 1) * $limit) + 1;
        $offsetTo = min($offsetFrom + $limit - 1, $total);
        $games = array_slice($games, $offsetFrom - 1, $limit);

        // 7) Conversion ENUMS
        $sortingVO = match ($sorting) {
            'Title' => Sorting::Title,
            'ReleaseDate' => Sorting::ReleaseDate,
            default => Sorting::Title,
        };

        $directionVO = match ($direction) {
            'Ascending' => Direction::Ascending,
            'Descending' => Direction::Descending,
            default => Direction::Descending,
        };

        $pagination = new Pagination(
            $page,
            $limit,
            $sortingVO,
            $directionVO
        );

        // 8) Création du filtre (avec IDs)
        $filter = new Filter(
            search: $search,
            tags: $tagsIds
        );

        // 9) Création de l'objet VideoGamesList COMPLET
        $list = new VideoGamesList(
            $urlGenerator,
            $formFactory,
            $repo,
            $pagination,
            $filter
        );

        // 10) Initialisation complète
        $list->handleRequest($request);

        return $this->render('views/video_games/list.html.twig', [
            'list' => $list,
        ]);
    }

    #[Route('/{slug}', name: 'show', methods: ['GET', 'POST'])]
    public function show(
        string $slug,
        VideoGameRepository $repo,
        TagRepository $tagRepo,
        Request $request
    ): Response {

        $game = $repo->findOneBy(['slug' => $slug]);

        if (!$game) {
            throw $this->createNotFoundException("Jeu introuvable");
        }

        // 🔥 Hydratation des tags
        $tagObjects = $tagRepo->findBy(['id' => $game->getTagsIds()]);
        $game->setTags($tagObjects);

        // 🔥 Formulaire d'avis
        $form = $this->createForm(ReviewType::class);
        $form->handleRequest($request);

        return $this->render('views/video_games/show.html.twig', [
            'game' => $game,
            'form' => $form->createView(),
        ]);
    }
}
