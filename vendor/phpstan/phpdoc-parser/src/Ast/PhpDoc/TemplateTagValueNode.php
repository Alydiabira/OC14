<?php declare(strict_types = 1);

namespace PHPStan\PhpDocParser\Ast\PhpDoc;

use PHPStan\PhpDocParser\Ast\NodeAttributes;
use PHPStan\PhpDocParser\Ast\Type\TypeNode;
use function trim;

class TemplateTagValueNode implements PhpDocTagValueNode
{

	use NodeAttributes;

<<<<<<< HEAD
	/** @var string */
=======
	/** @var non-empty-string */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
	public $name;

	/** @var TypeNode|null */
	public $bound;

	/** @var TypeNode|null */
<<<<<<< HEAD
=======
	public $lowerBound;

	/** @var TypeNode|null */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
	public $default;

	/** @var string (may be empty) */
	public $description;

<<<<<<< HEAD
	public function __construct(string $name, ?TypeNode $bound, string $description, ?TypeNode $default = null)
	{
		$this->name = $name;
		$this->bound = $bound;
=======
	/**
	 * @param non-empty-string $name
	 */
	public function __construct(string $name, ?TypeNode $bound, string $description, ?TypeNode $default = null, ?TypeNode $lowerBound = null)
	{
		$this->name = $name;
		$this->bound = $bound;
		$this->lowerBound = $lowerBound;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
		$this->default = $default;
		$this->description = $description;
	}


	public function __toString(): string
	{
<<<<<<< HEAD
		$bound = $this->bound !== null ? " of {$this->bound}" : '';
		$default = $this->default !== null ? " = {$this->default}" : '';
		return trim("{$this->name}{$bound}{$default} {$this->description}");
=======
		$upperBound = $this->bound !== null ? " of {$this->bound}" : '';
		$lowerBound = $this->lowerBound !== null ? " super {$this->lowerBound}" : '';
		$default = $this->default !== null ? " = {$this->default}" : '';
		return trim("{$this->name}{$upperBound}{$lowerBound}{$default} {$this->description}");
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
	}

}
