<?php

namespace init;

use PDO;
use PDOException;

class init
{
    public function checkFiles()
    {

    }

    public function checkFolders()
    {

    }

    public static function checkDB()
    {
        $host = "127.0.0.1";
        $dbname = "engine";
        $user = "root";
        $pass = "";
        try {
            # MySQL через PDO_MYSQL
            $connect = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            return $connect;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}
