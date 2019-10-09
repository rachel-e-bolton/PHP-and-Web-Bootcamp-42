#!/usr/bin/php
<?PHP
function ft_split($str)
{
    $arr = preg_split('/\ +/', $str);
    sort($arr);
    return ($arr);
}

/*function order($a, $b)
{
    if ($a == $b)
        return 0;
    if ($a[0] == $b[0])
    {
        for ($i = 1; $a[$i] == $b[$i]; $i++)
            ;
        return ($a < $b) ? -1 : 1;
    }
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $a[0]) && ctype_alpha($b[0]))
        return 1;
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $a[0]) && is_numeric($b[0]))
        return 1;
    if (is_numeric($a[0]) && ctype_alpha($b[0]))
        return 1;
    if (ctype_alpha($a[0]) && preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $b[0]))
        return -1;
    if (is_numeric($a[0]) && preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $b[0]))
        return -1;
    if (ctype_alpha($a[0]) && is_numeric($b[0]))
        return -1; 
}*/

function order($a, $b) 
{
    $a = strtolower($a);
    $b = strtolower($b);
    $i = 0;
    while($a[$i] && $b[$i]) {
        $ora = ctype_alpha($a[$i]) ? 0 : (ctype_digit($a[$i]) ? 1 : 2);
        $orb = ctype_alpha($b[$i]) ? 0 : (ctype_digit($b[$i]) ? 1 : 2);
        if ($ora - $orb)
            return ($ora - $orb);
        else if ($a[$i] !== $b[$i])
            return ($a[$i] < $b[$i] ? -1 : 1);
        $i++;
    }
    return($a[$i] == "\0" ? -1 : 1);
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
    usort($arr1, "order");
    foreach ($arr1 as $elem)
    {
        print("$elem\n");
    }
}
?>