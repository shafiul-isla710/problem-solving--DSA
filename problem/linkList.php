<?php 
	class Node{
  	  public $data;
      public $next;
  	  public function __construct($value)
  	  {
  	    $this->data = $value;
  	    $this->next = null;
  	  }
	}
	class LinkList extends Node{
	    public $head;
	    public function __construct()
	    {
	      $this->head = null;
	    }
	  
  	  public function insert($data)
  	  {
    	    $newNode = new Node($data);
    	    
    	    if($this->head == null)
    	    {
    	      $this->head = $newNode;
    	    }
    	    else{
      	      $current = $this->head;
      	      while($current->next != null)
      	      {
      	        $current = $current->next;
      	      }
      	      $current->next = $newNode;
    	    }
  	  }
  	  
  	  public function display()
  	  {
  	    $current = $this->head;
  	    while($current != null){
  	      echo $current->data. "->";
  	      $current = $current->next;
  	    }
  	  }
	}
	
	$node = new Linklist();
	$node->insert(10);
	$node->insert(20);
	$node->insert(30);
	$node->display();

?>