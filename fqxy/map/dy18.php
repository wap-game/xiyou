<?php
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=173;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>&nbsp【离开阴曹地府】</font></a>"."<br>";
if ($dty==0) {


//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

$tttid=103;
include("./rcrw/ttt.php");


if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=801;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【拔舌鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【拔舌鬼】（已阵亡）</font></br>"; 	

} 

$tttid=104;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=802;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【拔舌鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【拔舌鬼】（已阵亡）</font></br>"; 	
} 
  //出口



$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（一层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>阴曹地府（一层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==1) {

//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc


$tttpdid1=103;
$tttpdid2=104;
$tttpdid3=105;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府二层】</font></a>"."<br>";
} else{	
} 




$tttid=105;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=803;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【牛头】</font></a>"."<br>";
} else{	
echo "<font color=red>【牛头】（已阵亡）</font></br>"; 	
} 
  

  //出口
  
echo "<font color=black>请选择出口</font>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（一层）</font></a>"."<br>";




//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>阴曹地府（一层）准备往哪里走呢？</font>"."<br>"; 

} elseif ($dty==2) {

//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
$tttid=106;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=804;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【剪刀鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【剪刀鬼】（已阵亡）</font></br>"; 	
} 

$tttid=107;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
  //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=805;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【剪刀鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【剪刀鬼】（已阵亡）</font></br>"; 	
} 

  //出口
  
echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>阴曹地府（二层）准备往哪里走呢？</font>"."<br>"; 

} elseif ($dty==3) {

//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc


$tttpdid1=106;
$tttpdid2=107;
$tttpdid3=108;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
  
  $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府三层】</font></a>"."<br>";
} else{	
} 
$tttid=108;
include("./rcrw/ttt.php");

if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=806;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【马面】</font></a>"."<br>";
} else{	
echo "<font color=red>【马面】（已阵亡）</font></br>"; 	
} 
  

  //出口
  
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>阴曹地府（二层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==4) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=109;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=807;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【铁树鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【铁树鬼】（已阵亡）</font></br>"; 	
} 
$tttid=110;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=808;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【铁树鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【铁树鬼】（已阵亡）</font></br>"; 	
} 


echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（三层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（三层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==5) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=109;
$tttpdid2=110;
$tttpdid3=111;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府四层】</font></a>"."<br>";
} else{	
} 

$tttid=111;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=809;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【白无常】</font></a>"."<br>";
} else{	
echo "<font color=red>【白无常】（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（三层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（三层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==6) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=112;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=810;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【孽镜鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【孽镜鬼】（已阵亡）</font></br>"; 	
} 

$tttid=113;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=811;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【孽镜鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【孽镜鬼】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（四层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（四层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==7) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=112;
$tttpdid2=113;
$tttpdid3=114;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府五层】</font></a>"."<br>";
} else{	
} 

$tttid=114;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=812;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【黑无常】</font></a>"."<br>";
} else{	
echo "<font color=red>【黑无常】（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（四层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（四层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==8) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


$tttid=115;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=813;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【蒸笼鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【蒸笼鬼】（已阵亡）</font></br>"; 	
} 

$tttid=116;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=814;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【蒸笼鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【蒸笼鬼】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（五层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（五层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==9) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=115;
$tttpdid2=116;
$tttpdid3=117;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府六层】</font></a>"."<br>";
} else{	
} 
$tttid=117;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=815;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【推磨鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【推磨鬼】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（五层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（五层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==10) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=118;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=816;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【铜柱鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【铜柱鬼】（已阵亡）</font></br>"; 	
} 

$tttid=119;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=817;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【铜柱鬼】</font></a>"."<br>";

} else{	
echo "<font color=red>【铜柱鬼】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（六层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（六层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==11) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=118;
$tttpdid2=119;
$tttpdid3=120;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府七层】</font></a>"."<br>";
} else{	
} 
$tttid=120;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=818;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【轮转王】</font></a>"."<br>";
} else{	
echo "<font color=red>【轮转王】（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（六层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（六层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==12) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=121;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=819;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【刀山鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【刀山鬼】（已阵亡）</font></br>"; 	
} 


