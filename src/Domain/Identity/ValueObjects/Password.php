<?php
namespace MandyCore\Domain\Identity\ValueObjects;

final readonly class Password
{
    public function __construct(private string $hash) {}

    public function hash(): string
    {
        return $this->hash;
    }
}
