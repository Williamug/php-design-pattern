<?php
interface IConnectInfo
{
    const HOST = "localhost";
    const UNAME = "phpWorker";
    const DBNAME = "dbinterface";
    const DBPASS = "easyWayPassword";

    function Connection();
}
?>
