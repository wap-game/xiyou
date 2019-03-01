<?php

if($sll!=0){


if($wpsl<$sl){
	$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";

} elseif($wpsl>$sl){   
$wpsl=$wpsl-$sl;


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////



include("./ini/yl_ini.php");
$ymid=($iniFile->getItem('背包页面','页面id'));
if($ymid==35){ //背包其他
include("./sql/mysql.php");//调用数据库连接 
$q2="qt".$wjid;
$strsql = "update $q2 set wpsl=$wpsl where wpid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
} else{
include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$wpsl where wpid=$npcc";//物品id号必改值
$result = mysql_query($strsql);		
} 







///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////
if($ymid==35){ //背包其他
include("./ini/qt_ini.php");
$iniFile->updItem('其他数量', [$npcc => $wpsl]);
} else{
include("./wp/wpxx.php");
if($wpfl==1){//背包书卷
include("./ini/wp_ini.php");
$iniFile->updItem('书卷数量', [$npcc => $wpsl]);
} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");
$iniFile->updItem('材料数量', [$npcc => $wpsl]);
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");
$iniFile->updItem('商城数量', [$npcc => $wpsl]);
} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");
$iniFile->updItem('丹药数量', [$npcc => $wpsl]);
} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");
$iniFile->updItem('任务数量', [$npcc => $wpsl]);
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");
$iniFile->updItem('农场数量', [$npcc => $wpsl]);
} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");
$iniFile->updItem('宝箱数量', [$npcc => $wpsl]);
} else{
}
}
/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////







//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////







	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);



//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////
	//调用yl.ini是否存在
include("./ini/yl_ini.php");
$ymid=($iniFile->getItem('背包页面','页面id'));
//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $ymid]);
echo "<font color=red>你丢弃了".$wpmz."x".$sl."</font>"."<br>";



echo "<br>";

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





} elseif($wpsl==$sl){  


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////

$wpsl=$wpsl-$sl;
include("./ini/yl_ini.php");
$ymid=($iniFile->getItem('背包页面','页面id'));


if($ymid==35){ //背包其他
include("./sql/mysql.php");//调用数据库连接 
$q2="qt".$wjid;
$strsql = "delete from $q2 where wpid=$npcc ";//物品id号必改值
$result = mysql_query($strsql);
} else{
include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "delete from $q2 where wpid=$npcc ";//物品id号必改值
$result = mysql_query($strsql);
} 















///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////

if($ymid==35){ //背包其他
include("./ini/qt_ini.php");
$iniFile->updItem('其他数量', [$npcc => $wpsl]);
} else{
include("./wp/wpxx.php");
if($wpfl==1){//背包书卷
include("./ini/wp_ini.php");
$iniFile->updItem('书卷数量', [$npcc => $wpsl]);
} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");
$iniFile->updItem('材料数量', [$npcc => $wpsl]);
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");
$iniFile->updItem('商城数量', [$npcc => $wpsl]);
} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");
$iniFile->updItem('丹药数量', [$npcc => $wpsl]);
} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");
$iniFile->updItem('任务数量', [$npcc => $wpsl]);
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");
$iniFile->updItem('农场数量', [$npcc => $wpsl]);
} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");
$iniFile->updItem('宝箱数量', [$npcc => $wpsl]);
} else{
}
}



if($ymid==35){ //背包其他
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('其他id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('其他数量', $npcc);
# 删除一个子项
$iniFile->delItem('其他名字', $npcc);
} else{
include("./wp/wpxx.php");
if($wpfl==1){//背包书卷
include("./ini/wp_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('书卷id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('书卷数量', $npcc);
# 删除一个子项
$iniFile->delItem('书卷名字', $npcc);
} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('材料id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('材料数量', $npcc);
# 删除一个子项
$iniFile->delItem('材料名字', $npcc);
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('商城id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('商城数量', $npcc);
# 删除一个子项
$iniFile->delItem('商城名字', $npcc);
} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('丹药id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('丹药数量', $npcc);
# 删除一个子项
$iniFile->delItem('丹药名字', $npcc);
} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('任务id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('任务数量', $npcc);
# 删除一个子项
$iniFile->delItem('任务名字', $npcc);
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('农场id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('农场数量', $npcc);
# 删除一个子项
$iniFile->delItem('农场名字', $npcc);
} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");
//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('宝箱id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('宝箱数量', $npcc);
# 删除一个子项
$iniFile->delItem('宝箱名字', $npcc);
} else{
}
} 
/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////










//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////


include("./wp/wpxx.php");


	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);



//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////





















//调用yl.ini是否存在
include("./ini/yl_ini.php");
$ymid=($iniFile->getItem('背包页面','页面id'));



//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $ymid]);

echo "<font color=red>你丢弃了".$wpmz."x".$sl."</font>"."<br>";

echo "<br>";


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

} else {

}









} else {
$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}


?>




