<?php
if (!$_POST || !$_POST["submit"] || $_POST["submit"] != "OK" || !$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"] || $_POST["login"] == "")
{
    exit("ERROR\n");
}
if (file_exists("../private/passwd"))
{
    $file = file_get_contents("../private/passwd");
    $log = unserialize($file);
    for ($i = 0; $i < sizeof($log); $i++)
    {
        if ($log[$i]["login"] == $_POST["login"] && $log[$i]["passwd"] == hash("whirlpool", $_POST["oldpw"]))
        {
            $log[$i]["passwd"] = hash("whirlpool", $_POST["newpw"]);
            $details = serialize($log);
            file_put_contents("../private/passwd", $details);

            //if (1) //this if statement tests whether the password has been updated in the file;
            //{
            //    $file = file_get_contents("../private/passwd");
            //    $log = unserialize($file);
            //    if ($log[$i]["login"] == $_POST["login"] && $log[$i]["passwd"] == hash("whirlpool", $_POST["newpw"]))
            //    {
            //        echo "UPDATED\n";
            //    }
            //}
            
            exit("OK\n");
        }
    }
    exit("ERROR\n");
}
?>