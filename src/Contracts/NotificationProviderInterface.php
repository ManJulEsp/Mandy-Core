<?php
namespace MandyCore\Contracts;

interface NotificationProviderInterface
{
    public function send(array $message): bool;
}
