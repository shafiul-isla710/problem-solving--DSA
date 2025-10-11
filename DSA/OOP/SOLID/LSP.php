<?php 
//Liskov Substitution Principle
    interface Bird{
	  public function canEat();
	}
	interface Fly extends Bird{
	  public function canFly();
	}
	interface Walk extends Bird{
        public function canWalk();
	}
	
    //classes
	class Eagle implements Fly{
      public function canEat(){
        $fly = $this->canFly();
	    echo "Eagle can eat and $fly";
	  }
	  public function canFly(){
	    return "Fly";
	  }
	  
	}
	
	class Penguin implements Walk{
	  
	  public function canEat(){
	    
	    $walk = $this->canWalk();
	    echo "Penguin can Eat and $walk";
	    
	  }
	  public function canWalk(){
	    return "Walk";
	  }
	}
	
	$eagle = new Eagle();
	$penguin = new Penguin();

    $eagle->canEat();
	$penguin->canEat();