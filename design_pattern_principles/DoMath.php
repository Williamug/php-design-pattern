<?php
class DoMath
{
    private $sum;
    private $quotient;
    
    /**
     * Add two simple values
     *
     * @param $first
     * @param $second
     *
     * @return sum
     *
    */
    public function simpleAdd($first, $second)
    {
        $this->sum = ($first + $second);
        return $this->sum;
    }
    
    /**
     * Divide two simple values
     *
     * @param $dividend
     * @param $divisor
     *
     * @return quotient
     *
    */
    public function simpleDivide($dividend, $divisor)
    {
        $this->quotient = ($dividend/$divisor);
        return $this->quotient;
    }
}


















