<?php
class Human{
  public  $name;
    function sayHi(){
        echo "salam\n";
        $this->sayName();
    }
    function getName(){

    }
    function sayName(){
        echo "my name is " .$this->name;
    }
}
    class Cat{
        function sayHi(){
            echo "Meow\n";
        }
    }
    class Dog{
        function sayHi(){
            echo "Woof\n";
        }
    }
    $h1 = new Human();
    $c1 = new Cat();
    $d1 = new Dog();

    $h1->sayHi();
   echo  $h1->name="Maria\n"; //this a set operation
    $d1->sayHi();
    $c1->sayHi();
  $h1->sayName();
    echo $h1->name; //this is a get opetation