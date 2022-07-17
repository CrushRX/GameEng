<?php
include_once "vendor/init.php";
include_once "vendor/validator.php";

use init\init;


$connect = Init::checkDB();
$settings = $connect->query('SELECT * FROM `settings`');

try {
    if($settings->rowCount() == null)
        throw new Exception();
} catch (Exception $e) {
    print "Отсутствует подключение к базе данных!";
}

