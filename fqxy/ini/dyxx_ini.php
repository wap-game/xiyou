<?php


//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="dyxx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
   //连接数据库提取数据写入ini 
$inina="dyxx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家限制]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('序列',['初始' => 123]); 
$iniFile->addItem('物品id',['初始' => 1]); 
$iniFile->addItem('物品使用次数',['初始' => 123]); 
   
include("./sql/mysql.php");//调用数据库连接 
   
$q2="dyxx".$wjid;
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;




 while(!!$row=mysql_fetch_array($result)){

$m=$m+1;
//$npcc=$row[wpid];
$iniFile->addCategory('序列', [$row[wpid]=>$m ]);
$iniFile->addCategory('物品id', [$m=> $row[wpid]]);
$iniFile->addCategory('物品使用次数', [$row[wpid]=> $row[sycs]]);  






   







}


}
$iniFile = new iniFile($file);





?>