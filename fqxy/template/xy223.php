<?php


//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	

# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ckid=($iniFile->getItem('最后页面id','ckid'));
$wpid=$npcc;
//调用物品信息
include("./wp/wpxx.php");
if($wpbd==0){
$wpbd="是";
} else{
$wpbd="否";

}
echo "<font color=red>".$wpmz."</font>"."<br>";
echo "<font color=black>描述：".$wpms."</font>"."<br>"; 	
echo "<font color=black>价格：".$wpjg."两</font>"."<br>";
echo "<font color=black>需要等级：".$wpdj."级</font>"."<br>"; 
echo "<font color=black>重量：".$wpzl."</font>"."<br>";
echo "<font color=black>是否绑定：".$wpbd."</font>"."<br>"; 	


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=222;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=226;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回挂售</font></a>"."<br>";

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














?>