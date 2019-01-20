<?php declare(strict_types=1);

namespace Qlimix\Router;

use Psr\Http\Message\RequestInterface;
use Qlimix\Router\Exception\RouteNotFoundException;
use Qlimix\Router\Exception\RouterException;

interface RouterInterface
{
    /**
     * @throws RouteNotFoundException
     * @throws RouterException
     */
    public function route(RequestInterface $request): RoutableRequest;
}