<?php

if ($dty==0) {
$map01="通天水府";//地名
$map03="";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="通道";//出口右
include("maptop.php");//地图顶端
  //副本如意传送门
$csid=72;//传送id值
include("./fb/rycs.php");

    //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=316;
$npc[]=0;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【西游各大副本重置台】（需要副本重置令）</font></a>"."<br>";

include("./fb/ttsf.php");











include("mapxx.php");//地图出入口

} elseif ($dty==1) {
$map01="通道";//地名
$map03="练功房";//出口上
$map04="";//出口下
$map05="通天水府";//出口左
$map06="通道";//出口右
include("maptop.php");//地图顶端
//【黑鳞鲛人】
  //副本如意传送门
$csid=73;//传送id值
include("./fb/rycs.php");

$fb="ttsf";//副本变量
$fbid1=49;//副本变量
$fbid2=50;//副本变量
$fbid3=51;//副本变量
$fbid4=52;//副本变量
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
$npc[]=956;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【黑鳞鲛人】(普通)</font></a>"."<br>";

} else{

}


 if($gw2 ==1&&$wcqk2!=3){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=957;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【黑鳞鲛人】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=958;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【黑鳞鲛人】(梦魇)</font></a>"."<br>";

} else{

}

 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=959;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【黑鳞鲛人】(地狱)</font></a>"."<br>";

} else{

}









include("mapxx.php");//地图出入口

} elseif ($dty==2) {
$map01="练功房";//地名
$map03="";//出口上
$map04="通道";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口


} elseif ($dty==3) {
$map01="通道";//地名
$map03="";//出口上
$map04="";//出口下
$map05="通道";//出口左
$map06="过道";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==4) {
$map01="过道";//地名
$map03="";//出口上
$map04="";//出口下
$map05="通道";//出口左
$map06="水府大殿";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口


} elseif ($dty==5) {
$map01="水府大殿";//地名
$map03="";//出口上
$map04="密道";//出口下
$map05="过道";//出口左
$map06="过道";//出口右
include("maptop.php");//地图顶端
//【倚海龙王】
  //副本如意传送门
$csid=74;//传送id值
include("./fb/rycs.php");



$fb="ttsf";//副本变量
$fbid1=49;//副本变量
$fbid2=50;//副本变量
$fbid3=51;//副本变量
$fbid4=52;//副本变量
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
$npc[]=960;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【倚海龙王】(普通)</font></a>"."<br>";

} else{

}


 if($gw2 ==1&&$wcqk2!=3){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=961;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【倚海龙王】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=962;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【倚海龙王】(梦魇)</font></a>"."<br>";

} else{

}

 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=963;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【倚海龙王】(地狱)</font></a>"."<br>";

} else{

}




include("mapxx.php");//地图出入口

} elseif ($dty==6) {
$map01="密道";//地名
$map03="水府大殿";//出口上
$map04="密道";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==7) {
$map01="密道";//地名
$map03="密道";//出口上
$map04="密室";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口


} elseif ($dty==8) {
$map01="密室";//地名
$map03="密道";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
//【银鳞大王】
  //副本如意传送门
$csid=75;//传送id值
include("./fb/rycs.php");


$fb="ttsf";//副本变量
$fbid1=49;//副本变量
$fbid2=50;//副本变量
$fbid3=51;//副本变量
$fbid4=52;//副本变量
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
$npc[]=964;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【银鳞大王】(普通)</font></a>"."<br>";

} else{

}


 if($gw2 ==1&&$wcqk2!=3){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=965;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【银鳞大王】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=966;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【银鳞大王】(梦魇)</font></a>"."<br>";

} else{

}

 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=967;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【银鳞大王】(地狱)</font></a>"."<br>";

} else{

}

include("mapxx.php");//地图出入口

} elseif ($dty==9) {
$map01="过道";//地名
$map03="";//出口上
$map04="";//出口下
$map05="水府大殿";//出口左
$map06="后花园";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==10) {
$map01="后花园";//地名
$map03="";//出口上
$map04="";//出口下
$map05="过道";//出口左
$map06="后院";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==11) {
$map01="后院";//地名
$map03="";//出口上
$map04="";//出口下
$map05="后花园";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
//【金鳞大王】
  //副本如意传送门
$csid=76;//传送id值
include("./fb/rycs.php");




$fb="ttsf";//副本变量
$fbid1=49;//副本变量
$fbid2=50;//副本变量
$fbid3=51;//副本变量
$fbid4=52;//副本变量
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
$npc[]=968;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【金鳞大王】(普通)</font></a>"."<br>";

} else{

}


 if($gw2 ==1&&$wcqk2!=3){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=969;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【金鳞大王】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=970;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【金鳞大王】(梦魇)</font></a>"."<br>";

} else{

}

 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=971;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【金鳞大王】(地狱)</font></a>"."<br>";

} else{

}


include("mapxx.php");//地图出入口




} else {
  echo "错误地图,编号：".$dty."<br>";
}







?>