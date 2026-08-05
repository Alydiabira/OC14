<?php

declare(strict_types=1);

namespace App\Controller;

use App\List\ListFactory;
use App\List\VideoGameList\Pagination;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\ValueResolver;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage', methods: ['GET'])]
    public function index(
        #[ValueResolver('pagination')]
        Pagination $pagination,
        Request $request,
        ListFactory $listFactory
    ): Response {
        $videoGamesList = $listFactory
            ->createVideoGamesList($pagination)
            ->handleRequest($request);

        return $this->render('views/video_games/list.html.twig', [
            'list' => $videoGamesList,
        ]);
    }
}
