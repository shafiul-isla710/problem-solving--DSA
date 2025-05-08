<?php 

// Bubble sort algorithm is a simple sorting algorithm that repeatedly steps through a list to be sorted,
// compares each pair of adjacent items and swaps them if they are in the wrong order.
//I understand the logic of this algorithm and I will implement in PHP.

// First of all , I will create a function called bubbleSort that takes an array as an argument.

function bubbleSort($array){

    for($i=0; $i<count($array)-1; $i++){
        for($j=0; $j<count($array)-$i-1; $j++){
            if($array[$j] > $array[$j+1]){
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
                
            }
        }
        return $array;  
    }
    
    $arr = [4,1,8,12,10,6,9,3];
    $sortedArr = bubbleSort($arr);
    print_r($sortedArr);

    //First of all I take a outer loop that runs length of array-1 times. and need to a inner loop that runs length of array-i-1 times.
    //I will compare each pair of adjacent items and swap them if they are in the wrong order. and swap there positions.
    
    //It's time complexity is o(n^2).
