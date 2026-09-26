Symfony Polyfill / Intl: ICU
============================

This package provides fallback implementations when the
[Intl](https://php.net/intl) extension is not installed.
It is limited to the "en" locale and to:

- [`intl_is_failure()`](https://php.net/intl-is-failure)
- [`intl_get_error_code()`](https://php.net/intl-get-error-code)
- [`intl_get_error_message()`](https://php.net/intl-get-error-message)
- [`intl_error_name()`](https://php.net/intl-error-name)
- [`Collator`](https://php.net/Collator)
- [`NumberFormatter`](https://php.net/NumberFormatter)
- [`Locale`](https://php.net/Locale)
- [`IntlDateFormatter`](https://php.net/IntlDateFormatter)
<<<<<<< HEAD
=======
- [`IntlListFormatter`](https://php.net/IntlListFormatter)
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

More information can be found in the
[main Polyfill README](https://github.com/symfony/polyfill/blob/main/README.md).

License
=======

This library is released under the [MIT license](LICENSE).
