<?php
// interface
interface IAnimal
{
    // methods to an interface
    public function walk();
    public function sleep();
    public function eat();
}

// abstract class
abstract class Animal
{
    // abstract functions/ methods
    abstract public function walk();
    abstract public function sleep();
    abstract public function eat();
}

// class dog
class Dog implements IAnimal
{
    public function __construct()
    {
        echo $this->walk();
        echo $this->sleep();
        echo $this->eat();
    }
    
    /**
     * walk
     *
     * @return string
     * @author williamDk
     *
    */
    public function walk(){
        return "I am walking 🚶" . "<br>";
    }
    
    /**
     * sleep
     *
     * @return string
     *
    */
    public function sleep()
    {
        return "I am sleeping 🛌" . "<br>";
    }
    
    /**
     * eat
     *
     * @return string
     *
    */
    public function eat()
    {
        return "I am eating 🍝" . "<br>";
    }
}

$dog = new Dog();



















































