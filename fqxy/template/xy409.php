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
echo "<font color=blue>|</font>";	
echo "<font color=black>每日签到</font>";	

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

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=418;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>铂金贵族</font></a>";

echo "<font color=black>|</font>";	
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

		
	echo "<br>";






$qdy= date('m')*1;
if($qdy ==1){
$qdy="一月";
} elseif($qdy ==2){
$qdy="二月";
} elseif($qdy ==3){
$qdy="三月";
} elseif($qdy==4){   
$qdy="四月";
} elseif($qdy ==5){
$qdy="五月";
} elseif($qdy ==6){
$qdy="六月";
} elseif($qdy==7){   
$qdy="七月";
} elseif($qdy==8){   
$qdy="八月";
} elseif($qdy==9){   
$qdy="九月";
} elseif($qdy==10){   
$qdy="十月";
} elseif($qdy==11){   
$qdy="十一月";
} elseif($qdy==12){   
$qdy="十二月";
} else{	
$qdy="错误月";
}

include("./ini/qd_ini.php");

$qdxx1=($iniFile->getCategory('签到信息'));
echo "<font color=red>【".$qdy."签到活动】</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=412;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【".$qdy."签到奖励一览】</font></a>"."<br>";


echo "<font color=black>今日签到情况：</font>";
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间','30'));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间','30'));
$hdlq=2;
} else{	
}
$hdlq=2;
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=30;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【每日签到】</font></a>"."<br>";
} else{	
echo "<font color=red>已签到</font></br>"; 
} 









echo "<br>";
echo "<font color=black>1.</font><font color=wathet>2次签到奖励--</font>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=411;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【领取】</font></a>"."<br>";



echo "<br>";
echo "<font color=black>1.</font><font color=wathet>5次签到奖励--</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=411;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【领取】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>1.</font><font color=wathet>10次签到奖励--</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=411;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【领取】</font></a>"."<br>";


echo "<br>";
echo "<font color=black>1.</font><font color=wathet>15次签到奖励--</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=411;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【领取】</font></a>"."<br>";


echo "<br>";
echo "<font color=black>1.</font><font color=wathet>25次签到奖励--</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=411;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【领取】</font></a>"."<br>";


echo "<font color=red>本月已累计签到&nbsp".$qdxx1[签到次数]."&nbsp次</font><br>";

echo "<font color=black>介绍：玩家每天可签到一次，每月1日清零</font><br>";
echo "<font color=black>当累计达到2,5,10,15,25可领取丰厚的奖励</font><br>";
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