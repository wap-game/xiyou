<?php

$mysqla1 = '127.0.0.1';
$mysqla2 = 'root';
$mysqla3 = 'xiaoxuan123';



//本地服务器连接
$conn=@mysql_connect($mysqla1,$mysqla2,$mysqla3)or die ("连接服务器失败");
mysql_select_db('xxjyuser', $conn);

//echo "<font color=pink>数据库调试信息----连接数据库中.......</font>"."<br>";
?>