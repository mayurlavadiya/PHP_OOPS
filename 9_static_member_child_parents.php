<?php

class base{
    public static $name = "Mayur";
}

class derived extends base{
    public static function show(){
        echo parent::$name; // derived class ma base class ni variable print karva parent use thay
    }
}

$test = new derived();
$test->show();

?>