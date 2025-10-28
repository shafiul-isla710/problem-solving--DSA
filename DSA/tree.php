<?php 

  class Node{
	    public $data;
	    public $left;
	    public $right;
	    
	    public function __construct($data)
	    {
	      $this->data = $data;
	      $this->left = null;
	      $this->right = null;
	      echo "this is an object and value of $this->data  \n";
	    }
	  }
	  
	  
	  class BinarySearchTree{
	    public $root;
	    
	    public function insert($data){
	      $this->root = $this->insertRecursion($this->root,$data);
	    }
	    
	    public function insertRecursion($node, $data){
	      
	      if($node == null){
	        return new Node($data);
	      }
	      if($node->data > $data){
	       $node->left = $this->insertRecursion($root->left,$data);
	      }
	      if($node->data < $data){
	        $node->right = $this->insertRecursion($root->right,$data);
	      }
	      return $node;
	    }
	  }
	  
	  $bst = new BinarySearchTree();
	  
	  $bst->insert(8);
	  $bst->insert(4);
	  $bst->insert(10);