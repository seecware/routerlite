<?php

abstract class BaseController
{
    protected ViewRenderer $renderer;
    protected string $viewName;
    protected string $viewPath;

    public function __construct(string $viewName, string $viewPath, ViewRenderer $renderer)
    {
        $this->renderer = $renderer;
        $this->viewName = $viewName;
        $this->viewPath = $viewPath;
    }

    public function index(?array $data): void
    {
        $html = $this->renderer->render($this->viewName, $this->viewPath, $data);
        $this->renderView($html);
    }

    protected function renderView(string $html): void
    {
        echo $html;
    }
}
