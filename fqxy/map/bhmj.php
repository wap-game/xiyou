<?php
//验证秘境的时间
include("./ini/bhmj_ini.php");

$mjtime=($iniFile->getItem('百花秘境时间','初始'));
$nowtime=date('Y-m-d');


//验证时间
include("./time/bhmjtime.php");
$date=date("H:i:s");
if ($nowtime==$mjtime&&$mjtime!=""&&$date> $time1 && $date < $time2) {



$startdate=$time2;
$enddate=date('H:i:s');
$minute=floor((strtotime($startdate)-strtotime($enddate)));


$minute1=floor($minute/60);
$second=$minute%60;

if($minute > 0){		
echo "<font color=red>【剩余：".$minute1."分".$second."秒】</font>"."<br>";
} else{
echo "<font color=red>【剩余：".$second."秒】</font>"."<br>";
} 	





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=644;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【查看采花大盗排名】</font></a>"."<br>";

if ($dty==0) {
//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(4,4)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
//npc
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=176;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>离开【百花秘境】</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////
  


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(4,3)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,4)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>【百花秘境】(4,4)往哪里走呢？</font>"."<br>"; 



} elseif ($dty==1) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(3,4)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,3)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,4)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(4,4)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>【百花秘境】(3,4)往哪里走呢？</font>"."<br>"; 


} elseif ($dty==2) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(2,4)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////



echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,3)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(1,4)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,4)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>【百花秘境】(2,4)往哪里走呢？</font>"."<br>"; 


} elseif ($dty==3) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(1,4)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;

echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(1,3)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,4)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";


//地点描述
echo "<font color=black>【百花秘境】(1,4)往哪里走呢？</font>"."<br>"; 


} elseif ($dty==4) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(1,3)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(1,4)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(1,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,3)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";


//地点描述
echo "<font color=black>【百花秘境】(1,3)往哪里走呢？</font>"."<br>"; 


} elseif ($dty==5) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(2,3)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,4)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(1,3)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,3)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";


//地点描述
echo "<font color=black>【百花秘境】(2,3)往哪里走呢？</font>"."<br>"; 


} elseif ($dty==6) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(3,3)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,4)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,3)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(4,3)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>【百花秘境】(3,3)往哪里走呢？</font>"."<br>"; 



} elseif ($dty==7) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(4,3)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(4,4)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(4,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,3)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";


//地点描述
echo "<font color=black>【百花秘境】(4,3)往哪里走呢？</font>"."<br>"; 


} elseif ($dty==8) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(4,2)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(4,3)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(4,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,2)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>【百花秘境】(4,2)往哪里走呢？</font>"."<br>"; 


} elseif ($dty==9) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(3,2)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,3)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(4,2)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";


//地点描述
echo "<font color=black>【百花秘境】(3,2)往哪里走呢？</font>"."<br>"; 



} elseif ($dty==10) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(2,2)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,3)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(1,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,2)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";


//地点描述
echo "<font color=black>【百花秘境】(2,2)往哪里走呢？</font>"."<br>"; 
echo $bossts;


} elseif ($dty==11) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(1,2)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(1,3)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(1,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,2)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>【百花秘境】(1,2)往哪里走呢？</font>"."<br>"; 

} elseif ($dty==12) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(1,1)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(1,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,1)</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>【百花秘境】(1,1)往哪里走呢？</font>"."<br>"; 


} elseif ($dty==13) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(2,1)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";



/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(1,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,1)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>【百花秘境】(2,1)往哪里走呢？</font>"."<br>"; 


} elseif ($dty==14) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(3,1)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(2,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(4,1)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";


//地点描述
echo "<font color=black>【百花秘境】(3,1)往哪里走呢？</font>"."<br>"; 


} elseif ($dty==15) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【百花秘境】(4,1)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


/////////////////////////////////////////////////采花大盗活动////////////////////////////////
include("./mb/bhmjmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {
$mbid="mb_".$dty."x".$dty;//必改值	
$mbflie="mb".$mbid;
include("./mb/mbtime.php");
if ($mbxs==2) {
//天降密宝
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=643;
$npc[]=$mbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【路边的野花】</font></a>"."<br>";
} else{
}
} else{
}
/////////////////////////////////////////////////采花大盗活动////////////////////////////////

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(4,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】(3,1)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>【百花秘境】(4,1)往哪里走呢？</font>"."<br>"; 





} else {
  echo "错误地图,编号：".$dty."<br>";
}


} else{	
echo "<font color=red>对不起！【采花大盗】时间已到~~~路边的野花不要采，不要采</font></br>"; 
echo "</br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=176;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开【百花秘境】</font></a>"."<br>";

//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
exit;
} 







?>