<?php

session_start();

// define('APP_BASE', "http://localhost:8080/mvc/"); <-- Alex' config
define('APP_BASE', "http://localhost:8888/php/selciato_shop/"); // <-- muss an euer Wurzelverzeichnis angepasst werden

$debug = true;
if ($debug === true) {
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 'On');
}

// http://localhost:8080/mvc/index.php?controller=products&action=show&uid=12
// http://localhost:8080/mvc/products/show/12 --> index.php?path=/products/show/12
// http://localhost:8080/mvc/admin/index.php NICHT http://localhost:8080/mvc/index.php?path=/admin/index.php

/**
 * Routes importieren
 */
require_once 'routes.php';

/**
 * welchen Controller brauchen wir?
 */
$path = "/";
if (isset($_GET['path'])) {
    $path = "/" . $_GET['path'];    
}

$controller = '';
$action = '';
$params = [];

foreach ($routes as $route => $controllerDotAction) {
    if ($path === $route) { // ist die Route 1:1 im routes.php file?
        $controller = explode('.', $controllerDotAction)[0];
        $action = explode('.', $controllerDotAction)[1];
        break;
    } elseif (strpos($route, ':') !== false) { // hat die aktuelle route einen parameter?

        // Regex bauen
        $pathFromRoutes = str_replace('/', '\/', $route);
        $pattern = preg_replace('/\:[a-zA-z0-9]+/', '([^\/\s]+)\/?.*', $pathFromRoutes);
        $pattern = "/{$pattern}/";
        $matches = [];

        // ist die Route vielleicht mit einer Regex findbar?
        if (preg_match($pattern, $path, $matches) === 1) { // wenn regex zutrifft
            $controller = explode('.', $controllerDotAction)[0];
            $action = explode('.', $controllerDotAction)[1];

            $params = array_slice($matches, 1);
            break;
        }
    }
}

if ($controller === '') {
    die("Route not found!!");
    // oder: require_once 'errors/404.php';
}

/**
 * Autoloader
 */
spl_autoload_register(function ($className) {
    // Controller file muss genauso heißen wie die Controller-Klasse!!
    @include_once __DIR__ . "/Controllers/{$className}.php";
    @include_once __DIR__ . "/Models/{$className}.php";
    @include_once __DIR__ . "/Util/{$className}.php";

    if (!class_exists($className)) {
        die("Class not found!!");
    }
});

/**
 * gewünschte Controller/Action mit Parametern aufrufen
 */
$currentController = new $controller();
//$currentController->$action(extract($params));
call_user_func_array([$currentController, $action], $params);

