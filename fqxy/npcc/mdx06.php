<?php




$wpjd=$wpwng;



if($sll!=0){
if($sl>=1&&$sl<=1000){
$wp3pd=$wpjd*$sl;

include("./ini/sc_ini.php");
$yl=($iniFile->getItem('商城数量','128'));
if($wp3pd<=$yl){
include("./ini/bbrl_ini.php");
$bbrla=($iniFile->getItem('背包已用容量','容量'));

$ddfz=$sl*$wpzl;
$br1=$bbrla+$ddfz;
include("./ini/zt_ini.php");
$br2=($iniFile->getItem('玩家信息','背包容量'));
//判断负重
if($br1<=$br2){

$yll=$yl-$wp3pd;
include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid; //数据库位置 

$pzinimz1="序列"; 
$pzinimz2="商城id"; 
$pzinimz3="商城名字"; 	
$wpzzz="商城数量";

if($yll==0){
$strsql = "delete from $q2 where wpid=128 ";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/sc_ini.php");

  
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem($pzinimz1,'128'));
# 删除一个子项
$iniFile->delItem($pzinimz2, $xlh);
# 删除一个子项
$iniFile->delItem($pzinimz1, '128');
# 删除一个子项
$iniFile->delItem($wpzzz, '128');
# 删除一个子项
$iniFile->delItem($pzinimz3, '128');

} else {
$strsql = "update $q2 set wpsl=$yll where wpid=128";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/sc_ini.php");
//缓存修改
$iniFile->updItem('商城数量', ['128' => $yll]);

}




echo "<font color=black>失去：【万能果】x".$wp3pd."</font>"."<br>";

$wpkc=$sl;
$npcc1=$npcc;

$npcc=$wpid;
include("./wp/wpxx.php");
$wwpfl=$wpfl;
//得到物品代码
include("./pz/ini_pz01.php");
include("./pz/ini_pzz022.php");
$wpsl=($iniFile->getItem($wpzzz,$wpid));



$kcrl="";
//背包容量变更加
$kcrl=$sl*$wpzl+$kcrl-$wp3pd;
include("./pz/ini_pzz09.php");

$npcc=$npcc1;



$dqwp=1;
include("template/xy422.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} else{
$dqwp=0;
echo "<font color=red>对不起！购买负重不足</font>"."<br>";
}
} else {
$dqwp=0;
echo "<font color=red>对不起！购买".$wpmz."x".$sl."【万能果】不足</font>"."<br>";
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




