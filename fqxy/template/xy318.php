<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
if($npcc ==1){

$sjcs=50;
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','331'));

if($wpsl1 >=$sjcs){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
//$xwpsl1=$wpsl1-$asjwpsl1;//改动

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖百年魔珠〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=331;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值


if ($pd==2) {

$swidx=8;//要获得声望id
$swmzx="西游声望";//名字
$syz=$sjwpsl1*500;//值
include("./pz/ini_pzz035.php");

	
} else{	
echo "<font color=black>对不起,你的〖百年魔珠〗不足50个无法兑换</font><br>";
} 
} else{	
echo "<font color=black>对不起,你的〖百年魔珠〗不足50个无法兑换</font><br>";


}
	
	
  
  } elseif($npcc ==2){
  
  $sjcs=1;
	$sjcs1=1;
	$sjcs2=1;
	$sjcs3=1;
	$sjcs4=1;
	$sjcs5=1;
	$sjcs6=1;
    $sjcs7=1;
	$sjcs8=1;
	$sjcs9=1;
	$sjcs10=1;
	$sjcs11=1;
	$sjcs12=1;
	$sjcs13=1;
	$sjcs14=1;
	$sjcs15=1;
	$sjcs16=1;
    $sjcs17=1;
	$sjcs18=1;
	$sjcs19=1;
	$sjcs20=1;
	$sjcs21=1;
	$sjcs22=1;
	$sjcs23=1;
	$sjcs24=1;
	$sjcs25=1;
	$sjcs26=1;
    $sjcs27=1;
	$sjcs28=1;
	$sjcs29=1;
	$sjcs30=1;
	$sjcs31=1;
	$sjcs32=1;
	$sjcs33=1;
	$sjcs34=1;
	$sjcs35=1;
	$sjcs36=1;
    $sjcs37=1;
	$sjcs38=1;
	$sjcs39=1;
	$sjcs40=1;
	$sjcs41=1;
	$sjcs42=1;
	$sjcs43=1;
	$sjcs44=1;
	$sjcs45=1;
	
	
	$xyswxs=0;
	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','76'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【冰晶】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=76;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;

} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','77'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【雷晶】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=77;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','78'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【白骨靴】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=78;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}

include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','79'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【食尸鬼之皮】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=79;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','80'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【祭祀之帽】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=80;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','81'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【剥皮鬼之皮】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=81;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}

include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','82'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【白骨项链】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=82;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}

include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','83'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【炼尸宝石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=83;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','84'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【黄袍武器】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=84;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','85'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【锻造图】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=85;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','86'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【黑熊宝石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=86;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}

include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','87'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【鹿角手镯】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=87;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','88'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【妖将合金】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=88;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','89'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【野熊铠甲】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=89;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','90'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【火红毛皮】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=90;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','91'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【玉衣片】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=91;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','92'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【淡黄狐尾】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=92;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','93'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【猩红石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=93;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','94'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【拔地鼠筋】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=94;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','95'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【天香碧玉竹】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=95;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','96'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【骷髅头】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=96;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','97'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【银犀角】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=97;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}





include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','98'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【玄铁手镯】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=98;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','99'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【黑晶】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=99;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}




include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','100'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【金精】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=100;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}




include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','101'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【金犀角】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=101;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','102'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【烈焰火羽】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=102;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','103'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【冰凌石】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=103;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','104'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【逆鳞】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=104;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','105'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【紫金】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=105;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}

include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','106'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【琉璃】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=106;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','107'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【灵晶】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=107;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','108'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【引魄】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=108;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}

include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','109'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【勾魂】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=109;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}




include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','110'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【东海神铁】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=110;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','111'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【千年寒冰】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=111;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','112'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖黑曜石〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=112;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}

include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','113'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【玉鼎黄色碎片】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=113;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','114'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【玉鼎红色碎片】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=114;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','115'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【玉鼎绿色碎片】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=115;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}


include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','116'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【玉鼎橙色碎片】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=116;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','117'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖苍白内丹〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=117;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','118'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖黄澄内丹〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=118;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}

include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','119'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【千年冰魄】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=119;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}

include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','120'));
if($wpsl1 >=$sjcs2){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="黑龙之牙";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=120;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*500;
} else{	
}



