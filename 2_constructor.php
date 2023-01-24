<?php

    /* 
    
    constructor function : automatically call thay
    __construct() -----> double underscore then construct...
    
    
    */

    class person{

        public $name = "NO Name";
        public $age = 26 ;

        function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }
        function show(){
            echo $this->name . "-" . $this->age . "<br><br>";
            return $this;
        }

        function validate(){
            echo "validation success";
        }
    }

    // $p1 = new person
    // $p1 -> name = "Mayur Lavadiya";
    // $p1 -> age = 26;
    
    //print simple method
    // $p1->show();
    
    // $p2 -> new person("Salman Khan", 57);
    // $p2->show();
    

    // Method 1 ---- if one obeject hoi to
    (new person("Mayur Lavadiya", "26"))->show(); // method call for one object only......

    //   Method 2 ----
    (new person("Mayur Lavadiya", "26"))->show()->validate(); // method for taking from above method



    

?>

