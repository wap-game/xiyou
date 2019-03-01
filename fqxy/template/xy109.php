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




include("./ini/dw_ini.php");

$inina="dw.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);





$dwid=($iniFile->getItem('队伍id','已加队伍id'));


if($dwid>10000000){
echo "<font color=red>对不起！你已经有队伍了！</font>"."<br>";


	} else{
$iniFile->updItem('队伍id', ['已加队伍id' => $npcc]);

//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
	



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
$ckid=$npcc;
$wjid=$ckid;




/*

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
	
		//调用msg.ini是否存在
 $wjtake="123";
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
	
	
	
		}
		
	} else{	

} 






*/




	//调用msg.ini是否存在
 $wjtake="成功加入到了你的队伍";
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
	
















include("./ini/dw_ini.php");
$inina="dw.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);

# 获取一个分类下所有数据
$ltpx1=($iniFile->getCategory('玩家排序'));
	foreach(array_keys($ltpx1) as $key){
$keyltpx1[]=$ltpx1[$key];
}
	
$m=count($keyltpx1,0)-1; 	



	
$tmp1="排序";
$arr1=$keyltpx1;
foreach( $arr1 as $k=>$v) {
    if($tmp1 == $v) unset($arr1[$k]);
}

$ltmax1=max($arr1);
if($ltmax1=="排序"){
$ltmax1=0;
	} else{
	} 
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;


$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家排序1',[$wjid1 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->updItem('队伍id', ['已加队伍id' => $npcc]);

echo "<font color=red>恭喜你！成功加入到了".$ckname."的组队伍中！</font>"."<br>";
if($m==0){
$ltmax1=$ltmax1+1;
$zbidd2=$ltwjid."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家排序1',[$ltwjid => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $ltwjid]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ckvip]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ckname]); 





} elseif($m >=4){



echo "<font color=red>对不起！".$ckname."的队伍已满！</font>"."<br>";



	} else{
	} 

$wjid=$wjid1;
	} 






include("template/xy002.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} else{	
}
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini

?>








