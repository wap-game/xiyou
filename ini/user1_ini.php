<?php







$inina="user.ini";
$path='../ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){
}else{
	
		//ini文件名字
$inina="user.ini";
//判断文件夹是否存在
//路径
$path='../ache/'.$wjid;
$dir = iconv("UTF-8", "GBK", "$path");
        if (!file_exists($dir)){
            mkdir ($dir,0777,true);
        } else {
        }


	
$wjini=$uid+10000000;
file_put_contents($file,"[小轩家园玩家信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

$iniFile->addItem('验证信息',['初始' => 123]); 


$iniFile->addCategory('验证信息', ['玩家id' => $wjini, '玩家验证' => $pass,'玩家昵称' => $name]);

}
$iniFile = new iniFile($file);



?>