<?php
class Square extends Item {
    private float $a;

    public function getArea(): string {
        $parent = parent::getArea();
        return "$parent S = a^2 = " . ($this->a ** 2);
    }

    public function setA(float $a): void {
        $this->a = $a;
    }
}
?>