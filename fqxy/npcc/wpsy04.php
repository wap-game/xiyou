<?php


include("./wj/dysx.php");
//调用dyxx.ini是否存在
include("./ini/dyxx_ini.php");
$inina="dyxx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$wpsycs=($iniFile->getItem('物品使用次数',$npcc));
if($wpsycs >=1&&$wpsycs <$xzcs){
$dywpsl=$xzcs-$wpsycs;	
if($wpsl >$dywpsl){	
$wpsl=$dywpsl;
} else{
}
	
} elseif($wpsycs ==""){
if($wpsl >$xzcs){	
$wpsl=$xzcs;
} else{
}
} else{
//include("./wj/wpxx.php");

echo "<font color=red>对不起！".$wpmz."使用已达到".$xzcs."次上限</font><br>";

$inina="yl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ymid=($iniFile->getItem('背包页面','页面id'));
	
	
if($ymid==27){//背包书卷
include("template/xy027.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==28){ //背包材料
include("template/xy028.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==30){ //背包商城
include("template/xy030.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==31){ //背包丹药
include("template/xy031.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==32){ //背包任务

include("template/xy032.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} elseif($ymid==33){ //背包农场
include("template/xy033.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==34){ //背包宝箱
include("template/xy034.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==35){ //背包宝箱
include("template/xy035.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} else{



}



exit;

}






?>




