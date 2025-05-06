<?php 


//there are two strings, first or second string is missing a single character in the second string, find the missing character.
function findTheDifference($s, $t) {
        
    $sumS = 0;
    $sumT = 0;

    for($i = 0; $i<strlen($s);$i++){
        $sumS += ord($s[$i]);
    }
     for($i = 0; $i<strlen($t);$i++){
        $sumT += ord($t[$i]);
    }

    $diff = $sumT - $sumS;

    return chr($diff); 

}

echo findTheDifference("abcd","abcde");