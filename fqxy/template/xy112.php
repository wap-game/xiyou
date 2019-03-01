<?php


//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
$ininalock2=$npcc."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
if($zsspd==1&&$zsspd2==1){

$inina="zt.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);


# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));

//调用dw.ini是否存在
include("./ini/dw_ini.php");


$inina="dw.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

$ltpx=($iniFile->getItem('玩家排序1',$npcc));
$ltwjid=($iniFile->getItem('玩家id',$ltpx));


$zbidd=$ltwjid."_".$ltpx;

if ($ltwjid>10000000){
$ltwjname=($iniFile->getItem('玩家名字',$ltpx));
	
# 删除一个子项
$iniFile->delItem('玩家排序', $zbidd);
# 删除一个子项
$iniFile->delItem('玩家排序1', $ltwjid);
# 删除一个子项
$iniFile->delItem('玩家id', $ltpx);
# 删除一个子项
$iniFile->delItem('玩家vip', $ltpx);
# 删除一个子项
$iniFile->delItem('玩家名字', $ltpx);
	

$wjid1=$wjid;
$ckid=$ltwjid;
$wjid=$ckid;
	
	
	
$inina="dw.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);	

$iniFile->updItem('队伍id', ['已加队伍id' => '0']);






	//调用msg.ini是否存在
 $wjtake="将你踢出了队伍";
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
	
	
		
echo "<font color=black>你成功将".$ltwjname."提出了队伍！！</font><br>";			
} else{	
echo "<font color=black>该玩家已经不再队伍当中</font><br>";
		
		
}
include("template/xy111.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} else{	
}
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini

?>








