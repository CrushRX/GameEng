<?php

class Route{
    public static function drowPage($url, $route)
    {
        $src = $url."/app/controllers".$route.'Controller.php';
        if(file_exists($src))
        {
            require_once $src;
        } else if ($route == "/")
        {
            require_once $url."/app/controllers/homeController.php";
        }
        else {
            require_once "$url/resources/view/404.php";
        }
        exit();
    }
}