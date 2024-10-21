<?php

    $basePath = '/atividades/CRUD_PHP/';
    $uri = str_replace($basePath, '', $_SERVER['REQUEST_URI']);

    $uri = trim($uri, '/');

    switch ($uri) {
        case 'home':
            include 'src/views/home.php';
            break;
        case 'login':
            include 'src/views/login.php';
            break;
        case 'register':
            include 'src/views/register.php';
            break;
        case 'catalog':
            include 'src/views/catalog.php';
            break;
        case 'about':
            include 'src/views/about.php';
            break;
        default:
            http_response_code(404);
            echo 'Página não encontrada!';
            break;
    }
?>