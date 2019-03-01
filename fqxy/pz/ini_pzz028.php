<?php




//得到的材料
$wpsl1=($iniFile->getItem('材料数量',$cl1));
$wpsl2=($iniFile->getItem('材料数量',$cl2));
$wpsl3=($iniFile->getItem('材料数量',$cl3));
$wpsl4=($iniFile->getItem('材料数量',$cl4));
$wpsl5=($iniFile->getItem('材料数量',$cl5));
$wpsl6=($iniFile->getItem('材料数量',$cl6));
if($wpsl1 >=$sjcs){
$clll[]=$wpsl1;
$cllx[]=$cll1;
$cl[]=$cl1;
} else{

}


if($wpsl2 >=$sjcs){
$clll[]=$wpsl2;
$cllx[]=$cll2;
$cl[]=$cl2;
} else{

}
if($wpsl3 >=$sjcs){
$clll[]=$wpsl3;
$cllx[]=$cll3;
$cl[]=$cl3;
} else{

}

if($wpsl4 >=$sjcs){
$clll[]=$wpsl4;
$cllx[]=$cll4;
$cl[]=$cl4;
} else{

}
if($wpsl5 >=$sjcs){
$clll[]=$wpsl5;
$cllx[]=$cll5;
$cl[]=$cl5;
} else{

}
if($wpsl6 >=$sjcs){
$clll[]=$wpsl6;
$cllx[]=$cll6;
$cl[]=$cl6;
} else{

}

$mkk=count($clll,0); 

if($mkk >=1){//改动
$sjcl=2;
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
$i=-1;
for($x=0;$x<$mkk;$x++){
$i=$i+1;
//扣除数量
$sjwpsl1=floor($clll[$i]/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc=$cl[$i];
include("./wp/wpxx.php");
//提供需要扣除的物品作为判读依据
$wpdz1[]=$wpmz;//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=$cl[$i];//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
}


include("./pz/ini_pzz026.php");



$manzu1="";
$kcrl="";
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
$i=-1;
for($x=0;$x<$mkk;$x++){
$i=$i+1;
$sjwpsl1=floor($clll[$i]/$sjcs);//改动

$npcc=$cllx[$i];
include("./wp/wpxx.php");
//物品加
$wpdz1[]=$wpmz;//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=$cllx[$i];//物品id
$wpdz4[]=$sjwpsl1;//	量
$wpdz5[]=1;//	重量

//物品加
}




include("./rwmap/rwget.php");











} else{
	

echo $clpl;



}

















?>
