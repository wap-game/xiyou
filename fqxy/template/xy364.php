<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
if($npccid!=""){
//修改为休息状态
include("./sql/mysql.php");//调用数据库连接 
$q2="cw".$wjid;
$strsql = "update $q2 set cwcz=1 where id=$npccid";//物品id号必改值
$result = mysql_query($strsql);
//调用cw.ini是否存在
include("./ini/cw_ini.php");
$iniFile->updItem('宠物出战状态', [$zbid => '1']);
$cwmz1=($iniFile->getItem('宠物原始名字',$zbid));
$cwmz2=($iniFile->getItem('宠物名字',$zbid));
if($cwmz2!=""){
echo "<font color=red>你将".$cwmz1."（".$cwmz2."）召回了回来！！</font>"."<br>";
} else{	
echo "<font color=red>你将".$cwmz1."召回了回来！！</font>"."<br>";
}



} else{	
echo "<font color=red>召回宠物有误！！请联系GM解决此问题</font>"."<br>";
}

include("template/xy362.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");




} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



?>