<?php




//时间验证
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间','469'));
$vipqytime=600;//系统消息存活秒数6分钟

if ($hdtime!="") {
$startdate=$hdtime;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));
if($minute <= $vipqytime){
$minute1=$vipqytime-$minute;
$minute=floor($minute1/60);
$second=$minute1%60;

if($minute > 0){		
echo "<font color=black>区域剩余：".$minute."分".$second."秒</font>"."<br>";
} else{
echo "<font color=black>区域剩余：".$second."秒</font>"."<br>";
} 	
$vipqy=2;	
} else{
$vipqy=1;	
}
} else{
$vipqy=1;	
}
if($vipqy == 1){
echo "<font color=red>区域时间已到，请迅速离开</font>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开伏羲大阵</font></a>"."<br>";

} else{






if ($dty==0) {
$map01="【万象阵】（天阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端

$tttpdid1=365;
$tttpdid2=366;
$tttpdid3=367;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=177;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【万象阵】（随机）</font></a>"."<br>";
} else{	
} 


$tttid=365;
include("./rcrw/ttt.php");


if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1211;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【天阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【天阵】守卫（已阵亡）</font></br>"; 	

} 

$tttid=366;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1212;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【天阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【天阵】守卫（已阵亡）</font></br>"; 	
}
$tttid=367;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1213;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【天阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【天阵】守卫（已阵亡）</font></br>"; 	
}






include("mapxx.php");//地图出入口


} elseif ($dty==1) {
$map01="【万象阵】（地阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端

$tttpdid1=368;
$tttpdid2=369;
$tttpdid3=370;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=179;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【八门阵】（死门）</font></a>"."<br>";
} else{	
echo "<font color=red>【八门阵】（封印中）</font></a>"."<br>";
} 


$tttid=368;
include("./rcrw/ttt.php");


if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1214;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【地阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【地阵】守卫（已阵亡）</font></br>"; 	
} 
$tttid=369;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1215;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【地阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【地阵】守卫（已阵亡）</font></br>"; 	
}
$tttid=370;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1216;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【地阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【地阵】守卫（已阵亡）</font></br>"; 	
}
include("mapxx.php");//地图出入口


} elseif ($dty==2) {
$map01="【万象阵】（人阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=371;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1217;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【人阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【人阵】守卫（已阵亡）</font></br>"; 	
} 
$tttid=372;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1218;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【人阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【人阵】守卫（已阵亡）</font></br>"; 	
}
$tttid=373;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1219;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【人阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【人阵】守卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////

include("mapxx.php");//地图出入口

} elseif ($dty==3) {
$map01="【万象阵】（风阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=374;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1220;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【风阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【风阵】守卫（已阵亡）</font></br>"; 	
} 
$tttid=375;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1221;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【风阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【风阵】守卫（已阵亡）</font></br>"; 	
}
$tttid=376;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1222;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【风阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【风阵】守卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口


} elseif ($dty==4) {
$map01="【万象阵】（云阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";




$tttid=377;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1223;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【云阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【云阵】守卫（已阵亡）</font></br>"; 	
} 
$tttid=378;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1224;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【云阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【云阵】守卫（已阵亡）</font></br>"; 	
}
$tttid=379;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1225;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【云阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【云阵】守卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==5) {
$map01="【万象阵】（龙阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=380;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1226;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【龙阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【龙阵】守卫（已阵亡）</font></br>"; 	
} 
$tttid=381;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1227;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【龙阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【龙阵】守卫（已阵亡）</font></br>"; 	
}
$tttid=382;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1228;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【龙阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【龙阵】守卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口



} elseif ($dty==6) {
$map01="【万象阵】（虎阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";


$tttid=383;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1229;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【虎阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【虎阵】守卫（已阵亡）</font></br>"; 	
} 
$tttid=384;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1230;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【虎阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【虎阵】守卫（已阵亡）</font></br>"; 	
}
$tttid=385;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1231;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【虎阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【虎阵】守卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口



} elseif ($dty==7) {
$map01="【万象阵】（神阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=386;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1232;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【神阵】守卫（已阵亡）</font></br>"; 	
} 
$tttid=387;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1233;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【神阵】守卫（已阵亡）</font></br>"; 	
}
$tttid=388;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1234;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【神阵】守卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口


} elseif ($dty==8) {
$map01="【万象阵】（鬼阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=389;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1235;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【鬼阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【神阵】守卫（已阵亡）</font></br>"; 	
} 
$tttid=390;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1236;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【鬼阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【神阵】守卫（已阵亡）</font></br>"; 	
}
$tttid=391;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1237;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【鬼阵】守卫</font></a>"."<br>";
} else{	
echo "<font color=red>【神阵】守卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口


} elseif ($dty==9) {
$map01="【八门阵】（休门）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=392;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1238;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【休门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【休门】守将（已阵亡）</font></br>"; 	
} 
$tttid=393;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1239;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【休门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【休门】守将（已阵亡）</font></br>"; 	
}
$tttid=394;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1240;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【休门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【休门】守将（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==10) {
$map01="【八门阵】（生门）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////可以进入下一阵///////////////////////////////////


$tttpdid1=395;
$tttpdid2=396;
$tttpdid3=397;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=181;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【八卦阵】（乾阵）</font></a>"."<br>";
} else{	
echo "<font color=red>【八卦阵】（封印中）</font></a>"."<br>";
} 






