<?php


//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="jn.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


} else{
   //连接数据库提取数据写入ini 
   
$inina="jn.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家技能]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('序列',['初始' => 123]); 
$iniFile->addItem('技能id',['初始' => 1]); 
$iniFile->addItem('技能名字',['初始' => 123]); 
$iniFile->addItem('技能等级',['初始' => 123]); 
include("./sql/mysql.php");//调用数据库连接 
   
   
   


$q2="jnn".$wjid;


mysql_query("set names utf8");
$str="select id,jnid,jndj from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;




 while(!!$row=mysql_fetch_array($result)){

 
$m=$m+1;
$iniFile->addCategory('序列', [$row[jnid]=>$m ]);
$iniFile->addCategory('技能id', [$m=> $row[jnid]]);
$iniFile->addCategory('技能等级', [$row[jnid]=> $row[jndj]]);


$jnidd=$row[jnid];
//调用技能信息
include("./wp/jnxx.php");
$iniFile->addCategory('技能名字', [$row[jnid]=> $jnmz]);


   







}



}

$iniFile = new iniFile($file);





?>