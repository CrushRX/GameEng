<?php

use baseModel;

class Register{
    private $login;
    private $password;
    function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }
    private function check_login()
    {
        $model = new baseModel();
        $connection = $model->getConnection();

        $sql = "SELECT * FROM `user` WHERE 'login' = '".$this->login."'";
        $result = $connection->query($sql)->fetchAll();

        return $result;
    }
}