$tttid=395;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1241;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【生门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【生门】守将（已阵亡）</font></br>"; 	
} 
$tttid=396;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1242;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【生门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【生门】守将（已阵亡）</font></br>"; 	
}
$tttid=397;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1243;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【生门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【生门】守将（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////可以进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==11) {
$map01="【八门阵】（伤门）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=398;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1244;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【伤门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【伤门】守将（已阵亡）</font></br>"; 	
} 
$tttid=399;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1245;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【伤门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【伤门】守将（已阵亡）</font></br>"; 	
}
$tttid=400;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1246;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【伤门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【伤门】守将（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==12) {
$map01="【八门阵】（杜门）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=401;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1247;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【杜门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【杜门】守将（已阵亡）</font></br>"; 	
} 
$tttid=402;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1248;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【杜门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【杜门】守将（已阵亡）</font></br>"; 	
}
$tttid=403;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1249;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【杜门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【杜门】守将（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==13) {
$map01="【八门阵】（景门）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=404;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1250;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【景门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【景门】守将（已阵亡）</font></br>"; 	
} 
$tttid=405;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1251;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【景门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【景门】守将（已阵亡）</font></br>"; 	
}
$tttid=406;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1252;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【景门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【景门】守将（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==14) {
$map01="【八门阵】（死门）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////随机下一阵///////////////////////////////////

$tttpdid1=407;
$tttpdid2=408;
$tttpdid3=409;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=180;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【八门阵】（随机）</font></a>"."<br>";
} else{	
} 

$tttid=407;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1253;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【死门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【死门】守将（已阵亡）</font></br>"; 	
} 
$tttid=408;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1254;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【死门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【死门】守将（已阵亡）</font></br>"; 	
}
$tttid=409;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1255;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【死门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【死门】守将（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口


} elseif ($dty==15) {
$map01="【八门阵】（惊门）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////随机下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=410;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1256;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【惊门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【惊门】守将（已阵亡）</font></br>"; 	
} 
$tttid=411;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1257;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【惊门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【惊门】守将（已阵亡）</font></br>"; 	
}
$tttid=412;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1258;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【惊门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【惊门】守将（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口


} elseif ($dty==16) {
$map01="【八门阵】（开门）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=413;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1259;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【开门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【开门】守将（已阵亡）</font></br>"; 	
} 
$tttid=414;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1260;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【开门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【开门】守将（已阵亡）</font></br>"; 	
}
$tttid=415;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1261;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【开门】守将</font></a>"."<br>";
} else{	
echo "<font color=red>【开门】守将（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==17) {
$map01="【八卦阵】（乾阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttpdid1=416;
$tttpdid2=417;
$tttpdid3=418;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=182;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【八卦阵】（随机）</font></a>"."<br>";
} else{	
} 

$tttid=416;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1262;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【乾阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【乾阵】仙卫（已阵亡）</font></br>"; 	
}
$tttid=417;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1263;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【乾阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【乾阵】仙卫（已阵亡）</font></br>"; 	
}
$tttid=418;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1264;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【乾阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【乾阵】仙卫（已阵亡）</font></br>"; 	
}


