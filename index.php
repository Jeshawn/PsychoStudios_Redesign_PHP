<?php
// Get the path from the URL
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
error_log("The Path:". $path);
switch ($path) {
    case '/':
        require __DIR__ . '/views/home.php';
        break;
    // case '/about':
    //     require __DIR__ . '/views/about.php';
    //     break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}
