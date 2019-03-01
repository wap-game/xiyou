<?php





if($sll!=0){
if($sl>=1&&$sl<=1000){
$wp3pd=$gmjg*$sl;

include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));
if($wp3pd<=$yl){
include("./ini/bbrl_ini.php");
$bbrla=($iniFile->getItem('背包已用容量','容量'));

$ddfz=$sl*$wpzl;
$br1=$bbrla+$ddfz;
include("./ini/zt_ini.php");
$br2=($iniFile->getItem('玩家信息','背包容量'));
//判断负重
if($br1<=$br2){

include("./ini/yl_ini.php");
$yll=$yl-$wp3pd;
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yl"; //数据库位置 
$strsql = "update $q2 set bbyl=$yll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yl_ini.php");
//缓存修改
$iniFile->updItem('背包仓库银两', ['背包银两' => $yll]);


//数字转汉字
$yl=$wp3pd;
include("./pz/ylts.php");
echo "<font color=black>失去：".$ylxx."银两</font>"."<br>";

$wpkc=$sl;
$npcc1=$npcc;

$npcc=$wpid;
include("./wp/wpxx.php");
$wwpfl=$wpfl;
//得到物品代码
include("./pz/ini_pz01.php");
include("./pz/ini_pzz022.php");

$kcrl="";
//背包容量变更加
$kcrl=$sl*$wpzl+$kcrl;
include("./pz/ini_pzz09.php");

$npcc=$npcc1;



$dqwp=1;
include("template/xy246.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} else{
$dqwp=0;
echo "<font color=red>对不起！购买".$wpmz."x".$sl."负重不足</font>"."<br>";
}
} else {
$dqwp=0;
echo "<font color=red>对不起！购买".$wpmz."x".$sl."所携带的银两不足</font>"."<br>";
echo "<br>";
}
} else {
$dqwp=0;
echo "<font color=red>每次购买只能在1-1000之间</font>"."<br>";
echo "<br>";
}
} else {
$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}


?>




