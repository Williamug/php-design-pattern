<?php
include_once('Protected.php');

class ConcretProtect extends ProtectVis
{
    function __construct()
    {
        $this->countMoney();
    }
    
    protected function countMoney()
    {
        $this->wage = "Your hourly wage is Ugx ";
        echo $this->wage . $this->setHourly(36);
    }
}

$worker = new ConcretProtect();

