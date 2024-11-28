<?php
require_once 'controllers/UserController.php';

$controller = new UserController();

if ($_GET['action'] === 'register') {
    $controller->register();
} elseif ($_GET['action'] === 'login') {
    $controller->login();
}
?>
