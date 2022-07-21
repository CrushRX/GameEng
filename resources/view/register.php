<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/auth.css">
    <title>Document</title>
</head>
<body>
<?php echo \controller\BaseControler::ajaxGet('http://gameeng/api/register', (['api' => 'v1']))?>
    <div class="reg-block">
        <form action="http://gameeng/api/register" method="post" class="form-block">
            <p>Register</p>
            <div class="email-block flex">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>
            <div class="error">
                this is error
            </div>
            <div class="log-block flex">
                <label for="login">Login</label>
                <input type="text" name="login">
            </div>
            <div class="error">
                this is error
            </div>
            <div class="pas-block flex">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <div class="error">
                this is error
            </div>
            <input type="submit" class="sbmt" onclick="event.preventDefault()">
        </form>
    </div>
</body>
</html>
