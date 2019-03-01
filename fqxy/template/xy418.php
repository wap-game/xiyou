<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
echo "<font color=red>小轩西游福利中心</font>"."<br>";	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=307;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>每日福利</font></a>";

echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=408;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>每日活跃</font></a>";

echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=409;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>每日签到</font></a>";

echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=410;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>每日宣传</font></a>"."<br>";

echo "<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=417;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>黄金贵族</font></a>";

echo "<font color=black>|</font>";	

echo "<font color=black>铂金贵族|</font>";	


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=419;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>钻石皇族</font></a>";

echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=420;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>至尊皇族</font></a>"."<br>";

		
	

include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','63'));

if($hdcs >=1){
echo "<font color=red>剩余:".$hdcs."次（每天/次）</font>"."<br>";
echo "<br>";
echo "<font color=red>【铂金贵族】-</font>";	


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=63;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【领取】</font></a>"."<br>";


echo "<br>";

} else{
echo "<font color=red>亲！【铂金贵族】已到期，或者未开通（在游戏左下角充20元联系GM并告知开通月卡）</font><br>";

}
echo "<font color=black>介绍：玩家开通【铂金贵族】后每日领取〖金豆〗x6，〖铂金贵族宝箱〗x1</font><br>";
echo "<font color=black>【铂金贵族】20元/30次（单购,不计算vip积分）</font><br>";
echo "<font color=black>〖铂金贵族宝箱〗（随机必得三四五级石头x5）</font><br>";
echo "<font color=black>注：各类贵族可以一起开通奖励更丰厚</font><br>";	
	
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