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
    '/gerant/marquerAbandon' => [
        'controller' => 'gerant',
        'action' => 'marquerAbandon',
    ],
    '/gerant/apprenantActif' => [
        'controller' => 'gerant',
        'action' => 'apprenantActif',
    ],
    '/apprenant/dashboard' => [
        'controller' => 'apprenant',
        'action' => 'dashboard',
    ],
    
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');

if ($uri === '') {
    $uri = '/login';
}

startSession();

$publicRoutes = [
    '/login',
    '/inscription'
];

$use = getData("userConnect");
if (!in_array($uri, $publicRoutes) && !isset($use)) {
    header("Location: /login");
    exit;
}


if (isset($route[$uri])) {
    $controller = $route[$uri]['controller'];
    $action = $route[$uri]['action'];
    $contro = dirname(__DIR__) . "/controllers/$controller.controller.php";
    if (file_exists($contro)) {
        require_once(dirname(__DIR__)."/controllers/controller.php");
        require_once $contro;
        if (function_exists($action)) {
            $action();
        } else {
            echo "fonction introuvable";
        }
    } else {
        echo "controller introuvable";
    }
} else {
    http_response_code(404);
    echo "page introuvable";
}
