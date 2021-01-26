<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/site_with_tests/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Playfair+Display&family=Yusei+Magic&display=swap" rel="stylesheet">
    <title>Eines Abends | Tests - Login</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <a class="header__link" href="/site_with_tests/index.php">
                    Eines Abends
                </a>
            </div>
        </div>
    </div>
</header>
<div class="intro__login">
    <div class="container__login">
        <div class="intro__img">

        </div>
        <div class="form">
            <form action="/site_with_tests/login.php" method="post">
                <label class="label">Логин</label>
                <input type="text" name="login">
                <br>
                <label class="label">Пароль</label>
                <input type="password" name="password">
                <br>
                <input class="btn__login" type="submit" value="Войти">
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>