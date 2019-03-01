<?php


$zbid=$cwidd;
$ztcwid=$cwidd;
$arr = explode("_",$ztcwid);
$ztcwiid=$arr[1];


include("./wj/cwztt.php");
$jy=$jy*3;
$jy2=$jy+$jy1;

if($lvl>=$jfdj&&$jy2 >=$lvl1){
echo "<font color=red>当前宠物等级已达到目前未解封等级".$jfdj."级（无法获得经验）</font><br>";	
include("./ini/cw_ini.php");

$iniFile->updItem('宠物经验', [$ztcwid => $lvl1]);
} else{
	
	if($jy2 >=$lvl1){
$jy3=$jy2-$lvl1;
$q2="cw".$wjid;	
$lvl=$lvl+1;
include("./sql/mysql.php");//调用数据库连接 

$strsql = "update $q2 set cwdj=$lvl where id=$ztcwiid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/cw_ini.php");
$iniFile->updItem('宠物等级', [$ztcwid => $lvl]);
$iniFile->updItem('宠物经验', [$ztcwid => $jy3]);
	//数字转汉字
$yl=$jy;
include("./pz/ylts.php");


echo "<font color=black>宠物获得：".$ylxx."经验</font><br>";	
echo "<font color=red>升级了（目前宠物等级：".$lvl."级）</font><br>";

//升级更新属性

$zbid=$cwidd;
//路径
$inina="cwztt_".$zbid.".ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
include("./wj/cwztt.php");
$cwhp=($iniFile->getItem('宠物信息','血'));	
include("./ini/cw_ini.php");
$iniFile->updItem('宠物hp', [$ztcwid => $cwhp]);

	} else{

include("./ini/cw_ini.php");
$iniFile->updItem('宠物经验', [$ztcwid => $jy2]);
	//数字转汉字
$yl=$jy;
include("./pz/ylts.php");
echo "<font color=black>宠物获得：".$ylxx."经验</font><br>";	
		
		
		
		
		
}
}






?>
