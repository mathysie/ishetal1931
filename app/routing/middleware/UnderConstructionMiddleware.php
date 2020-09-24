<?php

declare(strict_types=1);

namespace app\routing\middleware;

use Closure;
use lucifer\UnderConstructionException;
use mako\config\Config;
use mako\http\Request;
use mako\http\Response;
use mako\http\routing\middleware\MiddlewareInterface;
use mako\view\ViewFactory;

class UnderConstructionMiddleware implements MiddlewareInterface
{
    protected Config $config;
    protected ViewFactory $viewFactory;

    public function __construct(Config $config, ViewFactory $viewFactory)
    {
        $this->config = $config;
        $this->viewFactory = $viewFactory;
    }

    public function execute(Request $request, Response $response, Closure $next): Response
    {
        if (!$this->config->get('ishetal1931.in_production')) {
            throw new UnderConstructionException();
        }

        return $next($request, $response);
    }
}
