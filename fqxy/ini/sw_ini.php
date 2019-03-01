<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="sw.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file))
{


}
else
{
	
	
	   
$inina="sw.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('声望值',['初始' => 123]); 

	
	
	
	
	
   //连接数据库提取数据写入ini 
   
include("./sql/mysql.php");//调用数据库连接 


$q2="sw".$wjid;
mysql_query("set names utf8");
$str="select swid,swzz from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
 while(!!$row=mysql_fetch_array($result)){


//调用声望信息
$swid=$row[swid];
include("./wp/swxx.php");
$iniFile->addCategory('声望值', [$swmz=> $row[swzz]]);

}

}


$iniFile = new iniFile($file);


?>