<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//ini文件名字
$inina="gswp.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsl=($iniFile->getItem('物品数量',$npcc));








///////////////////////////丢弃数量大于1的物品/////////////////////////////
if($wpsl>1){
	
//调用物品信息
include("./wp/wpxx.php");
include("npcc/gsxjwp01.php");





///////////////////////////丢弃数量等于1的物品/////////////////////////////

} elseif($wpsl==1){  

$sl=1;
$wpsl=1;
$sll=1;
//调用物品信息
include("./wp/wpxx.php");


include("npcc/gsxjwp02.php");
include("template/xy219.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

///////////////////////////丢弃数量等于1的物品/////////////////////////////







} else{

echo "<font color=red>该物品已被买走了！！</font>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=236;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
} 



























} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>