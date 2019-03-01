<?php
//添加新数据

$nowtime=date('Y-m-d H:i:s');
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
mysql_query("set names utf8");
$sql = "insert into $q2 (hdid,hdtime,hdcs)  values('$hdid','$nowtime','1')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
//路径
$inina="hd.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  


?>