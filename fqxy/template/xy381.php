<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){





$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
$zbid=$npcc."_".$npccid;
$zbid1=$zbid;
$wpidd=$npcc;
$cwid1=$arr[2];
$cwid2=$arr[3];
$cwid3=$cwid1."_".$cwid2;
$cwid4=$zbid."_".$cwid3;
$zbid=$cwid3;
include("./ini/cwzbb_ini.php");
$zbid=$zbid1;
$xj=($iniFile->getItem('装备星级',$zbid));



if($xj>=0&&$xj<=53){
include("./zbdz/xycl.php");
if($cgl!=0){
include("./ini/sc_ini.php");
$xyc1=($iniFile->getItem('商城数量','126'));
if($xyc1==""){
$xyc1=($iniFile->getItem('商城数量','307'));
} else{

}



//幸运草几率
if($xyc1!=""){
$xyc=5;
} elseif($xyc1!=""){   
$xyc=10;
} else{
$xyc=0;
}
$cgl1=$cgl;
$cgl=$cgl+$xyc;


if($cgl>=100){
$cgl=100;
}
} else{

}










echo "<font color=black>升星下一级所需材料和费用如下：</font></a>"."<br>";
echo "<font color=black>材料：".$xycl."</font></a>"."<br>";
echo "<font color=black>费用：".$xyyl."</font></a>"."<br>";



if($xyc1!=""&&$cgl1!=100){
echo "<font color=black>成功率：".$cgl."%</font><font color=red>（附带幸运草提升几率）</font></a>"."<br>";
} else{
echo "<font color=black>成功率：".$cgl."%</font></a>"."<br>";
}



//cmd及超链接值
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=385;
$npc[]=$cwid4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【开始升星】</font></a>"."<br>";


echo "<font color=black>温馨提示：材料升星会自动消耗掉提升成功率幸运草不需要请放置仓库！升星失败会造成装备掉星！</font></a>"."<br>";


} else{
	
	
echo "<font color=red>该装备已是目前满星级装备无需继续提升了！！</font></a>"."<br>";



}





echo "<br>";


$cwid3=$zbid."_".$cwid3;

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$cwid3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回装备</font></a>"."<br>";	
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";


echo "----------------------"."<br>";
//cmd及超链接值
include("fhgame.php");



} else{	

} 
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>