<?php
$url = $_SERVER['REQUEST_URI'];
$prefix = "/thirdsprint";

switch ($url) {
    case $prefix . '/' :
        require __DIR__ . '/src/views/projects.php';
        break;
    case $prefix . '' :
        require __DIR__ . '/src/views/projects.php';
        break;
    case $prefix . '/projects' :
        require __DIR__ . '/src/views/projects.php';
        break;
    case $prefix . '/employees' :
        require __DIR__ . '/src/views/employees.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/src/views/404.php';
        break;
}
?>