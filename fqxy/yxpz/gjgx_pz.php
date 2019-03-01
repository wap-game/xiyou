<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$bpmz=($iniFile->getItem('玩家信息','帮派名字'));
$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){
	
if($bpid>=1){
	

	
	

include("./ini/bpp_ini.php");
	
$xl=($iniFile->getItem('序列',$wjid));
$gx1=($iniFile->getItem('贡献',$xl));
$gx2=($iniFile->getItem('历史贡献',$xl));

$gx=$gxx+$gx1;
$lsgx=$gxx+$gx2;
$iniFile->updItem('贡献', [$xl => $gx]);
$iniFile->updItem('历史贡献', [$xl => $gx]);
$q2="bp".$bpid;
$strsql = "update $q2 set gx=$gx,lsgx=$lsgx where userid=$wjid";//物品id号必改值
$result = mysql_query($strsql);



include("./ini/bp_ini.php");
# 获取一个分类下所有数据$
$bpzz02=($iniFile->getItem('国家信息','国家经验'));
$bpzz03=($iniFile->getItem('国家信息','国家声望'));

$bpcc02=$bpzz02+$gxx02;
$bpcc03=$bpzz03+$gxx03;
$iniFile->updItem('国家信息', ['国家经验' => $bpcc02]);
$iniFile->updItem('国家信息', ['国家声望' => $bpcc03]);


$q2="all_bp";
$strsql = "update $q2 set bpsw=$bpcc03 where bpid=$bpid";//物品id号必改值
$result = mysql_query($strsql);




echo "<font color=red>恭喜你！！获得国家贡献+".$gxx."</font><br>";	
echo "<font color=red>恭喜你！！获得国家经验+".$gxx02."</font><br>";	
echo "<font color=red>恭喜你！！获得国家声望+".$gxx03."</font><br>";		
	
	
	

	
} else{
echo "<font color=black>你还未加入任何国家！！（无法获得国家贡献）</font><br>";
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


?>