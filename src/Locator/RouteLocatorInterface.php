<?php declare(strict_types=1);

namespace Qlimix\Router\Locator;

use Psr\Http\Server\RequestHandlerInterface;
use Qlimix\Router\Locator\Exception\LocatorException;

interface RouteLocatorInterface
{
    /**
     * @throws LocatorException
     */
    public function locate(string $route): RequestHandlerInterface;
}
