<?php



$jnfor=$jnfor+1;
if($jnfor==1){



}else{
}




if($jnid>0){

$jnnamepd=mb_substr($jnnamex,0,1,"UTF8");
if($jnnamepd=="【"||$jnnamepd=="〖"){

$jnname=mb_substr($jnnamex,2,4,"UTF8");	
}else{

$jnname=mb_substr($jnnamex,0,2,"UTF8");	
}	
	
	


	
if($jnfl==1){//战斗技能

$jnid=$jnid."_".$ckid;
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=522;
$npc[]=$jnid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$jnname."</font></a>";
	
	
} elseif($jnfl ==2){//药品技能

include("./ini/dy_ini.php");
$dysl=($iniFile->getItem('丹药数量',$jnid));


if($dysl>=1){
echo "<font color=black>".$jnname."</font>";
}else{
$szid=$jn;
if($szid==1){
$szmz="快捷1";
} elseif($szid ==2){
$szmz="快捷2";
} elseif($szid ==3){
$szmz="快捷3";
} elseif($szid ==4){
$szmz="快捷4";
} elseif($szid ==5){
$szmz="快捷5";
} elseif($szid ==6){
$szmz="快捷6";
} elseif($szid ==7){
$szmz="快捷7";
} elseif($szid ==8){
$szmz="快捷8";
} elseif($szid ==9){
$szmz="快捷9";
}else{
}
include("./ini/zd_ini.php");
$iniFile->updItem('快捷技能id', [$szmz => '0']);
$iniFile->updItem('快捷分类', [$szmz => '0']);
$iniFile->updItem('快捷名字', [$szmz => '0']);


echo "<font color=black>快捷".$jn."</font>";

	
}


} elseif($jnfl ==3){//捕捉技能
echo "<font color=black>".$jnname."</font>";
} elseif($jnfl ==4){//查看技能
echo "<font color=black>".$jnname."</font>";


	
}else{
	

	
}





}else{
	
	

echo "<font color=black>快捷".$jn."</font>";

}



if($jn==3||$jn==6||$jn==9){
echo "</br>";
}else{
echo "<font color=black>|</font>";
	
}





?>


