<?php

//阻塞代码防止出现脏数据
$ininalock="qtjc.txt";
$zspd=0;
$zsspd=0;
   flock($fp, LOCK_NB);
   //路径
$path='acher/hdjc';
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


if($zsspd==1){

//左手


$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];


include("./ini/qtjc_ini.php");

$qc01=($iniFile->getItem('排行榜名字',$npcc));//玩家名字
$qc02=($iniFile->getItem('排行榜值1',$npcc));//玩家id
$qc03=($iniFile->getItem('排行榜值2',$npcc));//玩家投注
$qc04=($iniFile->getItem('排行榜值5',$npcc));//值
$qc05=($iniFile->getItem('排行榜值4',$npcc));//玩家编号
$qc06=($iniFile->getItem('排行榜值6',$npcc));//时间搓




if($qc04==1&&$qc05>=1&&$qc06==$npccid&&$qc06!=""&&$npccid!=""||$qc04==2&&$qc05>=1&&$qc06==$npccid&&$qc06!=""&&$npccid!=""){

echo "<font color=black>恭喜你！撤销了此条记录".$qc03."银两（请到小仓提取）</font></a>"."<br>";
//赢取奖励






include("./ini/ylck_ini.php");
include("./sql/mysql.php");//调用数据库连接 


$q2="all_ylck";
mysql_query("set names utf8");
$sql1=mysql_query("select wjid,yl01 from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjidpd=$info1[wjid];
$yl01=$info1[yl01];
$xcyl=$yl01+$qc03;
if($wjidpd>10000000){
$strsql = "update $q2 set yl01=$xcyl where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
} else{	
mysql_query("set names utf8");
$sql1 = "insert into $q2 (wjid,yl01,yl02,yl03)  values('$wjid','$xcyl','0','0')";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }	
} 

//更新缓存数据
$inina="ylck.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

//赢取奖励

include("./sql/mysql.php");//调用数据库连接 
$q2="all_qtjc";
mysql_query("set names utf8");
$strsql = "delete from $q2 where id=$qc05 ";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/qtjc_ini.php");
# 删除一个子项
$iniFile->delItem('排行榜名字', $qc05);
# 删除一个子项
$iniFile->delItem('排行榜值1', $qc05);
# 删除一个子项
$iniFile->delItem('排行榜值2', $qc05);
# 删除一个子项
$iniFile->delItem('排行榜值3', $qc05);
# 删除一个子项
$iniFile->delItem('排行榜值4', $qc05);
# 删除一个子项
$iniFile->delItem('排行榜值5', $qc05);




} else{	
echo "<font color=black>对不起！！已被其他玩家竞猜走了</font></a>"."<br>";

} 
 echo "</br>";
 //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=459;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回竞猜</font></a>"."<font color=black></font>"."<br>";

 




 
 
 
 
 flock($fp,LOCK_UN);
	} else{	

echo "服务器开小差了";





}

















?>