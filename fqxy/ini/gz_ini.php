<?php











//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="gz.ini";
$path='acher/gz';
$file = $path."/".$inina;	
if(file_exists($file))
{


}
else
{
 
$inina="gz.ini";
$path='acher/gz';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[官宅信息]");
$iniFile = new iniFile($file);
$iniFile->addItem('官宅id',['初始' => 123]); 
$iniFile->addItem('官宅持有人id',['初始' => 123]); 
$iniFile->addItem('官宅持有人名字',['初始' => 123]); 
$iniFile->addItem('官宅名字',['初始' => 123]); 
$iniFile->addItem('官宅分类',['初始' => 123]); 
$iniFile->addItem('官宅改名',['初始' => 123]); 
   
include("./sql/mysql.php");//调用数据库连接 
 
 
 
$q2="all_gzhoures";
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
 //把有值的数据存入一个数组
$m=0;
  while(!!$row=mysql_fetch_array($result)){
 
 $iniFile->addItem('官宅id',[$row[fzid] => $row[fzid]]); 
 
 $iniFile->addItem('官宅持有人id',[$row[fzid] => $row[wjid]]); 
 $iniFile->addItem('官宅持有人名字',[$row[fzid] => $row[wjmz]]); 
  $iniFile->addItem('官宅名字',[$row[fzid] => $row[fzmz]]); 
   $iniFile->addItem('官宅分类',[$row[fzid] => $row[fzfl]]); 
    $iniFile->addItem('官宅改名',[$row[fzid] => $row[fzgm]]); 
 




 
 
 
 
 
 
 
    
   }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

}

$iniFile = new iniFile($file);

?>