<?php
class OneTrick
{
    private $storeHere;

    public function trick($whatever)
    {
        $this->storeHere = $whatever;
        return $this->storeHere;
    }
}

$doIt = new OneTrick();

$dataNow = $doIt->tick("This is perfect.");

echo $dataNow;
