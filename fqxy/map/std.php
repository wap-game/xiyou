<?php

if ($dty==0) {
$map01="山门";//地名
$map03="";//出口上
$map04="中堂";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
//副本如意传送门
$csid=94;//传送id值
include("./fb/rycs.php");
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=97;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【乌鸡国】</font></a>"."<br>";
include("./fb/std.php");
include("mapxx.php");//地图出入口


} elseif ($dty==1) {
$map01="中堂";//地名
$map03="山门";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="剥皮厅";//出口右
include("maptop.php");//地图顶端

include("mapxx.php");//地图出入口


} elseif ($dty==2) {
$map01="剥皮厅";//地名
$map03="兵器库";//出口上
$map04="肉库";//出口下
$map05="中堂";//出口左
$map06="天井";//出口右
include("maptop.php");//地图顶端

include("mapxx.php");//地图出入口
 


} elseif ($dty==3) {
$map01="兵器库";//地名
$map03="";//出口上
$map04="剥皮厅";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
//副本如意传送门
$csid=95;//传送id值
include("./fb/rycs.php");
//【狮驼王】
//-----------------------------------------------------------------------------------
$fb="std";//副本变量
$fbid1=65;//副本变量
$fbid2=66;//副本变量
$fbid3=67;//副本变量
$fbid4=68;//副本变量
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
$npc[]=1114;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【狮驼王】(普通)</font></a>"."<br>";
} else{
}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1115;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【狮驼王】(困难)</font></a>"."<br>";
} else{
}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1116;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【狮驼王】(梦魇)</font></a>"."<br>";
} else{
}
 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1117;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【狮驼王】(地狱)</font></a>"."<br>";
} else{
}
//-----------------------------------------------------------------------------------






include("mapxx.php");//地图出入口


} elseif ($dty==4) {
$map01="肉库";//地名
$map03="剥皮厅";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==5) {
$map01="天井";//地名
$map03="";//出口上
$map04="";//出口下
$map05="剥皮厅";//出口左
$map06="聚义厅";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==6) {
$map01="聚义厅";//地名
$map03="";//出口上
$map04="走廊";//出口下
$map05="天井";//出口左
$map06="后花园";//出口右
include("maptop.php");//地图顶端
//副本如意传送门
$csid=96;//传送id值
include("./fb/rycs.php");

//【白象尊者】
//-----------------------------------------------------------------------------------
$fb="std";//副本变量
$fbid1=65;//副本变量
$fbid2=66;//副本变量
$fbid3=67;//副本变量
$fbid4=68;//副本变量
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
$npc[]=1118;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【白象尊者】(普通)</font></a>"."<br>";
} else{
}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1119;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【白象尊者】(困难)</font></a>"."<br>";
} else{
}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1120;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【白象尊者】(梦魇)</font></a>"."<br>";
} else{
}
 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1121;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【白象尊者】(地狱)</font></a>"."<br>";
} else{
}
//-----------------------------------------------------------------------------------


include("mapxx.php");//地图出入口

} elseif ($dty==7) {
$map01="走廊";//地名
$map03="聚义厅";//出口上
$map04="饮酒厅";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==8) {
$map01="饮酒厅";//地名
$map03="走廊";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
//副本如意传送门
$csid=97;//传送id值
include("./fb/rycs.php");
//-----------------------------------------------------------------------------------
$fb="std";//副本变量
$fbid1=65;//副本变量
$fbid2=66;//副本变量
$fbid3=67;//副本变量
$fbid4=68;//副本变量
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
$npc[]=1122;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【大鹏明王】(普通)</font></a>"."<br>";
} else{
}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1123;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【大鹏明王】(困难)</font></a>"."<br>";
} else{
}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1124;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【大鹏明王】(梦魇)</font></a>"."<br>";
} else{
}
 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1125;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【大鹏明王】(地狱)</font></a>"."<br>";
} else{
}
//-----------------------------------------------------------------------------------





include("mapxx.php");//地图出入口

} elseif ($dty==9) {
$map01="后花园";//地名
$map03="";//出口上
$map04="";//出口下
$map05="聚义厅";//出口左
$map06="卧室";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==10) {
$map01="卧室";//地名
$map03="";//出口上
$map04="";//出口下
$map05="后花园";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口












} else {
  echo "错误地图,编号：".$dty."<br>";
}







?>