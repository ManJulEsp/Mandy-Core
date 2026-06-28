<?php
namespace MandyCore\Domain\Identity\ValueObjects;

final readonly class Email
{
    public function __construct(private string $value) {}

    public function value(): string
    {
        return strtolower($this->value);
    }
}
