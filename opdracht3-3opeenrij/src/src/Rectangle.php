<?php
 // Auteur: joaquim
 
namespace Threeonarow;

class Rectangle extends Figure
{
    private $height;  // Rectangle height
    private $width;   // Rectangle width

    public function __construct($height, $width, $colorR, $colorG, $colorB)
    {
        $this->height = $height;
        $this->width = $width;
        parent::__construct($colorR, $colorG, $colorB);
    }

    // Draw rectangle based on dimensions
    public function draw()
    {
        return "
        <svg width='$this->width' height='$this->height'>
            <rect width='$this->width' height='$this->height' 
            style='fill:rgb(".$this->getColor().");stroke-width:3;stroke:rgb(0,0,0)' />
        </svg>
        ";
    }
}
