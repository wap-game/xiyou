<?php

if ($dty==0) {


	
$map01="山门";//地名
$map03="洞廊";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
	
//副本如意传送门
$csid=86;//传送id值
include("./fb/rycs.php");
    //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=316;
$npc[]=0;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【西游各大副本重置台】（需要副本重置令）</font></a>"."<br>";



$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=97;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【乌鸡国】</font></a>"."<br>";

include("./fb/psd.php");




include("mapxx.php");//地图出入口


} elseif ($dty==1) {

	
$map01="洞廊";//地名
$map03="";//出口上
$map04="山门";//出口下
$map05="";//出口左
$map06="花厅";//出口右
include("maptop.php");//地图顶端

//副本如意传送门
$csid=87;//传送id值
include("./fb/rycs.php");
//-----------------------------------------------------------------------------------
$fb="psd";//副本变量
$fbid1=61;//副本变量
$fbid2=62;//副本变量
$fbid3=63;//副本变量
$fbid4=64;//副本变量
include("./ini/fb_ini.php");
$gw1=($iniFile->getItem($fbid1,'怪物1'));
$wcqk1=($iniFile->getItem($fbid1,'完成情况'));
$gw2=($iniFile->getItem($fbid2,'怪物1'));
$wcqk2=($iniFile->getItem($fbid2,'完成情况'));
$gw3=($iniFile->getItem($fbid3,'怪物1'));
$wcqk3=($iniFile->getItem($fbid3,'完成情况'));
$gw4=($iniFile->getItem($fbid4,'怪物1'));
$wcqk4=($iniFile->getItem($fbid4,'完成情况')); 
if($gw1 ==1&&$wcqk1!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1086;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【七蛛精·红】(普通)</font></a>"."<br>";
} else{
}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1087;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【七蛛精·红】(困难)</font></a>"."<br>";
} else{
}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1088;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【七蛛精·红】(梦魇)</font></a>"."<br>";
} else{
}
 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1089;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【七蛛精·红】(地狱)</font></a>"."<br>";
} else{
}
//-----------------------------------------------------------------------------------





include("mapxx.php");//地图出入口


} elseif ($dty==2) {

	
$map01="花厅";//地名
$map03="";//出口上
$map04="九曲廊";//出口下
$map05="洞廊";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
//副本如意传送门
$csid=88;//传送id值
include("./fb/rycs.php");

//【六蛛精·橙】
//-----------------------------------------------------------------------------------
$fb="psd";//副本变量
$fbid1=61;//副本变量
$fbid2=62;//副本变量
$fbid3=63;//副本变量
$fbid4=64;//副本变量
include("./ini/fb_ini.php");
$gw1=($iniFile->getItem($fbid1,'怪物2'));
$wcqk1=($iniFile->getItem($fbid1,'完成情况'));
$gw2=($iniFile->getItem($fbid2,'怪物2'));
$wcqk2=($iniFile->getItem($fbid2,'完成情况'));
$gw3=($iniFile->getItem($fbid3,'怪物2'));
$wcqk3=($iniFile->getItem($fbid3,'完成情况'));
$gw4=($iniFile->getItem($fbid4,'怪物2'));
$wcqk4=($iniFile->getItem($fbid4,'完成情况')); 
if($gw1 ==1&&$wcqk1!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1090;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【六蛛精·橙】(普通)</font></a>"."<br>";
} else{
}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1091;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【六蛛精·橙】(困难)</font></a>"."<br>";
} else{
}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1092;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【六蛛精·橙】(梦魇)</font></a>"."<br>";
} else{
}
 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1093;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【六蛛精·橙】(地狱)</font></a>"."<br>";
} else{
}
//-----------------------------------------------------------------------------------
include("mapxx.php");//地图出入口
 


} elseif ($dty==3) {
$map01="九曲廊";//地名
$map03="花厅";//出口上
$map04="小厅";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口


} elseif ($dty==4) {

	
$map01="小厅";//地名
$map03="九曲廊";//出口上
$map04="后院";//出口下
$map05="西厢房";//出口左
$map06="东厢房";//出口右
include("maptop.php");//地图顶端
//副本如意传送门
$csid=89;//传送id值
include("./fb/rycs.php");

//【五蛛精·黄】
//-----------------------------------------------------------------------------------
$fb="psd";//副本变量
$fbid1=61;//副本变量
$fbid2=62;//副本变量
$fbid3=63;//副本变量
$fbid4=64;//副本变量
include("./ini/fb_ini.php");
$gw1=($iniFile->getItem($fbid1,'怪物3'));
$wcqk1=($iniFile->getItem($fbid1,'完成情况'));
$gw2=($iniFile->getItem($fbid2,'怪物3'));
$wcqk2=($iniFile->getItem($fbid2,'完成情况'));
$gw3=($iniFile->getItem($fbid3,'怪物3'));
$wcqk3=($iniFile->getItem($fbid3,'完成情况'));
$gw4=($iniFile->getItem($fbid4,'怪物3'));
$wcqk4=($iniFile->getItem($fbid4,'完成情况')); 
if($gw1 ==1&&$wcqk1!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1094;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【五蛛精·黄】(普通)</font></a>"."<br>";
} else{
}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1095;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【五蛛精·黄】(困难)</font></a>"."<br>";
} else{
}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1096;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【五蛛精·黄】(梦魇)</font></a>"."<br>";
} else{
}
 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1097;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【五蛛精·黄】(地狱)</font></a>"."<br>";
} else{
}
//-----------------------------------------------------------------------------------

