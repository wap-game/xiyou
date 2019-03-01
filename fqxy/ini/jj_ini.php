<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="jj.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){

} else{
	

   //连接数据库提取数据写入ini 
   
$inina="jj.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家家具]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('序列',['初始' => 123]); 
$iniFile->addItem('家具id',['初始' => 1]); 
$iniFile->addItem('家具等级',['初始' => 123]);
$iniFile->addItem('家具摆放',['初始' => 123]); 
$iniFile->addItem('家具名字',['初始' => 123]); 
include("./sql/mysql.php");//调用数据库连接 
   
   
   


$q2="jj".$wjid;


mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;




 while(!!$row=mysql_fetch_array($result)){

 
$m=$m+1;
$jjid=$row[jjid];
$iniFile->addCategory('序列', [$row[jjid]=>$m ]);
$iniFile->addCategory('家具id', [$m=> $row[jjid]]);
$iniFile->addCategory('家具等级', [$row[jjid]=> $row[jjdj]]);
$iniFile->addCategory('家具摆放', [$row[jjid]=> $row[jjbf]]);
//调用物品信息
include("./wp/jjxx.php");
$iniFile->addCategory('家具名字', [$row[jjid]=> $jjmz]);  




}








}






$iniFile = new iniFile($file);











?>