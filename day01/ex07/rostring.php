#!/usr/bin/php
<?PHP
function ft_split($str)
{
    $arr = preg_split('/\ +/', $str);
    return ($arr);
}

if ($argc > 1)
{
    $str = $argv[1];
    $arr = array();
    if (is_array($arr = ft_split($str)) == true)
    {
        foreach ($arr as $elem)
        {
            if ($elem == $arr[0])
                ;
            else
                print("$elem ");
        }
        print("$arr[0]\n");
    }
    else
        print("$str\n");
}
?>