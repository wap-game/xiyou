<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="xl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){

} else{
	

   //连接数据库提取数据写入ini 
   
$inina="xl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家修炼]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

$iniFile->addItem('修炼等级',['初始' => 123]); 
include("./sql/mysql.php");//调用数据库连接 
//判断表是否存在
$q2="xl".$wjid;
if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '". $q2."'"))==1) {
} else {
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $q2 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号id',
`xlid` int( 11  )  NOT  NULL default  '0' COMMENT  '修炼id',
`xldj` int( 11  )  NOT  NULL default  '0' COMMENT  '修炼等级')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);
}
//判断表是否存在










//判断值是否存在


$xlidd=1;
$q2="xl".$wjid;
$sql1=mysql_query("select xlid from $q2 where xlid=$xlidd",$conn);
$info1=@mysql_fetch_array($sql1);
$xlpd=$info1[xlid];
if($xlpd ==""){
//获取最大值
$q2="xl".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,xlid,xldj)  values('$maxidd','$xlidd','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}

$xlidd=2;
$q2="xl".$wjid;
$sql1=mysql_query("select xlid from $q2 where xlid=$xlidd",$conn);
$info1=@mysql_fetch_array($sql1);
$xlpd=$info1[xlid];
if($xlpd ==""){
//获取最大值
$q2="xl".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,xlid,xldj)  values('$maxidd','$xlidd','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}

$xlidd=3;
$q2="xl".$wjid;
$sql1=mysql_query("select xlid from $q2 where xlid=$xlidd",$conn);
$info1=@mysql_fetch_array($sql1);
$xlpd=$info1[xlid];
if($xlpd ==""){
//获取最大值
$q2="xl".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,xlid,xldj)  values('$maxidd','$xlidd','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}

$xlidd=4;
$q2="xl".$wjid;
$sql1=mysql_query("select xlid from $q2 where xlid=$xlidd",$conn);
$info1=@mysql_fetch_array($sql1);
$xlpd=$info1[xlid];
if($xlpd ==""){
//获取最大值
$q2="xl".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,xlid,xldj)  values('$maxidd','$xlidd','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}









//判断值是否存在






$q2="xl".$wjid;
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;




 while(!!$row=mysql_fetch_array($result)){

 
 


$iniFile->addCategory('修炼等级', [$row[xlid]=> $row[xldj]]);





}








}






$iniFile = new iniFile($file);











?>