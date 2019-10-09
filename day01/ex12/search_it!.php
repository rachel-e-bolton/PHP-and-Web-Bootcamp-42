#!/usr/bin/php
<?PHP
if ($argc > 3)
{
    $ref_key = $argv[1];
    $arr = array();
    foreach ($argv as $arg)
    {
        if ($arg == $argv[0] || $arg == $argv[1])
            ;
        $tmp = preg_split('/\:/', $arg);
        $arr = array_merge($arr, $tmp);
    }
    for ($i = 0; $i < sizeof($arr); $i += 2)
    {
        $key = $arr[$i];
        $value = $arr[$i+1];
        $records["$key"] = $value;
    }
    if ($records["$ref_key"])
        echo $records["$ref_key"]."\n";
}
?>