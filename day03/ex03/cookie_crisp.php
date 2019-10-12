<?php
if ($_GET["action"] == "set")
{
    setcookie($_GET["name"], $_GET["value"], time() + (60 * 60), "/");
}
if ($_GET["action"] == "get")
{
    echo ($_COOKIE[$_GET["name"]]) ? $_COOKIE[$_GET["name"]]."\n" : "";
}
if ($_GET["action"] == "del")
{
    setcookie($_GET["name"], "", time() - (60 * 60));
}
?>