<?php 

// singleton design pattern means that only one instance of a class can be created
class Someclass{
    static $instance;
    public $params;
    public function __construct($params){
        $this->params = $params;
        
        echo "$this->params \n";
    }
    
    public static function getInstance($params){
        if(self::$instance ==  null){
            self::$instance = new Someclass($params);
        }
    }
}
    
$ob1 = Someclass::getInstance("Param1");
$ob2 = Someclass::getInstance("Param2");
$ob3 = Someclass::getInstance("Param3");