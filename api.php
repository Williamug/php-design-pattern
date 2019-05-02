<?php
///////////////// start code
$user = $_POST['username'];
$password = $_POST['password'];
$msg = $_POST['message'];
$reciever =$_POST['reciever'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://mrsms.emediauganda.com/api.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"user={$user}&password={$password}&sender=".urlencode("Wsbetting ")."&message=".urlencode($msg)."&reciever={$reciever}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$hamza = curl_exec ($ch);
curl_close ($ch);
echo substr($hamza,0,4);  /// if result is 1701  sms has been
//delivered on our side.

/////////////////////stop code

