<?php


$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;


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

	
	
$ivdd=($iniFile->getItem('序列',$wjid1));

# 获取一个分类下某个子项的值
$ivdd1=($iniFile->getItem('好友分类',$ivdd));

	$wjid=$wjid1;	
	
	if($ivdd1==1||$ivdd1==""){
		
		
		
//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
	



# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));



//调用dw.ini是否存在
   
include("./ini/dw_ini.php");
	
	
$inina="dw.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);


# 获取一个分类下所有数据
$hltpx1=($iniFile->getCategory('玩家排序'));
foreach(array_keys($hltpx1) as $key){
$hkeyltpx1[]=$ltpx1[$key];
}
	
$m=count($hkeyltpx1,0)-1; 	









$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;

   
include("./ini/zt_ini.php");
	
$inina="zt.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);
$ckname=($iniFile->getItem('玩家信息','玩家名字'));



	//调用dw.ini是否存在
   
include("./ini/dw_ini.php");
$inina="dw.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);


$dwid=($iniFile->getItem('队伍id','已加队伍id'));




if($dwid>10000000){

echo "<font color=red>对不起！".$ckname."已经有队伍了！</font>"."<br>";

	} else{




//调用hy.ini是否存在
include("./ini/bl_ini.php");
//调用zt.ini是否存在


# 获取一个分类下所有数据
$ltpx1=($iniFile->getCategory('玩家排序'));
foreach(array_keys($ltpx1) as $key){
$keyltpx1[]=$ltpx1[$key];
}
	

	
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

$inina="bl.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);


$wjzd1=($iniFile->getItem('玩家排序1',$wjid1));
$wjzd=($iniFile->getItem('玩家组队',$wjzd1));





if($m>=0&&$m<=3){

if($wjzd==2){


echo "<font color=red>对不起！你已经邀请过".$ckname."组队了！请等待对方同意</font>"."<br>";


	} else{

$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家排序1',[$wjid1 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家组队',[$ltmax1 => '2']); 
echo "<font color=red>你向玩家：".$ckname."发起了组队邀请，请等待对方同意</font>"."<br>";
	} 


	} else{

echo "<font color=red>对不起！邀请".$ckname."组队失败！队伍已满员</font>"."<br>";

	} 

	} 

	$wjid=$wjid1;
	
} else{

echo "<font color=red>对不起！对方已经把你拉黑，无法组队</font>"."<br>";

}
	
	
	
	
	
	

	













include("template/xy093.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
?>