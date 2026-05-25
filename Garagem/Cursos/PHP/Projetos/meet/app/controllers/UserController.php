<?php
require_once '../app/models/User.php';

class UserController {
    public function register() {
        require '../app/views/register.php';
    }

    public function saveUser() {
        $user = new User();
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];

        $userId = $user->save();
        header("Location: index.php?action=rate&user_id=$userId");
    }
}