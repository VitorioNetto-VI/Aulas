<?php
require_once '../config/database.php';
require_once '../app/controllers/UserController.php';
require_once '../app/controllers/HoobController.php';

$action = $_GET['action'] ?? 'register';

switch ($action) {
    case 'register':
        (new UserController())->register();
        break;
    case 'saveUser':
        (new UserController())->saveUser();
        break;
    case 'rate':
        (new HoobController())->rate();
        break;
    case 'saveRatings':
        (new HoobController())->saveRatings();
        break;
    case 'result':
        (new HoobController())->showResult();
        break;
}