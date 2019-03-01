<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="ckrl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
   //连接数据库提取数据写入ini 
   
include("./sql/mysql.php");//调用数据库连接 
 //书卷材料商城丹药任务农场宝箱重量  
$q2="ckwp".$wjid;
$str="select wpid,wpsl from $q2";
$result=mysql_query($str) or die('SQL语句有误');

$hm=0;
while(!!$row=mysql_fetch_array($result)){

if ($row[wpsl]>0){
$wpidd[]=$row[wpid];
$wpsll[]=$row[wpsl];
$hm=$hm+1;
}

}


if ($hm>0){
$i=-1;	

$bwp=0;
for($b=0;$b<$hm;$b++){
$i=$i+1;

$npcc=$wpidd[$i];
//调用物品信息
include("./wp/wpxx.php");

$bwp=$wpsll[$i]*$wpzl+$bwp;


}

} else{

$bwp=0;
}
  //书卷材料商城丹药任务农场宝箱重量  
 
 
 
 
  //宝石重量 
 
 $q2="ckqt".$wjid;
$str="select wpid,wpsl from $q2";
$result=mysql_query($str) or die('SQL语句有误');

$hm=0;
while(!!$row=mysql_fetch_array($result)){

if ($row[wpsl]>0){
$wpidd1[]=$row[wpid];
$wpsll1[]=$row[wpsl];
$hm=$hm+1;
}

}


if ($hm>0){
$i=-1;	

$bwp1=0;
for($b=0;$b<$hm;$b++){
$i=$i+1;

$bsid=$wpidd[$i];
//调用物品信息
include("./wp/zbbs.php");

$bwp1=$wpsll1[$i]*$bszl+$bwp1;


}

} else{

$bwp1=0;
}
 
 
   //宝石重量 
 
 
  //装备重量 
$q2="ckzb".$wjid;
$str="select zbid from $q2";
$result=mysql_query($str) or die('SQL语句有误');

$hm=0;
while(!!$row=mysql_fetch_array($result)){


$wpidd[]=$row[zbid];
$hm=$hm+1;


}


if ($hm>0){
$i=-1;	

$bwp2=0;
for($b=0;$b<$hm;$b++){
$i=$i+1;

$npcc=$wpidd[$i];
//调用物品信息
include("./wp/zbxx.php");

$bwp2=$wp25+$bwp2;


}

} else{

$bwp2=0;
}
  
  $bwp3=$bwp+$bwp1+$bwp2;
  
  
  //装备重量 
$inina="ckrl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");


# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
//数据库数据导入ini文件
# 添加一个分类并直接添加子项
$iniFile->addItem('仓库容量',['初始' => 123]);
$iniFile->addItem('仓库已用容量',['容量' => $bwp3]);
//数据库数据导入ini文件



}
$iniFile = new iniFile($file);



?>