$tttid=122;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=820;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【刀山鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【刀山鬼】（已阵亡）</font></br>"; 	
} 



echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（七层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（七层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==13) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=121;
$tttpdid2=122;
$tttpdid3=123;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府八层】</font></a>"."<br>";
} else{	
} 

$tttid=123;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=821;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【地藏王】</font></a>"."<br>";
} else{	
echo "<font color=red>【地藏王】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（七层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（七层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==14) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=124;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=822;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【冰山鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【冰山鬼】（已阵亡）</font></br>"; 	
} 


$tttid=125;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=823;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【冰山鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【冰山鬼】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（八层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（八层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==15) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=124;
$tttpdid2=125;
$tttpdid3=126;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府九层】</font></a>"."<br>";
} else{	
} 

$tttid=126;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=824;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【孟婆】</font></a>"."<br>";
} else{	
echo "<font color=red>【孟婆】（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（八层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（八层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==16) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=127;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=825;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【油锅鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【油锅鬼】（已阵亡）</font></br>"; 	
} 
$tttid=128;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=826;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【油锅鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【油锅鬼】（已阵亡）</font></br>"; 	
} 



echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（九层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（九层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==17) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=127;
$tttpdid2=128;
$tttpdid3=129;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府十层】</font></a>"."<br>";
} else{	
} 


$tttid=129;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=827;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【钟馗】</font></a>"."<br>";
} else{	
echo "<font color=red>【钟馗】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（九层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（九层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==18) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=130;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=828;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【牛坑鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【牛坑鬼】（已阵亡）</font></br>"; 	
} 

$tttid=131;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=829;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【牛坑鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【牛坑鬼】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==19) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=130;
$tttpdid2=131;
$tttpdid3=132;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府十一层】</font></a>"."<br>";
} else{	
} 
$tttid=132;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=830;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【掌刑判官】</font></a>"."<br>";
} else{	
echo "<font color=red>【掌刑判官】（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==20) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=133;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=831;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【石压鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【石压鬼】（已阵亡）</font></br>"; 	
} 

$tttid=134;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=832;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【石压鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【石压鬼】（已阵亡）</font></br>"; 	
} 


echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十一层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十一层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==21) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=133;
$tttpdid2=134;
$tttpdid3=135;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府十二层】</font></a>"."<br>";
} else{	
} 



$tttid=135;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=833;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【掌善判官】</font></a>"."<br>";
} else{	
echo "<font color=red>【掌善判官】（已阵亡）</font></br>"; 	
} 





//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十一层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十一层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==22) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";




$tttid=136;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=834;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【舂臼鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【舂臼鬼】（已阵亡）</font></br>"; 	
} 

$tttid=137;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=835;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【舂臼鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【舂臼鬼】（已阵亡）</font></br>"; 	
} 



echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十二层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十二层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==23) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=136;
$tttpdid2=137;
$tttpdid3=138;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府十三层】</font></a>"."<br>";
} else{	
} 
$tttid=138;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=836;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【掌恶判官】</font></a>"."<br>";
} else{	
echo "<font color=red>【掌恶判官】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十二层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十二层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==24) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=139;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=837;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【血池鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【血池鬼】（已阵亡）</font></br>"; 	
} 

$tttid=140;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=838;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【血池鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【血池鬼】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十三层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十三层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==25) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=139;
$tttpdid2=140;
$tttpdid3=141;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府十四层】</font></a>"."<br>";
} else{	
} 
$tttid=141;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=839;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【生死判官】</font></a>"."<br>";
} else{	
echo "<font color=red>【生死判官】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十三层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十三层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==26) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=142;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=840;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【枉死鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【枉死鬼】（已阵亡）</font></br>"; 	
} 

