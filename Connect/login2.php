<?php
session_start();
require_once 'connect.php';
$login = $_POST['login'];
$password = MD5($_POST['password']);
$check_user = mysqli_query($connect, "SELECT * FROM `users` where `login` = '$login' and `password` = '$password'");
if(mysqli_num_rows($check_user)==0)
{
    $_SESSION['message1'] = 'Неверный логин или пароль!';
    header('Location: ../index.php');
}
else
{
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id"=>$user['id'],
        "fio"=>$user['fio'],
        "email"=>$user['Email']
    ];
    header('location: ../index.php');
}
?>
<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>