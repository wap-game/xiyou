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

echo "<br>";


//调用user.ini是否存在
include("./ini/user_ini.php");
# 获取一个分类下某个子项的值
$cljid=($iniFile->getItem('最后页面id','页面id'));
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=$cljid;
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