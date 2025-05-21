<?php

@header('Access-Control-Allow-Origin: *');
@header("Access-Control-Allow-Headers: Content-Type");
@setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
@date_default_timezone_set('America/Sao_Paulo');
@ini_set('display_errors', 1);
@error_reporting(E_ALL);//Exibir todo tipo de erro
//@error_reporting(0); //Não mostrar erro






require_once "config/config.php";
require_once 'bootstrap/loader.php';
require_once 'bootstrap/Error.php';
require_once "libs/helpers.php";
require_once "handler/ExceptionHandler.php";
require_once "routes/RouteManager.php";

(new RouteManager)->dispatch();