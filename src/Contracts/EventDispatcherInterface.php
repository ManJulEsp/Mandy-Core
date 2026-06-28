<?php
namespace MandyCore\Contracts;

interface EventDispatcherInterface
{
    public function dispatch(object $event): void;
}
