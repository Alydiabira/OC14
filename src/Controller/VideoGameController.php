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
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

final class VideoGameController extends AbstractController
{
    #[Route('/video-games', name: 'video_games_list', methods: ['GET'])]
    #[Route('/video-games/', name: 'video_games_list_slash', methods: ['GET'])]
    public function list(
        Request $request,
        Pagination $pagination,
        Filter $filter,
        VideoGameRepository $repo,
        UrlGeneratorInterface $urlGenerator,
        FormFactoryInterface $formFactory,
        TagRepository $tagRepository
    ): Response {

        // Création de la liste
        $list = new VideoGamesList(
            urlGenerator: $urlGenerator,
            formFactory: $formFactory,
            videoGameRepository: $repo,
            pagination: $pagination,
            filter: $filter
        );

        // Le formulaire GET réécrit le Filter
        $list->handleRequest($request);

        // Convertir les IDs en objets Tag APRÈS handleRequest()
        $tags = $tagRepository->findBy(['id' => $list->getFilter()->getTags()]);

        // Remplacer complètement l'objet Filter via le setter
        $list->setFilter(
            new Filter(
                search: $list->getFilter()->getSearch(),
                tags: $tags
            )
        );

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

            if (!$this->getUser()) {
                return $this->json(['error' => 'Unauthorized'], 401);
            }

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

    #[Route('/', name: 'home', methods: ['GET'])]
    public function home(): Response
    {
        return $this->redirectToRoute('video_games_list');
    }
}
