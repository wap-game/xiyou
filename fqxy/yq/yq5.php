<?php


//检测pk和死亡
include("./ini/pkbl_ini.php");

//检测是否是死亡状态
$wjsw=($iniFile->getItem('被打死','初始'));
$pk=0;
if($wjsw!=999){//pk变量

$pk1=($iniFile->getCategory('玩家pk'));
$m=count($pk1,0)-1; 
if($m>0){//pk变量
$pk2=($iniFile->getCategory('玩家id'));
$pk6=($iniFile->getCategory('玩家名字'));
$pk8=($iniFile->getCategory('被打死'));
foreach(array_keys($pk8) as $key){	
$pk9[]=$pk8[$key];
}
foreach(array_keys($pk1) as $key){	
$pk3[]=$pk1[$key];
}
foreach(array_keys($pk2) as $key){	
$pk4[]=$pk2[$key];
}
foreach(array_keys($pk6) as $key){	
$pk7[]=$pk6[$key];
}
$i=0;
for($d=0;$d<$m;$d++){
$i=$i+1;
//优先获得死亡
if($pk9[$i]==2){

$pk=$pk3[$i];
$pk5=$pk4[$i];
$pk8=$pk7[$i];	

$pk=4;
break;
}
}
if($pk!=4){
$i=0;
for($d=0;$d<$m;$d++){
$i=$i+1;
if($pk3[$i]==2){
$pk=$pk3[$i];
$pk5=$pk4[$i];
$pk8=$pk7[$i];
$pk=2;
break;
}
}
}

}

} else{	
$pk=4;
}




if($pk==4){//被打死
include("template/xy395.php");
include("./pz/pz01.php");
break;
} elseif($pk==2){ //被邀请pk
include("template/xy394.php");
include("./pz/pz01.php");
break;
} else{	
}









?>




