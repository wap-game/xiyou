<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	//获取返回战斗页面
include("./ini/npc_ini.php");
$yymid=($iniFile->getItem('怪物2号属性','初始'));
$cljpost=$yymid;


if($cljpost==389){
//获取返回战斗页面
include("./ini/pkxx_ini.php");
$pkwjid=($iniFile->getItem('怪物编号','1号'));
} else{



}

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=16;
$npc[]=0;


include("./ini/zd_ini.php");
$iniFile->updItem('快捷设置', ['初始' => $npcc]);





echo "<font color=black>技能|</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>药品</font></a>"."<br>";
echo "<font color=black>请选择指定的物品作为快捷键以便在战斗中直接使用</font>"."<br>";


include("./ini/jn_ini.php");

# 获取一个分类下所有数据
$jnnmz=($iniFile->getCategory('技能名字'));
# 获取一个分类下所有数据
$jnnid=($iniFile->getCategory('技能id'));

# 获取一个分类下所有数据
$jnndj=($iniFile->getCategory('技能等级'));
$m=count($jnnmz,0)-1; 

//将ini值存入数组方便使用
foreach(array_keys($jnnmz) as $key){
$keyjnnmz[]=$jnnmz[$key];
}
//将ini值存入数组方便使用
foreach(array_keys($jnnid) as $key){
$keyjnnid[]=$jnnid[$key];
}
//将ini值存入数组方便使用
foreach(array_keys($jnndj) as $key){
$keyjnndj[]=$jnndj[$key];
}


if($m>0){


$i=0;
for($d=0;$d<$m;$d++){
$i=$i+1;

$xxid=$keyjnnid[$i];
$clname=$keyjnnmz[$i];
$cldj=$keyjnndj[$i];
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=17;
$npc[]=$xxid;
echo "<font color=black>".$i.".</font>";


if($xxid==3||$xxid==15){

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$clname."</font></a>"."</br>";



} else{

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$clname."（".$cldj."级）</font></a>"."</br>";



}







}

} else{



echo "<font color=black>你还没有学会任何技能</font>"."<br>";

}

echo "<font color=black>----------</font>"."<br>";









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