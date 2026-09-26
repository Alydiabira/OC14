<?php

use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

<<<<<<< HEAD
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');
=======
if (method_exists(Dotenv::class, 'bootEnv')) {
    (new Dotenv())->bootEnv(dirname(__DIR__).'/.env');
}
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

if ($_SERVER['APP_DEBUG']) {
    umask(0000);
}
