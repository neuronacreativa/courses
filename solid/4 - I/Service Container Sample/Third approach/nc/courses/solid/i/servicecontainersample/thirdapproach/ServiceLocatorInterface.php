<?php

interface ServiceLocatorInterface
{
    public function get(string $name): object;
}