<?php

if($npcc==1&&$fz02==1){

if($fz02==1){

$fz02="民宅";
} elseif($fz02==2){  
$fz02="豪宅";
} elseif($fz02==3){ 
$fz02="官宅";
} else{

}
include("./sql/mysql.php");//调用数据库连接

include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));	

$fz001=1000000;//民宅价格100万
$q2="all_yl";
$yll=$yl+$fz001;
$strsql = "update $q2 set bbyl=$yll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);

$q2="all_houres";
$strsql="delete from $q2 where fzid=$fz";
$result=mysql_query($strsql);
$q2="all_zt";
mysql_query("set names utf8");
$strsql = "update $q2 set zzid=0,zzmz='0',zzfl=0 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);

//清空家具
$q2="jj".$wjid;
$strsql="truncate table $q2";
$result=mysql_query($strsql);

//更新缓存数据
$inina="jj.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
//更新缓存数据


include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['住宅id'=> 0]);
$iniFile->updItem('玩家信息', ['住宅分类'=> 0]);
$iniFile->updItem('玩家信息', ['住宅名字'=> 0]);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两'=> $yll]);



echo "<font color=black>恭喜你,出售掉了".$fz01."(".$fz02."),获得100万银两</font>"."<br>";



} elseif($npcc==2&&$fz02==2){  

include("./sql/mysql.php");//调用数据库连接
include("./ini/sc_ini.php");
$jd=($iniFile->getItem('商城数量','127'));	



$q2="all_houres";
$strsql="delete from $q2 where fzid=$fz";
$result=mysql_query($strsql);
$q2="all_zt";
mysql_query("set names utf8");
$strsql = "update $q2 set zzid=0,zzmz='0',zzfl=0 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);



//清空家具
$q2="jj".$wjid;
$strsql="truncate table $q2";
$result=mysql_query($strsql);

//更新缓存数据
$inina="jj.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
//更新缓存数据


include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['住宅id'=> 0]);
$iniFile->updItem('玩家信息', ['住宅分类'=> 0]);
$iniFile->updItem('玩家信息', ['住宅名字'=> 0]);








$kcjd=$jd+50;


if($jd==""){  
$q2="wp".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}


$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','127','$kcjd','4')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }


//更新缓存数据
$inina="sc.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据


} else{
	
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$kcjd where wpid=127";//物品id号必改值
$result = mysql_query($strsql);




include("./ini/sc_ini.php");
$iniFile->updItem('商城数量', ['127'=> $kcjd]);
	
	
	
	
	
	
	
	
	
	

}












if($fz02==1){

$fz02="民宅";
} elseif($fz02==2){  
$fz02="豪宅";
} elseif($fz02==3){ 
$fz02="官宅";
} else{

}





echo "<font color=black>恭喜你,出售掉了".$fz01."(".$fz02."),获得〖金豆〗x50</font>"."<br>";







} else{


if($npcc==1){

$fz02="民宅";
} elseif($npcc==2){  
$fz02="豪宅";
} elseif($npcc==3){ 
$fz02="官宅";
} else{

}


echo "<font color=black>你没有".$fz02."可以卖</font>"."<br>";


}


















?>


