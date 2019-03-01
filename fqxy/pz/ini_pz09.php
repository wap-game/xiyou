<?php



//调用zf.ini是否存在
include("./ini/zf_ini.php");
$inina="zf.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$zfn=($iniFile->getItem('物品时间年',$npcc));
//获取毫毛时间
$wwpid1=$npcc;
$zfsj=$zfsj1;
include("./pz/pz05.php");
if($xx2 <$zfsj&&$xx2>0){
} else{
	$zfn="";
} 

if ($zfn=="") {
$wpsy=2;//使用成
//现在的时间
$y= date('Y')*1;
$m= date('m')*1;
$d= date('d')*1;
$h= date('H')*1;
$i= date('i')*1;
$s= date('s')*1;




$q2="zf".$wjid;
if($xx2 <$zfsj&&$xx2>0){
include("./sql/mysql.php");//调用数据库连接 
$strsql = "delete from $q2 where wpid=$npcc ";//物品id号必改值
$result = mysql_query($strsql);
$sql1 = "insert into $q2 (wpid,n,y,r,s,f,m)  values('$npcc','$y','$m','$d','$h','$i','$s')";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }	
	
} else{
include("./sql/mysql.php");//调用数据库连接 
$sql1 = "insert into $q2 (wpid,n,y,r,s,f,m)  values('$npcc','$y','$m','$d','$h','$i','$s')";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }

}

//更新缓存数据
unlink($ininame); //删除文件  
//更新缓存数据
echo "<font color=black>恭喜你获得".$wwpmz."祝福！！</font><br>";


} else{
$wpsy=1;//使用失败
echo "<font color=black>对不起！你已有".$wwpmz."祝福，请失效后再用</font><br>";
}



?>
