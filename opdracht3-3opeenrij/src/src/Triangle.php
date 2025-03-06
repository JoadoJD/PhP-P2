<?php
 // Auteur: joaquim
 
namespace Threeonarow;

class Triangle extends Figure
{
    private $height;  // Triangle height
    private $width;   // Triangle width

    public function __construct($height, $width, $colorR, $colorG, $colorB)
    {
        $this->height = $height;
        $this->width = $width;
        parent::__construct($colorR, $colorG, $colorB);
    }

    // Draw triangle based on declared dimensions
    public function draw()
    {
        return "
        <svg width='$this->width' height='$this->height'>
            <path d='M".($this->height / 2)." 0 L0 ".$this->height." L".$this->width." ".$this->height." Z' styles'fill:rgb(".$this->getColor().");stroke-width:3;stroke:rgb(0,0,0)' /)
            style='fill:rgb(".$this->getColor().")' />
        </svg>
        ";
    }
}
