<?php
class FurryPets
{
    protected $sound;
    //protected $petNoise;
    
    // furry pets walks on four legs
    protected function fourlegs()
    {
        return "Walk on all fours";
    }
    
    // ability for a furry pet to make sound
    protected function makesSound($petNoise)
    {
        $this->sound = $petNoise;
        return $this->sound;
    }
}