<?php
session_start();

include 'auth.php';

$login = $_GET["login"];
$passwd = $_GET["passwd"];
if (auth($login, $passwd) == true)
{
    $_SESSION["logged_on_user"] = $login;
    exit("OK\n");
}
else 
{
    $_SESSION["logged_on_user"] = "";
    exit("ERROR\n");
}
?>