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
if($npcc==1){   
$wjje=1;
} elseif($npcc==2){  
$wjje=10;
} elseif($npcc==3){  
$wjje=20;
} elseif($npcc==4){  
$wjje=50;
} elseif($npcc==5){  
$wjje=100;
} else{
$wjje=0;	
} 





if($wjid >=10000000){	



include("./ini/bdzfb_ini.php");	
$zfb=($iniFile->getItem('支付宝','初始'));
include("./ini/bdwx_ini.php");	
$wx=($iniFile->getItem('微信','初始'));
$bdzh=0;
if($zfb!=111){

} else{
$bdzh=$bdzh+1;	
}
	
if($wx!=111){

} else{
$bdzh=$bdzh+1;	

}	


if($bdzh==2){
echo "<font color=red>未绑定（请先绑定哦）</font>";	
} else{
















include("./ini/hbmoney_ini.php");
$csb=($iniFile->getItem('财神币','初始'));
$csbyq=$wjje*10;//需要多少财神币
if($csb>=$csbyq&&$csbyq>=10){

//写入数据库
include("./sql/mysql.php");//调用数据库连接 
include("./ini/hbmoney_ini.php");
$csbb=$csb-$csbyq;
$iniFile->updItem('财神币', ['初始' => $csbb]);
include("./sql/mysql.php");//调用数据库连接 
$q2="all_hbmoney";
$strsql = "update $q2 set money=$csbb where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);	


echo "<font color=red>恭喜你！！领取到了".$wjje."元现金红包奖励</font>"."<br>";

echo "<font color=balck>失去红包：".$csbyq."个</font>"."<br>";


include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));

include("./ini/bdzfb_ini.php");
$zfzh1=($iniFile->getItem('支付宝','初始'));

include("./ini/bdwx_ini.php");
$zfzh2=($iniFile->getItem('微信','初始'));

 //获取最大值
$q2="all_xjhb";
mysql_query("set names utf8");
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
 if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
mysql_query("set names utf8");
$sql = "insert into $q2 (id,wjid,wjmz,wjje,zh1,zh2)  values('$maxidd','$wjid','$wjmz','$wjje','$zfzh1','$zfzh2')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

 } else{

echo "<font color=red>对不起！！你的红包不足".$csbyq."个（无法领取奖励）</font>"."<br>";

} 
 
 
 
 
 
 }

 
 
 
 
 
 
 
 
 
 } else{

}





















echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=579;
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















