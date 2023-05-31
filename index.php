<?php

$requestUri = $_SERVER['REQUEST_URI'];
$basePath = '/';  // Ruta base de tu aplicación

// Eliminar cualquier query string de la URL
$requestUri = strtok($requestUri, '?');

// Eliminar la ruta base de la URL
if (strpos($requestUri, $basePath) === 0) {
    $requestUri = substr($requestUri, strlen($basePath));
}

// Procesar la URL y determinar la acción correspondiente
switch ($requestUri) {
    case '':
        // Acción para la página de inicio
        require 'home.php';
        break;
    case '/about':
        // Acción para la página "about"
        require 'about.php';
        break;
    case '/testimonial':
        // Acción para la página "contact"
        require 'testimonial.php';
        break;
    default:
        // Acción para cualquier otra ruta no especificada
        require '404.php';
        break;
}