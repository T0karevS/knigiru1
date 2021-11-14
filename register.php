<?php
session_start();
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
    <legend align="center">Регистрация</legend>
    <form action="connect/signup.php" method="post" enctype="multipart/form-data">

    <label>ФИО</label>
    <input type="text" name="fio" placeholder="Введите свое полное ФИО">
    <label>Login</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Email</label>
    <input type="email" name="email" placeholder="Введите свой Email">
    <label>password</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <label>confirm password</label>
    <input type="password" name="password_c" placeholder="Подтвердите свой пароль">
    <button>Зарегистрироваться</button>
    <p>Уже есть аккаунт? - <a href="login.php">Войти</a></p>

        <?php
        if($_SESSION['message']){
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>



</form>
</fieldset>

</body>
</html>