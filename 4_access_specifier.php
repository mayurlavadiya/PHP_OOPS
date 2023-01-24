<?php
//create a access modifier demo

// public method
class base{
    public $name;

    public function __construct($n){
        $this->name = $n;
    }

    public function Show(){
        echo "<h3>public method called</h3>";
        echo "Student Name :" .$this->name. "<br>";
    }
}

$s1 = new base("Rahul");
$s1->name = "MAYUR";
$s1->show();


?>