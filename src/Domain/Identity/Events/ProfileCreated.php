<?php
namespace MandyCore\Domain\Identity\Events;

final class ProfileCreated
{
    public function __construct(public readonly int $profileId) {}
}
