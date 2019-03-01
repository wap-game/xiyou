<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="mypm.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


} else{
   //连接数据库提取数据写入ini 
   
$inina="mypm.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家背包]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('排序',['初始' => 123]); 
$iniFile->addItem('拍卖时间',['初始' => 123]); 
$iniFile->addItem('拍卖物品id',['初始' => 1]); 
$iniFile->addItem('拍卖数量',['初始' => 123]);
$iniFile->addItem('拍卖名字',['初始' => 123]); 
$iniFile->addItem('拍卖价格',['初始' => 123]); 
$iniFile->addItem('拍卖时间搓',['初始' => 123]); 














include("./sql/mysql.php");//调用数据库连接 
   
   
   


$q2="all_pm";


mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');





 while(!!$row=mysql_fetch_array($result)){


if($row[pmwpsl]>0&&$row[wjid]==$wjid){  



$iniFile->addCategory('排序', [$row[id]=> $row[id]]); 
$iniFile->addCategory('拍卖时间', [$row[id]=> $row[pmtime]]);  
$iniFile->addCategory('拍卖物品id', [$row[id]=> $row[pmwpid]]);  
$iniFile->addCategory('拍卖数量', [$row[id]=> $row[pmwpsl]]);  
$iniFile->addCategory('拍卖名字', [$row[id]=> $row[pmwpmz]]);  
$iniFile->addCategory('拍卖价格', [$row[id]=> $row[pmwpjg]]);  
$iniFile->addCategory('拍卖时间搓', [$row[id]=> $row[pmsjc]]);  
}

   







}



}


$iniFile = new iniFile($file);





?>