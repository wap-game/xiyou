<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
$arr = explode("_",$npcc);
$str1=$arr[0];
$str2=$arr[1];
$str3=$arr[2];



include("./ini/yl_ini.php");
$bbyl=($iniFile->getItem('背包仓库银两','背包银两'));


if($bbyl>=$str3){
	
	
	include("./sql/mysql.php");//调用数据库连接 
	//银两扣除
	//数字转汉字
$wpkc=$str3;
$yl=$wpkc;
include("./pz/ylts.php");
echo "<font color=black>失去：".$ylxx."银两</font>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除

	
	


//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);


# 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));

$dty=($iniFile->getItem('地图坐标','y'));
//保存上次的地图值移动清除
$ydtx=$dtx;
$ydty=$dty;
//保存上次的地图值移动清除

$dtx=$str1;
$dty=$str2;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);


} else{	
//数字转汉字
$yl=$str3;
include("./pz/ylts.php");
echo "<font color=red>对不起，快速传送需要银两".$ylxx."两</font></a>"."<br>";


}








include("./template/xy002.php");//游戏主页


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini







?>