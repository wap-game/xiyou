<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//ini文件名字
$inina="hy.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 获取一个分类下某个子项的值
$wpmz=($iniFile->getItem('好友名字',$xlh));

include("./sql/mysql.php");//调用数据库连接 
$q2="hy".$wjid;
$strsql = "delete from $q2 where id=$xlh ";//物品id号必改值
$result = mysql_query($strsql);

# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('好友id', $xlh);
# 删除一个子项
$iniFile->delItem('好友分类', $xlh);
# 删除一个子项
$iniFile->delItem('好友名字', $xlh);

echo "<font color=red>你将：".$wpmz."移除了黑名单</font>"."<br>";

include("template/xy116.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>





