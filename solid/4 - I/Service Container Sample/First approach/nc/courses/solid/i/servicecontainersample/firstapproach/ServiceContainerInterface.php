<?php


namespace nc\courses\solid\i\servicecontainersample\firstapproach;

interface ServiceContainerInterface
{
    public function get(string $name);
}