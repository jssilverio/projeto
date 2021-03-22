<?php
session_start(); 
requireValidSession();

$exception = null;
$users = User::get();

if(isset($_GET['delete'])){    
    try {
        User::delete($_GET['delete']);
        session_destroy();
        header('Location: logout.php');
    } catch (Exception $e) {
        $exception = $e;
    } 
}

loadTemplateView('users',['users' => $users]);