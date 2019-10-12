<?php
if (!$_POST || !$_POST["submit"] || $_POST["submit"] != "OK" || !$_POST["login"] || !$_POST["passwd"] || $_POST["login"] == "")
{
    echo "ERROR\n";
    exit ;
}
if (file_exists("../private/passwd"))
{
    $file = file_get_contents("../private/passwd");
    $log = unserialize($file);
    for ($i = 0; $i < sizeof($log); $i++)
    {
        if ($log[$i]["login"] == $_POST["login"])
        {
            echo "ERROR\n";
            exit ;
        }
    }
    $log[$i] = array("login"=>$_POST["login"], "passwd"=>hash("whirlpool", $_POST["passwd"]));
    $details = serialize($log);
    file_put_contents("../private/passwd", $details);
    echo "OK\n";
}
else
{
    $log[0] = array("login"=>$_POST["login"], "passwd"=>hash("whirlpool", $_POST["passwd"]));
    $details = serialize($log);
    mkdir("../private");
    file_put_contents("../private/passwd", $details);
    echo "OK\n";
}
?>