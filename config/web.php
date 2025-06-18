<?php

$router->get('/products', 'ProductController', 'Index', ["title" => "Products"]); // Cambiar a la verga! Rompe todo ajjajajaj
$router->get('/error', 'RenderErrors', 'index', []);
$router->get('/database_error', 'RenderErrors', 'index', []);
