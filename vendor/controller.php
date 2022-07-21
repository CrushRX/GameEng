<?php

namespace controller;
require_once "app/config/routes.php";


class BaseControler {
    public function getRoute()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public static function request()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function ajaxGet($url, $params = null)
    {
        if ($params != null)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, sprintf(
                "%s?%s",$url, http_build_query($params)
            ));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);
            curl_close($ch);

            print $response;
            return (json_decode($response, true));
        }
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        $errorCode = curl_errno($ch);
        $errorText = curl_error($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        return(json_decode($response, true));
    }



    public static function redirect($url, $route)
    {
        \Route::drowPage($url, $route);
    }
}