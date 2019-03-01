<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){




include("./ini/xtsz_ini.php");
$xtsz=($iniFile->getCategory('显示设置'));









echo "<font color=black>【显示设置】</font><br>";
echo "<font color=black>图片显示&nbsp</font>";
if($xtsz[图片显示]==2){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=205;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开启</font></a>";	
echo "<font color=black>|关闭</font>";
} else{
	
echo "<font color=black>开启|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=205;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>关闭</font></a>";


}



echo "<br>";


echo "<font color=black>公共信息&nbsp</font>";
if($xtsz[公共信息]==2){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=205;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开启</font></a>";	
echo "<font color=black>|关闭</font>";
} else{
	
echo "<font color=black>开启|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=205;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>关闭</font></a>";


}



echo "<br>";


echo "<font color=black>国家信息&nbsp</font>";
if($xtsz[国家信息]==2){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=205;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开启</font></a>";	
echo "<font color=black>|关闭</font>";
} else{
	
echo "<font color=black>开启|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=205;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>关闭</font></a>";


}


echo "<br>";



echo "<font color=black>私聊信息&nbsp</font>";
if($xtsz[私聊信息]==2){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=205;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开启</font></a>";	
echo "<font color=black>|关闭</font>";
} else{
	
echo "<font color=black>开启|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=205;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>关闭</font></a>";


}



echo "<br>";


echo "<font color=black>场景公告&nbsp</font>";
if($xtsz[场景公告]==2){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=205;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开启</font></a>";	
echo "<font color=black>|关闭</font>";
} else{
	
echo "<font color=black>开启|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=205;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>关闭</font></a>";


}


echo "<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=203;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>";

echo "<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";






echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");






} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>














