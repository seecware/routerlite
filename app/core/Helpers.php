<?php

function abort(int $code, string $message = ''): void {
    //http_response_code($code);
    //echo "<h1>Error {$code}</h1><p>{$message}</p>";
    $_SESSION['error'] = [
        'code' => $code,
        'message' => $message
    ];

    header('Location: ' . '/error');
    
    exit;
}
