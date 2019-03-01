<?php

//调用jfdj.ini是否存在
include("./ini/jfdj_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="jfdj".$wjid; //数据库位置 
$strsql = "update $q2 set jfdj=$wpjfdj where id=1";//物品id号必改值
$result = mysql_query($strsql);


//更新缓存数据
$inina="jfdj.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
?>
