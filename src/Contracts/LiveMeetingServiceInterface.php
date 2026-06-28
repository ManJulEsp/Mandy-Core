<?php
namespace MandyCore\Contracts;

interface LiveMeetingServiceInterface
{
    public function createMeeting(array $booking): array;
}
