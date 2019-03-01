<?php




//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="gz02.ini";
$path='acher/guoz';
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
	

  //连接数据库提取数据写入ini 

$inina="gz02.ini";
$path='acher/guoz';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[国战信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('id',['初始' => 0]); 
$iniFile->addItem('idd',['初始' => 0]); 
$iniFile->addItem('国家名字',['初始' => 0]); 
$iniFile->addItem('国家id',['初始' => 0]); 
$iniFile->addItem('君主名字',['初始' => 0]); 
$iniFile->addItem('君主id',['初始' => 0]); 
$iniFile->addItem('国家积分',['初始' => 0]); 


include("./sql/mysql.php");//调用数据库连接 
$q2="gz02";
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
 while(!!$row=mysql_fetch_array($result)){

$iniFile->addCategory('id', [$row[id]=>$row[id]]);	
 $iniFile->addCategory('idd', [$row[gjid]=>$row[id]]);	  
$iniFile->addCategory('国家名字', [$row[id]=>$row[gjmz]]);
$iniFile->addCategory('国家id', [$row[id]=>$row[gjid]]);
$iniFile->addCategory('君主名字', [$row[id]=>$row[jzmz]]);
$iniFile->addCategory('君主id', [$row[id]=>$row[jzid]]);
$iniFile->addCategory('国家积分', [$row[id]=>$row[gjjf]]);


}






}


$iniFile = new iniFile($file);


?>