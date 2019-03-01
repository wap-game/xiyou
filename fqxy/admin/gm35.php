<?php


$ppczzs=5000;       //充值赠送的
$ppwpsl=10000;//最终充值所得
$vipjf=1000;
$ppwpsl1=70;//赠送背包卷
$ppwpsl2=70;//赠送仓库卷




include("czcode.php");//充值代码

include("./ini/zt_ini.php");


echo "<font color=red>【充值成功】</font>"."<br>";

echo "<font color=red>---------------------</font>"."<br>";
echo "<font color=black>ID：".$wjid."</font>"."<br>";
echo "<font color=black>玩家：".$usermzxx."</font>"."<br>";
echo "<font color=black>价格：1000元</font>"."<br>";
echo "<font color=black>道具1：〖金豆〗x".$ppwpsl."</font>"."<br>";
echo "<font color=black>道具2：〖背包扩容卷〗x".$ppwpsl1."</font>"."<br>";
echo "<font color=black>道具3：〖仓库扩容卷〗x".$ppwpsl2."</font>"."<br>";
echo "<font color=black>VIP积分：".$vipjf."点</font>"."<br>";
echo "<font color=red>---------------------</font>"."<br>";





echo "<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=4'><font color=blue>返回查询玩家</font></a>"."<br>";

echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";
?>





