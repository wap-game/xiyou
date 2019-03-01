<?php


echo "<font color=red>【补给背包数据】</font>"."<br>";


$i=0;	
for($d=0;$d<200;$d++){
$wjid="";	
$bbrlb="";

$i=$i+1;	
$wjid=$i+10000000;
	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";	
$sql1=mysql_query("select * from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$dj=$info1[dj];
$bbrl=$info1[bbrl];

$bbrlb=$dj*50+$bbrl;
$strsql = "update $q2 set bbrl=$bbrlb where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
//调用zt.ini是否存在
include("./ini/zt_ini.php");

$iniFile->updItem('玩家信息', ['背包容量' => $bbrlb]);



if($wjid==10000001){
echo "<font color=red>恭喜所有玩家背包补给完毕</font>"."<br>";
break;



}





}











?>





