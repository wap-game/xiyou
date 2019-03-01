<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


$fbcz=$npcc;

$fbcz1=1;


if($npcc >=1&&$npcc<=30){
include("./wj/fbmz.php");
$inina1=$inina;

include("./ini/zt_ini.php");
$vip=($iniFile->getItem('玩家信息','vip等级'));


$path='ache/'.$wjid;
$file = $path."/".$inina1;	
$iniFile = new iniFile($file);
$czcs=($iniFile->getItem($npcc,'重置次数'));
$wcqk=($iniFile->getItem($npcc,'完成情况'));

if($wcqk!=1){


if($vip >=1&&$vip <=3){
$czsx=1;
} elseif($vip >=4&$vip <=5){
$czsx=2;
} elseif($vip >=6){
$czsx=3;
} else{
$czsx=0;
}


if($czsx >=$czcs+1){

$fbcz1=2;

} else{
echo "<font color=black>对不起！！".$fbmz."今日重置次数已达到".$czcs."次上限！提升vip等级可获得更多重置副本次数</font>"."<br>";
} 

} else{
echo "<font color=black>对不起！！".$fbmz."还未完成！无需重置它</font>"."<br>";
} 


} else{
	echo "<font color=black>没有找到此页面</font>"."<br>";
} 












if($fbcz1 ==2){




$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
//提供需要扣除的物品作为判读依据

$wpdz1[]="【副本重置令】";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=409;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量


//提供需要扣除的物品作为判读依据

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){
	
	
include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx.$swmz."</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<font color=black>失去：".$wpmz."x".$wpkc."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz04.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");



$result = mysql_query($strsql);
$path='ache/'.$wjid;
$file = $path."/".$inina1;	
$iniFile = new iniFile($file);
$czcs=($iniFile->getItem($fbcz,'重置次数'));
$czcs=$czcs+1;	
$q2="fb".$wjid;
$strsql = "update $q2 set wc=1,cs=$czcs where id=$fbcz";//物品id号必改值

$iniFile->updItem($fbcz, ['完成情况' => 1]);
$iniFile->updItem($fbcz, ['重置次数' => $czcs]);


$iniFile->updItem($fbcz, ['怪物1' => 1]);
$iniFile->updItem($fbcz, ['怪物2' => 1]);
$iniFile->updItem($fbcz, ['怪物3' => 1]);
$iniFile->updItem($fbcz, ['怪物4' => 1]);
$iniFile->updItem($fbcz, ['怪物5' => 1]);
$iniFile->updItem($fbcz, ['怪物6' => 1]);
$iniFile->updItem($fbcz, ['怪物7' => 1]);
$iniFile->updItem($fbcz, ['怪物8' => 1]);
$iniFile->updItem($fbcz, ['怪物9' => 1]);



//写入日常
//获取最大值
$q2="yxrw".$wjid;
mysql_query("set names utf8");
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,rwid,rwbl,rwmz,ysg,yisg,rwfl)  values('$maxidd','$fbcz','0','$fbmz','0','0','3')";

 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
$inina='yxrw.ini';
$path='./ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  













echo "<font color=red>恭喜你!重置".$fbmz."成功,勇敢的骚年啊快去完成它吧!</font>"."<br>";

//	输出满足提示语言
echo $manzu1;
} else{
$bumanzu="对不起！重置".$fbmz."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}


} else{

} 









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