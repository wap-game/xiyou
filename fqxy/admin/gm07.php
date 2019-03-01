<?php

echo "<font color=red>【发放成功通知】</font>"."<br>";


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



if($wpid>=1&&$wpid<=5000&&$wpsl>=1&&$wpsl<=5000000&&$wpfl>=1&&$wpfl<=10&&$wjid>=10000001&&$wjid<=20000000){

include("./sql/mysql.php");//调用数据库连接 
$czid=$wpid;
$ppwpsl=$wpsl;
//查询如果没有则添加
$q2="zzck".$wjid;
$sql1=mysql_query("select * from $q2 where wpid=$czid",$conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1[wpid];
$ckwpsl=$info1[wpsl];
if($ckwpid==""){

//获取最大值
$q2="zzck".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$ckwpsl=$ppwpsl;
//$npcc=$czid;
//调用物品信息
//include("./wp/wpxx.php");

$q2="zzck".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$czid','$ckwpsl','$wpfl')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

} else{
$q2="zzck".$wjid;	
$ckwpsl=$ckwpsl+$ppwpsl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysql_query($strsql);
} 





$wjid1=999;
$ltbl2=999;
$ltbl1="小轩GM";
	//调用msg.ini是否存在
 $wjtake="向你发放了".$wpmz."x".$wpsl."请到游戏首页增值仓库领取";
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
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 







echo "<font color=red>恭喜你！！向【".$wjname."】（".$wjid."）发放了[".$wpmz."（ID:".$wpid."）]x".$wpsl."成功！！</font>"."<br>";
echo "<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=5&&user=$wjid'><font color=blue>返回继续发放</font></a>"."<br>";
} else{	

echo "<font color=red>发送失败了！（值有问题）</font>"."<br>";
echo "<br>";

echo "<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=5&&user=$wjid'><font color=blue>返回重新发放</font></a>"."<br>";





}






} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");





echo "<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=4'><font color=blue>返回查询玩家</font></a>"."<br>";
echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";





?>
