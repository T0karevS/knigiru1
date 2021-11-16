<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connect = mysqli_connect('localhost','root','root','knigiru');
if(!$connect)
{
    die('error, ne podklyuchena bd');
}
?>