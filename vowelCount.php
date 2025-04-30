<?php

// There are many ways to count vowels in a string in PHP. Here are a few examples:

function countVowel($string){
     
    $vowel = ['a','e','i','o','u'];
    $vowel1='aeiouAEIOU';
    $count = 0;
     
    $array = str_split($string);
    //str_split() diye kono string ke array a convert kora hoyeche.
    for($i=0;$i<count($array);$i++){
      if(strpos($vowel1,$array[$i]) !== false){
        //strpos() diye check kora hoyeche je $array[$i] er moddhe $vowel1 er kono value ache kina.
        $count++;
      }
    }
     
    return $count;
     
  }
   
  echo countVowel('bangladesh');
  
  function couterVower($string){
    $vowel = ['a','e','i','o','u','A','E',"I",'O','U'];
    $count = 0;
    $array = str_split($string);
    
    // foreach($array as $item){
      
    //   if(in_array($item,$vowel)){
    //     $count++;
    //   }
    // }
    
    for($i=0;$i<count($array);$i++){
      if(in_array($array[$i],$vowel)){
        // in_array() diye check kora hoyeche je $array[$i] er moddhe $vowel er kono value ache kina.
        $count++;
      }
    }
    
    return $count;
  }
  
  echo couterVower("AppleUe");