<?php
namespace MandyCore\Contracts;

interface MeetingProviderInterface
{
    public function createMeeting(array $data): array;
    public function updateMeeting(string $meetingId, array $data): array;
    public function cancelMeeting(string $meetingId): bool;
}
