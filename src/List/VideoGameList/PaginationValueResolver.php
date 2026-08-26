<?php

declare(strict_types=1);

namespace App\List\VideoGameList;

use App\Model\ValueObject\Direction;
use App\Model\ValueObject\Sorting;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsTargetedValueResolver;
use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

#[AsTargetedValueResolver('pagination')]
final readonly class PaginationValueResolver implements ValueResolverInterface
{
    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        if ($argument->getType() !== Pagination::class) {
            return [];
        }

        return [
            new Pagination(
                $request->query->getInt('page', 1),
                $request->query->getInt('limit', 10),
                Sorting::tryFromName($request->query->get('sorting', 'Title')) ?? Sorting::Title,
                Direction::tryFromName($request->query->get('direction', 'Ascending')) ?? Direction::Ascending,
            )
        ];
    }
}
