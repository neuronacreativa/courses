<?php

namespace DIFFERENT_SUBSTITUTES_SECOND_APPROACH;

class AdvancedRouter implements RouterInterface
{
    public function getRoutes()
    {
        // We have to use types compatible with Iterator and Countable interfaces
        $routeCollection = new RouteCollectionInterface();
        // Doing things with $routeCollection
        return $routeCollection;
    }
}