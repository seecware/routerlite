<?php

require_once 'BaseController.php';
require_once 'ViewRenderer.php';

class ProductController extends BaseController
{
    public function __construct()
    {
        parent::__construct('products', __DIR__ . '/../views/products/', New ViewRenderer);
    }
}