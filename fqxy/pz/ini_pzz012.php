<?php
include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));
$yll=$yl-$kcyl01;
$q2="all_yl"; //数据库位置 
$strsql = "update $q2 set bbyl=$yll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);

//缓存修改
$iniFile->updItem('背包仓库银两', ['背包银两' => $yll]);
?>
