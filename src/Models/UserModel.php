<?php

namespace App\Models;
class UserModel {
    private $container = [];

    public function __construct() {
        session_start();
        if (!isset($_SESSION['container'])) {
            $_SESSION['container'] = [];
        }
        $this->container = &$_SESSION['container'];
    }

    public function addUser($user) {
        $this->container[] = $user;
    }

    public function getUsers() {
        return $this->container;
    }

    public function searchUsers($query) {
        $result = [];
        foreach ($this->container as $user) {
            if (strpos(strtolower($user['name']), strtolower($query)) !== false) {
                $result[] = $user;
            }
        }
        return $result;
    }
}