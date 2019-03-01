<?php
include("./sql/mysql.php");//调用数据库连接 
$q2="o_user_list";
$sql1=mysql_query("select MAX(uid) from $q2");
$abc=mysql_fetch_array($sql1);
$maxuid=$abc[0];


$czid=821;


echo "查询全服物品ID:".$czid."如下</br>";
$i=0;	
for($d=0;$d<$maxuid;$d++){
$wjid="";	
$bbrlb="";
$i=$i+1;	
$wjid=$i+10000000;
//查询如果没有则添加
$q2="wp".$wjid;
$sql1=mysql_query("select wpsl from $q2 where wpid=$czid",$conn);
$info1=@mysql_fetch_array($sql1);
$ckwpsl=$info1[wpsl];
if($ckwpsl ==""){
$ckwpsl=0;
} else{
}
$q2="ckwp".$wjid;
$sql1=mysql_query("select wpsl from $q2 where wpid=$czid",$conn);
$info1=@mysql_fetch_array($sql1);
$ckwpsl1=$info1[wpsl];
if($ckwpsl1 ==""){
$ckwpsl1=0;
} else{
}

if($ckwpsl >=1||$ckwpsl1 >=1){
	

	
if($ckwpsl >=1&&$ckwpsl1 >=1){	
	
echo "<font color=red>【YES】</font>玩家ID（".$wjid."）所属物品ID：【".$czid."】====<font color=red>背包数量：【".$ckwpsl."】</font>====<font color=red>仓库数量：【".$ckwpsl1."】</font></br>";	
	
} else{	
if($ckwpsl >=1){
echo "<font color=red>【YES】</font>玩家ID（".$wjid."）所属物品ID：【".$czid."】====<font color=red>背包数量：【".$ckwpsl."】</font>====仓库数量：【".$ckwpsl1."】</br>";
} else{
} 
if($ckwpsl1 >=1){
echo "<font color=red>【YES】</font>玩家ID（".$wjid."）所属物品ID：【".$czid."】====背包数量：【".$ckwpsl."】====<font color=red>仓库数量：【".$ckwpsl1."】</font></br>";
} else{
} 
} 








} else{
echo "【NO】玩家ID（".$wjid."）所属物品ID：【".$czid."】====背包数量：【".$ckwpsl."】====仓库数量：【".$ckwpsl1."】</br>";	
}



} 


echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=3'><font color=blue>【返回上级】</font></a>"."<br>";

















?>





