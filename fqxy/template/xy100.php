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

//调用hy.ini是否存在
include("./ini/hy_ini.php");



//判断是否为好友
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
$hmivdd=($iniFile->getItem('好友分类',$ivdd));
# 获取一个分类下某个子项的值


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

if($ivdd==""){


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

$sql1 = "insert into $q2 (id,hyid,hymz,hyfl)  values('$maxidd','$ckid','$ckname','1')";
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


echo "<font color=red>恭喜你！你和".$ckname."成为了好友</font>"."<br>";


} else{
	if($hmivdd==2){
	
echo "<font color=red>对不起！玩家：".$ckname."在你的黑名单内需要移除后才能加友</font>"."<br>";
	} else{
		echo "<font color=red>对不起！玩家：".$ckname."已经是你的好友了</font>"."<br>";
		
		} 


}






$npcc=$ckid;






include("template/xy093.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} else{	
}
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini




?>





