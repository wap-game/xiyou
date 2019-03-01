<?php


//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");

$wjid1=$wjid;
$wjid=$npcc;
$ininalock2=$npcc."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
$wjid=$wjid1;


if($zsspd==1&&$zsspd2==1){
include("./ini/zt_ini.php");

# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));

include("./ini/bl1_ini.php");


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


echo "<font color=red>你拒绝了入国邀请！</font>"."<br>";



$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;

	//调用msg.ini是否存在
 $wjtake="拒绝了加入国家！！";
include("./ini/msg_ini.php");
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
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 
	
	
	


















$wjid=$wjid1;

include("template/xy002.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} else{	
}
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini

?>