include("mapxx.php");//地图出入口

} elseif ($dty==5) {

	
$map01="西厢房";//地名
$map03="";//出口上
$map04="卧室";//出口下
$map05="";//出口左
$map06="小厅";//出口右
include("maptop.php");//地图顶端
//副本如意传送门
$csid=90;//传送id值
include("./fb/rycs.php");

//【四蛛精·紫】
//-----------------------------------------------------------------------------------
$fb="psd";//副本变量
$fbid1=61;//副本变量
$fbid2=62;//副本变量
$fbid3=63;//副本变量
$fbid4=64;//副本变量
include("./ini/fb_ini.php");
$gw1=($iniFile->getItem($fbid1,'怪物4'));
$wcqk1=($iniFile->getItem($fbid1,'完成情况'));
$gw2=($iniFile->getItem($fbid2,'怪物4'));
$wcqk2=($iniFile->getItem($fbid2,'完成情况'));
$gw3=($iniFile->getItem($fbid3,'怪物4'));
$wcqk3=($iniFile->getItem($fbid3,'完成情况'));
$gw4=($iniFile->getItem($fbid4,'怪物4'));
$wcqk4=($iniFile->getItem($fbid4,'完成情况')); 
if($gw1 ==1&&$wcqk1!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1098;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【四蛛精·紫】(普通)</font></a>"."<br>";
} else{
}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1099;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【四蛛精·紫】(困难)</font></a>"."<br>";
} else{
}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1100;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【四蛛精·紫】(梦魇)</font></a>"."<br>";
} else{
}
 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1101;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【四蛛精·紫】(地狱)</font></a>"."<br>";
} else{
}
//-----------------------------------------------------------------------------------

include("mapxx.php");//地图出入口

} elseif ($dty==6) {
$map01="卧室";//地名
$map03="西厢房";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==7) {

	
$map01="东厢房";//地名
$map03="";//出口上
$map04="闺房";//出口下
$map05="小厅";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
//副本如意传送门
$csid=91;//传送id值
include("./fb/rycs.php");

//【二蛛精·白】
//-----------------------------------------------------------------------------------
$fb="psd";//副本变量
$fbid1=61;//副本变量
$fbid2=62;//副本变量
$fbid3=63;//副本变量
$fbid4=64;//副本变量
include("./ini/fb_ini.php");
$gw1=($iniFile->getItem($fbid1,'怪物5'));
$wcqk1=($iniFile->getItem($fbid1,'完成情况'));
$gw2=($iniFile->getItem($fbid2,'怪物5'));
$wcqk2=($iniFile->getItem($fbid2,'完成情况'));
$gw3=($iniFile->getItem($fbid3,'怪物5'));
$wcqk3=($iniFile->getItem($fbid3,'完成情况'));
$gw4=($iniFile->getItem($fbid4,'怪物5'));
$wcqk4=($iniFile->getItem($fbid4,'完成情况')); 
if($gw1 ==1&&$wcqk1!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1102;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【二蛛精·白】(普通)</font></a>"."<br>";
} else{
}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1103;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【二蛛精·白】(困难)</font></a>"."<br>";
} else{
}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1104;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【二蛛精·白】(梦魇)</font></a>"."<br>";
} else{
}
 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1105;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【二蛛精·白】(地狱)</font></a>"."<br>";
} else{
}
//-----------------------------------------------------------------------------------

