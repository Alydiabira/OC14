<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\Cast;

use PhpParser\Node\Expr\Cast;

class String_ extends Cast {
<<<<<<< HEAD
=======
    // For use in "kind" attribute
    public const KIND_STRING = 1; // "string" syntax
    public const KIND_BINARY = 2; // "binary" syntax

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getType(): string {
        return 'Expr_Cast_String';
    }
}
