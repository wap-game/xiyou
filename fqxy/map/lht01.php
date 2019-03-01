<?php
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=173;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>&nbsp【离开十八罗汉】</font></a>"."<br>";
if ($dty==0) {


//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

$tttid=32;
include("./rcrw/ttt.php");


if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=738;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【烈焰土熊】</font></a>"."<br>";
} else{	
echo "<font color=red>【烈焰土熊】（已阵亡）</font></br>"; 	

} 

$tttid=33;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=739;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【烈焰土熊】</font></a>"."<br>";
} else{	
echo "<font color=red>【烈焰土熊】（已阵亡）</font></br>"; 	
} 
  //出口

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（一层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>十八罗汉（一层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==1) {

//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc


$tttpdid1=32;
$tttpdid2=33;
$tttpdid3=34;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉二层】</font></a>"."<br>";
} else{	
} 




$tttid=34;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=740;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【大地之熊】</font></a>"."<br>";
} else{	
echo "<font color=red>【大地之熊】（已阵亡）</font></br>"; 	
} 
  

  //出口
  
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（一层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>十八罗汉（一层）准备往哪里走呢？</font>"."<br>"; 

} elseif ($dty==2) {

//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
$tttid=35;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=741;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【玄冰毒蚁】</font></a>"."<br>";
} else{	
echo "<font color=red>【玄冰毒蚁】（已阵亡）</font></br>"; 	
} 

$tttid=36;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
  //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=742;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【玄冰毒蚁】</font></a>"."<br>";
} else{	
echo "<font color=red>【玄冰毒蚁】（已阵亡）</font></br>"; 	
} 

  //出口
  
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>十八罗汉（二层）准备往哪里走呢？</font>"."<br>"; 

} elseif ($dty==3) {

//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc


$tttpdid1=35;
$tttpdid2=36;
$tttpdid3=37;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
  
  $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉三层】</font></a>"."<br>";
} else{	
} 
$tttid=37;
include("./rcrw/ttt.php");

if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=743;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【噬魂蚁王】</font></a>"."<br>";
} else{	
echo "<font color=red>【噬魂蚁王】（已阵亡）</font></br>"; 	
} 
  

  //出口
  
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>十八罗汉（二层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==4) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=38;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=744;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【金丝蚕】</font></a>"."<br>";
} else{	
echo "<font color=red>【金丝蚕】（已阵亡）</font></br>"; 	
} 
$tttid=39;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=745;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【金丝蚕】</font></a>"."<br>";
} else{	
echo "<font color=red>【金丝蚕】（已阵亡）</font></br>"; 	
} 


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（三层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==5) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=38;
$tttpdid2=39;
$tttpdid3=40;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉四层】</font></a>"."<br>";
} else{	
} 

$tttid=40;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=746;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【冰火蚕皇】</font></a>"."<br>";
} else{	
echo "<font color=red>【冰火蚕皇】（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（三层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==6) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=41;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=747;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【风影豹】</font></a>"."<br>";
} else{	
echo "<font color=red>【风影豹】（已阵亡）</font></br>"; 	
} 

$tttid=42;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=748;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【风影豹】</font></a>"."<br>";
} else{	
echo "<font color=red>【风影豹】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（四层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==7) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=41;
$tttpdid2=42;
$tttpdid3=43;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉五层】</font></a>"."<br>";
} else{	
} 

$tttid=43;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=749;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【迅影斑斓豹】</font></a>"."<br>";
} else{	
echo "<font color=red>【迅影斑斓豹】（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（四层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==8) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


$tttid=44;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=750;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【魔音蝙蝠】</font></a>"."<br>";
} else{	
echo "<font color=red>【魔音蝙蝠】（已阵亡）</font></br>"; 	
} 

