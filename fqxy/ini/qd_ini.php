<?php


$file="";
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="qd.ini";
$path='ache/'.$wjid;

$file = $path."/".$inina;	

if(file_exists($file))
{


}
else
{
   //连接数据库提取数据写入ini 
   
include("./sql/mysql.php");//调用数据库连接 
   
$q2="all_qd";
mysql_query("set names utf8");
$sql1=mysql_query("select * from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$id=$info1[id];
if($id ==""){

$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$qdy= date('m')*1;
$qdsj=0;
$qdcs=0;

$sql = "insert into $q2 (id,wjid,qdcs,qdy,qd1,qd2,qd3,qd4,qd5)  values('$maxidd','$wjid','$qdcs','$qdy','1','1','1','1','1')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
 
 mysql_query("set names utf8");
$sql1=mysql_query("select * from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
  

$qdcs=$info1[qdcs];
$qdy=$info1[qdy];
$qd1=$info1[qd1];
$qd2=$info1[qd2];
$qd3=$info1[qd3];
$qd4=$info1[qd4];
$qd5=$info1[qd5];
 
 } else{	
 

$qdcs=$info1[qdcs];
$qdy=$info1[qdy];
$qd1=$info1[qd1];
$qd2=$info1[qd2];
$qd3=$info1[qd3];
$qd4=$info1[qd4];
$qd5=$info1[qd5];
 
}
 
 
 
 
 
 





$inina="qd.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");


# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
//数据库数据导入ini文件
# 添加一个分类并直接添加子项
$iniFile->addItem('签到信息',['初始' => 123]);
$iniFile->addCategory('签到信息', ['签到次数' => $qdcs,'签到月' => $qdy,'签到1' => $qd1,'签到2' => $qd2,'签到3' => $qd3,'签到4' => $qd4,'签到5' => $qd5]);
//数据库数据导入ini文件


}


$iniFile = new iniFile($file);




?>