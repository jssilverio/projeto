<?php
session_start(); 
requireValidSession();
$exception = null;

loadTemplateView('inicio', ['exception' => $exception]);