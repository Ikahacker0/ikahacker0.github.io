<?php
$tanitatikaram = parse_ini_file("../Anticonfig.ini", true);
require_once('Module/Setmodule.php');
$body.= "REASON : Country"."\n";
require_once('Module/Sendmodule.php');
?>