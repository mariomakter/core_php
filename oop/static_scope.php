<?php
class A{
    static function foo(){
        echo "Hi from foo";
    }
}
class B extends A{
    static function foo(){
        echo "Hi from B";
    }
}
$obj = new B();
B::foo();

?>