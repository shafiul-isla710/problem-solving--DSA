<?php

//vowel counter function
$vowel = ["a", "e", "i", "o", "u"];

// add something here

//  trait CatAni{
//      public function cat(){
//        return "This is a Cat";
//      }
//  }
 
//   trait RabbitAni{
//      public function rabbit(){
//        return "This is a Rabbit";
//      }
//  }
 
//  class MyClass{
//    use CatAni;
//    use RabbitAni;
   
//    public function animal(){
//      return $this->cat();
//    }
//  }
 
//  $instead = new MyClass();
 
//  echo $instead->animal();

class ParentClass{
    public static function man(){
      static::weman();
    }
    
    public static function weman(){
      echo __CLASS__;
    }
  }
  
  // $object = new Parent();
  ParentClass::man();