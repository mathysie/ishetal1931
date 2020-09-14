<?php

declare(strict_types=1);

namespace lucifer;

class DateTime extends \DateTime
{
    public function __construct(string $datetime = 'now')
    {
        parent::__construct($datetime, new \DateTimeZone('Europe/Amsterdam'));
    }

    public function __toString(): string
    {
        return $this->format('G:i');
    }
}
