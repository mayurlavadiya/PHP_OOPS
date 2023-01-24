<?php

/* 
Inheritance :-> one class's properties & methods are used in another class

Example :
    class fruits{ -- base class

    }
    class vegetables extends fruits{ -- derived class
        
    }

*/

// CREATE A EMPLOYEE CLASS - BASE CLASS
class employee{
    public $name;
    public $designation;
    public $salary;

    // For inital value we have to crt constructor
    function __construct($n,$d,$s){
        $this->name = $n;
        $this->designation = $d;
        $this->salary = $s;
    }
    
    //make function(method) to show or print
    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name :".  $this->name. "<br>";
        echo "Employee Designation :".  $this->designation. "<br>";
        echo "Employee Salary :".  $this->salary . "<br>";
        
    }
}

// CREATE A MANAGER CLASS - DERIVED CLASS (child class)
class manager extends employee{
    public $incentive = 1000;
    public $allowance = 500;    

    function info(){
        $this->totalsalary = $this->salary + $this->allowance + $this->incentive; // sum of total salary
        echo "<h3>Senior Employee Profile</h3>";

        echo "Employee Name : ". $this->name ."<br>"; // data fetch from method 1 - employee
        echo "Employee Designation : ". $this->designation ."<br>"; // data fetch from method 1 - employee
        echo "Employee Salary :".  $this->salary."<br>"; // data fetch from method 1 - employee

        echo "Employee Allowance : ". $this->allowance ."<br>";
        echo "Employee Incentive : ". $this->incentive ."<br>";
        echo "Total Salary : ". $this->totalsalary ."<br>";
    }
}

// advance method
(new employee("Mayur","Intern",10000))->info();
(new manager("Mahendra","Senior Php Dev.",25000))->info();
(new manager("TEST","Android Dev",15000))->info();

// simple method to print
$e1 = new employee("Ram","BDA",12000);
$e2 = new manager("Shyam","SEO",11000);

$e1->info();
$e2->info();



?>