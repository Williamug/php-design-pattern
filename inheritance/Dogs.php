<?php
include_once('FurryPets.php');

class Dogs extends FurryPets
{
    public function __construct()
    {
        echo "Dogs " . $this->fourlegs() . "<br>";
        echo $this->makesSound("Woof, Woof") . "<br>";
        echo $this->guardsHouse() . "<br>";
    }
    
    private function guardsHouse()
    {
        return "Grrrrrr" . "<br>";
    }
}