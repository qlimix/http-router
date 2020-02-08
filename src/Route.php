<?php declare(strict_types=1);

namespace Qlimix\Http\Router;

final class Route
{
    private string $handler;

    /** @var Parameter[] */
    private array $parameters;

    /**
     * @param Parameter[] $parameters
     */
    public function __construct(string $handler, array $parameters)
    {
        $this->handler = $handler;
        $this->parameters = $parameters;
    }

    public function getHandler(): string
    {
        return $this->handler;
    }

    /**
     * @return Parameter[]
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
}
