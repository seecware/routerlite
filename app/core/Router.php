<?php

require_once __DIR__ . '/Route.php';

class Router {
    protected array $routes = [];

    public function get(string $path, string $controller, string $action): void {
        $this->addRoute('GET', $path, $controller, $action);
    }

    public function post(string $path, string $controller, string $action): void {
        $this->addRoute('POST', $path, $controller, $action);
    }

    public function addRoute(string $method, string $path, string $controller, string $action): void {
        $this->routes[] = new Route($method, $path, $controller, $action);
    }

    public function resolve(string $method, string $uri): void {
        $path = rtrim(parse_url($uri, PHP_URL_PATH), '/') ?: '/';

        foreach ($this->routes as $route) {
            if ($route->method === $method && $route->path === $path) {
                if (!class_exists($route->controller)) {
                    abort(500, "Controller {$route->controller} not found.");
                }

                $controller = new $route->controller();

                if (!method_exists($controller, $route->action)) {
                    abort(500, "Method {$route->action} not found in {$route->controller}.");
                }

                call_user_func([$controller, $route->action]);

                return;
            }
        }

        abort(404, "Route $method $path not found.");
    }
}