$tttid=45;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=751;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【魔音蝙蝠】</font></a>"."<br>";
} else{	
echo "<font color=red>【魔音蝙蝠】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（五层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==9) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=44;
$tttpdid2=45;
$tttpdid3=46;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉六层】</font></a>"."<br>";
} else{	
} 
$tttid=46;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=752;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【七翼暗金蝙王】</font></a>"."<br>";
} else{	
echo "<font color=red>【七翼暗金蝙王】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（五层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==10) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=47;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=753;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【紫尾貂】</font></a>"."<br>";
} else{	
echo "<font color=red>【紫尾貂】（已阵亡）</font></br>"; 	
} 

$tttid=48;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=754;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【紫尾貂】</font></a>"."<br>";

} else{	
echo "<font color=red>【紫尾貂】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（六层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==11) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=47;
$tttpdid2=48;
$tttpdid3=49;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉七层】</font></a>"."<br>";
} else{	
} 
$tttid=49;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=755;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【双翅紫尾貂】</font></a>"."<br>";
} else{	
echo "<font color=red>【双翅紫尾貂】（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（六层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==12) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=50;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=756;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【堕落魔蛹】</font></a>"."<br>";
} else{	
echo "<font color=red>【堕落魔蛹】（已阵亡）</font></br>"; 	
} 


$tttid=51;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=757;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【堕落魔蛹】</font></a>"."<br>";
} else{	
echo "<font color=red>【堕落魔蛹】（已阵亡）</font></br>"; 	
} 



echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（七层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==13) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=50;
$tttpdid2=51;
$tttpdid3=52;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉八层】</font></a>"."<br>";
} else{	
} 

$tttid=52;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=758;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【深渊邪蛹王】</font></a>"."<br>";
} else{	
echo "<font color=red>【深渊邪蛹王】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（七层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==14) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=53;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=759;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【幽冥火狐】</font></a>"."<br>";
} else{	
echo "<font color=red>【幽冥火狐】（已阵亡）</font></br>"; 	
} 


$tttid=54;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=760;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【幽冥火狐】</font></a>"."<br>";
} else{	
echo "<font color=red>【幽冥火狐】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（八层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==15) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=53;
$tttpdid2=54;
$tttpdid3=55;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉九层】</font></a>"."<br>";
} else{	
} 

$tttid=55;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=761;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【九尾天狐】</font></a>"."<br>";
} else{	
echo "<font color=red>【九尾天狐】（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（八层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==16) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=56;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=762;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【暗夜火鹰】</font></a>"."<br>";
} else{	
echo "<font color=red>【暗夜火鹰】（已阵亡）</font></br>"; 	
} 
$tttid=57;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=763;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【暗夜火鹰】</font></a>"."<br>";
} else{	
echo "<font color=red>【暗夜火鹰】（已阵亡）</font></br>"; 	
} 



echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（九层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（九层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==17) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=56;
$tttpdid2=57;
$tttpdid3=58;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉十层】</font></a>"."<br>";
} else{	
} 


$tttid=58;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=764;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【八翼雷鹰王】</font></a>"."<br>";
} else{	
echo "<font color=red>【八翼雷鹰王】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（九层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==18) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=59;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=765;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【暗黑冰龙】</font></a>"."<br>";
} else{	
echo "<font color=red>【暗黑冰龙】（已阵亡）</font></br>"; 	
} 

$tttid=60;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=766;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【暗黑冰龙】</font></a>"."<br>";
} else{	
echo "<font color=red>【暗黑冰龙】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十层）准备往哪里走呢？</font>"."<br>"; 
} elseif ($dty==19) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=59;
$tttpdid2=60;
$tttpdid3=61;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉十一层】</font></a>"."<br>";
} else{	
} 
$tttid=61;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=767;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【九幽飞天龙王】</font></a>"."<br>";
} else{	
echo "<font color=red>【九幽飞天龙王】（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==20) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=66;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=768;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【巨人】</font></a>"."<br>";
} else{	
echo "<font color=red>【巨人】（已阵亡）</font></br>"; 	
} 

$tttid=67;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=769;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【巨人】</font></a>"."<br>";
} else{	
echo "<font color=red>【巨人】（已阵亡）</font></br>"; 	
} 


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十一层）</font></a>"."<br>";




