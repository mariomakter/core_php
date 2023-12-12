<?php
class Shape{

}
class Shapes {
    public $shapes;

    public function __construct() {
        $this->shapes = array();
    }

    public function addShapes(Shape $shape) {
        array_push($this->shapes, $shape);
    }

    public function totalShapes() {
        return count($this->shapes);
    }
}

class Rect extends Shape {
    // Rect class implementation
}

class Triang extends Shape{
    // Triang class implementation
}

class Student {
    // Student class implementation
}

$sh = new Shapes();
$sh->addShapes(new Rect());
$sh->addShapes(new Triang());
// $sh->addShapes(new Student());

echo $sh->totalShapes();
?>
