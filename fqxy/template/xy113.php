<?php



$inina="zt.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);


# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));





//调用dw.ini是否存在
   
include("./ini/dw_ini.php");



//查询是否有队伍

$m=0;
$inina="dw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$dwid=($iniFile->getItem('队伍id','已加队伍id'));

$wjid1=$wjid;



if ($dwid==$wjid){
	
	
# 获取一个分类下所有数据
$ltwjid=($iniFile->getCategory('玩家id'));
foreach(array_keys($ltwjid) as $key){
$keyltwjid[]=$ltwjid[$key];
}
$m=count($ltwjid,0)-1; 	
$i=0;


if ($m>=1){
for($b=0;$b<$m;$b++){

$i=$i+1;
	
	$wjid=$keyltwjid[$i];
	
//调用dw.ini是否存在
   
include("./ini/dw_ini.php");
	$inina="dw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
	
	$iniFile->updItem('队伍id', ['已加队伍id' => '0']);
	
	
	
	


	//调用msg.ini是否存在
 $wjtake="把队伍解散了";
include("./ini/msg_ini.php");
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
	
	
	
	
	
	
	
	
	
	
		}
		
	} else{	

} 
	
$wjid=$wjid1;
		$inina="dw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
	//更新缓存数据
unlink($ininame); //删除文件  
	
	
	
	
	
echo "<font color=black>你解散了队伍</font><br>";
	
	
	
} elseif($dwid>10000000&&$dwid!=$wjid){
$iniFile->updItem('队伍id', ['已加队伍id' => '0']);

$wjid=$npcc;
//调用dw.ini是否存在
include("./ini/dw_ini.php");


$inina="dw.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

$ltpx=($iniFile->getItem('玩家排序1',$wjid1));


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


} else{	

} 





	//调用msg.ini是否存在
 $wjtake="离开了你的队伍";
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
echo "<font color=black>你退出了队伍</font><br>";


} else{	
echo "<font color=black>你退出了队伍</font><br>";
		
		
}




include("template/xy111.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");



?>








