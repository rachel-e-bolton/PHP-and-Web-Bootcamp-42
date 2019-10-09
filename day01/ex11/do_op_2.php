#!/usr/bin/php
<?PHP
function    do_op($num1, $num2, $op)
{
    if ($op == '+')
    return ($num1 + $num2);
    if ($op == '-')
    return ($num1 - $num2);
    if ($op == '*')
    return ($num1 * $num2);
    if ($op == '/')
    return ($num1 / $num2);
    if ($op == '%')
    return ($num1 % $num2);
}

function is_op($char)
{
    return ($char == '+' || $char == '-' || $char == '*' || $char == '/' || $char == '%') ? true : false;
}

if ($argc == 2)
{
    $str = preg_replace('/\ +/', '', $argv[1]);
    for ($i = 0; $i < strlen($str); $i++)
    {
        if (is_numeric($str[$i]))
            ;
        else if (is_op($str[$i]))
            $op_cn = $op_cn + 1;
        else
        {
            print("Syntax Error\n");
            return (-1);
        }
    }
    if ($op_cn != 1)
    {
        print("Syntax Error\n");
        return (-1);
    }
    $i = 0;
    while (is_numeric($str[$i]))
    {
        $num1 = $num1.$str[$i];
        $i++;
    }
    if (is_op($str[$i]))
    {
        $op = $str[$i];
        $i++;
    }
    while (is_numeric($str[$i]))
    {
        $num2 = $num2.$str[$i];
        $i++;
    }
    print(do_op($num1, $num2, $op)."\n");
    return (0);
}
else
    print("Incorrect Parameters\n");
?>