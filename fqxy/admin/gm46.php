<?php





$wjid=10000002;
//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='allhbmoney_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁


if($zsspd==1&&$all_lock2==1){

echo "<font color=red>【小轩西游红包管理】</font>"."<br>";
include("./sql/mysql.php");//调用数据库连接 
$q2="all_xjhb";
mysql_query("set names utf8");
$strsql = "delete from $q2 where id=$hbid ";//物品id号必改值
$result = mysql_query($strsql);
echo "<font color=black>清理完毕</font>"."<br>";

echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=45'><font color=blue>【返回红包管理】</font></a>"."<br>";


echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";

} else{	
}



//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini


//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini



?>
