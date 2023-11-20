<?php
abstract class OurClass{
    function sayHi(){
        echo "hi";
    }
    abstract public function eat($x1, $x2);
}
class MyClass extends OurClass{

    function  eat($x1, $x2){
        echo "I am eating rice\n";
    }
}

$mc = new MyClass();
$mc->eat(1,2);
$mc->sayHi();