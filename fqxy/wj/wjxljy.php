<?php

$lvl=$wjxx[等级];
$xljy=$wjxx[修炼经验];



//当前等级升级所需要的经验
$lvl2=(($lvl+1)*($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+100);

if($xljy >=$lvl2){

$cpl1="100%";



} else{


//计算百分比

$cpl1=round( $xljy/$lvl2*100 , 2);

if($cpl1 ==100){

if($xljy ==$lvl2){


} else{
$cpl1="99.99%";
}


} else{

$cpl1=round($xljy/$lvl2*100 , 2) . "%";



}








}




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=51;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$cpl1</font></a>";









?>


