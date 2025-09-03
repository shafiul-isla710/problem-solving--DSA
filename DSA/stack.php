<?php  

// stack data structure implement in php .


class Stack{

    public $stack;
    public $limit;

    public function __construct($limit=4){
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($item){
        if(count($this->stack) < $this->limit){
          echo  $this->stack[] = $item ."\n";
        }
        else{
            echo "stack is overload \n";
        }
    }
    public function pop(){
        if(is_array($this->stack)){
            array_shift($this->stack);
        }
        else{
            echo "stack is empty \n";
        }
    }

    public function peek(){
        if(is_array($this->stack)){
           return current($this->stack);
        }
        else{
            echo "stack is empty \n";
        }
    }
}

$stack = new Stack();
echo $stack->push(1);
echo $stack->push(2);
echo $stack->push(5);
echo $stack->push(6);
echo $stack->pop();
echo $stack->peek();
echo $stack->push(0);
