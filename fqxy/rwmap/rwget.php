<?php
$m=count($wpdz1,0); 
$ccm=$m;

$ii=-1;
$wpbv3=0;
for($d=0;$d<$ccm;$d++){
$ii=$ii+1;
$wpbv3=$wpbv3+1;
if ($wpbv3==1) {//符合条件爆出
include("./sql/mysql.php");//调用数据库连接 
} else{
}
if ($wpdz2[$ii]==3) {//装备
$jjmz=$wpdz1[$ii];
$wwpfl=$wpdz2[$ii];//物品分类
$zbid1=$wpdz3[$ii];//物品id
$zbzl1=$wpdz5[$ii];//物品重量
include("./pz/ini_pzz011.php");
$kcrl=$zbzl1+$kcrl;
} else{//物品


$wpmz=$wpdz1[$ii];
$wwpfl=$wpdz2[$ii];//物品分类
$wpid=$wpdz3[$ii];//物品id
$wpkc=$wpdz4[$ii];//	需要量
$wpzl=$wpdz5[$ii];//物品重量


$manzu1=$manzu1."<font color=black>获得：".$wpmz."x".$wpkc.$dbpd1."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz024.php");//增加
//背包容量变更加
$kcrl=$wpkc*$wpzl+$kcrl;


}
}
if ($kcrl!="") {
include("./pz/ini_pzz09.php");
echo $manzu1;
} else{
}




?>







