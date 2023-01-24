<?php
 // abstract method etle secure, 
 // and jo abstract class bnavie to 1 method bnavvi compulsory

 abstract class parentClass{ // protective class mate abstract ,etle koi pan aa class no object na bnavi shke 
    public $name;
    //create a abstract method
    abstract protected function calc($a, $b);
}

class childClass extends parentClass{
    //je method uprdeclare kri ene implement krvani
    public function calc($c,$d){
        echo $c + $d;
    }
}

 $test = new childClass();
 $test->calc(21,20);



?>