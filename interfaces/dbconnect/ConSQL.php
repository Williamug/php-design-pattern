<?php
include_once('IConnectInfo.php');

class ConSQL implements IConnectInfo
{
    //passing values using scope resolution operator
    private $server = IConnectInfo::HOST;
    private $currentDB = IConnectInfo::DBNAME;
    private $user = IConnectInfo::UNAME;
    private $pass = IConnectInfo::DBPASS;

    //implement the testConnection method from the IConnectInfo.php
    public function Connection()
    {   
        //connect to the database using mysqli object
        $conn = new mysqli($this->server, $this->user, $this->pass, $this->currentDB);
    
        //check for mysqli connection errors
        if(mysqli_connect_error()){
            die("Failed to connect to the database " . mysqli_connect_error() . " " . $this->currentDB);
         }
        //success message showing that database connected
        print "You're connect to the database! <br />" . $conn->host_info;
        
        //close database connection
        $conn->close();
    }
}

//instatiate an object
$useConstant = new ConSQL();

//call the method on an object
$useConstant->Connection();





























