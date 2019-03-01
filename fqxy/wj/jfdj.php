<?php
//解封等级







//判断玩家是否存在自动解封等级
//调用jfdj.ini是否存在
include("./ini/jfdj_ini.php");
$wjjfdj=($iniFile->getItem('玩家等级上限','上限'));
$wjjfdj1=$wjjfdj;
if($wjjfdj1==179){
$jfdj=199;
} else{
$wjjfdj=159;		
}

if($wjjfdj1==199){
$jfdj=220;
} else{
$wjjfdj=159;		
}
if($wjjfdj1==220){
$jfdj=300;
} else{
$wjjfdj=159;		
}

if($wjjfdj >$jfdj){
$jfdj=$wjjfdj;
} else{
}















?>


