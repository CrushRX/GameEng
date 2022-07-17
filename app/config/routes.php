<?php

class Route{
    public static function drowPage($url, $route)
    {
        $src = $url."/app/controllers".$route.'Controller.php';
        if(file_exists($src))
        {
            require_once $src;
        } else {
            require_once "$url/resources/view/404.php";
        }
        exit();
    }
}