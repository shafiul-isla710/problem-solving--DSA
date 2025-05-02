<?php 

// How can I implement insertion sort in PHP 
// Insertion sort is a simple sorting algorithm that builds a sorted array (or list) one element at a time.

// First of all , I will create a function called insertionSort that takes an array as an argument.

function insertionSort($array){

    for($i=1; $i<count($array); $i++){
        $current = $array[$i];
        $j = $i-1;
        while($j>=0 && $array[$j] > $current){
            $array[$j+1] = $array[$j];
            $j--;
        }
        $array[$j+1] = $current;
    }
    return $array;
}

$arr = [5, 2, 9, 1, 5, 6];
$sortedArr = insertionSort($arr);
print_r($sortedArr); 