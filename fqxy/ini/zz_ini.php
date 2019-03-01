<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="zz.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){

} else{
	

   //连接数据库提取数据写入ini 
   
$inina="zz.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家种植]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

$iniFile->addItem('编号id',['初始' => 123]); 
$iniFile->addItem('种植等级',['初始' => 123]); 
$iniFile->addItem('种植名字',['初始' => 123]); 
$iniFile->addItem('种植物品',['初始' => 123]); 
$iniFile->addItem('种植数量',['初始' => 123]); 
$iniFile->addItem('种植时间',['初始' => 123]); 
$iniFile->addItem('施肥时间',['初始' => 123]); 
$iniFile->addItem('收获时间',['初始' => 123]); 


include("./sql/mysql.php");//调用数据库连接 
//判断表是否存在
$q2="zz".$wjid;
if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '". $q2."'"))==1) {
} else {
mysql_query("set names utf8");
$sql = " CREATE  TABLE  $q2 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号id',
`zzdj` int( 11  )  NOT  NULL default  '0' COMMENT  '种植等级',
`zzwpmz` text NOT  NULL  COMMENT  '种植名字',
`zzwpid` int( 11  )  NOT  NULL default  '0' COMMENT  '种植物品id',
`zzwpsl` int( 11  )  NOT  NULL default  '0' COMMENT  '种植数量',
`zztime` datetime  NOT  NULL  COMMENT  '种植时间',
`sftime` datetime  NOT  NULL  COMMENT  '施肥时间',
`shtime` datetime  NOT  NULL  COMMENT  '收获时间')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";


mysql_query($sql,$conn);
}
//判断表是否存在










//判断值是否存在


$zzid=1;
$q2="zz".$wjid;
$sql1=mysql_query("select id from $q2 where id=$zzid",$conn);
$info1=@mysql_fetch_array($sql1);
$xlpd=$info1[id];
if($xlpd ==""){
//获取最大值
$q2="zz".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}

$nowtime=date('Y-m-d H:i:s');
$tiemxx=date('Y-m-d H:i:s',strtotime('+999 day'));
$tiemxx1=date('Y-m-d H:i:s',strtotime('+999 day'));
$sql = "insert into $q2 (id,zzdj,zzwpmz,zzwpid,zzwpsl,zztime,sftime,shtime)  values('$maxidd','1','0','0','0','$nowtime','$tiemxx1','$tiemxx')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }
} else{
}




//判断值是否存在






$q2="zz".$wjid;
mysql_query("set names utf8");
$str="select * from $q2";
$result=mysql_query($str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;




 while(!!$row=mysql_fetch_array($result)){

 
 


$iniFile->addCategory('编号id', [$row[id]=> $row[id]]);
$iniFile->addCategory('种植等级', [$row[id]=> $row[zzdj]]);
$iniFile->addCategory('种植名字', [$row[id]=> $row[zzwpmz]]);
$iniFile->addCategory('种植物品', [$row[id]=> $row[zzwpid]]);
$iniFile->addCategory('种植数量', [$row[id]=> $row[zzwpid]]);
$iniFile->addCategory('种植时间', [$row[id]=> $row[zztime]]);
$iniFile->addCategory('施肥时间', [$row[id]=> $row[sftime]]);
$iniFile->addCategory('收获时间', [$row[id]=> $row[shtime]]);



}








}






$iniFile = new iniFile($file);











?>