<?php




$npcc1=$npcc;
//调用tx.ini是否存在
 include("./ini/tx_ini.php");
$npcc=$npcc1;
//ini文件名字
$inina="tx.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$txid=($iniFile->getItem('头衔名字',$npcc));
 include("./wp/txxx.php");
 
if ($txid!="") {
	$wpsy=1;//使用失败
	echo "<font color=black>对不起！你已经获得过了".$wpmz."称号了！！</font>"."<br>"; 

	} else{
  
include("./sql/mysql.php");//调用数据库连接 
$q2="tx".$wjid;
mysql_query("set names utf8");
$sql = "insert into $q2 (txid,txxs)  values($npcc,'1')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }	
unlink($ininame); //删除文件  




///////////////////////////////更新状态数据////////////////	
include("./wj/ztt.php");

if ($max1>0) {
$maxq=$wjxx1[血];
$maxq=$maxq+$max1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['血' => $maxq]);
} else{
} 
if ($max2>0) {
$maxq=$wjxx1[max攻击];
$maxq=$maxq+$max1;
$maxk = ceil(($maxq)/ 1.3);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['攻击'  => $maxk,'max攻击'  => $maxq]);
} else{
} 


if ($max3>0) {
$maxq=$wjxx1[max防御];
$maxq=$maxq+$max1;
$maxk = ceil(($maxq)/ 1.3);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['防御'  => $maxk,'max防御'  => $maxq]);
} else{
} 
if ($max3>0) {
$maxq=$wjxx1[max魔攻];
$maxq=$maxq+$max1;
$maxk = ceil(($maxq)/ 1.3);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['魔攻'  => $maxk,'max魔攻'  => $maxq]);
} else{
} 
///////////////////////////////更新状态数据////////////////	





echo "<font color=black>恭喜你！获得了".$wpmz."称号！！</font>"."<br>"; 
$wpsy=2;//使用成功
//调用tx.ini是否存在
 include("./ini/tx_ini.php");
	$npcc=$npcc1;
		
		
} 




?>
