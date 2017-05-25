<?php
session_start();
include('controller/user_controller.php');

$logout = new UserController();
$logout->logout();

?>