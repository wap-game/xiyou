<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用jn.ini是否存在
   
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
echo "<font color=black>我的技能</font>"."<br>";
echo "<font color=black>----------</font>"."<br>";

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
$clj[]=13;
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



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我的状态</font></a>"."<br>";

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