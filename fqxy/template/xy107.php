<?php





//页面值
$q5=107;



$ckid=$npcc;





if($ckid ==1){

echo "<font color=black>古典神话类手机网游，自动任务，自动打怪，丰富的装备升级系统，手持神兵利器，身骑五爪金龙，携爱行走西游路！</font><br>";
} elseif($ckid ==2){
echo "<font color=black>小轩西游简便的操作让你游戏更加的轻松！</font><br>";

} elseif($ckid ==3){
echo "<font color=black>小轩西游有五大门派，将军府、方寸山、龙宫、月宫、普陀山，都有各自特有的技能和天赋！</font><br>";


} elseif($ckid ==4){
echo "<font color=black>小轩西游以长安城为中心城市，不但有天宫、地府、十八层地狱、水帘洞等普通区域，也有宝象国、乌鸡国、车迟国、女儿国、祭赛国、朱紫国等取经路过的区域，还有非常特色的副本、挑战、阵法区域，特殊区域中的恶魔广场、洞天福地更是万人云集之处！</font><br>";

} elseif($ckid ==5){
echo "<font color=black>小轩西游中有各种稀有装备、套装、结婚饰品、法宝、坐骑，丰富的装备合成、升级、打孔镶嵌等系统让你惊喜不断！</font><br>";

} elseif($ckid ==6){
echo "<font color=black>小轩西游中的道具类型多种多样，自动回复的药品、记录地点传送的卷轴、召唤神仙一起组队的符咒、多倍经验掉宝攻击防御的祝福道具、永久增加属性的仙丹，让你目不暇接！</font><br>";

} elseif($ckid ==7){
echo "<font color=black>小轩西游的任务丰富无比，主线剧情，转职任务，区域任务，每日任务，隐藏任务，护送任务，挑战任务，副本任务，答题任务等各种任务类型让你不断有新鲜感受！</font><br>";

} elseif($ckid ==8){
echo "<font color=black>小轩西游除了普通的打怪、PK等战斗外，还有大型的攻城战、全服国家帮派争霸大赛、全服个人天下争霸比武擂台等多种竞技赛事！</font><br>";

} elseif($ckid ==9){
echo "<font color=black>小轩西游内测说明</font><br>";
echo "<br>";
echo "<font color=black>1.经过了一段时间的开发小轩西游终于如期与大家见面了，人无完人游戏中可能或多或少存在一些
BUG，相信一定逃不过大家的火眼精金的！</font><br>";
echo "<br>";
echo "<font color=black>2.参与内测人员不要只顾着玩，一定要善于发现BUG，为游戏正常上线奠定坚实的基础，提供未知的BUG待游戏正常上线后按量奖励金豆</font><br>";
echo "<br>";
echo "<font color=black>3.另外游戏内测期间不提供任何游戏道具为了测试游戏的稳定性，充值系统采用小轩独家编写的自助充值暂时只能用支付宝
，充值的实际价格为正常价格的100分之1，也是为了测试充值系统的重要性，当然内测充值的按照内测充值的实际金额返还在游戏上线后的金额</font><br>";
echo "<br>";
echo "<font color=black>4.游戏战斗技能还在紧张制作与运算中（并不算bug，只能使用挥砍和排山倒海）</font><br>";
echo "<br>";
echo "<font color=black>5.游戏此版本并不代表终极版，更新内容需要与广大西游爱好者共勉！谢谢你们的支持</font><br>";
echo "<br>";
echo "<font color=black>6.感谢广大新老玩家的支持特此这次内测提供有ID号卡一张（6位极品豹子号仅发放给内测充值第一的玩家）当然游戏正常上线后通过充值活动也能获得极品ID号卡</font><br>";

echo "<br>";

} elseif($ckid ==10){
echo "<font color=black>小轩西游公测活动如下：</font><br>";
echo "<font color=red>冲榜活动（6.23-7.1晚上18：00结束）奖励统计完毕后发放</font><br>";
echo "<font color=black>血，攻，魔攻，防御，等级，充值，六大排行榜排名奖励</font><br>";


echo "<font color=red>---------------充值榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=432;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖威震幻影〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=147;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖属性之王〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=462;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（666666）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=432;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖威震幻影〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x5，</font>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x300，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x3，</font>";



echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x100，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>第10名以外</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x20，</font>";

echo "<br>";

echo "<font color=red>---------------充值榜-------------</font><br>";









echo "<font color=red>---------------血榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=428;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖风度偏偏〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x500，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=475;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（188888）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x300，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x5，</font>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x100，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x3，</font>";



echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x40，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------血榜-------------</font><br>";

echo "<font color=red>---------------攻击榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=430;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖谁与争峰〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x500，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=476;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（199999）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x300，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x5，</font>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x100，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x3，</font>";



echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x40，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------攻击榜-------------</font><br>";



echo "<font color=red>---------------魔攻榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=429;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖至尊战神〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x500，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=474;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（177777）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x300，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x5，</font>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x100，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x3，</font>";



echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x40，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------魔攻榜-------------</font><br>";



echo "<font color=red>---------------防御榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=431;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖永不放弃〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x500，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=473;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（166666）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x300，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x5，</font>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x100，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x3，</font>";



echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x40，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------防御榜-------------</font><br>";




echo "<font color=red>---------------等级榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=148;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖西游之星〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x500，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=472;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（155555）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=152;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖富豪〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x300，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x5，</font>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=151;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖小富豪〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x100，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x3，</font>";



echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x40，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖瞌睡虫〗（典藏版）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------等级榜-------------</font><br>";

} elseif($ckid ==11){
	
echo "<font color=black>充值奖励概要</font>";	
echo "<font color=red>仅限公测期间有效（除【幻想套】）</font><br>";
echo "<br>";
echo "<font color=black>1.充值消费赠送绝版宠物〖瞌睡虫〗（典藏版）祝你早日获得五变宠物。50元/1只，100元/3只，200元/10只，500元/35只，1000元/80只，2000元/200只</font><br>";
echo "<br>";
echo "<font color=black>2.充值消费赠送独家装备【幻想套】祝你在西游路上杀妖除魔。100元【幻想武器包】x1，200元【幻想防具包】x1，500元【幻想首饰包】x1</font><br>";	
echo "<br>";
echo "<font color=black>3.充值消费赠送〖荣誉宝石〗祝你在西游路上杀妖除魔。100元〖荣誉宝石包〗（2个），200元〖荣誉宝石包〗（5个），500元〖荣誉宝石包〗（15个），1000元〖荣誉宝石包〗（40个），2000元〖荣誉宝石包〗（100个）</font><br>";
echo "<br>";
echo "<font color=black>4.充值消费赠送〖金星升星符〗祝你在西游路上杀妖除魔。100元〖金星升星符〗x2，200元〖金星升星符〗x5，500元〖金星升星符〗x15，1000元〖金星升星符〗x40，2000元〖金星升星符〗x100</font><br>";
echo "<br>";
echo "<font color=black>5.充值消费赠送4孔〖强化打孔器〗祝你在西游路上杀妖除魔。50元〖强化打孔器〗x3，100元〖强化打孔器〗x7，200元〖强化打孔器〗x30，1000元〖强化打孔器〗x70，2000元〖强化打孔器〗x200</font><br>";
echo "<br>";
echo "<font color=black>6.充值消费赠送5孔〖强化打孔器〗祝你在西游路上杀妖除魔。50元〖究极打孔器〗x3，100元〖究极打孔器〗x7，200元〖究极打孔器〗x30，1000元〖究极打孔器〗x70，2000元〖究极打孔器〗x200</font><br>";
				
	
	
	echo "<br>";
	
} elseif($ckid ==12){
echo "<font color=black>小轩西游推广计划</font>";	
echo "<font color=red>此活动长期有效</font><br>";
echo "<font color=black>1.每日在其他WAP游戏群发布宣传语截图并且到管理员，得【西游宣传礼包】x1</font><br>";
echo "<font color=black>2.邀请新人进群并且注册游戏，邀请人得【西游邀请礼包】x1，被邀请人得【西游新人礼包】x1</font><br>";
echo "<font color=red>备注：必须是真实有效的玩家！严禁作弊，如发现作弊者追回非法所得并且进行限制时间封号，严重的不排除永久封号，不要抱有侥幸心理</font><br>";

echo "<br>";
echo "<br>";


echo "<font color=red>我不断的寻找，有你的世界在哪儿</font><br>";
echo "<font color=red>独立的服务器全新的西游，在这儿等你归来</font><br>";
echo "<font color=red>原汁原味的幻想西游，全新的任务，pk，国战，宠物，住宅等等</font><br>";
echo "<font color=red>更新内容一切以大部分玩家为主GM为辅，只有想不到没有做不到</font><br>";
echo "<font color=red>游戏群：54665469</font><br>";
echo "<font color=red>提示：如果网址不能进请加群联系广大西游爱好者</font><br>";
echo "<font color=red>游戏社区地址：47.106.236.180</font><br>";
echo "<font color=red>更多精彩尽在小轩娱乐游戏社区47.106.236.180</font><br>";

} elseif($ckid ==13){

echo "<font color=black>小轩西参与内测奖励</font><br>";


echo "<font color=black>正在紧张统计中明日发放！！</font><br>";


} elseif($ckid ==14){

echo "<font color=black>小轩西游开区由下面三位大佬的鼎力相助（小轩提供游戏技术支持）</font><br>";
echo "<font color=red>【小果】</font>";
echo "<font color=black>|</font>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=107;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>姝菟</font></a>";
echo "<font color=black>|</font>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=107;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>时尚网谜</font></a><br>";


$img='pic/wjpic/xg.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	
echo "<br>";	







echo "<br>";
} elseif($ckid ==15){

echo "<font color=black>小轩西游开区由下面三位大佬的鼎力相助（小轩提供游戏技术支持）</font><br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=107;
$npc[]=14;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小果】</font></a>";
echo "<font color=black>|</font>";
echo "<font color=red>姝菟</font>";
echo "<font color=black>|</font>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=107;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>时尚网谜</font></a><br>";

$img='pic/wjpic/st.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	
echo "<br>";	




echo "<br>";

} elseif($ckid ==16){

echo "<font color=black>小轩西游开区由下面三位大佬的鼎力相助（小轩提供游戏技术支持）</font><br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=107;
$npc[]=14;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小果】</font></a>";
echo "<font color=black>|</font>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=107;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>姝菟</font></a>";
echo "<font color=black>|</font>";
echo "<font color=red>时尚网谜</font><br>";


$img='pic/wjpic/sswm.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	
echo "<br>";	




} elseif($ckid ==17){

echo "<font color=black>小轩西游更新计划列表</font><br>";

echo "<font color=red>以下编写任务一个个来，还有就是不要没事给我找事做（明明是没问题就不要来烦我--影响我编写进度，什么事都干不了光为你服务了，有问题你提供给我我会及时处理，）</font><br>";
echo "<br>";
echo "<font color=black>1.福利界面每日-活跃任务（每天奖励多多）</font><br>";
echo "<font color=black>2.增加夏日清凉一夏-（暑期活动）</font><br>";
echo "<font color=black>3.通天塔-（看看自己的实力能到几层，暂时编写定为10层）</font><br>";
echo "<font color=black>4.人物增加修炼功能-（有玩家反应前期开局太难，贫血，有了这个之后祝你一臂之力）</font><br>";

echo "<br>";

} elseif($ckid ==18){
	
	
echo "<font color=red>活动时间2018.7.3-2018.7.10晚8点</font><br>";

echo "<font color=black>伴随着炎炎的夏日，万恶的班主任带来了沉甸甸的作业，纳尼？还有作业淡定淡定如果不会就去请教小隔壁班幼儿园的小朋友哈哈～</font><br>";
echo "<font color=red>玩法说明：十字往上万恶的班主任来到长安，每天玩家可以在班主任那里答题10次可获得才子印记或者碎片甚至图纸，老夫子处兑换奖励，各大副本掉落印记或者碎片甚至图纸</font><br>";

echo "<font color=black>1.充值赠送幻想套装单次100武器包，200防具包，500全套（如果已经有全套或者是不想要可补发为1件10个重置令牌）</font><br>";
echo "<font color=black>2.每充值10元赠送副本重置令x1，如果期间活动时间内满100送副本重置令x5，满200送副本重置令x15，满500送副本重置令x50</font><br>";
echo "<font color=red>响应玩家心声新增奖励：如果期间活动时间内满50送〖金星升星符〗x3，满100送〖金星升星符〗x8，满200送〖金星升星符〗x20，满500送〖金星升星符〗x65（不累计只算单次）</font><br>";
echo "<font color=black>3.老夫子，与万恶的班主任来到长安快去赢取他们的奖励吧</font><br>";	
echo "<font color=black>4.老夫子的试炼：活动期间内第一个拥有比翼套装的奖励</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=507;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖武文双全〗</font></a>";
echo "<font color=black>称号，豹子ID号卡一张豆子1000</font><br>";	



echo "<font color=black>5.老夫子的试炼：活动期间内第二个拥有比翼套装的奖励</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=508;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖文状元〗</font></a>";
echo "<font color=black>称号，前单后豹子ID号卡一张豆子400</font><br>";	








echo "<font color=black>6.老夫子的试炼：活动期间内第三个拥有比翼套装的奖励</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=509;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖三号学生〗</font></a>";
echo "<font color=black>称号，前单后豹子ID号卡一张豆子400</font><br>";	






echo "<font color=black>7.以上试炼成功者需及时联系GM记录，或者在群里与大家和GM分享</font><br>";		
echo "<font color=red>PS:老夫子的试炼:如果都没有完成的，可适当延迟活动结束时间理应不超过三天也就是7.13日前，另外如果在延时时间内有玩家完成了应算当天凌晨前为活动结束时间</font><br>";
	
	
	
	
} elseif($ckid ==19){
	
echo "<font color=red>活动时间2018.7.14-2018.7.24晚8点</font><br>";
echo "<font color=black>1.娱乐界面新增疯狂摇点分两类黄金和铂金场奖池分别为金豆奖池和银两初始为1000豆，2000豆，50亿，100亿（不定期开启不固定时间）</font><br>";		
echo "<font color=black>2.暑期活动第二波次集齐“【清】【凉】【一】【夏】”四字可在玄武大街唐三藏处兑换【清凉宝箱】宝箱随机开出【1万法宝经验】，【1万西游声望】（小轩西游各个副本和通天塔均有掉落）</font><br>";		
echo "<font color=black>3.活动期间充值赠送每满10元〖万能字〗x10</font><br>";


echo "<font color=black>4.充值称号大放送活动期间内结束后送</font><br>";	

	
	
	echo "<font color=black>第一名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=554;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖一掷千金〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=555;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖至尊红颜〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=556;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖望门贵族〗</font></a>";

	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=557;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖倾城伊人〗</font></a>";
echo "<br>";			
echo "<font color=black>第二名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=555;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖至尊红颜〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=556;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖望门贵族〗</font></a>";

	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=557;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖倾城伊人〗</font></a>";
echo "<br>";					
echo "<font color=black>第三名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=556;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖望门贵族〗</font></a>";
	
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=557;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖倾城伊人〗</font></a>";
echo "<br>";	
	
echo "<font color=black>第4-10名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=557;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖倾城伊人〗</font></a>";
echo "<br>";	
	
	
	
	
	
	
	
	
	
	
echo "<font color=black>5.摇点称号大放送活动期间内结束后送</font><br>";	

echo "<font color=black>注意只针对铂金摇点（金豆池）</font><br>";	
	
echo "<font color=black>第一名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=552;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖全服公敌〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=553;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖至尊天圣〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=551;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖女神之恋〗</font></a>";
echo "<br>";				
echo "<font color=black>第二名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=553;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖至尊天圣〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=551;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖女神之恋〗</font></a>";
echo "<br>";					
echo "<font color=black>第三名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=551;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖女神之恋〗</font></a>";
echo "<br>";		
	
echo "<font color=black>第4-10名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=551;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖女神之恋〗</font></a>";
echo "<br>";	

echo "<font color=black>6.每消费20送〖冠军宝石〗x1，额外加送满100送〖冠军宝石〗x3,200送〖冠军宝石〗x8,500送〖冠军宝石〗x30</font><br>";	
echo "<font color=red>〖冠军宝石〗属性</font><br>";	
echo "<font color=black>描述：镶嵌到装备上增加攻击和魔攻10000，防御7000，HP13500！！</font><br>";	
echo "<font color=black>镶嵌血量：13500</font><br>";	
echo "<font color=black>镶嵌攻击：7693-10000</font><br>";	
echo "<font color=black>镶嵌魔攻：7693-10000</font><br>";	

echo "<font color=black>镶嵌魔攻：镶嵌防御：5385-7000</font><br>";	


echo "<br>";		
	

	
	

} elseif($ckid ==20){
	
echo "<font color=red>活动时间2018.7.27-2018.8.3——0点结束</font><br>";
echo "<font color=black>1.疯狂摇点（第二期）分两类黄金和铂金场奖池分别为金豆奖池和银两初始为500豆，1000豆，25亿，50亿（不定期开启不固定时间）</font><br>";		
echo "<br>";
echo "<font color=black>2.暑期活动第三波次每个“【喜鹊蛋】”有一定概率孵化出【小喜鹊】，【喜鹊蛋】【小喜鹊】都能兑换超值的物品哦（小轩西游各个副本和通天塔均有掉落）</font><br>";		
echo "<br>";
echo "<font color=black>3.活动期间单次20元以上赠送</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=586;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖舞星仙姬〗</font></a>";
echo "<font color=black>超值称号一个（每个号限定一次，及时发送）</font>";
echo "<br>";
echo "<br>";
echo "<font color=black>4.活动期间单笔充值金额满10元【喜鹊蛋】x15,20元【喜鹊蛋】x45,50元【喜鹊蛋】x300,100元【喜鹊蛋】x700,200元【喜鹊蛋】x1500,500元【喜鹊蛋】x4500,1000元【喜鹊蛋】x12000,2000元【喜鹊蛋】x40000</font><br>";	

echo "<br>";
echo "<font color=black>5.牛郎织女的试炼：活动期间内拥有179级典藏或者靛蓝套装的奖励</font>";
echo "<br>";
echo "<font color=black>第一名拥有典藏或者靛蓝套：奖励〖金豆〗x888</font>";
echo "<br>";
echo "<font color=black>第二名拥有典藏或者靛蓝套：奖励〖金豆〗x388</font>";
echo "<br>";
echo "<font color=black>第三名拥有典藏或者靛蓝套：奖励〖金豆〗x88</font>";
echo "<br>";
echo "<font color=red>备注：拥有任意一套的需要截图联系GM备注（如拥有典藏或者靛蓝第一名就往下推）</font><br>";	


echo "<br>";
echo "<font color=black>6.钻符大放送：单次满100〖钻符〗x3，满200〖钻符〗x10，满500〖钻符〗x30，满1000〖钻符〗x70，满2000〖钻符〗x200</font><br>";	
echo "<br>";
echo "<font color=black>7.金符大放送：单次满100〖金符〗x10，满200〖金符〗x30，满500〖金符〗x70，满1000〖金符〗x200，满2000〖金符〗x500</font><br>";	
echo "<br>";
echo "<font color=black>8.宝石大放送：单次满100〖王者宝石〗x1，满200〖王者宝石〗x3，满500〖王者宝石〗x10，满1000〖王者宝石〗x30，满2000〖王者宝石〗x70</font><br>";	
echo "<br>";
echo "<font color=red>〖王者宝石〗属性</font><br>";	
echo "<font color=black>描述：镶嵌到装备上增加攻击和魔攻18000，防御18000，HP40000！！</font><br>";	
echo "<br>";   


echo "<font color=black>9.贵族卡大放送（单次充值满50送【黄金贵族】满200送【黄金贵族】【铂金贵族】满300送【黄金贵族】【铂金贵族】【钻石皇族】满500送【黄金贵族】【铂金贵族】【钻石皇族】【至尊皇族】</font><br>";	
echo "<font color=black>备注：仅限活动期间赠送每人只有一次机会，比如在活动期间充值50了赠送了【黄金贵族】再次充值其他的将不予再次赠送</font><br>";	
echo "<font color=black>备注：具体各项贵族月卡信息参照游戏福利界面</font><br>";	
echo "<br>";
echo "<font color=black>10.2018.7.27-2018.8.3活动期间累计充值称号大放送</font><br>";	
echo "<font color=black>第一名：〖金豆〗x1888</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=580;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下至尊〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=581;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖蓬莱至尊〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=582;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖昆仑至尊〗</font></a>";

echo "<br>";			
echo "<font color=black>第二名：〖金豆〗x1000</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=581;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖蓬莱至尊〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=582;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖昆仑至尊〗</font></a>";
echo "<br>";					
echo "<font color=black>第三名：〖金豆〗x400</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=582;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖昆仑至尊〗</font></a>";
echo "<br>";	
echo "<font color=black>第4-5名：〖金豆〗x200</font>";	
echo "<br>";	
echo "<font color=black>第5-10名：〖金豆〗x100</font>";	
echo "<br>";	
	
	
	echo "<br>";
	
	
	
	
	
echo "<font color=black>11.摇点称号大放送活动期间内结束后送</font><br>";	

echo "<font color=black>注意只针对铂金摇点（金豆池）</font><br>";	
	
echo "<font color=black>第一名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=583;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖名动天下〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=584;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖万法不侵〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=585;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖乾坤唯仙〗</font></a>";
echo "<br>";				
echo "<font color=black>第二名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=584;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖万法不侵〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=585;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖乾坤唯仙〗</font></a>";
echo "<br>";					
echo "<font color=black>第三名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=457;
$npc[]=585;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖乾坤唯仙〗</font></a>";
echo "<br>";		
	
echo "<font color=black>第4名金符x10</font>";	
echo "<br>";	

echo "<font color=black>第5名金符x2</font>";	
echo "<br>";	
	
echo "<font color=black>第6名银符x10</font>";	
echo "<br>";	
	
echo "<font color=black>第7名银符x6</font>";	
echo "<br>";		
echo "<font color=black>第8名银符x3</font>";	
echo "<br>";	

echo "<font color=black>第9名银符x2</font>";	
echo "<br>";	
echo "<font color=black>第10名银符x1</font>";	
echo "<br>";	
	
} elseif($ckid ==21){		
echo "<font color=black>紫霞仙子：我的意中人是个盖世英雄，有一天他会踩着七彩祥云来娶我，我猜中了开头，可是我猜不着这结局……</font><br>";	
echo "<font color=black>紫霞仙子和青霞现在来到了小轩西游，全图副本通天地狱掉落圣衣,祥云,眼泪,紧箍咒可找到紫霞仙子换取月光宝盒</font><br>";	
		
	
echo "<font color=black>至尊宝：曾经有一份真诚的爱情放在我面前，我没有珍惜，等我失去的时候我才后悔莫及，人世间最痛苦的事莫过于此。如果上天能够给我一个再来一次的机会，我会对那个女孩子说三个字：我爱你</font><br>";	

echo "<font color=black>1.金山银山加入许多惊喜。英雄大厅加入更多兑换，增加垃圾材料声望熔炼</font><br>";	
echo "<font color=black>2.139坐骑可以升级为179筋斗云</font><br>";	
echo "<font color=black>3.再此说NO~~终于黄天不负有心人。小轩GM发现了开启五级变异圣品的秘密，还是原来的配方不一样的味道（活动期间充值满1000赠送五级变异圣品猴子，满2000送绝版五级变异圣品麒麟圣祖一只）</font><br>";	

	
echo "<font color=black>4.充值满100送随机麒麟圣祖（绝版）一只（每个ID号仅限1次），不再开启新宠物仅此一次</font><br>";	

echo "<font color=black>5.消费赠送</font><br>";	
echo "<font color=black>充值消费赠送独家装备【幻想套】祝你在西游路上杀妖除魔。100元【幻想武器包】x1，200元【幻想防具包】x1，500元【幻想首饰包】x1（可以折为金豆每件100豆豆）</font><br>";	
echo "<font color=black>千万声望法宝送不停</font><br>";	
echo "<font color=black>100：〖1万西游声望卷轴〗x20〖1万法宝经验卷轴〗x20</font><br>";	
echo "<font color=black>200：〖1万西游声望卷轴〗x50〖1万法宝经验卷轴〗x50</font><br>";	
echo "<font color=black>500：〖1万西游声望卷轴〗x150〖1万法宝经验卷轴〗x150</font><br>";	
echo "<font color=black>1000：〖1万西游声望卷轴〗x400〖1万法宝经验卷轴〗x400</font><br>";	
echo "<font color=black>2000：〖1万西游声望卷轴〗x1000〖1万法宝经验卷轴〗x1000</font><br>";	
		
	
	} elseif($ckid ==22){	
	
	
echo "<font color=black>1.消费赠送</font><br>";	
echo "<font color=black>充值消费赠送独家装备【幻想套】祝你在西游路上杀妖除魔。100元【幻想武器包】x1，200元【幻想防具包】x1，500元【幻想首饰包】x1（可以折为金豆每件100豆豆）</font><br>";	
echo "<font color=black>千万声望法宝送不停</font><br>";	
echo "<font color=black>100：〖1万西游声望卷轴〗x20〖1万法宝经验卷轴〗x20</font><br>";	
echo "<font color=black>200：〖1万西游声望卷轴〗x50〖1万法宝经验卷轴〗x50</font><br>";	
echo "<font color=black>500：〖1万西游声望卷轴〗x150〖1万法宝经验卷轴〗x150</font><br>";	
echo "<font color=black>1000：〖1万西游声望卷轴〗x400〖1万法宝经验卷轴〗x400</font><br>";	
echo "<font color=black>2000：〖1万西游声望卷轴〗x1000〖1万法宝经验卷轴〗x1000</font><br>";	
echo "<br>";	
echo "<font color=black>2.贵族卡大放送（单次充值满50送【黄金贵族】满200送【黄金贵族】【铂金贵族】满300送【黄金贵族】【铂金贵族】【钻石皇族】满500送【黄金贵族】【铂金贵族】【钻石皇族】【至尊皇族】</font><br>";	
echo "<font color=black>备注：仅限活动期间赠送每人只有一次机会，比如在活动期间充值50了赠送了【黄金贵族】再次充值其他的将不予再次赠送</font><br>";	
echo "<font color=black>备注：具体各项贵族月卡信息参照游戏福利界面</font><br>";	
echo "<br>";
echo "<font color=black>3.充值送掉宝，宝石，陨符</font><br>";	
echo "<font color=black>满100送四倍掉宝1张，王者宝石一颗，金符10张</font><br>";	
echo "<font color=black>满200送四倍掉宝3张，王者宝石3颗，金符30张</font><br>";	
echo "<font color=black>满500送四倍掉宝10张，王者宝石10颗，金符20张，钻符5张</font><br>";	
echo "<font color=black>满1000送八倍3张，四倍10张，王者宝石20颗，陨符3张，金符20张，钻符15张</font><br>";	
echo "<font color=black>满2000送八倍10张，四倍20张，王者宝石50颗，陨符10张，，金符50张，钻符35张</font><br>";	
echo "<br>";	


echo "<font color=black>4.充值送宠物练星符</font><br>";	
echo "<font color=black>满100送蓝练星x10</font><br>";	
echo "<font color=black>满200送蓝练星x30</font><br>";	
echo "<font color=black>满500送蓝练星x70</font><br>";	
echo "<font color=black>满1000送蓝练星x150</font><br>";	
echo "<font color=black>满2000送蓝练星x300</font><br>";	
echo "<br>";	
echo "<font color=black>5.七夕充值榜大回馈</font><br>";	
echo "<font color=black>充值第一名：〖金豆〗x10000+称号</font><br>";	
echo "<font color=black>充值第二名：〖金豆〗x4000</font><br>";	
echo "<font color=black>充值第三名：〖金豆〗x1000</font><br>";	
echo "<font color=black>充值第四名：〖金豆〗x700</font><br>";	
echo "<font color=black>充值第五名：〖金豆〗x500</font><br>";	
echo "<font color=black>充值第6-10名：〖金豆〗x300</font><br>";		
echo "<br>";	
echo "<font color=black>6.噬魂套装试炼--拥有噬魂套装后（需要截图发放GM，GM确认后游戏群发红包福利）</font><br>";	
echo "<font color=black>第一名：〖金豆〗x5000</font><br>";	
echo "<font color=black>第二名：〖金豆〗x2000</font><br>";	
echo "<font color=black>第三名：〖金豆〗x1000</font><br>";	
echo "<font color=black>备注：试炼直接发放不用等活动结束</font><br>";	
echo "<br>";



echo "<font color=black>7.七夕活动期间累计充值称号大放送</font><br>";	

echo "<font color=black>第一名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=655;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖登峰造极〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=654;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖富甲天下〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=653;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖灿若星斗〗</font></a>";
echo "<br>";				

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=652;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下第一〗</font></a>";
echo "<br>";	





echo "<font color=black>第二名</font>";	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=654;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖富甲天下〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=653;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖灿若星斗〗</font></a>";
echo "<br>";				

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=652;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下第一〗</font></a>";
echo "<br>";		
	
	
echo "<font color=black>第三名</font>";	
	
	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=653;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖灿若星斗〗</font></a>";
echo "<br>";				

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=652;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下第一〗</font></a>";
	echo "<br>";
echo "<font color=black>第4-10名</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=652;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下第一〗</font></a>";
echo "<br>";	

echo "<font color=red>回馈称号活动期间满50元立即赠送</font>";	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=651;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖传世战神〗</font></a>";
echo "<br>";	
echo "<br>";
echo "<font color=black>8.疯狂摇点第三期开启</font><br>";	

echo "<br>";
echo "<font color=black>9.〖七夕万能字〗疯狂送</font><br>";	
echo "<font color=black>满100送〖七夕万能字〗x500</font><br>";	
echo "<font color=black>满200送〖七夕万能字〗x1500</font><br>";	
echo "<font color=black>满500送〖七夕万能字〗x5000</font><br>";	
echo "<font color=black>满1000送〖七夕万能字〗x15000</font><br>";	
echo "<font color=black>满2000送〖七夕万能字〗x40000</font><br>";	

echo "<br>";






} elseif($ckid ==23){


echo "<font color=red>1.消费赠送</font><br>";	
echo "<font color=black>充值消费赠送独家装备【诛仙套】祝你在西游路上杀妖除魔。100元〖诛仙武器令〗x1，200元〖诛仙盔甲令〗x1，300元〖诛仙头盔令〗x1，300元〖诛仙鞋子令〗x1，400元〖诛仙项链令〗x1，500元〖诛仙手镯令〗x1（可以折为金豆每件200豆豆）</font><br>";	
echo "<font color=red>2.千万声望法宝送不停</font><br>";	
echo "<font color=black>100：〖1万西游声望卷轴〗x20〖1万法宝经验卷轴〗x20</font><br>";	
echo "<font color=black>200：〖1万西游声望卷轴〗x50〖1万法宝经验卷轴〗x50</font><br>";	
echo "<font color=black>500：〖1万西游声望卷轴〗x150〖1万法宝经验卷轴〗x150</font><br>";	
echo "<font color=black>1000：〖1万西游声望卷轴〗x400〖1万法宝经验卷轴〗x400</font><br>";	
echo "<font color=black>2000：〖1万西游声望卷轴〗x1000〖1万法宝经验卷轴〗x1000</font><br>";	
echo "<br>";	
	
echo "<font color=red>3.贵族卡大放送（单次充值满50送【黄金贵族】满200送【黄金贵族】【铂金贵族】满300送【黄金贵族】【铂金贵族】【钻石皇族】满500送【黄金贵族】【铂金贵族】【钻石皇族】【至尊皇族】</font><br>";	
echo "<font color=black>备注：仅限活动期间赠送每人只有一次机会，比如在活动期间充值50了赠送了【黄金贵族】再次充值其他的将不予再次赠送</font><br>";	
echo "<font color=black>备注：具体各项贵族月卡信息参照游戏福利界面</font><br>";	
echo "<br>";
echo "<font color=red>4.充值送掉宝，宝石，陨符</font><br>";	
echo "<font color=black>满100送四倍掉宝1张，皇者宝石1颗，金符10张</font><br>";	
echo "<font color=black>满200送四倍掉宝3张，皇者宝石3颗，金符30张</font><br>";	
echo "<font color=black>满500送四倍掉宝10张，皇者宝石10颗，金符20张，钻符5张</font><br>";	
echo "<font color=black>满1000送八倍3张，四倍10张，皇者宝石20颗，陨符3张，金符20张，钻符15张</font><br>";	
echo "<font color=black>满2000送八倍10张，四倍20张，皇者宝石50颗，陨符10张，，金符50张，钻符35张</font><br>";	
echo "<br>";	


echo "<font color=red>5.充值送宠物练星符</font><br>";	
echo "<font color=black>满100送蓝练星x10</font><br>";	
echo "<font color=black>满200送蓝练星x30</font><br>";	
echo "<font color=black>满500送蓝练星x70</font><br>";	
echo "<font color=black>满1000送蓝练星x150</font><br>";	
echo "<font color=black>满2000送蓝练星x300</font><br>";	
echo "<br>";	




echo "<font color=red>6.开学活动期间累计充值称号豆子大放送</font><br>";	

echo "<font color=black>第一名（送10000豆子）</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=679;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖进击の笑傲苍穹〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=678;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖进击の冠绝天下〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=677;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖进击の一骑绝尘〗</font></a>";
echo "<br>";				


echo "<font color=black>第二名（送6000豆子）</font>";	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=678;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖进击の冠绝天下〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=677;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖进击の一骑绝尘〗</font></a>";
echo "<br>";				

	
	
	
echo "<font color=black>第三名（送3000豆子）</font>";	
	
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=677;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖进击の一骑绝尘〗</font></a>";
	echo "<br>";
echo "<font color=black>第4名（1000豆子）</font>";	
	echo "<br>";
echo "<font color=black>第5名（600豆子）</font>";	
	echo "<br>";
echo "<font color=black>第6名（300豆子）</font>";
		echo "<br>";
echo "<font color=black>第7名（200豆子）</font>";	
	echo "<br>";
echo "<font color=black>第8名（100豆子）</font>";	
	echo "<br>";
echo "<font color=black>第9名（50豆子）</font>";	
	echo "<br>";
echo "<font color=black>第10名（30豆子）</font>";	

echo "<br>";	

echo "<font color=red>满50元立即赠送</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=673;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖超凡入圣〗</font></a>";
echo "<br>";


echo "<br>";

echo "<font color=red>7.开学活动期间课本积分大比拼</font><br>";	
echo "<font color=black>第一名（送5000豆子）</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=676;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖名扬四海〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=675;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖炉火纯青〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=674;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖震古烁今〗</font></a>";
echo "<br>";				


echo "<font color=black>第二名（送3000豆子）</font>";	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=675;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖炉火纯青〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=674;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖震古烁今〗</font></a>";
echo "<br>";				
echo "<font color=black>第三名（送1000豆子）</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=674;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖震古烁今〗</font></a>";
echo "<br>";
	echo "<br>";
echo "<font color=black>第4名（500豆子）</font>";	
	echo "<br>";
echo "<font color=black>第5名（400豆子）</font>";	
	echo "<br>";
echo "<font color=black>第6名（300豆子）</font>";
		echo "<br>";
echo "<font color=black>第7名（200豆子）</font>";	
	echo "<br>";
echo "<font color=black>第8名（100豆子）</font>";	
	echo "<br>";
echo "<font color=black>第9名（50豆子）</font>";	
	echo "<br>";
echo "<font color=black>第10名（30豆子）</font>";	

echo "<br>";	


echo "<font color=black>8.疯狂摇点第四期开启</font><br>";	




} elseif($ckid ==24){



echo "<font color=red>1.消费赠送</font><br>";	
echo "<font color=black>充值消费赠送独家装备【诛仙套】祝你在西游路上杀妖除魔。100元〖诛仙武器令〗x1，200元〖诛仙盔甲令〗x1，300元〖诛仙头盔令〗x1，300元〖诛仙鞋子令〗x1，400元〖诛仙项链令〗x1，500元〖诛仙手镯令〗x1（可以折为金豆每件200豆豆）</font><br>";	
echo "<font color=red>2.千万声望法宝送不停</font><br>";	
echo "<font color=black>100：〖1万西游声望卷轴〗x20〖1万法宝经验卷轴〗x20</font><br>";	
echo "<font color=black>200：〖1万西游声望卷轴〗x50〖1万法宝经验卷轴〗x50</font><br>";	
echo "<font color=black>500：〖1万西游声望卷轴〗x150〖1万法宝经验卷轴〗x150</font><br>";	
echo "<font color=black>1000：〖1万西游声望卷轴〗x400〖1万法宝经验卷轴〗x400</font><br>";	
echo "<font color=black>2000：〖1万西游声望卷轴〗x1000〖1万法宝经验卷轴〗x1000</font><br>";	
echo "<br>";	
	
echo "<font color=red>3.贵族卡大放送（单次充值满50送【黄金贵族】满200送【黄金贵族】【铂金贵族】满300送【黄金贵族】【铂金贵族】【钻石皇族】满500送【黄金贵族】【铂金贵族】【钻石皇族】【至尊皇族】</font><br>";	
echo "<font color=black>备注：仅限活动期间赠送每人只有一次机会，比如在活动期间充值50了赠送了【黄金贵族】再次充值其他的将不予再次赠送</font><br>";	
echo "<font color=black>备注：具体各项贵族月卡信息参照游戏福利界面</font><br>";	
echo "<br>";
echo "<font color=red>4.充值送掉宝，宝石，陨符</font><br>";	
echo "<font color=black>满100送四倍掉宝1张，皇者宝石1颗，金符10张</font><br>";	
echo "<font color=black>满200送四倍掉宝3张，皇者宝石3颗，金符30张</font><br>";	
echo "<font color=black>满500送四倍掉宝10张，皇者宝石10颗，金符20张，钻符5张</font><br>";	
echo "<font color=black>满1000送八倍3张，四倍10张，皇者宝石20颗，陨符3张，金符20张，钻符15张</font><br>";	
echo "<font color=black>满2000送八倍10张，四倍20张，皇者宝石50颗，陨符10张，，金符50张，钻符35张</font><br>";	
echo "<br>";	


echo "<font color=red>5.充值送宠物练星符</font><br>";	
echo "<font color=black>满100送蓝练星x10</font><br>";	
echo "<font color=black>满200送蓝练星x30</font><br>";	
echo "<font color=black>满500送蓝练星x70</font><br>";	
echo "<font color=black>满1000送蓝练星x150</font><br>";	
echo "<font color=black>满2000送蓝练星x300</font><br>";	
echo "<br>";	


echo "<font color=black>以上为长期</font><br>";	






echo "<font color=red>1.为增加低级玩家实力，往日活动决定重新启动一次把握机会，仅此一次（具体十字上查看）</font><br>";	

echo "<font color=red>2.充值榜结束后榜免费直充值，第一名：赠送2000直充，第二名：赠送500直充，第三名：赠送200直充</font><br>";	
echo "<font color=red>第一名：赠送2000直充，称号〖土豪就是任性〗，〖豪无人性〗，〖十大富豪〗，〖不差钱〗</font><br>";	
echo "<font color=red>第二名：赠送500直充，〖豪无人性〗，〖十大富豪〗，〖不差钱〗</font><br>";	
echo "<font color=red>第三名：赠送200直充，〖十大富豪〗，〖不差钱〗</font><br>";	
echo "<font color=red>第4-10名：赠送50直充，〖不差钱〗</font><br>";	
echo "<font color=red>任意金额送：〖不屈白银〗</font><br>";	

echo "<font color=red>3.使用蚂蚁花呗付款送充值金额5%的现金红包</font><br>";	

echo "<font color=red>4.财神世界BOSS开启分159与160级别</font><br>";	

echo "<font color=red>5.冲级第一名送〖等级榜第一〗称号</font><br>";	
echo "<font color=red>6.装备达到帝王套送〖装备榜第一〗称号</font><br>";	
echo "<font color=red>7.恶名达到999送〖打遍天下无敌手〗称号</font><br>";	

echo "<font color=red>8.积分榜送称号</font><br>";	
echo "<font color=red>第一名：〖封神英雄〗，〖威力无边〗，〖我是大姐〗，〖我是二哥〗</font><br>";	
echo "<font color=red>第二名：〖威力无边〗，〖我是大姐〗，〖我是二哥〗</font><br>";	
echo "<font color=red>第三名：〖我是大姐〗，〖我是二哥〗</font><br>";	
echo "<font color=red>第4-10名：〖我是二哥〗</font><br>";	

echo "<font color=black>活动期间单笔充值金额满10元【喜鹊蛋】x15,20元【喜鹊蛋】x45,50元【喜鹊蛋】x300,100元【喜鹊蛋】x700,200元【喜鹊蛋】x1500,500元【喜鹊蛋】x4500,1000元【喜鹊蛋】x12000,2000元【喜鹊蛋】x40000</font><br>";	




} elseif($ckid ==25){



echo "<font color=red>1.中秋充值活动</font><br>";	

echo "<font color=black>第一名（送10000豆子）</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=679;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖进击の笑傲苍穹〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=678;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖进击の冠绝天下〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=677;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖进击の一骑绝尘〗</font></a>";
echo "<br>";				


echo "<font color=black>第二名（送4000豆子）</font>";	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=678;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖进击の冠绝天下〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=677;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖进击の一骑绝尘〗</font></a>";
echo "<br>";				

	
	
	
echo "<font color=black>第三名（送1200豆子）</font>";	
	
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=400;
$npc[]=677;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖进击の一骑绝尘〗</font></a>";
	echo "<br>";
echo "<font color=black>第4名（777豆子）</font>";	
	echo "<br>";
echo "<font color=black>第5名（520豆子）</font>";	
	echo "<br>";
echo "<font color=black>第6名（400豆子）</font>";
		echo "<br>";
echo "<font color=black>第7名（300豆子）</font>";	
	echo "<br>";
echo "<font color=black>第8名（220豆子）</font>";	
	echo "<br>";
echo "<font color=black>第9名（150豆子）</font>";	
	echo "<br>";
echo "<font color=black>第10名（100豆子）</font>";	

echo "<br>";	


echo "<br>";	
echo "<font color=red>2.中秋积分奖励金豆（具体关注榜单）</font><br>";	
echo "<br>";	

echo "<font color=red>3.充值满100赠送7位ID号码卡先到先得每个游戏ID（限制1次）</font><br>";	
echo "<br>";	
echo "<font color=red>4.充值满50赠送五变五圣瞌睡虫，100赠送五变五圣齐天大圣，500赠送五变五圣麒麟圣祖（每个游戏ID限制1次）另外每满100送一只麒麟圣祖白蛋</font><br>";	
echo "<br>";	
echo "<font color=red>5.充值满10赠送〖嫦娥月饼礼盒〗x1，【糯米粉】x100，【桂花】x5</font><br>";	

echo "<br>";	
echo "<font color=red>6.充值返利（当天充值豆子的百分比充得多返得多）</font>";	
echo "<font color=black>9月16日（返200%金豆）</font><br>";	
echo "<font color=black>9月17日（返180%金豆）</font><br>";	
echo "<font color=black>9月18日（返150%金豆）</font><br>";	
echo "<font color=black>9月19日（返120%金豆）</font><br>";		
echo "<font color=black>9月20日（返100%金豆）</font><br>";	
echo "<font color=black>9月21日（返80%金豆）</font><br>";	
echo "<font color=black>9月22日（返60%金豆）</font><br>";		
echo "<font color=black>9月23日（返50%金豆）</font><br>";		
echo "<font color=black>9月24日（返40%金豆）</font><br>";		
echo "<font color=black>9月25日（返30%金豆）</font><br>";	

echo "<br>";	
echo "<font color=red>7.蚂蚁花呗充值返5%现金</font>";	

echo "<br>";

echo "<br>";



echo "<font color=red>8.送诛仙</font><br>";	
echo "<font color=black>充值消费赠送独家装备【诛仙套】祝你在西游路上杀妖除魔。100元〖诛仙武器令〗x1，200元〖诛仙盔甲令〗x1，300元〖诛仙头盔令〗x1，300元〖诛仙鞋子令〗x1，400元〖诛仙项链令〗x1，500元〖诛仙手镯令〗x1（可以折为金豆每件200豆豆）</font><br>";	
echo "<font color=red>9.千万声望法宝送不停</font><br>";	
echo "<font color=black>100：〖1万西游声望卷轴〗x200〖1万法宝经验卷轴〗x200</font><br>";	
echo "<font color=black>200：〖1万西游声望卷轴〗x500〖1万法宝经验卷轴〗x500</font><br>";	
echo "<font color=black>500：〖1万西游声望卷轴〗x1500〖1万法宝经验卷轴〗x1500</font><br>";	
echo "<font color=black>1000：〖1万西游声望卷轴〗x4000〖1万法宝经验卷轴〗x4000</font><br>";	
echo "<font color=black>2000：〖1万西游声望卷轴〗x10000〖1万法宝经验卷轴〗x10000</font><br>";	
echo "<br>";	
	
echo "<font color=red>10.贵族卡大放送（单次充值满50送【黄金贵族】满200送【黄金贵族】【铂金贵族】满300送【黄金贵族】【铂金贵族】【钻石皇族】满500送【黄金贵族】【铂金贵族】【钻石皇族】【至尊皇族】</font><br>";	
echo "<font color=black>备注：仅限活动期间赠送每人只有一次机会，比如在活动期间充值50了赠送了【黄金贵族】再次充值其他的将不予再次赠送</font><br>";	
echo "<font color=black>备注：具体各项贵族月卡信息参照游戏福利界面</font><br>";	
echo "<br>";
echo "<font color=red>11.充值送小宇宙，掉宝，宝石，陨符</font><br>";	
echo "<font color=black>满100送小宇宙x1000，四倍掉宝2张，圣贤宝石1颗，金符10张</font><br>";	
echo "<font color=black>满200送小宇宙x2000，四倍掉宝5张，八倍掉宝2张，圣贤宝石3颗，金符30张</font><br>";	
echo "<font color=black>满500送小宇宙x8000，四倍掉宝15张，八倍掉宝5张，圣贤宝石10颗，金符20张，钻符5张</font><br>";	
echo "<font color=black>满1000送小宇宙x20000，送四倍掉宝40张，八倍掉宝15张，圣贤宝石20颗，陨符3张，金符20张，钻符15张</font><br>";	
echo "<font color=black>满2000送小宇宙x50000，四倍掉宝100张，八倍掉宝50张，圣贤宝石50颗，陨符10张，，金符50张，钻符35张</font><br>";	






echo "<br>";	

} elseif($ckid ==26){

echo "<font color=black>小轩西游公测活动如下：</font><br>";
echo "<font color=red>冲榜活动奖励统计完毕后发放</font><br>";
echo "<font color=black>血，攻，魔攻，防御，等级，充值，六大排行榜排名奖励</font><br>";


echo "<font color=red>---------------充值榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=714;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖土豪就是任性〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=654;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖富甲天下〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=709;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖豪无人性〗</font></a>";

echo "<font color=black>1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x8000，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=615;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋-万里挑一）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=464;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（888888）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=654;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖富甲天下〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=616;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋-万里挑一）</font></a>";
echo "<font color=black>x5，</font>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=709;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖豪无人性〗</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x3，</font>";



echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x500，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>第10名以外</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x100，</font>";

echo "<br>";

echo "<font color=red>---------------充值榜-------------</font><br>";









echo "<font color=red>---------------血榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=655;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖登峰造极〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=616;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋-万里挑一）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=463;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（777777）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x3000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x5，</font>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x1000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x3，</font>";



echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x300，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------血榜-------------</font><br>";

echo "<font color=red>---------------攻击榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=674;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖震古烁今〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋-万里挑一）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=462;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（666666）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x3000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x5，</font>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x1000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x3，</font>";



echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x300，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------攻击榜-------------</font><br>";



echo "<font color=red>---------------魔攻榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=675;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖炉火纯青〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋-万里挑一）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=465;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（999999）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x3000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x5，</font>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x1000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x3，</font>";



echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x300，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------魔攻榜-------------</font><br>";



echo "<font color=red>---------------防御榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=676;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖名扬四海〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=493;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋-万里挑一）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=457;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（111111）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x3000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x5，</font>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x1000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x3，</font>";



echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x300，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------防御榜-------------</font><br>";




echo "<font color=red>---------------等级榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=704;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖等级榜第一〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=461;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（555555）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=152;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖十大神翼〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=715;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x3000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x5，</font>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=711;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖封神英雄〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x1000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x3，</font>";



echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x300，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=570;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖齐天大圣〗（宠物蛋）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------等级榜-------------</font><br>";



echo "<font color=red>---------------邀人奖励-------------</font><br>";




echo "<font color=black>拉人送自充卡。使用自充卡不参与积分排名，与赠送</font><br>";
echo "<font color=black>1.拉1人送10自充，拉2人送20元自充，必须为真实有效玩家，以此类推，多拉多送禁小号禁作弊，一经发现严惩不贷，不排除封号</font><br>";

echo "<font color=red>---------------邀人奖励-------------</font><br>";


} elseif($ckid ==27){

echo "<font color=red>昔日活动全开爽歪歪</font><br>";	

echo "<font color=black>1.【天尊之恋】（典藏版）试炼活动，活动期间内拥有天尊套装的奖励</font><br>";	

echo "<font color=red>第一个：〖金豆〗x10000</font><br>";	
echo "<font color=red>第二个：〖金豆〗x6000</font><br>";	
echo "<font color=red>第三个：〖金豆〗x2000</font><br>";	
echo "<font color=black>备注：以上试炼成功者完成后提交给GM索要奖励（立即发放，GM在QQ群发放福利）</font><br>";		

echo "<font color=black>2.财神大暴走，无论输赢都可获得财神积分参与财神榜</font><br>";	
echo "<font color=red>第一名：〖金豆〗x20000（需要12w财神积分）</font><br>";	
echo "<font color=red>第二名：〖金豆〗x8888（需要8w财神积分）</font><br>";	
echo "<font color=red>第三名：〖金豆〗x5555（需要6w财神积分）</font><br>";	
echo "<font color=red>第四-五名：〖金豆〗x1000（需要3w财神积分）</font><br>";	
echo "<font color=black>备注：财神榜单活动结束后发放</font><br>";		

echo "<font color=black>3.昔日活动重启（具体在十字上）各大副本掉落活动材料，秘宝，通天，地府，产出</font><br>";	

echo "<font color=black>4.充值送鸟蛋充值赠送调整期间内金额满多少增送对应金额鸟蛋</font><br>";	
echo "<font color=red>每充值10元送【喜鹊蛋】x20</font><br>";	
echo "<font color=black>另外活动期间满足下列金额再赠送</font><br>";	
echo "<font color=black>满10元送【喜鹊蛋】x15</font><br>";	
echo "<font color=black>满20元送【喜鹊蛋】x45</font><br>";	
echo "<font color=black>满50元送【喜鹊蛋】x300</font><br>";	
echo "<font color=black>满100元送【喜鹊蛋】x700</font><br>";	
echo "<font color=black>满200元送【喜鹊蛋】x1500</font><br>";	
echo "<font color=black>满500元送【喜鹊蛋】x4500</font><br>";	
echo "<font color=black>满1000元送【喜鹊蛋】x12000</font><br>";	
echo "<font color=black>满2000元送【喜鹊蛋】x40000</font><br>";	

echo "<font color=black>5.活动期间充值送七夕万能字</font><br>";	
echo "<font color=red>每充值10元送〖七夕万能字〗x50</font><br>";	

echo "<font color=black>6.典藏活动充值榜具体见榜单为准</font><br>";	





} elseif($ckid ==28){

echo "<font color=red>活动时间2018.10.1-2018.10.7</font><br>";	
echo "<br>";
echo "<font color=black>1.每日玩家可在爱国富商处领取【五星红旗】可进行升旗仪式</font><br>";	
echo "<br>";
echo "<font color=black>2.玩家每日可进行升旗，将旗帜高高挂起扬我国威有一定的概率获得1-10金豆，1-5个云梯石头</font><br>";	
echo "<br>";
echo "<font color=black>3.各大副本掉落【欢】【度】【国】【庆】四字有一定的概率掉落【国庆愉快卡】可在爱国富商处兑换奖励</font><br>";	
echo "<br>";
echo "<font color=black>4.每日每名玩家可领取【国庆金铲】国庆打开宝藏图进行挖宝（需要国庆藏宝图一张）</font><br>";	
echo "<br>";
echo "<font color=black>5.每日每名玩家可使用【国庆金锤】敲碎【国庆金蛋】（三选一）</font><br>";	
echo "<br>";
echo "<font color=black>6.更新宠物【凤凰圣祖】</font><br>";	
echo "<br>";
echo "<font color=red>7.国庆期间单次充值返利（分开的也按照下面单次计算）</font><br>";	
echo "<font color=black>10-100元：返利20%</font><br>";	
echo "<font color=black>200元：返利50%</font><br>";	
echo "<font color=black>500元：返利90%</font><br>";	
echo "<font color=black>1000元：返利140%</font><br>";	
echo "<font color=black>2000元：返利200%</font><br>";	
echo "<br>";



echo "<font color=red>8.国庆期充值对应金额送对应金额云石送国庆字</font><br>";	
echo "<font color=black>10元送4个云石【小宇宙】x50【国庆金铲】x5〖国庆万能字〗x20</font><br>";	
echo "<font color=black>20元送10个云石【小宇宙】x120【国庆金铲】x15〖国庆万能字〗x50</font><br>";	
echo "<font color=black>50元送30个云石【小宇宙】x300【国庆金铲】x40〖国庆万能字〗x150，〖圣贤宝石〗x1</font><br>";	
echo "<font color=black>100元送100个云石【小宇宙】x800【国庆金铲】x100〖国庆万能字〗x400〖圣贤宝石〗x3【凤凰圣祖】x1〖如意の称号宝箱〗x1</font><br>";	
echo "<font color=black>200元送288个云石【小宇宙】x2000【国庆金铲】x300〖国庆万能字〗x1000〖圣贤宝石〗x7【凤凰圣祖】x2〖如意の称号宝箱〗x3</font><br>";	
echo "<font color=black>500元送888个云石【小宇宙】x6000【国庆金铲】x800〖国庆万能字〗x3000〖圣贤宝石〗x20【凤凰圣祖】x5〖如意の称号宝箱〗x8</font><br>";	
echo "<font color=black>1000元送3000个云石【小宇宙】x15000【国庆金铲】x2000〖国庆万能字〗x8888〖圣贤宝石〗x50【凤凰圣祖】x10〖如意の称号宝箱〗x18</font><br>";	
echo "<font color=black>2000元送5000个云石【小宇宙】x35000【国庆金铲】x5000〖国庆万能字〗x20000〖圣贤宝石〗x120【凤凰圣祖】x20〖如意の称号宝箱〗x40</font><br>";	
echo "<font color=red>备注：以上物品直接发放对应的充值礼包打开即可获得</font><br>";	

echo "<br>";
echo "<font color=black>9.活动期间充值满500送五变五圣【凤凰圣祖】一只（每个账号仅此一次）</font><br>";	
echo "<br>";
echo "<font color=red>10.国庆期充值榜送充值卡或豆子（需要结束后结算）</font><br>";	
echo "<font color=black>第1名：【2000元自充卡】+5000个云石（需要满足2000国庆充值积分）</font><br>";	
echo "<font color=black>第2名：【1000元自充卡】+2000个云石（需要满足1000国庆充值积分）</font><br>";	
echo "<font color=black>第3名：【500元自充卡】+1000个云石（需要满足500国庆充值积分）</font><br>";	
echo "<font color=black>第4名：【200元自充卡】+600个云石（需要满足200国庆充值积分）</font><br>";	
echo "<font color=black>第5名：【100元自充卡】+300个云石（需要满足100国庆充值积分）</font><br>";	
echo "<font color=black>第6名：【50元自充卡】+150个云石（需要满足50国庆充值积分）</font><br>";	
echo "<font color=black>第7名：【20元自充卡】+90个云石（需要满足20国庆充值积分）</font><br>";	
echo "<font color=black>第8名：【10元自充卡】+60个云石（需要满足10国庆充值积分）</font><br>";	
echo "<font color=black>第9名：〖金豆〗x100+40个云石（需要满足10国庆充值积分）</font><br>";	
echo "<font color=black>第10名：〖金豆〗x50+20个云石（需要满足10国庆充值积分）</font><br>";	
echo "<font color=red>备注：如果充值名次满足但积分不满足的话则往下名退，退到满足的为止，如退到的名次有玩家占领则该玩家往下退，以此类推</font><br>";	







echo "<br>";
echo "<font color=red>11.国庆期积分榜送云石</font><br>";	
echo "<font color=black>第1名：1000个云石</font><br>";	
echo "<font color=black>第2名：800个云石</font><br>";	
echo "<font color=black>第3名：600个云石</font><br>";	
echo "<font color=black>第4名：400个云石</font><br>";	
echo "<font color=black>第5名：200个云石</font><br>";	
echo "<font color=black>第6名：100个云石</font><br>";	
echo "<font color=black>第7名：60个云石</font><br>";	
echo "<font color=black>第8名：40个云石</font><br>";	
echo "<font color=black>第9名：20个云石</font><br>";	
echo "<font color=black>第10名：10个云石</font><br>";	
echo "<br>";
echo "<font color=red>12.玄武大街新增〖至尊宝石〗合成具体属性看游戏内</font><br>";	
echo "<br>";
echo "<font color=red>13.国庆期间商城〖云梯石〗特价处理</font><br>";	



echo "<br>";



} elseif($ckid ==29){

echo "<font color=red>活动时间2018.10.10-2018.10.16</font><br>";	
echo "<br>";
echo "<font color=black>小轩西游半岁啦~~特此感谢大家一如既往的支持</font><br>";	
echo "<br>";
echo "<font color=black>1.从开区到现在各位大佬不甘示弱来到了长安请您品尝下他们的手艺</font><br>";	
echo "<br>";
echo "<font color=black>2.玩家可收集各种制作食品材料制作自己喜爱的食品（具体去游戏玄武大街找大佬们制作）</font><br>";	
echo "<br>";
echo "<font color=black>3.副本掉落秘宝通天地府各种制作原材料和半周年庆典字体凑齐可兑换生日甜品礼盒</font><br>";	
echo "<br>";
echo "<font color=black>4.同时也掉落生日蛋糕但是不可以吃哦可用于抢积分榜</font><br>";	
echo "<br>";
echo "<font color=black>5.半周年积分榜奖励（纪念版称号充值卡狂欢送）</font><br>";	

echo "<font color=black>第1名：</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=918;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下无双の群雄霸主〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=919;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖火树银花の名士风流〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=920;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖万花迎春の国色天香〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>【500元自充卡】x1</font><br>";	







echo "<font color=black>第2名：〖火树银花の名士风流〗（纪念版）x1〖万花迎春の国色天香〗（纪念版）x1【100元自充卡】x3</font><br>";	
echo "<font color=black>第3名：〖万花迎春の国色天香〗（纪念版）x1【200元自充卡】x1</font><br>";	
echo "<font color=black>第4名：【100元自充卡】x1</font><br>";	
echo "<font color=black>第5名：【50元自充卡】x1</font><br>";	
echo "<font color=black>第6名：【20元自充卡】x1</font><br>";	
echo "<font color=black>第7名：【10元自充卡】x1</font><br>";	
echo "<font color=black>第8名：【10元自充卡】x1</font><br>";	
echo "<font color=black>第9名：【10元自充卡】x1</font><br>";	
echo "<font color=black>第10名：【10元自充卡】x1</font><br>";	
echo "<font color=red>具体称号属性参照第一名奖励</font><br>";	


echo "<br>";
echo "<font color=black>6.半周年充值榜奖励（纪念版称号充值卡狂欢送）</font><br>";	
echo "<font color=black>第1名：</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=914;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖绝世盟主〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=915;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖绝世仙盟〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=916;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖君临王城の至尊王城〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";


echo "<font color=black>【2000元自充卡】x1（需要活动充值积分2000以上）</font><br>";	



echo "<font color=black>第2名：〖绝世仙盟〗（纪念版）x1〖君临王城の至尊王城〗（纪念版）x1〖八荒雷动の傲视群雄〗（纪念版）x1【1000元自充卡】x1（需要活动充值积分1000以上）</font><br>";	
echo "<font color=black>第3名：〖君临王城の至尊王城〗（纪念版）x1〖八荒雷动の傲视群雄〗（纪念版）x1【500元自充卡】x1（需要活动充值积分500以上）</font><br>";	
echo "<font color=black>第4名：〖八荒雷动の傲视群雄〗（纪念版）x1【200元自充卡】x1（需要活动充值积分200以上）</font><br>";	
echo "<font color=black>第5名：〖八荒雷动の傲视群雄〗（纪念版）x1【100元自充卡】x1（需要活动充值积分100以上）</font><br>";	
echo "<font color=black>第6名：〖八荒雷动の傲视群雄〗（纪念版）【50元自充卡】x1（需要活动充值积分50以上）</font><br>";	
echo "<font color=black>第7名：〖八荒雷动の傲视群雄〗（纪念版）【20元自充卡】x1（需要活动充值积分20以上）</font><br>";	
echo "<font color=black>第8名：【10元自充卡】x1</font><br>";	
echo "<font color=black>第9名：【10元自充卡】x1</font><br>";	
echo "<font color=black>第10名：【10元自充卡】x1</font><br>";	
echo "<font color=red>备注：如果充值名次满足但积分不满足的话则往下名退，退到满足的为止，如退到的名次有玩家占领则该玩家往下退，以此类推（具体称号属性参照第一名奖励）</font><br>";	
echo "<br>";
echo "<font color=black>7.充值任意金额送纪念版称号（立即送）</font>";	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=921;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖勇者之王〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
echo "<br>";


echo "<br>";

echo "<font color=black>9.充值累计消费赠送一览（充值卡狂欢送）</font><br>";	
echo "<font color=black>累计10元送〖半周岁10元消费礼宝箱〗=〖原料购物票〗x100〖麦乐堡甜品箱〗x1〖云梯石〗x10【10元自充卡】x1</font><br>";	
echo "<font color=black>累计20元送〖半周岁20元消费礼宝箱〗=〖原料购物票〗x200〖麦乐堡甜品箱〗x3〖云梯石〗x20【20元自充卡】x1</font><br>";	
echo "<font color=black>累计50元送〖半周岁50元消费礼宝箱〗=〖原料购物票〗x500〖麦乐堡甜品箱〗x10〖云梯石〗x50【50元自充卡】x1</font><br>";	
echo "<font color=black>累计100元送〖半周岁100元消费礼宝箱〗=〖原料购物票〗x1000〖麦乐堡甜品箱〗x25〖云梯石〗x1000【100元自充卡】x1</font><br>";	
echo "<font color=black>累计200元送〖半周岁200元消费礼宝箱〗=〖原料购物票〗x2000〖麦乐堡甜品箱〗x50〖云梯石〗x2000【200元自充卡】x1</font><br>";	
echo "<font color=black>累计500元送〖半周岁500元消费礼宝箱〗=〖原料购物票〗x5000〖麦乐堡甜品箱〗x100〖云梯石〗x5000【500元自充卡】x1</font><br>";	
echo "<font color=black>累计1000元送〖半周岁1000元消费礼宝箱〗=〖原料购物票〗x10000〖麦乐堡甜品箱〗x200〖云梯石〗x10000【1000元自充卡】x1</font><br>";	
echo "<font color=black>累计2000元送〖半周岁2000元消费礼宝箱〗=〖原料购物票〗x20000〖麦乐堡甜品箱〗x400〖云梯石〗x20000【2000元自充卡】x1</font><br>";	

echo "<br>";
echo "<font color=black>10.每消费50赠送〖至尊宝石包〗（1个）〖金锭〗x1（特别提醒不累计）</font><br>";	

echo "<br>";


echo "<font color=black>11.充值消费赠送3位极品豹子1-9id号码卡先到先得（需活动累计消费满100积分）</font><br>";	


echo "<font color=black>12.使用蚂蚁花呗付款赠送充值金额的百分之10现金回馈红包</font><br>";	

} elseif($ckid ==30){
	
echo "<font color=red>活动时间2018.10.17-2018.10.23</font><br>";	
	
	echo "<br>";
	
echo "<font color=black>玄武大街出“摔伤的老人”、“奇怪的商人”、“重阳婆婆”NPC</font><br>";	
echo "<br>";
echo "<font color=black>“摔伤的老人”提示：小仙卿，我本是高家庄人氏，重阳节路过长安想去登高，岂料遇上了这附近的妖怪，把我身上的带着的【重阳糕】原料夺去了。小仙卿你帮我找回来，我给你做美味的【重阳糕】和传授你种植的技术。</font><br>";	
echo "<br>";
echo "<font color=black>1.副本掉落、挑战区域掉落【面粉】、【红枣】、【栗子】、【杏仁】、【黑沃土】、【仙玉露】、〖小公主の材料票〗、〖小公主の仙竹〗一定数量的以上4物可以在“摔伤的老人”那里制作兑换【重阳糕】。【重阳糕】可以兑换称号、〖小公主の激素〗</font><br>";	
echo "<br>";
echo "<font color=black>2.奇怪的商人可使用〖小公主の材料票〗购买【面粉】、【红枣】、【栗子】、【杏仁】</font><br>";	
echo "<br>";
echo "<font color=black>3.重阳婆婆购买〖小公主の材料票〗购买【黑沃土】（用于施肥）、【仙玉露】（用于施肥）、〖小公主の仙竹〗（可用于重阳节活动争夺积分榜）</font><br>";	
echo "<br>";
echo "<font color=black>4.农场【黑沃土】【仙玉露】进行施肥必须在最晚施肥时间使用否则之前种植的消失，可使用〖紫星币〗对种植物品进行升级最好5级，成功加1级，失败减1级，到达收获时间则可进行收获普通收割有百分之50的遭遇虫灾。紫星币x20收割免疫虫灾</font><br>";	
echo "<br>";
echo "<font color=black>5.充值（不累计）对应金额送对应金额的套装包，50送圣灵白板套装，100送圣灵1级套装，200送圣灵2级套装，500送圣灵3级套装，1000送圣灵4级套装，2000送噬魂套装（需告知gm是否需要，不需要则转换为金豆1元=5豆）</font><br>";	
echo "<br>";
echo "<font color=black>6.充值（不累计）每充值1元赠送〖紫星币〗x1</font><br>";	
echo "<br>";
echo "<font color=black>7.充值（累计）满100送【比翼双飞】（典藏版）套装，满200送【喜鹊令】x2，满500送〖七夕令〗x2，满1000送〖七夕令〗x4（需告知gm是否需要，不需要则转换为金豆1元=5豆）</font><br>";	
echo "<br>";
echo "<font color=black>8.充值（累计）满10元送〖小公主の材料票〗x100，满20元送〖小公主の材料票〗x200，满50元送〖小公主の材料票〗x500，满100元送〖小公主の材料票〗x1000，满200元送〖小公主の材料票〗x2000，满500元送〖小公主の材料票〗x5000，满1000元送〖小公主の材料票〗x10000，满2000元送〖小公主の材料票〗x20000
备注：满后面的则把前面赠送的一起拿掉</font><br>";	
echo "<br>";
echo "<font color=black>9.充值任意金额送〖绝代芳华〗x1（每个玩家1次）</font><br>";	
echo "<br>";
echo "<font color=black>10.积分榜</font><br>";	
echo "<font color=black>第1名：〖君临王城の至尊皇者〗x1，〖至尊无敌〗x1，〖妖火天尊〗x1，〖护身符〗x100</font><br>";	


echo "<font color=black>第2名：〖至尊无敌〗x1，〖妖火天尊〗x1，〖护身符〗x60</font><br>";	

echo "<font color=black>第3名：〖妖火天尊〗x1，〖护身符〗x30</font><br>";	
echo "<font color=black>第4名：〖护身符〗x20</font><br>";		
echo "<font color=black>第5名：〖护身符〗x15</font><br>";		
echo "<font color=black>第6名：〖护身符〗x10</font><br>";	
echo "<font color=black>第7名：〖护身符〗x8</font><br>";		
echo "<font color=black>第8名：〖护身符〗x5</font><br>";	
echo "<font color=black>第9名：〖护身符〗x3</font><br>";	
echo "<font color=black>第10名：〖护身符〗x1</font><br>";
		echo "<br>";
echo "<font color=black>11.充值榜</font><br>";		
echo "<font color=black>第1名：〖君临天下の武道至尊〗x1，〖倾城佳人の艳冠天下〗x1，〖风流倜傥の百战无双〗x1，〖天下无双の群雄霸主〗x1，〖护身符〗x300</font><br>";	
echo "<font color=black>第2名：〖倾城佳人の艳冠天下〗x1，〖风流倜傥の百战无双〗x1，〖天下无双の群雄霸主〗x1，〖护身符〗x200</font><br>";		
echo "<font color=black>第3名：〖风流倜傥の百战无双〗x1，〖天下无双の群雄霸主〗x1，〖护身符〗x100</font><br>";		
echo "<font color=black>第4名：〖天下无双の群雄霸主〗x1，〖护身符〗x50</font><br>";		
echo "<font color=black>第5名：〖天下无双の群雄霸主〗x1，〖护身符〗x30</font><br>";	
echo "<font color=black>第6名：〖天下无双の群雄霸主〗x1，〖护身符〗x20</font><br>";		
echo "<font color=black>第7名：〖天下无双の群雄霸主〗x1，〖护身符〗x10</font><br>";		
echo "<font color=black>第8名：〖天下无双の群雄霸主〗x1，〖护身符〗x8</font><br>";		
echo "<font color=black>第9名：〖天下无双の群雄霸主〗x1，〖护身符〗x5</font><br>";	
echo "<font color=black>第10名：〖天下无双の群雄霸主〗x1，〖护身符〗x3</font><br>";		
echo "<br>";
echo "<font color=black>12.充值（不累计）每消费50送〖金锭〗x1送〖至尊宝石〗x1</font><br>";	
echo "<br>";

echo "<font color=black>13.充值金豆返利活动</font><br>";	
echo "<font color=red>10月17日：充值金豆返利200%</font><br>";		
echo "<font color=red>10月18日：充值金豆返利170%</font><br>";	
echo "<font color=red>10月20日：充值金豆返利140%</font><br>";	
echo "<font color=red>10月21日：充值金豆返利110%</font><br>";	
echo "<font color=red>10月22日：充值金豆返利80%</font><br>";	
echo "<font color=red>10月23日：充值金豆返利50%</font><br>";	

echo "<br>";


echo "<font color=black>14.蚂蚁花呗消费送充值金额的百分之10现金红包</font><br>";	
echo "<br>";


} elseif($ckid ==31){
	
echo "<font color=red>活动时间2018.11.02-2018.11.15</font><br>";	
echo "<br>";
echo "<font color=black>玄武大街出“西方传教士（积分）”、“西方传教士（奖励）”、“南瓜大仙”NPC</font><br>";	
echo "<br>";

echo "<font color=black>1.每日玩家可以通过西方传教士（积分）进行答题限时5分钟，答对获得积分加一分【万圣节勋章】勋章可以用于兑换〖精品糖果宝箱〗答错积分扣一分</font><br>";	
echo "<br>";

echo "<font color=black>2.每日玩家可以通过西方传教士（奖励）进行答题限时3分钟，答对获得各类奖励和【万圣节勋章】勋章可以用于兑换〖精品糖果宝箱〗</font><br>";	
echo "<br>";

echo "<font color=black>3.副本掉落各类活动材料可在南瓜大仙处兑换南瓜宝箱</font><br>";	
echo "<br>";

echo "<font color=black>4.充值（不累计）对应金额送对应金额的套装包，50送圣灵白板套装，100送圣灵1级套装，200送圣灵2级套装，500送圣灵3级套装，1000送圣灵4级套装，2000送噬魂套装（需告知gm是否需要，不需要则转换为金豆1元=5豆）</font><br>";	
echo "<br>";
echo "<font color=black>5.充值（不累计）每充值1元赠送〖紫星币〗x1</font><br>";	

echo "<font color=black>6.充值（累计）满100送【比翼双飞】（典藏版）套装，满200送【喜鹊令】x2，满500送〖七夕令〗x2，满1000送〖七夕令〗x4（需告知gm是否需要，不需要则转换为金豆1元=5豆）</font><br>";	
echo "<br>";


echo "<font color=black>7.充值（累计）满10元送〖万圣节万能字〗x100，满20元送〖万圣节万能字〗x200，满50元送〖万圣节万能字〗x500，满100元送〖万圣节万能字〗x1000，满200元送〖万圣节万能字〗x2000，满500元送〖万圣节万能字〗x5000，满1000元送〖万圣节万能字〗x10000，满2000元送〖万圣节万能字〗x20000
备注：满后面的则把前面赠送的一起拿掉</font><br>";	
echo "<br>";
echo "<font color=black>8.充值（累计）满50元送〖神の陨升星符〗x1，满100元送〖神の陨升星符〗x5，满200元送〖神の陨升星符〗x10，满500元送〖神の陨升星符〗x20，满1000元送〖神の陨升星符〗x50，满2000元送〖神の陨升星符〗x100
备注：满后面的则把前面赠送的一起拿掉</font><br>";	

echo "<br>";

echo "<font color=black>9.充值（累计）满10元送〖万圣节极品糖果箱〗x1，满20元送〖万圣节极品糖果箱〗x2，满50元送〖万圣节极品糖果箱〗x5，满100元送〖万圣节极品糖果箱〗x10，满200元送〖万圣节极品糖果箱〗x20，满500元送〖万圣节极品糖果箱〗x50，满1000元送〖万圣节极品糖果箱〗x100，满2000元送〖万圣节极品糖果箱〗x200
备注：满后面的则把前面赠送的一起拿掉</font><br>";


	echo "<br>";


echo "<font color=black>10.万圣节活动充值奖励（称号充值卡）</font><br>";	

echo "<font color=black>第1名(需要满足充值积分2000以上)：</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=1034;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖千秋万载〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=1035;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖纵横三界づ王者风云〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=1036;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下第一盟〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=1037;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下第一盟主〗</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>【2000元自充卡】x1〖护身符〗x2000〖紫星币〗x2000</font><br>";	


echo "<font color=black>第2名(需要满足充值积分1000以上)：〖纵横三界づ王者风云〗x1〖天下第一盟〗x1〖天下第一盟主〗x1【1000元自充卡】x1〖护身符〗x1000〖紫星币〗x1000</font><br>";	
echo "<font color=black>第3名(需要满足充值积分500以上)：〖天下第一盟〗x1〖天下第一盟主〗x1【1000元自充卡】x1〖护身符〗x400〖紫星币〗x400</font><br>";	
echo "<font color=black>第4名(需要满足充值积分200以上)：〖天下第一盟主〗x1【500元自充卡】x1〖护身符〗x200〖紫星币〗x200</font><br>";	
echo "<font color=black>第5名(需要满足充值积分100以上)：〖天下第一盟主〗x1【200元自充卡】x1〖护身符〗x100〖紫星币〗x100</font><br>";	
echo "<font color=black>第6名(需要满足充值积分100以上)：〖天下第一盟主〗x1【100元自充卡】x1〖护身符〗x50〖紫星币〗x50</font><br>";	
echo "<font color=black>第7名(需要满足充值积分50以上)：〖天下第一盟主〗x1【100元自充卡】x1〖护身符〗x30〖紫星币〗x30</font><br>";	
echo "<font color=black>第8名(需要满足充值积分50以上)：〖天下第一盟主〗x1【100元自充卡】x1〖护身符〗x20〖紫星币〗x20</font><br>";	
echo "<font color=black>第9名(需要满足充值积分50以上)：〖天下第一盟主〗x1【100元自充卡】x1〖护身符〗x10〖紫星币〗x10</font><br>";	
echo "<font color=black>第10名(需要满足充值积分50以上)：〖天下第一盟主〗x1【100元自充卡】x1〖护身符〗x5〖紫星币〗x5</font><br>";	
echo "<font color=red>具体称号属性参照第一名奖励（充值榜名次需要满足对应活动充值积分否则往下移直到满足为止）</font><br>";	

echo "<br>";
echo "<font color=black>11.积分榜</font><br>";		
echo "<font color=black>第1名：〖富甲一方〗x1，〖至高无上〗x1，〖哥是高富帅〗x1，〖仙境状元〗x1，〖云梯石〗x1000</font><br>";	
echo "<font color=black>第2名：〖至高无上〗x1，〖哥是高富帅〗x1，〖仙境状元〗x1，〖护身符〗x200，〖云梯石〗x400</font><br>";		
echo "<font color=black>第3名：〖哥是高富帅〗x1，〖仙境状元〗x1，〖云梯石〗x200</font><br>";		
echo "<font color=black>第4名：〖仙境状元〗x1，〖云梯石〗x100</font><br>";		
echo "<font color=black>第5名：〖仙境状元〗x1，〖云梯石〗x50</font><br>";	
echo "<font color=black>第6名：〖仙境状元〗x1，〖云梯石〗x30</font><br>";		
echo "<font color=black>第7名：〖仙境状元〗x1，〖云梯石〗x20</font><br>";		
echo "<font color=black>第8名：〖仙境状元〗x1，〖云梯石〗x10</font><br>";		
echo "<font color=black>第9名：〖仙境状元〗x1，〖云梯石〗x5</font><br>";	
echo "<font color=black>第10名：〖仙境状元〗x1，〖云梯石〗x1</font><br>";	

	echo "<br>";


echo "<font color=black>12.充值任意金额送〖珠光宝气〗称号</font><br>";	
	echo "<br>";


echo "<br>";
echo "<font color=black>13.充值（不累计）每消费50送〖金锭〗x1送〖至尊宝石〗x1</font><br>";	
echo "<br>";

echo "<font color=black>14.单次充值金豆返利活动</font><br>";	
echo "<font color=red>10元：充值金豆返利40%</font><br>";		
echo "<font color=red>20元：充值金豆返利50%</font><br>";	
echo "<font color=red>50元：充值金豆返利60%</font><br>";	
echo "<font color=red>100元：充值金豆返利70%</font><br>";	
echo "<font color=red>200元：充值金豆返利80%</font><br>";	
echo "<font color=red>500元：充值金豆返利90%</font><br>";	
echo "<font color=red>1000元：充值金豆返利100%</font><br>";	
echo "<font color=red>2000元：充值金豆返利200%</font><br>";	



} elseif($ckid ==32){
echo "<font color=red>活动时间2018.11.02-2018.11.15</font><br>";	
echo "<font color=black>小轩西游新区乌鸡国活动如下：</font><br>";
echo "<font color=red>冲榜活动奖励统计完毕后发放</font><br>";
echo "<font color=black>血，攻，魔攻，防御，等级，充值，六大排行榜排名奖励</font><br>";


echo "<font color=red>---------------充值榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=914;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖绝世盟主〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=915;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖绝世仙盟〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=916;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖君临王城の至尊王城〗（纪念版）</font></a>";
echo "<font color=black>1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>1，</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x20000，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=847;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋-万里挑一）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=464;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（888888）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗x50</font></a>";
echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=915;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖绝世仙盟〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=916;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖君临王城の至尊王城〗（纪念版）</font></a>";
echo "<font color=black>1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=846;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗x30</font></a>";

echo "<br>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下无双の群雄霸主〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=846;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗x20</font></a>";

echo "<br>";
echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗x5,</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=846;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x3</font>";

echo "<br>";
echo "<font color=black>第10名以外</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=846;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x1,</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";

echo "<br>";

echo "<font color=red>---------------充值榜-------------</font><br>";









echo "<font color=red>---------------血榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=463;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（777777）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";
echo "<br>";


echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------血榜-------------</font><br>";

echo "<font color=red>---------------攻击榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=462;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（666666）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";

echo "<br>";

echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------攻击榜-------------</font><br>";



echo "<font color=red>---------------魔攻榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=465;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（999999）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";

echo "<br>";

echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------魔攻榜-------------</font><br>";



echo "<font color=red>---------------防御榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=457;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（111111）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";
echo "<br>";


echo "<font color=black>第4-10名：</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------防御榜-------------</font><br>";




echo "<font color=red>---------------等级榜-------------</font><br>";
echo "<font color=black>第一名：</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=461;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（555555）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=715;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";


echo "<br>";
echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";

echo "<font color=red>---------------等级榜-------------</font><br>";








} elseif($ckid ==33){
echo "<font color=black>感恩节活动介绍（绝无仅有，超级大回馈）</font><br>";	
echo "<br>";
echo "<font color=black>1.在感恩节来临之际同时也非常感谢玩家们与游戏共同走到今天决定对广大玩家进行绝无仅有，超级大回馈，长安城来了两位不速之客，竞猜使者，与火鸡先生可以获得丰厚的奖励</font><br>";	
echo "<br>";
echo "<font color=black>2.竞猜使者一共十道关卡越往后奖励越好奖励包含金豆石头护身符银子紫星币等稀有物品，每天每名玩家可以有30次的竞猜机会，当然紫星币可以用于购买竞猜次数，每天每名玩家购买限制10次，初始10紫星币每次购买+10星币</font><br>";	
echo "<br>";

echo "<font color=black>3.火鸡先生需要通过活动材料兑换火鸡先生的礼包，副本挑战秘宝掉落</font><br>";	
echo "<br>";

echo "<font color=black>4.活动期间首次充值任意金额送〖君临王城の至尊王城〗（纪念版）x1+〖尊享vip〗（月卡）x1</font><br>";	
echo "<br>";

echo "<font color=black>5.每充值1元赠送〖紫星币〗x1（不累计）</font><br>";	
echo "<br>";


echo "<font color=black>6.充值（累计）满10元送〖感恩小羊礼包〗x1，满20元送〖感恩小羊礼包〗x2，满50元送〖感恩小羊礼包〗x5，满100元送〖感恩小羊礼包〗x10，满200元送〖感恩小羊礼包〗x20，满500元送〖感恩小羊礼包〗x50，满1000元送〖感恩小羊礼包〗x100，满2000元送〖感恩小羊礼包〗x200</font><br>";	
echo "<font color=black>备注：满后面的则把前面赠送的一起拿掉</font><br>";	
echo "<br>";

echo "<font color=black>7.充值（不累计）每消费50送〖金锭〗x1送〖帝王宝石〗x1</font><br>";	
echo "<br>";

echo "<font color=black>8.充值金豆返利活动+送自充卡（感恩回馈）</font><br>";
echo "<font color=black>11月17日：充值金豆返利200%+充值金额x2自充卡一张</font><br>";
echo "<font color=black>11月18日：充值金豆返利170%+充值金额x2自充卡一张</font><br>";	
echo "<font color=black>11月20日：充值金豆返利140%+充值金额x1自充卡一张</font><br>";	
echo "<font color=black>11月21日：充值金豆返利110%+充值金额x1自充卡一张</font><br>";	
echo "<font color=black>11月22日：充值金豆返利80%+充值金额除x0.5自充卡一张</font><br>";	
echo "<font color=black>11月23日：充值金豆返利50%+充值金额除x0.5自充卡一张</font><br>";	
echo "<font color=black>11月24日：充值金豆返利20%+充值金额除x0.5自充卡一张</font><br>";	
echo "<font color=black>备注：越早越多充值，奖励越好如17号充100则在100的基础上x2，就是送200自充卡</font><br>";	
echo "<br>";

echo "<font color=black>9.充值（累计）送八倍掉宝符〖金锭〗〖紫星币〗疯狂送</font><br>";	
echo "<font color=black>累计10元〖八倍掉宝符〗x1〖金锭〗x1〖紫星币〗x20</font><br>";
echo "<font color=black>累计20元〖八倍掉宝符〗x2〖金锭〗x1〖紫星币〗x20</font><br>";	
echo "<font color=black>累计50元〖八倍掉宝符〗x3〖金锭〗x1〖紫星币〗x20</font><br>";	
echo "<font color=black>累计100元〖八倍掉宝符〗x4〖金锭〗x2〖紫星币〗x100</font><br>";	
echo "<font color=black>累计200元〖八倍掉宝符〗x5〖金锭〗x3〖紫星币〗x300</font><br>";	
echo "<font color=black>累计500元〖八倍掉宝符〗x10〖金锭〗x10〖紫星币〗x1000</font><br>";	
echo "<font color=black>累计1000元〖八倍掉宝符〗x30〖金锭〗x20〖紫星币〗x2000</font><br>";
echo "<font color=black>累计2000元〖八倍掉宝符〗x70〖金锭〗x50〖紫星币〗x3000</font><br>";	
echo "<font color=black>备注：满后面的则把前面赠送的一起拿掉</font><br>";	
echo "<br>";

echo "<font color=black>10.充值送〖感恩票〗（不累计）</font><br>";	
echo "<font color=black>每消费一元送〖感恩票〗x10</font><br>";

echo "<br>";



echo "<font color=black>11.感恩活动充值奖励（称号充值卡）</font><br>";	

echo "<font color=black>第1名(需要满足充值积分2000以上)：</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=1034;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖千秋万载〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=1035;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖纵横三界づ王者风云〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=1036;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下第一盟〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=610;
$npc[]=1037;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下第一盟主〗</font></a>";
echo "<font color=black>x1，</font>";
echo "<font color=black>【2000元自充卡】x1〖护身符〗x2000〖紫星币〗x2000（不要称号=〖紫星币〗x1000）</font><br>";	


echo "<font color=black>第2名(需要满足充值积分1000以上)：〖纵横三界づ王者风云〗x1〖天下第一盟〗x1〖天下第一盟主〗x1【1000元自充卡】x1〖护身符〗x1000〖紫星币〗x1000（不要称号=〖紫星币〗x200）</font><br>";	
echo "<font color=black>第3名(需要满足充值积分500以上)：〖天下第一盟〗x1〖天下第一盟主〗x1【1000元自充卡】x1〖护身符〗x400〖紫星币〗x400（不要称号=〖紫星币〗x100）</font><br>";	
echo "<font color=black>第4名(需要满足充值积分200以上)：〖天下第一盟主〗x1【500元自充卡】x1〖护身符〗x200〖紫星币〗x200（不要称号=〖紫星币〗x50）</font><br>";	
echo "<font color=black>第5名(需要满足充值积分100以上)：〖天下第一盟主〗x1【200元自充卡】x1〖护身符〗x100〖紫星币〗x100（不要称号=〖紫星币〗x50）</font><br>";	
echo "<font color=black>第6名(需要满足充值积分100以上)：〖天下第一盟主〗x1【100元自充卡】x1〖护身符〗x50〖紫星币〗x50（不要称号=〖紫星币〗x50）</font><br>";	
echo "<font color=black>第7名(需要满足充值积分50以上)：〖天下第一盟主〗x1【100元自充卡】x1〖护身符〗x30〖紫星币〗x30（不要称号=〖紫星币〗x50）</font><br>";	
echo "<font color=black>第8名(需要满足充值积分50以上)：〖天下第一盟主〗x1【100元自充卡】x1〖护身符〗x20〖紫星币〗x20（不要称号=〖紫星币〗x50）</font><br>";	
echo "<font color=black>第9名(需要满足充值积分50以上)：〖天下第一盟主〗x1【100元自充卡】x1〖护身符〗x10〖紫星币〗x10（不要称号=〖紫星币〗x50）</font><br>";	
echo "<font color=black>第10名(需要满足充值积分50以上)：〖天下第一盟主〗x1【100元自充卡】x1〖护身符〗x5〖紫星币〗x5（不要称号=〖紫星币〗x50）</font><br>";	
echo "<font color=red>具体称号属性参照第一名奖励（充值榜名次需要满足对应活动充值积分否则往下移直到满足为止）如果不需要的称号可在冲榜结束后给gm说明按照括号内发放</font><br>";	

echo "<br>";
echo "<font color=black>12.积分榜</font><br>";		
echo "<font color=black>第1名：〖云梯石〗x1000〖护身符〗x500【2000元自充卡】x1</font><br>";	
echo "<font color=black>第2名：〖云梯石〗x400〖护身符〗x200【1000元自充卡】x1</font><br>";		
echo "<font color=black>第3名：〖云梯石〗x200〖护身符〗x100【500元自充卡】x1</font><br>";		
echo "<font color=black>第4名：〖云梯石〗x100〖护身符〗x40【200元自充卡】x1</font><br>";		
echo "<font color=black>第5名：〖云梯石〗x50〖护身符〗x20【100元自充卡】x1</font><br>";	
echo "<font color=black>第6名：〖云梯石〗x30〖护身符〗x10【50元自充卡】x1</font><br>";		
echo "<font color=black>第7名：〖云梯石〗x20〖护身符〗x10【20元自充卡】x1</font><br>";		
echo "<font color=black>第8名：〖云梯石〗x10〖护身符〗x10【10元自充卡】x1</font><br>";		
echo "<font color=black>第9名：〖云梯石〗x10〖护身符〗x10</font><br>";	
echo "<font color=black>第10名〖云梯石〗x10〖护身符〗x10</font><br>";	

	echo "<br>";

} elseif($ckid ==34){
echo "<font color=red>活动时间11-26~~~12-02(23:50)</font><br>";	
echo "<font color=black>小轩西游补充值区【傲来国】活动如下：</font><br>";
echo "<font color=red>冲榜活动奖励统计完毕后发放</font><br>";
echo "<font color=black>血，攻，魔攻，防御，等级，充值，六大排行榜排名奖励</font><br>";
echo "<font color=red>温馨提示：此区【傲来国】全部0起步不做任何赠送只做充值补偿</font><br>";
echo "<font color=red>---------------充值榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=914;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖绝世盟主〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=915;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖绝世仙盟〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=916;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖君临王城の至尊王城〗（纪念版）</font></a>";
echo "<font color=black>1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>1，</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x20000，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=847;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋-万里挑一）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=464;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（888888）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗x50</font></a>";
echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=915;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖绝世仙盟〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=916;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖君临王城の至尊王城〗（纪念版）</font></a>";
echo "<font color=black>1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=846;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗x30</font></a>";

echo "<br>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下无双の群雄霸主〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=846;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗x20</font></a>";

echo "<br>";
echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗x5,</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=846;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x3</font>";

echo "<br>";
echo "<font color=black>第10名以外</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=846;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x1,</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";

echo "<br>";

echo "<font color=red>---------------充值榜-------------</font><br>";









echo "<font color=red>---------------血榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=463;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（777777）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";
echo "<br>";


echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------血榜-------------</font><br>";

echo "<font color=red>---------------攻击榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=462;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（666666）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";

echo "<br>";

echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------攻击榜-------------</font><br>";



echo "<font color=red>---------------魔攻榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=465;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（999999）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";

echo "<br>";

echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------魔攻榜-------------</font><br>";



echo "<font color=red>---------------防御榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=457;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（111111）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";
echo "<br>";


echo "<font color=black>第4-10名：</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------防御榜-------------</font><br>";




echo "<font color=red>---------------等级榜-------------</font><br>";
echo "<font color=black>第一名：</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=461;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（555555）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=715;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";


echo "<br>";
echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=681;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";

echo "<font color=red>---------------等级榜-------------</font><br>";



} elseif($ckid ==35){
echo "<font color=red>活动时间11-26~~~12-02(23:50)</font><br>";	
echo "<font color=black>小轩西游纯净新区【宝象国】活动如下：</font><br>";
echo "<font color=red>冲榜活动奖励统计完毕后发放</font><br>";
echo "<font color=black>血，攻，魔攻，防御，等级，充值，六大排行榜排名奖励</font><br>";
echo "<font color=red>温馨提示：此区【宝象国】赠送新区SDK码一张一人一张严禁小号作弊封停并追回违规所得（具体SDK物品参照游戏内SDK兑换）</font><br>";
echo "<font color=red>---------------充值榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1087;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-500元现金红包〗</font></a>";
echo "<font color=black>x1，</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=914;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖绝世盟主〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=915;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖绝世仙盟〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=916;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖君临王城の至尊王城〗（纪念版）</font></a>";
echo "<font color=black>1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>1，</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x20000，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=847;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋-万里挑一）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=464;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（888888）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗x50</font></a>";
echo "<br>";
echo "<font color=black>第二名：</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1088;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-200元现金红包〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=915;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖绝世仙盟〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=916;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖君临王城の至尊王城〗（纪念版）</font></a>";
echo "<font color=black>1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=846;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗x30</font></a>";

echo "<br>";

echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天下无双の群雄霸主〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=846;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗x20</font></a>";

echo "<br>";
echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=917;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八荒雷动の傲视群雄〗（纪念版）</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗x5,</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=846;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x3</font>";

echo "<br>";
echo "<font color=black>第10名以外</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=846;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖凤凰圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x1,</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";

echo "<br>";

echo "<font color=red>---------------充值榜-------------</font><br>";









echo "<font color=red>---------------血榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x5，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=463;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（777777）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x2，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";
echo "<br>";


echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------血榜-------------</font><br>";

echo "<font color=red>---------------攻击榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=462;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（666666）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";

echo "<br>";

echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------攻击榜-------------</font><br>";



echo "<font color=red>---------------魔攻榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=465;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（999999）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x2，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";

echo "<br>";

echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------魔攻榜-------------</font><br>";



echo "<font color=red>---------------防御榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=457;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（111111）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";
echo "<br>";


echo "<font color=black>第4-10名：</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";
echo "<font color=red>---------------防御榜-------------</font><br>";




echo "<font color=red>---------------等级榜-------------</font><br>";
echo "<font color=black>第一名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x10，</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x10000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x30，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=461;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【极品6位ID号（555555）靓号卡】</font></a>";
echo "<font color=black>x1，</font>";

echo "<br>";
echo "<font color=black>第二名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x5，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=715;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x5000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x20，</font>";
echo "<br>";
echo "<font color=black>第三名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=1089;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10-50元现金红包〗</font></a>";
echo "<font color=black>x1，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=822;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖如意の称号宝箱〗</font></a>";
echo "<font color=black>x2，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x2000，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x10，</font>";


echo "<br>";
echo "<font color=black>第4-10名：</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗</font></a>";
echo "<font color=black>x800，</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=685;
$npc[]=614;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖麒麟圣祖〗（宠物蛋）</font></a>";
echo "<font color=black>x2，</font>";
echo "<br>";
echo "<font color=black>第10名以外无奖励</font>"."<br>";

echo "<font color=red>---------------等级榜-------------</font><br>";
echo "<font color=red>备注：以上各个排行榜现金红包需要充值榜总共金额达到1000元以上给予发放现金红包否则将兑换为对应金额自充卡（发给小轩GM即可QQ私聊找群主兑换）</font><br>";
} elseif($ckid ==36){
echo "<font color=red>开区活动介绍</font><br>";
echo "<font color=red>活动时间2018.11.26-2018.12.02</font><br>";	
echo "<font color=balck>长安城来了位不速之客点石成金，对你没看错可用金矿劵换购各类充值卡分四个区域铁铜银金矿山需要〖点石成金劵〗入场停留时间为5分钟，怪物掉落随机〖金矿石〗看个人运气</font><br>";
	echo "<font color=black>每充值10元赠送〖点石成金劵〗x10</font><br>";	
	echo "<font color=black>往日活动重启如下：</font><br>";	
	echo "<br>";
	
echo "<font color=black>玄武大街出“摔伤的老人”、“奇怪的商人”、“重阳婆婆”NPC</font><br>";	
echo "<br>";
echo "<font color=black>“摔伤的老人”提示：小仙卿，我本是高家庄人氏，重阳节路过长安想去登高，岂料遇上了这附近的妖怪，把我身上的带着的【重阳糕】原料夺去了。小仙卿你帮我找回来，我给你做美味的【重阳糕】和传授你种植的技术。</font><br>";	
echo "<br>";
echo "<font color=black>1.副本掉落、挑战区域掉落【面粉】、【红枣】、【栗子】、【杏仁】、【黑沃土】、【仙玉露】、〖小公主の材料票〗、〖小公主の仙竹〗一定数量的以上4物可以在“摔伤的老人”那里制作兑换【重阳糕】。【重阳糕】可以兑换称号、〖小公主の激素〗</font><br>";	
echo "<br>";
echo "<font color=black>2.奇怪的商人可使用〖小公主の材料票〗购买【面粉】、【红枣】、【栗子】、【杏仁】</font><br>";	
echo "<br>";
echo "<font color=black>3.重阳婆婆购买〖小公主の材料票〗购买【黑沃土】（用于施肥）、【仙玉露】（用于施肥）、〖小公主の仙竹〗（可用于重阳节活动争夺积分榜）</font><br>";	
echo "<br>";
echo "<font color=black>4.农场【黑沃土】【仙玉露】进行施肥必须在最晚施肥时间使用否则之前种植的消失，可使用〖紫星币〗对种植物品进行升级最好5级，成功加1级，失败减1级，到达收获时间则可进行收获普通收割有百分之50的遭遇虫灾。紫星币x20收割免疫虫灾</font><br>";	
echo "<br>";
echo "<font color=black>5.充值（不累计）对应金额送对应金额的套装包，50送圣灵白板套装，100送圣灵1级套装，200送圣灵2级套装，500送圣灵3级套装，1000送圣灵4级套装，2000送噬魂套装（需告知gm是否需要，不需要则转换为金豆1元=5豆）</font><br>";	
echo "<br>";
echo "<font color=black>6.充值（不累计）每充值1元赠送〖紫星币〗x1</font><br>";	
echo "<br>";
echo "<font color=black>7.充值（累计）满100送【比翼双飞】（典藏版）套装，满200送【喜鹊令】x2，满500送〖七夕令〗x2，满1000送〖七夕令〗x4（需告知gm是否需要，不需要则转换为金豆1元=5豆）</font><br>";	
echo "<br>";
echo "<font color=black>8.充值（累计）满10元送〖小公主の材料票〗x100，满20元送〖小公主の材料票〗x200，满50元送〖小公主の材料票〗x500，满100元送〖小公主の材料票〗x1000，满200元送〖小公主の材料票〗x2000，满500元送〖小公主の材料票〗x5000，满1000元送〖小公主の材料票〗x10000，满2000元送〖小公主の材料票〗x20000
备注：满后面的则把前面赠送的一起拿掉</font><br>";	
echo "<br>";
echo "<font color=black>9.充值任意金额送〖绝代芳华〗x1（每个玩家1次）</font><br>";	
echo "<br>";
echo "<font color=black>10.积分榜</font><br>";	
echo "<font color=black>第1名：〖君临王城の至尊皇者〗x1，〖至尊无敌〗x1，〖妖火天尊〗x1，〖护身符〗x100</font><br>";	


echo "<font color=black>第2名：〖至尊无敌〗x1，〖妖火天尊〗x1，〖护身符〗x60</font><br>";	

echo "<font color=black>第3名：〖妖火天尊〗x1，〖护身符〗x30</font><br>";	
echo "<font color=black>第4名：〖护身符〗x20</font><br>";		
echo "<font color=black>第5名：〖护身符〗x15</font><br>";		
echo "<font color=black>第6名：〖护身符〗x10</font><br>";	
echo "<font color=black>第7名：〖护身符〗x8</font><br>";		
echo "<font color=black>第8名：〖护身符〗x5</font><br>";	
echo "<font color=black>第9名：〖护身符〗x3</font><br>";	
echo "<font color=black>第10名：〖护身符〗x1</font><br>";
		echo "<br>";
echo "<font color=black>11.充值榜</font><br>";		
echo "<font color=black>第1名：〖君临天下の武道至尊〗x1，〖倾城佳人の艳冠天下〗x1，〖风流倜傥の百战无双〗x1，〖天下无双の群雄霸主〗x1，〖护身符〗x300</font><br>";	
echo "<font color=black>第2名：〖倾城佳人の艳冠天下〗x1，〖风流倜傥の百战无双〗x1，〖天下无双の群雄霸主〗x1，〖护身符〗x200</font><br>";		
echo "<font color=black>第3名：〖风流倜傥の百战无双〗x1，〖天下无双の群雄霸主〗x1，〖护身符〗x100</font><br>";		
echo "<font color=black>第4名：〖天下无双の群雄霸主〗x1，〖护身符〗x50</font><br>";		
echo "<font color=black>第5名：〖天下无双の群雄霸主〗x1，〖护身符〗x30</font><br>";	
echo "<font color=black>第6名：〖天下无双の群雄霸主〗x1，〖护身符〗x20</font><br>";		
echo "<font color=black>第7名：〖天下无双の群雄霸主〗x1，〖护身符〗x10</font><br>";		
echo "<font color=black>第8名：〖天下无双の群雄霸主〗x1，〖护身符〗x8</font><br>";		
echo "<font color=black>第9名：〖天下无双の群雄霸主〗x1，〖护身符〗x5</font><br>";	
echo "<font color=black>第10名：〖天下无双の群雄霸主〗x1，〖护身符〗x3</font><br>";		
echo "<br>";
echo "<font color=black>12.充值（不累计）每消费50送〖金锭〗x1送〖至尊宝石〗x1</font><br>";	
echo "<br>";

echo "<font color=black>13.充值金豆返利活动</font><br>";	
echo "<font color=red>11月26日：充值金豆返利200%</font><br>";		
echo "<font color=red>11月27日：充值金豆返利170%</font><br>";	
echo "<font color=red>11月28日：充值金豆返利140%</font><br>";	
echo "<font color=red>11月29日：充值金豆返利110%</font><br>";	
echo "<font color=red>11月30日：充值金豆返利80%</font><br>";	
echo "<font color=red>12月01日：充值金豆返利50%</font><br>";	
echo "<font color=red>12月02日：充值金豆返利30%</font><br>";	

echo "<br>";


echo "<font color=black>14.蚂蚁花呗消费送充值金额的百分之10现金红包</font><br>";	
echo "<br>";


} else{


}









//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=1;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");



//显示时间
//include("base/sj.php");





?>





