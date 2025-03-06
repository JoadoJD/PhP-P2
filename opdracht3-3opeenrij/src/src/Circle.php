<?php
 // Auteur: joaquim
 
namespace Threeonarow;

class Circle extends Figure
{
    private $value;

    public function __construct($colorR, $colorG, $colorB, $value)
    {
        $this->value = $value;
        parent::__construct($colorR, $colorG, $colorB);
    }

    public function draw()
    {
        // TODO: Implement draw() method.
        $length = $this->value * 2;
        $radius = $this->value - 5;

        return "<svg width=\"$length\" height=\"$length\">
            <circle cx=\"$this->value\" cy=\"$this->value\" r=\"$radius\"
            style=\"fill:rgb(".$this->getColor().");stroke-width:10;stroke:rgb(0,0,0)\" />
        </svg>";
    }
}
