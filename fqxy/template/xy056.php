<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

//调用sw.ini是否存在
   
include("./ini/sw_ini.php");

$inina="sw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$sw=($iniFile->getCategory('声望值'));











echo  "现有声望如下:"."<br>";
echo  "夫妻声望：".$sw[夫妻声望]."<br>";
echo  "将军府声望：".$sw[将军府声望]."<br>";
echo  "龙宫声望：".$sw[龙宫声望]."<br>";
echo  "方寸山声望：".$sw[方寸山声望]."<br>";
echo  "普陀山声望：".$sw[普陀山声望]."<br>";
echo  "月宫声望：".$sw[月宫声望]."<br>";
echo  "恶魔广场声望：".$sw[恶魔广场声望]."<br>";
echo  "西游声望：".$sw[西游声望]."<br>";
echo  "宝象国声望：".$sw[宝象国声望]."<br>";
echo  "乌鸡国声望：".$sw[乌鸡国声望]."<br>";
echo  "天宫声望：".$sw[天宫声望]."<br>";
echo  "地府声望：".$sw[地府声望]."<br>";
echo  "傲来国声望：".$sw[傲来国声望]."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回状态</font></a>"."<br>";

echo "</br>";
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
include("./ini/jsini.php");
//解锁当前使用的ini




?>