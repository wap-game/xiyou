<?php


//扣除手续费用
$bfb=floor($sl*$wpjgg*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$ylmm=$sl*$wpjgg+$ylsxf;




if($yl>=$ylmm){

$pxid=$npcc;

if($sll!=0){

if($wpsl>=$sl){


include("./ini/zt_ini.php");
$bbrlb=($iniFile->getItem('玩家信息',['背包容量']));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;

if($wprl<=$bbrlb){
if($wpsl<$sl){
$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
} elseif($wpsl>$sl&&$sl!=0){  
//验证时间戳

include("./sql/mysql.php");//调用数据库连接 
$q2="all_pm";
mysql_query("set names utf8");
$sql1=mysql_query("select pmsjc from $q2 where id=$pxid",$conn);
$info1=@mysql_fetch_array($sql1);
$pmsjc=$info1[pmsjc];
if($wpsjc==$pmsjc){
	
/////////////////////////////操作对方银子////////////////////	
	
	
$q2="all_yl";
$sql1=mysql_query("select bbyl from $q2 where wjid=$pmmwjid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjyl=$info1[bbyl];
$wjyll=$wjyl+$sl*$wpjgg;
if($wjyll>=99999999999){
$wjyll=99999999999;
} else{

} 
$strsql = "update $q2 set bbyl=$wjyll where wjid=$pmmwjid";//物品id号必改值
$result = mysql_query($strsql);

//ini文件名字
$inina="yl.ini";
//路径
$path='ache/'.$pmmwjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

//ini文件名字
$inina="mypm.ini";
//路径
$path='ache/'.$pmmwjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  



$q2="all_yl";
$sql1=mysql_query("select bbyl from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjyl=$info1[bbyl];
$wjyll=$wjyl-($sl*$wpjgg+$ylsxf);
if($wjyll<=0){
$wjyll=0;
} else{

} 

$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
//ini文件名字
$inina="yl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  








/////////////////////////////操作对方银子////////////////////	
	
	
$wpsl=$wpsl-$sl;
$q2="all_pm";
$strsql = "update $q2 set pmwpsl=$wpsl where id=$pxid";//物品id号必改值
$result = mysql_query($strsql);




//查询如果没有则添加
$q2="wp".$wjid;
$sql1=mysql_query("select * from $q2 where wpid=$pmmwpid",$conn);
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
$ckwpsl=$ckwpsl+$sl;
//调用物品信息
$npcc=$pmmwpid;
include("./wp/wpxx.php");
$q2="wp".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$pmmwpid','$ckwpsl','$wpfl')";
 if (!mysql_query($sql,$conn)){
die('Error: ' . mysql_error());
}
} else{
$q2="wp".$wjid;	
$ckwpsl=$ckwpsl+$sl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysql_query($strsql);
} 




$npcc=$pmmwpid;

include("./wp/wpxx.php");
include("./ini/bbrl_ini.php");
# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);

if($wpfl==1){
include("./ini/pm_wp_ini.php");
} elseif($wpfl==2){ 
include("./ini/pm_cl_ini.php");
} elseif($wpfl==4){ 
include("./ini/pm_sc_ini.php");
} elseif($wpfl==5){ 
include("./ini/pm_dy_ini.php");
} elseif($wpfl==6){ 
include("./ini/pm_rw_ini.php");
} elseif($wpfl==7){ 
include("./ini/pm_nc_ini.php");
} elseif($wpfl==8){ 
include("./ini/pm_bx_ini.php");
} else{
}




$iniFile->updItem('拍卖数量', [$pxid => $wpsl]);



if($wpfl==1){

//ini文件名字
$inina="wp.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==2){ //背包材料

//ini文件名字
$inina="cl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==4){ //背包商城

//ini文件名字
$inina="sc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==5){ //背包丹药

//ini文件名字
$inina="dy.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==6){ //背包任务

//ini文件名字
$inina="rw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==7){ //背包农场

//ini文件名字
$inina="nc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==8){ //背包宝箱

//ini文件名字
$inina="bx.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==9){ //背包其他

//ini文件名字
$inina="qt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} else{



}



///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////



$wjid1=$wjid;//自己

include("./ini/zt_ini.php");
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
//调用msg.ini是否存在
//数字转汉字
$yl=$sl*$wpjgg;
include("./pz/ylts.php");

$wjtake="买走了你拍卖场的".$wpmz."x".$sl."，获得".$ylxx."银两";
$wjid=$pmmwjid;//对方
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
$wjid=$wjid1;
///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////



echo "<font color=red>你用了".$ylxx."两，购买".$wpmz."x".$sl."</font>";

//数字转汉字
$yl=$ylsxf;
include("./pz/ylts.php");
echo "<font color=red>(附带".$ylxx."两手续费)</font>";	
echo "<br>";


if($wpfl==1){
$ymid=489;
} elseif($wpfl==2){ //背包材料
$ymid=490;
} elseif($wpfl==4){ //背包商城
$ymid=492;
} elseif($wpfl==5){ //背包丹药
$ymid=493;
} elseif($wpfl==6){ //背包任务
$ymid=494;
} elseif($wpfl==7){ //背包农场
$ymid=495;
} elseif($wpfl==8){ //背包宝箱
$ymid=496;
} else{
$ymid=489;
}


//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $ymid]);


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=$ymid;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回拍卖行</font></a>"."<br>";
echo "<br>";




} else {
$dqwp=0;
echo "<font color=red>对不起！！该物品已被买走或者下架了</font>"."<br>";
echo "<br>";
}




} elseif($wpsl==$sl){  


//验证时间戳
include("./sql/mysql.php");//调用数据库连接 
$q2="all_pm";
mysql_query("set names utf8");
$sql1=mysql_query("select pmsjc from $q2 where id=$pxid",$conn);
$info1=@mysql_fetch_array($sql1);
$pmsjc=$info1[pmsjc];
if($wpsjc==$pmsjc){



/////////////////////////////操作对方银子////////////////////	
	
	
$q2="all_yl";
$sql1=mysql_query("select bbyl from $q2 where wjid=$pmmwjid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjyl=$info1[bbyl];
$wjyll=$wjyl+$sl*$wpjgg;
if($wjyll>=99999999999){
$wjyll=99999999999;
} else{

} 
$strsql = "update $q2 set bbyl=$wjyll where wjid=$pmmwjid";//物品id号必改值
$result = mysql_query($strsql);

//ini文件名字
$inina="yl.ini";
//路径
$path='ache/'.$pmmwjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//ini文件名字
$inina="mypm.ini";
//路径
$path='ache/'.$pmmwjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  


$q2="all_yl";
$sql1=mysql_query("select bbyl from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjyl=$info1[bbyl];
$wjyll=$wjyl-($sl*$wpjgg+$ylsxf);
if($wjyll<=0){
$wjyll=0;
} else{

} 

$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yl_ini.php");
//ini文件名字
$inina="yl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  




/////////////////////////////操作对方银子////////////////////	









$q2="all_pm";
$strsql = "delete from $q2 where id=$pxid";//物品id号必改值
$result = mysql_query($strsql);


//查询如果没有则添加
$q2="wp".$wjid;
$sql1=mysql_query("select * from $q2 where wpid=$pmmwpid",$conn);
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
$ckwpsl=$ckwpsl+$sl;
$npcc=$pmmwpid;
//调用物品信息
include("./wp/wpxx.php");
$q2="wp".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$pmmwpid','$ckwpsl','$wpfl')";
 if (!mysql_query($sql,$conn)){
die('Error: ' . mysql_error());
}
} else{
$q2="wp".$wjid;	
$ckwpsl=$ckwpsl+$sl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysql_query($strsql);
} 





$npcc=$pmmwpid;
include("./wp/wpxx.php");


include("./ini/bbrl_ini.php");
# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);






if($wpfl==1){
include("./ini/pm_wp_ini.php");
} elseif($wpfl==2){ 
include("./ini/pm_cl_ini.php");
} elseif($wpfl==4){ 
include("./ini/pm_sc_ini.php");
} elseif($wpfl==5){ 
include("./ini/pm_dy_ini.php");
} elseif($wpfl==6){ 
include("./ini/pm_rw_ini.php");
} elseif($wpfl==7){ 
include("./ini/pm_nc_ini.php");
} elseif($wpfl==8){ 
include("./ini/pm_bx_ini.php");
} else{
}









$iniFile->updItem('拍卖数量', [$pxid => $wpsl]);





# 删除一个子项
$iniFile->delItem('排序', $pxid);
# 删除一个子项
$iniFile->delItem('玩家id', $pxid);
# 删除一个子项
$iniFile->delItem('玩家名字', $pxid);
# 删除一个子项
$iniFile->delItem('拍卖时间', $pxid);
# 删除一个子项
$iniFile->delItem('拍卖物品id', $pxid);

# 删除一个子项
$iniFile->delItem('拍卖数量', $pxid);
# 删除一个子项
$iniFile->delItem('拍卖名字', $pxid);

# 删除一个子项
$iniFile->delItem('拍卖价格', $pxid);
# 删除一个子项
$iniFile->delItem('拍卖时间搓', $pxid);








if($wpfl==1){

//ini文件名字
$inina="wp.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==2){ //背包材料

//ini文件名字
$inina="cl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==4){ //背包商城

//ini文件名字
$inina="sc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==5){ //背包丹药

//ini文件名字
$inina="dy.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==6){ //背包任务

//ini文件名字
$inina="rw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==7){ //背包农场

//ini文件名字
$inina="nc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==8){ //背包宝箱

//ini文件名字
$inina="bx.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==9){ //背包其他

//ini文件名字
$inina="qt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} else{



}






///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////



$wjid1=$wjid;//自己

include("./ini/zt_ini.php");
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
//调用msg.ini是否存在
//数字转汉字
$yl=$sl*$wpjgg;
include("./pz/ylts.php");

$wjtake="买走了你拍卖场的".$wpmz."x".$sl."，获得".$ylxx."银两";
$wjid=$pmmwjid;//对方
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
$wjid=$wjid1;
///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////








echo "<font color=red>你用了".$ylxx."两，购买".$wpmz."x".$sl."</font>";

//数字转汉字
$yl=$ylsxf;
include("./pz/ylts.php");
echo "<font color=red>(附带".$ylxx."两手续费)</font>";	
echo "<br>";





if($wpfl==1){
$ymid=489;
} elseif($wpfl==2){ //背包材料
$ymid=490;
} elseif($wpfl==4){ //背包商城
$ymid=492;
} elseif($wpfl==5){ //背包丹药
$ymid=493;
} elseif($wpfl==6){ //背包任务
$ymid=494;
} elseif($wpfl==7){ //背包农场
$ymid=495;
} elseif($wpfl==8){ //背包宝箱
$ymid=496;
} else{
$ymid=489;
}






//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $ymid]);


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=$ymid;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回拍卖行</font></a>"."<br>";
echo "<br>";


} else {
$dqwp=0;
echo "<font color=red>对不起！！该物品已被买走或者下架了</font>"."<br>";
echo "<br>";
}







} else {
$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}
} else{
$dqwp=0;
echo "<font color=red>对不起，你的背包已放不下任何东西了</font>"."<br>";
echo "<br>";
}
} else {
$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}
} else {
$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}
} else {
$dqwp=0;


//数字转汉字
$yl=$ylsxf;
include("./pz/ylts.php");
echo "<font color=red>对不起！你银两不足！(附带".$ylxx."两手续费)</font>"."<br>";
echo "<br>";
}

?>