//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十一层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==21) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=66;
$tttpdid2=67;
$tttpdid3=68;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉十二层】</font></a>"."<br>";
} else{	
} 



$tttid=68;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=770;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【泰坦巨人】</font></a>"."<br>";
} else{	
echo "<font color=red>【泰坦巨人】（已阵亡）</font></br>"; 	
} 





//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十一层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==22) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";




$tttid=69;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=771;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【火精灵】</font></a>"."<br>";
} else{	
echo "<font color=red>【火精灵】（已阵亡）</font></br>"; 	
} 

$tttid=70;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=772;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【火精灵】</font></a>"."<br>";
} else{	
echo "<font color=red>【火精灵】（已阵亡）</font></br>"; 	
} 



echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十二层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十二层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==23) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=69;
$tttpdid2=70;
$tttpdid3=71;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉十三层】</font></a>"."<br>";
} else{	
} 
$tttid=71;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=773;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【烈火精灵】</font></a>"."<br>";
} else{	
echo "<font color=red>【烈火精灵】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十二层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==24) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=72;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=774;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【吸血鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【吸血鬼】（已阵亡）</font></br>"; 	
} 

$tttid=73;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=775;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【吸血鬼】</font></a>"."<br>";
} else{	
echo "<font color=red>【吸血鬼】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十三层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十三层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==25) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=72;
$tttpdid2=73;
$tttpdid3=74;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉十四层】</font></a>"."<br>";
} else{	
} 
$tttid=74;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=776;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【吸血鬼王】</font></a>"."<br>";
} else{	
echo "<font color=red>【吸血鬼王】（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十三层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==26) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=75;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=777;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【美杜莎】</font></a>"."<br>";
} else{	
echo "<font color=red>【美杜莎】（已阵亡）</font></br>"; 	
} 

$tttid=76;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=778;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【美杜莎】</font></a>"."<br>";
} else{	
echo "<font color=red>【美杜莎】（已阵亡）</font></br>"; 	
} 


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十四层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十四层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==27) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=75;
$tttpdid2=76;
$tttpdid3=77;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉十五层】</font></a>"."<br>";
} else{	
} 

$tttid=77;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=779;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【美杜莎女王】</font></a>"."<br>";
} else{	
echo "<font color=red>【美杜莎女王】（已阵亡）</font></br>"; 	
} 




//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十四层）准备往哪里走呢？</font>"."<br>"; 

} elseif ($dty==28) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=78;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=780;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【圣婴】</font></a>"."<br>";
} else{	
echo "<font color=red>【圣婴】（已阵亡）</font></br>"; 	
} 

$tttid=79;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=781;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【圣婴】</font></a>"."<br>";
} else{	
echo "<font color=red>【圣婴】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十五层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十五层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==29) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=78;
$tttpdid2=79;
$tttpdid3=70;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉十六层】</font></a>"."<br>";
} else{	
} 
$tttid=80;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=782;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【圣婴大王】</font></a>"."<br>";
} else{	
echo "<font color=red>【圣婴大王】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十五层）准备往哪里走呢？</font>"."<br>"; 

} elseif ($dty==30) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=81;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=783;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【琵琶精】</font></a>"."<br>";
} else{	
echo "<font color=red>【琵琶精】（已阵亡）</font></br>"; 	
} 

$tttid=82;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=784;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【琵琶精】</font></a>"."<br>";
} else{	
echo "<font color=red>【琵琶精】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十六层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十六层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==31) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=81;
$tttpdid2=82;
$tttpdid3=83;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉十七层】</font></a>"."<br>";
} else{	
} 

$tttid=83;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=785;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【六耳猕猴】</font></a>"."<br>";
} else{	
echo "<font color=red>【六耳猕猴】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十六层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==32) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=84;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=786;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【狮猁怪】</font></a>"."<br>";
} else{	
echo "<font color=red>【狮猁怪】（已阵亡）</font></br>"; 	
} 

