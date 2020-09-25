<?php

declare(strict_types=1);

namespace app\routing\middleware;

use Closure;
use mako\http\Request;
use mako\http\Response;
use mako\http\routing\middleware\MiddlewareInterface;

class CSPMiddleware implements MiddlewareInterface
{
    public function execute(Request $request, Response $response, Closure $next): Response
    {
        $csp = "default-src 'self'; " .
                "object-src 'none'; " .
                "frame-src 'none'; ";

        $response->getHeaders()->add('Content-Security-Policy', $csp)
        ->add('X-Content-Security-Policy', $csp);

        return $next($request, $response);
    }
}
