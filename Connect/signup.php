<?php
session_start();
require_once 'connect.php';
$fio = $_POST['fio'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = MD5($_POST['password']);
$password_c = MD5($_POST['password_c']);
if($password===$password_c)
{
    
    mysqli_query($connect, "INSERT INTO `users` (`id`, `fio`, `login`, `email`, `password`) VALUES (NULL, '$fio', '$login', '$email', '$password') ");
    $_SESSION['message1'] = 'Регистрация прошла успешно!';
    header('Location: ../login.php');
}
else
{
    $_SESSION['message'] = 'Пароли не совпадают!';
    header('Location: ../register.php');
}
