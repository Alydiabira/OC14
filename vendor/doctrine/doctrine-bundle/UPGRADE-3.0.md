UPGRADE FROM 2.x to 3.0
=======================

Configuration
-------------

<<<<<<< HEAD
### Controller resolver auto mapping default configuration changed

The default value of `doctrine.orm.controller_resolver.auto_mapping` has changed from `true` to `false`.

Auto mapping uses any route parameter that matches with a field name of the Entity to resolve as criteria in a find by query.

If you were relying on this functionality, you will need to explicitly configure this now.
=======
### Controller resolver auto mapping can no longer be configured

The `doctrine.orm.controller_resolver.auto_mapping` option now only accepts `false` as value, to disallow the usage of the controller resolver auto mapping feature by default. The configuration option will be fully removed in 4.0.

Auto mapping used any route parameter that matches with a field name of the Entity to resolve as criteria in a find by query. This method has been deprecated in Symfony 7.1 and is replaced with mapped route parameters.

If you were relying on this functionality, you will need to update your code to use explicit mapped route parameters instead.
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

Types
-----

 * The `commented` configuration option for types is no longer supported and
 deprecated.
