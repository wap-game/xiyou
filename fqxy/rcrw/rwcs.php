<?	
$hdid=$npcc;
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
$hdlq=2;
} else{	
}
//如果跨天则重置次数和时间
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=0 where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => '0']);	
$hdcs=0;
} else{	
} 

?>