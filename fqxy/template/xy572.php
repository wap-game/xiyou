<?php


//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='allhbmoney_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁


if($zsspd==1&&$all_lock2==1){
include("./ini/hbmoneybs_ini.php");
$csbs=($iniFile->getItem('财神倍数','初始'));	
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
include("./ini/hbmoney_ini.php");
$csb=($iniFile->getItem('财神币','初始'));
$csbyq=$csbs;//需要多少财神币
$csbyq1=$csbyq;

//扣除手续费用
$bfb=floor($csbyq*0.1);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;





if($csb>=$csbyq){
//随机
$bz= rand(1, 10);

//通过奖池干扰随机数
include("./ini/hbmoneyjc_ini.php");
$csbzh=($iniFile->getItem('财神币总和','初始'));
$csbzh1=($iniFile->getItem('财神币总和','初始1'));
$csbym=$csbzh;
if($csbyq<=1){
$bzz=8;		
} else{	
if($csbym<=$csbyq){
$bzz=7;//迅速回本
} else{		
$bzz=6;	
} 
} 

//奖励2-10倍暴击	
$csbydd=$csbyq*2;

if($csbydd<=$csbym){

$i=1;	
$bj=0;
for($d=0;$d<10;$d++){
$i=$i+1;

$csbyw=$csbyq*$i;

if($csbyw<=$csbym){

$bj=$i;

	
} else{		
} 	
} 
} else{		
} 	
//奖励1-10倍暴击	
//随机
$sjbz= rand(1, 10);	
if($sjbz>=7){
if($bj>=3){	
//随机
$bj= rand(2, $bj);	
$csbyq=$csbyq*$bj;
} else{	
if($bj==2){	
$csbyq=$csbyq*$bj;
} else{	
} 
} 
} else{	
$bj=1;
$csbyq=$csbyq1;
} 

	
if($bz>=$bzz){
include("./ini/hbmoney_ini.php");	
$csbb=$csb+$csbyq;
$iniFile->updItem('财神币', ['初始' => $csbb]);
include("./sql/mysql.php");//调用数据库连接 
$q2="all_money";
$strsql = "update $q2 set money=$csbb where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);	


$csbbjc=$csbzh-$csbyq-$ylsxf;
include("./ini/hbmoneyjc_ini.php");
$iniFile->updItem('财神币总和', ['初始' => $csbbjc]);
$q2="all_hbmoneyjc";
$strsql = "update $q2 set money=$csbbjc where id=1";//物品id号必改值
$result = mysql_query($strsql);	

//保存盈利
$csbzh1=$csbzh1-$csbyq;
include("./ini/hbmoneyjc_ini.php");
$iniFile->updItem('财神币总和', ['初始1' => $csbzh1]);
$strsql = "update $q2 set money=$csbzh1 where id=2";//物品id号必改值
$result = mysql_query($strsql);	
//保存盈利


$ds= rand(4, 6);
echo "<font color=red>红包结果：【红包】（真）</font>"."<br>";
echo "<font color=black>你选择了：【红包】（真）</font>"."<br>";

if($bj>=2){
echo "<font color=black>恭喜你！！获得了：红包+".$csbyq."个</font>"."<br>";	
echo "<font color=red>本轮获得【红包挖宝".$bj."倍甜蜜大暴击】</font>"."<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在【红包挖宝】中获得了【红包挖宝".$bj."倍甜蜜大暴击】".$csbyq."个红包";
include("./msg/msgg02.php");

} else{	
echo "<font color=black>恭喜你！！获得了：红包+".$csbyq."个</font>"."<br>";

} 

} else{	
$csbyq=$csbyq1;
include("./ini/hbmoney_ini.php");
$csbb=$csb-$csbyq;
$iniFile->updItem('财神币', ['初始' => $csbb]);
include("./sql/mysql.php");//调用数据库连接 
$q2="all_hbmoney";
$strsql = "update $q2 set money=$csbb where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);	

$csbbjc=$csbzh+$csbyq-$ylsxf;

include("./ini/hbmoneyjc_ini.php");
$iniFile->updItem('财神币总和', ['初始' => $csbbjc]);
$q2="all_hbmoneyjc";
$strsql = "update $q2 set money=$csbbjc where id=1";//物品id号必改值
$result = mysql_query($strsql);	


//保存盈利
$csbzh1=$csbzh1+$csbyq;
include("./ini/hbmoneyjc_ini.php");
$iniFile->updItem('财神币总和', ['初始1' => $csbzh1]);
$strsql = "update $q2 set money=$csbzh1 where id=2";//物品id号必改值
$result = mysql_query($strsql);	
//保存盈利

$ds= rand(1, 3);	
echo "<font color=red>红包结果：【红包】（假）</font>"."<br>";
echo "<font color=black>你选择了：【红包】（真）</font>"."<br>";
echo "<font color=black>很遗憾！！红包-".$csbyq."个</font>"."<br>";
}
} else{	
echo "<font color=red>对不起！！你的红包不足".$csbyq."个~~</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=574;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>立即充值</font></a>"."<font color=black></font>"."<br>";


}






echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=570;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<font color=black></font>"."<br>";



} else{	
}



//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini


//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini







?>