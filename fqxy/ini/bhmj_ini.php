<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="bhmj.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
 
$inina="bhmj.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
$iniFile = new iniFile($file);
$nowtime=date('Y-m-d');
$iniFile->addItem('百花秘境时间',['初始' => $nowtime]); 

}



$iniFile = new iniFile($file);



?>