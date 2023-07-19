<?php
Function myAutoLoud($class){
    require_once (__DIR__."/../classes/$class.class.php");
}
spl_autoload_register('myAutoLoud');

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST')
 {
    handleCircle();
    handleTriangle();
    handleSquare();
}

function handleCircle(): void {
    if (isset($_POST["circle"])) {
        $valueR = $_POST["circle"];
        $circle = new Circle();
        $circle->setName('круга');
        $circle->setR($valueR);
        displayArea($circle);
    }
}

function handleTriangle(): void {
    if (isset($_POST["tringelA"]) && isset($_POST['tringelH'])) {
        $valueA = $_POST["tringelA"];
        $valueH = $_POST["tringelH"];
        $triangle = new Triangle();
        $triangle->setName('треугольника');
        $triangle->setA($valueA);
        $triangle->setH($valueH);
        displayArea($triangle);
    }
}

function handleSquare(): void {
    if (isset($_POST["square"])) {
        $valueA = $_POST["square"];
        $square = new Square();
        $square->setName('квадрата');
        $square->setA($valueA);
        displayArea($square);
    }
}

function displayArea(IArea $figure): void {
    echo $figure->getArea();
}

?>