<?php

$router->get('/products', 'ProductController', 'index');
$router->get('/error', 'RenderErrors', 'index');
