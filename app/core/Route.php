<?php

class Route {
    public string $method;
    public string $path;
    public string $controller;
    public string $action;
    public array $data;

    public function __construct(string $method, string $path, string $controller, string $action, ?array $data) {
        $this->method = strtoupper($method);
        $this->path = rtrim($path, '/') ?: '/';
        $this->controller = $controller;
        $this->action = $action;
        $this->data = $data;
    }
}
