<?php

class Router {
    public $routes = [];

    public function define($routes) {
        $this->routes = $routes;
    }

    public function parse($uri) {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        http_response_code(404);
        die('Keine Route für diese URI gefunden.');
    }
}