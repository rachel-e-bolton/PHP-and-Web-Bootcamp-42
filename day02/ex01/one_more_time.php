#!/usr/bin/php
<?php
if ($argc > 1)
{
    $dayofweek = array("lundi"=>1, "Lundi"=>1, "mardi"=>2, "Mardi"=>2, "mercredi"=>3, "Mercredi"=>3, "jeudi"=>4, "Jeudi"=>4, "vendredi"=>5, "Vendredi"=>5, "samedi"=>6, "Samedi"=>6, "dimanche"=>7, "Dimanche"=>7,);
    $mnthofyear = array("janvier"=>Jan, "Janvier"=>Jan, "février"=>Feb, "Février"=>Feb, "fevrier"=>Feb, "Fevrier"=>Feb, "mars"=>Mar, "Mars"=>Mar, "avril"=>Apr, "Avril"=>Apr, "mai"=>May, "Mai"=>May, "juin"=>Jun, "Juin"=>Jun, "juillet"=>Jul, "Juillet"=>Jul, "août"=>Aug, "Août"=>Aug, "aout"=>Aug, "Aout"=>Aug, "septembre"=>Sep, "Septembre"=>Sep, "octobre"=>Oct, "Octobre"=>Oct, "novembre"=>Nov, "Novembre"=>Nov, "décembre"=>Dec, "Décembre"=>Dec, "decembre"=>Dec, "Decembre"=>Dec,);
    $str = $argv[1];
    $arr = explode(' ', $str);
    if (sizeof($arr) == 5)
    {
        $fr_day = $arr[0];
        $day = $dayofweek["$fr_day"];
        $date = $arr[1];
        $fr_mnth = $arr[2];
        $mnth = $mnthofyear["$fr_mnth"];
        $year = $arr[3];
        $time = $arr[4];
    }
    else
    {
        echo "Wrong Format\n"; 
        return (-1);
    }
    $timestamp = strtotime("$date $mnth $year $time");
    $test_day = date('N', $timestamp);
    $test_mnth = date('M', $timestamp);
    if (($day == $test_day) && ($mnth == $test_mnth))
    {
        echo strtotime("$date $mnth $year $time")."\n";
    }
    else
    {
        echo "Wrong Format\n"; 
        return (-1);
    }
}
?>