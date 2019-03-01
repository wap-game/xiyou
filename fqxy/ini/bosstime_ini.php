<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="bosstime_".$bossid.".ini";
$path='acher/all_boss';
$file = $path."/".$inina;	
if(file_exists($file)){


} else{
    //连接数据库提取数据写入ini 
$inina="bosstime_".$bossid.".ini";
$path='acher/all_boss';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[boss信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$nowtime=date('Y-m-d H:i:s');
$iniFile->addItem('死亡时间',['初始' => $nowtime]); 












}
$iniFile = new iniFile($file);


?>