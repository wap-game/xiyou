<?php

if ($dty==0) {
$map01="芭蕉洞口";//地名
$map03="";//出口上
$map04="走廊";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端

  //副本如意传送门
$csid=77;//传送id值
include("./fb/rycs.php");


include("./fb/bjd.php");
    //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=316;
$npc[]=0;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【西游各大副本重置台】（需要副本重置令）</font></a>"."<br>";



include("mapxx.php");//地图出入口


} elseif ($dty==1) {
$map01="走廊";//地名
$map03="芭蕉洞口";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="走廊";//出口右
include("maptop.php");//地图顶端

include("mapxx.php");//地图出入口


} elseif ($dty==2) {
$map01="走廊";//地名
$map03="厨房";//出口上
$map04="";//出口下
$map05="走廊";//出口左
$map06="大厅";//出口右
include("maptop.php");//地图顶端

include("mapxx.php");//地图出入口
 


} elseif ($dty==3) {
$map01="厨房";//地名
$map03="";//出口上
$map04="走廊";//出口下
$map05="柴房";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口


} elseif ($dty==4) {
$map01="柴房";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="厨房";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==5) {
$map01="大厅";//地名
$map03="";//出口上
$map04="门廊";//出口下
$map05="走廊";//出口左
$map06="后花园";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==6) {
$map01="后花园";//地名
$map03="";//出口上
$map04="门廊";//出口下
$map05="大厅";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==7) {
$map01="门廊";//地名
$map03="后花园";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="闺房";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==8) {
$map01="闺房";//地名
$map03="";//出口上
$map04="";//出口下
$map05="门廊";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
  //副本如意传送门
$csid=78;//传送id值
include("./fb/rycs.php");



$fb="bjd";//副本变量
$fbid1=53;//副本变量
$fbid2=54;//副本变量
$fbid3=55;//副本变量
$fbid4=56;//副本变量
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
$npc[]=972;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【铁扇公主】(普通)</font></a>"."<br>";

} else{

}


 if($gw2 ==1&&$wcqk2!=3){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=973;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【铁扇公主】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=974;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【铁扇公主】(梦魇)</font></a>"."<br>";

} else{

}

 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=975;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【铁扇公主】(地狱)</font></a>"."<br>";

} else{

}


include("mapxx.php");//地图出入口

} elseif ($dty==9) {
$map01="门廊";//地名
$map03="大厅";//出口上
$map04="练武房";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==10) {
$map01="练武房";//地名
$map03="门廊";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
  //副本如意传送门
$csid=79;//传送id值
include("./fb/rycs.php");


$fb="bjd";//副本变量
$fbid1=53;//副本变量
$fbid2=54;//副本变量
$fbid3=55;//副本变量
$fbid4=56;//副本变量
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
$npc[]=976;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【牛魔王】(普通)</font></a>"."<br>";

} else{

}


 if($gw2 ==1&&$wcqk2!=3){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=977;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【牛魔王】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=978;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【牛魔王】(梦魇)</font></a>"."<br>";

} else{

}

 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=979;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【牛魔王】(地狱)</font></a>"."<br>";

} else{

}


include("mapxx.php");//地图出入口












} else {
  echo "错误地图,编号：".$dty."<br>";
}







?>