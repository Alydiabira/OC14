<?php

declare(strict_types=1);

namespace App\List\VideoGameList;

use App\Model\ValueObject\Direction;
use App\Model\ValueObject\Sorting;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsControllerArgumentValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

#[AsControllerArgumentValueResolver('pagination')]
final readonly class PaginationValueResolver implements ArgumentValueResolverInterface
{
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        return $argument->getType() === Pagination::class;
    }

    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        $page   = $request->query->getInt('page', 1);
        $limit  = $request->query->getInt('limit', 10);

        $sortingParam = $request->query->get('sorting', 'title');
        $sorting      = Sorting::tryFrom($sortingParam) ?? Sorting::Title;

        $directionParam = $request->query->get('direction', 'Descending');
        $direction      = Direction::tryFrom($directionParam) ?? Direction::Descending;

        yield new Pagination(
            page: $page,
            limit: $limit,
            sorting: $sorting,
            direction: $direction,
        );
    }
}
