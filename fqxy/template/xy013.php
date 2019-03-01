<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用jn.ini是否存在
 include("./ini/jn_ini.php");


//ini文件名字
$inina="jn.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

$jnid=$npcc;
# 获取一个分类下某个子项的值
$ujndj=($iniFile->getItem('技能等级',$jnid));

$jn=$npcc;

//技能伤害范围
if($jn ==1){
$shh=$ujndj*100-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;

} elseif($jn ==2){
$shh=$ujndj*150-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;


} elseif($jn ==4){
$shh=$ujndj*200-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;


} elseif($jn ==5){
$shh=$ujndj*300-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;

} elseif($jn ==6){
$shh=$ujndj*300-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;


} elseif($jn ==7){
$shh=$ujndj*300-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;

} elseif($jn ==8){
$shh=$ujndj*300-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;


} elseif($jn ==9){
$shh=$ujndj*300-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;

} elseif($jn ==10){
$shh=$ujndj*300-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;

} elseif($jn ==11){
$shh=$ujndj*300-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;

} elseif($jn ==12){
$shh=$ujndj*300-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;
	
	
} elseif($jn ==13){
$shh=$ujndj*300-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;

} elseif($jn ==14){
$shh=$ujndj*300-$ujndj*3+$ujndj;
$jnsh = ceil(($shh)/ 1.3);
$maxjnsh=$shh;	
	
	
} else{
$jnsh = 0;
$maxjnsh=0;
}


$jnidd=$npcc;
//调用技能信息
include("./wp/jnxx.php");

echo "<font color=red>".$jnmz."</font>"."<br>";
echo "<font color=black>等级:".$ujndj."级</font>"."<br>";
echo "<font color=black>描述:</font>".$jnms."<br>";

if($jnsh >=1){

echo "<font color=black>伤害:</font>".$jnsh."-".$maxjnsh."点</font>"."<br>";

} else{

}

if($jnid==3||$jnid==15){

} else{

echo "<font color=black>升级".$jnmz."(后期开放)"."</font>"."<br>";

}






//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=12;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我的技能</font></a>"."<br>";


echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");
} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>