<?php
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="hdjc.ini";
$path='acher/hdjc';
$file = $path."/".$inina;	
if(file_exists($file)){
	
	
} else{
	
	
$inina="hdjc.ini";
$path='acher/hdjc';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[奖金池]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

$iniFile->addItem('奖金池',['初始' => 123]); 

include("./sql/mysql.php");//调用数据库连接 
	
	
//判断值是否存在



///////////////////////////摇点奖金池/////////////金豆
$xlidd=1;
$q2="all_jc";
$sql1=mysql_query("select xlid from $q2 where xlid=$xlidd",$conn);
$info1=@mysql_fetch_array($sql1);
$xlpd=$info1[xlid];
if($xlpd ==""){
//获取最大值
$q2="all_jc";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}

$sql = "insert into $q2 (id,xlid,jc)  values('$maxidd','$xlidd','500')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}
///////////////////////////摇点奖金池/////////////10金豆








///////////////////////////摇点奖金池/////////////20金豆



$xlidd=2;
$q2="all_jc";
$sql1=mysql_query("select xlid from $q2 where xlid=$xlidd",$conn);
$info1=@mysql_fetch_array($sql1);
$xlpd=$info1[xlid];
if($xlpd ==""){
//获取最大值
$q2="all_jc";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,xlid,jc)  values('$maxidd','$xlidd','1000')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}

///////////////////////////摇点奖金池/////////////20金豆




///////////////////////////摇点奖金池银两/////////////10金豆





$xlidd=3;
$q2="all_jc";
$sql1=mysql_query("select xlid from $q2 where xlid=$xlidd",$conn);
$info1=@mysql_fetch_array($sql1);
$xlpd=$info1[xlid];
if($xlpd ==""){
//获取最大值
$q2="all_jc";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,xlid,jc)  values('$maxidd','$xlidd','2500000000')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}

$xlidd=4;
$q2="all_jc";
$sql1=mysql_query("select xlid from $q2 where xlid=$xlidd",$conn);
$info1=@mysql_fetch_array($sql1);
$xlpd=$info1[xlid];
if($xlpd ==""){
//获取最大值
$q2="all_jc";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,xlid,jc)  values('$maxidd','$xlidd','5000000000')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}




//判断值是否存在

	
	
$q2="all_jc";
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;


 while(!!$row=mysql_fetch_array($result)){
	 
	 
$iniFile->addCategory('奖金池', [$row[xlid]=> $row[jc]]);
}








}






$iniFile = new iniFile($file);

	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>