<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

require_once __DIR__ . '/../app/core/Router.php';
require_once __DIR__ . '/../app/core/Helpers.php';

// Cargar controladores manualmente o usar autoload (recomendado)
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/ProductController.php';

$router = new Router();
require_once __DIR__ . '/../app/config/web.php';

$router->resolve($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
