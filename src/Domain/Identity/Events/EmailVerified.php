<?php
namespace MandyCore\Domain\Identity\Events;

final class EmailVerified
{
    public function __construct(public readonly int $userId) {}
}
