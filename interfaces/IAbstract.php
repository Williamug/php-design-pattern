<?php
abstract class IAbstract
{
    // property available to all implementations
    protected $valueNow;
    
    /* All implementations must include the following 2 methods: */
    // must return decimal value
    abstract protected function giveCost();
    
    // must return a string
    abstract protected function giveCity();
    
    // this concrete function is available to all
    // class implementations without overriding
    // the contents
    public function displayShow()
    {
        $stringCost = $this->giveCost();
        $stringCost = (string)$stringCost;
        $allTogether = ("Cost: $" . $stringCost . " for " . $this->giveCity());
    }
}