$tttid=143;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=841;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【枉死鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【枉死鬼】（已阵亡）</font></br>"; 	
} 


echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十四层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十四层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==27) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=142;
$tttpdid2=143;
$tttpdid3=144;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府十五层】</font></a>"."<br>";
} else{	
} 

$tttid=144;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=842;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【五官王】</font></a>"."<br>";
} else{	
echo "<font color=red>【五官王】（已阵亡）</font></br>"; 	
} 




//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十四层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十四层）准备往哪里走呢？</font>"."<br>"; 

} elseif ($dty==28) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=145;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=843;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【磔刑鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【磔刑鬼】（已阵亡）</font></br>"; 	
} 

$tttid=146;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=844;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【磔刑鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【磔刑鬼】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十五层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十五层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==29) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=145;
$tttpdid2=146;
$tttpdid3=147;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府十六层】</font></a>"."<br>";
} else{	
} 
$tttid=147;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=845;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【泰山王】</font></a>"."<br>";
} else{	
echo "<font color=red>【泰山王】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十五层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十五层）准备往哪里走呢？</font>"."<br>"; 

} elseif ($dty==30) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=148;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=846;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【火山鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【火山鬼】（已阵亡）</font></br>"; 	
} 

$tttid=149;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=847;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【火山鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【火山鬼】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十六层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十六层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==31) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=148;
$tttpdid2=149;
$tttpdid3=150;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府十七层】</font></a>"."<br>";
} else{	
} 

$tttid=150;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=848;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【轮回王】</font></a>"."<br>";
} else{	
echo "<font color=red>【轮回王】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十六层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十六层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==32) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=151;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=849;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【石磨鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【石磨鬼】（已阵亡）</font></br>"; 	
} 

$tttid=152;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=850;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【石磨鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【石磨鬼】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十七层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十七层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==33) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=151;
$tttpdid2=152;
$tttpdid3=153;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府十八层】</font></a>"."<br>";
} else{	
} 
$tttid=153;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=851;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【赏善司】</font></a>"."<br>";
} else{	
echo "<font color=red>【赏善司】（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十七层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十七层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==34) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=154;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=852;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【刀锯鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【刀锯鬼】（已阵亡）</font></br>"; 	
} 

$tttid=155;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=853;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【刀锯鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【刀锯鬼】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十八层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十八层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==35) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=154;
$tttpdid2=155;
$tttpdid3=156;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府十九层】</font></a>"."<br>";
} else{	
} 
$tttid=156;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=854;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【罚恶司】</font></a>"."<br>";
} else{	
echo "<font color=red>【罚恶司】（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十八层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十八层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==36) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=157;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=855;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【无边鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【无边鬼】（已阵亡）</font></br>"; 	
} 

$tttid=158;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=856;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【无边鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【无边鬼】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十九层）</font></a>"."<br>";




//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十九层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==37) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（十九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=157;
$tttpdid2=158;
$tttpdid3=159;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府二十层】</font></a>"."<br>";
} else{	
} 
$tttid=159;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=857;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【冥府判官】</font></a>"."<br>";
} else{	
echo "<font color=red>【冥府判官】（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（十九层）</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（十九层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==38) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=160;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=858;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【无尽鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【无尽鬼】（已阵亡）</font></br>"; 	
} 

$tttid=161;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=859;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【无尽鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【无尽鬼】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==39) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=160;
$tttpdid2=161;
$tttpdid3=162;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府二十一层】</font></a>"."<br>";
} else{	
} 


$tttid=162;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=860;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【阎罗王】</font></a>"."<br>";
} else{	
echo "<font color=red>【阎罗王】（已阵亡）</font></br>"; 	
} 




//出口
echo "<font color=black>请选择出口</font>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==40) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=193;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=891;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【巨蟒怪】</font></a>"."<br>";
} else{	
echo "<font color=red>【巨蟒怪】（已阵亡）</font></br>"; 	
} 

