<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="pksw.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
 
$inina="pksw.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
$iniFile = new iniFile($file);
$iniFile->addItem('死亡时间',['初始' => 123]); 
$iniFile->addItem('玩家名字',['初始' => 123]); 
$iniFile->addItem('玩家id',['初始' => 123]); 
$iniFile->addItem('pk验证',['初始' => 123]); 

//初始
}
$iniFile = new iniFile($file);



?>