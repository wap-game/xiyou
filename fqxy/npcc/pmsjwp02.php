<?php

if($sll!=0){

if($gsjgl!=0){
	
if($wpsl>=$sl){
//调用物品信息
include("./wp/wpxx.php");
if($gsjg>=1000){
if($gsjg>=1000&&$gsjg<=99999999999){
	
		//扣除手续费用
$bfb=floor($sl*$gsjg*0.01);
if ($bfb==0) {
$bfb=1;	  
} else{
}
$ylsxf=$bfb;
$ylmm=$ylsxf;
include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));


if($yl>=$ylmm){
	
if($wpbd==1){
	//扣除手续费	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_yl";
$sql1=mysql_query("select bbyl from $q2 where wjid=$wjid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjyl=$info1[bbyl];
$wjyll=$wjyl-$ylsxf;
$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两' => $wjyll]);
//数字转汉字
$yl=$ylmm;
include("./pz/ylts.php");
echo  "<font color=red>手续费：".$ylxx."银两</font></a></br>";
//扣除手续费	
//调用zt.ini是否存在




	





if($wpsl<$sl){
	$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";

} elseif($wpsl>$sl&&$sl!=0){  

 
$wpsl=$wpsl-$sl;


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////


	//背包减
include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$wpsl where wpid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
//仓库加



//获取最大值
$q2="all_pm";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
//调用物品信息
include("./wp/wpxx.php");
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$timex=time(true);
$nowtime=date('Y-m-d H:i:s');
$q2="all_pm";
mysql_query("set names utf8");
$sql = "insert into $q2 (id,wjid,wjmz,pmtime,pmwpid,pmwpmz,pmwpsl,pmwpjg,pmsjc,pmwpfl)  values('$maxidd','$wjid','$wjmz','$nowtime','$npcc','$wpmz','$sl','$gsjg','$timex','$wpfl')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }



//





///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////强制更新数据以数据库数据为主//////////////////////////////////////////////////////////////


if($wpfl==1){
include("./ini/wp_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('书卷数量', [$npcc => $wpsl]);
//ini文件名字
$inina="pm_wp.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('材料数量', [$npcc => $wpsl]);
//ini文件名字
$inina="pm_cl.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('商城数量', [$npcc => $wpsl]);


//ini文件名字
$inina="pm_sc.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  




} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");

# 修改一个分类下子项的值(也可以修改多个)

$iniFile->updItem('丹药数量', [$npcc => $wpsl]);

//ini文件名字
$inina="pm_dy.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");


# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('任务数量', [$npcc => $wpsl]);

//ini文件名字
$inina="pm_rw.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('农场数量', [$npcc => $wpsl]);
//ini文件名字
$inina="pm_nc.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('宝箱数量', [$npcc => $wpsl]);

//ini文件名字
$inina="pm_bx.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==9){ //背包其他
include("./ini/qt_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('其他数量', [$npcc => $wpsl]);

//ini文件名字
$inina="pm_qt.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  



} else{



}




//ini文件名字
$inina="mypm.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  





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




//数字转汉字
$yl=$gsjg;
include("./pz/ylts.php");
echo "<font color=red>你以每件".$ylxx."两的价格拍卖了".$wpmz."x".$sl."</font>"."<br>";








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
include("template/xy027.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");


}





} elseif($wpsl==$sl){  


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////

$wpsl=$wpsl-$sl;

include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "delete from $q2 where wpid=$npcc ";//物品id号必改值
$result = mysql_query($strsql);

//仓库加



//获取最大值
$q2="all_pm";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
//调用物品信息
include("./wp/wpxx.php");
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$timex=time(true);
$nowtime=date('Y-m-d H:i:s');
$q2="all_pm";
mysql_query("set names utf8");
$sql = "insert into $q2 (id,wjid,wjmz,pmtime,pmwpid,pmwpmz,pmwpsl,pmwpjg,pmsjc,pmwpfl)  values('$maxidd','$wjid','$wjmz','$nowtime','$npcc','$wpmz','$sl','$gsjg','$timex','$wpfl')";
 if (!mysql_query($sql,$conn)){
   die('Error: ' . mysql_error());
 }




///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////缓存修改强制更新//////////////////////////////////////////////////////////////






if($wpfl==1){
include("./ini/wp_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('书卷数量', [$npcc => $wpsl]);
//ini文件名字
$inina="pm_wp.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('材料数量', [$npcc => $wpsl]);
//ini文件名字
$inina="pm_cl.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('商城数量', [$npcc => $wpsl]);


//ini文件名字
$inina="pm_sc.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  




} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");

# 修改一个分类下子项的值(也可以修改多个)

$iniFile->updItem('丹药数量', [$npcc => $wpsl]);

//ini文件名字
$inina="pm_dy.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");


# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('任务数量', [$npcc => $wpsl]);

//ini文件名字
$inina="pm_rw.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('农场数量', [$npcc => $wpsl]);
//ini文件名字
$inina="pm_nc.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('宝箱数量', [$npcc => $wpsl]);

//ini文件名字
$inina="pm_bx.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==9){ //背包其他
include("./ini/qt_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('其他数量', [$npcc => $wpsl]);

//ini文件名字
$inina="pm_qt.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  



} else{



}





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
//ini文件名字
$inina="pm_wp.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
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
//ini文件名字
$inina="pm_cl.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
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
//ini文件名字
$inina="pm_sc.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
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

//ini文件名字
$inina="pm_dy.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

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
//ini文件名字
$inina="pm_rw.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  


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
//ini文件名字
$inina="pm_nc.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

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
//ini文件名字
$inina="pm_bx.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==9){ //背包其他
include("./ini/qt_ini.php");

//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('其他id', $xlh);
# 删除一个子项
$iniFile->delItem('其他', $npcc);
# 删除一个子项
$iniFile->delItem('其他数量', $npcc);
# 删除一个子项
$iniFile->delItem('其他名字', $npcc);

//ini文件名字
$inina="pm_qt.ini";
//路径
$path='acher/pm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  



} else{



}



//ini文件名字
$inina="mypm.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  


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

//数字转汉字
$yl=$gsjg;
include("./pz/ylts.php");
echo "<font color=red>你以每件".$ylxx."两的价格拍卖了".$wpmz."x".$sl."</font>"."<br>";

echo "<br>";


if($ymid==""){//背包书卷
$ymid=27;
} else{



}


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

include("template/xy027.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

}

} else {
	$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}





} else {
	$dqwp=0;
echo "<font color=red>对不起！绑定物品不能进行拍卖</font>"."<br>";
echo "<br>";
}


} else {
$dqwp=0;
echo "<font color=red>拍卖手续费不足</font>"."<br>";
echo "<br>";
}
} else {
$dqwp=0;
echo "<font color=red>拍卖单价超过最大银两限制</font>"."<br>";
echo "<br>";
}
} else {
$dqwp=0;
echo "<font color=red>拍卖单价必须在1000银两上</font>"."<br>";
echo "<br>";
}

} else {
	$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}
} else {
$dqwp=0;
echo "<font color=red>拍卖价格输入有误请重新输入</font>"."<br>";
echo "<br>";
}
} else {
$dqwp=0;
echo "<font color=red>拍卖数量输入有误请重新输入</font>"."<br>";
echo "<br>";
}


?>




