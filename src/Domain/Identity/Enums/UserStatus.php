<?php
namespace MandyCore\Domain\Identity\Enums;

enum UserStatus: string
{
    case PendingVerification = 'pending_verification';
    case Active = 'active';
    case Suspended = 'suspended';
    case Deleted = 'deleted';
}
