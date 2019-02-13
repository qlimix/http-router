<?php declare(strict_types=1);

namespace Qlimix\Router;

use Psr\Http\Message\ServerRequestInterface;

final class RouteRequestHandler
{
    /** @var mixed */
    private $handler;

    /** @var ServerRequestInterface */
    private $request;

    public function __construct($handler, ServerRequestInterface $request)
    {
        $this->handler = $handler;
        $this->request = $request;
    }

    /**
     * @return mixed
     */
    public function getHandler()
    {
        return $this->handler;
    }

    /**
     * @return ServerRequestInterface
     */
    public function getRequest(): ServerRequestInterface
    {
        return $this->request;
    }
}
