<?php



//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="qggz.ini";
$path='acher/gz';
$file = $path."/".$inina;	
if(file_exists($file))
{


}
else
{
 
$inina="qggz.ini";
$path='acher/gz';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[求购官宅信息]");
$iniFile = new iniFile($file);
$iniFile->addItem('排序id',['初始' => 123]); 
$iniFile->addItem('求购信息',['初始' => 123]); 
$iniFile->addItem('求购人',['初始' => 123]); 
$iniFile->addItem('求购人id',['初始' => 123]); 
$iniFile->addItem('求购价格',['初始' => 123]); 

   
include("./sql/mysql.php");//调用数据库连接 
 
 
 
$q2="all_qggz";
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
 //把有值的数据存入一个数组
$m=0;
  while(!!$row=mysql_fetch_array($result)){

 $iniFile->addItem('排序id',[$row[wjid] => $row[id]]); 
 
 $iniFile->addItem('求购信息',[$row[wjid] => $row[qgxx]]); 
 $iniFile->addItem('求购人',[$row[wjid] => $row[qgmz]]); 
  $iniFile->addItem('求购人id',[$row[wjid] => $row[wjid]]); 
   $iniFile->addItem('求购价格',[$row[wjid] => $row[qgjg]]); 

 




 
 
 
 
 
 
 
    
   }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

}

$iniFile = new iniFile($file);


?>