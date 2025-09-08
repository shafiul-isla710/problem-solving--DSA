<?php 

function primeNumber($num){
    if($num < 2){
        return false;
    }
    elseif($num % 2 == 0){
        return false;
    }
    else{
        for($i = 3; $i * $i <= $num; $i += 2){
            if($num % $i == 0){
                return false;
            }
        }
    }
    return true;
}

if(primeNumber(4)){
    echo "Prime Number";
}
else{
    echo "Not Prime Number";
}

// another way to check prime number 

function checkPrime($num){
    if($num < 2){
        return false;
    }
    for($i = 2; $i <= $num; $i++){
        if($num % $i == 0){
            return false;
        }
    }
    return true;
}
if(checkPrime(4)){
    echo "Prime Number";
}
else{
    echo "Not Prime Number";
}