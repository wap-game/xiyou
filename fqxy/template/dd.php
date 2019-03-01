<?

if($wjid >=10000000){	
//写入数据库
include("./sql/mysql.php");//调用数据库连接 
 //获取最大值
$q2="all_cz";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
 if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,czid,czje,cztime,czfl)  values('$maxidd','$cz01','$cz02','$cz03','$cz04')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{

}








?>