<?php
namespace MandyCore\Contracts;

interface BookingServiceInterface
{
    public function createBooking(array $data): array;
    public function cancelBooking(int $bookingId): bool;
}
