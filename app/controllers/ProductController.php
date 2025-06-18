<?php

require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../core/ViewRenderer.php';
require_once __DIR__ . '/../../config/database.php';

class ProductController extends BaseController
{
    public function __construct()
    {
        parent::__construct('products', __DIR__ . '/../views/products/', New ViewRenderer, 'Productssss');
    }
}
