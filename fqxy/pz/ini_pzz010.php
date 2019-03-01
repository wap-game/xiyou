<?php


include("./ini/bbrl_ini.php");
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$br1=$bbrla+$ddfz;
include("./ini/zt_ini.php");
$br2=($iniFile->getItem('玩家信息','背包容量'));
//判断负重
if($br1<=$br2){
$pdfz=2;
} else{
$pdfz=1;	
}


?>
