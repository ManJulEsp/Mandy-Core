<?php
namespace MandyCore\Contracts;

interface TutorRepositoryInterface
{
    public function search(array $filters): array;
    public function findById(int $id);
}
