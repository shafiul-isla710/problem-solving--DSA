<?php 

 //Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
    //You may assume that each input would have exactly one solution, and you may not use the same element twice.
    
    function twoSome($numbers, $target){
      $n = count($numbers);
      
      for($i=0;$i<$n-1;$i++){
        for($j = $i + 1; $j<=$n; $j++){
          if($numbers[$i] + $numbers[$j] == $target){
            return [$i,$j];
          }
        }
      }
      return null;
    }
    
    $num = [2,3,7,15];
    $t = 9;
    
    $output = twoSome($num,$t);
    print_r($output);