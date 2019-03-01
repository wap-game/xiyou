<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
$ddfz=1;
include("./pz/ini_pzz010.php");//判断


//负重判断

if($pdfz==2){	
	
	
$xxid=$npcc;	
include("./ini/zbb_ini.php");
# 获取一个分类下某个子项的值
$zbid=($iniFile->getItem('装备星级','初始'));

# 获取一个分类下某个子项的值
$ks=$npcc;

if($ks==1){
$dkmz="zbxq1";
$bsid=($iniFile->getItem('装备镶嵌1',$zbid));
} elseif($ks==2){   
$dkmz="zbxq2";
$bsid=($iniFile->getItem('装备镶嵌2',$zbid));
} elseif($ks==3){   
$dkmz="zbxq3";
$bsid=($iniFile->getItem('装备镶嵌3',$zbid));
} elseif($ks==4){ 
$dkmz="zbxq4";
$bsid=($iniFile->getItem('装备镶嵌4',$zbid));
} elseif($ks==5){  
$dkmz="zbxq5";
$bsid=($iniFile->getItem('装备镶嵌5',$zbid));
} else{

}


//提供需要扣除的物品作为判读依据

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=500000;//	需要扣除的量
$wpdz5[]=0;//	重量
//提供需要扣除的物品作为判读依据



//////////////////////////////////////////////////////

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

$kcrl="";
$wwpfl=9;//物品分类
$wpid=$bsid;//物品id
$wpkc=1;//	需要增加的量
$wpzl=1;//	需要扣物品的重量
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz021.php");//增加
$kcrl=$wpkc*$wpzl+$kcrl;
	//背包容量变更
include("./pz/ini_pzz09.php");	

$arr = explode("_",$zbid);
$zbid1=$arr[0];
$zbid2=$arr[1];



$q2="zbb".$wjid; //数据库位置 
$strsql = "update $q2 set $dkmz=0 where zbid=$zbid1";//物品id号必改值
$result = mysql_query($strsql);
//更新缓存数据
$inina="zbb.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
//更新缓存数据
$inina="ztt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

echo "<font color=black>恭喜你！摘除宝石成功</font>"."<br>";

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！摘除宝石失败银两不足50万";//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}
	


} else{
//	输出负重不满足提示语言
echo "<font color=red>对不起！！你的负重不足！！</font>"."<br>";
}























echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=81;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回装备</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";




echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>