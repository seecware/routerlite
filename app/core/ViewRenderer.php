 <?php

class ViewRenderer
{
    public function render(string $viewName, string $viewPath, array $data = []): string
    {
        extract($data); // Convierte los arrays asociativos en variables sueltas. 
        ob_start();
        include __DIR__ . '/../views/layouts/main.php';
        return ob_get_clean();
    }
}