$tttid=194;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=892;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【巨蟒怪】</font></a>"."<br>";
} else{	
echo "<font color=red>【巨蟒怪】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十一层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十一层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==41) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=193;
$tttpdid2=194;
$tttpdid3=195;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府二十二层】</font></a>"."<br>";
} else{	
} 

$tttid=195;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=893;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【黄眉老佛】</font></a>"."<br>";
} else{	
echo "<font color=red>【黄眉老佛】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十一层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==42) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

	
$tttid=196;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=894;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【蜘蛛精】</font></a>"."<br>";
} else{	
echo "<font color=red>【蜘蛛精】（已阵亡）</font></br>"; 	
} 

$tttid=197;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=895;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【蜘蛛精】</font></a>"."<br>";
} else{	
echo "<font color=red>【蜘蛛精】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十二层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十二层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==43) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=196;
$tttpdid2=197;
$tttpdid3=198;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府二十三层】</font></a>"."<br>";
} else{	
} 

$tttid=198;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=896;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【百眼魔君】</font></a>"."<br>";
} else{	
echo "<font color=red>【百眼魔君】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十二层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==44) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=199;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=897;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【金鱼精】</font></a>"."<br>";
} else{	
echo "<font color=red>【金鱼精】（已阵亡）</font></br>"; 	
} 

$tttid=200;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=898;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【鳜鱼精】</font></a>"."<br>";
} else{	
echo "<font color=red>【鳜鱼精】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十三层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十三层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==45) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=199;
$tttpdid2=200;
$tttpdid3=201;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府二十四层】</font></a>"."<br>";
} else{	
} 

$tttid=201;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=899;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【南山大王】</font></a>"."<br>";
} else{	
echo "<font color=red>【南山大王】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十三层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==46) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=202;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=900;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【狐妖】</font></a>"."<br>";
} else{	
echo "<font color=red>【狐妖】（已阵亡）</font></br>"; 	
} 

$tttid=203;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=901;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【狐妖】</font></a>"."<br>";
} else{	
echo "<font color=red>【狐妖】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十四层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十四层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==47) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=202;
$tttpdid2=203;
$tttpdid3=204;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府二十五层】</font></a>"."<br>";
} else{	
} 

$tttid=204;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=902;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【七情大王】</font></a>"."<br>";
} else{	
echo "<font color=red>【七情大王】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十四层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==48) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

	
$tttid=205;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=903;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【如意牛精】</font></a>"."<br>";
} else{	
echo "<font color=red>【如意牛精】（已阵亡）</font></br>"; 	
} 

$tttid=206;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=904;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【如意牛精】</font></a>"."<br>";
} else{	
echo "<font color=red>【如意牛精】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十五层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十五层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==49) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=205;
$tttpdid2=206;
$tttpdid3=207;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府二十六层】</font></a>"."<br>";
} else{	
} 

$tttid=207;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=905;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【六欲大王】</font></a>"."<br>";
} else{	
echo "<font color=red>【六欲大王】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十五层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==50) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=208;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=906;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【青狮精】</font></a>"."<br>";
} else{	
echo "<font color=red>【青狮精】（已阵亡）</font></br>"; 	
} 

$tttid=209;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=907;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【青狮精】</font></a>"."<br>";
} else{	
echo "<font color=red>【青狮精】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十六层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十六层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==51) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=208;
$tttpdid2=209;
$tttpdid3=210;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府二十七层】</font></a>"."<br>";
} else{	
} 

$tttid=210;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=908;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【南天王殿】</font></a>"."<br>";
} else{	
echo "<font color=red>【南天王殿】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十六层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==52) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=211;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=909;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【白骨精】</font></a>"."<br>";
} else{	
echo "<font color=red>【白骨精】（已阵亡）</font></br>"; 	
} 

