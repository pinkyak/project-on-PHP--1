<?php
class Item implements IArea {
    private string $item_name;

    public function getArea(): string {
        return "Площадь {$this->item_name} : ";
    }

    public function setName(string $name): void {
        $this->item_name = $name;
    }
}
?>