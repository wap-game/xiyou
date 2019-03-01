<?php

$file="";
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="ylck.ini";
$path='ache/'.$wjid;

$file = $path."/".$inina;	

if(file_exists($file)){


}else{

include("./sql/mysql.php");//调用数据库连接 
 //判断表是否存在
$q2="all_ylck";
if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '". $q2."'"))==1) {
} else {
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $q2 
(`wjid` int( 11  )  NOT  NULL default  '0' COMMENT  '玩家id',
`yl01` text NOT  NULL  COMMENT  '银两',
`yl02` text NOT  NULL  COMMENT  '金豆',
`yl03` text NOT  NULL  COMMENT  '金带')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);
}
//判断表是否存在  


$q2="all_ylck";
mysql_query("set names utf8");
$sql1=mysql_query("select * from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$yl01=$info1[yl01];
$yl02=$info1[yl02];
$yl03=$info1[yl03];

if($yl01>=1){
} else {
$yl01=0;	
} 
if($yl02>=1){
} else {
$yl02=0;	
} 
if($yl03>=1){
} else {
$yl03=0;	
} 
$inina="ylck.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('玩家信息',['初始' => 123]);
$iniFile->addCategory('玩家信息', ['银两' => $yl01, '金豆' => $yl02,'金带' => $yl03]);
//数据库数据导入ini文件








}


$iniFile = new iniFile($file);


	
	
	
	
	
	
	
	
?>