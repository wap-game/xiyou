<?php





include("./ini/sw_ini.php");
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));
$sw=$sw[$swmzx]+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('声望值', [$swmzx => $sw]);	
///缓存更新
	
include("./sql/mysql.php");//调用数据库连接 
$q2="sw".$wjid;
$strsql = "update $q2 set swzz=$sw where swid=$swidx";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>获得".$syz.$swmzx."！！</font><br>";




?>
