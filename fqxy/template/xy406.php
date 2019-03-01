<?php




echo "<font color=red>小轩西游攻略-装备篇</font>"."<br>";
echo "<font color=black>小轩西游共有3个层次的装备：1.新手套装；2.师门套装；3.幻想套装</font>"."<br>";
echo "<font color=black>1.新手套装：新手套装即〖玄冰套装〗，1级可用，不能升级。</font>"."<br>";
echo "<font color=black>2.师门套装：各师门打造，60级可用，可以升级，十字张果老处传送至相应的门派。</font>"."<br>";
echo "<font color=black>（1）将军府：【白虎套装】在将军府白发老人（装备打造）处打造。</font>"."<br>";
echo "<font color=black>（2）龙宫：【龙鳞套装】在龙宫龟八斗（装备打造）处打造。</font>"."<br>";
echo "<font color=black>（3）月宫：【碧海套装】在月宫月宫管家麻姑（装备打造）处打造。</font>"."<br>";
echo "<font color=black>（5）普陀山：【伏虎套装】在普陀山惠岸行者（装备打造）处打造。</font>"."<br>";
echo "<font color=black>3.幻想套装：【幻想套装】由充值活动获得（详见游戏首页充值奖励），各师门通用，50级可穿戴，可以升级。</font>"."<br>";
echo "<font color=black>4.幻想婚饰：十字张果老处传送至月宫再往左边走一步。</font>"."<br>";
echo "<font color=black>5.法宝装备：十字张果老处传送至天宫再往右边走一步。</font>"."<br>";


echo "<font color=black>*装备升级方法：状态-装备-相应要升级的装备-装备升级-按提示准备相应的材料升级-确定升级。</font>"."<br>";
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