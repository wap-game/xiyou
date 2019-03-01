<?php



$wjid=$wjid1;	
include("./ini/user_ini.php");
$pkx1=($iniFile->getItem('地图坐标','x'));
$pky1=($iniFile->getItem('地图坐标','y'));
$wjid=$ckid;	
include("./ini/user_ini.php");
$pkx2=($iniFile->getItem('地图坐标','x'));
$pky2=($iniFile->getItem('地图坐标','y'));
$pko=1;

if($pkx2==0||$pkx2==1){//安全区域
$pko=2;

} else{

if($pkx1==$pkx2&&$pky1==$pky2){	
$pko=1;
} else{
$pko=3;	
} 
} 
echo "<br>";	

$wjid=$wjid1;	


if($pko==2){//安全区
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini		
include("template/xy398.php");
include("./pz/pz01.php");
break;
} elseif($pko==3){ //不在同一点
	
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini		
include("template/xy399.php");
include("./pz/pz01.php");
break;
} else{	
}











?>


