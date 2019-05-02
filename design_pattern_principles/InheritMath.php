<?php
include_once('DoMath.php');

class InheritMath extends DoMath
{
    private $textOut;
    private $fullFace;
    
    /**
     * cast int to string
     *
     * @param $num
     * @return string
     *
    */
    public function numToText($num)
    {
        $this->textOut = (string)$num;
        return $this->textOut;
    }
    
    
    /**
     * add print out the results
     *
     * @param $face
     * @param $msg
     * @return string
     *
    */
    public function addFace($face, $msg)
    {
        $this->fullFace = "<strong>" . $face . "</strong>: " . $msg;
        return $this->fullFace;
    }
}











