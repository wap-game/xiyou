<?php




//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='pm_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁


if($zsspd==1&&$all_lock2==1){
	
	
	
	

$arr = explode("_",$npcc);
$pwpid=$arr[0];

$npcc=$pwpid;

include("./wp/wpxx.php");

$npcc=$arr[1];
$pxid=$npcc;
	
if($wpfl==1){
//调用wp.ini是否存在
include("./ini/pm_wp_ini.php");
} elseif($wpfl==2){ //背包材料
//调用wp.ini是否存在
include("./ini/pm_cl_ini.php");
} elseif($wpfl==4){ //背包商城
//调用wp.ini是否存在
include("./ini/pm_sc_ini.php");
} elseif($wpfl==5){ //背包丹药
//调用wp.ini是否存在
include("./ini/pm_dy_ini.php");
} elseif($wpfl==6){ //背包任务
//调用wp.ini是否存在
include("./ini/pm_rw_ini.php");
} elseif($wpfl==7){ //背包农场
//调用wp.ini是否存在
include("./ini/pm_nc_ini.php");
} elseif($wpfl==8){ //背包宝箱
//调用wp.ini是否存在
include("./ini/pm_bx_ini.php");
} else{
//调用wp.ini是否存在
include("./ini/pm_wp_ini.php");
}

	
	
	
	
	
	
	
	









$pmmwpid=($iniFile->getItem('拍卖物品id',$npcc));
$pmmwjid=($iniFile->getItem('玩家id',$npcc));
$wpsl=($iniFile->getItem('拍卖数量',$npcc));
$wpsjc=($iniFile->getItem('拍卖时间搓',$npcc));
$wpmz=($iniFile->getItem('拍卖名字',$npcc));



//验证时间戳
include("./sql/mysql.php");//调用数据库连接 
$q2="all_pm";
mysql_query("set names utf8");
$sql1=mysql_query("select * from $q2 where id=$npcc",$conn);
$info1=@mysql_fetch_array($sql1);
$pmsjc=$info1[pmsjc];
$pmwjid=$info1[wjid];
$pmwpidd=$info1[pmwpid];

$pmwpsll=$info1[pmwpsl];



if($wpsjc==$pmsjc&&$wjid==$pmwjid&&$pmmwpid==$pmwpidd&&$wpsl==$pmwpsll){

include("./ini/bbrl_ini.php");
$bbrla=($iniFile->getItem('背包已用容量','容量'));

$ddfz=$pmwpsll*1;
$br1=$bbrla+$ddfz;
include("./ini/zt_ini.php");
$br2=($iniFile->getItem('玩家信息','背包容量'));
//判断负重
if($br1<=$br2){



$q2="all_pm";
$strsql = "delete from $q2 where id=$npcc";//物品id号必改值
$result = mysql_query($strsql);


//查询如果没有则添加
$q2="wp".$wjid;
$sql1=mysql_query("select * from $q2 where wpid=$pmmwpid",$conn);
$info1=@mysql_fetch_array($sql1);
$ckwpid=$info1[wpid];
$ckwpsl=$info1[wpsl];
if($ckwpid==""){
//获取最大值
$q2="wp".$wjid;
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$ckwpsl=$ckwpsl+$wpsl;
$npcc=$pmmwpid;
//调用物品信息
include("./wp/wpxx.php");
$q2="wp".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$pmmwpid','$ckwpsl','$wpfl')";
 if (!mysql_query($sql,$conn)){
die('Error: ' . mysql_error());
}
} else{
$q2="wp".$wjid;	
$ckwpsl=$ckwpsl+$wpsl;

$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysql_query($strsql);
} 




$npcc=$pmmwpid;
include("./wp/wpxx.php");


include("./ini/bbrl_ini.php");
# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);




if($wpfl==1){
//调用wp.ini是否存在
include("./ini/pm_wp_ini.php");
} elseif($wpfl==2){ //背包材料
//调用wp.ini是否存在
include("./ini/pm_cl_ini.php");
} elseif($wpfl==4){ //背包商城
//调用wp.ini是否存在
include("./ini/pm_sc_ini.php");
} elseif($wpfl==5){ //背包丹药
//调用wp.ini是否存在
include("./ini/pm_dy_ini.php");
} elseif($wpfl==6){ //背包任务
//调用wp.ini是否存在
include("./ini/pm_rw_ini.php");
} elseif($wpfl==7){ //背包农场
//调用wp.ini是否存在
include("./ini/pm_nc_ini.php");
} elseif($wpfl==8){ //背包宝箱
//调用wp.ini是否存在
include("./ini/pm_bx_ini.php");
} else{
//调用wp.ini是否存在
include("./ini/pm_wp_ini.php");
}
$iniFile->updItem('拍卖数量', [$pxid => $wpsl]);





# 删除一个子项
$iniFile->delItem('排序', $pxid);
# 删除一个子项
$iniFile->delItem('玩家id', $pxid);
# 删除一个子项
$iniFile->delItem('玩家名字', $pxid);
# 删除一个子项
$iniFile->delItem('拍卖时间', $pxid);
# 删除一个子项
$iniFile->delItem('拍卖物品id', $pxid);

# 删除一个子项
$iniFile->delItem('拍卖数量', $pxid);
# 删除一个子项
$iniFile->delItem('拍卖名字', $pxid);

# 删除一个子项
$iniFile->delItem('拍卖价格', $pxid);
# 删除一个子项
$iniFile->delItem('拍卖时间搓', $pxid);



//ini文件名字
$inina="mypm.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

if($wpfl==1){

//ini文件名字
$inina="wp.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==2){ //背包材料

//ini文件名字
$inina="cl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==4){ //背包商城

//ini文件名字
$inina="sc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==5){ //背包丹药

//ini文件名字
$inina="dy.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==6){ //背包任务

//ini文件名字
$inina="rw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($wpfl==7){ //背包农场

//ini文件名字
$inina="nc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==8){ //背包宝箱

//ini文件名字
$inina="bx.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($wpfl==9){ //背包其他

//ini文件名字
$inina="qt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} else{



}

echo "<font color=red>恭喜你！！取回了".$wpmz."x".$wpsl."</font>"."<br>";
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
unlink($ininame); //删除文件  

} else{

echo "<font color=red>对不起！负重不足</font>"."<br>";
}









} else{	
//ini文件名字
$inina="mypm.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
echo "<font color=red>对不起，拍卖取回出现位置错位错误</font>"."<br>";


}









echo "<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=502;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回我的拍卖</font></a>"."<br>"; 
echo "<br>"; 


include("fhgame.php");



} else{	
}
//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini


//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini







?>