<?php
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;




 while(!!$row=mysql_fetch_array($result)){
$q2="all_user";
$sql1=mysql_query("select wjid from $q2 where wjid=$row[wjid]",$conn);
$info1=@mysql_fetch_array($sql1);
$fh=$info1[wjid];
if($fh >=1){
echo "<font color=blue>【违规封号】玩家【:".$row[username]."（". $row[wjid]."）】====充值总额：【".$row[vipjy]."】</font></br>";		
} else{	
if($row[vipjy] >=1){	
echo "<font color=red>【YES】玩家【:".$row[username]."（". $row[wjid]."）】====充值总额：【".$row[vipjy]."】</font></br>";	
} else{
echo "<font color=balck>【NO】玩家【:".$row[username]."（". $row[wjid]."）】====充值总额：【".$row[vipjy]."】</font></br>";			
} 	

} 


}


echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=3'><font color=blue>【返回上级】</font></a>"."<br>";
















?>





