<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


//获取返回战斗页面
include("./ini/npc_ini.php");
$yymid=($iniFile->getItem('怪物2号属性','初始'));
$cljpost=$yymid;
//获取返回战斗页面

if($cljpost==389){
//获取返回战斗页面
include("./ini/pkxx_ini.php");
$pkwjid=($iniFile->getItem('怪物编号','1号'));
} else{



}


echo "<font color=red>战斗场景快捷键设置</font>"."<br>";

include("./ini/zd_ini.php");
# 获取一个分类下所有数据
$jnnid=($iniFile->getCategory('快捷技能id'));
$jnnfl=($iniFile->getCategory('快捷分类'));
$jnnmz=($iniFile->getCategory('快捷名字'));
//将ini值存入数组方便使用
foreach(array_keys($jnnid) as $key){
$keyjnnid[]=$jnnid[$key];
}
foreach(array_keys($jnnfl) as $key){
$keyjnnfl[]=$jnnfl[$key];
}
foreach(array_keys($jnnmz) as $key){
$keyjnnmz[]=$jnnmz[$key];
}
$jnid1=$keyjnnid[1];
$jnid2=$keyjnnid[2];
$jnid3=$keyjnnid[3];
$jnid4=$keyjnnid[4];
$jnid5=$keyjnnid[5];
$jnid6=$keyjnnid[6];
$jnid7=$keyjnnid[7];
$jnid8=$keyjnnid[8];
$jnid9=$keyjnnid[9];


$jnfl1=$keyjnnfl[1];
$jnfl2=$keyjnnfl[2];
$jnfl3=$keyjnnfl[3];
$jnfl4=$keyjnnfl[4];
$jnfl5=$keyjnnfl[5];
$jnfl6=$keyjnnfl[6];
$jnfl7=$keyjnnfl[7];
$jnfl8=$keyjnnfl[8];
$jnfl9=$keyjnnfl[9];


$jnmz1=$keyjnnmz[1];
$jnmz2=$keyjnnmz[2];
$jnmz3=$keyjnnmz[3];
$jnmz4=$keyjnnmz[4];
$jnmz5=$keyjnnmz[5];
$jnmz6=$keyjnnmz[6];
$jnmz7=$keyjnnmz[7];
$jnmz8=$keyjnnmz[8];
$jnmz9=$keyjnnmz[9];


$jnfl=$jnfl1;
$jnid=$jnid1;
$jnnamex=$jnmz1;
$jn=1;
include("./wj/jnxx1.php");

$jnfl=$jnfl2;
$jnid=$jnid2;
$jnnamex=$jnmz2;
$jn=2;
include("./wj/jnxx1.php");


$jnfl=$jnfl3;
$jnid=$jnid3;
$jnnamex=$jnmz3;
$jn=3;
include("./wj/jnxx1.php");


$jnfl=$jnfl4;
$jnid=$jnid4;
$jnnamex=$jnmz4;
$jn=4;
include("./wj/jnxx1.php");

$jnfl=$jnfl5;
$jnid=$jnid5;
$jnnamex=$jnmz5;
$jn=5;
include("./wj/jnxx1.php");

$jnfl=$jnfl6;
$jnid=$jnid6;
$jnnamex=$jnmz6;
$jn=6;
include("./wj/jnxx1.php");

$jnfl=$jnfl7;
$jnid=$jnid7;
$jnnamex=$jnmz7;
$jn=7;
include("./wj/jnxx1.php");

$jnfl=$jnfl8;
$jnid=$jnid8;
$jnnamex=$jnmz8;
$jn=8;
include("./wj/jnxx1.php");

$jnfl=$jnfl9;
$jnid=$jnid9;
$jnnamex=$jnmz9;
$jn=9;
include("./wj/jnxx1.php");
if($cljpost==389){

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=$cljpost;
$npc[]=$pkwjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

} else{

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=$cljpost;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

}

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");
} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>