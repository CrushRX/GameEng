<?php

$user = new baseModel();
$all_users = $user->all('settings');

include_once 'resources/view/home.php';