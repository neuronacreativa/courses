<?php

class SimpleRouter implements RouterInterface
{
    public function getRoutes()
    {
        $routes = [];
        // add Route objects to $routes
        $routes[] = "This is a route";
        return $routes;
    }
}