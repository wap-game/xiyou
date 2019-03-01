<?php

 $wpsy=2;//使用成功
include("./ini/zt_ini.php");
$sw=($iniFile->getItem('玩家信息','法宝经验'));
$syz=$sl*$wpzz;////此wpid使用后所加的总共值
$sw=$sw+$syz;//此wpid使用后所得到的总共值
///缓存更新
$iniFile->updItem('玩家信息', ['法宝经验' => $sw]);	
///缓存更新
//数字转汉字
$yl=$syz;
include("./pz/ylts.php");




echo "<font color=black>获得".$ylxx."法宝经验！！</font><br>";
























?>