$tttid=212;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=910;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【白骨精】</font></a>"."<br>";
} else{	
echo "<font color=red>【白骨精】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十七层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十七层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==53) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=211;
$tttpdid2=212;
$tttpdid3=213;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府二十八层】</font></a>"."<br>";
} else{	
} 

$tttid=213;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=911;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【三尸魔王】</font></a>"."<br>";
} else{	
echo "<font color=red>【三尸魔王】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十七层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==54) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=214;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=912;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【蜈蚣精】</font></a>"."<br>";
} else{	
echo "<font color=red>【蜈蚣精】（已阵亡）</font></br>"; 	
} 

$tttid=215;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=913;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【蜈蚣精】</font></a>"."<br>";
} else{	
echo "<font color=red>【蜈蚣精】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十八层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十八层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==55) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=214;
$tttpdid2=215;
$tttpdid3=216;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府二十九层】</font></a>"."<br>";
} else{	
} 

$tttid=216;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=914;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【玉面娘娘】</font></a>"."<br>";
} else{	
echo "<font color=red>【玉面娘娘】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十八层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==56) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=217;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=915;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【蝎子精】</font></a>"."<br>";
} else{	
echo "<font color=red>【蝎子精】（已阵亡）</font></br>"; 	
} 

$tttid=218;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=916;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【蝎子精】</font></a>"."<br>";
} else{	
echo "<font color=red>【蝎子精】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十九层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十九层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==57) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（二十九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=217;
$tttpdid2=218;
$tttpdid3=219;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府三十层】</font></a>"."<br>";
} else{	
} 

$tttid=219;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=917;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【地涌夫人】</font></a>"."<br>";
} else{	
echo "<font color=red>【地涌夫人】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（二十九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（二十九层）准备往哪里走呢？</font>"."<br>"; 

} elseif ($dty==58) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（三十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=220;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=918;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【镇元大仙】</font></a>"."<br>";
} else{	
echo "<font color=red>【镇元大仙】（已阵亡）</font></br>"; 	
} 

$tttid=221;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=919;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【镇元大仙】</font></a>"."<br>";
} else{	
echo "<font color=red>【镇元大仙】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（三十层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（三十层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==59) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（三十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
echo "<font color=red>【阴曹地府】：生当作人杰,死亦为鬼雄</font>"."<br>";




$tttpdid1=220;
$tttpdid2=221;
$tttpdid3=222;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府魔一层】</font></a>"."<br>";
} else{	
} 


$tttid=222;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=920;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【菩提老祖】</font></a>"."<br>";
} else{	
echo "<font color=red>【菩提老祖】（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（三十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（三十层）准备往哪里走呢？</font>"."<br>"; 

} elseif ($dty==60) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


$tttid=259;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1047;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【拔舌鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【拔舌鬼】（魔）（已阵亡）</font></br>"; 	
} 

$tttid=260;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1048;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【拔舌鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【拔舌鬼】（魔）（已阵亡）</font></br>"; 	
} 


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔一层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔一层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==61) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";




$tttpdid1=259;
$tttpdid2=260;
$tttpdid3=261;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府魔二层】</font></a>"."<br>";
} else{	
} 



$tttid=261;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1049;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【牛头】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【牛头】（魔）（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔一层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==62) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=262;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1050;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【剪刀鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【剪刀鬼】（魔）</font></br>"; 	
} 

$tttid=263;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1051;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【剪刀鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【剪刀鬼】（魔）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔二层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔二层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==63) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";





$tttpdid1=262;
$tttpdid2=263;
$tttpdid3=264;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府魔三层】</font></a>"."<br>";
} else{	
} 



$tttid=264;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1052;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【马面】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【马面】（魔）（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔二层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==64) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


$tttid=265;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1053;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【铁树鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【铁树鬼】（魔）（已阵亡）</font></br>"; 	
} 

$tttid=266;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1054;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【铁树鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【铁树鬼】（魔）（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔三层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔三层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==65) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=265;
$tttpdid2=266;
$tttpdid3=267;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府魔四层】</font></a>"."<br>";
} else{	
} 



