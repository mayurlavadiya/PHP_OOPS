<?php


/*
static member use kro to print time $this-> use na thay
self :: use thay printing mate ...

*/

class greetings{
    public static $name = "Static Member";

    public static function welcome(){
        echo "Hello World ! <br>";
    }
    public function __construct(){

        //static method call --->
        self::welcome();
    }
}

$test = new greetings();
$test->welcome();
new greetings();










?>