<?php
namespace MandyCore\Application\Identity\Services;

final class PasswordResetService
{
    public function execute(string $email): void
    {
        // Generate reset token
        // Dispatch PasswordResetRequested
    }
}