$tttid=85;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=787;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【狮猁怪】</font></a>"."<br>";
} else{	
echo "<font color=red>【狮猁怪】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十七层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十七层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==33) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=84;
$tttpdid2=85;
$tttpdid3=86;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉十八层】</font></a>"."<br>";
} else{	
} 
$tttid=86;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=788;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【铁扇公主】</font></a>"."<br>";
} else{	
echo "<font color=red>【铁扇公主】（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十七层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==34) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=87;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=789;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【玉面狐狸】</font></a>"."<br>";
} else{	
echo "<font color=red>【玉面狐狸】（已阵亡）</font></br>"; 	
} 

$tttid=88;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=790;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【玉面狐狸】</font></a>"."<br>";
} else{	
echo "<font color=red>【玉面狐狸】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十八层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十八层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==35) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=87;
$tttpdid2=88;
$tttpdid3=89;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉十九层】</font></a>"."<br>";
} else{	
} 
$tttid=89;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=791;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【牛魔王】</font></a>"."<br>";
} else{	
echo "<font color=red>【牛魔王】（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十八层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==36) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttid=90;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=792;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【白面狐狸】</font></a>"."<br>";
} else{	
echo "<font color=red>【白面狐狸】（已阵亡）</font></br>"; 	
} 

$tttid=91;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=793;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【白面狐狸】</font></a>"."<br>";
} else{	
echo "<font color=red>【白面狐狸】（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十九层）</font></a>"."<br>";




//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十九层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==37) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（十九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttpdid1=90;
$tttpdid2=91;
$tttpdid3=92;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉二十层】</font></a>"."<br>";
} else{	
} 
$tttid=92;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=794;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【九灵元圣】</font></a>"."<br>";
} else{	
echo "<font color=red>【九灵元圣】（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（十九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（十九层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==38) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=93;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=795;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【大鹏金翅雕】</font></a>"."<br>";
} else{	
echo "<font color=red>【大鹏金翅雕】（已阵亡）</font></br>"; 	
} 

$tttid=94;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=796;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【大鹏金翅雕】</font></a>"."<br>";
} else{	
echo "<font color=red>【大鹏金翅雕】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==39) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=93;
$tttpdid2=94;
$tttpdid3=95;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉二十一层】</font></a>"."<br>";

} else{	
} 



$tttid=95;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=797;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【齐天大圣】</font></a>"."<br>";
} else{	
echo "<font color=red>【齐天大圣】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==40) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=163;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=861;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【玉兔】</font></a>"."<br>";
} else{	
echo "<font color=red>【玉兔】（已阵亡）</font></br>"; 	
} 

$tttid=164;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=862;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【玉蟾】</font></a>"."<br>";
} else{	
echo "<font color=red>【玉蟾】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十一层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十一层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==41) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=163;
$tttpdid2=164;
$tttpdid3=165;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉二十二层】</font></a>"."<br>";
} else{	
} 

$tttid=165;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=863;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【嫦娥】</font></a>"."<br>";
} else{	
echo "<font color=red>【嫦娥】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十一层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==42) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

	
$tttid=166;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=864;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【七仙女】</font></a>"."<br>";
} else{	
echo "<font color=red>【七仙女】（已阵亡）</font></br>"; 	
} 

$tttid=167;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=865;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【哪吒】</font></a>"."<br>";
} else{	
echo "<font color=red>【哪吒】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十二层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十二层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==43) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=166;
$tttpdid2=167;
$tttpdid3=168;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉二十三层】</font></a>"."<br>";
} else{	
} 

$tttid=168;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=866;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【天蓬元帅】</font></a>"."<br>";
} else{	
echo "<font color=red>【天蓬元帅】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十二层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==44) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=169;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=867;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【风伯】</font></a>"."<br>";
} else{	
echo "<font color=red>【风伯】（已阵亡）</font></br>"; 	
} 

$tttid=170;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=868;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【雨师】</font></a>"."<br>";
} else{	
echo "<font color=red>【雨师】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十三层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十三层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==45) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=169;
$tttpdid2=170;
$tttpdid3=171;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉二十四层】</font></a>"."<br>";
} else{	
} 

