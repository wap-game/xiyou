<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
	//阻塞代码防止出现脏数据
	$ggmz="qggz";
$ininalock1=$ggmz."_lock".".txt";
include("./ini/zsggini.php");


if($zsspd==1&&$zsspd1==1){


include("./ini/qggz_ini.php");
$qgjd=($iniFile->getItem('求购价格',$npcc));

if($qgjd>=1){
$wjid1=$wjid;
$wjid=$npcc;
include("./ini/zt_ini.php");
$fzzid=($iniFile->getItem('玩家信息','住宅id'));
$wjid=$wjid1;
if($fzzid==0){









include("./ini/zt_ini.php");
$fz=($iniFile->getItem('玩家信息','住宅id'));
$fz02=($iniFile->getItem('玩家信息','住宅分类'));
$fz05=($iniFile->getItem('玩家信息','住宅名字'));
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
if($fz02==3){

include("./ini/sc_ini.php");
$jd=($iniFile->getItem('商城数量','127'));


$wjid1=$wjid;
$wjid=$npcc;
include("./ini/zt_ini.php");
$xname=($iniFile->getItem('玩家信息','玩家名字'));
$iniFile->updItem('玩家信息', ['住宅id'=> $fz]);
$iniFile->updItem('玩家信息', ['住宅分类'=> 3]);
$iniFile->updItem('玩家信息', ['住宅名字'=> $fz05]);
include("./ini/gz_ini.php");
$iniFile->updItem('官宅持有人id', [$fz=> $npcc]);
$iniFile->updItem('官宅持有人名字', [$fz=> $xname]);

//删除求购
include("./ini/qggz_ini.php");
# 删除一个子项
$iniFile->delItem('排序id', $npcc);
# 删除一个子项
$iniFile->delItem('求购信息', $npcc);
# 删除一个子项
$iniFile->delItem('求购人', $npcc);
# 删除一个子项
$iniFile->delItem('求购人id', $npcc);
# 删除一个子项
$iniFile->delItem('求购价格', $npcc);



   
include("./sql/mysql.php");//调用数据库连接 






$q2="all_qggz";
$strsql = "delete from $q2 where wjid=$npcc ";//物品id号必改值
$result = mysql_query($strsql);



$q2="all_gzhoures";
mysql_query("set names utf8");
$strsql = "update $q2 set wjid=$npcc,wjmz='$xname' where fzid=$fz";//物品id号必改值
$result = mysql_query($strsql);

$q2="all_zt";
mysql_query("set names utf8");
$strsql = "update $q2 set zzid=$fz,zzmz='$fz05',zzfl=3 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);


$wjid=$wjid1;
$q2="all_zt";
mysql_query("set names utf8");
$strsql = "update $q2 set zzid=0,zzmz='0',zzfl=0 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);




//清空家具
$q2="jj".$wjid1;
$strsql="truncate table $q2";
$result=mysql_query($strsql);

//更新缓存数据
$inina="jj.ini";
$path='ache/'.$wjid1;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
//更新缓存数据


include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['住宅id'=> 0]);
$iniFile->updItem('玩家信息', ['住宅分类'=> 0]);
$iniFile->updItem('玩家信息', ['住宅名字'=> 0]);

$jdd=$qgjd+$jd;
if($jd==""){  
$q2="wp".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','127','$jdd','4')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }
//更新缓存数据
$inina="sc.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
} else{
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$jdd where wpid=127";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/sc_ini.php");
$iniFile->updItem('商城数量', ['127'=> $jdd]);
}




$wjid=$npcc;
	//调用msg.ini是否存在
$wjtake="成功将官宅【".$fz05."】出售给了你！！";
include("./ini/msg_ini.php");
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
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;








$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 
	
$wjid=$wjid1;















	
echo "<font color=black>恭喜你!!出售掉自己的房屋现在已是一个无家可归的人了</font>"."<br>";
	
	
	













} else{	
echo "<font color=black>你没有可以出售的官宅</font>"."<br>";
}


} else{	


$wjid=$wjid1;
//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
	



# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));




$wjid=$npcc;
	//调用msg.ini是否存在
$wjtake="想要将官宅出售给了你，但是你已有房屋操作失败了，请前往开封广场进行房屋管理";
include("./ini/msg_ini.php");
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
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;








$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 
	
$wjid=$wjid1;












echo "<font color=black>对不起！！对方已有房屋了！！</font>"."<br>";
}




} else{	

echo "<font color=black>对不起！！此条求购官宅信息不存在！！</font>"."<br>";






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
include("./ini/jsggini.php");
//解锁当前使用的ini

?>