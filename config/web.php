<?php

$router->get('/', 'HomeController', 'index');
$router->post('/login', 'AuthController', 'login');
$router->get('/products', 'ProductController', 'index');
$router-> get('/products/{bcode}', 'ProductController', 'searchProduct');
