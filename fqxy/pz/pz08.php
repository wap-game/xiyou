<?php



$npcc=$txid;
include("./wp/txxx.php");

include("./ini/tx_ini.php");
$txidd="";
$txidd=($iniFile->getItem('头衔名字',$txid));
$dypx=$dypx+1;
echo "<font color=black>".$dypx.".</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=478;
$npc[]=$txid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$wpmz."</font></a>";

if($txidd !=""){
echo "<font color=red>（已获得）</font>"."<br>";	
} else{
echo "<font color=black>（未获得）</font>"."<br>";	
} 
	


	

?>
