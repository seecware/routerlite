<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title><?php echo $title; ?></title>
</head>
<body>
    <?php include_once __DIR__ . '/../partials/header.php'; ?>
    <main class="min-h-screen">
        <?php include_once $viewPath . $viewName . '.php'; ?>
    </main>
    <?php include_once __DIR__ . '/../partials/footer.php'; ?>

</body>
</html>
