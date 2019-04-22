<?php
//an interface
interface IMethodHolder
{
    //with an interface we just declare 
    //an abstract methods
    //Note: these methods are abstract methods by
    //default so need to write the keywork abstract
 
    public function getInfo($info);
    public function sendInfo($info);
    public function calculate($first, $second);
}
