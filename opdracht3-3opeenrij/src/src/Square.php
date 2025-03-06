<?php
 // Auteur: joaquim
 
namespace Threeonarow;

class Square extends Figure
{
    // vierkant heeft gelijke zijdes, daarom maar 1 lengte
    private $length;

    public function __construct($colorR, $colorG, $colorB, $length)
    {
        // argument in propertie zetten
        // construct van parent uitvoeren (kleur)
        $this->length = $length;
        parent::__construct($colorR, $colorG, $colorB);
    }

    public function draw()
    {
        // TODO: Implement draw() method.
        return "<svg width='$this->length' height=\"$this->length\">
            <rect width=\"$this->length\" height=\"$this->length\"
            style=\"fill:rgb(".$this->getColor().");stroke-width:10;stroke:rgb(0,0,0)\" />
        </svg>";
    }
}
