<?php

$model = new baseModel();
$all_users = $model->all('settings');
$games_by_rating = $model->byRating('games');

include_once 'resources/view/home.php';