$tttid=171;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=869;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【道行天尊】</font></a>"."<br>";
} else{	
echo "<font color=red>【道行天尊】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十三层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==46) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

	
$tttid=172;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=870;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【雷公】</font></a>"."<br>";
} else{	
echo "<font color=red>【雷公】（已阵亡）</font></br>"; 	
} 

$tttid=173;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=871;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【电母】</font></a>"."<br>";
} else{	
echo "<font color=red>【电母】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十四层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十四层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==47) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=172;
$tttpdid2=173;
$tttpdid3=174;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉二十五层】</font></a>"."<br>";
} else{	
} 

$tttid=174;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=872;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【清虚道德真君】</font></a>"."<br>";
} else{	
echo "<font color=red>【清虚道德真君】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十四层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==48) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

	
$tttid=175;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=873;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【鹤童】</font></a>"."<br>";
} else{	
echo "<font color=red>【鹤童】（已阵亡）</font></br>"; 	
} 

$tttid=176;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=874;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【鹿童】</font></a>"."<br>";
} else{	
echo "<font color=red>【鹿童】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十五层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十五层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==49) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=175;
$tttpdid2=176;
$tttpdid3=177;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉二十六层】</font></a>"."<br>";
} else{	
} 


$tttid=177;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=875;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【南极仙翁】</font></a>"."<br>";
} else{	
echo "<font color=red>【南极仙翁】（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十五层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==50) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=178;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=876;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【金吒】</font></a>"."<br>";
} else{	
echo "<font color=red>【金吒】（已阵亡）</font></br>"; 	
} 

$tttid=179;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=877;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【木吒】</font></a>"."<br>";
} else{	
echo "<font color=red>【木吒】（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十六层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十六层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==51) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=178;
$tttpdid2=179;
$tttpdid3=180;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉二十七层】</font></a>"."<br>";
} else{	
} 

$tttid=180;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=878;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【托塔天王李靖】</font></a>"."<br>";
} else{	
echo "<font color=red>【托塔天王李靖】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十六层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==52) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=181;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=879;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【千里眼】</font></a>"."<br>";
} else{	
echo "<font color=red>【千里眼】（已阵亡）</font></br>"; 	
} 

$tttid=182;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=880;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【顺风耳】</font></a>"."<br>";
} else{	
echo "<font color=red>【顺风耳】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十七层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十七层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==53) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=181;
$tttpdid2=182;
$tttpdid3=183;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉二十八层】</font></a>"."<br>";
} else{	
} 

$tttid=183;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=881;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【太白金星】</font></a>"."<br>";
} else{	
echo "<font color=red>【太白金星】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十七层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==54) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=184;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=882;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【金童】</font></a>"."<br>";
} else{	
echo "<font color=red>【金童】（已阵亡）</font></br>"; 	
} 

$tttid=185;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=883;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【玉女】</font></a>"."<br>";
} else{	
echo "<font color=red>【玉女】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十八层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十八层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==55) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=184;
$tttpdid2=185;
$tttpdid3=186;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉二十九层】</font></a>"."<br>";
} else{	
} 

$tttid=186;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=884;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【太上老君】</font></a>"."<br>";
} else{	
echo "<font color=red>【太上老君】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十八层）准备往哪里走呢？</font>"."<br>"; 


} elseif ($dty==56) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=187;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=885;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【三圣母】</font></a>"."<br>";
} else{	
echo "<font color=red>【三圣母】（已阵亡）</font></br>"; 	
} 

$tttid=188;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=886;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【麻姑】</font></a>"."<br>";
} else{	
echo "<font color=red>【麻姑】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十九层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十九层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==57) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（二十九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$tttpdid1=187;
$tttpdid2=188;
$tttpdid3=189;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉三十层】</font></a>"."<br>";
} else{	
} 

$tttid=189;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=887;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【王母娘娘】</font></a>"."<br>";
} else{	
echo "<font color=red>【王母娘娘】（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（二十九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（二十九层）准备往哪里走呢？</font>"."<br>"; 

} elseif ($dty==58) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（三十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=190;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=888;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【二郎神】</font></a>"."<br>";
} else{	
echo "<font color=red>【二郎神】（已阵亡）</font></br>"; 	
} 

