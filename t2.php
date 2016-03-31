<?php header('Content-type: text/html; charset=windows-1251'); ?>
<?php
$arrPolindroms = ["Àğãåíòèíà ìàíèò íåãğà", "Sum summus mus"];

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
    return preg_replace('/[.,!?:…\s]/i', '', $clStr);
}

function getParagraph($str){
    return '<p>' . $str . "</p>";
}


echo getParagraph('revers 1 = ' . checkPolindrom($arrPolindroms[0])) ;
echo getParagraph('revers 2 = ' . checkPolindrom($arrPolindroms[1]));
echo getParagraph('revers 3 = ' . checkPolindrom('alpha romeo')) ;

?>