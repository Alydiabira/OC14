<?php declare(strict_types = 1);

namespace PHPStan\PhpDocParser\Ast\Type;

use PHPStan\PhpDocParser\Ast\NodeAttributes;
use function implode;

class ArrayShapeNode implements TypeNode
{

	public const KIND_ARRAY = 'array';
	public const KIND_LIST = 'list';
<<<<<<< HEAD
=======
	public const KIND_NON_EMPTY_ARRAY = 'non-empty-array';
	public const KIND_NON_EMPTY_LIST = 'non-empty-list';
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

	use NodeAttributes;

	/** @var ArrayShapeItemNode[] */
	public $items;

	/** @var bool */
	public $sealed;

	/** @var self::KIND_* */
	public $kind;

<<<<<<< HEAD
=======
	/** @var ArrayShapeUnsealedTypeNode|null */
	public $unsealedType;

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
	/**
	 * @param ArrayShapeItemNode[] $items
	 * @param self::KIND_* $kind
	 */
<<<<<<< HEAD
	public function __construct(array $items, bool $sealed = true, string $kind = self::KIND_ARRAY)
=======
	public function __construct(
		array $items,
		bool $sealed = true,
		string $kind = self::KIND_ARRAY,
		?ArrayShapeUnsealedTypeNode $unsealedType = null
	)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
	{
		$this->items = $items;
		$this->sealed = $sealed;
		$this->kind = $kind;
<<<<<<< HEAD
=======
		$this->unsealedType = $unsealedType;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
	}


	public function __toString(): string
	{
		$items = $this->items;

		if (! $this->sealed) {
<<<<<<< HEAD
			$items[] = '...';
=======
			$items[] = '...' . $this->unsealedType;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
		}

		return $this->kind . '{' . implode(', ', $items) . '}';
	}

}
