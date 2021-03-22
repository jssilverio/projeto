<?php
loadModel('LoginModel');
session_start();
$exception = null;

if (count($_POST) > 0) {
    $login = new LoginModel($_POST);
    try {
        $user = $login->checkLogin();
        $_SESSION['user'] = $user;
        header("Location: inicio.php");
    } catch (AppException $e) {
        $exception = $e;
    }
}
 
loadView('login', $_POST + ['exception' => $exception]);