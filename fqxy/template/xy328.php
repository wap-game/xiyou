<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('玩家信息',['法宝经验', '等级']));


$lvl=$wjxx[等级];
$wjxljy=$wjxx[法宝经验];


//页面值
$q5=328;



//当前等级升级所需要的经验
$lvl1=(($lvl+1)*($lvl+2)*($lvl+2)*($lvl+2)*($lvl+3)+10000);


//数字转汉字
$yl=$lvl1;
include("./pz/ylts.php");
echo "<font color=black>法宝经验最大储存:</font>".$ylxx."<font color=black>经验</font>"."<br>";
//数字转汉字
$yl=$wjxljy;
include("./pz/ylts.php");

echo "<font color=black>当前可用法宝经验:</font>".$ylxx."<font color=black>经验</font>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回状态</font></a>"."<br/>";



echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br/>";






echo "----------------------"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=1;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏首页</font></a>"."<br/>";


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>