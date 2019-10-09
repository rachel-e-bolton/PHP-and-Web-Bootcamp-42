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

if ($argc == 4)
{
    $num1 = trim($argv[1]);
    $num2 = trim($argv[3]);
    $op = trim($argv[2]);

    print(do_op($num1, $num2, $op)."\n");
}
else
print("Incorrect Parameters\n");
?>