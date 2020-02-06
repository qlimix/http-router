<?php declare(strict_types=1);

namespace Qlimix\Tests\Http\Router;

use PHPUnit\Framework\TestCase;
use Qlimix\Http\Router\Parameter;
use Qlimix\Http\Router\Route;

final class RouteTest extends TestCase
{
    public function testShouldRoute(): void
    {
        $handler = 'handler';
        $parameters = [
            new Parameter('key', 'value'),
        ];

        $route = new Route($handler, $parameters);

        $this->assertSame($handler, $route->getHandler());
        $this->assertSame($parameters, $route->getParameters());
    }
}
