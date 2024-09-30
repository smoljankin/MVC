<?php

require_once './vendor/autoload.php';

use App\Controllers\UserController;

$action = 'form';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$controller = new UserController();
if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Action $action не знайдено";
}
