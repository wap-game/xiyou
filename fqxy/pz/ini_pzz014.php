<?php
//判断银两是否满足
//调用yl.ini是否存在
include("./ini/sw_ini.php");
$yl=($iniFile->getItem('声望值',$swmz));
if($yl>=$kcyl01){
$pdmz=2;
} else{
$pdmz=1;	
}


?>
