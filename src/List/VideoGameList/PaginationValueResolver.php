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
<<<<<<< HEAD
    /**
     * @return iterable<Pagination>
     */
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        $argumentType = $argument->getType();

        if ($argumentType !== Pagination::class) {
            return [];
        }

        return [new Pagination(
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 10),
            Sorting::tryFromName($request->query->get('sorting', '')) ?? Sorting::ReleaseDate,
            Direction::tryFromName($request->query->get('direction', '')) ?? Direction::Descending,
        )];
    }
}
