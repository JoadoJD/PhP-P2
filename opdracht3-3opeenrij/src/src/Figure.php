<?php
 // Auteur: joaquim
 
namespace Threeonarow;

abstract class Figure
{
    private $colorR;
    private $colorG;
    private $colorB;

    public function __construct($colorR, $colorG, $colorB)
    {
        // argumenten in properties gezet
        $this->colorR = $colorR;
        $this->colorG = $colorG;
        $this->colorB = $colorB;
    }

    public function getColor()
    {
        return "$this->colorR, $this->colorG, $this->colorB";
    }

    abstract public function draw();
}
