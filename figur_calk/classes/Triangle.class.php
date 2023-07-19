<?php
class Triangle extends Item {
    private float $a;
    private float $h;

    public function getArea(): string {
        $parent = parent::getArea();
        return "$parent S = a*h/2 = " . ($this->a * $this->h) / 2;
    }

    public function setA(float $a): void {
        $this->a = $a;
    }

    public function setH(float $h): void {
        $this->h = $h;
    }
}
?>