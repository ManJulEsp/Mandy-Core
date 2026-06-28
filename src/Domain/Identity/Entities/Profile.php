<?php
namespace MandyCore\Domain\Identity\Entities;

final class Profile
{
    public function __construct(
        private int $id,
        private int $userId,
        private string $type,
        private bool $isActive = true
    ) {}
}
