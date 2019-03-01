<?php



$npcc=$dyxxid;
include("./wj/dysx.php");
$wpsycs=($iniFile->getItem('物品使用次数',$dyxxid));
$dypx=$dypx+1;
echo "<font color=black>".$dypx.".</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=425;
$npc[]=$dyxxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$wwpmz."</font></a>";

if($wpsycs >=1){
} else{
$wpsycs=0;		
} 
	
echo "<font color=black>（".$wpsycs."/".$xzcs."）</font>"."<br>";

	

?>
