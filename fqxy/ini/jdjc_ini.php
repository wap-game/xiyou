<?php
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="jdjc.ini";
$path='acher/hdjc';
$file = $path."/".$inina;	
if(file_exists($file)){
	
	
} else{
  //连接数据库提取数据写入ini 
   
$inina="jdjc.ini";
$path='acher/hdjc';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[拳头竞猜]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

$iniFile->addItem('排行榜名字',['初始' => 123]);
$iniFile->addItem('排行榜值1',['初始' => 0]); 
$iniFile->addItem('排行榜值2',['初始' => 0]); 
$iniFile->addItem('排行榜值3',['初始' => 0]); 
$iniFile->addItem('排行榜值4',['初始' => 0]); 
$iniFile->addItem('排行榜值5',['初始' => 0]); 
$iniFile->addItem('排行榜值6',['初始' => 0]); 
include("./sql/mysql.php");//调用数据库连接 
//判断表是否存在
$q2="all_jdjc";
if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '". $q2."'"))==1) {
} else {
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $q2 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号id',
`wjid` int( 11  )  NOT  NULL default  '0' COMMENT  '玩家id',
`vip` int( 11  )  NOT  NULL default  '0' COMMENT  'vip等级',
 `wjmz` text NOT  NULL  COMMENT  '玩家名字',
 `jcjg` text NOT  NULL  COMMENT  '竞猜价格',
`cq` int( 11  )  NOT  NULL default  '0' COMMENT  '出拳',
`timex` text NOT  NULL  COMMENT  '竞猜时间')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);
}
//判断表是否存在


$q2="all_jdjc";
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组

 while(!!$row=mysql_fetch_array($result)){

 
$iniFile->addCategory('排行榜名字', [$row[id]=> $row[wjmz]]);
$iniFile->addCategory('排行榜值1', [$row[id]=> $row[wjid]]);
$iniFile->addCategory('排行榜值2', [$row[id]=> $row[jcjg]]);
$iniFile->addCategory('排行榜值3', [$row[id]=> $row[vip]]);
$iniFile->addCategory('排行榜值4', [$row[id]=> $row[id]]); 
$iniFile->addCategory('排行榜值5', [$row[id]=> $row[cq]]); 
$iniFile->addCategory('排行榜值6', [$row[id]=> $row[timex]]); 



}












}






$iniFile = new iniFile($file);

	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>