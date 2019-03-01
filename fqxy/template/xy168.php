<?php


//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
$wjid1=$wjid;
$wjid=$npcc;

$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");

$wjid=$wjid1;

if($zsspd==1&&$zsspd2==1){
include("./ini/bl2_ini.php");
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




include("./ini/zt_ini.php");

# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));


$wjid=$npcc;

include("./ini/zt_ini.php");
$fzfl=($iniFile->getItem('玩家信息','住宅分类'));

 
 if($fzfl==1){
 $dtx1=71;
$dty1=0;
} elseif($fzfl==2){   

 $dtx1=72;
$dty1=0;
} elseif($fzfl==3){   
 $dtx1=73;
$dty1=0;
} else{
	
	$fzfl=999;
	
	
	} 




 if($fzfl!=999){





$wjid=$npcc;
//调用msg.ini是否存在
 $wjtake="同意了你房屋邀请！！来到你的房屋！！";
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




include("./ini/fzpp_ini.php");
$iniFile->addItem('房间人id',[$wjid1 => $wjid1]); 
$iniFile->addItem('房间人名字',[$wjid1 => $ltbl1]); 
$iniFile->addItem('房间人vip',[$wjid1 => $ltbl2]); 

$wjid=$wjid1;


include("./ini/fz_ini.php");
$iniFile->addItem('所处房间人id',['初始' => $npcc]); 





include("./ini/user_ini.php");
 # 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));
//保存上次的地图值移动清除
$ydtx=$dtx;
$ydty=$dty;
//保存上次的地图值移动清除





# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx1,'y' => $dty1]);
 
 
 

 
 
 
 
 
 
  echo "<font color=red>你接受了房屋参观邀请</font>"."<br>";
 
 } else{	
 
 
 
 
 
 echo "<font color=red>对方的房屋已售卖或者不存在</font>"."<br>";

}
 
 
 
 
 
 
 
 
 
 
 
 
 $yqbl=123;
 

include("template/xy002.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} else{	
}
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini

?>








