<?php


//更新缓存数据
$inina="seach.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 



//调用yl.ini是否存在
include("./ini/yl_ini.php");
$ymid=($iniFile->getItem('背包页面','页面id'));
if($ymid==538){//背包书卷
include("template/xy538.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==539){ //背包材料
include("template/xy539.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==541){ //背包商城
include("template/xy541.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==542){ //背包丹药
include("template/xy542.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==543){ //背包任务

include("template/xy543.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} elseif($ymid==544){ //背包农场
include("template/xy544.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==545){ //背包宝箱
include("template/xy545.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} else{
}






?>

