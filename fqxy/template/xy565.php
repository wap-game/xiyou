<?php


//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='allmoney_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁


if($zsspd==1&&$all_lock2==1){
include("./ini/moneybs_ini.php");
$csbs=($iniFile->getItem('财神倍数','初始'));	
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
include("./ini/money_ini.php");
$csb=($iniFile->getItem('财神币','初始'));
$csbyq=$csbs;//需要多少财神币
$csbyq1=$csbyq;

//扣除手续费用
$bfb=floor($csbyq*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;





if($csb>=$csbyq){
//随机
$bz= rand(1, 10);

//通过奖池干扰随机数
include("./ini/moneyjc_ini.php");
$csbzh=($iniFile->getItem('财神币总和','初始'));
$csbzh1=($iniFile->getItem('财神币总和','初始1'));
$csbym=$csbzh;


if($csbyq<=1){
$bzz=1;		
} else{	
if($csbym<=$csbyq){
$bzz=2;//迅速回本
} else{		
$bzz=3;	
} 
} 


//随机不出暴击
$bz= rand(1, 10);
if($bz<=6){
$csbym=-1;		
} else{	
}
//随机不出暴击

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

	
if($bz<=$bzz){
include("./ini/money_ini.php");	
$csbb=$csb+$csbyq;
$iniFile->updItem('财神币', ['初始' => $csbb]);
include("./sql/mysql.php");//调用数据库连接 
$q2="all_money";
$strsql = "update $q2 set money=$csbb where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);	


$csbbjc=$csbzh-$csbyq-$ylsxf;


include("./ini/moneyjc_ini.php");
$iniFile->updItem('财神币总和', ['初始' => $csbbjc]);
$q2="all_moneyjc";
$strsql = "update $q2 set money=$csbbjc where id=1";//物品id号必改值
$result = mysql_query($strsql);	



//保存盈利
$csbzh1=$csbzh1-$csbyq;
include("./ini/moneyjc_ini.php");
$iniFile->updItem('财神币总和', ['初始1' => $csbzh1]);
$strsql = "update $q2 set money=$csbzh1 where id=2";//物品id号必改值
$result = mysql_query($strsql);	
//保存盈利


$ds= rand(1, 3);
echo "<font color=red>财神点数：".$ds."点【小】</font>"."<br>";
echo "<font color=black>你选择了【小】</font>"."<br>";

if($bj>=2){
echo "<font color=black>恭喜你！！获得了：财神币+".$csbyq."个</font>"."<br>";	
echo "<font color=red>本轮获得【财神".$bj."倍甜蜜大暴击】</font>"."<br>";


include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在【幸运财神】中获得了【财神".$bj."倍甜蜜大暴击】".$csbyq."个财神币";
include("./msg/msgg02.php");





} else{	
echo "<font color=black>恭喜你！！获得了：财神币+".$csbyq."个</font>"."<br>";

} 

} else{	
$csbyq=$csbyq1;
include("./ini/money_ini.php");
$csbb=$csb-$csbyq;
$iniFile->updItem('财神币', ['初始' => $csbb]);
include("./sql/mysql.php");//调用数据库连接 
$q2="all_money";
$strsql = "update $q2 set money=$csbb where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);	

$csbbjc=$csbzh+$csbyq-$ylsxf;



include("./ini/moneyjc_ini.php");
$iniFile->updItem('财神币总和', ['初始' => $csbbjc]);
$q2="all_moneyjc";
$strsql = "update $q2 set money=$csbbjc where id=1";//物品id号必改值
$result = mysql_query($strsql);	

//保存盈利
$csbzh1=$csbzh1+$csbyq;
include("./ini/moneyjc_ini.php");
$iniFile->updItem('财神币总和', ['初始1' => $csbzh1]);
$strsql = "update $q2 set money=$csbzh1 where id=2";//物品id号必改值
$result = mysql_query($strsql);	
//保存盈利


$ds= rand(4, 6);	
echo "<font color=red>财神点数：".$ds."点【大】</font>"."<br>";
echo "<font color=black>你选择了【小】</font>"."<br>";
echo "<font color=black>很遗憾！！财神币-".$csbyq."个</font>"."<br>";
}












/*

//////活动强棒

//阻塞代码防止出现脏数据
$ininalock="phb13.txt";
$zspd=0;
$zsspd=0;
   flock($fp, LOCK_NB);
   //路径
$path='acher/phb';
$gglockname=$path."/".$ininalock;

for($x=0;$x<=30;$x++){

$fp = fopen($gglockname, "w+");
if(flock($fp,LOCK_EX | LOCK_NB)){
  $zsspd=1;
 //usleep(800);
 
 
  flock($fp,LOCK_EX);

  break;
}else{
	//排队等待
	//延时200毫秒
	usleep(200000);
	$zspd=$zspd+1;//五秒内没获得锁则提示服务器繁忙
	if($zspd>=25){
	$zsspd=2;	
	  break;
	} else{	
	} 

}

}




//////活动强棒
if($zsspd==1){
	
	
	
if($csbs ==1){
$xysw1=$csbs;
} elseif($csbs ==2){
$xysw1=$csbs+1;
} elseif($csbs ==5){
$xysw1=$csbs+2;
} elseif($csbs ==10){
$xysw1=$csbs+5;
} elseif($csbs ==20){
$xysw1=$csbs+15;
} elseif($csbs ==50){
$xysw1=$csbs+50;
} elseif($csbs ==100){
$xysw1=$csbs+120;
} elseif($csbs ==200){
$xysw1=$csbs+300;
} elseif($csbs ==500){
$xysw1=$csbs+888;



} else{	
	$xysw1=1;
}


echo "<font color=black>恭喜你！获得".$xysw1."财神积分</font><br>";	
	

	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_hdph01";
$sql1=mysql_query("select ds01 from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$ds01=$info1[ds01];
if($ds01 ==""){
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$vip=($iniFile->getItem('玩家信息','vip等级'));
//获取最大值
$q2="all_hdph01";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
mysql_query("set names utf8");
$sql = "insert into $q2 (id,wjid,wjmz,vip,ds01)  values('$maxidd','$wjid','$wjmz','$vip','$xysw1')";
 if (!mysql_query($sql,$conn)){
 die('Error: ' . mysql_error());
 }
} else{	
$xysw1=$xysw1+$ds01;
$q2="all_hdph01";
mysql_query("set names utf8");
$strsql = "update $q2 set ds01=$xysw1 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
} 	
//路径
$inina="phb13.ini";
$path='acher/phb';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  	


	 flock($fp,LOCK_UN);
	} else{	
echo "<font color=black>服务器睡着了</font><br>";

		echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";


}


//////活动强棒




*/





























} else{	
echo "<font color=red>对不起！！你的财神币不足".$csbyq."个~~</font>"."<br>";
}






echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=564;
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