<?php

include("./wj/jfdj.php");//解封等级

//调用zt.ini是否存在
include("./ini/zt_ini.php");
# 获取一个分类下某个子项的值
$jykg=($iniFile->getItem('玩家信息','修炼经验开关'));
$lvl=($iniFile->getItem('玩家信息','等级'));
$jy1=($iniFile->getItem('玩家信息','经验'));
$xljy1=($iniFile->getItem('玩家信息','修炼经验'));

//当前等级升级所需要的经验
$lvl1=($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+200;
//当前等级升级所需要的经验
$lvl2=(($lvl+1)*($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+100);
include("./pz/ini_pz05.php");//调用ini缓存位置


//宠物

include("./ini/npc_ini.php");
$cwcz2=($iniFile->getItem('怪物编号','初始'));//宠物出战状态
$cwidd=($iniFile->getItem('怪物1号属性','初始'));//宠物出战id
if($cwcz2==2||$cwcz2==3){
	
include("./wj/cwjfdj.php");//解封等级
include("./ini/cw_ini.php");
$lvl=($iniFile->getItem('宠物等级',$cwidd));
$jy1=($iniFile->getItem('宠物经验',$cwidd));
//当前等级升级所需要的经验
$lvl1=($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+200;
//当前等级升级所需要的经验
$lvl2=(($lvl+1)*($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+100);
include("./pz/ini_pz012.php");//调用ini缓存位置




} 










?>
