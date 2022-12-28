<?php
class Point {
    private $x, $y;

    function __construct($valueX, $valueY)
    {
        $this->setX($valueX);
        $this->setY($valueY);
    }

    public function getX() {return $this->x;}
    public function setX($value) {$this->x = $value;}

    public function getY() {return $this->y;}
    public function setY($value) {$this->y = $value;}

    public function input($valueX, $valueY) {
        $this->setX($valueX);
        $this->setY($valueY);
    }
    public function output() {
        return array($this->getX(),$this->getY());
    }

    public function distance(Point $B) {
        return sqrt(($this->x - $B->x)**2 + ($this->y - $B->y)**2);
    }
}