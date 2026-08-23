<?php

declare(strict_types=1);

namespace App\List\VideoGameList;

use App\Doctrine\Repository\VideoGameRepository;
use App\Form\FilterType;
use App\Model\Entity\VideoGame;
use App\Model\ValueObject\Info;
use App\Model\ValueObject\Page;
use Countable;
use Doctrine\ORM\Tools\Pagination\Paginator;
use IteratorAggregate;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Traversable;

/**
 * @implements IteratorAggregate<VideoGame>
 */
final class VideoGamesList implements Countable, IteratorAggregate
{
    private FormView $form;
    private Filter $filter;
    private Paginator $data;
    private string $route;

    /** @var VideoGame[] */
    private array $items = [];

    /** @var array<string, mixed> */
    private array $routeParameters;

    private Info $info;

    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private FormFactoryInterface $formFactory,
        private VideoGameRepository $videoGameRepository,
        private Pagination $pagination,
        Filter $filter
    ) {
        $this->filter = $filter;
    }

    public function getForm(): FormView
    {
        return $this->form;
    }

    public function getInfo(): Info
    {
        return $this->info;
    }

    public function handleRequest(Request $request): self
    {
        $this->route = $request->attributes->get('_route');
        $this->routeParameters = $request->query->all();

        // Formulaire
        $this->form = $this->formFactory
            ->create(FilterType::class, $this->filter, [
                'method' => Request::METHOD_GET,
                'csrf_protection' => false,
            ])
            ->handleRequest($request)
            ->createView();

        // Données
        $this->data = $this->videoGameRepository->getVideoGames(
            $this->pagination,
            $this->filter
        );

        $this->items = iterator_to_array($this->data);

        $total = count($this->data);
        $count = count($this->items);

        // Info
        $this->info = new Info(
            count: $count,
            offsetFrom: $this->pagination->getOffset() + 1,
            offsetTo: $this->pagination->getOffset() + $count,
            total: $total
        );

        // Initialisation pagination (⚠ vide les pages)
        $this->pagination->init($total, $count);

        // Construction pagination
        $current = $this->pagination->getPage();
        $last = $this->pagination->getLastPage();

        // Première page / Précédent
        if ($current > 1) {
            $this->pagination->add(new Page(
                1,
                false,
                'Première page',
                $this->generateUrl(1)
            ));

            $this->pagination->add(new Page(
                $current - 1,
                false,
                'Précédent',
                $this->generateUrl($current - 1)
            ));
        }

        // Pages numérotées
        $pageRange = range(
            max(1, $current - 3),
            min($last, $current + 3)
        );

        foreach ($pageRange as $page) {
            $this->pagination->add(new Page(
                $page,
                $page === $current,
                (string) $page,
                $this->generateUrl($page)
            ));
        }

        // Suivant / Dernière page
        if ($current < $last) {
            $this->pagination->add(new Page(
                $current + 1,
                false,
                'Suivant',
                $this->generateUrl($current + 1)
            ));

            $this->pagination->add(new Page(
                $last,
                false,
                'Dernière page',
                $this->generateUrl($last)
            ));
        }

        return $this;
    }

    public function getFilter(): Filter
    {
        return $this->filter;
    }

    public function getPagination(): Pagination
    {
        return $this->pagination;
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->items);
    }

    public function count(): int
    {
        return count($this->items);
    }

    private function generateUrl(int $page): string
    {
        return $this->urlGenerator->generate(
            $this->route,
            ['page' => $page] + $this->pagination->toArray() + $this->routeParameters
        );
    }
}
