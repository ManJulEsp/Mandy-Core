<?php
namespace MandyCore\Domain\Identity\Events;

final class PasswordChanged
{
    public function __construct(public readonly int $userId) {}
}
