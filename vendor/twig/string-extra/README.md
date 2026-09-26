String Extension
================

This package is a Twig extension that provides integration with the Symfony
<<<<<<< HEAD
String component.

It provides a [`u`][1] filter that wraps a text in a `UnicodeString`
object to give access to [methods of the class][2].

It also provides a [`slug`][3] filter which is simply a wrapper for the 
[`AsciiSlugger`][4]'s `slug` method.
=======
String component. It provides the following filters:

 * [`u`][1]: Wraps a text in a `UnicodeString` object to give access to
[methods of the class][2].

 * [`slug`][3]: Wraps the [`AsciiSlugger`][4]'s `slug` method.

 * [`singular`][5] and [`plural`][6]: Wraps the [`Inflector`][7] `singularize`
   and `pluralize` methods.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

[1]: https://twig.symfony.com/u
[2]: https://symfony.com/doc/current/components/string.html
[3]: https://twig.symfony.com/slug
[4]: https://symfony.com/doc/current/components/string.html#slugger
<<<<<<< HEAD
=======
[5]: https://twig.symfony.com/singular
[6]: https://twig.symfony.com/plural
[7]: https://symfony.com/doc/current/components/string.html#inflector
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