$tttid=267;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1055;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【白无常】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【白无常】（魔）（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔三层）准备往哪里走呢？</font>"."<br>"; 





} elseif ($dty==66) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=268;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1056;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【孽镜鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【孽镜鬼】（魔）（已阵亡）</font></br>"; 	
} 

$tttid=269;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1057;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【孽镜鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【孽镜鬼】（魔）（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔四层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔四层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==67) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=268;
$tttpdid2=269;
$tttpdid3=270;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府魔五层】</font></a>"."<br>";
} else{	
} 



$tttid=270;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1058;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【黑无常】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【黑无常】（魔）（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔四层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==68) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=271;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1059;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【蒸笼鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【蒸笼鬼】（魔）（已阵亡）</font></br>"; 	
} 

$tttid=272;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1060;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【蒸笼鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【蒸笼鬼】（魔）（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔五层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔五层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==69) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";




$tttpdid1=271;
$tttpdid2=272;
$tttpdid3=273;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府魔六层】</font></a>"."<br>";
} else{	
} 



$tttid=273;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1061;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【推磨鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【推磨鬼】（魔）（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔五层）准备往哪里走呢？</font>"."<br>"; 





} elseif ($dty==70) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=274;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1062;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【铜柱鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【铜柱鬼】（魔）（已阵亡）</font></br>"; 	
} 

$tttid=275;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1063;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【铜柱鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【铜柱鬼】（魔）（已阵亡）</font></br>"; 	
} 


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔六层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔六层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==71) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=274;
$tttpdid2=275;
$tttpdid3=276;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府魔七层】</font></a>"."<br>";
} else{	
} 



$tttid=276;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1064;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【轮转王】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【轮转王】（魔）（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔六层）准备往哪里走呢？</font>"."<br>"; 







} elseif ($dty==72) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=277;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1065;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【刀山鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【刀山鬼】（魔）（已阵亡）</font></br>"; 	
} 

$tttid=278;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1066;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【刀山鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【刀山鬼】（魔）（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔七层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔七层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==73) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";




$tttpdid1=277;
$tttpdid2=278;
$tttpdid3=279;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府魔八层】</font></a>"."<br>";
} else{	
} 



$tttid=279;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1067;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【地藏王】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【地藏王】（魔）（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔七层）准备往哪里走呢？</font>"."<br>"; 





} elseif ($dty==74) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=280;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1068;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【冰山鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【冰山鬼】（魔）（已阵亡）</font></br>"; 	
} 

$tttid=281;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1069;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【冰山鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【冰山鬼】（魔）（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔八层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔八层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==75) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=280;
$tttpdid2=281;
$tttpdid3=282;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府魔九层】</font></a>"."<br>";
} else{	
} 



$tttid=282;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1070;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【孟婆】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【孟婆】（魔）（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔八层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==76) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=283;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1071;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【油锅鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【油锅鬼】（魔）（已阵亡）</font></br>"; 	
} 

$tttid=284;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1072;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【油锅鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【油锅鬼】（魔）（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔九层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔九层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==77) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=283;
$tttpdid2=284;
$tttpdid3=285;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府魔十层】</font></a>"."<br>";
} else{	
} 



$tttid=285;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1073;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【钟馗】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【钟馗】（魔）（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔九层）准备往哪里走呢？</font>"."<br>"; 





} elseif ($dty==78) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=286;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1074;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【牛坑鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【牛坑鬼】（魔）（已阵亡）</font></br>"; 	
} 

$tttid=287;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1075;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【牛坑鬼】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【牛坑鬼】（魔）（已阵亡）</font></br>"; 	
} 


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔十层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔十层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==79) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴曹地府（魔十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=286;
$tttpdid2=287;
$tttpdid3=288;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【阴曹地府魔尊一层】</font></a>"."<br>";


} else{	
} 



