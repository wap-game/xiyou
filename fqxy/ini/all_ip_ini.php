<?php


$file="";
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="all_ip_ini.ini";
$path='acher/hdjc';

$file = $path."/".$inina;	

if(file_exists($file)){


}else{
 
 
 
   //连接数据库提取数据写入ini 
   
$inina="all_ip_ini.ini";
$path='acher/hdjc';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家背包]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('ip地址',['初始' => 123]); 
$iniFile->addItem('ip时间',['初始' => 123]); 
$iniFile->addItem('玩家名字',['初始' => 123]);
$iniFile->addItem('玩家id',['初始' => 123]); 
   
include("./sql/mysql.php");//调用数据库连接 
   
   
   


$q2="all_ip";


mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;




 while(!!$row=mysql_fetch_array($result)){


$iniFile->addCategory('ip地址', [$row[wjid]=>$row[ip] ]);
$iniFile->addCategory('ip时间', [$row[wjid]=>$row[iptime]]);
$iniFile->addCategory('玩家名字', [$row[wjid]=> $row[wjname]]);
$iniFile->addCategory('玩家id', [$row[ip]=> $row[wjid]]);  










}
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


$iniFile = new iniFile($file);




?>