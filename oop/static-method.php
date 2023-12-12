<?php
class A{
    static function sayHi(){
        echo "Hi From A\n";
    }
}
class B extends A{
    static function sayHi(){
        echo "Hi from B\n";
        parent::sayHi();
    }
}
$obj = new B();
$obj->sayHi();