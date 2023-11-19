<?php
class Animal{
protected $name;
public function __construct($name){
    $this->name = $name;
}
    public function eat(){
        echo "{$this->name} is eating\n";

    }

    public function run(){
        echo "{$this->name} is Running\n";
    }
    public function sleep(){
        echo "{$this->name} is  Slepping\n";
    }
    public function greet(){   //method override;

    }
}
class Human extends Animal{
    public function greet(){
        echo "{$this->name} say Hi\n!";
    }

}

class Cat extends Animal{
    public function greet(){
        echo "{$this->name} say Meow\n";
    }
}
$human = new Human('Maria');
$human->eat();
$human->run();
$human->greet();
$cat = new Cat('Pushy');
$cat->eat();
$cat->greet();