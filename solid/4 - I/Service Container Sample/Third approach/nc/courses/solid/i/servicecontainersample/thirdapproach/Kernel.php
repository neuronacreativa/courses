<?php


namespace nc\courses\solid\i\servicecontainersample\thirdapproach;


class Kernel
{
    public function initializeServiceContainer(
        MutableServiceContainerInterface $serviceContainer
    ) {
        $serviceContainer->set(...);
    }
}