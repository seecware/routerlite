<?php

abstract class BaseController
{
    protected ViewRenderer $renderer;
    protected string $viewName;
    protected string $viewPath;
    protected string $title;

    public function __construct(string $viewName, string $viewPath, ViewRenderer $renderer, string $title)
    {
        $this->renderer = $renderer;
        $this->viewName = $viewName;
        $this->viewPath = $viewPath;
        $this->title = $title;
    }

    public function index(): void
    {
        $html = $this->renderer->render($this->viewName, $this->viewPath, ['title' => $this->title]);
        $this->renderView($html);
    }

    protected function renderView(string $html): void
    {
        echo $html;
    }
}