<?php 

// Plus one is leet code question . Given a non-empty array of digits representing a non-negative integer, plus one to the integer.
$disits = [1,2,9];
	 
	 
function PlusOne($disits){
$n = count($disits);

for($i = $n - 1; $i>=0; $i--){
    if($disits[$i] < 9){
    $disits[$i]++;
    return $disits;
    }
    else{
    $disits[$i] = 0;
    }
}

array_unshift($disits,1);
return $disits;
}

print_r(PlusOne($disits));