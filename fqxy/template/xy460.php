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

include("./ini/yl_ini.php");
$cqyl=($iniFile->getItem('背包仓库银两','背包银两'));
if($cqyl>=$qc03){


if($qc04==1&&$qc05>=1&&$qc06==$npccid&&$qc06!=""&&$npccid!=""||$qc04==2&&$qc05>=1&&$qc06==$npccid&&$qc06!=""&&$npccid!=""){

if($qc04==1){

	//数字转汉字
$yl=$qc03;
include("./pz/ylts.php");	
echo "<font color=black>恭喜你！".$qc01."的【拳头竞猜】被你识破了，获得了".$ylxx."两（请到小仓提取）</font></a>"."<br>";


//////////////////////////////单发系统消息//////////////////////////////
include("./ini/zt_ini.php");
$qc999=($iniFile->getItem('玩家信息','玩家名字'));//玩家名字
$wjid1=$wjid;
$wjid=$qc02;
//调用msg.ini是否存在
$wjtake="很遗憾！！".$qc999."识破了你的【拳头竞猜】，失去了".$ylxx."两";
include("msg_ini.php");

$inina="msg.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
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
	$ltbl2=-1;
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 
$wjid=$wjid1;
//////////////////////////////单发系统消息//////////////////////////////




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
echo "<font color=black>很遗憾！你出的【拳头竞猜】被".$qc01."识破破了</font></a>"."<br>";

//数字转汉字
$yl=$qc03;
include("./pz/ylts.php");
//////////////////////////////单发系统消息//////////////////////////////
include("./ini/zt_ini.php");
$qc999=($iniFile->getItem('玩家信息','玩家名字'));//玩家名字
$wjid1=$wjid;
$wjid=$qc02;
//调用msg.ini是否存在
$wjtake="恭喜你！！".$qc999."被你的【拳头竞猜】蒙圈了，获得了".$ylxx."两（请到小仓提取）";
include("msg_ini.php");

$inina="msg.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
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
	$ltbl2=-1;
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 
$wjid=$wjid1;
//////////////////////////////单发系统消息//////////////////////////////







//银两减少
$yl1=$qc03;
$wwpsl=$yl1; 
include("./pz/ini_pz013.php");

include("./ini/ylck_ini.php");
include("./sql/mysql.php");//调用数据库连接 
$q2="all_ylck";
mysql_query("set names utf8");
$sql1=mysql_query("select wjid,yl01 from $q2 where wjid=$qc02",$conn);
$info1=@mysql_fetch_array($sql1);
$wjidpd=$info1[wjid];
$yl01=$info1[yl01];
$xcyl=$yl01+$qc03*2;
if($wjidpd>10000000){
$strsql = "update $q2 set yl01=$xcyl where wjid=$qc02";//物品id号必改值
$result = mysql_query($strsql);
} else{	
mysql_query("set names utf8");
$sql1 = "insert into $q2 (wjid,yl01,yl02,yl03)  values('$qc02','$xcyl','0','0')";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }	
} 

//更新缓存数据
$inina="ylck.ini";
$path='ache/'.$qc02;
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


}

} else{	
echo "<font color=black>已撤销，或者被其他玩家赢走了</font></a>"."<br>";

} 


} else{	
echo "<font color=black>对不起！！你的银两不足！！</font></a>"."<br>";

} 










 echo "</br>";
 //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=459;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>再来一局</font></a>"."<font color=black></font>"."<br>";

 




 
 
 
 
 flock($fp,LOCK_UN);
	} else{	

echo "服务器开小差了";





}









?>