<?php

require_once 'Controllers/Controller.php';
require_once 'Views/View.php';

$controllerName = 'UserController';
$action = 'form';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$controllerFile = 'Controllers/' . $controllerName . '.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $controllerName();
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        echo "Action $action не знайдено";
    }
} else {
    echo "Controller $controllerName не знайдено";
}
?>