<?php

if (\controller\BaseControler::request() === 'POST') {
    $model = new baseModel();
    $connection = $model->getConnection();
    $name = $_POST['login'];
    $email = $_POST['email'];
    $passwd = md5($_POST['password']);

    if (strlen($_POST['password']) < 8)
    {
        header('Content-Type: application/json; charset=utf-8');
        http_response_code(400);
        return (json_encode(['status' => 'error', 'data' => ['password' => 'length']]));
    }

    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        header('Content-Type: application/json; charset=utf-8');
        http_response_code(400);
        return (json_encode(['status' => 'error', 'data' => ['name' => 'Only letters and white space allowed']]));
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Content-Type: application/json; charset=utf-8');
        http_response_code(400);
        return (json_encode(['status' => 'error', 'data' => ['email' => 'not valid email']]));
    }

    $dat = ['username' => $name, 'password' => $passwd, 'email' => $email];
    $sql = 'INSERT INTO `users` (username, password, email, rating) VALUES (:username, :password, :email, 10) ';
    $result = $connection->prepare($sql);
    $ex = $result->execute($dat);
}

if (\controller\BaseControler::request() === 'GET') {

}
