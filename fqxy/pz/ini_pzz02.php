<?php

$manzu1="";
if($pdmz==2){

//银两扣除	
if($ylkc==2){
$yll=$yl-$kcyl01;
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yl"; //数据库位置 
$strsql = "update $q2 set bbyl=$yll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yl_ini.php");
//缓存修改
$iniFile->updItem('背包仓库银两', ['背包银两' => $yll]);

$manzu1=$manzu1."<font color=black>失去：".$kcyl01."银两</font>"."<br>";
} else{

}
//银两扣除		
	
	
	

	
//得到装备	
if($zbdd1==2){
//---------------------------------------------------
$zbid=$xyzbid1;//得到装备的id
include("ini_pz11.php");//调用ini缓存位置
//---------------------------------------------------
} else{

}
//得到装备	
	
	




	//	输出满足提示语言
echo $manzu1;

} else{
	
//	输出不满足提示语言
echo "<font color=red>对不起！需要：".$bumanzu."</font>"."<br>";

	

}

?>
