<?php
include("./ini/bbrl_ini.php");
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$wprl=$bbrla+$kcrl;
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);


?>
