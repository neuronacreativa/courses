<?php

namespace DIFFERENT_SUBSTITUTES_SECOND_APPROACH;

class SimpleRouter implements RouterInterface
{
    public function getRoutes() : \RouteCollection
    {
        $routes = new RouteCollection();
        // add objects to $routes
        $routes->add("This is a Simple Route item");
        return new \RouteCollection();
    }
}