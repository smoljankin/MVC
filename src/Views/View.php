<?php

namespace App\Views;

class View {
    public function render($view, $data = []) {
        extract($data);

        require_once __DIR__ . '/' . $view . '.php';
    }
}
