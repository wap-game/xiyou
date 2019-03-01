<?php
echo "<font color=black>【初始化奖池】</font>"."<br>";
echo "<font color=black>所有奖池已初始化完毕</font>"."<br>";


include("./sql/mysql.php");//调用数据库连接 
$q2="all_jc";
$strsql="truncate table $q2";
$result=mysql_query($strsql);

$inina="hdjc.ini";
$path='acher/hdjc';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
//更新缓存数据






echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";
?>





