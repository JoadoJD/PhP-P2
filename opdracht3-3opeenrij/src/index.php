<?php
    // Auteur: joaquim

require "vendor/autoload.php";

use Threeonarow\Figure;
use Threeonarow\Square;
use Threeonarow\Circle;
use Threeonarow\Rectangle;
use Threeonarow\Triangle;


$square1 = new Square(0, 255, 255, 100);
$square2 = new Square(130, 125, 235, 100);
$square3 = new Square(70, 215, 45, 100);

print $square1->draw();
print $square2->draw();
print $square3->draw();

print "<br>";

$circle1 = new Circle(0, 255, 255, 50);
$circle2 = new Circle(130, 125, 235, 50);
$circle3 = new Circle(70, 215, 45, 50);
print $circle1->draw();
print $circle2->draw();
print $circle3->draw();

print "<br>";

$rectangle1 = new Rectangle(50, 100, 0, 255, 255);
$rectangle2 = new Rectangle(50, 100, 130, 125, 235);
$rectangle3 = new Rectangle(50, 100, 70, 215, 45);

print $rectangle1->draw();
print $rectangle2->draw();
print $rectangle3->draw();

print "<br>";

$triangle1 = new Triangle(75, 75, 0, 255, 255);
$triangle2 = new Triangle(75, 75, 130, 125, 235);
$triangle3 = new Triangle(75, 75, 70, 215, 45);

print $triangle1->draw();
print $triangle2->draw();
print $triangle3->draw();

print "<br>";