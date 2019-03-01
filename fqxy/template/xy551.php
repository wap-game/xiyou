<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


	
$hdid=228;
$npcc=$hdid;
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数',$hdid));
$csts=$hdcs+1;

if($hdcs <10){


$hdcs=$hdcs+1;
$nowtime=date('Y-m-d H:i:s');
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=$hdcs where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => $hdcs]);	









echo "<font color=black>〖活动〗脑筋急转弯老师：你最好老老实实答对我的题目~~~不然不让你毕业（答对获取【奖状】x1）</font>"."<br>";
echo "<br>";


//随机出题

//随机
$bz= rand(1, 25);
if($bz ==1){
echo "<font color=black>哪颗牙最后长出来？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>假牙</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>门牙</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>蛀牙</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大板牙</font></a>"."<br>";

} elseif($bz ==2){ 
echo "<font color=black>房间里着火了，小明怎么也拉不开门，请问他后来是怎么出去的？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>等待救援</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>跑出去</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>推开门</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>自身自灭</font></a>"."<br>";


} elseif($bz ==3){ 
echo "<font color=black>蓝兰并没生病，但她整个晚上嘴巴一张一合？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>和我一样</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>她有蛇经病</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>她牙疼</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>她吃瓜子</font></a>"."<br>";



} elseif($bz ==4){ 
echo "<font color=black>什么最会弄虚做假？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=13;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>老师</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=14;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>小果</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>疯心自来</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>魔术师</font></a>"."<br>";


} elseif($bz ==5){ 
echo "<font color=black>铁放在屋外露天会生锈，那么金子呢？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=17;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>不会生锈</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=18;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>会</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>会掉色</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>会被偷</font></a>"."<br>";

} elseif($bz ==6){ 
echo "<font color=black>拿鸡蛋扔石头，为什么鸡蛋没破？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=21;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>左手拿蛋右手扔石头，鸡蛋怎么会破?</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=22;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>右手拿蛋左手扔石头，鸡蛋怎么会破?</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=23;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>鸡蛋是石头做的</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=24;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>鸡蛋变异了</font></a>"."<br>";


} elseif($bz ==7){ 
echo "<font color=black>“新华字典”有多少个字？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=25;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>要翻看慢慢数</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=26;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>四个</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=27;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>2万多个</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=28;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>不知道</font></a>"."<br>";

} elseif($bz ==8){ 
echo "<font color=black>超人和蝙蝠侠有什么不同？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=29;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我们不一样</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=30;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>一个内裤穿里面，一个穿外面</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=31;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>都是hero</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=32;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>不在一个频道</font></a>"."<br>";


} elseif($bz ==9){ 
echo "<font color=black>从来没见过的爷爷他是什么爷爷？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=33;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>老天爷</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=34;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>青天老天爷</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=35;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>老爷爷</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=36;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>坏爷爷</font></a>"."<br>";


} elseif($bz ==10){ 
echo "<font color=black>一只狼钻进羊圈，想吃羊，可是它为啥没吃又没吃羊？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=37;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>不饿</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=38;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>羊太丑</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=39;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>没羊</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=40;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>因为是懒洋洋</font></a>"."<br>";



} elseif($bz ==11){ 
echo "<font color=black>想把梦变成现实，第一步应该干什么？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=41;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>做梦</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=42;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>计划计划</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=43;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>努力</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=44;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>起床</font></a>"."<br>";


} elseif($bz ==12){ 
echo "<font color=black>大熊猫一生中的最大遗憾是什么？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=45;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>有黑眼圈</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=46;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>没有彩色照片</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=47;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>是只猫科动物</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=48;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>是国宝</font></a>"."<br>";


} elseif($bz ==13){ 
echo "<font color=black>哥哥买了3袋米，弟弟买了2袋米，回家后他们把米放在1只大袋里， 现在他们有几袋米？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=49;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>1袋</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=50;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>2袋</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=51;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>3袋</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=52;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>4袋</font></a>"."<br>";



} elseif($bz ==14){ 
echo "<font color=black>小明考了100分，为什麽哭了？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=53;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>满分是1000分</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=54;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>高兴哭</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=55;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>乐哭乐</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=56;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>看错了</font></a>"."<br>";

} elseif($bz ==15){ 
echo "<font color=black>什么东西掉进水里不会湿？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=57;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>影子</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=58;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>鱼儿</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=59;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>马儿</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=60;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>都会湿</font></a>"."<br>";

} elseif($bz ==16){ 
echo "<font color=black>桌子上有一个蜡烛和一个煤油灯，请问先点哪一个？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=61;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>桌子</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=62;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>蜡烛</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=63;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>煤油灯</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=64;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>火柴</font></a>"."<br>";




} elseif($bz ==17){ 
echo "<font color=black>动物园的大象死了,为什么管理员哭得死去活来?</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=65;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>因为他想到挖这么大的坑,可能会累死</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=66;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>要被开除</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=67;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大象被管理员弄死了</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=68;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>管理员的大象~~大象鼻子为什么那么长</font></a>"."<br>";


} elseif($bz ==18){ 
echo "<font color=black>什么东西人们都不想要？ </font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=69;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>死人钱币</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=70;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>人民币</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=71;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大病</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=72;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>病</font></a>"."<br>";



} elseif($bz ==19){ 
echo "<font color=black>森林中有十只鸟，小明开枪打死了一只，其它九只却都没有飞走，为什么？ </font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=73;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=74;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=75;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=76;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";

} elseif($bz ==20){ 
echo "<font color=black>你每天都能看见的最大的影子是什么? </font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=77;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=78;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=79;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=80;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";


} elseif($bz ==21){ 
echo "<font color=black>积木倒了要重搭，房子倒了要怎样？? </font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=81;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=82;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=83;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=84;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";



} elseif($bz ==22){ 
echo "<font color=black>有一个小圆孔的直径只有1厘米，而一种体积达100立方米的物体却能顺利 通过这个小孔，那么它是什么物体呢？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=85;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=86;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=87;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=88;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";

} elseif($bz ==23){ 
echo "<font color=black>小明从六楼向下跳，为什么还没有受伤？</font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=89;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=90;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=91;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=92;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";


} elseif($bz ==24){ 
echo "<font color=black>什么地方盛产安哥拉兔毛？ </font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=93;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=94;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=95;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=96;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";



} elseif($bz ==25){ 
echo "<font color=black>为什么金鱼看上去老是傻乎乎的？ </font>"."<br>";
echo "<font color=black>A.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=97;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>B.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=98;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>C.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=99;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";
echo "<font color=black>D.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=552;
$npc[]=100;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>▓▓▓▓▓▓▓▓▓▓（被遮挡了）</font></a>"."<br>";









} else{
	


	

}
	
//随机出题


} else{	


echo "<font color=red>〖活动〗脑筋急转弯老师：你今日已没有答题机会了哦！！</font>"."<br>";	
	
	








}















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