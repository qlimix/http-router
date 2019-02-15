<?php declare(strict_types=1);

namespace Qlimix\Router;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class RouteRequestHandler
{
    /** @var RequestHandlerInterface */
    private $handler;

    /** @var ServerRequestInterface */
    private $request;

    public function __construct(RequestHandlerInterface $handler, ServerRequestInterface $request)
    {
        $this->handler = $handler;
        $this->request = $request;
    }

    public function getHandler(): RequestHandlerInterface
    {
        return $this->handler;
    }

    public function getRequest(): ServerRequestInterface
    {
        return $this->request;
    }
}
