<?php





echo "<font color=black>".$nname."被你打死了！！！</font>"."<br>";


$zhblq=$npcc;

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续走</font></a>"."<br>";



//区域小boss加时间
if ($npcc==341||$npcc==344||$npcc==345||$npcc==348||$npcc==350||$npcc==352||$npcc==354||$npcc==356||$npcc==359||$npcc==362||$npcc==368||$npcc==371||$npcc==374||$npcc==377||$npcc==380
||$npcc==385||$npcc==388||$npcc==391||$npcc==394||$npcc==397||$npcc==400||$npcc==403||$npcc==408||$npcc==412||$npcc==415||$npcc==418||$npcc==426||$npcc==435||$npcc==437||$npcc==439||$npcc==441||$npcc==444
||$npcc==642) {
include("./ini/user_ini.php");
# 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));
include("./ini/qyboss_ini.php");
//写入boss时间
$enddate=date('Y-m-d H:i:s');

$iniFile->updItem('boss', [$npcc => $enddate]);	
} else{
}

//区域小boss加时间

//宠物加时间
if ($npcc==719||$npcc==720||$npcc==721||$npcc==722||$npcc==723||$npcc==724||$npcc==725||$npcc==726||$npcc==727||$npcc==728||$npcc==729||$npcc==731) {
include("./ini/user_ini.php");
# 获取一个分类下某个子项的值
$bosid=$npcc;
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));
include("./ini/qycw_ini.php");
//写入boss时间
$enddate=date('Y-m-d H:i:s');
$iniFile->updItem('boss', [$npcc => $enddate]);	
	
	
} else{
}

//宠物加时间
//副本boss
include("./wj/fbboss.php");







if ($npcc==638) {//vip练级区域怪物
include("./ini/zt_ini.php");
//按照等级区分经验
$wjdj=($iniFile->getItem('玩家信息','等级'));
if ($wjdj>=1&&$wjdj<=30) {
$npjy=20000;//经验
} elseif ($wjdj>=31&&$wjdj<=60) {
$npjy=30000;//经验
} elseif ($wjdj>=61&&$wjdj<=90) {
$npjy=40000;//经验
} elseif ($wjdj>=61&&$wjdj<=90) {
$npjy=50000;//经验
} elseif ($wjdj>=91&&$wjdj<=120) {
$npjy=60000;//经验
} elseif ($wjdj>=121&&$wjdj<=150) {
$npjy=70000;//经验
} elseif ($wjdj>=151&&$wjdj<=180) {
$npjy=80000;//经验
} elseif ($wjdj>=181&&$wjdj<=200) {
$npjy=90000;//经验
} elseif ($wjdj>=201&&$wjdj<=220) {
$npjy=100000;//经验

	
} else{	
$npjy=1;//经验
} 
} else{	
} 





//爆装爆物爆经验代码

//得到经验
if ($npjy>0) {
$jy=$npjy;//设置限制使用得到的经验
//调用zf.ini是否存在
include("./ini/zf_ini.php");
//2倍经验
$wwpid1=398;
$zfsj=3600;
include("./pz/pz05.php");
if ($ztzf==1) {
$zfjy=$npjy*2;
$jy=$zfjy;
$jyts="（小智慧果经验x2）";	
} else{
}
//2倍经验
//4倍经验
$wwpid1=399;
$zfsj=3600;
include("./pz/pz05.php");
if ($ztzf==1) {
$zfjy=$npjy*4+$zfjy;
$jy=$zfjy;
$jyts=$jyts."（大智慧果经验x4）";	
} else{
}
//4倍经验
//vip特权
if ($wjxx[vip等级]==4) {
$zfjy=$npjy*2+$zfjy;
$jy=$zfjy;	
$jyts=$jyts."（vip".$wjxx[vip等级]."特权杀怪经验永久x2）";	
} elseif ($wjxx[vip等级]==5) {
$zfjy=$npjy*3+$zfjy;
$jy=$zfjy;		
$jyts=$jyts."（vip".$wjxx[vip等级]."特权杀怪经验永久x3）";	
} elseif ($wjxx[vip等级]>=6) {
$zfjy=$npjy*4+$zfjy;
$jy=$zfjy;	
$jyts=$jyts."（vip".$wjxx[vip等级]."特权杀怪经验永久x4）";	
} else{
}
//vip特权


include("./pz/ini_pzz023.php");//调用ini缓存位置
} else{
}
//得到经验


//爆物品
$m=count($wpdz1,0); 
$ccm=$m;

if ($m>=1) {	
//调用zf.ini是否存在 
include("./ini/zf_ini.php");
//检测掉宝符咒
//双倍掉宝
$wwpid1=454;
$zfsj=600;
include("./pz/pz05.php");
if ($ztzf==1) {
$dbpd=2;//掉落x	
$dbpd1="（双倍掉落中）";	
} else{
}
//双倍掉宝
	//四倍掉宝
$wwpid1=455;
$zfsj=600;
include("./pz/pz05.php");
if ($ztzf==1) {
$dbpd=4;//掉落x	
$dbpd1="（四倍掉落中）";	
} else{
}
//四倍掉宝
//八倍掉宝
$wwpid1=456;
$zfsj=600;
include("./pz/pz05.php");
if ($ztzf==1) {
$dbpd=8;//掉落x	
$dbpd1="（八倍掉落中）";	
} else{
}
//八倍掉宝

if ($dbpd>=2) {
} else{
$dbpd1="";	
$dbpd=1;	
}



$ii=-1;
$wpbv3=0;
//爆率计算

for($d=0;$d<$ccm;$d++){

$ii=$ii+1;
$wpbv1=$wpdz6[$ii];//爆率百分比
$wpbv2=$wpdz7[$ii];//爆率
$bz= rand(1, $wpbv1);

if ($bz<=$wpbv2) {//符合条件爆出

//检测掉宝符咒



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
$wpkc=$wpdz4[$ii]*$dbpd;//	需要量
$wpzl=$wpdz5[$ii];//物品重量


if ($wpid==453||$wpid==487||$wpid==659||$wpid==660||$wpid==661||$wpid==662||$wpid==663||$wpid==821||$wpid==127||$wpid==1099) {//pass掉财宝箱子云梯石碎银
$wpkc=$wpdz4[$ii];
} else{
}



$manzu1=$manzu1."<font color=black>获得：".$wpmz."x".$wpkc.$dbpd1."</font>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz024.php");//增加

//背包容量变更加
$kcrl=$wpkc*$wpzl+$kcrl;
}



} else{
}
}
if ($kcrl!="") {

include("./pz/ini_pzz09.php");
echo $manzu1;
} else{
}


} else{
}


//爆装爆物爆经验代码






$npcc=$zhblq;

//杀怪任务
include("./rw/sgrw.php");





//杀怪通天塔boss重要
include("./rw/ttt.php");















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
?>