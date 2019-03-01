<?php
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina=$fb."_fb.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){

} else{


   //连接数据库提取数据写入ini 
   


//创建文件
file_put_contents($file,"[玩家副本]");


# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem($fbid1,['初始' => 123]);
$iniFile->addItem($fbid2,['初始' => 123]);
$iniFile->addItem($fbid3,['初始' => 123]);
$iniFile->addItem($fbid4,['初始' => 123]);
include("./sql/mysql.php");//调用数据库连接 


$i=0;
for($d=0;$d<4;$d++){
$i=$i+1;
if($i==1){	
$fbid=$fbid1;
} elseif($i==2){  
$fbid=$fbid2;
} elseif($i==3){  
$fbid=$fbid3;
} elseif($i==4){  
$fbid=$fbid4;
} else {
$fbid=1;
} 


$q2="fb".$wjid;
$sql1=mysql_query("select * from $q2 where id=$fbid",$conn);
$info1=@mysql_fetch_array($sql1);
$fbsj=$info1[fb];
$fb01=$info1[wc];
$fb02=$info1[cs];
$fbsj1=1;
if($fbsj==""){	
$fbsj1=2;
$fbsj=date('Y-m-d H:i:s',strtotime("-1 day"));

$sql = "insert into $q2 (id,fb,wc,cs)  values('$fbid','$fbsj','3','0')";
 if (!mysql_query($sql,$conn)){
die('Error: ' . mysql_error());
 }

$fb01=3;
$fb02=0;
} else{
} 

$iniFile->addItem($fbid,['激活时间' => $fbsj]);
$iniFile->addItem($fbid,['完成情况' => $fb01]);
$iniFile->addItem($fbid,['重置次数' => $fb02]);
$ffbb=($iniFile->getItem($fbid,'怪物1'));
if($ffbb==""){	
$fbsj1=2;
} else{
} 
if($fbsj1==2){	
$iniFile->addCategory($fbid, ['怪物1' => '1', '怪物2' => '1', '怪物3' => '1', '怪物4' => '1','怪物5' => '1', '怪物6' => '1', '怪物7' => '1', '怪物8' => '1', '怪物9' => '1']);
} else{
} 








} 












}






$iniFile = new iniFile($file);






?>