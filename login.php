<?php
session_start();
if ($_SESSION['user'])
{
    header('location: index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<fieldset>
    <legend align="center">Вход</legend>
<form action="connect/login2.php" method="post">
    <label>Login</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>password</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <button>Войти</button>
    <p>Нет аккаунта? - <a href="register.php">зарегистрироваться</a></p>
    <?php
    if($_SESSION['message1']){
        echo '<p class="msg">' . $_SESSION['message1'] . '</p>';
    }
    unset($_SESSION['message1']);
    ?>
</form>
</fieldset>
</body>
</html>