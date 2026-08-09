<?php

declare(strict_types=1);

namespace App\Controller;

use App\Doctrine\Repository\VideoGameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage', methods: ['GET'])]
    public function index(Request $request, VideoGameRepository $repo): Response
    {
        // 1) Lecture des paramètres GET
        $page = (int) $request->query->get('page', 1);
        $limit = (int) $request->query->get('limit', 10);
        $sorting = $request->query->get('sorting');
        $direction = $request->query->get('direction', 'Descending');
        $search = $request->query->all('filter')['search'] ?? null;
        $tags = $request->query->all('filter')['tags'] ?? [];

        // 2) Récupération des jeux
        $games = $repo->findAll();

        // 3) Filtre search
        if ($search) {
            $games = array_filter(
                $games,
                fn($g) =>
                str_contains($g->getTitle(), $search)
            );
        }

        // 4) Filtre tags
        if (!empty($tags)) {
            $games = array_filter(
                $games,
                fn($g) =>
                count(array_intersect($tags, $g->getTagsIds())) === count($tags)
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

        // 7) Rendu
        return $this->render('views/video_games/list.html.twig', [
            'games' => $games,
            'total' => $total,
            'offsetFrom' => $offsetFrom,
            'offsetTo' => $offsetTo,
            'page' => $page,
            'limit' => $limit,
            'sorting' => $sorting,
            'direction' => $direction,
            'search' => $search,
            'tags' => $tags,
        ]);
    }
}
