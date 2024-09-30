<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends Controller {
    private $userModel;

    public function __construct() {
        parent::__construct();
        $this->userModel = new UserModel();
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
            $this->userModel->addUser($user);
        }
        header('Location: index.php?action=form');
    }

    public function search() {
        $result = [];
        if (!empty($_GET['query'])) {
            $result = $this->userModel->searchUsers($_GET['query']);
        }
        $this->view->render('user_search', ['result' => $result]);
    }
}