<?php
session_start();

$exception = null;
$userData = [];

if(count($_POST) === 0 && isset($_SESSION['user'])){    
    $user = User::getOne(['id' => $_SESSION['user']->id]);
    $userData = $user->getValues();
} elseif(count($_POST) > 0){
try {
    $dbUser = new User($_POST);
    if($dbUser->id){
        $dbUser->update();
        $_SESSION['user'] = $dbUser;
        header('Location: users.php');
        exit();
    }
    else{
    $dbUser->insert();
    }
    $_POST = [];
} catch (Exception $e){
    $exception = $e;
} finally {
    $userData = $_POST;
}
}


loadTemplateView('cadastro', $userData + ['exception' => $exception]);