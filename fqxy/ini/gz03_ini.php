<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="gz03.ini";
$path='acher/guoz';
$file = $path."/".$inina;	
if(file_exists($file))
{


}
else
{
   //连接数据库提取数据写入ini 

$inina="gz03.ini";
$path='acher/guoz';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[国战信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('id',['初始' => 0]); 
$iniFile->addItem('国家名字',['初始' => 0]); 
$iniFile->addItem('君主名字',['初始' => 0]); 
$iniFile->addItem('君主id',['初始' => 0]); 
$iniFile->addItem('国家积分',['初始' => 0]); 
$iniFile->addItem('领取',['初始' => 0]); 

include("./sql/mysql.php");//调用数据库连接 
$q2="gz03";
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
 while(!!$row=mysql_fetch_array($result)){
$iniFile->addCategory('id', [$row[gjid]=>$row[gjmz]]);	 
$iniFile->addCategory('国家名字', [$row[gjid]=>$row[gjmz]]);
$iniFile->addCategory('君主名字', [$row[gjid]=>$row[jzmz]]);
$iniFile->addCategory('君主id', [$row[gjid]=>$row[jzid]]);
$iniFile->addCategory('国家积分', [$row[gjid]=>$row[gjjf]]);
$iniFile->addCategory('领取', [$row[gjid]=>$row[lq]]);

}





}

$iniFile = new iniFile($file);


?>