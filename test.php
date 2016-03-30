<?php
$arrPolindroms = ["Аргентина манит негра", "Sum summus mus"];

function checkPolindrom($inString){
    $str = cleanString($inString);
    $revers = strrev($str);

    return $str === $revers;
}

function cleanString($inString){
    $clStr =  strtolower($inString);
    return preg_replace('/\PL/u', '', $clStr);
}

echo 'revers 1 = ' . checkPolindrom($arrPolindroms[0]) . "\n";
echo 'revers 2 = ' . checkPolindrom($arrPolindroms[1]) . " \r" ;
echo 'revers 3 = ' . checkPolindrom('alpha romeo') . " \r" ;

?>