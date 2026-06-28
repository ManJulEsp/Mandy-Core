<?php
namespace MandyCore\Contracts;

interface RepositoryInterface
{
    public function find(int|string $id);
    public function save(object $entity): void;
    public function delete(int|string $id): bool;
}
