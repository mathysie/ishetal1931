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

        $filesystemIterator = new \FilesystemIterator($path, \FilesystemIterator::KEY_AS_FILENAME | \FilesystemIterator::SKIP_DOTS);
        $location = random_int(0, iterator_count($filesystemIterator));
        $filesystemIterator->rewind();
        for ($i = 0; $i < $location; ++$i) {
            $filesystemIterator->next();
        }

        return $filesystemIterator->key();
    }
}
