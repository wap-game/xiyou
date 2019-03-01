<?php

$file="";
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="all_user.ini";
$path='ache/'.$wjid;

$file = $path."/".$inina;	

if(file_exists($file))
{


}
else
{
   //连接数据库提取数据写入ini 
   
include("./sql/mysql.php");//调用数据库连接 
   
$q2="all_user";
mysql_query("set names utf8");
$sql1=mysql_query("select * from $q2 where wjid=$wjid and fl=1",$conn);
$info1=@mysql_fetch_array($sql1);
$uname=$info1[wjname];
$wjuserid=$info1[wjid];
$wjtime=$info1[wjtime];
$time=$info1[utime];
$yj=$info1[yj];
 
 
$inina="all_user.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[信息]");


# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
//数据库数据导入ini文件
# 添加一个分类并直接添加子项
$iniFile->addItem('禁言信息',['初始' => 123]);
if($wjuserid!=""){
$iniFile->addCategory('禁言信息', ['玩家名字' => $uname, '禁言时间' => $wjtime,'解除变量' => $time,'永久' => $yj]);
//数据库数据导入ini文件
} else{

}



$q2="all_user";
mysql_query("set names utf8");
$sql1=mysql_query("select * from $q2 where wjid=$wjid and fl=2",$conn);
$info1=@mysql_fetch_array($sql1);
$uname=$info1[wjname];
$wjuserid=$info1[wjid];
$wjtime=$info1[wjtime];
$time=$info1[utime];
$yj=$info1[yj];


$iniFile->addItem('封号信息',['初始' => 123]);
if($wjuserid!=""){
$iniFile->addCategory('封号信息', ['玩家名字' => $uname, '封号时间' => $wjtime,'解除变量' => $time,'永久' => $yj]);
//数据库数据导入ini文件
} else{

}











}


$iniFile = new iniFile($file);




?>