<header>
    <div class="container">
        <div class="height-block">
            <div class="logo">
                logo
            </div>
            <div class="nav">
                <ul>

                </ul>
            </div>
            <div class="userfield">
                <?php if(Validator::getUserCheck()){?>
                        <p>user</p>
                    <div class="user-form">
                        <ul>
                            <li><a href="">profile</a></li>
                            <li><a href="">settings</a></li>
                            <li><a onclick="logout()">logout</a></li>
                        </ul>
                    </div>
                <?php } else {?>
                    <ul>
                        <li><a href="/auth">Авторизация</a></li>
                        <li><a href="/register">Регистрация</a></li>
                    </ul>
                <?php }?>
            </div>
        </div>
    </div>
</header>

<script>
    function logout()
    {
        document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });
        location="/";
    }
</script>