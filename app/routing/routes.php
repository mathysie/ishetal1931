<?php

declare(strict_types=1);

use mako\http\routing\Routes;

/* @var \mako\http\routing\Routes $routes */

$routes->group(
    [
        'namespace'  => 'app\controllers',
        'middleware' => ['under_construction'],
        ],
    function (Routes $routes): void {
        $routes->get('/', 'Time::ViewTime');
        $routes->get('/test/{test}?', 'Time::ViewTime');

        $routes->post('/webpush', 'WebPush::CreateSubscription', 'webpush.create');
    }
);
