<?php 

    function palindrome($string){
      
      $str = strtolower(preg_replace("/[^A-Za-z0-9]/","",$string));
      
      $revers = strrev($str);
      
      if($string === $revers){
        echo "This palindrome \n";
      }
      else{
        echo "not palindrome \n";
      }
    }
  palindrome('madam');
  palindrome('hello');
  palindrome("Madam, I'm Adam");
  
?>