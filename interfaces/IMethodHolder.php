<?php
//an interface
interface IMethodHolder
{
    //with an interface we just declare 
    //an abstract methods
    //Note: these methods are abstract methods by
    //default so need to write the keywork abstract
    
    //Note: We can not include valiables in an interface 
    //      but we can include constants    
 
    public function getInfo($info);
    public function sendInfo($info);
    public function calculate($first, $second);
}
