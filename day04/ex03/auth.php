<?php
function auth($login, $passwd)
{
    $file = file_get_contents("../private/passwd");
    $log = unserialize($file);
    for ($i = 0; $i < sizeof($log); $i++)
    {
        if ($log[$i]["login"] == $login && $log[$i]["passwd"] == hash("whirlpool", $passwd))
            return true;
    }
    return false;
}
?>