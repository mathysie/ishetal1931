<?php

declare(strict_types=1);

namespace app\controllers;

use lucifer\DateTime;
use mako\http\routing\Controller;

class Time extends Controller
{
    public function ViewTime(?string $test = null): string
    {
        $dateTime = new DateTime();
        if (!is_null($test)) {
            $dateTime->setTime(19, 31);
        }

        if ($dateTime->Is1931()) {
            return $this->view->render('time.ja', ['tijd' => $dateTime]);
        } else {
            return $this->view->render('time.nee', ['tijd' => $dateTime]);
        }
    }
}
