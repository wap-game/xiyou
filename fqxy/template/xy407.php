<?php










echo "<font color=black>小轩西游攻略-副本篇</font>"."<br>";
echo "<font color=black>1.小轩西游目前已开通的副本有10个，分别是【冰晶塔】、【变异竹林】、【白骨陵墓】、【枉死城】、【水帘洞】、【波月洞】、【老君炉】、【压龙洞】、【莲花洞】、【斩妖台】；</font>"."<br>";
echo "<font color=black>2.每个副本分别设有4个难度：【普通】、【困难】、【梦魇】、【地狱】；难度依次增大，相应的奖励亦依次提高，副本材料掉落的几率越高。</font>"."<br>";
echo "<font color=black>3.玩法：使用腾云符（长安十字往左在上的三联书店处购买）传送到相应副本（【冰晶塔】需要在冰晶塔守卫处进入），领取对应的副本任务，进入副本击杀boss（VIP用户可以通过【副本如意传送门】传送至boss处），击杀完所有boss后回到副本领取页面提交任务，即可获得大量经验及银两奖励。</font>"."<br>";
echo "<font color=black>4.击杀boss会掉落〖百年魔珠〗、副本材料、宝箱（在英雄大厅用【英雄牌】兑换〖万能钥匙〗后可开启）、各级水晶宝石、声望卷等奖励。</font>"."<br>";
echo "<font color=black>5.各大副本材料掉落情况：</font>"."<br>";


$img='pic/gl/pic1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	

echo "<br>";	



echo "<font color=red>PS：以上攻略来自玩家：LoKC（10000032）提供</font>"."<br>";
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<font color=black></font>"."<br>";
echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");



?>