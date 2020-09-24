<?php

declare(strict_types=1);

use app\routing\middleware\UnderConstructionMiddleware;
use mako\http\routing\middleware\ContentSecurityPolicy;
use mako\http\routing\middleware\SecurityHeaders;
use mako\validator\input\http\routing\middleware\InputValidation;

/* @var \mako\http\routing\Dispatcher $dispatcher */

//$dispatcher->registerMiddleware('content_security_policy', ContentSecurityPolicy::class);
//$dispatcher->registerMiddleware('security_headers', SecurityHeaders::class);
//$dispatcher->registerMiddleware('input_validation', InputValidation::class);

$dispatcher->registerMiddleware('under_construction', UnderConstructionMiddleware::class);
