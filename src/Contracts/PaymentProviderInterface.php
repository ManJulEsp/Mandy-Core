<?php
namespace MandyCore\Contracts;

interface PaymentProviderInterface
{
    public function charge(array $data): array;
    public function refund(string $paymentId): bool;
}
