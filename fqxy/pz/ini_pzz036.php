<?php


include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数',$gzcardid));
if($hdcs ==""){
include("./sql/mysql.php");//调用数据库连接 

$nowtime=date("Y-m-d",strtotime("-1 day"));
$q2="hd".$wjid;
mysql_query("set names utf8");
$sql = "insert into $q2 (hdid,hdtime,hdcs)  values('$gzcardid','$nowtime','30')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
//路径
$inina="hd.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} else{

$hdcs=$hdcs+30;
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdcs='$hdcs' where hdid=$gzcardid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动次数', [$gzcardid => $hdcs]);	
} 


?>
