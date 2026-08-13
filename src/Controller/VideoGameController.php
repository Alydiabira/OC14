<?php

declare(strict_types=1);

namespace App\Controller;

use App\Doctrine\Repository\TagRepository;
use App\Doctrine\Repository\VideoGameRepository;
use App\Form\ReviewType;
use App\Model\ValueObject\Sorting;
use App\Model\ValueObject\Direction;
use App\List\VideoGameList\VideoGamesList;
use App\List\VideoGameList\Pagination;
use App\List\VideoGameList\Filter;
use App\Model\Entity\Review;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Form\FormFactoryInterface;

#[Route('/video-games', name: 'video_games_')]
final class VideoGameController extends AbstractController
{
    #[Route('', name: 'list', methods: ['GET'])]
    public function list(
        Request $request,
        VideoGameRepository $repo,
        UrlGeneratorInterface $urlGenerator,
        FormFactoryInterface $formFactory,
        TagRepository $tagRepository
    ): Response {

        // 1) Lecture des paramètres GET
        $page = (int) $request->query->get('page', 1);
        $limit = (int) $request->query->get('limit', 10);
        $sorting = $request->query->get('sorting');
        $direction = $request->query->get('direction', 'Descending');
        $search = $request->query->all('filter')['search'] ?? null;
        $tagsIds = $request->query->all('filter')['tags'] ?? [];

        // 2) Conversion des IDs → objets Tag
        $tags = [];
        if (!empty($tagsIds)) {
            $tags = $tagRepository->findBy(['id' => $tagsIds]);
        }

        // 3) Création du filtre
        $filter = new Filter(
            search: $search,
            tags: $tags
        );

        // 4) Tri
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

        // 5) Pagination
        $pagination = new Pagination(
            $page,
            $limit,
            $sortingVO,
            $directionVO
        );

        // 6) Création de la liste
        $list = new VideoGamesList(
            $urlGenerator,
            $formFactory,
            $repo,
            $pagination,
            $filter
        );

        // 7) Initialisation
        $list->handleRequest($request);

        // 8) Rendu
        return $this->render('views/video_games/list.html.twig', [
            'list' => $list,
        ]);
    }


    #[Route('/{slug}', name: 'show', methods: ['GET', 'POST'])]
    public function show(
        string $slug,
        VideoGameRepository $repo,
        Request $request,
        EntityManagerInterface $em
    ): Response {

        // 1) Récupération du jeu
        $game = $repo->findOneBy(['slug' => $slug]);

        if (!$game) {
            throw $this->createNotFoundException("Jeu introuvable");
        }

        // 2) Création du formulaire d'avis
        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        // 3) Traitement du POST
        if ($form->isSubmitted() && $form->isValid()) {

            $review->setVideoGame($game);
            $review->setUser($this->getUser());

            $em->persist($review);
            $em->flush();

            // ✔ Redirection attendue par le test
            return $this->redirectToRoute('video_games_show', [
                'slug' => $game->getSlug(),
            ]);
        }

        // 4) Affichage
        return $this->render('views/video_games/show.html.twig', [
            'game' => $game,
            'form' => $form->createView(),
        ]);
    }
}
