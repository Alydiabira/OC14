<?php

declare(strict_types=1);

namespace App\Controller;

use App\Doctrine\Repository\VideoGameRepository as RepositoryVideoGameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage', methods: ['GET'])]
    public function index(Request $request, RepositoryVideoGameRepository $repo): Response
    {
        $query = $request->query->all();
        $list  = $repo->findByFilters($query);

        return $this->render('views/video_game/list.html.twig', [
            'list' => $list,
        ]);
    }
}
