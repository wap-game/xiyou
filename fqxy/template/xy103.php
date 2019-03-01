<?php


$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;


//调用hy.ini是否存在
include("./ini/hy_ini.php");
$inina="hy.ini";
$ivdd=($iniFile->getItem('序列',$wjid1));

# 获取一个分类下某个子项的值
$ivdd1=($iniFile->getItem('好友分类',$ivdd));


	
	if($ivdd1==1||$ivdd1==""){
		
		
	
	
include("./ini/zt_ini.php");
# 获取一个分类下某个子项的值
$bppid=($iniFile->getItem('玩家信息','帮派id'));



if($bppid==0){

//调用hy.ini是否存在
include("./ini/bl1_ini.php");


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
	
	$wjzd1=($iniFile->getItem('玩家排序1',$wjid1));
$wjzd=($iniFile->getItem('玩家国家',$wjzd1));
	
	if($wjzd!=2){
	
	
	
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	$wjid=$wjid1;
	
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$wjid=$ckid;

$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){
	
	if($bpid>=1){
	include("./ini/bp_ini.php");

$bprs=($iniFile->getItem('国家信息','国家人数'));
$bprsmax=($iniFile->getItem('国家信息','国家人数max'));	
$bprspd=$bprs+1;

		if($bprspd<=$bprsmax){
		
		
		//调用zt.ini是否存在
   $wjid=$wjid1;
include("./ini/zt_ini.php");
# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
		
		
		
		
		
		
		$wjid=$ckid;
		
		
		include("./ini/bl1_ini.php");
		
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家排序1',[$wjid1 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家国家',[$ltmax1 => '2']); 
		
		echo "<font color=red>你发起了入国邀请，请等待对方同意</font>"."<br>";
		
		
		
		
		
		
		
	
	
		
	} else{
echo "<font color=black>你国家人口达到上限！！</font><br>";
}
	
	
	
	
	} else{
echo "<font color=black>你还未加入任何国家！！</font><br>";
}
	
	
} else{	
}
//解锁当前使用的ini
include("./ini/jjsini.php");
//解锁当前使用的ini



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
	
	
	
	
	
	
	
	



	} else{
	
echo "<font color=red>对不起！你已经邀请过了！请等待对方同意</font>"."<br>";
	}

} else{

echo "<font color=red>对不起！对方已经有国家了国家</font>"."<br>";

}
	
} else{

echo "<font color=red>对不起！对方已经把你拉黑，无法邀请对方加入国家</font>"."<br>";

}
	
	
	

	
	
	
	$wjid=$wjid1;
	
	
	
	
	
	













include("template/xy093.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
?>