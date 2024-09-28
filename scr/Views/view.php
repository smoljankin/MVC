<?php

class View {
    public function render($view, $data = []) {
        extract($data);
        require_once 'Views/' . $view . '.php';
    }
}
?>
