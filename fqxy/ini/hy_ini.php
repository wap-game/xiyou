<?php


//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="hy.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file))
{


}else{

   //连接数据库提取数据写入ini 
   
$inina="hy.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家好友]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('序列',['初始' => '排序']); 
$iniFile->addItem('好友id',['初始' => 1]); 
$iniFile->addItem('好友分类',['初始' => 123]);
$iniFile->addItem('好友名字',['初始' => 123]);
	
include("./sql/mysql.php");//调用数据库连接 
$q2="hy".$wjid;
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
$m=0;
while(!!$row=mysql_fetch_array($result)){
$m=$m+1;
$iniFile->addCategory('序列', [$row[hyid]=>$row[id] ]);
$iniFile->addCategory('好友id', [$row[id]=> $row[hyid]]);
$iniFile->addCategory('好友分类', [$row[id]=> $row[hyfl]]);
$iniFile->addCategory('好友名字', [$row[id]=> $row[hymz]]);  

}
	













}
$iniFile = new iniFile($file);




?>