<?php
$model = new baseModel();
$all_users = $model->all('users');
$all_games = $model->all('games');

include_once 'resources/view/admin/adminPanel.php';