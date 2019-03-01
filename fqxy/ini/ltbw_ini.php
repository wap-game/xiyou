<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="ltbw.ini";
$path='acher/ltbw';
$file = $path."/".$inina;	
if(file_exists($file)){


} else{


   //连接数据库提取数据写入ini 
   
$inina="ltbw.ini";
$path='acher/ltbw';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家擂台]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

$iniFile->addItem('玩家擂台排名',['初始' => 123]); 
$iniFile->addItem('占领玩家',['初始' => 123]); 
$iniFile->addItem('占领玩家id',['初始' => 123]); 
$iniFile->addItem('占领时间',['初始' => 123]); 
$iniFile->addItem('占领膜拜',['初始' => 123]); 
$iniFile->addItem('比武hp',['初始' => 123]); 
$iniFile->addItem('比武攻击',['初始' => 123]); 
$iniFile->addItem('比武魔攻',['初始' => 123]); 
$iniFile->addItem('比武防御',['初始' => 123]); 
$iniFile->addItem('比武门派',['初始' => 123]); 





include("./sql/mysql.php");//调用数据库连接 
//判断表是否存在
$q2="all_ltbw";
if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '". $q2."'"))==1) {
} else {
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $q2 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号id',
`wjid` int( 11  )  NOT  NULL default  '0' COMMENT  '玩家id',
`wjmz` text NOT  NULL  COMMENT  '玩家名字',
`zltime` datetime  NOT  NULL  COMMENT  '占领时间',
`zlmb` int( 11  )  NOT  NULL default  '0' COMMENT  '占领膜拜',
 `lthp` text NOT  NULL  COMMENT  '擂台hp',
`ltgj` text NOT  NULL  COMMENT  '擂台攻击',
`ltmg` text NOT  NULL  COMMENT  '擂台魔攻',
`ltfy` text NOT  NULL  COMMENT  '擂台防御',
`ltmp` text NOT  NULL  COMMENT  '擂台门派')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysql_query($sql,$conn);
}
//判断表是否存在









$m=10;
$ltid=0;
//判断值是否存在
for($d=0;$d<$m;$d++){
$nowtime=date('Y-m-d H:i:s');
$ltid=$ltid+1;
$q2="all_ltbw";
$sql1=mysql_query("select id from $q2 where id=$ltid",$conn);
$info1=@mysql_fetch_array($sql1);
$xlpd=$info1[id];

if($xlpd ==""){
$ltid01=123;
$ltid02=123;

$sql = "insert into $q2 (id,wjid,wjmz,zltime,zlmb,lthp,ltgj,ltmg,ltfy,ltmp)  values('$ltid','$ltid01','$ltid02','$nowtime','0','0','0','0','0','0')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}

}
 
 
 
 
 

$q2="all_ltbw";
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;




 while(!!$row=mysql_fetch_array($result)){
$iniFile->addCategory('玩家擂台排名', [$row[id]=> $row[wjid]]);
$iniFile->addCategory('占领玩家id', [$row[id]=> $row[wjid]]);
$iniFile->addCategory('占领玩家', [$row[id]=> $row[wjmz]]);
$iniFile->addCategory('占领时间', [$row[id]=> $row[zltime]]);
$iniFile->addCategory('占领膜拜', [$row[id]=> $row[zlmb]]);

$iniFile->addCategory('比武hp', [$row[id]=> $row[lthp]]);
$iniFile->addCategory('比武攻击', [$row[id]=> $row[ltgj]]);
$iniFile->addCategory('比武魔攻', [$row[id]=> $row[ltmg]]);
$iniFile->addCategory('比武防御', [$row[id]=> $row[ltfy]]);
$iniFile->addCategory('比武门派', [$row[id]=> $row[ltmp]]);




}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 


 
 
 

}
$iniFile = new iniFile($file);











?>