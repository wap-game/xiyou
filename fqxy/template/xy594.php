<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
$xpid=$npccid;


	
$wpid=$npcc;

if($wpid>=717&&$wpid<=728||$wpid>=731&&$wpid<=736||$wpid>=825&&$wpid<=830){   

//调用物品信息
include("./wp/wpxx.php");

$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//物品加
$wpdz1[]=$wpmz;//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=$wpid;//物品id
$wpdz4[]=1;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");
echo "<font color=black>恭喜你！！将".$wpmz."从星盘上卸下！！</font>"."<br>";

include("./sql/mysql.php");//调用数据库连接 
$q2="xp".$wjid;
$strsql = "update $q2 set xpid=0 where id=$xpid";//物品id号必改值
$result = mysql_query($strsql);

//更新缓存数据
$inina="xp.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

 //更新缓存数据
$inina="ztt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据


} else{
echo "<font color=black>物品有误联系GM处理</font>"."<br>";

} 








echo "<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=589;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";




echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>