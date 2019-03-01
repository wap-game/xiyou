<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
include("./ini/color_ini.php");



$colortm=($iniFile->getItem('题目','初始'));
if($colortm==1){
$colorid=($iniFile->getItem('正确颜色','初始'));
$coco="颜色";
} elseif($colortm==2){
$colorid=($iniFile->getItem('正确文字','初始'));
$coco="文字";
} else {
echo "<font color=red>错误</font>"."<br>";		
}




if ($npcc==$colorid) {
if ($colorid==1) {
$colormz="红色";	
} elseif ($colorid==2) {	
$colormz="黑色";
} elseif ($colorid==3) {	
$colormz="蓝色";
} elseif ($colorid==4) {	
$colormz="橙色";
} elseif ($colorid==5) {	
$colormz="绿色";
} elseif ($colorid==6) {	
$colormz="紫色";
} elseif ($colorid==7) {	
$colormz="黄色";
} elseif ($colorid==8) {	
$colormz="粉色";
} else {
}		
echo "<font color=red>恭喜你！！找出了【".$colormz.$coco."】糖果获得了糖果奖励</font>"."<br>";


$xysw1=1;
echo "<font color=black>恭喜你！获得万圣节积分+1</font><br>";	
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










} else {
if ($colorid==1) {
$colormz="红色";	
} elseif ($colorid==2) {	
$colormz="黑色";
} elseif ($colorid==3) {	
$colormz="蓝色";
} elseif ($colorid==4) {	
$colormz="橙色";
} elseif ($colorid==5) {	
$colormz="绿色";
} elseif ($colorid==6) {	
$colormz="紫色";
} elseif ($colorid==7) {	
$colormz="黄色";
} elseif ($colorid==8) {	
$colormz="粉色";
} else {
}	
echo "<font color=red>很遗憾！！我需要您找【".$colormz.$coco."】糖果（找错了）</font>"."<br>";	



$xysw1=1;
echo "<font color=black>很遗憾！！万圣节积分-1</font><br>";	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_hdph01";
$sql1=mysql_query("select ds01 from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$ds01=$info1[ds01];
if($ds01 ==""){
$xysw1=0;	
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
$xysw1=$ds01-$xysw1;
if ($xysw1==0) {	
$xysw1=0;
} else {
}	


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


	
}



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=1318;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";





		
	
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
include("./ini/jsini.php");
//解锁当前使用的ini

	
?>