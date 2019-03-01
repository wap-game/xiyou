<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


include("./ini/sc_ini.php");
$jd=($iniFile->getItem('商城数量','127'));	



if($jd>=$wjjdqg){






//调用zt.ini是否存在
include("./ini/zt_ini.php");
$fz=($iniFile->getItem('玩家信息','住宅id'));
$fz02=($iniFile->getItem('玩家信息','住宅分类'));
$fz01=($iniFile->getItem('玩家信息','住宅名字'));
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
if($fz==0){
include("./ini/qggz_ini.php");


$qgid=($iniFile->getItem('求购人id',$wjid));

if($qgid==""){

include("./sql/mysql.php");//调用数据库连接 
//获取最大值
$q2="all_qggz";
$sql1=mysql_query("select MAX(id) from $q2");
$abc=mysql_fetch_array($sql1);
$maxid=$abc[0];	

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
} 


$q2="all_qggz";
mysql_query("set names utf8");
$sql = "insert into $q2 (id,qgxx,qgmz,wjid,qgjg)  values('$maxidd','$wjtake10','$wjmz','$wjid','$wjjdqg')";
 if (!mysql_query($sql,$conn))
 {
   die('Error: ' . mysql_error());
 }

//更新缓存数据
$inina="qggz.ini";
$path='acher/gz';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

include("./ini/sc_ini.php");
$kcjd=$jd-$wjjdqg;
$iniFile->updItem('商城数量', ['127'=> $kcjd]);

$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$kcjd where wpid=127";//物品id号必改值
$result = mysql_query($strsql);





	echo "<font color=black>失去金豆x".$wjjdqg."</font>"."<br>";






		echo "<font color=red>发布求购信息成功等待好消息吧</font>"."<br>";




		include("template/xy002.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
		
		
		
		

break;




} else{	

echo "<font color=red>你已发布有求购信息了，请耐心等待买家</font>"."<br>";

} 



} else{	


$fz03=$fz02;
if($fz02==1){

$fz02="民宅";
} elseif($fz02==2){  
$fz02="豪宅";
} elseif($fz02==3){ 
$fz02="官宅";
} else{

}
if($fz03==3){
echo "<font color=black>你已经拥有了【".$fz01."】(".$fz02."),不可以发布求购信息</font>"."<br>";
} else{
echo "<font color=black>你已经拥有了".$fz01."(".$fz02."),不可以发布求购信息</font>"."<br>";
}






}



} else{	

echo "<font color=red>对不起！！你的金豆不足".$wjjdqg."个</font>"."<br>";

} 








} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>


