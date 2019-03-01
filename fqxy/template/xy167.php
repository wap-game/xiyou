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



//调用hy.ini是否存在
include("./ini/hy_ini.php");
$ivdd=($iniFile->getItem('序列',$wjid1));

# 获取一个分类下某个子项的值
$ivdd1=($iniFile->getItem('好友分类',$ivdd));
$wjid=$ckid;

# 获取一个分类下某个子项的值
include("./ini/user_ini.php");
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));
$wjid=$wjid1;
if($dty==22||$dty==23){
if($dtx==22){
$sw=2;	
} else{
} 
} else{
} 
if($dty==46||$dty==47){
if($dtx==1){
$sw=2;	
} else{
} 
} else{
} 



if($sw!=2){

	
	if($ivdd1==1||$ivdd1==""){
		
		include("./ini/bl2_ini.php");
		
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
$wjzd=($iniFile->getItem('玩家住宅',$wjzd1));
		
			if($wjzd!=2){
		
		//调用zt.ini是否存在
   $wjid=$wjid1;
include("./ini/zt_ini.php");
# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
		
		
		
		
		
		
		$wjid=$ckid;
		
		
		include("./ini/bl2_ini.php");
		
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家排序1',[$wjid1 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家住宅',[$ltmax1 => '2']); 
		
		echo "<font color=red>你发起了住宅邀请，请等待对方同意</font>"."<br>";
		
		
		
		
		
		
		
		
		
		
		
			} else{
	
echo "<font color=red>对不起！你已经邀请过了！请等待对方同意</font>"."<br>";
	}
		


} else{

echo "<font color=red>对不起！对方已经把你拉黑，无法邀请对方进入住宅</font>"."<br>";

}
	
	
		$wjid=$wjid1;
include("template/xy166.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} else{
	echo "<font color=red>对方还在赶着去投胎了着什么急？!</font>"."<br>";
		$wjid=$wjid1;
		//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

		
		
} 
	
	

	





} else{	
}
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini












?>