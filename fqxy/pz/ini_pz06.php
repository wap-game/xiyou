<?php

	
//调用zt.ini是否存在
include("./ini/zt_ini.php");
//判断验证使用次数
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ckrl=($iniFile->getItem($wpzz1,$wpzz2));

$ckrl1=$ckrl+$ckkr;
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";                //数据库位置               //

$strsql = "update $q2 set $ccc=$ckrl1 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);


//缓存修改
$iniFile->updItem($wpzz1, [$wpzz2 => $ckrl1]);
//缓存修改
$wpsy=2;//使用成功
echo "<font color=black>恭喜你！".$wpzz2."+".$ckkr."</font><br>";

?>
