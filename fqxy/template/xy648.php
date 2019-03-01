<?php
echo "<font color=black>尊贵VIP详细介绍：</font>"."<br>";
echo "<font color=black>尊贵VIP是小轩西游专属提升实力的重要武器享受以下特权</font>"."<br>";
echo "<font color=black>1.人物状态以及被查看状态动态的专属尊贵vip图标</font>"."<br>";
echo "<font color=black>2.效果：</font>";
$img='pic/vip/zgvip.gif';
echo '<img src="'.$img.' "alt="图片"/>';
echo "<br>";	
echo "<br>";	
echo "<font color=black>3.属性加成攻防元素冰火雷+200，hp+1000w，攻击+500w，魔攻+500w，防御+500w（需要开启后加成）</font>"."<br>";
echo "<font color=red>4.获取方式1：联系GM开通50元月卡,150元季卡，300元半年卡，500元年卡</font>"."<br>";
echo "<font color=red>5.获取方式2：每日采花大盗排名前三领取兑换</font>"."<br>";






echo "</br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=60;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

?>