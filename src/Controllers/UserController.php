<?php

namespace App\Controllers;

class UserController extends Controller {
    private $container = [];

    public function __construct() {
        parent::__construct();
        session_start();
        if (!isset($_SESSION['container'])) {
            $_SESSION['container'] = [];
        }
        $this->container = &$_SESSION['container'];
    }

    public function form() {
        $this->view->render('user_form');
    }

    public function save() {
        if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['dob'])) {
            $user = [
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'dob' => $_POST['dob']
            ];
            $this->container[] = $user;
        }
        header('Location: index.php?action=form');
    }

    public function search() {
        $result = [];
        if (!empty($_GET['query'])) {
            foreach ($this->container as $user) {
                if (strpos(strtolower($user['name']), strtolower($_GET['query'])) !== false) {
                    $result[] = $user;
                }
            }
        }
        $this->view->render('user_search', ['result' => $result]);
    }
}
