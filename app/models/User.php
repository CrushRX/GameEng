<?php

class User extends baseModel {
    public $table = 'users';

    public function query()
    {
        return $this->model($this->table, $this->getConnection());
    }
}