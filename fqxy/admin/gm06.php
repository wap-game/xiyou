<?php

echo "<font color=red>【发放物品】</font>"."<br>";

if($_POST['submit']){
$wpid= $_POST['wp'];	
$wpsl= $_POST['sl'];	
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
if($wpsl>=1&&$wpsl<=5000000){
if($wpid>=1&&$wpid<=5000){
//调用zt.ini是否存在
include("./ini/zt_ini.php");
$wjname=($iniFile->getItem('玩家信息','玩家名字'));
$npcc=$wpid;
//调用物品信息
include("./wp/wpxx.php");
if($wpmz!=""){

echo "<font color=red>确定要向玩家【".$wjname."】（".$wjid."）发放".$wpmz."x".$wpsl."吗？</font>"."<br>";


echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=7&&user=$wjid&&wpid=$wpid&&wpsl=$wpsl&&wpmz=$wpmz&&wjname=$wjname&&wpfl=$wpfl'><font color=blue>是的~~我确认</font></a>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=5&&user=$wjid'><font color=blue>不~~我点错了</font></a>"."<br>";


} else{
echo "<font color=red>你输入的物品ID有误请重新输入（没有数据）</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=5&&user=$wjid'><font color=blue>返回重新输入</font></a>"."<br>";
}
} else{
echo "<font color=red>你输入的物品ID有误请重新输入（范围1-5000内）</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=5&&user=$wjid'><font color=blue>返回重新输入</font></a>"."<br>";
}
} else{
echo "<font color=red>你输入的物品数量有误请重新输入（范围1-5000内）</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=5&&user=$wjid'><font color=blue>返回重新输入</font></a>"."<br>";
}


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//

}else{

}











echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";





?>
