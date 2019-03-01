<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="tx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
	
   //连接数据库提取数据写入ini 
   
$inina="tx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家称号]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('序列',['初始' => 123]); 
$iniFile->addItem('头衔id',['初始' => 1]); 
$iniFile->addItem('头衔显示',['初始' => 123]);
$iniFile->addItem('头衔名字',['初始' => 123]);
	
include("./sql/mysql.php");//调用数据库连接 
$q2="tx".$wjid;
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
$m=0;
while(!!$row=mysql_fetch_array($result)){
$m=$m+1;
$npcc=$row[txid];
$iniFile->addCategory('序列', [$row[txid]=>$m ]);
$iniFile->addCategory('头衔id', [$m=> $row[txid]]);
$iniFile->addCategory('头衔显示', [$row[txid]=> $row[txxs]]);
//调用物品信息
include("./wp/txxx.php");
$iniFile->addCategory('头衔名字', [$row[txid]=> $wpmz]);  

}
	
	
	
	
	
	

}


$iniFile = new iniFile($file);




?>