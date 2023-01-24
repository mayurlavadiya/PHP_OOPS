<?php

class base{

    protected static $name = "Khushh";

    public function show(){
        echo static::$name ."<br>";
        echo self::$name ."<br>";
    }
}

class derived extends base{
    protected static $name = "Danidhariya";

}
$test = new base();
// $test = new derived();
$test->show();


?>