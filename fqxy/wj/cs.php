<?php


	
	

include("./sql/mysql.php");//调用数据库连接 
//清空报名表
$q2="gz02";
$strsql = "truncate table $q2";
$result = mysql_query($strsql);
//更新缓存数据
$inina="gz02.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
if($xtbl1==""){
//新增数据
$q2="xtbl";
$sql = "insert into $q2 (id,bl1,bl2)  values('1','$m','$d')";
if (!mysql_query($sql,$conn)){
die('Error: ' . mysql_error());
}

//更新缓存数据
$inina="xtbl.ini";
$path='acher/guoz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
} else{
//修改数据
$q2="xtbl";
$strsql = "update $q2 set bl1=$m,bl2=$d where id=1";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/xtbl_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('国战判断时间', ['月' => $m]);
$iniFile->updItem('国战判断时间', ['日' => $d]);
}	

	

	
	
	
	
	
	
	
	










?>


