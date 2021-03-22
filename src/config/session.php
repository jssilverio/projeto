<?php

function requireValidSession(){
    $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
    if ($user === null) {
        header('Location: login.php');
        exit();
    } 
}