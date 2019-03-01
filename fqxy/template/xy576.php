<?php

echo "<font color=black>请扫描下方二维码或者点击一键启动进行购买</font>"."<br>";


if($npcc==1){   

$img='pic/zfb/1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";


$a2=1;	
/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=3;//充值方式3支付宝4微信
include("dd.php");//调用数据库连接 
/////////////////


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=578;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>启动支付宝付款</font></a>"."<font color=black></font>"."<br>";

} elseif($npcc==2){   
$img='pic/zfb/10.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
$a2=10;	
/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=3;//充值方式3支付宝4微信
include("dd.php");//调用数据库连接 
/////////////////

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=578;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>启动支付宝付款</font></a>"."<font color=black></font>"."<br>";

} elseif($npcc==3){   
$img='pic/zfb/20.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";

$a2=20;	
/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=3;//充值方式3支付宝4微信
include("dd.php");//调用数据库连接 
/////////////////

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=578;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>启动支付宝付款</font></a>"."<font color=black></font>"."<br>";

} elseif($npcc==4){   
$img='pic/zfb/50.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";

$a2=50;	
/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=3;//充值方式3支付宝4微信
include("dd.php");//调用数据库连接 
/////////////////
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=578;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>启动支付宝付款</font></a>"."<font color=black></font>"."<br>";

} elseif($npcc==5){   
$img='pic/zfb/100.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
$a2=100;	
/////////////////
$nowtime=date('Y-m-d H:i:s');
$cz01=$wjid;//充值id
$cz02=$a2;//充值价格
$cz03=$nowtime;//充值时间
$cz04=3;//充值方式3支付宝4微信
include("dd.php");//调用数据库连接 
/////////////////

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=578;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>启动支付宝付款</font></a>"."<font color=black></font>"."<br>";










} else{
	
	
	
} 


echo "<br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=574;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<font color=black></font>"."<br>";



?>