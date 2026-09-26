<?php

declare(strict_types=1);

namespace phpDocumentor\Reflection\DocBlock\Tags\Factory;

use Doctrine\Deprecations\Deprecation;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\DocBlock\Tag;
use phpDocumentor\Reflection\DocBlock\Tags\InvalidTag;
use phpDocumentor\Reflection\DocBlock\Tags\Param;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context;
use PHPStan\PhpDocParser\Ast\PhpDoc\InvalidTagValueNode;
use PHPStan\PhpDocParser\Ast\PhpDoc\ParamTagValueNode;
use PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagNode;
use PHPStan\PhpDocParser\Ast\PhpDoc\TypelessParamTagValueNode;
use PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode;
use PHPStan\PhpDocParser\Ast\Type\OffsetAccessTypeNode;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
=======
use function is_string;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use function sprintf;
use function trim;

/**
 * @internal This class is not part of the BC promise of this library.
 */
final class ParamFactory implements PHPStanFactory
{
    private DescriptionFactory $descriptionFactory;
    private TypeResolver $typeResolver;

    public function __construct(TypeResolver $typeResolver, DescriptionFactory $descriptionFactory)
    {
        $this->descriptionFactory = $descriptionFactory;
        $this->typeResolver = $typeResolver;
    }

    public function create(PhpDocTagNode $node, Context $context): Tag
    {
        $tagValue = $node->value;

        if ($tagValue instanceof InvalidTagValueNode) {
            Deprecation::trigger(
                'phpdocumentor/reflection-docblock',
                'https://github.com/phpDocumentor/ReflectionDocBlock/issues/362',
                sprintf(
                    'Param tag value "%s" is invalid, falling back to legacy parsing. Please update your docblocks.',
                    $tagValue->value
                )
            );

            return Param::create($tagValue->value, $this->typeResolver, $this->descriptionFactory, $context);
        }

        Assert::isInstanceOfAny(
            $tagValue,
            [
                ParamTagValueNode::class,
                TypelessParamTagValueNode::class,
            ]
        );

        if (($tagValue->type ?? null) instanceof OffsetAccessTypeNode) {
            return InvalidTag::create(
                (string) $tagValue,
                'param'
            );
        }

<<<<<<< HEAD
=======
        $description = $tagValue->getAttribute('description');
        if (is_string($description) === false) {
            $description = $tagValue->description;
        }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        return new Param(
            trim($tagValue->parameterName, '$'),
            $this->typeResolver->createType($tagValue->type ?? new IdentifierTypeNode('mixed'), $context),
            $tagValue->isVariadic,
<<<<<<< HEAD
            $this->descriptionFactory->create($tagValue->description, $context),
=======
            $this->descriptionFactory->create($description, $context),
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            $tagValue->isReference
        );
    }

    public function supports(PhpDocTagNode $node, Context $context): bool
    {
        return $node->value instanceof ParamTagValueNode
            || $node->value instanceof TypelessParamTagValueNode
            || $node->name === '@param';
    }
}
