<?php

declare(strict_types=1);

namespace lucifer;

use mako\http\exceptions\HttpException;

class UnderConstructionException extends HttpException
{
    public function __construct(?Throwable $previous = null)
    {
        parent::__construct(503, 'Website is under construction.');
    }
}
