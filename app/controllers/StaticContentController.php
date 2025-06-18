<?php

require_once __DIR__ . "/BaseController.php";
require_once __DIR__ . "/../core/ViewRenderer.php";

Class StaticContentController extends BaseController {
    public function __construct() {
        parent::__construct('database', __DIR__ . '/../../config/', New ViewRenderer, 'Products');
    }
}