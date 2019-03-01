<?php








$zbid=$cwidd;
//调用cw.ini是否存在
include("./ini/cw_ini.php");
$lvl=($iniFile->getItem('宠物等级',$zbid));
$jy=($iniFile->getItem('宠物经验',$zbid));


//当前等级升级所需要的经验
$lvl1=($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+200;


if($jy >=$lvl1){

$cpl="100%";



} else{


//计算百分比

$cpl=round( $jy/$lvl1*100 , 2);

if($cpl ==100){

if($jy ==$lvl1){


} else{
$cpl="99.99%";
}


} else{

$cpl=round($jy/$lvl1*100 , 2) . "%";



}








}


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=368;
$npc[]=$zbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$cpl</font></a>"."<br/>";









?>


