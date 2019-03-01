<?php



echo "<font color=red>【封号操作】</font>"."<br>";

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
include("./ini/alluser_ini.php");


$jy01=($iniFile->getItem('封号信息','永久'));
$jy02=($iniFile->getItem('封号信息','封号时间'));
$jy03=($iniFile->getItem('封号信息','解除变量'));

//调用zt.ini是否存在
include("./ini/zt_ini.php");
$wjname=($iniFile->getItem('玩家信息','玩家名字'));




//查询封号是否到期永久则不行

if($jy03!=""){

if($jy01!=2){

if($jy03 >= 1){	
$startdate=$jy02;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));	

if($minute <= $jy03){
$jybl=2;
$minute1=$jy03-$minute;
$minute=floor($minute1/60);
$second=$minute1%60;
if($minute > 0){	

} else{

} 
} else{
	

include("./sql/mysql.php");//调用数据库连接 
$q2="all_user";
$strsql = "delete from $q2 where wjid=$wjid and fl=2 ";//物品id号必改值
$result = mysql_query($strsql);


$jy03="";
}

} else{	

include("./sql/mysql.php");//调用数据库连接 
$q2="all_user";
$strsql = "delete from $q2 where wjid=$wjid and fl=2 ";//物品id号必改值
$result = mysql_query($strsql);

$jy03="";
} 
} else{	



}

} else{	

}















if($jy03==""){
   //连接数据库提取数据写入ini 
   
include("./sql/mysql.php");//调用数据库连接 
//获取最大值
$q2="all_user";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$time=15552000;
$nowtime=date('Y-m-d H:i:s');
mysql_query("set names utf8");
$sql = "insert into $q2 (id,wjid,wjname,wjtime,utime,fl,yj)  values('$maxidd','$wjid','$wjname','$nowtime','$time','2','1')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
 
 
 
//更新缓存数据
$inina="all_user.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据



echo "<font color=black>成功对".$wjname."进行了半年封号处罚！！</font>"."<br>";











} else{	
echo "<font color=black>对不起！".$wjname."正处于封号状态！！</font>"."<br>";

}











} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//












echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";


















?>





