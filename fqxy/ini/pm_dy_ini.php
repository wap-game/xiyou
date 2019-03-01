<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="pm_dy.ini";
$path='acher/pm';
$file = $path."/".$inina;	
if(file_exists($file)){


} else{
   //连接数据库提取数据写入ini 
   
$inina="pm_dy.ini";
$path='acher/pm';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家背包]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('排序',['初始' => 123]); 
$iniFile->addItem('玩家id',['初始' => 123]); 
$iniFile->addItem('玩家名字',['初始' => 123]); 
$iniFile->addItem('拍卖时间',['初始' => 123]); 
$iniFile->addItem('拍卖物品id',['初始' => 123]); 
$iniFile->addItem('拍卖数量',['初始' => 123]);
$iniFile->addItem('拍卖名字',['初始' => 123]); 
$iniFile->addItem('拍卖价格',['初始' => 123]); 
$iniFile->addItem('拍卖时间搓',['初始' => 123]); 



include("./sql/mysql.php");//调用数据库连接 
   

//判断表是否存在
$q2="all_pm";
if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '". $q2."'"))==1) {
} else {
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $q2 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '标识',
`wjid` int( 11  )  NOT  NULL default  '0' COMMENT  '玩家id',
`wjmz` text NOT  NULL  COMMENT  '玩家名字',
`pmtime` datetime  NOT  NULL  COMMENT  '拍卖时间',
`pmwpid` int( 11  )  NOT  NULL default  '0' COMMENT  '拍卖物品id',
`pmwpmz` text NOT  NULL  COMMENT  '拍卖物品名字',
`pmwpsl` int( 11  )  NOT  NULL default  '0' COMMENT  '拍卖物品数量',
`pmwpjg` text NOT  NULL  COMMENT  '拍卖物品价格',
`pmsjc` int( 11  )  NOT  NULL default  '0' COMMENT  '拍卖时间搓',
`pmwpfl` int( 11  )  NOT  NULL default  '0' COMMENT  '拍卖物品分类')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);
}
//判断表是否存在 
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   


$q2="all_pm";


mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');





 while(!!$row=mysql_fetch_array($result)){

if($row[pmwpfl]==5){
if($row[pmwpsl]>0){  



$iniFile->addCategory('排序', [$row[id]=> $row[id]]); 
$iniFile->addCategory('玩家id', [$row[id]=> $row[wjid]]);  
$iniFile->addCategory('玩家名字', [$row[id]=> $row[wjmz]]);  
$iniFile->addCategory('拍卖时间', [$row[id]=> $row[pmtime]]);  
$iniFile->addCategory('拍卖物品id', [$row[id]=> $row[pmwpid]]);  
$iniFile->addCategory('拍卖数量', [$row[id]=> $row[pmwpsl]]);  
$iniFile->addCategory('拍卖名字', [$row[id]=> $row[pmwpmz]]);  
$iniFile->addCategory('拍卖价格', [$row[id]=> $row[pmwpjg]]);  
$iniFile->addCategory('拍卖时间搓', [$row[id]=> $row[pmsjc]]);  
}
}
   







}



}


$iniFile = new iniFile($file);





?>