<?php

require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../core/ViewRenderer.php';

class RenderErrors extends BaseController
{
    public function __construct()
    {
        parent::__construct('error', __DIR__ . '/../views/errors/', New ViewRenderer, 'Error!');
    }
}