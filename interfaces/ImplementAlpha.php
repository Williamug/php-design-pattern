<?php
include_once('IMethodHolder.php');

class ImplementAlpha implements IMethodHolder
{
    //getInfo method from the IMethodHolder interface
    public function getInfo($info)
    {
        echo "This is NEWS! " . $info . "<br />";
    }

    //sendInfo method from the IMethodHolder interface
    public function sendInfo($info)
    {
        return $info;
    }

    //calculate method from the IMethodHolder interface
    public function calculate($first, $second)
    {
        $calculated = $first * $second;
        return $calculated;
    }

    public function useMethods()
    {
        $this->getInfo("The sky is falling...");
        
        echo $this->sendInfo("Vote for Senator Snort!") . "<br />";
        
        echo "You make $" . $this->calculate(20, 15) . " in your part-time job <br />";
    }
}

$worker = new ImplementAlpha();
$worker->useMethods();













