<?php
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="hd.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){

} else{


   //连接数据库提取数据写入ini 
   
include("./sql/mysql.php");//调用数据库连接 

//创建文件
file_put_contents($file,"[活动数据]");


# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('活动id',['初始' => 123]);
$iniFile->addItem('活动时间',['初始' => 123]);
$iniFile->addItem('活动次数',['初始' => 123]);
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
 while(!!$row=mysql_fetch_array($result)){

$iniFile->addCategory('活动id', [$row[hdid]=>$row[hdid]]);
$iniFile->addCategory('活动时间', [$row[hdid]=>$row[hdtime]]);
$iniFile->addCategory('活动次数', [$row[hdid]=>$row[hdcs]]);

}


}






$iniFile = new iniFile($file);






?>