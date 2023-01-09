<?php


include("./ini/yl_ini.php");
$wpzzz="背包仓库银两";  
$wwpid="背包银两";                
$inina="yl.ini";


include("./ini/mysql.php");//调用数据库连接 	



//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$wjwp=($iniFile->getItem($wpzzz,$wwpid));


$q2="all_yl";  
if($wjwp !=""){
$xwpsl=$wjwp+$wwpsl;



if($xwpsl >9999999999999){
include("./sql/mysql.php");//调用数据库连接 	
$xwpsl=99999999999;
$strsql = "update $q2 set bbyl=$xwpsl where wjid=$wjid";
$result = @mysql_query($strsql);
$ylmm=2;
//更新本地数据
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem($wpzzz, [$wwpid => $xwpsl]);
} else{
	
include("./sql/mysql.php");//调用数据库连接 
$strsql = "update $q2 set bbyl=$xwpsl where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
//数据库修改
//缓存修改
$iniFile->updItem($wpzzz, [$wwpid => $xwpsl]);
//缓存修改
$ylmm=1;
}



} else{
	include("./sql/mysql.php");//调用数据库连接 
	//新增数据

$ylmm=1;
$sql = "insert into $q2 (wjid,bbyl,ckyl)  values($wjid,$wwpsl,'0')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
	//新增数据
//更新缓存数据
unlink($ininame); //删除文件  
//更新缓存数据
//调用yl.ini是否存在
include("./ini/yl_ini.php");
}

if($ylmm ==2){
echo "<font color=red>银两达到上限，无法获得银两</font><br>";

} else{
$yl=$wwpsl;
echo "<font color=black>得到了</font>";
include("./wp/ylxx.php");//显示为汉字
}


echo "<br>";











?>
