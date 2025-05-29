<?php

class Route {
    public string $method;
    public string $path;
    public string $controller;
    public string $action;

    public function __construct(string $method, string $path, string $controller, string $action) {
        $this->method = strtoupper($method);
        $this->path = rtrim($path, '/') ?: '/';
        $this->controller = $controller;
        $this->action = $action;
    }
}
