<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
$zbid=$npcc."_".$npccid;
$zbid1=$zbid;
$wpidd=$npcc;
$cwid1=$arr[2];
$cwid2=$arr[3];
$cwid3=$cwid1."_".$cwid2;

$zbid=$cwid3;
include("./ini/cwzbb_ini.php");
$zbid=$zbid1;




include("./wp/zbxx.php");//装备信息

$zbk1=($iniFile->getItem('装备孔1',$zbid));
$zbk2=($iniFile->getItem('装备孔2',$zbid));
$zbk3=($iniFile->getItem('装备孔3',$zbid));
$zbk4=($iniFile->getItem('装备孔4',$zbid));
$zbk5=($iniFile->getItem('装备孔5',$zbid));

$ks=$zbk1+$zbk2+$zbk3+$zbk4+$zbk5+1;

if($ks>=0&&$ks<=5){
include("./zbdz/dkcl.php");
if($cgl!=0){
include("./ini/sc_ini.php");
$xyc1=($iniFile->getItem('商城数量','126'));
$xycid=126;
$xycmz="小幸运草";
if($xyc1==""){
$xyc1=($iniFile->getItem('商城数量','307'));
$xycid=307;
$xycmz="大幸运草";
} else{

}



//幸运草几率
if($xyc1!=""){
$xyc=5;
} elseif($xyc1!=""){   
$xyc=10;
} else{
$xyc=0;
}
$cgl1=$cgl;
$cgl=$cgl+$xyc;


if($cgl>=100){
$cgl=100;
}
} else{

}



$zbidx=$npcc;//当前装备id赋值
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始

//提供需要扣除的物品作为判读依据
//用幸运草
if($xyc1!=""&&$cgl1!=100){
$wpdz1[]=$xycmz;//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=$xycid;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
} else{

} 

if($ks==1){
$xycmz="〖打孔器〗";
} elseif($ks==2){   
$xycmz="〖普通打孔器〗";
} elseif($ks==3){   
$xycmz="〖高级打孔器〗";
} elseif($ks==4){ 
$xycmz="〖强化打孔器〗";
} elseif($ks==5){  
$xycmz="〖究极打孔器〗";
} else{

}
$wpdz1[]=$xycmz;//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=$xyclid;//物品id
$wpdz4[]=$xyclsl;//	需要扣除的量
$wpdz5[]=1;//	重量

$wpdz1[]="银两";//名字
$wpdz2[]=0;//物品分类
$wpdz3[]=0;//物品id
$wpdz4[]=$xyylid;//	需要扣除的量
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
//这里是升级装备代码	



$sj= rand(1, 100);
if($sj>=100-$cgl&&$sj<=100){
	
$npcc=$zbidx;
echo "<font color=black>恭喜你！打孔".$wp1."成功！！</font>"."<br>";
include("./pz/ini_pzz030.php");//打孔
} else{
echo "<font color=black>很遗憾！打孔".$wp1."失败了！！</font></a>"."<br>";

}



//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！打孔".$wp1."需要：".$wpts;//不满足提示语	
//	输出不满足提示语言
echo "<font color=red>".$bumanzu."</font>"."<br>";
}









} else{
	
	
echo "<font color=black>该装备已经是满孔神装了！！"."</font>"."<br>";


}













$cwid3=$zbid."_".$cwid3;

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$cwid3;
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