$tttid=288;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1076;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【掌刑判官】（魔）</font></a>"."<br>";
} else{	
echo "<font color=red>【掌刑判官】（魔）（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴曹地府（魔十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>阴曹地府（魔十层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==80) {

$map01="通天塔（魔尊一层）";//地名
$map03="";//出口上
$map04="通天塔（魔尊一层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端

$tttid=335;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1172;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【石压鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【石压鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=336;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1173;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【石压鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【石压鬼】（魔尊）（已阵亡）</font></br>"; 	
} 


include("mapxx.php");//地图出入口


} elseif ($dty==81) {

$map01="通天塔（魔尊一层）";//地名
$map03="通天塔（魔尊一层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端

$tttpdid1=335;
$tttpdid2=336;
$tttpdid3=337;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【通天塔魔尊二层】</font></a>"."<br>";
} else{	
} 



$tttid=337;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1174;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【掌善判官】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【掌善判官】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口



} elseif ($dty==82) {

$map01="通天塔（魔尊二层）";//地名
$map03="";//出口上
$map04="通天塔（魔尊二层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端

$tttid=338;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1175;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【舂臼鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【舂臼鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=339;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1176;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【舂臼鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【舂臼鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口




} elseif ($dty==83) {

$map01="通天塔（魔尊二层）";//地名
$map03="通天塔（魔尊二层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


$tttpdid1=338;
$tttpdid2=339;
$tttpdid3=340;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【通天塔魔尊三层】</font></a>"."<br>";
} else{	
} 


$tttid=340;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1177;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【掌恶判官】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【掌恶判官】（魔尊）（已阵亡）</font></br>"; 	
} 

include("mapxx.php");//地图出入口


} elseif ($dty==84) {

$map01="通天塔（魔尊三层）";//地名
$map03="";//出口上
$map04="通天塔（魔尊三层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=341;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1178;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【血池鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【血池鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=342;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1179;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【血池鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【血池鬼】（魔尊）（已阵亡）</font></br>"; 	
} 

include("mapxx.php");//地图出入口


} elseif ($dty==85) {

$map01="通天塔（魔尊三层）";//地名
$map03="通天塔（魔尊三层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端

$tttpdid1=341;
$tttpdid2=342;
$tttpdid3=343;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【通天塔魔尊四层】</font></a>"."<br>";
} else{	
} 


$tttid=343;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1180;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【生死判官】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【生死判官】（魔尊）（已阵亡）</font></br>"; 	
} 

include("mapxx.php");//地图出入口

} elseif ($dty==86) {

$map01="通天塔（魔尊四层）";//地名
$map03="";//出口上
$map04="通天塔（魔尊四层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=344;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1181;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【枉死鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【枉死鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=345;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1182;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【枉死鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【枉死鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口


} elseif ($dty==87) {

$map01="通天塔（魔尊四层）";//地名
$map03="通天塔（魔尊四层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


$tttpdid1=344;
$tttpdid2=345;
$tttpdid3=346;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【通天塔魔尊五层】</font></a>"."<br>";
} else{	
} 
$tttid=346;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1183;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【五官王】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【五官王】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口



} elseif ($dty==88) {

$map01="通天塔（魔尊五层）";//地名
$map03="";//出口上
$map04="通天塔（魔尊五层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=347;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1184;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【磔刑鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【磔刑鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=348;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1185;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【磔刑鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【磔刑鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口


} elseif ($dty==89) {

$map01="通天塔（魔尊五层）";//地名
$map03="通天塔（魔尊五层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端

$tttpdid1=347;
$tttpdid2=348;
$tttpdid3=349;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【通天塔魔尊六层】</font></a>"."<br>";
} else{	
} 

$tttid=349;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1186;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【泰山王】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【泰山王】（魔尊）（已阵亡）</font></br>"; 	
} 

