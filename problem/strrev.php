<?php 

 function revers($str){
    $to_array = str_split(trim($str));
    $count = count($to_array);
        
    $empty = [];
    for($i = $count - 1; $i >= 0; $i-- ){
        $empty[] = $to_array[$i];
    }
    $revers_str =  implode($empty);
    echo $revers_str;
}
	  
revers('hello');

?>