<?php
abstract class Book{
    final function doSomething(){
        echo "Doing Something";
    }
}
class Paper extends Book{
     function doSomething(){
        echo "Do nothing";

    }
}
$b = new Paper();
$b->doSomething();