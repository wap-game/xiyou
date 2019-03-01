<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){



if($bpid>=1){
	include("./ini/bpp_ini.php");
# 获取一个分类下所有数据
$gjid=($iniFile->getCategory('序列'));
	$m=count($gjid,0)-1; 
	if($m==1){

		//是否为国家官员
include("./ini/bp_ini.php");
$gjmz=($iniFile->getItem('国家信息','国家名字'));
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
$strsql = "update $q2 set bpid=0,bpmz=0 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$q2="all_bp";
$strsql = "delete from $q2 where bpid=$bpid ";//物品id号必改值
$result = mysql_query($strsql);
$bpbb="bp".$bpid;

$sql = "DROP TABLE $bpbb";
mysql_query($sql,$conn);



include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['帮派id'=> 0]);
$iniFile->updItem('玩家信息', ['帮派名字'=> 0]);
$iniFile->updItem('玩家信息', ['帮派职务'=> 0]);

//更新缓存数据
$inina="bpp".$bpid.".ini";
$path='acher/bp';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

//更新缓存数据
$inina="bp".$bpid.".ini";
$path='acher/bp';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据





echo "<font color=red>你解散了".$gjmz."</font><br>";

} else{
	
	
	
echo "<font color=red>对不起！要解散国家".$gjmz."需要将你国家的子民流放掉！！</font><br>";
	
	
	
	
	
	
	
	
} 


} else{
	

echo "<font color=black>你还未加入任何国家！！</font><br>";
}





echo "<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");









} else{	
}
//解锁当前使用的ini
include("./ini/jjsini.php");
//解锁当前使用的ini



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini










?>