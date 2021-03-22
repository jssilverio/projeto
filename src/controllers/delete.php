<?php
session_start(); 
requireValidSession();

$exception = null;
$users = User::get();

loadTemplateView('delete',['users' => $users]);