<?php 

function strStr($haystack, $needle) {
        
    $index = false;
    for($i=0; $i<strlen($haystack);$i++){
        if(substr($haystack,$i,strlen($needle))==$needle){
            $index = true;
            return $i;
        }
    }
    if($index == false){
        return '-1';
    }
}

echo strStr("hello","ll")."\n"; //2