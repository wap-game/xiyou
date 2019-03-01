<?php
//判断银两是否满足
//调用yl.ini是否存在
include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));
if($yl>=$kcyl01){
$pdmz=2;
} else{
$pdmz=1;	
}


?>
