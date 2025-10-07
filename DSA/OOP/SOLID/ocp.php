<?php 
//open closed principle
//The Open Closed Principle (OCP) states that software entities (classes, modules, functions, etc.)
// should be open for extension but closed for modification.
interface paymentMethod{
	    public function pay();
	  }

	  class paymentProcess{
	    public function display(paymentMethod $method){
	      $method->pay();
	    }
	  }
	
	  class Bkash implements paymentMethod{
	    public function pay(){
	      echo "Payment Successful by bKash \n";
	    }
	  }
	  
	  class Roket implements paymentMethod{
	    public function pay(){
	      echo "Payment Successful by roket \n";
	    }
	  }
	  
	  $payment = new paymentProcess();
	  
	  $bkash = new Bkash();
	  $rocket = new Roket();
	  
	  $payment->display($bkash);
	  $payment->display($rocket);