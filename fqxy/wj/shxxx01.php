<?php

//超限制伤害运算
$s = ceil($s);
$sk=strlen($s);

if ($sk>=7) {	
if ($sk==7) {	
$skk=rand(10,100);//倍数
$s=$s/$skk;
} elseif($sk ==8){	
$skk=rand(100,1000);//倍数
$s=$s/$skk;	
} elseif($sk ==9){	
$skk=rand(1000,10000);//倍数
$s=$s/$skk;	
} elseif($sk ==10){	
$skk=rand(10000,100000);//倍数
$s=$s/$skk;	
} elseif($sk ==11){	
$skk=rand(100000,1000000);//倍数
$s=$s/$skk;	
} elseif($sk ==12){	
$skk=rand(1000000,10000000);//倍数
$s=$s/$skk;	
} elseif($sk ==13){	
$skk=rand(10000000,100000000);//倍数
$s=$s/$skk;	
} elseif($sk ==14){	
$skk=rand(100000000,1000000000);//倍数
$s=$s/$skk;	
}else {
}
}else {
$skk=1;//倍数	
}
//超限制伤害运算

?>


