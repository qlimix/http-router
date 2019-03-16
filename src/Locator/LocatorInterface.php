<?php declare(strict_types=1);

namespace Qlimix\Router\Locator;

use Qlimix\Router\Locator\Exception\LocatorException;

interface LocatorInterface
{
    /**
     * @return mixed
     *
     * @throws LocatorException
     */
    public function locate(string $route);
}
