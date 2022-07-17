<?php

namespace controller;
require_once "app/config/routes.php";


class BaseControler {
    public function getRoute()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public static function redirect($url, $route)
    {
        \Route::drowPage($url, $route);
    }
}