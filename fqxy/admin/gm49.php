<?php


//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='allhbmoney_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁


if($zsspd==1&&$all_lock2==1){

$csbyq=200;
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
echo "<font color=red>【充值成功】</font>"."<br>";

echo "<font color=red>---------------------</font>"."<br>";
echo "<font color=black>ID：".$wjid."</font>"."<br>";
echo "<font color=black>玩家：".$wjmz."</font>"."<br>";
echo "<font color=black>价格：20元</font>"."<br>";
echo "<font color=black>红包：".$csbyq."个</font>"."<br>";

echo "<font color=red>---------------------</font>"."<br>";

include("./ini/hbmoney_ini.php");
$csb=($iniFile->getItem('财神币','初始'));
include("./ini/hbmoney_ini.php");	
$csbb=$csb+$csbyq;
$iniFile->updItem('财神币', ['初始' => $csbb]);
include("./sql/mysql.php");//调用数据库连接 
$q2="all_money";
$strsql = "update $q2 set money=$csbb where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);	

//调用msg.ini是否存在
 $wjtake="恭喜你！！充值的".$csbyq."个红包已到账！！请到娱乐【红包挖宝】查看！！";
include("msg_ini.php");

$inina="msg.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$hkeyltpx1[]="";
$hltpx1="";
$arr3="";
# 获取一个分类下所有数据
$hltpx1=($iniFile->getCategory('玩家排序'));
	foreach(array_keys($hltpx1) as $key){
$hkeyltpx1[]=$hltpx1[$key];
}
	
	
$tmp1="排序";
$arr3=$hkeyltpx1;
foreach( $arr3 as $k=>$v) {
    if($tmp1 == $v) unset($arr3[$k]);
}

$ltmax1=max($arr3);
if($ltmax1=="排序"){
$ltmax1=0;
	} else{
	} 
	$ltbl2=-1;
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 










echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";


} else{	
}



//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini


//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini





?>
