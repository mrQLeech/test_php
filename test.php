<?php
$arrPolindroms = ["Àğãåíòèíà ìàíèò íåãğà", "Sum summus mus"];
phpinfo();
function checkPolindrom($inString){
    if (strlen($inString) === 0 ){
        return 0;
    }

    $str = cleanString($inString);
    $revers = strrev($str);

    if ($str === $revers){
        return $inString;
    }

    return $inString[0] ;
}

function cleanString($inString){
    $clStr =  strtolower($inString);
    return preg_replace('/\PL/u', '', $clStr);
}

function getParagraph($str){
    return '<p>' . $str . "</p>";
}


echo getParagraph('revers 1 = ' . checkPolindrom($arrPolindroms[0])) ;
echo getParagraph('revers 2 = ' . checkPolindrom($arrPolindroms[1]));
echo getParagraph('revers 3 = ' . checkPolindrom('alpha romeo')) ;

?>