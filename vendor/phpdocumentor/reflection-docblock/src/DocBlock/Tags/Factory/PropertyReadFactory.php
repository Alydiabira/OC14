<?php

declare(strict_types=1);

namespace phpDocumentor\Reflection\DocBlock\Tags\Factory;

use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\DocBlock\Tag;
use phpDocumentor\Reflection\DocBlock\Tags\PropertyRead;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context;
use PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagNode;
use PHPStan\PhpDocParser\Ast\PhpDoc\PropertyTagValueNode;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
=======
use function is_string;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function trim;

/**
 * @internal This class is not part of the BC promise of this library.
 */
final class PropertyReadFactory implements PHPStanFactory
{
    private DescriptionFactory $descriptionFactory;
    private TypeResolver $typeResolver;

    public function __construct(TypeResolver $typeResolver, DescriptionFactory $descriptionFactory)
    {
        $this->typeResolver = $typeResolver;
        $this->descriptionFactory = $descriptionFactory;
    }

    public function create(PhpDocTagNode $node, Context $context): Tag
    {
        $tagValue = $node->value;
        Assert::isInstanceOf($tagValue, PropertyTagValueNode::class);

<<<<<<< HEAD
        return new PropertyRead(
            trim($tagValue->propertyName, '$'),
            $this->typeResolver->createType($tagValue->type, $context),
            $this->descriptionFactory->create($tagValue->description, $context)
=======
        $description = $tagValue->getAttribute('description');
        if (is_string($description) === false) {
            $description = $tagValue->description;
        }

        return new PropertyRead(
            trim($tagValue->propertyName, '$'),
            $this->typeResolver->createType($tagValue->type, $context),
            $this->descriptionFactory->create($description, $context)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        );
    }

    public function supports(PhpDocTagNode $node, Context $context): bool
    {
        return $node->value instanceof PropertyTagValueNode && $node->name === '@property-read';
    }
}
