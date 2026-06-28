<?php
namespace MandyCore\Contracts;

interface SchedulingServiceInterface
{
    public function generateTimeSlots(int $tutorId): array;
}
