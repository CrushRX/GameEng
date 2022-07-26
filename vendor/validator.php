<?php

class Validator {

    static $isLogin = false;
    public static function checkUser()
    {
        if(isset($_COOKIE['token']))
        {
            if (substr($_COOKIE['token'], 10) > time())
            {
                self::$isLogin = true;
            }
        } else {
            self::$isLogin = false;
        }
    }

    public static function getUserCheck()
    {
        return self::$isLogin;
    }
}