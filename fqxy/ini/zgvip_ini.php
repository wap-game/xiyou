<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="zgvip.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
   //连接数据库提取数据写入ini 
   
$inina="zgvip.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家修炼]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

$iniFile->addItem('尊贵vip',['初始' => 123]); 
$iniFile->addItem('尊贵vip开关',['初始' => 123]); 
include("./sql/mysql.php");//调用数据库连接 
//判断表是否存在
$q2="zgvip".$wjid;
if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '". $q2."'"))==1) {
} else {
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $q2 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号ID',
`zgviptime` datetime  NOT  NULL  COMMENT  '尊贵vip时间',
`xs` int( 11  )  NOT  NULL default  '0' COMMENT  '显示')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);
}
//判断表是否存在

$xlidd=1;
$q2="zgvip".$wjid;
$sql1=mysql_query("select xlid from $q2 where id=$xlidd",$conn);
$info1=@mysql_fetch_array($sql1);
$id=$info1[id];
if($id ==""){
$nowtime=date('Y-m-d H:i:s');	
$sql = "insert into $q2 (id,zgviptime,xs)  values('$xlidd','$nowtime','1')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}





$q2="zgvip".$wjid;
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;
 while(!!$row=mysql_fetch_array($result)){
$iniFile->addCategory('尊贵vip', [$row[id]=> $row[zgviptime]]);
$iniFile->addCategory('尊贵vip开关', [$row[id]=> $row[xs]]);



}







 

}
$iniFile = new iniFile($file);



?>