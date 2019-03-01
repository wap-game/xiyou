<?php



echo "<font color=red>【幸运大富翁】玩法说明</font>"."<br>";
echo "<font color=black>1.幸运大富翁是一种古老的玩法。游戏场景是一栋有1000层楼的房子。规则是，一开始游戏的时候，你的位置是1楼，你每次可以花费一个幸运金币摇一颗骰子，摇到几点就可以上几层，当然也可以放弃当前摇的点数重新摇，直到摇到你希望的点数为止</font>"."<br>";
echo "<font color=black>2.在一定的机缘巧合下会惊扰到大富翁从而产生10-300点爆点（百分之五的概率）</font>"."<br>";
echo "<font color=black>3.当你上到一些特定的层数时，将可以得到奖励：</font>"."<br>";
																															
			
	
echo "<font color=black>10楼：〖银星升星符〗x1〖碎银块〗x5〖云梯石〗x1〖护身符〗x5</font>"."<br>";//30
echo "<font color=black>20楼：〖金星升星符〗x1〖荣誉宝石包〗（2个）〖云梯石〗x1〖护身符〗x5</font>"."<br>";
echo "<font color=black>50楼：〖钻星升星符〗x1〖冠军宝石包〗（1个）〖云梯石〗x2〖护身符〗x5</font>"."<br>";
echo "<font color=black>60楼：〖陨星升星符〗x1〖王者宝石包〗（1个）〖云梯石〗x2〖护身符〗x5</font>"."<br>";
echo "<font color=black>80楼：【金秋的思念】x10〖皇者宝石包〗（1个）〖云梯石〗x3〖护身符〗x5</font>"."<br>";
echo "<font color=black>100楼：〖时装契约〗x10〖时装碎片〗x10〖云梯石〗x3〖护身符〗x5</font>"."<br>";
echo "<font color=black>150楼：〖诛仙令〗〖银锭〗x1〖云梯石〗x3〖护身符〗x5</font>"."<br>";
echo "<font color=black>200楼：〖1亿修炼经验丹〗x5【占星秘典】x20〖云梯石〗x3〖护身符〗x5</font>"."<br>";
echo "<font color=black>300楼：〖5亿修炼经验丹〗x2【占星秘典】x50〖云梯石〗x3〖护身符〗x5</font>"."<br>";
echo "<font color=black>400楼：〖10亿修炼经验丹〗x2〖双倍掉宝符〗x1〖云梯石〗x4〖护身符〗x5</font>"."<br>";
echo "<font color=black>500楼：〖10亿修炼经验丹〗x5〖四倍掉宝符〗x1〖云梯石〗x4〖护身符〗x5</font>"."<br>";
echo "<font color=black>600楼：〖10亿修炼经验丹〗x7〖圣贤宝石包〗（1个）〖仙の陨升星符〗x1〖云梯石〗x4〖护身符〗x5</font>"."<br>";
echo "<font color=black>700楼：〖10亿修炼经验丹〗x8〖圣贤宝石包〗（3个）〖仙の陨升星符〗x2〖云梯石〗x4〖护身符〗x5</font>"."<br>";
echo "<font color=black>800楼：〖10亿修炼经验丹〗x9〖圣贤宝石包〗（8个）〖金块〗x1〖云梯石〗x5〖护身符〗x5</font>"."<br>";
echo "<font color=black>900楼：〖10亿修炼经验丹〗x10〖八倍掉宝符〗x1〖如意の称号宝箱〗x1〖金块〗x2〖云梯石〗x5〖护身符〗x5</font>"."<br>";
echo "<font color=black>1000楼：〖10亿修炼经验丹〗x15〖八倍掉宝符〗x1〖如意の称号宝箱〗x2〖金块〗x3〖云梯石〗x10〖护身符〗x5〖至尊宝石包〗随机1-3个</font>"."<br>";

	
	
echo "<br>"; 	



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=626;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";


?>