include("mapxx.php");//地图出入口




} elseif ($dty==90) {

$map01="通天塔（魔尊六层）";//地名
$map03="";//出口上
$map04="通天塔（魔尊六层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=350;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1187;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【火山鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【火山鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=351;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1188;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【火山鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【火山鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口


} elseif ($dty==91) {

$map01="通天塔（魔尊六层）";//地名
$map03="通天塔（魔尊六层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


$tttpdid1=350;
$tttpdid2=351;
$tttpdid3=352;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【通天塔魔尊七层】</font></a>"."<br>";
} else{	
} 


$tttid=352;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1189;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【轮回王】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【轮回王】（魔尊）（已阵亡）</font></br>"; 	
} 

include("mapxx.php");//地图出入口

} elseif ($dty==92) {

$map01="通天塔（魔尊七层）";//地名
$map03="";//出口上
$map04="通天塔（魔尊七层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=353;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1190;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【石磨鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【石磨鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=354;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1191;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【石磨鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【石磨鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口


} elseif ($dty==93) {

$map01="通天塔（魔尊七层）";//地名
$map03="通天塔（魔尊七层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


$tttpdid1=353;
$tttpdid2=354;
$tttpdid3=355;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【通天塔魔尊八层】</font></a>"."<br>";
} else{	
} 

$tttid=355;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1192;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【赏善司】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【赏善司】（魔尊）（已阵亡）</font></br>"; 	
} 

include("mapxx.php");//地图出入口


} elseif ($dty==94) {

$map01="通天塔（魔尊八层）";//地名
$map03="";//出口上
$map04="通天塔（魔尊八层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=356;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1193;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【刀锯鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【刀锯鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=357;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1194;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【刀锯鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【刀锯鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口


} elseif ($dty==95) {

$map01="通天塔（魔尊八层）";//地名
$map03="通天塔（魔尊八层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


$tttpdid1=356;
$tttpdid2=357;
$tttpdid3=358;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【通天塔魔尊九层】</font></a>"."<br>";
} else{	
} 


$tttid=358;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1195;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【罚恶司】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【罚恶司】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口



} elseif ($dty==96) {

$map01="通天塔（魔尊九层）";//地名
$map03="";//出口上
$map04="通天塔（魔尊九层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=359;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1196;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【无边鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【无边鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=360;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1197;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【无边鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【无边鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口


} elseif ($dty==97) {

$map01="通天塔（魔尊九层）";//地名
$map03="通天塔（魔尊九层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


$tttpdid1=359;
$tttpdid2=360;
$tttpdid3=361;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【通天塔魔尊十层】</font></a>"."<br>";
} else{	
} 


$tttid=361;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1198;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【冥府判官】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【冥府判官】（魔尊）（已阵亡）</font></br>"; 	
} 

include("mapxx.php");//地图出入口


} elseif ($dty==98) {

$map01="通天塔（魔尊十层）";//地名
$map03="";//出口上
$map04="通天塔（魔尊十层）";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
$tttid=362;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1199;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【无尽鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【无尽鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
$tttid=363;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1200;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【无尽鬼】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【无尽鬼】（魔尊）（已阵亡）</font></br>"; 	
} 
include("mapxx.php");//地图出入口


} elseif ($dty==99) {

$map01="通天塔（魔尊十层）";//地名
$map03="通天塔（魔尊十层）";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端


$tttpdid1=362;
$tttpdid2=363;
$tttpdid3=364;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
	echo "<font color=red>进入【通天塔混沌魔尊一层】（封印中）</font></a>"."<br>";
	
	/*
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=34;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【通天塔混沌魔尊一层】（封印中）</font></a>"."<br>";
*/
} else{	
} 


$tttid=364;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1201;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【阎罗王】（魔尊）</font></a>"."<br>";
} else{	
echo "<font color=red>【阎罗王】（魔尊）（已阵亡）</font></br>"; 	
} 



include("mapxx.php");//地图出入口













} else {
  echo "错误地图,编号：".$dty."<br>";
}








?>