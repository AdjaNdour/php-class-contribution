<?php

$route = [
    '/login' => [
        'controller' => 'authentification',
        'action' => 'login',
    ],
    '/logout' => [
        'controller' => 'authentification',
        'action' => 'logout',
    ],
    '/inscription' => [
        'controller' => 'authentification',
        'action' => 'inscription',
    ],
    '/gerant/dashboard' => [
        'controller' => 'gerant',
        'action' => 'dashboard',
    ],
    '/gerant/apprenants' => [
        'controller' => 'gerant',
        'action' => 'apprenants',
    ],
    '/apprenant/dashboard' => [
        'controller' => 'apprenant',
        'action' => 'dashboard',
    ]
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($route[$uri])) {
    $controller = $route[$uri]['controller'];
    $action = $route[$uri]['action'];
    require_once dirname(__DIR__) . "/controllers/$controller.controller.php";
    $action();
} else {
    http_response_code(404);
    echo "Page introuvable";
}