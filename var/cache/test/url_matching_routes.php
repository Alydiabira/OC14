<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/auth/logout' => [[['_route' => '_logout_main'], null, null, null, false, false, null]],
        '/auth/login' => [[['_route' => 'auth_login', '_controller' => 'App\\Controller\\AuthController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/auth/register' => [[['_route' => 'auth_register', '_controller' => 'App\\Controller\\AuthController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'video_games_list', '_controller' => 'App\\Controller\\VideoGameController::list'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/([^/]++)(*:16)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        16 => [
            [['_route' => 'video_games_show', '_controller' => 'App\\Controller\\VideoGameController::show'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
