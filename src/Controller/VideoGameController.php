<?php

declare(strict_types=1);

namespace App\Controller;

use App\Doctrine\Repository\TagRepository;
use App\Doctrine\Repository\VideoGameRepository;
use App\Form\ReviewType;
use App\List\VideoGameList\Filter;
use App\List\VideoGameList\Pagination;
use App\List\VideoGameList\VideoGamesList;
use App\Model\Entity\Review;
use App\Model\ValueObject\Direction;
use App\Model\ValueObject\Sorting;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

final class VideoGameController extends AbstractController
{
    #[Route('/video-games/', name: 'video_games_list', methods: ['GET'])]
    public function list(
        Request $request,
        VideoGameRepository $repo,
        UrlGeneratorInterface $urlGenerator,
        FormFactoryInterface $formFactory,
        TagRepository $tagRepository
    ): Response {

        $page = $request->query->getInt('page', 1);
        $limit = $request->query->getInt('limit', 10);

        // Enums corrects
        $sorting = Sorting::tryFrom($request->query->get('sorting') ?? 'Title') ?? Sorting::Title;
        $direction = Direction::tryFrom($request->query->get('direction') ?? 'Descending') ?? Direction::Descending;

        $search = $request->query->all('filter')['search'] ?? null;
        $tagsIds = $request->query->all('filter')['tags'] ?? [];

        $tags = [];
        if (!empty($tagsIds)) {
            $tags = $tagRepository->findBy(['id' => $tagsIds]);
        }

        $filter = new Filter($search, $tags);

        $pagination = new Pagination(
            page: $page,
            limit: $limit,
            sorting: $sorting,
            direction: $direction
        );

        $list = new VideoGamesList(
            urlGenerator: $urlGenerator,
            formFactory: $formFactory,
            videoGameRepository: $repo,
            pagination: $pagination,
            filter: $filter
        );

        $list->handleRequest($request);

        return $this->render('views/video_games/list.html.twig', [
            'list' => $list,
        ]);
    }

    #[Route('/video-games/{slug}', name: 'video_games_show', methods: ['GET', 'POST'])]
    public function show(
        string $slug,
        VideoGameRepository $repo,
        Request $request,
        EntityManagerInterface $em
    ): Response {

        $game = $repo->findOneBy(['slug' => $slug]);

        if (!$game) {
            throw $this->createNotFoundException("Jeu introuvable");
        }

        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $review->setVideoGame($game);
            $review->setUser($this->getUser());

            $em->persist($review);
            $em->flush();

            return $this->redirectToRoute('video_games_show', [
                'slug' => $game->getSlug(),
            ]);
        }

        return $this->render('views/video_games/show.html.twig', [
            'game' => $game,
            'form' => $form->createView(),
        ]);
    }
}
