<?php 

$products = [2,3,8,-2,-1];
function arraySign($nums) {
    $num = 1;
    
    if(in_array(0,$nums)){
        return 0;
    }
    else{
        foreach($nums as $value){
            $num *= $value;
        }
    }
    return $num > 0 ? 1 : -1;  
}

echo arraySign($products);

// It's a leet code question.
// Implement a function signFunc(x) that returns:

// 1 if x is positive.
// -1 if x is negative.
// 0 if x is equal to 0.
// You are given an integer array nums. Let product be the product of all values in the array nums.

// Return signFunc(product).

//I have solved it by my own Think.