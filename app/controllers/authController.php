<?php

use controller\BaseControler;

$model = new baseModel();

if(Validator::getUserCheck())
    header('Location: '. '/');

include_once 'resources/view/auth.php';