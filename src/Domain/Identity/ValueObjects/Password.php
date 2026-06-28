<?php
namespace MandyCore\Domain\Identity\ValueObjects;

final readonly class Password
{
    public function __construct(private string $plainText)
    {
        if (strlen($plainText) < 8) {
            throw new \InvalidArgumentException('Password must be at least 8 characters.');
        }
    }

    public function value(): string
    {
        return $this->plainText;
    }
}