include("mapxx.php");//地图出入口

} elseif ($dty==8) {

$map01="闺房";//地名
$map03="东厢房";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
	//副本如意传送门
$csid=92;//传送id值
include("./fb/rycs.php");
//-----------------------------------------------------------------------------------
$fb="psd";//副本变量
$fbid1=61;//副本变量
$fbid2=62;//副本变量
$fbid3=63;//副本变量
$fbid4=64;//副本变量
include("./ini/fb_ini.php");
$gw1=($iniFile->getItem($fbid1,'怪物6'));
$wcqk1=($iniFile->getItem($fbid1,'完成情况'));
$gw2=($iniFile->getItem($fbid2,'怪物6'));
$wcqk2=($iniFile->getItem($fbid2,'完成情况'));
$gw3=($iniFile->getItem($fbid3,'怪物6'));
$wcqk3=($iniFile->getItem($fbid3,'完成情况'));
$gw4=($iniFile->getItem($fbid4,'怪物6'));
$wcqk4=($iniFile->getItem($fbid4,'完成情况')); 
if($gw1 ==1&&$wcqk1!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1106;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【三蛛精·蓝】(普通)</font></a>"."<br>";
} else{
}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1107;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【三蛛精·蓝】(困难)</font></a>"."<br>";
} else{
}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1108;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【三蛛精·蓝】(梦魇)</font></a>"."<br>";
} else{
}
 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1109;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【三蛛精·蓝】(地狱)</font></a>"."<br>";
} else{
}
//-----------------------------------------------------------------------------------
include("mapxx.php");//地图出入口

} elseif ($dty==9) {
	
$map01="后院";//地名
$map03="小厅";//出口上
$map04="石屋";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==10) {

	
$map01="石屋";//地名
$map03="后院";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
//副本如意传送门
$csid=93;//传送id值
include("./fb/rycs.php");

//-----------------------------------------------------------------------------------
$fb="psd";//副本变量
$fbid1=61;//副本变量
$fbid2=62;//副本变量
$fbid3=63;//副本变量
$fbid4=64;//副本变量
include("./ini/fb_ini.php");
$gw1=($iniFile->getItem($fbid1,'怪物7'));
$wcqk1=($iniFile->getItem($fbid1,'完成情况'));
$gw2=($iniFile->getItem($fbid2,'怪物7'));
$wcqk2=($iniFile->getItem($fbid2,'完成情况'));
$gw3=($iniFile->getItem($fbid3,'怪物7'));
$wcqk3=($iniFile->getItem($fbid3,'完成情况'));
$gw4=($iniFile->getItem($fbid4,'怪物7'));
$wcqk4=($iniFile->getItem($fbid4,'完成情况')); 
if($gw1 ==1&&$wcqk1!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1110;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【大蛛精·黑】(普通)</font></a>"."<br>";
} else{
}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1111;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【大蛛精·黑】(困难)</font></a>"."<br>";
} else{
}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1112;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【大蛛精·黑】(梦魇)</font></a>"."<br>";
} else{
}
 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1113;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【大蛛精·黑】(地狱)</font></a>"."<br>";
} else{
}
//-----------------------------------------------------------------------------------
include("mapxx.php");//地图出入口












} else {
  echo "错误地图,编号：".$dty."<br>";
}







?>