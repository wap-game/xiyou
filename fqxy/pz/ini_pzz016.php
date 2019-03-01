<?php

$q2="zbb".$wjid; //数据库位置 
$strsql = "update $q2 set zbid=$zbsjid where zbid=$zbidx";//物品id号必改值
$result = mysql_query($strsql);



$npcc=$zbsjid;
include("./wp/zbxx.php");//装备信息

echo "<font color=red>得到了".$wp1."</font>"."<br>"; 
//更新缓存数据
$inina="zbb.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
//更新缓存数据
$inina="ztt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据


?>
