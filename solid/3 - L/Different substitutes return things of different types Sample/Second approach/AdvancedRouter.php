<?php

namespace DIFFERENT_SUBSTITUTES_SECOND_APPROACH;

class AdvancedRouter implements RouterInterface
{
    public function getRoutes() : \RouteCollection
    {
        $routes = new RouteCollection();
        // add objects to $routes
        $routes->add("This is an Advanced Route item");
        return new \RouteCollection();
    }
}