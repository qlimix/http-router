<?php declare(strict_types=1);

namespace Qlimix\Http\Router\Locator;

use Psr\Http\Server\RequestHandlerInterface;
use Qlimix\Http\Router\Locator\Exception\LocatorException;

interface LocatorInterface
{
    /**
     * @throws LocatorException
     */
    public function locate(string $route): RequestHandlerInterface;
}
