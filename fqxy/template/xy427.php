<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){




include("./ini/xl_ini.php");



echo "<font color=black>我的修炼如下：</font>"."<br>";
$xl02="";
$xldj1=($iniFile->getItem('修炼等级','1'));

if($xldj1!=200){
$xldj=$xldj1+1;
} else{	
$xldj=$xldj1;
}
include("./zbdz/xlms.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=428;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【人物修炼（血）】".$xl02."</font></a>"."<br>";

$xl02="";
$xldj2=($iniFile->getItem('修炼等级','2'));
if($xldj2!=200){
$xldj=$xldj2+1;
} else{	
$xldj=$xldj2;
}

include("./zbdz/xlms.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=429;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【人物修炼（攻）】".$xl02."</font></a>"."<br>";


$xl02="";
$xldj3=($iniFile->getItem('修炼等级','3'));
if($xldj3!=200){
$xldj=$xldj3+1;
} else{	
$xldj=$xldj3;
}
include("./zbdz/xlms.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=430;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【人物修炼（魔）】".$xl02."</font></a>"."<br>";


$xl02="";
$xldj4=($iniFile->getItem('修炼等级','4'));
if($xldj1!=200){
$xldj=$xldj4+1;
} else{	
$xldj=$xldj4;
}

include("./zbdz/xlms.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=431;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【人物修炼（防）】".$xl02."</font></a>"."<br>";
echo "<br>";

$xldjj1=$xldj1;
$xldjj2=$xldj2;
$xldjj3=$xldj3;
$xldjj4=$xldj4;
//调用比例换算
include("./wj/xlxx01.php");
echo "<font color=red>修炼（血）加成：</font>";



echo "<font color=black>".$xljc01."血量</font>";
echo "<br>";

echo "<font color=red>修炼（攻）加成：</font>";

echo "<font color=black>".$xljc02."攻击</font>";
echo "<br>";


echo "<font color=red>修炼（魔）加成：</font>";




echo "<font color=black>".$xljc03."魔攻</font>";


echo "<br>";
echo "<font color=red>修炼（防）加成：</font>";

echo "<font color=black>".$xljc04."防御</font>";
echo "<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=432;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>人物修炼（介绍）</font></a>"."<br>";
echo "<font color=black>----------------------</font>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";




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