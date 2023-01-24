<?php
// same function bnavye ene kevay method overriding

class base{ // create a base class
    public $name = "Parent Class"; // take property $name

    public function calc($a,$b){
        return $a * $b;
    }

}
class derived extends base{
    public $name = "child Class"; // take property $name same as base class
    
    public function calc($a,$b){
        return $a + $b;
    }
}
$test = new base(); // ahiya base ke derived apo etle khbr pde
echo $test->name ."<br>";
echo $test->calc(10,15);

// $test1 = new derived();
// echo $test1->name ."<br>";
// echo $test1->calc(10,15);

?>

