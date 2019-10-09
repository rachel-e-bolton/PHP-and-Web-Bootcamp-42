#!/usr/bin/php
<?PHP
if ($argc == 2)
{
    $str = trim($argv[1]);
    print(preg_replace('/\ +/', " ", $str));
}
?>