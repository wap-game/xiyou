<?php



if ($dty==0) {


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>小遗迹(1,1)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>小遗迹(1,2)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>小遗迹(1,1)往哪里走呢？</font>"."<br>"; 



} elseif ($dty==1) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>小遗迹(1,2)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>小遗迹(1,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>小遗迹(1,3)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>小遗迹(1,2)往哪里走呢？</font>"."<br>"; 


} elseif ($dty==2) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>小遗迹(1,3)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>小遗迹(1,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>小遗迹(1,4)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";

//地点描述
echo "<font color=black>小遗迹(1,3)往哪里走呢？</font>"."<br>"; 

} elseif ($dty==3) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>小遗迹(1,4)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //地名
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=152;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开【小遗迹】</font></a>"."<br>";


$q2="boss";
$sql1=mysql_query("select * from $q2 where id=1",$conn);
$info1=@mysql_fetch_array($sql1);
$yjdm=$info1[hp];

$q2="yj".$fqidd;
$strsql = "truncate table $q2";//清空自己在遗迹的数据
$result = mysql_query($strsql);
$q2="msg".$fqidd;
$strsql = "truncate table $q2";//清空自己在消息列表
$result = mysql_query($strsql);

if($yjdm>=1){
$q2="yl".$fqidd;
$strsql = "update $q2 set slid=1 where id=0";//物品id号必改值
$result = mysql_query($strsql);
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=130;
$npc[]=1;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【遗迹大门】</font></a>"."<br>";
} elseif ($yjdm<=0) {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=131;
$npc[]=0;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【进入遗迹】</font></a>"."<br>";





} else {

}


echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>小遗迹(1,3)</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";


//地点描述
echo "<font color=black>这里便是通向遗迹的大门了</font>"."<br>"; 

} elseif ($dty==4) {

  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>【遗迹废墟】</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=152;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>离开【小遗迹】</font></a>"."<br>";



//地点描述
echo "<font color=black>一片废墟不知通向哪里？</font>"."<br>"; 



} else {
  echo "错误地图,编号：".$dty."<br>";
}






?>