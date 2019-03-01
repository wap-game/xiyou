<?php

$lvl=$wjxx[等级];
$jy=$wjxx[经验];


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
$clj[]=50;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$cpl</font></a>"."<br/>";









?>


