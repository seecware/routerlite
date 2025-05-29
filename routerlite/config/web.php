<?php

$router->get('/', 'HomeController', 'index');
$router->post('/login', 'AuthController', 'login');
$router->get('/productos', 'ProductController', 'list');