if ($xysw1>0) {
$swidx=8;//要获得声望id
$swmzx="西游声望";//名字
$syz=$xysw1;//值
include("./pz/ini_pzz035.php");	
} else{	
echo "<font color=black>对不起,你没有副本材料可以兑换西游声望</font><br>";
} 


  } elseif($npcc ==3){
$sjcs=10;
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','575'));

if($wpsl1 >=$sjcs){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
//$xwpsl1=$wpsl1-$asjwpsl1;//改动

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="【恶魔符文】";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=575;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值


if ($pd==2) {

$swidx=7;//要获得声望id
$swmzx="恶魔广场声望";//名字
$syz=$sjwpsl1*50;//值
include("./pz/ini_pzz035.php");

	
} else{	
echo "<font color=black>对不起,你的【恶魔符文】不足10个无法兑换</font><br>";
} 
} else{	
echo "<font color=black>对不起,你的【恶魔符文】不足10个无法兑换</font><br>";


}
	


  } elseif($npcc ==4){
	  
	  
	  
	  
  $sjcs=1;
	$sjcs1=1;
	$sjcs2=1;
	$sjcs3=1;
	$sjcs4=1;
	$sjcs5=1;
	$sjcs6=1;
    $sjcs7=1;
	$sjcs8=1;
	$sjcs9=1;
	$sjcs10=1;
	$sjcs11=1;
	$sjcs12=1;
	$sjcs13=1;
	$sjcs14=1;
	$sjcs15=1;
	$sjcs16=1;
    $sjcs17=1;
	$sjcs18=1;
	$sjcs19=1;
	$sjcs20=1;
	$sjcs21=1;
	$sjcs22=1;
	$sjcs23=1;
	$sjcs24=1;
	$sjcs25=1;
	$sjcs26=1;
    $sjcs27=1;
	$sjcs28=1;
	$sjcs29=1;
	$sjcs30=1;
	$sjcs31=1;
	$sjcs32=1;
	$sjcs33=1;
	$sjcs34=1;
	$sjcs35=1;
	$sjcs36=1;
    $sjcs37=1;
	$sjcs38=1;
	$sjcs39=1;
	$sjcs40=1;
	$sjcs41=1;
	$sjcs42=1;
	$sjcs43=1;
	$sjcs44=1;
	$sjcs45=1;
	
	
	$xyswxs=0;
	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','58'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="红宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=58;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*1000;

} else{	
}  
	  
	  
	  
	  
	 	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','59'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="红水晶五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=59;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*1000;

} else{	
}   
	  
	  
	  
	  
	  
 	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','60'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="蓝宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=60;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*1000;

} else{	
}   
	  
	  
 
 	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','61'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="蓝水晶五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=61;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*1000;

} else{	
}   
	  	  
	  
	  
 	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','62'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="黄宝石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=62;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*1000;

} else{	
}   
	  	  
	  
	  
		  
 	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','63'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="黄水晶五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=63;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*1000;

} else{	
}   
	  	    
	  
	  
 	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','64'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="金刚石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=64;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*1000;

} else{	
}   
	  	    
	  
	  
	  
	  	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','65'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="佛印石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=65;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*1000;

} else{	
}    
	  

	  	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','66'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="玄武石五";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=66;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*1000;

} else{	
}    
  
  
  if ($xysw1>0) {
$swidx=8;//要获得声望id
$swmzx="西游声望";//名字
$syz=$xysw1;//值
include("./pz/ini_pzz035.php");	
} else{	
echo "<font color=black>对不起,你没有任意5级石头可以兑换西游声望</font><br>";
} 
  
  
  
  

  } elseif($npcc ==5){
	  
	  
	  
	  
  $sjcs=1;
	$sjcs1=1;
	$sjcs2=1;
	$sjcs3=1;
	$sjcs4=1;
	$sjcs5=1;
	$sjcs6=1;
    $sjcs7=1;
	$sjcs8=1;
	$sjcs9=1;
	$sjcs10=1;
	$sjcs11=1;
	$sjcs12=1;
	$sjcs13=1;
	$sjcs14=1;
	$sjcs15=1;
	$sjcs16=1;
    $sjcs17=1;
	$sjcs18=1;
	$sjcs19=1;
	$sjcs20=1;
	$sjcs21=1;
	$sjcs22=1;
	$sjcs23=1;
	$sjcs24=1;
	$sjcs25=1;
	$sjcs26=1;
    $sjcs27=1;
	$sjcs28=1;
	$sjcs29=1;
	$sjcs30=1;
	$sjcs31=1;
	$sjcs32=1;
	$sjcs33=1;
	$sjcs34=1;
	$sjcs35=1;
	$sjcs36=1;
    $sjcs37=1;
	$sjcs38=1;
	$sjcs39=1;
	$sjcs40=1;
	$sjcs41=1;
	$sjcs42=1;
	$sjcs43=1;
	$sjcs44=1;
	$sjcs45=1;
	
	
	$xyswxs=0;
	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','67'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="红宝石六";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=67;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*5000;

} else{	
}  
	  
	  
	  
	  
	 	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','68'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="红水晶六";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=68;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*5000;

} else{	
}   
	  
	  
	  
	  
	  
 	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','69'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="蓝宝石六";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=69;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*5000;

} else{	
}   
	  
	  
 
 	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','70'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="蓝水晶六";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=70;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*5000;

} else{	
}   
	  	  
	  
	  
 	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','71'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="黄宝石六";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=71;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*5000;

} else{	
}   
	  	  
	  
	  
		  
 	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','72'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="黄水晶六";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=72;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*5000;

} else{	
}   
	  	    
	  
	  
 	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','73'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="金刚石六";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=73;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*5000;

} else{	
}   
	  	    
	  
	  
	  
	  	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','74'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="佛印石六";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=74;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*5000;

} else{	
}    
	  

	  	
include("./ini/cl_ini.php");
$wpsl1=($iniFile->getItem('材料数量','75'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="玄武石六";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=75;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*5000;

} else{	
}


  if ($xysw1>0) {
$swidx=8;//要获得声望id
$swmzx="西游声望";//名字
$syz=$xysw1;//值
include("./pz/ini_pzz035.php");	
} else{	
echo "<font color=black>对不起,你没有任意6级石头可以兑换西游声望</font><br>";
} 

  
  
  
  
  
  
  
  
  
  } elseif($npcc ==6){
	  
	  
	  
	  
  $sjcs=1;
	$sjcs1=1;
	$sjcs2=1;
	$sjcs3=1;
	$sjcs4=1;
	$sjcs5=1;
	$sjcs6=1;
    $sjcs7=1;
	$sjcs8=1;
	$sjcs9=1;
	$sjcs10=1;
	$sjcs11=1;
	$sjcs12=1;
	$sjcs13=1;
	$sjcs14=1;
	$sjcs15=1;
	$sjcs16=1;
    $sjcs17=1;
	$sjcs18=1;
	$sjcs19=1;
	$sjcs20=1;
	$sjcs21=1;
	$sjcs22=1;
	$sjcs23=1;
	$sjcs24=1;
	$sjcs25=1;
	$sjcs26=1;
    $sjcs27=1;
	$sjcs28=1;
	$sjcs29=1;
	$sjcs30=1;
	$sjcs31=1;
	$sjcs32=1;
	$sjcs33=1;
	$sjcs34=1;
	$sjcs35=1;
	$sjcs36=1;
    $sjcs37=1;
	$sjcs38=1;
	$sjcs39=1;
	$sjcs40=1;
	$sjcs41=1;
	$sjcs42=1;
	$sjcs43=1;
	$sjcs44=1;
	$sjcs45=1;
	
	
	$xyswxs=0;
	
include("./ini/wp_ini.php");


$wpsl1=($iniFile->getItem('书卷数量','9'));
if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1千傲来国声望卷〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=9;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200;

} else{	
}  
  
