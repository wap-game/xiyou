<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="fz.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
 
$inina="fz.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
$iniFile = new iniFile($file);
$iniFile->addItem('所处房间人id',['初始' => 123]); 

}
$iniFile = new iniFile($file);



?>