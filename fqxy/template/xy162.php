<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	

include("./sql/mysql.php");//调用数据库连接 	
$q2="jj".$wjid;
$strsql = "update $q2 set jjbf=2 where jjid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
$jjid=$npcc;
//调用物品信息
include("./wp/jjxx.php");
//调用家具缓存
include("./ini/jj_ini.php");
$iniFile->updItem('家具摆放', [$npcc => 2]);

echo "<font color=black>你摆放".$jjmz."！！</font>"."<br>";

	 //更新缓存数据
$inina="ztt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

include("template/xy160.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");









} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>