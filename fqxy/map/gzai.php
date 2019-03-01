<?php


		//调用zt.ini是否存在  
include("./ini/fz_ini.php");
$fzpd=($iniFile->getItem('所处房间人id','初始'));

if($fzpd==123){

	//调用家具缓存
include("./ini/jj_ini.php");
# 获取一个分类下所有数据$
$jjxx2=($iniFile->getCategory('家具等级'));
$jjxx3=($iniFile->getCategory('家具摆放'));
$jjxx4=($iniFile->getCategory('家具名字'));

} else{	

$wjid1=$wjid;
$wjid=$fzpd;


if($yqbl!=123){

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


	//调用家具缓存
include("./ini/jj_ini.php");
# 获取一个分类下所有数据$
$jjxx2=($iniFile->getCategory('家具等级'));
$jjxx3=($iniFile->getCategory('家具摆放'));
$jjxx4=($iniFile->getCategory('家具名字'));
} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

} else{	

	//调用家具缓存
include("./ini/jj_ini.php");
# 获取一个分类下所有数据$
$jjxx2=($iniFile->getCategory('家具等级'));
$jjxx3=($iniFile->getCategory('家具摆放'));
$jjxx4=($iniFile->getCategory('家具名字'));
} 



$wjid=$wjid1;



} 




if ($dty==0) {

  //地名

    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>大厅</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=155;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>出门</font></a>"."<br>";
$jjid=31;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}
$jjid=17;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}
$jjid=18;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}
$jjid=19;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大宴会厅</font></a>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>锻造室</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>主人房</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>管家房</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>大厅往哪里走呢？</font>"."<br>"; 



} elseif ($dty==1) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>大宴会厅</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$jjid=28;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}

$jjid=29;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}

$jjid=30;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>珠宝阁</font></a>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大厅</font></a>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>保管室</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>演武厅</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>大宴会厅往哪里走呢？</font>"."<br>"; 






} elseif ($dty==2) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>保管室</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



$jjid=40;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}

$jjid=41;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}

echo "<font color=black>请选择出口</font>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大宴会厅</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>保管室往哪里走呢？</font>"."<br>"; 





} elseif ($dty==3) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>演武厅</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$jjid=20;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}
$jjid=21;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}
echo "<font color=black>请选择出口</font>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大宴会厅</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>骑房</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>演武厅往哪里走呢？</font>"."<br>"; 


} elseif ($dty==4) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>管家房</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=5387;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>管家</font></a>"."<br>";
echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大厅</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>管家房往哪里走呢？</font>"."<br>"; 




} elseif ($dty==5) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>主人房</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$jjid=15;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}
$jjid=16;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}
$jjid=32;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}




echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宠物房</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>次厅</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大厅</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>主人房往哪里走呢？</font>"."<br>"; 


} elseif ($dty==6) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>宠物房</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宝宝房</font></a>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>主人房</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>宠物房往哪里走呢？</font>"."<br>"; 

} elseif ($dty==7) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>骑房</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>演武厅</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>骑房往哪里走呢？</font>"."<br>"; 

} elseif ($dty==8) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>珠宝阁</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

$jjid=24;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}



echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大宴会厅</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>珠宝阁往哪里走呢？</font>"."<br>"; 



} elseif ($dty==9) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>次厅</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
$jjid=33;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}
$jjid=34;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}
$jjid=35;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</font></a>"."<br>";
} else{
}

echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>厨房</font></a>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>主人房</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>次厅往哪里走呢？</font>"."<br>"; 


} elseif ($dty==10) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>厨房</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>次厅</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>厨房往哪里走呢？</font>"."<br>"; 


} elseif ($dty==11) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>宝宝房</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宠物房</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>宝宝房往哪里走呢？</font>"."<br>"; 


} elseif ($dty==12) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>锻造室</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大厅</font></a>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>炼丹房</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>锻造室往哪里走呢？</font>"."<br>"; 


} elseif ($dty==13) {
  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>炼丹房</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>锻造室</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>炼丹房往哪里走呢？</font>"."<br>"; 



} else {
  echo "错误地图,编号：".$dty."<br>";
}







?>