include("mapxx.php");//地图出入口





} elseif ($dty==18) {
$map01="【八卦阵】（震阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=419;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1265;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【震阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【震阵】仙卫（已阵亡）</font></br>"; 	
} 
$tttid=420;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1266;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【震阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【震阵】仙卫（已阵亡）</font></br>"; 	
}
$tttid=421;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1267;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【震阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【震阵】仙卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==19) {
$map01="【八卦阵】（坎阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=422;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1268;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【坎阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【坎阵】仙卫（已阵亡）</font></br>"; 	
} 
$tttid=423;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1269;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【坎阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【坎阵】仙卫（已阵亡）</font></br>"; 	
}
$tttid=424;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1270;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【坎阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【坎阵】仙卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口
} elseif ($dty==20) {
$map01="【八卦阵】（艮阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=425;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1271;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【艮阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【艮阵】仙卫（已阵亡）</font></br>"; 	
} 
$tttid=426;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1272;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【艮阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【艮阵】仙卫（已阵亡）</font></br>"; 	
}
$tttid=427;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1273;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【艮阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【艮阵】仙卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==21) {
$map01="【八卦阵】（坤阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////进入下一阵///////////////////////////////////
$tttpdid1=428;
$tttpdid2=429;
$tttpdid3=430;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=183;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【八阵图】（天覆阵）</font></a>"."<br>";
} else{	
echo "<font color=red>【八阵图】（封印中）</font></a>"."<br>";
} 

$tttid=428;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1274;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【坤阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【坤阵】仙卫（已阵亡）</font></br>"; 	
} 
$tttid=429;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1275;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【坤阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【坤阵】仙卫（已阵亡）</font></br>"; 	
}
$tttid=430;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1276;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【坤阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【坤阵】仙卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==22) {
$map01="【八卦阵】（巽阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=431;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1277;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【巽阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【巽阵】仙卫（已阵亡）</font></br>"; 	
} 
$tttid=432;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1278;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【巽阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【巽阵】仙卫（已阵亡）</font></br>"; 	
}
$tttid=433;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1279;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【巽阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【巽阵】仙卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==23) {
$map01="【八卦阵】（离阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";




$tttid=434;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1280;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【离阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【离阵】仙卫（已阵亡）</font></br>"; 	
} 
$tttid=435;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1281;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【离阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【离阵】仙卫（已阵亡）</font></br>"; 	
}
$tttid=436;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1282;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【离阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【离阵】仙卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==24) {
$map01="【八卦阵】（兑阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=437;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1283;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【兑阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【兑阵】仙卫（已阵亡）</font></br>"; 	
} 
$tttid=438;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1284;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【兑阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【兑阵】仙卫（已阵亡）</font></br>"; 	
}
$tttid=439;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1285;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【兑阵】仙卫</font></a>"."<br>";
} else{	
echo "<font color=red>【兑阵】仙卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口


} elseif ($dty==25) {
$map01="【八阵图】（天覆阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////

$tttpdid1=440;
$tttpdid2=441;
$tttpdid3=442;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=184;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【八阵图】（随机）</font></a>"."<br>";
} else{	
} 



