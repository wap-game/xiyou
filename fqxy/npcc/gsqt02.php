<?php





if($sll!=0){
	
	if($gsjgl!=0){
	if($gsjg>=1000){
	if($gsjg>=1000&&$gsjg<=99999999999){
		
		
if($wpsl>=$sl){
	
	
	
	
//调用物品信息
$bsid=$npcc;
include("./wp/zbbs.php");
$wpzl=$bszl;

	//扣除手续费用
$bfb=floor($sl*$gsjg*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$ylmm=$ylsxf;
include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));


if($yl>=$ylmm){

if($bsbd==1){

//扣除手续费	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yl";
$sql1=mysql_query("select bbyl from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjyl=$info1[bbyl];
$wjyll=$wjyl-$ylsxf;
$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两' => $wjyll]);
//数字转汉字
$yl=$ylmm;
include("./pz/ylts.php");
echo  "<font color=red>手续费：".$ylxx."银两</font></a></br>";
//扣除手续费	
include("./ini/zt_ini.php");



# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('玩家信息',['背包容量','挂售容量']));
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



$bbrlb=$wjxx[背包容量];

$cbbrlb=$wjxx[挂售容量];
	
	


	include("./ini/gsrl_ini.php");
	

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('挂售已用容量','容量'));

$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;



if($wprl<=$cbbrlb){
	
	


if($wpsl<$sl){
	$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";






} elseif($wpsl>$sl&&$sl!=0){  

 if($ymid==35){//背包其他
$wpsl=$wpsl-$sl;


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////


	//背包减
include("./sql/mysql.php");//调用数据库连接 
$q2="qt".$wjid;
$strsql = "update $q2 set wpsl=$wpsl where wpid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
//仓库加



//获取最大值
$q2="gsqt".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
//调用物品信息
include("./wp/wpxx.php");
$q2="gsqt".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,gsjg)  values('$maxidd','$npcc','$sl','$gsjg')";


 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }



//

} else{



}



///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////强制更新数据以数据库数据为主//////////////////////////////////////////////////////////////

if($ymid==35){//背包其他
include("./ini/qt_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('其他数量', [$npcc => $wpsl]);




include("./ini/gsqt_ini.php");
unlink($file); //删除文件  




} else{



}

/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////







//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////


if($ymid==35){

//调用物品信息
$bsid=$npcc;
include("./wp/zbbs.php");
$wpmz=$bsmz;
$wpzl=$bszl;

} else{



}



	include("./ini/bbrl_ini.php");
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);

include("./ini/gsrl_ini.php");

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('挂售已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('挂售已用容量', ['容量' => $wprl]);

//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////

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



//数字转汉字
$yl=$gsjg;
include("./pz/ylts.php");



echo "<font color=red>你以每件".$ylxx."两的价格挂售了".$wpmz."x".$sl."</font>"."<br>";


echo "<br>";

if($ymid==35){ //背包

include("template/xy035.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} else{



}





} elseif($wpsl==$sl){  


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////

$wpsl=$wpsl-$sl;

include("./sql/mysql.php");//调用数据库连接 
$q2="qt".$wjid;
$strsql = "delete from $q2 where wpid=$npcc ";//物品id号必改值
$result = mysql_query($strsql);

//仓库加



//获取最大值
$q2="gsqt".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}


//调用物品信息
include("./wp/wpxx.php");
$q2="gsqt".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,gsjg)  values('$maxidd','$npcc','$sl','$gsjg')";

 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }




///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////缓存修改强制更新//////////////////////////////////////////////////////////////
if($ymid==35){//背包书卷

//ini文件名字
$inina="qt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('其他id', $xlh);
# 删除一个子项
$iniFile->delItem('其他', $npcc);
# 删除一个子项
$iniFile->delItem('其他数量', $npcc);
# 删除一个子项
$iniFile->delItem('其他名字', $npcc);



//ini文件名字
$inina="gsqt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  


} else{



}

/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////










//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////



if($ymid==35){ //背包其他
//调用物品信息
$bsid=$npcc;
include("./wp/zbbs.php");
$wpmz=$bsmz;
$wpzl=$bszl;

} else{



}
	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);

	
//ini文件名字
$inina="gsrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('挂售已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('挂售已用容量', ['容量' => $wprl]);


//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////
























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

//数字转汉字
$yl=$gsjg;
include("./pz/ylts.php");


echo "<font color=red>你以每件".$ylxx."银两的价格挂售了".$wpmz."x".$sl."</font>"."<br>";

echo "<br>";

if($ymid==35){ //背包宝箱

include("template/xy035.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} else{



}







} else {
	$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}




} else{
$dqwp=0;
	//$qbwp=1;
echo "<font color=red>对不起，你的挂售已放不下任何东西了</font>"."<br>";
echo "<br>";

include("template/xy035.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");


}


} else {
	$dqwp=0;
echo "<font color=red>对不起！绑定物品不能进行挂售</font>"."<br>";
echo "<br>";
}




} else {
$dqwp=0;
echo "<font color=red>挂售手续费不足</font>"."<br>";
echo "<br>";
}

} else{

	$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";



}




} else {
$dqwp=0;
echo "<font color=red>挂售单价超过最大银两限制</font>"."<br>";
echo "<br>";
}


} else {
$dqwp=0;
echo "<font color=red>挂售单价必须在1000银两上</font>"."<br>";
echo "<br>";
}

} else {
$dqwp=0;
echo "<font color=red>挂售价格输入有误请重新输入</font>"."<br>";
echo "<br>";
}




} else {
$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}


?>




