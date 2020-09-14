<?php

declare(strict_types=1);

namespace app\controllers;

use lucifer\DateTime;
use lucifer\FileIterator;
use mako\http\routing\Controller;

class Time extends Controller
{
    public function ViewTime(?string $test = null): string
    {
        $dateTime = new DateTime();
        if (!is_null($test)) {
            $dateTime->setTime(19, 31);
        }

        $picture = $this->GetRandomPicture($dateTime->Is1931());
        $params = ['tijd' => $dateTime, 'picture' => $picture];

        if ($dateTime->Is1931()) {
            return $this->view->render('time.ja', $params);
        } else {
            return $this->view->render('time.nee', $params);
        }
    }

    protected function GetRandomPicture(bool $is1931): string
    {
        $path = WEBROOT . '/assets/img';
        $path .= $is1931 ? '/ja' : '/nee';

        $fileIterator = new FileIterator($path);
        $location = random_int(0, iterator_count($fileIterator) - 1);
        $fileIterator->seek($location);

        return $fileIterator->key();
    }
}
