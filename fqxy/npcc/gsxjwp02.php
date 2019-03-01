<?php

if($sll!=0){

	
	
if($wpsl>=$sl){
	
	
//调用物品信息
include("./wp/wpxx.php");

	
	
	
//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
include("./ini/bbrl_ini.php");
	//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('玩家信息',['背包容量','挂售容量']));
$bbrlb=$wjxx[背包容量];

$cbbrlb=$wjxx[挂售容量];
	
	
	
	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;



if($wprl<=$bbrlb){

if($wpsl<$sl){
	$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";

} elseif($wpsl>$sl&&$sl!=0){  

 
$wpsl=$wpsl-$sl;


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////

$arr = explode("_",$npcc);
$npcc1=$arr[0];
$npcc2=$arr[1];
	//背包减
include("./sql/mysql.php");//调用数据库连接 
$q2="gswp".$wjid;
$strsql = "update $q2 set wpsl=$wpsl where id=$npcc2";//物品id号必改值
$result = mysql_query($strsql);
//仓库加

//查询如果没有则添加
$q2="wp".$wjid;
$sql1=mysql_query("select * from $q2 where wpid=$npcc1",$conn);
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
include("./wp/wpxx.php");
$q2="wp".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$npcc1','$ckwpsl','$wpfl')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

} else{
$q2="wp".$wjid;	
$ckwpsl=$ckwpsl+$sl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysql_query($strsql);
} 

//







///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////强制更新数据以数据库数据为主//////////////////////////////////////////////////////////////

include("./ini/gswp_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('物品数量', [$npcc => $wpsl]);


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

/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////





//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////


//调用物品信息
include("./wp/wpxx.php");
//ini文件名字
$inina="gsrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('挂售已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('挂售已用容量', ['容量' => $wprl]);
	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);







//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////

echo "<font color=red>你下架了".$wpmz."x".$sl."</font>"."<br>";

include("template/xy219.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} elseif($wpsl==$sl){  


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////

$wpsl=$wpsl-$sl;
$arr = explode("_",$npcc);
$npcc1=$arr[0];
$npcc2=$arr[1];
include("./sql/mysql.php");//调用数据库连接 
$q2="gswp".$wjid;
$strsql = "delete from $q2 where id='$npcc2' ";//物品id号必改值
$result = mysql_query($strsql);
//仓库加


//查询如果没有则添加
$q2="wp".$wjid;
$sql1=mysql_query("select * from $q2 where wpid='$npcc1'",$conn);
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
include("./wp/wpxx.php");
$q2="wp".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$npcc1','$ckwpsl','$wpfl')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

} else{
$q2="wp".$wjid;	
$ckwpsl=$ckwpsl+$sl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysql_query($strsql);
} 

///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////







/////////////////////////////////////////////////////////////////////////////////////缓存修改强制更新//////////////////////////////////////////////////////////////
include("./ini/gswp_ini.php");
# 删除一个子项
$iniFile->delItem('物品id', $npcc);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('物品数量', $npcc);
# 删除一个子项
$iniFile->delItem('物品名字', $npcc);
# 删除一个子项
$iniFile->delItem('物品价格', $npcc);
if($wpfl==1){//背包书卷
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

/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////









//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////

include("./wp/wpxx.php");




//ini文件名字
$inina="gsrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('挂售已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('挂售已用容量', ['容量' => $wprl]);
	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);

//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////




echo "<font color=red>你下架了".$wpmz."x".$sl."</font>"."<br>";


if($sl>1){  
include("template/xy219.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} else {


} 




} else {
	$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}




} else{
$dqwp=0;
	//$qbwp=1;
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


?>