include("./ini/wp_ini.php");


$wpsl1=($iniFile->getItem('书卷数量','10'));
if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1千宝象国声望卷〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=10;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200;

} else{	
}  
  
  
include("./ini/wp_ini.php");


$wpsl1=($iniFile->getItem('书卷数量','11'));
if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1千将军府声望卷〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=11;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200;

} else{	
}  
  
  
  
include("./ini/wp_ini.php");


$wpsl1=($iniFile->getItem('书卷数量','12'));
if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1千普陀山声望卷〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=12;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200;

} else{	
}  
  
include("./ini/wp_ini.php");


$wpsl1=($iniFile->getItem('书卷数量','13'));
if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1千龙宫声望卷〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=13;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200;

} else{	
}  
  
  
include("./ini/wp_ini.php");


$wpsl1=($iniFile->getItem('书卷数量','14'));
if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1千月宫声望卷〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=14;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200;

} else{	
}  
  
  
include("./ini/wp_ini.php");


$wpsl1=($iniFile->getItem('书卷数量','15'));
if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1千方寸山声望卷〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=15;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200;

} else{	
}  
  
  
include("./ini/wp_ini.php");


$wpsl1=($iniFile->getItem('书卷数量','16'));
if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1千天宫声望卷〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=16;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200;

} else{	
}  
include("./ini/wp_ini.php");


$wpsl1=($iniFile->getItem('书卷数量','17'));
if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1千地府声望卷〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=17;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200;

} else{	
}  
  
  
  
  include("./ini/wp_ini.php");


$wpsl1=($iniFile->getItem('书卷数量','19'));
if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1千乌鸡国声望卷〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=19;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200;

} else{	
}  
  
  
  
   include("./ini/wp_ini.php");


$wpsl1=($iniFile->getItem('书卷数量','20'));
if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1千恶魔广场声望卷〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=20;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200;

} else{	
}  
  
  
  
include("./ini/wp_ini.php");


$wpsl1=($iniFile->getItem('书卷数量','21'));
if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="〖1千夫妻声望卷〗";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=21;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200;

} else{	
}  
  
  
  
  
  
  
  
  
  
  
  
if ($xysw1>0) {
$swidx=8;//要获得声望id
$swmzx="西游声望";//名字
$syz=$xysw1;//值
include("./pz/ini_pzz035.php");	
} else{	
echo "<font color=black>对不起,你没有任意一样区域或者师门卷轴可以兑换西游声望</font><br>";
} 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  } else{	

	}
  




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>