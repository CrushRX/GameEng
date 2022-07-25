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
    <form action="http://gameeng/api/auth" method="post" class="form-block">
        <p>Авторизация</p>
        <div class="log-block flex">
            <label for="login">Login</label>
            <input type="text" class="login" name="login">
        </div>
        <div class="pas-block flex">
            <label for="password">Password</label>
            <input type="password" class="passwd" name="password">
        </div>
        <div class="error">
            user not found
        </div>
        <input type="submit" class="sbmt" placeholder="Войти" onclick="event.preventDefault();sendRequest()">
    </form>
</div>
</body>
</html>

<script>
    let login;
    let passwd;

    function getData()
    {
        this.login = document.querySelector('.login').value
        this.passwd = document.querySelector('.passwd').value
    }

    function sendRequest()
    {
        this.getData();
        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/json");

        var raw = JSON.stringify({
            "login": this.login,
            "password": this.passwd
        });

        var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: raw,
        };

        fetch("/api/auth", requestOptions)
            .then(response => response.text())
            .then(result => {
                let data = JSON.parse(result);
                if (data.status == true)
                {
                    document.cookie = "user="+data.data.username;
                    document.cookie = "token="+data.data.token;
                    location="/";
                } else {
                    if (result){
                        if (result.status = 400)
                        {
                            document.querySelector('.error').style.display = 'block';
                        }
                    }
                }

            })
            .catch(error => console.log('error', error));
    }
</script>