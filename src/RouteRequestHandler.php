<?php declare(strict_types=1);

namespace Qlimix\Router;

use Psr\Http\Message\ServerRequestInterface;

final class RouteRequestHandler
{
    /** @var ServerRequestInterface */
    private $handler;

    /** @var ServerRequestInterface */
    private $request;

    public function __construct(ServerRequestInterface $handler, ServerRequestInterface $request)
    {
        $this->handler = $handler;
        $this->request = $request;
    }

    public function getHandler(): ServerRequestInterface
    {
        return $this->handler;
    }

    public function getRequest(): ServerRequestInterface
    {
        return $this->request;
    }
}
