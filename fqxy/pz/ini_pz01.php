<?php



if($wwpfl==1){
$pzinimz1="序列"; 
$pzinimz2="书卷id"; 
$pzinimz3="书卷名字"; 
$wpzzz="书卷数量";  
$inina="wp.ini";
//调用wp.ini是否存在
include("./ini/wp_ini.php");
}elseif($wwpfl ==2){
$pzinimz1="序列"; 
$pzinimz2="材料id"; 
$pzinimz3="材料名字"; 	
$wpzzz="材料数量"; 
$inina="cl.ini";
//调用sc.ini是否存在
include("./ini/cl_ini.php");
}elseif($wwpfl ==3){
$pzinimz1="序列"; 
$pzinimz2="装备id"; 
$pzinimz3="装备名字"; 
$wpzzz="装备数量";  
$inina="zb.ini";
//调用zb.ini是否存在
include("./ini/zb_ini.php");
}elseif($wwpfl ==4){
$pzinimz1="序列"; 
$pzinimz2="商城id"; 
$pzinimz3="商城名字"; 	
$wpzzz="商城数量";  
$inina="sc.ini";
//调用sc.ini是否存在

include("./ini/sc_ini.php");

}elseif($wwpfl ==5){
$pzinimz1="序列"; 
$pzinimz2="丹药id"; 
$pzinimz3="丹药名字"; 	
$wpzzz="丹药数量";  
$inina="dy.ini";
//调用dy.ini是否存在
include("./ini/dy_ini.php");
}elseif($wwpfl ==6){
$pzinimz1="序列"; 
$pzinimz2="任务id"; 
$pzinimz3="任务名字"; 	
$wpzzz="任务数量";  
$inina="rw.ini";
//调用rw.ini是否存在
include("./ini/rw_ini.php");
}elseif($wwpfl ==7){
$pzinimz1="序列"; 
$pzinimz2="农场id"; 
$pzinimz3="农场名字"; 	
$wpzzz="农场数量";  
$inina="nc.ini";
//调用nc.ini是否存在
include("./ini/nc_ini.php");
}elseif($wwpfl ==8){
$pzinimz1="序列"; 
$pzinimz2="宝箱id"; 
$pzinimz3="宝箱名字"; 	
$wpzzz="宝箱数量";  
$inina="bx.ini";
//调用bx.ini是否存在
include("./ini/bx_ini.php");
}elseif($wwpfl ==9){
$pzinimz1="序列"; 
$pzinimz2="其他id"; 
$pzinimz3="其他名字"; 	
$wpzzz="其他数量";  
$inina="qt.ini";
//调用qt.ini是否存在
include("./ini/qt_ini.php");
} else{

}
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$npcc=$npccc;

?>
