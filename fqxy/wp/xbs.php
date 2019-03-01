<?php

//宝石名字



$tt[]="";
$bsmzz[]="";
$bsmzz="";

if($zbkk1>0){
$bsid=$zbxqq1;
if($bsid>0){
include("wp/zbbsmz.php");//npc页面
$bsmzz[]=$bsmz;
} else{	
}	


}

if($zbkk2>0){
$bsid=$zbxqq2;
if($bsid>0){
include("wp/zbbsmz.php");//npc页面
$bsmzz[]=$bsmz;
} else{	
}	
}


if($zbkk3>0){
$bsid=$zbxqq3;
if($bsid>0){
include("wp/zbbsmz.php");//npc页面
$bsmzz[]=$bsmz;
} else{	
}	
}

if($zbkk4>0){
$bsid=$zbxqq4;
if($bsid>0){
include("wp/zbbsmz.php");//npc页面
$bsmzz[]=$bsmz;
} else{	
}	
}

if($zbkk5>0){
$bsid=$zbxqq5;
if($bsid>0){
include("wp/zbbsmz.php");//npc页面
$bsmzz[]=$bsmz;
} else{	
}	
}


if($zbkk1>0||$zbkk2>0||$zbkk3>0||$zbkk4>0||$zbkk5>0){
//去掉相同的元素
$g=array_unique($bsmzz);
$g=array_values($g);
//当前被去掉元素的数组含有的元素
$z= count($g);
//获取数组里相同元素个数


if($z>1){
$ii=-1;
for($x=0;$x<$z;$x++){
$ii=$ii+1;
$b=array_count_values($bsmzz);
$c=$g[$ii];

//echo $b[$c];
if($b[$c] ==1){
$tt[]="一".$g[$ii];
} elseif($b[$c] ==2){
$tt[]="双".$g[$ii];
} elseif($b[$c] ==3){
$tt[]="三".$g[$ii];
} elseif($b[$c] ==4){
$tt[]="四".$g[$ii];
} elseif($b[$c] ==5){
$tt[]="五".$g[$ii];
} else{
}

}

} else{
$b=array_count_values($bsmzz);
$c=$g[0];

if($b[$c] ==1){
$tt[]="一".$g[0];
} elseif($b[$c] ==2){
$tt[]="双".$g[0];
} elseif($b[$c] ==3){
$tt[]="三".$g[0];
} elseif($b[$c] ==4){
$tt[]="四".$g[0];
} elseif($b[$c] ==5){
$tt[]="五".$g[0];
} else{
}


}

//$bsmzz="";
$z= count($tt);

if($z==1){
$xbs=$tt[0];
} elseif($z ==2){
$xbs=$tt[0].$tt[1];

} elseif($z ==3){
$xbs=$tt[0].$tt[1].$tt[2];

} elseif($z ==4){
$xbs=$tt[0].$tt[1].$tt[2].$tt[3];
} elseif($z ==5){
$xbs=$tt[0].$tt[1].$tt[2].$tt[3].$tt[4];


} else{

}

} else{
$xbs="";

}
$tt="";




?>




