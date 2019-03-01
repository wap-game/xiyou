<?php
//调用zt.ini是否存在
include("./ini/zt_ini.php");

# 获取一个分类下某个子项的值
$lvl=($iniFile->getItem('玩家信息','等级'));
$jy1=($iniFile->getItem('玩家信息','经验'));
$xljy1=($iniFile->getItem('玩家信息','修炼经验'));

//当前等级升级所需要的经验
$lvl2=(($lvl+1)*($lvl+1)*($lvl+1)*($lvl+1)*($lvl+2)+100);





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
	





























?>
