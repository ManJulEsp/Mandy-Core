<?php
namespace MandyCore\Domain\Shared\ValueObjects;

final readonly class Uuid
{
    public function __construct(private string $value)
    {
    }

    public function value(): string
    {
        return $this->value;
    }
}
