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
	
	
	
	
	
	//调用zt.ini是否存在
   $wjid=$wjid1;
include("./ini/zt_ini.php");
# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));


		$wjid=$ckid;
	
	
	
	//调用msg.ini是否存在
 $wjtake="请你离开了他的住所！！你来到了长安城！！";
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
	
	
	
	
	
	
	
	
	
include("./ini/zt_ini.php");
# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));

include("./ini/user_ini.php");


$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));

$wjid=$wjid1;
if ($dtx==71) {
$inina=$wjid."-mz".$dtx."x".$dty.".ini";
 } elseif ($dtx==72) {
$inina=$wjid."-hz".$dtx."x".$dty.".ini";
 } elseif ($dtx==73) {
$inina=$wjid."-gzai".$dtx."x".$dty.".ini";
} else {

}

if ($dtx==71||$dtx==72||$dtx==73) {
$k=$npcc;

//路径
$path='acher/map';
$ininame = $path."/".$inina;
$file = $ininame;
$iniFile = new iniFile($file);


# 删除一个子项
$iniFile->delItem('玩家时间值'.$dtx.'x'.$dty, $k);
# 删除一个子项
$iniFile->delItem('玩家vip值'.$dtx.'x'.$dty, $k);
# 删除一个子项
$iniFile->delItem('玩家id值'.$dtx.'x'.$dty, $k);
# 删除一个子项
$iniFile->delItem('玩家名字值'.$dtx.'x'.$dty, $k);
# 删除一个子项
$iniFile->delItem('国家名字值'.$dtx.'x'.$dty, $k);
# 删除一个子项
$iniFile->delItem('国家职务名字值'.$dtx.'x'.$dty, $k);

} else {

}



$wjid=$ckid;


include("./ini/user_ini.php");

$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);



echo "<font color=red>你踢出了".$ltbl1,"</font>"."<br>";
$wjid=$wjid1;
include("./ini/fzpp_ini.php");

$iniFile->delItem('房间人id', $ckid);
$iniFile->delItem('房间人名字', $ckid);
$iniFile->delItem('房间人vip', $ckid);












include("template/xy169.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
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
  $wjid=$wjid1;

//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini

?>