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


$zbk1=($iniFile->getItem('装备孔1',$zbid));
$zbk2=($iniFile->getItem('装备孔2',$zbid));
$zbk3=($iniFile->getItem('装备孔3',$zbid));
$zbk4=($iniFile->getItem('装备孔4',$zbid));
$zbk5=($iniFile->getItem('装备孔5',$zbid));

$ks=$zbk1+$zbk2+$zbk3+$zbk4+$zbk5+1;


if($ks>=0&&$ks<=5){
include("./zbdz/dkcl.php");
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


/*
$ks=$zbk1+$zbk2+$zbk3+$zbk4+$zbk5+1;

if($ks==1){


} elseif($ks==2){   

} elseif($ks==3){   

} elseif($ks==4){ 

} elseif($ks==5){  

} else{

}



*/



echo "<font color=black>打孔所需材料和费用如下：</font></a>"."<br>";
echo "<font color=black>材料：".$xycl."</font></a>"."<br>";
echo "<font color=black>费用：".$xyyl."</font></a>"."<br>";



if($xyc1!=""&&$cgl1!=100){
echo "<font color=black>成功率：".$cgl."%</font><font color=red>（附带幸运草提升几率）</font></a>"."<br>";
} else{
echo "<font color=black>成功率：".$cgl."%</font></a>"."<br>";
}



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=382;
$npc[]=$cwid4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【开始打孔】</font></a>"."<br>";


echo "<font color=black>温馨提示：打孔会自动消耗掉提升成功率的幸运草不需要请放置仓库！</font></a>"."<br>";


} else{
	
	
echo "<font color=black>该装备已经是满孔神装了！！"."</font>"."<br>";


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