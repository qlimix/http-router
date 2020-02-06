<?php declare(strict_types=1);

namespace Qlimix\Http\Router;

use Psr\Http\Message\ServerRequestInterface;
use Qlimix\Http\Router\Exception\RouteNotFoundException;
use Qlimix\Http\Router\Exception\RouterException;

interface HttpRouterInterface
{
    /**
     * @throws RouteNotFoundException
     * @throws RouterException
     */
    public function route(ServerRequestInterface $request): Route;
}
