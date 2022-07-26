<?php
include_once "vendor/init.php";
include_once "vendor/controller.php";
include_once "vendor/validator.php";
include_once "vendor/basic_function.php";
include_once "vendor/base_models.php";


use controller\BaseControler;
use init\init;


$connect = Init::checkDB();
$settings = $connect->query('SELECT * FROM `settings`');
$route = new BaseControler();
Validator::checkUser();

$route::redirect(basicFunction::url(),$route->getRoute());

try {
    if($settings->rowCount() == null)
        throw new Exception();
} catch (Exception $e) {
    print "Отсутствует подключение к базе данных!";
}

