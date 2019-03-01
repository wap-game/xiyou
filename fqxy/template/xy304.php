<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
$npcc1=$npcc;
$sjcs=5;
include("./ini/cl_ini.php");




$npcc=$npcc1;

if($npcc ==1){

//需要扣得材料
$cl1=22;
$cl2=23;
$cl3=24;
$cl4=25;
$cl5=26;
$cl6=27;
//需要扣得材料

//得到的材料
$cll1=31;
$cll2=32;
$cll3=33;
$cll4=34;
$cll5=35;
$cll6=36;


$clpl="<font color=red>对不起你的1级红黄蓝宝石水晶任意一样不满足5个</font><br>";
include("./pz/ini_pzz028.php");//调用材料批量兑换



} elseif($npcc ==2){

//需要扣得材料
$cl1=28;
$cl2=29;
$cl3=30;
//需要扣得材料

//得到的材料
$cll1=37;
$cll2=38;
$cll3=39;

$clpl="<font color=red>对不起你的1级金刚佛印玄武石任意一样不满足5个</font><br>";
include("./pz/ini_pzz028.php");//调用材料批量兑换

} elseif($npcc ==3){


//需要扣得材料
$cl1=31;
$cl2=32;
$cl3=33;
$cl4=34;
$cl5=35;
$cl6=36;
//需要扣得材料

//得到的材料
$cll1=40;
$cll2=41;
$cll3=42;
$cll4=43;
$cll5=44;
$cll6=45;


$clpl="<font color=red>对不起你的2级红黄蓝宝石水晶任意一样不满足5个</font><br>";
include("./pz/ini_pzz028.php");//调用材料批量兑换



} elseif($npcc ==4){

//需要扣得材料
$cl1=37;
$cl2=38;
$cl3=39;
//需要扣得材料

//得到的材料
$cll1=46;
$cll2=47;
$cll3=48;

$clpl="<font color=red>对不起你的2级金刚佛印玄武石任意一样不满足5个</font><br>";
include("./pz/ini_pzz028.php");//调用材料批量兑换

} elseif($npcc ==5){


//需要扣得材料
$cl1=40;
$cl2=41;
$cl3=42;
$cl4=43;
$cl5=44;
$cl6=45;
//需要扣得材料

//得到的材料
$cll1=49;
$cll2=50;
$cll3=51;
$cll4=52;
$cll5=53;
$cll6=54;


$clpl="<font color=red>对不起你的3级红黄蓝宝石水晶任意一样不满足5个</font><br>";
include("./pz/ini_pzz028.php");//调用材料批量兑换



} elseif($npcc ==6){

//需要扣得材料
$cl1=46;
$cl2=47;
$cl3=48;
//需要扣得材料

//得到的材料
$cll1=55;
$cll2=56;
$cll3=57;

$clpl="<font color=red>对不起你的3级金刚佛印玄武石任意一样不满足5个</font><br>";
include("./pz/ini_pzz028.php");//调用材料批量兑换


} elseif($npcc ==7){


//需要扣得材料
$cl1=49;
$cl2=50;
$cl3=51;
$cl4=52;
$cl5=53;
$cl6=54;
//需要扣得材料

//得到的材料
$cll1=58;
$cll2=59;
$cll3=60;
$cll4=61;
$cll5=62;
$cll6=63;


$clpl="<font color=red>对不起你的4级红黄蓝宝石水晶任意一样不满足5个</font><br>";
include("./pz/ini_pzz028.php");//调用材料批量兑换



} elseif($npcc ==8){

//需要扣得材料
$cl1=55;
$cl2=56;
$cl3=57;
//需要扣得材料

//得到的材料
$cll1=64;
$cll2=65;
$cll3=66;

$clpl="<font color=red>对不起你的5级金刚佛印玄武石任意一样不满足5个</font><br>";
include("./pz/ini_pzz028.php");//调用材料批量兑换


} elseif($npcc ==9){


//需要扣得材料
$cl1=58;
$cl2=59;
$cl3=60;
$cl4=61;
$cl5=62;
$cl6=63;
//需要扣得材料

//得到的材料
$cll1=67;
$cll2=68;
$cll3=69;
$cll4=70;
$cll5=71;
$cll6=72;


$clpl="<font color=red>对不起你的5级红黄蓝宝石水晶任意一样不满足5个</font><br>";
include("./pz/ini_pzz028.php");//调用材料批量兑换



} elseif($npcc ==10){

//需要扣得材料
$cl1=64;
$cl2=65;
$cl3=66;
//需要扣得材料

//得到的材料
$cll1=73;
$cll2=74;
$cll3=75;

$clpl="<font color=red>对不起你的3级金刚佛印玄武石任意一样不满足5个</font><br>";
include("./pz/ini_pzz028.php");//调用材料批量兑换















} else{
echo "<font color=red>没有找到这个页面</font><br>";

}


















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