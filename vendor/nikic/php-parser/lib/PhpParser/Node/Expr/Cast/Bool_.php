<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\Cast;

use PhpParser\Node\Expr\Cast;

class Bool_ extends Cast {
<<<<<<< HEAD
=======
    // For use in "kind" attribute
    public const KIND_BOOL = 1; // "bool" syntax
    public const KIND_BOOLEAN = 2; // "boolean" syntax

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    public function getType(): string {
        return 'Expr_Cast_Bool';
    }
}
