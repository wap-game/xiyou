<?php


//调用zt.ini是否存在
include("./ini/zt_ini.php");
if($jykg ==0){
$jy2=$jy+$jy1;	
if($lvl>=$jfdj&&$jy2 >=$lvl1){
echo "<font color=red>当前等级已达到目前未解封等级".$jfdj."级（无法获得经验）</font><br>";	
$iniFile->updItem('玩家信息', ['经验' => $lvl1]);
} else{
	
	if($jy2 >=$lvl1){
$jy3=$jy2-$lvl1;
$q2="all_zt";	
$lvl=$lvl+1;
//升级加背包容量
$bbrlb=($iniFile->getItem('玩家信息','背包容量'));


$bbrlb=50+$bbrlb;




include("./sql/mysql.php");//调用数据库连接 
$strsql = "update $q2 set dj=$lvl,bbrl=$bbrlb where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
$iniFile->updItem('玩家信息', ['等级' => $lvl]);
$iniFile->updItem('玩家信息', ['经验' => $jy3]);
$iniFile->updItem('玩家信息', ['背包容量' => $bbrlb]);







	//数字转汉字
$yl=$jy;
include("./pz/ylts.php");
echo "<font color=black>获得：".$ylxx."经验</font><br>";	
echo "<font color=red>恭喜你！升级了（目前等级：".$lvl."级）</font><br>";













//升级更新属性
//路径
$inina="ztt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
include("wj/ztt.php");
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['红' => $wjxx1[血],'蓝' => $wjxx1[蓝]]);

	} else{
$iniFile->updItem('玩家信息', ['经验' => $jy2]);	
	if($jyts !=""){
echo "<font color=red>祝福：".$jyts."</font><br>";	
	} else{
	} 
	
	//数字转汉字
$yl=$jy;
include("./pz/ylts.php");
echo "<font color=black>获得：".$ylxx."经验</font><br>";	
		
		
		
		
		
}
}



} elseif ($jykg==1) {
	
	$jy2=$jy+$xljy1;	
	
	if($jy2 >=$lvl2){
		
		
	if($xljy1 ==$lvl2){

$wpsy=1;//使用失败
	
	} else{
		$iniFile->updItem('玩家信息', ['修炼经验' => $lvl2]);	
} 
		
	echo "<font color=red>对不起！修炼经验已满（升级提升修炼经验储备）</font><br>";

		} else{
$iniFile->updItem('玩家信息', ['修炼经验' => $jy2]);	

	if($jyts !=""){
echo "<font color=red>祝福：".$jyts."</font><br>";	
	} else{
	} 

	//数字转汉字
$yl=$jy;
include("./pz/ylts.php");
echo "<font color=black>获得：".$ylxx."修炼经验</font><br>";		
		
		
		
		
}
	


} else{


}



?>
