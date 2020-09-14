<?php

declare(strict_types=1);

use mako\http\routing\Routes;

/* @var \mako\http\routing\Routes $routes */

$routes->group(
    ['namespace' => 'app\controllers'],
    function (Routes $routes): void {
        $routes->get('/', 'Time::ViewTime');
        $routes->get('/{test}', 'Time::ViewTime');
    }
);
