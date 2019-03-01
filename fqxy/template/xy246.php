<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



include("./ini/zt_ini.php");
# 获取一个分类下多个子项的值
$bbrlb=($iniFile->getItem('玩家信息','背包容量'));
include("./wp/bbrl.php");
echo "<font color=black>物品负重：".$bbrla."/".$bbrlb."</font></a>"."<br>";
echo"<font color=black>银两：</font></a>";
include("wp/warehouse.php");
include("./ini/wp_ini.php");



if($cmdd !=122){

$iniFile->updItem('序列', ['初始' => $npcc]);
} else{
$npcc=($iniFile->getItem('序列','初始'));


}



if($npcc ==1){
include("./npcmdx/mdx01.php");//孔方兄买东西


} elseif($npcc ==2){
include("./npcmdx/mdx02.php");//张二妈买东西
} elseif($npcc ==3){
include("./npcmdx/mdx03.php");//杨中顺买东西
} elseif($npcc ==4){
include("./npcmdx/mdx04.php");//卖糖人买东西

} else{



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


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>