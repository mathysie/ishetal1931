<?php

declare(strict_types=1);

namespace app\controllers;

use lucifer\DateTime;
use mako\http\routing\Controller;

class Time extends Controller
{
    public function ViewTime(): string
    {
        $dateTime = new DateTime();

        return $this->view->render('time.time', ['tijd' => $dateTime]);
    }
}
