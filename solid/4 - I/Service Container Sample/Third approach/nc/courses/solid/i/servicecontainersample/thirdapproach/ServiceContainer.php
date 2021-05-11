<?php


namespace nc\courses\solid\i\servicecontainersample\thirdapproach;


class ServiceContainer implements \MutableServiceContainerInterface, \ServiceLocatorInterface
{

    public function set(string $name, callable $factory): void
    {
        // TODO: Implement set() method.
    }

    public function get(string $name): object
    {
        // TODO: Implement get() method.
    }
}