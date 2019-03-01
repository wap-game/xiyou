<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$bpmz=($iniFile->getItem('玩家信息','帮派名字'));

$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){
	
if($bpid>=1){
	
include("./ini/bp_ini.php");
# 获取一个分类下所有数据$
$bpdj=($iniFile->getItem('国家信息','国家等级'));



include("./ini/bpp_ini.php");

$xl=($iniFile->getItem('序列',$wjid));
$gjgx1=($iniFile->getItem('贡献',$xl));
	
echo "<font color=black>".$bpmz."的国家商城</font><br>";
echo "<font color=black>我可以使用的国家贡献：".$gjgx1."点</font><br>";
echo "<font color=black>----------------------</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=186;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>1级商城</font></a>";
echo "<font color=black>|</font>";	
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=596;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>2级商城</font></a>";
echo "<font color=black>|</font>";	
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=597;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>3级商城</font></a>";
echo "<font color=black>|</font>";	
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=598;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>4级商城</font></a>";
echo "<font color=black>|</font>";	
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=599;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>5级商城</font></a>"."<br>";	
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=600;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>6级商城</font></a>";
echo "<font color=black>|</font>";	
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=601;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>7级商城</font></a>";
echo "<font color=black>|</font>";	
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=602;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>8级商城</font></a>";
echo "<font color=black>|</font>";	
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=603;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>9级商城</font></a>";
echo "<font color=black>|</font>";	
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=604;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>10级商城</font></a>"."<br>";	



if($bpdj>=1){
echo "<font color=red>【一级国家商城】</font>"."<br>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=606;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【VIP练级卷】</font></a>";
echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=605;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换（100贡献+1亿银两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=606;
$npc[]=162;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖师门声望礼包〗</font></a>";
echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=605;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换（200贡献+2亿银两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=606;
$npc[]=163;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖宝象国声望礼包〗</font></a>";
echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=605;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换（200贡献+2亿银两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=606;
$npc[]=164;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖天宫声望礼包〗</font></a>";
echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=605;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换（200贡献+2亿银两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=606;
$npc[]=168;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖地府声望礼包〗</font></a>";
echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=605;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换（200贡献+2亿银两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=606;
$npc[]=169;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖傲来国声望礼包〗</font></a>";
echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=605;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换（200贡献+2亿银两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=606;
$npc[]=170;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖乌鸡国声望礼包〗</font></a>";
echo "<font color=black>|</font>";	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=605;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换（200贡献+2亿银两）</font></a>"."<br>";
} else{
echo "<font color=black>一大波商品正在赶来中（前方高能正在施工中）</font>"."<br>";
} 





echo "<font color=black>----------------------</font>"."<br>";
echo "<font color=red>温馨提示：国家商城等级越高商品越丰厚越多（在国家商城购买商品需要消耗国家贡献）</font><br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=172;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回国家</font></a>"."<br>";


} else{
echo "<font color=black>你还未加入任何国家！！</font><br>";
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
include("./ini/jjsini.php");
//解锁当前使用的ini



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>