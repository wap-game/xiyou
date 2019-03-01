<?php

echo "<font color=red>【小轩西游充值订单】</font>"."<br>";


echo "<font color=black>【订单已清空】</font>"."<br>";

include("./sql/mysql.php");//调用数据库连接 
//清空家具
$q2="all_cz";
$strsql="truncate table $q2";
$result=mysql_query($strsql);

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";





?>
