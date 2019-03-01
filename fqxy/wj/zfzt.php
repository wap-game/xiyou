<?php
$zfhp=0;
$zffy=0;
$zfgj=0;
$zfmg=0;

$zfbg=0;
$zfhg=0;
$zflg=0;
$zfbf=0;
$zfhf=0;
$zflf=0;

///////////////////////////////////////////////获取祝福状态/////////////////////////////
//调用zf.ini是否存在
include("./ini/zf_ini.php");


//获取毫毛时间
$wwpid1=136;
$zfsj=2592000;
include("./pz/pz05.php");
if($ztzf==1){
$zfhp1=10000;
$zffy1=7000;
$zfgj1=6000;
$zfmg1=6000;
$zfhp=$zfhp+$zfhp1;
$zffy=$zffy+$zffy1;
$zfgj=$zfgj+$zfgj1;
$zfmg=$zfmg+$zfmg1;

} else{

}




//获取人参果时间
$wwpid1=137;
$zfsj=1296000;
include("./pz/pz05.php");

if($ztzf==1){
$zfhp1=5000;
$zffy1=3500;
$zfgj1=3000;
$zfmg1=3000;
$zfhp=$zfhp+$zfhp1;
$zffy=$zffy+$zffy1;
$zfgj=$zfgj+$zfgj1;
$zfmg=$zfmg+$zfmg1;

} else{

}
//获取神秘人参果时间
$wwpid1=138;
$zfsj=2592000;
include("./pz/pz05.php");
if($ztzf==1){
$zfhp1=10000;
$zffy1=7000;
$zfgj1=6000;
$zfmg1=6000;
$zfhp=$zfhp+$zfhp1;
$zffy=$zffy+$zffy1;
$zfgj=$zfgj+$zfgj1;
$zfmg=$zfmg+$zfmg1;

} else{

}


include("./ini/zgvip_ini.php");
$viptime=($iniFile->getItem('尊贵vip','1'));
$nowtime=date('Y-m-d H:i:s');	
if($viptime >$nowtime){
$vipkg=($iniFile->getItem('尊贵vip开关','1'));
if($vipkg==2){
$zfhp=$zfhp+10000000;
$zffy=$zffy+5000000;
$zfgj=$zfgj+5000000;
$zfmg=$zfmg+5000000;


$zfbg=$zfbg+200;
$zfhg=$zfhg+200;
$zflg=$zflg+200;
$zfbf=$zfbf+200;
$zfhf=$zfhf+200;
$zflf=$zflf+200;

} else{	
}
} else{	
}







if($zfhp>0){
$wjxx1[血]=$wjxx1[血]+$zfhp;
$maxhp=$wjxx1[血];

} else{
}



if($zfgj>0){


$wjxx1[max攻击]=$wjxx1[max攻击]+$zfgj;

$wjxx1[攻击] = ceil(($wjxx1[max攻击])/ 1.3);

} else{
}



if($zffy>0){
$wjxx1[max防御]=$wjxx1[max防御]+$zffy;
$wjxx1[防御] = ceil(($wjxx1[max防御])/ 1.3);
} else{
}

if($zfmg>0){
$wjxx1[max魔攻]=$wjxx1[max魔攻]+$zfmg;
$wjxx1[魔攻] = ceil(($wjxx1[max魔攻])/ 1.3);

} else{
}


if($zfbg>0){
$wjxx1[冰攻]=$wjxx1[冰攻]+$zfbg;
} else{
}
if($zfhg>0){
$wjxx1[火攻]=$wjxx1[火攻]+$zfhg;
} else{
}
if($zflg>0){
$wjxx1[雷攻]=$wjxx1[雷攻]+$zflg;
} else{
}

if($zfbf>0){
$wjxx1[冰防]=$wjxx1[冰防]+$zfbf;
} else{
}
if($zfhf>0){
$wjxx1[火防]=$wjxx1[火防]+$zfhf;
} else{
}
if($zflf>0){
$wjxx1[雷防]=$wjxx1[雷防]+$zflf;
} else{
}
























?>


