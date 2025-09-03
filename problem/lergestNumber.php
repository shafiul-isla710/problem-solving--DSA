<?php 

$numbers = [12, 45, 67, 23, 89, 34];
$lerge = 0;

for($i = 0; $i < count($numbers); $i++){
  if($lerge < $numbers[$i]){
    $lerge = $numbers[$i];
  }
}
// echo $lerge;

//print multiplication table of number

function multiplicationTable($num){
  for($i = 1; $i <= 10; $i++){
    $result = $num * $i;
    echo "$num x $i = $result \n";
  }
}

multiplicationTable(5);
