<?php

interface MutableServiceContainerInterface
{
    public function set(string $name, callable $factory): void;
}
