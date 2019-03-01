<?php


//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="shuax.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file))
{


}
else
{




$inina="shuax.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");


# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

# 添加一个分类并直接添加子项
$iniFile->addItem('玩家信息',['初始' => 123]);
$iniFile->addCategory('玩家信息', ['刷新过快' => 1]);
//数据库数据导入ini文件


}
$iniFile = new iniFile($file);



?>