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


$inina="yl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ymid=($iniFile->getItem('背包页面','页面id'));


if($ymid==261||$ymid==262||$ymid==263||$ymid==264||$ymid==265||$ymid==266||$ymid==267||$ymid==268||$ymid==269){


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=271;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>存入</font></a>"."<font color=black>|</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=274;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>存入全部</font></a>"."<br>";


} elseif($ymid==278||$ymid==279||$ymid==280||$ymid==281||$ymid==282||$ymid==283||$ymid==284||$ymid==285||$ymid==286){


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=290;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取出</font></a>"."<font color=black>|</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=293;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>取出全部</font></a>"."<br>";

} else{

}






echo "<br>";



if($ymid==261){//背包书卷


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=261;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回书卷</font></a>"."<br>";


} elseif($ymid==262){ //背包材料

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=262;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回材料</font></a>"."<br>";



} elseif($ymid==264){ //背包商城

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=264;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回商城</font></a>"."<br>";


} elseif($ymid==265){ //背包丹药
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=265;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回丹药</font></a>"."<br>";


} elseif($ymid==266){ //背包任务

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=266;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回任务</font></a>"."<br>";



} elseif($ymid==267){ //背包农场

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=267;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回农场</font></a>"."<br>";




} elseif($ymid==268){ //背包宝箱

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=268;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回宝箱</font></a>"."<br>";


} elseif($ymid==278){ //背包书卷


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=278;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回书卷</font></a>"."<br>";


} elseif($ymid==279){ //背包材料

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=279;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回材料</font></a>"."<br>";



} elseif($ymid==280){ //背包商城

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=280;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回商城</font></a>"."<br>";


} elseif($ymid==282){ //背包丹药
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=282;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回丹药</font></a>"."<br>";


} elseif($ymid==283){ //背包任务

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=283;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回任务</font></a>"."<br>";



} elseif($ymid==284){ //背包农场

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=284;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回农场</font></a>"."<br>";




} elseif($ymid==285){ //背包宝箱

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=285;
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