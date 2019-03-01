<?php

$wjid1=$wjid;
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//判断是否绑定
//调用物品信息
include("./wp/wpxx.php");
if($wpbd==1){

if($_POST['submit']){
include("./ini/zt_ini.php");	
	
$vip=($iniFile->getItem('玩家信息','vip等级'));
if($vip>=3){ 		
$sl= $_POST['sl'];
$sll=preg_match('/^\d+$/i', $sl);	
if($sll!=0){
include("./wp/wpxx.php");
if($wpfl==1){//背包书卷
include("./ini/wp_ini.php");
$wpsl=($iniFile->getItem('书卷数量',$npcc));
} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");
$wpsl=($iniFile->getItem('材料数量',$npcc));
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");
$wpsl=($iniFile->getItem('商城数量',$npcc));
} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");
$wpsl=($iniFile->getItem('丹药数量',$npcc));
} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");
$wpsl=($iniFile->getItem('任务数量',$npcc));
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");
$wpsl=($iniFile->getItem('农场数量',$npcc));
} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");
$wpsl=($iniFile->getItem('宝箱数量',$npcc));
} else{
}



include("./ini/post_ini.php");
$ckid=($iniFile->getItem('赠送人ID','初始'));
if($ckid>10000000){

$wjid=$ckid;
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
$wjid=$wjid1;


if($wpsl<$sl){
$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";

} elseif($wpsl>$sl){  
$wpsl=$wpsl-$sl;
include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$wpsl where wpid=$npcc";//物品id号必改值
$result = mysql_query($strsql);		
//执行赠送代码
 include("./wp/wpxx.php");
if($wpfl==1){//背包书卷
include("./ini/wp_ini.php");
$iniFile->updItem('书卷数量', [$npcc => $wpsl]);
} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");
$iniFile->updItem('材料数量', [$npcc => $wpsl]);
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");
$iniFile->updItem('商城数量', [$npcc => $wpsl]);
} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");
$iniFile->updItem('丹药数量', [$npcc => $wpsl]);
} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");
$iniFile->updItem('任务数量', [$npcc => $wpsl]);
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");
$iniFile->updItem('农场数量', [$npcc => $wpsl]);
} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");
$iniFile->updItem('宝箱数量', [$npcc => $wpsl]);
} else{
}
include("./ini/bbrl_ini.php");
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);
include("./ini/post_ini.php");
$ckname=($iniFile->getItem('赠送人','初始'));
$ckid=($iniFile->getItem('赠送人ID','初始'));


echo "<font color=red>【你将".$wpmz."x".$sl."无偿赠送给了".$ckname."(".$ckid.")】</font>"."<br>";


$wjid=$wjid1;



///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////



$wjid=$wjid1;//自己
$u_wjid=$wjid1;
include("./ini/zt_ini.php");
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));


	//调用msg.ini是否存在
 $wjtake="赠送了".$wpmz."x".$sl."给你，快去抱抱大佬大腿求包养吧！！";
 

 
 $wjid=$ckid;//对方
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


