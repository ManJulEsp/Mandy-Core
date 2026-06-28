<?php
namespace MandyCore\Contracts;

interface UserRepositoryInterface
{
    public function findByEmail(string $email);
    public function save(object $user): void;
}
