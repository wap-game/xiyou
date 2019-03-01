<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
$hdid=3;
$npcc=$hdid;
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数',$hdid));
$csts=$hdcs+1;
echo "<font color=black>恭喜你！！领取到了第".$csts."份【神秘礼物】</font>"."<br>";


if($hdcs ==0){







$bz= rand(1, 10);//随机


if($bz ==1){	
//银两加
$yl1=100000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=100000;	
include("./pz/ini_pzz023.php");
} elseif ($bz==2) {
//银两加
$yl1=50000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=50000;	
include("./pz/ini_pzz023.php");
} elseif ($bz==3) {
//银两加
$yl1=20000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=20000;	
include("./pz/ini_pzz023.php");

} elseif ($bz>=4&&$bz<=10) {
//银两加
$yl1=8888;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//经验加
$jy=8888;	
include("./pz/ini_pzz023.php");


} else{
} 




} elseif ($hdcs==1) {
	
	
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
//得到物品代码
$wpdz1[]="〖打孔器〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=302;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=11&&$bz <=20){ 

//得到物品代码
$wpdz1[]="〖小智慧果〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=398;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=21&&$bz <=50){ 

//得到物品代码
$wpdz1[]="〖铁魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=308;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码

} elseif($bz >=51&&$bz <=80){ 
//得到物品代码
$wpdz1[]="〖铁魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=308;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} else{
//得到物品代码
$wpdz1[]="〖铁魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=308;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码

}
	

include("./rwmap/rwget.php");

} elseif ($hdcs==2) {


//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
//得到物品代码
$wpdz1[]="小幸运草";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=126;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码	
} elseif($bz >=11&&$bz <=20){ 
//得到物品代码
$wpdz1[]="大幸运草";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=307;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码	

} elseif($bz >=21&&$bz <=50){ 
//得到物品代码
$wpdz1[]="〖铜魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=309;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=51&&$bz <=80){ 
//得到物品代码
$wpdz1[]="〖铜魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=309;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
} else{
	$npcc=309;

//得到物品代码
$wpdz1[]="〖铜魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=309;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

}

include("./rwmap/rwget.php");




} elseif ($hdcs==3) {
	
	
	
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){

//得到物品代码
$wpdz1[]="〖大智慧果〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=399;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=11&&$bz <=20){ 


//得到物品代码
$wpdz1[]="【蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=237;//物品id
$wpdz4[]=3;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=21&&$bz <=50){ 
//得到物品代码
$wpdz1[]="【蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=237;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=51&&$bz <=80){ 
//得到物品代码
$wpdz1[]="云南白药（超大捆）";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=250;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量

echo "<font color=black> 恭喜你，获得云南白药(超大捆)x".$sl."</font>"."<br>";
} else{
//得到物品代码
$wpdz1[]="〖百年魔珠〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=331;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量


}
	
include("./rwmap/rwget.php");


} elseif ($hdcs==4) {
	

	
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=11&&$bz <=20){ 
//得到物品代码
$wpdz1[]="【VIP练级卷】";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=5;//物品id
$wpdz4[]=15;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=21&&$bz <=50){ 
//得到物品代码
$wpdz1[]="〖银魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=310;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=51&&$bz <=80){ 
//得到物品代码
$wpdz1[]="〖银魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=310;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
} else{
//得到物品代码
$wpdz1[]="〖银魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=310;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
}	
	
	
include("./rwmap/rwget.php");
	
} elseif ($hdcs==5) {
	

//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=11&&$bz <=20){ 
//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量

} elseif($bz >=21&&$bz <=50){ 
//得到物品代码
$wpdz1[]="〖金魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=311;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=51&&$bz <=80){ 
//得到物品代码
$wpdz1[]="〖金魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=311;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
} else{
//得到物品代码
$wpdz1[]="〖金魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=311;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
}	
	

include("./rwmap/rwget.php");
	


} elseif ($hdcs==6) {
	
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
//得到物品代码
$wpdz1[]="〖铁星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=314;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=11&&$bz <=20){ 

//得到物品代码
$wpdz1[]="〖铁星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=314;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=21&&$bz <=50){ 

//得到物品代码
$wpdz1[]="【三千年蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=238;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码

} elseif($bz >=51&&$bz <=80){ 
//得到物品代码
$wpdz1[]="【三千年蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=238;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} else{
//得到物品代码
$wpdz1[]="【三千年蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=238;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码

}	
	
	include("./rwmap/rwget.php");
	
	
	
} elseif ($hdcs==7) {
	
	
	//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
//得到物品代码
$wpdz1[]="〖铜星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=315;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=11&&$bz <=20){ 

//得到物品代码
$wpdz1[]="〖铜星升星符〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=315;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=21&&$bz <=50){ 

//得到物品代码
$wpdz1[]="【六千年蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=239;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码

} elseif($bz >=51&&$bz <=80){ 
//得到物品代码
$wpdz1[]="【六千年蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=239;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} else{
//得到物品代码
$wpdz1[]="【六千年蟠桃】";//名字
$wpdz2[]=5;//物品分类
$wpdz3[]=239;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
//得到物品代码

}	
	
	
	include("./rwmap/rwget.php");
	
	
	

} elseif ($hdcs==8) {
	
	
	
//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=11&&$bz <=20){ 

//得到物品代码
$wpdz1[]="〖高级打孔器〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=304;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
//得到物品代码
} elseif($bz >=21&&$bz <=50){ 
//得到物品代码
$wpdz1[]="〖银魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=310;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=51&&$bz <=80){ 
//得到物品代码
$wpdz1[]="〖银魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=310;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=1;//	重量
} else{
//得到物品代码
$wpdz1[]="〖银魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=310;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
}	
	include("./rwmap/rwget.php");
	
} elseif ($hdcs==9) {


	
		//随机
$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=11&&$bz <=20){ 

//得到物品代码
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=1;//	重量
} elseif($bz >=21&&$bz <=50){ 
//得到物品代码
$wpdz1[]="〖金魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=311;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=10;//	重量
} elseif($bz >=51&&$bz <=80){ 
//得到物品代码
$wpdz1[]="〖金魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=311;//物品id
$wpdz4[]=5;//	量
$wpdz5[]=15;//	重量
} else{
//得到物品代码
$wpdz1[]="〖金魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=311;//物品id
$wpdz4[]=2;//	量
$wpdz5[]=20;//	重量
}	



include("./rwmap/rwget.php");
	






} else{
} 
	
	
	
$hdcs=$hdcs+1;
$nowtime=date('Y-m-d H:i:s');
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=$hdcs where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => $hdcs]);	




	
	
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
include("./ini/jsini.php");
//解锁当前使用的ini


?>