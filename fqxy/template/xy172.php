<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));


$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){






if($bpid>=1){
include("./ini/bpp_ini.php");

$xl=($iniFile->getItem('序列',$wjid));
$gjgx1=($iniFile->getItem('贡献',$xl));
$gjgx2=($iniFile->getItem('历史贡献',$xl));
//调用zt.ini是否存在
   
include("./ini/bp_ini.php");

# 获取一个分类下所有数据$
$bp=($iniFile->getCategory('国家信息'));


echo "<font color=black>".$bp[国家名字]."（".$bp[国家等级]."级）</font>";
if($bp[现任君主id]>1){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=595;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>升级</font></a>";
} else{

}

echo "<br>";






echo "<font color=black>【首任君主】:".$bp[首任君主]."(".$bp[首任君主id].")</font><br>";
echo "<font color=black>【现任君主】:".$bp[现任君主]."(".$bp[现任君主id].")</font><br>";


if($bp[辅助大臣id]>1){
echo "<font color=black>【辅助大臣】:".$bp[辅助大臣]."(".$bp[辅助大臣id].")</font><br>";
} else{
echo "<font color=black>【辅助大臣】:暂无</font><br>";
}

if($bp[军机大臣id]>1){
echo "<font color=black>【军机大臣】:".$bp[军机大臣]."(".$bp[军机大臣id].")</font><br>";
} else{
echo "<font color=black>【军机大臣】:暂无</font><br>";
}
if($bp[财政大臣id]>1){
echo "<font color=black>【财政大臣】:".$bp[财政大臣]."(".$bp[财政大臣id].")</font><br>";
} else{
echo "<font color=black>【财政大臣】:暂无</font><br>";
}
if($bp[工部大臣id]>1){
echo "<font color=black>【工部大臣】:".$bp[工部大臣]."(".$bp[工部大臣id].")</font><br>";
} else{
echo "<font color=black>【工部大臣】:暂无</font><br>";
}
if($bp[外交大臣id]>1){
echo "<font color=black>【外交大臣】:".$bp[外交大臣]."(".$bp[外交大臣id].")</font><br>";
} else{
echo "<font color=black>【外交大臣】:暂无</font><br>";
}
if($bp[军团长id]>1){
echo "<font color=black>【军团长】:".$bp[军团长]."(".$bp[军团长id].")</font><br>";
} else{
echo "<font color=black>【军团长】:暂无</font><br>";
}

echo "<font color=black>国家人数:".$bp[国家人数]."/".$bp[国家人数max]."</font><br>";
echo "<font color=black>国家经验:".$bp[国家经验]."/".$bp[国家经验max]."</font><br>";
echo "<font color=red>国家资金:";
//调用阿拉伯数字转汉字
$yl=$bp[国家资金];
include("./wp/ylxx.php");
echo "</font><br>";

echo "<font color=black>国家声望:".$bp[国家声望]."</font><br>";
echo "<font color=black>可用贡献:".$gjgx1."点</font><br>";
echo "<font color=black>历史贡献:".$gjgx2."点</font><br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=186;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>国家商城</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=175;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>国家成员</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=185;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>捐献银两</font></a>"."<br>";



if($wjid==$bp[现任君主id]){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=177;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>任命官员</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=173;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>解散国家</font></a>"."<br>";

} else{
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=182;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>退出国家</font></a>"."<br>";
}
















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
echo "----------------------"."<br>";
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