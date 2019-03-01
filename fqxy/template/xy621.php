<?php


/////////公共锁
$path='acher/lock';//路径
$lockmz='ltbw_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁

if($all_lock2==1){
$zlid=$npcc;
include("./ini/ltbw_ini.php");
# 获取一个分类下某个子项的值
$ltmz0=($iniFile->getItem('占领玩家id',$zlid));
$ltmz1=($iniFile->getItem('占领膜拜',$zlid));
if($ltmz0!=$wjid){
$hdid=298;
$npcc=$hdid;	
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
$hdlq=2;
} else{	
}

//如果跨天则重置次数和时间
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证



include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=5 where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => '5']);	
$hdcs=5;



} else{	

} 

if ($hdcs>=1) {


//获取膜拜人员	
include("./ini/ltmb_ini.php");	
# 获取一个分类下所有数据
$os=($iniFile->getCategory('膜拜人员'));

if (in_array($ltmz0, $os)) {
echo "<font color=black>你今日，已经膜拜过他/她了~~~</font>"."<br>";

} else{	


	



	
$hdcs=$hdcs-1;
$nowtime=date('Y-m-d H:i:s');	
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=$hdcs where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => $hdcs]);	
$ltmz1=$ltmz1+1;
$q2="all_ltbw";
mysql_query("set names utf8");
$strsql = "update $q2 set zlmb='$ltmz1' where id=$zlid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/ltbw_ini.php");
$iniFile->updItem('占领膜拜', [$zlid => $ltmz1]);
//记录膜拜
include("./ini/ltmb_ini.php");	
$iniFile->updItem('膜拜人员', [$zlid => $ltmz0]);
//随机
$bz1= rand(1000000, 10000000);
$yl1=$bz1;
$wwpsl=$yl1;
include("./pz/ini_pz03.php");	
//随机
$bz1= rand(1000000, 10000000);
$jy=$bz1;
include("./pz/ini_pzz023.php");


///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////


$wjid1=$wjid;
$wjid=$wjid;//自己
$u_wjid=$wjid;
include("./ini/zt_ini.php");
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));


	//调用msg.ini是否存在
 $wjtake="在天下第一武道大会对您进行了膜拜！！这一刻更是王者的象征！！";
 

 
 $wjid=$ltmz0;//对方

include("./ini/msg_ini.php");
$hkeyltpx1[]="";
$hltpx1="";
$arr3="";
# 获取一个分类下所有数据
$hltpx1=($iniFile->getCategory('玩家排序'));
	foreach(array_keys($hltpx1) as $key){
$hkeyltpx1[]=$hltpx1[$key];
}
	
	
$tmp1="排序";
$arr3=$hkeyltpx1;
foreach( $arr3 as $k=>$v) {
    if($tmp1 == $v) unset($arr3[$k]);
}

$ltmax1=max($arr3);
if($ltmax1=="排序"){
$ltmax1=0;
	} else{
	} 
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $u_wjid]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 

///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////

$wjid=$wjid1;//自己
	
echo "<font color=black>恭喜你！！膜拜成功，求大佬包养~~~</font>"."<br>";

} 

} else{	
echo "<font color=black>对不起！！您今日膜拜次数已用完</font>"."<br>";
} 


} else{	
echo "<font color=black>无间道么！？自己和自己膜拜自己？</font>"."<br>";
}


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=402;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回武道场</font></a>"."<font color=black></font>"."<br>";
	
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";


echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");
} else{	
}

//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini
	
	

?>