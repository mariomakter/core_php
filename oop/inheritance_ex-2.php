<?php
class Shape{
    protected $name;
    protected $area;
    public function __construct($name){
        $this-> name = $name;
        $this->calculatArea();
    }
    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}";
    }
    public function calculatArea(){}
}
class Tringle extends Shape{
    private $a, $b, $c;
    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Tringle");

    }
    public function calculatArea(){
        $perimeter = ($this->a+$this->b+$this->c)/2;
        $this->area=sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c));
    }

}
class Rectangla extends shape{
    private $a, $b;
    public function __construct($a, $b){
        $this->a= $a;
        $this->b = $b;
        parent::__construct("Rectangle");
    }
    public function calculatArea(){
        $this->area = $this->a * $this->b;
    }
}
$tringle = new Tringle(2,3,2);
$tringle->getArea();
$rectangle = new Rectangla(3,4);
$rectangle->getArea();