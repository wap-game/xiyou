<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="zd.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


}else{
 
$inina="zd.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家]");
$iniFile = new iniFile($file);
$iniFile->addItem('快捷技能id',['初始' => 123]); 
$iniFile->addItem('快捷名字',['初始' => 123]); 
$iniFile->addItem('快捷分类',['初始' => 123]); 
$iniFile->addItem('快捷设置',['初始' => 123]); 
# 添加一个分类并直接添加子项
$iniFile->addCategory('快捷技能id', ['快捷1' => '0', '快捷2' => '0', '快捷3' => '0','快捷4' => '0', '快捷5' => '0', '快捷6' => '0','快捷7' => '0', '快捷8' => '0', '快捷9' => '0']);
$iniFile->addCategory('快捷名字', ['快捷1' => '0', '快捷2' => '0', '快捷3' => '0','快捷4' => '0', '快捷5' => '0', '快捷6' => '0','快捷7' => '0', '快捷8' => '0', '快捷9' => '0']);
$iniFile->addCategory('快捷分类', ['快捷1' => '0', '快捷2' => '0', '快捷3' => '0','快捷4' => '0', '快捷5' => '0', '快捷6' => '0','快捷7' => '0', '快捷8' => '0', '快捷9' => '0']);












//初始
}
$iniFile = new iniFile($file);



?>