<?php
class Circle extends Item {
    private float $r;

    public function getArea(): string {
        $parent = parent::getArea();
        return "$parent <b>S = π * r^2</b> = " . pi() * ($this->r ** 2);
    }

    public function setR(float $r): void {
        $this->r = $r;
    }
}
?>