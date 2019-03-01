<?php





include("./ini/zt_ini.php");
$fb1=($iniFile->getItem('玩家信息','法宝经验'));
$fb2=($iniFile->getItem('玩家信息','修炼经验'));
include("./ini/yl_ini.php");
$fb3=($iniFile->getItem('背包仓库银两','背包银两'));
if($fb1>=$fbb1&&$fb2>=$fbb2&&$fb3>=$fbb3){

include("./sql/mysql.php");//调用数据库连接 
include("./ini/zt_ini.php");
$fbbb1=$fb1-$fbb1;
$iniFile->updItem('玩家信息', ['法宝经验' => $fbbb1]);
$fbbb2=$fb2-$fbb2;
$iniFile->updItem('玩家信息', ['修炼经验' => $fbbb2]);
include("./ini/yl_ini.php");
$fbbb3=$fb3-$fbb3;
$iniFile->updItem('背包仓库银两', ['背包银两' => $fbbb3]);
$q2="all_yl";  
$strsql = "update $q2 set bbyl=$fbbb3 where wjid=$wjid";
$result = @mysql_query($strsql);


$npcc=$zbidx;
include("./wp/zbxx.php");//装备信息
echo "<font color=black>恭喜你！升级".$wp1."成功</font>"."<br>";

//数字转汉字
$yl=$fbb1;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."法宝经验</font>"."<br>";
//数字转汉字
$yl=$fbb2;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."修炼经验</font>"."<br>";
//数字转汉字
$yl=$fbb3;
include("./pz/ylts.php");
$manzu1=$manzu1."<font color=black>失去：".$ylxx."银两</font>"."<br>";
//	输出满足提示语言
echo $manzu1;
$npcc=$zbidx;
include("./pz/ini_pzz016.php");//升级

} else{	

//数字转汉字
$yl=$fbb1;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."法宝经验";	
//数字转汉字
$yl=$fbb2;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."修炼经验";	
//数字转汉字
$yl=$fbb3;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

echo "<font color=black>对不起！升级".$ms1."需要".$wpts."</font>"."<br>";
} 










?>
