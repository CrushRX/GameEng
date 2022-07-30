<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../resources/css/admin.css">
    <link rel="stylesheet" href="../resources/css/modal.css">
</head>

<?php
$block = isset($_GET['block'])?$_GET['block']:'statistic';
include_once 'layouts/sidebar.php';
?>

<div class="content">
    <h1><?=strtoupper($block)?></h1>
    <?php
    if ($block == 'users')
        include_once 'layouts/user.php';
    else if($block == 'games')
        include_once 'layouts/games.php';
    ?>
</div>

<script src="../resources/js/modal.js"></script>