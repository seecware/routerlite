<?php

require_once __DIR__ . '/../app/core/Helpers.php';
require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/../app/controllers/ProductController.php';
require_once __DIR__ . '/../app/controllers/RenderErrors.php';



// Se crea la instancia de la clase Router.
$router = new Router();

// We bring the defined routes
require_once __DIR__ . '/../config/web.php';
$router->resolve($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