$tttid=191;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=889;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【哮天犬】</font></a>"."<br>";
} else{	
echo "<font color=red>【哮天犬】（已阵亡）</font></br>"; 	
} 
	
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（三十层）</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（三十层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==59) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（三十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
echo "<font color=red>【十八罗汉】：我欲问鼎天下,试问谁与争锋</font>"."<br>";

$tttpdid1=190;
$tttpdid2=191;
$tttpdid3=192;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉仙一层】</font></a>"."<br>";
} else{	
} 









$tttid=192;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=890;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【玉皇大帝】</font></a>"."<br>";
} else{	
echo "<font color=red>【玉皇大帝】（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（三十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（三十层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==60) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=229;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1017;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【烈焰土熊】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【烈焰土熊】（仙）（已阵亡）</font></br>"; 	
} 

$tttid=230;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1018;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【烈焰土熊】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【烈焰土熊】（仙）（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙一层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙一层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==61) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙一层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";




$tttpdid1=229;
$tttpdid2=230;
$tttpdid3=231;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉仙二层】</font></a>"."<br>";
} else{	
} 



$tttid=231;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1019;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【大地之熊】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【大地之熊】（仙）（已阵亡）</font></br>"; 	
} 



//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙一层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙一层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==62) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


$tttid=232;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1020;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【玄冰毒蚁】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【玄冰毒蚁】（仙）（已阵亡）</font></br>"; 	
} 

$tttid=233;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1021;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【玄冰毒蚁】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【玄冰毒蚁】（仙）（已阵亡）</font></br>"; 	
} 



echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙二层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙二层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==63) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙二层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


$tttpdid1=232;
$tttpdid2=233;
$tttpdid3=234;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉仙三层】</font></a>"."<br>";
} else{	
} 



$tttid=234;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1022;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【噬魂蚁王】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【噬魂蚁王】（仙）（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙二层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙二层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==64) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=235;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1023;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【金丝蚕】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【金丝蚕】（仙）（已阵亡）</font></br>"; 	
} 

$tttid=236;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1024;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【金丝蚕】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【金丝蚕】（仙）（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙三层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙三层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==65) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙三层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=235;
$tttpdid2=236;
$tttpdid3=237;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉仙四层】</font></a>"."<br>";
} else{	
} 



$tttid=237;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1025;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【冰火蚕皇】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【冰火蚕皇】（仙）（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙三层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙三层）准备往哪里走呢？</font>"."<br>"; 





} elseif ($dty==66) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=238;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1026;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【风影豹】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【风影豹】（仙）（已阵亡）</font></br>"; 	
} 

$tttid=239;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1027;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【风影豹】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【风影豹】（仙）（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙四层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙四层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==67) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙四层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


$tttpdid1=238;
$tttpdid2=239;
$tttpdid3=240;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉仙五层】</font></a>"."<br>";
} else{	
} 



$tttid=240;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1028;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【迅影斑斓豹】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【迅影斑斓豹】（仙）（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙四层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙四层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==68) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


$tttid=241;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1029;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【魔音蝙蝠】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【魔音蝙蝠】（仙）（已阵亡）</font></br>"; 	
} 

$tttid=242;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1030;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【魔音蝙蝠】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【魔音蝙蝠】（仙）（已阵亡）</font></br>"; 	
} 
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙五层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙五层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==69) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙五层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=241;
$tttpdid2=242;
$tttpdid3=243;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉仙六层】</font></a>"."<br>";
} else{	
} 



$tttid=243;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1031;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【七翼暗金蝙王】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【七翼暗金蝙王】（仙）（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙五层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙五层）准备往哪里走呢？</font>"."<br>"; 





} elseif ($dty==70) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=244;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1032;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【紫尾貂】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【紫尾貂】（仙）（已阵亡）</font></br>"; 	
} 

