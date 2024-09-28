<?php

class Controller {
    protected $view;

    public function __construct() {
        $this->view = new View();
    }

    public function loadModel($model) {
        require_once 'models/' . $model . '.php';
        return new $model();
    }
}
?>
