<?PHP
function ft_is_sort($tab)
{
    $tmp = $tab;
    sort($tmp);
    return ($tab == $tmp);
}

?>