<?php
class ParentClass{
    protected $name;
    function __construct($name){
        $this->name = $name;
        $this->sayHi();
    }
    function sayHi(){
        echo "Hi from {$this->name}\n";
    }
}
class childClass extends ParentClass{
        function sayHi(){
            parent::sayHi();
            echo "hello";
        }
}
$child = new childClass("ABCD");