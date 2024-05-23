<?php
include './settings/telbot.php';





    
      # Send Telegram
    $data = [
      'text' => $message,
      'chat_id' => $chat_id
    ];
    
    
    
    //step1
    $cSession = curl_init();
    //step2
    curl_setopt($cSession, CURLOPT_URL, "https://api.telegram.org/bot" . $token. "/sendMessage?" . http_build_query($data));
    curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cSession, CURLOPT_HEADER, false);
    
    curl_setopt($cSession, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($cSession, CURLOPT_SSL_VERIFYHOST,  2);
    //step3
    $result = curl_exec($cSession);
    //step4
    echo curl_error($cSession);
    curl_close($cSession);
    
    
?>