<?php
namespace MandyCore\Domain\Identity\Entities;

use MandyCore\Domain\Identity\Enums\UserStatus;
use MandyCore\Domain\Identity\ValueObjects\Email;

final class User
{
    public function __construct(
        private int $id,
        private Email $email,
        private UserStatus $status = UserStatus::PendingVerification
    ) {}

    public function activate(): void
    {
        $this->status = UserStatus::Active;
    }

    public function suspend(): void
    {
        $this->status = UserStatus::Suspended;
    }
}
