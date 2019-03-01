<?php



//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

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

/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=498;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖拍卖〗</font></a>";
*/

//echo "<font color=black>◎</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=218;
$npc[]=$npcc;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>〖挂出销售〗</font></a>"."<br>";
echo "<font color=black>☆☆☆☆☆☆☆☆☆☆☆</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=37;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>使用</font></a>";

echo "<font color=black>◎</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=124;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>丢弃</font></a>";
echo "<font color=black>◎</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=126;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>丢弃全部</font></a>"."<br>";


echo "<br>";

include("./ini/yl_ini.php");


# 获取一个分类下某个子项的值
$ymid=($iniFile->getItem('背包页面','页面id'));

if($ymid==27){//背包书卷


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=27;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回书卷</font></a>"."<br>";


} elseif($ymid==28){ //背包材料

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=28;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回材料</font></a>"."<br>";



} elseif($ymid==30){ //背包商城

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=30;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回商城</font></a>"."<br>";


} elseif($ymid==31){ //背包丹药
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=31;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回丹药</font></a>"."<br>";


} elseif($ymid==32){ //背包任务

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=32;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回任务</font></a>"."<br>";



} elseif($ymid==33){ //背包农场

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=33;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回农场</font></a>"."<br>";




} elseif($ymid==34){ //背包宝箱

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=34;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回宝箱</font></a>"."<br>";



} else{


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";



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
include("./ini/jsini.php");
//解锁当前使用的ini











?>