////////////////////////////////////增加对方物品////////////////////
include("./sql/mysql.php");//调用数据库连接 
$wjid=$ckid;//对方
//查询如果没有则添加
$q2="wp".$wjid;
$sql1=mysql_query("select * from $q2 where wpid=$npcc",$conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1[wpid];
$ckwpsl=$info1[wpsl];
if($ckwpid==""){

//获取最大值
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
$ckwpsl=$sl;
//$npcc=$czid;
//调用物品信息
//include("./wp/wpxx.php");

$q2="wp".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$npcc','$ckwpsl','$wpfl')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

} else{
$q2="wp".$wjid;	
$ckwpsl=$ckwpsl+$sl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysql_query($strsql);
} 
if($wpfl==1){//背包书卷
//更新缓存数据
$inina="wp.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} elseif($wpfl==2){ //背包材料
//更新缓存数据
$inina="cl.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} elseif($wpfl==4){ //背包商城
//更新缓存数据
$inina="sc.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} elseif($wpfl==5){ //背包丹药
//更新缓存数据
$inina="dy.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} elseif($wpfl==6){ //背包任务
//更新缓存数据
$inina="rw.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} elseif($wpfl==7){ //背包农场
//更新缓存数据
$inina="nc.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} elseif($wpfl==8){ //背包宝箱
//更新缓存数据
$inina="bx.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} else{
}
include("./ini/bbrl_ini.php");
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);
////////////////////////////////////增加对方物品////////////////////









} elseif($wpsl==$sl&&$wpsl>=1){  
include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "delete from $q2 where wpid=$npcc ";//物品id号必改值
$result = mysql_query($strsql);

include("./wp/wpxx.php");
if($wpfl==1){//背包书卷
include("./ini/wp_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('书卷id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('书卷数量', $npcc);
# 删除一个子项
$iniFile->delItem('书卷名字', $npcc);
} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('材料id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('材料数量', $npcc);
# 删除一个子项
$iniFile->delItem('材料名字', $npcc);
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('商城id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('商城数量', $npcc);
# 删除一个子项
$iniFile->delItem('商城名字', $npcc);
} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('丹药id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('丹药数量', $npcc);
# 删除一个子项
$iniFile->delItem('丹药名字', $npcc);
} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('任务id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('任务数量', $npcc);
# 删除一个子项
$iniFile->delItem('任务名字', $npcc);
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('农场id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('农场数量', $npcc);
# 删除一个子项
$iniFile->delItem('农场名字', $npcc);
} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('宝箱id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('宝箱数量', $npcc);
# 删除一个子项
$iniFile->delItem('宝箱名字', $npcc);
} else{
}


include("./ini/bbrl_ini.php");
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);
include("./ini/post_ini.php");
$ckname=($iniFile->getItem('赠送人','初始'));
$ckid=($iniFile->getItem('赠送人ID','初始'));
echo "<font color=red>【你将".$wpmz."x".$sl."无偿赠送给了".$ckname."(".$ckid.")】</font>"."<br>";

$wjid1=$wjid;










////////////////////////////////////增加对方物品////////////////////
include("./sql/mysql.php");//调用数据库连接 
$wjid=$ckid;//对方
//查询如果没有则添加
$q2="wp".$wjid;
$sql1=mysql_query("select * from $q2 where wpid=$npcc",$conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1[wpid];
$ckwpsl=$info1[wpsl];
if($ckwpid==""){

//获取最大值
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
$ckwpsl=$sl;
//$npcc=$czid;
//调用物品信息
//include("./wp/wpxx.php");

$q2="wp".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$npcc','$ckwpsl','$wpfl')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

} else{
$q2="wp".$wjid;	
$ckwpsl=$ckwpsl+$sl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysql_query($strsql);
} 
if($wpfl==1){//背包书卷
//更新缓存数据
$inina="wp.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} elseif($wpfl==2){ //背包材料
//更新缓存数据
$inina="cl.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} elseif($wpfl==4){ //背包商城
//更新缓存数据
$inina="sc.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} elseif($wpfl==5){ //背包丹药
//更新缓存数据
$inina="dy.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} elseif($wpfl==6){ //背包任务
//更新缓存数据
$inina="rw.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} elseif($wpfl==7){ //背包农场
//更新缓存数据
$inina="nc.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} elseif($wpfl==8){ //背包宝箱
//更新缓存数据
$inina="bx.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
} else{
}

include("./ini/bbrl_ini.php");
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);
////////////////////////////////////增加对方物品////////////////////





///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////



$wjid=$wjid1;//自己
$u_wjid=$wjid1;
include("./ini/zt_ini.php");
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));


	//调用msg.ini是否存在
 $wjtake="赠送了".$wpmz."x".$sl."给你，快去抱抱大佬大腿求包养吧！！";
 

 
 $wjid=$ckid;//对方
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














} else {
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
} 

} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
} else{	

echo "<font color=red>对方ID有误~~请重新赠送</font><br>";

}


} else {
$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}
	
} else{	
echo"<font color=black>骚年~~需要Vip3级使用此项功能</font></a></br>";	

}
}


$wjid=$wjid1;//自己

include("seach1.php");









} else{	
echo "<font color=red>".$wpmz."已绑定，无法赠送~~</font><br>";


} 
$wjid=$wjid1;//自己



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=538;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini














?>