$tttid=245;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1033;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【紫尾貂】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【紫尾貂】（仙）（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙六层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙六层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==71) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙六层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=244;
$tttpdid2=245;
$tttpdid3=246;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉仙七层】</font></a>"."<br>";
} else{	
} 



$tttid=246;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1034;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【双翅紫尾貂】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【双翅紫尾貂】（仙）（已阵亡）</font></br>"; 	
} 
//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙六层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙六层）准备往哪里走呢？</font>"."<br>"; 







} elseif ($dty==72) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=247;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1035;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【堕落魔蛹】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【堕落魔蛹】（仙）（已阵亡）</font></br>"; 	
} 

$tttid=248;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1036;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【堕落魔蛹】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【堕落魔蛹】（仙）（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙七层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙七层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==73) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙七层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=247;
$tttpdid2=248;
$tttpdid3=249;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉仙八层】</font></a>"."<br>";
} else{	
} 



$tttid=249;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1037;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【深渊邪蛹王】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【深渊邪蛹王】（仙）（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙七层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙七层）准备往哪里走呢？</font>"."<br>"; 





} elseif ($dty==74) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=250;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1038;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【幽冥火狐】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【幽冥火狐】（仙）（已阵亡）</font></br>"; 	
} 

$tttid=251;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1039;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【幽冥火狐】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【幽冥火狐】（仙）（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙八层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙八层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==75) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙八层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=250;
$tttpdid2=251;
$tttpdid3=252;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉仙九层】</font></a>"."<br>";
} else{	
} 



$tttid=252;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1040;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【九尾天狐】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【九尾天狐】（仙）（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙八层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙八层）准备往哪里走呢？</font>"."<br>"; 



} elseif ($dty==76) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=253;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1041;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【暗夜火鹰】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【暗夜火鹰】（仙）（已阵亡）</font></br>"; 	
} 

$tttid=254;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1042;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【暗夜火鹰】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【暗夜火鹰】（仙）（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙九层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙九层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==77) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙九层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$tttpdid1=253;
$tttpdid2=254;
$tttpdid3=255;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉仙十层】</font></a>"."<br>";
} else{	
} 



$tttid=255;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1043;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【八翼雷鹰王】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【八翼雷鹰王】（仙）（已阵亡）</font></br>"; 	
} 

//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙九层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙九层）准备往哪里走呢？</font>"."<br>"; 





} elseif ($dty==78) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$tttid=256;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1044;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【暗黑冰龙】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【暗黑冰龙】（仙）（已阵亡）</font></br>"; 	
} 

$tttid=257;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1045;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【暗黑冰龙】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【暗黑冰龙】（仙）（已阵亡）</font></br>"; 	
} 

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙十层）</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙十层）准备往哪里走呢？</font>"."<br>"; 




} elseif ($dty==79) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>十八罗汉（仙十层）</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
/*
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉仙十一层】</font></a>"."<br>";
*/



$tttpdid1=256;
$tttpdid2=257;
$tttpdid3=258;
include("./ini/hd_ini.php");
$pdid1=($iniFile->getItem('活动次数',$tttpdid1));
$pdid2=($iniFile->getItem('活动次数',$tttpdid2));
$pdid3=($iniFile->getItem('活动次数',$tttpdid3));
if ($pdid1>=2&&$pdid2>=2&$pdid3>=2) {
	/*
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【十八罗汉仙十一层】（封印中）</font></a>"."<br>";
*/

echo "<font color=res>进入【十八罗汉仙十一层】（封印中）</font></a>"."<br>";

} else{	
} 



$tttid=258;
include("./rcrw/ttt.php");
if ($hdcs==1&&$hdcs!="") {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=1046;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【九幽飞天龙王】（仙）</font></a>"."<br>";
} else{	
echo "<font color=red>【九幽飞天龙王】（仙）（已阵亡）</font></br>"; 	
} 


//出口
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>十八罗汉（仙十层）</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
//地点描述
echo "<font color=black>十八罗汉（仙十层）准备往哪里走呢？</font>"."<br>"; 















} else {
  echo "错误地图,编号：".$dty."<br>";
}








?>