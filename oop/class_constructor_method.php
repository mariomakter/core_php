<?php
 class MyDetails{
    public $name;
    public $age;
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    function __destruct(){
        echo "the name is {$this->name}";
    }
    function sayName(){
        echo "My name is {$this->name} and {$this->age} years old\n";
    }
 }

 $h1 = new MyDetails("Maria", 24);
$h1->sayName();