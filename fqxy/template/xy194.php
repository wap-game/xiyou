<?php



$dmid=$npcc;

if($dmid==1){
	
	
echo "<font color=black>这是一扇已被损坏的【城池大门】</font>"."<br>";

} elseif($dmid==2){ 
$bossid=1;
include("./ini/boss_ini.php");
$hp=($iniFile->getItem('世界BOSS属性','血'));
$npcc=$bossid;
include("./npc/bossxx.php");
$maxhp=$nmaxhp;

//计算百分比
if($hp >=$maxhp){

$cpl=100;



} else{


//计算百分比

$cpl=round( $hp/$maxhp*100 , 2);

if($cpl ==100){

if($hp ==$maxhp){


} else{
$cpl=99.99;
}


} else{

$cpl=round($hp/$maxhp*100 , 2) ;



}








}

$cpll=100-$cpl;
$cpll1=$cpll. "%";

//计算百分比

echo "<font color=black>【城池大门】</font>"."<br>";
echo "<font color=black>城池大门：$hp/$maxhp</font>"."<br>";
echo "<font color=black>破损程度：".$cpll1."</font>"."<br>";

} elseif($dmid==3){ 
echo "<font color=black>这是一扇已被损坏的【城池中门】</font>"."<br>";

} elseif($dmid==4){ 
$bossid=2;
include("./ini/boss_ini.php");
$hp=($iniFile->getItem('世界BOSS属性','血'));
$npcc=$bossid;
include("./npc/bossxx.php");
$maxhp=$nmaxhp;
//计算百分比
if($hp >=$maxhp){

$cpl=100;



} else{


//计算百分比

$cpl=round( $hp/$maxhp*100 , 2);

if($cpl ==100){

if($hp ==$maxhp){


} else{
$cpl=99.99;
}


} else{

$cpl=round($hp/$maxhp*100 , 2) ;



}








}

$cpll=100-$cpl;
$cpll1=$cpll. "%";

//计算百分比

echo "<font color=black>【城池中门】</font>"."<br>";
echo "<font color=black>城池中门：$hp/$maxhp</font>"."<br>";
echo "<font color=black>破损程度：".$cpll1."</font>"."<br>";


} elseif($dmid==5){ 
$bossid=3;
include("./ini/boss_ini.php");
$hp=($iniFile->getItem('世界BOSS属性','血'));
$npcc=$bossid;
include("./npc/bossxx.php");
$maxhp=$nmaxhp;

echo "<font color=black>【神兽守卫】</font>"."<br>";
if($hp>=0){ 
echo "<font color=black>体力：$hp/$maxhp</font>"."<br>";
} else {
echo "<font color=black>【神兽守卫】已被敌方国家击败</font>"."<br>";

} 




} elseif($dmid==6){ 
$bossid=4;
include("./ini/boss_ini.php");
$hp=($iniFile->getItem('世界BOSS属性','血'));
$npcc=$bossid;
include("./npc/bossxx.php");
$maxhp=$nmaxhp;

echo "<font color=black>【神兽守卫】</font>"."<br>";
if($hp>=0){ 
echo "<font color=black>体力：$hp/$maxhp</font>"."<br>";
} else {
echo "<font color=black>【神兽守卫】已被敌方国家击败</font>"."<br>";

} 

} elseif($dmid==7){ 
$bossid=5;
include("./ini/boss_ini.php");
$hp=($iniFile->getItem('世界BOSS属性','血'));
$npcc=$bossid;
include("./npc/bossxx.php");
$maxhp=$nmaxhp;

echo "<font color=black>【神兽守卫】</font>"."<br>";
if($hp>=0){ 
echo "<font color=black>体力：$hp/$maxhp</font>"."<br>";
} else {
echo "<font color=black>【神兽守卫】已被敌方国家击败</font>"."<br>";

} 


} elseif($dmid==8){ 
$bossid=6;
include("./ini/boss_ini.php");
$hp=($iniFile->getItem('世界BOSS属性','血'));
$npcc=$bossid;
include("./npc/bossxx.php");
$maxhp=$nmaxhp;
echo "<font color=black>【神兽守卫】</font>"."<br>";
if($hp>=0){ 
echo "<font color=black>体力：$hp/$maxhp</font>"."<br>";
} else {
echo "<font color=black>【神兽守卫】已被敌方国家击败</font>"."<br>";

} 








} else {


} 



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";










echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");











?>