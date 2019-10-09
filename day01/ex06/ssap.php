#!/usr/bin/php
<?PHP
function ft_split($str)
{
    $arr = preg_split('/\ +/', $str);
    sort($arr);
    return ($arr);
}

if ($argc > 1)
{
    $arr1 = array();
    foreach ($argv as $arg)
    {
        $arr2 = array();
        $arr3 = array();
        if ($arg == $argv[0])
            ;
        else if (is_array($arr2 = ft_split($arg)) == true)
            $arr1 = array_merge($arr1, $arr2);
        else
        {
            $arr3 = array($arg);
            $arr1 = array_merge($arr1, $arr3);
        }
    }
    sort($arr1);
    foreach ($arr1 as $elem)
    {
        print("$elem\n");
    }
}
?>