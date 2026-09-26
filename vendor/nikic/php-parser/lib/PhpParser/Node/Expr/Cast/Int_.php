<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\Cast;

use PhpParser\Node\Expr\Cast;

class Int_ extends Cast {
<<<<<<< HEAD
=======
    // For use in "kind" attribute
    public const KIND_INT = 1; // "int" syntax
    public const KIND_INTEGER = 2; // "integer" syntax

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getType(): string {
        return 'Expr_Cast_Int';
    }
}
