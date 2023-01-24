<?php

interface parent1{

    function calc($a,$b);
}

interface parent2{

    function sub($c,$d);
}

class childClass implements parent1,parent2{

    public function calc($a,$b){
        echo $a + $b;
    }

    public function sub($c,$d){
        echo $c - $d;
    }
}

/*
interface no object nthi bnavi shkta......
$test = new parent1(); ----- aa run krvathi error aavse
*/

$test = new childClass();
$test->calc(25,35);
echo "<br>";
$test->sub(100,85);

?>