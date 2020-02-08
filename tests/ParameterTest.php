<?php declare(strict_types=1);

namespace Qlimix\Tests\Http\Router;

use PHPUnit\Framework\TestCase;
use Qlimix\Http\Router\Parameter;

final class ParameterTest extends TestCase
{
    public function testShouldParameter(): void
    {
        $key = 'key';
        $value = 'value';
        $parameter = new Parameter($key, $value);

        $this->assertSame($key, $parameter->getKey());
        $this->assertSame($value, $parameter->getValue());
    }
}
