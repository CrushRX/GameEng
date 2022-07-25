<?php

if (\controller\BaseControler::request() === 'POST') {
    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);

    $model = new baseModel();
    $connection = $model->getConnection();
    $name = $data['login'];
    $passwd = md5($data['password']);
    $token = basicFunction::gen_token();

    $checkUser = "SELECT * FROM `users` WHERE username = '{$name}'";

    $result = $connection->query($checkUser)->fetchAll();

    if(count($result) == null)
    {
        header('Content-Type: application/json; charset=utf-8');
        http_response_code(400);
        print_r(json_encode(['status' => 'error', 'data' => ['user' => 'not_found']]));
        exit();
    }

    if (strlen($data['password']) < 8)
    {
        header('Content-Type: application/json; charset=utf-8');
        http_response_code(400);
        print_r(json_encode(['status' => 'error', 'data' => ['password' => 'length']]));
        exit();
    }

    if ($result[0]['password'] == $passwd)
    {
        $sql = "UPDATE `users` SET token = '{$token}' WHERE id = {$result[0]['id']}";
        $result = $connection->prepare($sql);
        $ex = $result->execute();

        print_r(json_encode(['status'=>true, 'data'=>['username' => $name, 'token' => $token]]));
        exit();
    }
    else {
        header('Content-Type: application/json; charset=utf-8');
        http_response_code(400);
        print_r(json_encode(['status' => 'error', 'data' => ['user' => 'not found']]));
        exit();
    }
}

if (\controller\BaseControler::request() === 'GET') {

}
