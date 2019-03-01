<?php




//判断物品是否满足
$wpsl=($iniFile->getItem($wpzzz,$wpid));
$wpsll=$wpsl+$wpkc;

if($wpsl!=""){
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$wpsll where wpid=$wpid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem($wpzzz, [$wpid => $wpsll]);
} else{

//获取最大值
$q2="wp".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}

$npcc=$wpid;

include("./wp/wpxx.php");
$q2="wp".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$npcc','$wpsll','$wpfl')";

 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }

 
 
 

if($wpfl ==1){
$inina="wp.ini";
} elseif($wpfl ==2){
$inina="cl.ini";
} elseif($wpfl ==4){
$inina="sc.ini";
} elseif($wpfl ==5){
$inina="dy.ini";
} elseif($wpfl ==6){
$inina="rw.ini";
} elseif($wpfl ==7){
$inina="nc.ini";
} elseif($wpfl ==8){
$inina="bx.ini";
} else{

}


//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

 


} 

 echo "<font color=black>得到了".$wpmz."x".$wpkc."</font>"."<br>";


?>
