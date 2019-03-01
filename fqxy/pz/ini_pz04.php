<?php

$zhblq=$npcc;


include("./wj/jfdj.php");//解封等级




//调用zt.ini是否存在
include("./ini/zt_ini.php");

# 获取一个分类下某个子项的值
$jykg=($iniFile->getItem('玩家信息','修炼经验开关'));
$lvl=($iniFile->getItem('玩家信息','等级'));
$jy1=($iniFile->getItem('玩家信息','经验'));
$xljy1=($iniFile->getItem('玩家信息','修炼经验'));

//当前等级升级所需要的经验
$lvl1=($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+200;
//当前等级升级所需要的经验
$lvl2=(($lvl+1)*($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+100);
$sypt=1;
if($jykg ==0){
	if($lvl>=$jfdj&&$jy1 >=$lvl1){
$wpsy=1;//使用失败
	echo "<font color=red>对不起！经验已满（升级提升经验储备）</font><br>";
		} else{
	$sypt=2;		
			}
} elseif ($jykg==1) {
	if($xljy1 ==$lvl2){
$wpsy=1;//使用失败
	echo "<font color=red>对不起！修炼经验已满（升级提升修炼经验储备）</font><br>";

		} else{
$sypt=2;		
			}
	} else{


}






if($sypt ==2){


//调用wpp.ini是否存在
include("./ini/wpp_ini.php");

$q2="wpp".$wjid;
$wwpid=$npcc;

$y= date('Y')*1;
$m= date('m')*1;
$d= date('d')*1;
$h= date('H')*1;
$i= date('i')*1;
$s= date('s')*1;



//判断验证使用次数
$inina="wpp.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wjwp=($iniFile->getItem('物品使用次数',$wwpid));


if($wjwp >=1&&$wjwp <$xzcs){


$xwpsl=$wjwp+1;
include("./sql/mysql.php");//调用数据库连接 
$q2="wpp".$wjid;

$strsql = "update $q2 set wpcs=$xwpsl,n=$y,y=$m,r=$d,s=$h,f=$i,m=$s where wpid=$wwpid";//物品id号必改值
$result = mysql_query($strsql);
//数据库修改
//缓存修改
$iniFile->updItem('物品使用次数', [$wwpid => $xwpsl]);
$iniFile->updItem('物品时间年', [$wwpid => $y]);
$iniFile->updItem('物品时间月', [$wwpid => $m]);
$iniFile->updItem('物品时间日', [$wwpid => $d]);
$iniFile->updItem('物品时间时', [$wwpid => $h]);
$iniFile->updItem('物品时间分', [$wwpid => $i]);
$iniFile->updItem('物品时间秒', [$wwpid => $s]);
//缓存修改
$day=1;
} elseif ($wjwp >=$xzcs) {

//检测时间
$b1=($iniFile->getItem('物品时间年',$wwpid));
$b2=($iniFile->getItem('物品时间月',$wwpid));
$b3=($iniFile->getItem('物品时间日',$wwpid));
$b4=($iniFile->getItem('物品时间时',$wwpid));
$b5=($iniFile->getItem('物品时间分',$wwpid));
$b6=($iniFile->getItem('物品时间秒',$wwpid));
$xx=$y*60*60*24*365+$m*60*60*24*30+$d*60*60*24+$h*60*60+$i*60+$s;
$yy=$b1*60*60*24*365+$b2*60*60*24*30+$b3*60*60*24+$b4*60*60+$b5*60+$b6;
$xxx=$xx-$yy;
	echo $wwpid;

if($xxx >=86400){
$day=1;
} elseif ($d!=$b3) {
$day=1;
} else{
$day=0;

}

if($day ==1){

include("./sql/mysql.php");//调用数据库连接 
$q2="wpp".$wjid;
$strsql = "update $q2 set wpcs=1,n=$y,y=$m,r=$d,s=$h,f=$i,m=$s where wpid=$wwpid";//物品id号必改值
$result = mysql_query($strsql);
//缓存修改
$iniFile->updItem('物品使用次数', [$wwpid => '1']);
$iniFile->updItem('物品时间年', [$wwpid => $y]);
$iniFile->updItem('物品时间月', [$wwpid => $m]);
$iniFile->updItem('物品时间日', [$wwpid => $d]);
$iniFile->updItem('物品时间时', [$wwpid => $h]);
$iniFile->updItem('物品时间分', [$wwpid => $i]);
$iniFile->updItem('物品时间秒', [$wwpid => $s]);



//缓存修改

} else{

}





} else{
	include("./sql/mysql.php");//调用数据库连接 
	
	

$sql1 = "insert into $q2 (wpid,n,y,r,s,f,m,wpcs)  values('$npcc','$y','$m','$d','$h','$i','$s',1)";
 if (!mysql_query($sql1,$conn))
 {
   die('Error: ' . mysql_error());
 }
 	//新增数据
//更新缓存数据
unlink($ininame); //删除文件  
//更新缓存数据
 

 
 
 
 


$day=1;
//调用wpp.ini是否存在
include("./ini/wpp_ini.php");


}

if ($day==1) {
//////////////////////////////////////////////////经验增加/////////////////////////////////////////
include("./pz/ini_pz05.php");//调用ini缓存位置
//////////////////////////////////////////////////经验增加/////////////////////////////////////////
$wpsy=2;//使用成功	

} else{
$wpsy=1;//使用失败
echo "<font color=black>你今日已经使用".$wwpmz.$xzcs."次了！</font><br>";

}


	} else{
		
		
		
		


}
$npcc=$zhblq;
?>
