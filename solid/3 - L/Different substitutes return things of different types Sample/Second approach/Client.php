<?php

namespace DIFFERENT_SUBSTITUTES_SECOND_APPROACH;

// $router implements RouterInterface, so $routes is iterable
$router = new AdvancedRouter();
$routes = $router->getRoutes();
foreach ($routes as $route) {
    // $route is a Route object
}

// All nice! ... But some day ...

if (count($routes) > 10) {
    // ...
}