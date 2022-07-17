<?php

class baseModel {

    private $host = "127.0.0.1";
    private $dbname = "engine";
    private $user = "root";
    private $pass = "";

    public function getConnection()
    {
        return new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
    }

    public function model($name)
    {
        $connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        return $connection;
    }

    public function all($name)
    {
        $connection = $this->model($name);
        $sql = "SELECT * FROM `".$name."`";
        $result = $connection->query($sql)->fetch();
        return $result;
    }
}