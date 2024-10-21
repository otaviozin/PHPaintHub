<?php

$basePath = '/atividades/CRUD_PHP/';
$uri = str_replace($basePath, '', $_SERVER['REQUEST_URI']);

$uri = trim($uri, '/');

switch ($uri) {
    case '':
        include 'src/views/home.php';
        break;
    case 'login':
        include 'src/views/login.php';
        break;
    default:
        http_response_code(404);
        echo 'Página não encontrada!';
        break;
}
?>