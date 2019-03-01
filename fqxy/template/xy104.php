<?php
//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;
$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
if($zsspd==1&&$zsspd2==1){
$wjid=$wjid1;
//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	

# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

//获取超连接
# 获取一个分类下某个子项的值
$yymid=($iniFile->getItem('最后页面id','页面id'));


//调用hy.ini是否存在
include("./ini/hy_ini.php");
$inina="hy.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ivdd=($iniFile->getItem('序列',$npcc));
# 获取一个分类下某个子项的值
$ivdd1=($iniFile->getItem('好友分类',$ivdd));




$wjid=$ckid;


//调用zt.ini是否存在
include("./ini/zt_ini.php");
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$wjxx=($iniFile->getCategory('玩家信息'));
$ckname=$wjxx[玩家名字];

$wjid=$wjid1;



if($ivdd1==1){

include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "update $q2 set hyfl=2 where hyid=$ckid";//物品id号必改值
$result = mysql_query($strsql);
$inina="hy.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ivdd=($iniFile->getItem('序列',$npcc));

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('好友分类', [$ivdd => '2']);
echo "<font color=red>恭喜你！成功将".$ckname."拉进了黑名单</font>"."<br>";
} elseif($ivdd1==""){


include("./sql/mysql.php");//调用数据库连接 
$q2="hy".$wjid;
//获取最大值	
mysql_query("set names utf8");
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}

$sql1 = "insert into $q2 (id,hyid,hymz,hyfl)  values('$maxidd','$ckid','$ckname','2')";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }	

 //更新缓存数据
$inina="hy.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

echo "<font color=red>恭喜你！成功将".$ckname."拉进了黑名单</font>"."<br>";





} else{

echo "<font color=red>对不起！玩家：".$ckname."已经在你的黑名单内</font>"."<br>";

}








$npcc=$ckid;


if($yymid ==2){
	
	
	
	



include("./ini/bl_ini.php");


$inina="bl.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);
$ltpx=($iniFile->getItem('玩家排序1',$npcc));
$ltwjid=($iniFile->getItem('玩家id',$ltpx));
$ckname=($iniFile->getItem('玩家名字',$ltpx));
$ckvip=($iniFile->getItem('玩家vip',$ltpx));

$ltpxx=$ltwjid."_".$ltpx;

# 删除一个子项
$iniFile->delItem('玩家排序', $ltpxx);
# 删除一个子项
$iniFile->delItem('玩家排序1', $ltwjid);
# 删除一个子项
$iniFile->delItem('玩家id', $ltpx);
# 删除一个子项
$iniFile->delItem('玩家vip', $ltpx);
# 删除一个子项
$iniFile->delItem('玩家名字', $ltpx);





	
	
	
	
$wjid=$wjid1;
include("template/xy002.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} else{
include("template/xy093.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} 



} else{	
}
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini


?>





