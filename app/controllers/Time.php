<?php

declare(strict_types=1);

namespace app\controllers;

use mako\http\routing\Controller;

class Time extends Controller
{
    public function welcome(): string
    {
        return $this->view->render('welcome');
    }
}
