<?php

declare(strict_types=1);

use mako\http\exceptions\HttpException;

// This file gets included at the end of the application boot sequence

define('MAKO_APPLICATION_PARENT_PATH', dirname(__DIR__));
define('WEBROOT', MAKO_APPLICATION_PARENT_PATH . '/public');

$errorHandler = $container->get('errorHandler');

$errorHandler->handle(HttpException::class, function (HttpException $ex) use ($container) {
    switch ($ex->getCode()) {
        case 404:
            echo $container->get('view')->render('_error.404');
            break;
        case 503:
            echo $container->get('view')->render('_error.503');
            break;
        default:
            echo $container->get('view')->render('_error.default', ['error' => $ex->getCode()]);
    }

    return true;
});
