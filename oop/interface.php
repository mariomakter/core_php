<?php
interface  BaseAnimal{
    public function isAlive();
    public function canEat();
    function breed();
}
class Animal implements BaseAnimal{
    public function isAlive(){
        echo "Man is Mortal";
    }
    public function canEat(){

    }
    function breed(){}
}
interface BaseHuman extends BaseAnimal{
    public function canTalk();
}
class Human implements BaseHuman{
    public function isAlive(){
        echo "man is Mortal";
    }
    public function canEat(){}
    public function breed(){}
    public function canTalk(){}
}
$cat = new Animal();
echo $cat instanceof Animal;
// $human = new Human();
// echo $human instanceof BaseAnimal;
// ?>