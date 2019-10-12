<?php
session_start();
if (!$_SESSION["logged_on_user"] || $_SESSION["logged_on_user"] == "")
{
    exit("ERROR\n");
}
echo ($_SESSION["logged_on_user"]) ? $_SESSION["logged_on_user"]."\n" : "";
?>