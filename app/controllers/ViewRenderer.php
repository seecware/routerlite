 <?php

class ViewRenderer
{
    public function render(string $viewName, string $viewPath, array $data = []): string
    {
        extract($data);
        ob_start();
        include __DIR__ . '/../views/partials/layout.php';
        return ob_get_clean();
    }
}
