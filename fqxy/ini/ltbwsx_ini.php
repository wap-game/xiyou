<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="ltbwsx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{

   //连接数据库提取数据写入ini 
   
$inina="ltbwsx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家属性]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('擂台玩家属性',['玩家id' => $lt01]); 
$iniFile->addItem('擂台玩家属性',['玩家名字' => $lt02]); 
$iniFile->addItem('擂台玩家属性',['玩家hp' => $lt03]);
$iniFile->addItem('擂台玩家属性',['玩家maxhp' => $lt03]);
$iniFile->addItem('擂台玩家属性',['玩家攻击' => $lt04]);
$iniFile->addItem('擂台玩家属性',['玩家魔攻' => $lt05]);
$iniFile->addItem('擂台玩家属性',['玩家防御' => $lt06]);
$iniFile->addItem('擂台玩家属性',['玩家门派' => $lt07]);
$iniFile->addItem('擂台玩家属性',['擂台编号' => $lt08]); 
}


$iniFile = new iniFile($file);




?>