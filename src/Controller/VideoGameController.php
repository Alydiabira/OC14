<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\ReviewType;
use App\List\ListFactory;
use App\List\VideoGameList\Pagination;
use App\Model\Entity\Review;
use App\Model\Entity\User;
use App\Model\Entity\VideoGame;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\ValueResolver;
use Symfony\Component\Routing\Annotation\Route;

final class VideoGameController extends AbstractController
{
    #[Route('/jeu-video', name: 'video_games_list', methods: ['GET'])]
    public function list(
        #[ValueResolver('pagination')]
        Pagination $pagination,
        Request $request,
        ListFactory $listFactory,
    ): Response {
        $videoGamesList = $listFactory->createVideoGamesList($pagination)->handleRequest($request);

        return $this->render('views/video_games/list.html.twig', [
            'list' => $videoGamesList,
        ]);
    }

    #[Route('/jeu-video-{slug}', name: 'video_games_show', methods: ['GET', 'POST'])]
    public function show(
        #[MapEntity(mapping: ['slug' => 'slug'])]
        VideoGame $videoGame,
        EntityManagerInterface $entityManager,
        Request $request
    ): Response {
        $review = new Review();

        $form = $this->createForm(ReviewType::class, $review)->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->denyAccessUnlessGranted('review', $videoGame);

            /** @var User $user */
            $user = $this->getUser();

            $review->setVideoGame($videoGame);
            $review->setUser($user);

            $entityManager->persist($review);
            $entityManager->flush();

            return $this->redirectToRoute('video_games_show', [
                'slug' => $videoGame->getSlug(),
            ]);
        }

        return $this->render('views/video_games/show.html.twig', [
            'video_game' => $videoGame,
            'form' => $form,
        ]);
    }
}
