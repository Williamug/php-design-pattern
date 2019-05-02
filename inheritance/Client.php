<?php
include_once('Dogs.php');
include_once('Cats.php');

class Client
{
    public function __construct()
    {
        $dogs = new Dogs();
        $cats = new Cats();
    }
}

$worker = new Client();