$tttid=440;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1286;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【天覆阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【天覆阵】神卫（已阵亡）</font></br>"; 	
} 
$tttid=441;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1287;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【天覆阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【天覆阵】神卫（已阵亡）</font></br>"; 	
}
$tttid=442;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1288;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【天覆阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【天覆阵】神卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口


} elseif ($dty==26) {
$map01="【八阵图】（地载阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$tttpdid1=443;
$tttpdid2=444;
$tttpdid3=445;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=185;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【神仙气阵图】</font></a>"."<br>";
} else{	
echo "<font color=red>【神仙气阵图】（封印中）</font></a>"."<br>";
} 
$tttid=443;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1289;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【地载阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【地载阵】神卫（已阵亡）</font></br>"; 	
} 
$tttid=444;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1290;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【地载阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【地载阵】神卫（已阵亡）</font></br>"; 	
}
$tttid=445;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1291;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【地载阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【地载阵】神卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口


} elseif ($dty==27) {
$map01="【八阵图】（风扬阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=446;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1292;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【风扬阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【风扬阵】神卫（已阵亡）</font></br>"; 	
} 
$tttid=447;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1293;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【风扬阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【风扬阵】神卫（已阵亡）</font></br>"; 	
}
$tttid=448;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1294;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【风扬阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【风扬阵】神卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==28) {
$map01="【八阵图】（云垂阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=449;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1295;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【云垂阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【云垂阵】神卫（已阵亡）</font></br>"; 	
} 
$tttid=450;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1296;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【云垂阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【云垂阵】神卫（已阵亡）</font></br>"; 	
}
$tttid=451;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1297;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【云垂阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【云垂阵】神卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口

} elseif ($dty==29) {
$map01="【八阵图】（龙飞阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";




$tttid=452;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1298;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【龙飞阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【龙飞阵】神卫（已阵亡）</font></br>"; 	
} 
$tttid=453;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1299;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【龙飞阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【龙飞阵】神卫（已阵亡）</font></br>"; 	
}
$tttid=454;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1300;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【龙飞阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【龙飞阵】神卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口


} elseif ($dty==30) {
$map01="【八阵图】（虎翼阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=455;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1301;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【虎翼阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【虎翼阵】神卫（已阵亡）</font></br>"; 	
} 
$tttid=456;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1302;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【虎翼阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【虎翼阵】神卫（已阵亡）</font></br>"; 	
}
$tttid=457;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1303;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【虎翼阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【虎翼阵】神卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口


} elseif ($dty==31) {
$map01="【八阵图】（鸟翔阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";



$tttid=458;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1304;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【鸟翔阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【鸟翔阵】神卫（已阵亡）</font></br>"; 	
} 
$tttid=459;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1305;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【鸟翔阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【鸟翔阵】神卫（已阵亡）</font></br>"; 	
}
$tttid=460;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1306;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【鸟翔阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【鸟翔阵】神卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口


} elseif ($dty==32) {
$map01="【八阵图】（蛇蟠阵）";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=657;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用〖护身符〗跳阵</font></a>"."<br>";




$tttid=461;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1307;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【蛇蟠阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【蛇蟠阵】神卫（已阵亡）</font></br>"; 	
} 
$tttid=462;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1308;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【蛇蟠阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【蛇蟠阵】神卫（已阵亡）</font></br>"; 	
}
$tttid=463;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1309;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【蛇蟠阵】神卫</font></a>"."<br>";
} else{	
echo "<font color=red>【蛇蟠阵】神卫（已阵亡）</font></br>"; 	
}
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口


} elseif ($dty==33) {
$map01="【神仙气阵图】";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=178;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开".$map01."</font></a>"."<br>";






$tttpdid1=464;
$tttpdid2=465;
$tttpdid3=466;
$tttpdid4=467;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
$pdid4=($iniFile->getItem('活动次数',$tttpdid4));
if ($pdid1>=2&&$pdid2>=2&&$pdid3>=2&&$pdid4>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=653;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【如来佛祖】（实现愿望）</font></a>"."<br>";
} else{	
echo "<font color=red>【如来佛祖】（实现愿望）（封印中）</font></a>"."<br>";
} 




$tttid=464;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1310;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神仙气阵图】神将</font></a>"."<br>";
} else{	
echo "<font color=red>【蛇蟠阵】神卫（已阵亡）</font></br>"; 	
} 
$tttid=465;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1311;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神仙气阵图】神将</font></a>"."<br>";
} else{	
echo "<font color=red>【蛇蟠阵】神卫（已阵亡）</font></br>"; 	
}
$tttid=466;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1312;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神仙气阵图】神将</font></a>"."<br>";
} else{	
echo "<font color=red>【蛇蟠阵】神卫（已阵亡）</font></br>"; 	
}

$tttid=467;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1313;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【如来佛祖】</font></a>"."<br>";
} else{	
echo "<font color=red>【如来佛祖】（已阵亡）</font></br>"; 	
}


/////////////////////////////////////////////不能进入下一阵///////////////////////////////////
include("mapxx.php");//地图出入口
















} else {
  echo "错误地图,编号：".$dty."<br>";
}



}






?>