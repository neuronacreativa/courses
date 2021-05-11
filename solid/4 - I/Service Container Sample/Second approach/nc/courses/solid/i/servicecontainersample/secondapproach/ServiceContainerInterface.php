<?php


namespace nc\courses\solid\i\servicecontainersample\secondapproach;

interface ServiceContainerInterface
{
    public function get(string $name);
    public function set(string $name, callable $factory): void;
}