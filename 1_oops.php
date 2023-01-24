<?php
//create a class
class calculation{
    //variable declaration 
    public $a, $b, $c;

    //make function to perform task---> sum sub mul div
    function sum(){
        $this->c = $this-> a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this-> a - $this->b;
        return $this->c;
    }
    function mul(){
        $this->c = $this-> a * $this->b;
        return $this->c;
    }
    function div(){
        $this->c = $this-> a / $this->b;
        return $this->c;
    }
    function modul(){
        $this->c = $this->a % $this ->b;
        return $this->c;
    }
    // function perc(){
    //     $this->c = $this->a * $this->b / 100;
    //     return $this->c;
    // }
}

// create object of calculation class
$c1 = new calculation();
$c1->a = 20;
$c1->b = 30;

$c2 = new calculation();
$c2->a = 50;
$c2->b = 20;

$c3 = new calculation();
$c3->a = 50;
$c3->b = 100;

$c4 = new calculation();
$c4->a= 238;
$c4->b= 5;

$c5 = new calculation();
$c5->a= 240;
$c5->b= 5;

echo "Sum of Value C1 : {$c1->sum()} </br>" ; // call method 
echo "Substraction of Value C2 : ". $c2->sub(). "</br>" ;
echo "Multiplication of Value C3 : ". $c3->mul(). "</br>" ;
echo "Division of Value C4 : ". $c4->div(). "</br>" ;
echo "Modulus of Value C4 : ". $c4->modul(). "</br>" ;
echo "Modulus of Value C5 : ". $c5->perc(). "% </br>" ;


?>