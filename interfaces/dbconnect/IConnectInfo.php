<?php
interface IConnectInfo
{
    const HOST = "localhost";
    const UNAME = "designpattern";
    const DBNAME = "dbinterface";
    const DBPASS = "easywaypassword";

    function Connection();
}
?>
