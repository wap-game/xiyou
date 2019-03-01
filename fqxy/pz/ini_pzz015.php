<?php
include("./pz/ini_pzz013.php");
include("./ini/sw_ini.php");
$yl=($iniFile->getItem('声望值',$swmz));
$yll=$yl-$kcyl01;
$q2="sw".$wjid; //数据库位置 
$strsql = "update $q2 set swzz=$yll where swid=$wpid";//物品id号必改值
$result = mysql_query($strsql);

//缓存修改
$iniFile->updItem('声望值', [$swmz => $yll]);
?>
