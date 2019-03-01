<?php


if($xpjh==1){	
$xpidd=$xpidd+1;
$xpiddd=$xpidd;
include("xpxx.php");

echo "<font color=black>".$xpiddd.".".$xpmz."：</font>";

if($sl!=999999){
	

if($keyxpkq[$xpidd]>=1){	
if($keyxpid[$xpidd]>=1){
	
$npcc=$keyxpid[$xpidd];
$str=$keyxpid[$xpidd]."_".$xpiddd;
include("./wp/wpxx.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=593;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>（".$wpmz."）</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=594;
$npc[]=$str;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【卸下】</font></a>"."<br>";
	
} else{	
echo "<font color=black>（未注入）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=591;
$npc[]=$xpiddd;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【注入】</font></a>"."<br>";
}
} else{	
$xpjh=2;
echo "<font color=red>（未激活）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=590;
$npc[]=$xpiddd;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【激活】（".$sl."金豆）</font></a>"."<br>";

}

} else{	
} 

} else{	
} 

 

?>


