<?php


include("./ini/jj_ini.php");
$jjdj=($iniFile->getItem('家具等级',$jjid));

include("./sql/mysql.php");//调用数据库连接 	
$jjdj=$jjdj+1;

$q2="jj".$wjid;
$strsql = "update $q2 set jjdj=$jjdj where jjid=$jjid";//物品id号必改值
$result = mysql_query($strsql);
//更新缓存数据
//调用家具缓存
$iniFile->updItem('家具等级', [$jjid => $jjdj]);
//更新缓存数据

?>
