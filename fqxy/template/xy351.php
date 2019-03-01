<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


	
	
	include("./ini/zt_ini.php");
	$vip=($iniFile->getItem('玩家信息','vip等级'));
	
	
	
	if($vip>=3){
	
	
	
	
	
	
//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);


# 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));

$dty=($iniFile->getItem('地图坐标','y'));
//保存上次的地图值移动清除
$ydtx=$dtx;
$ydty=$dty;
//保存上次的地图值移动清除


$csm=$npcc;

echo "<font color=red>你使用了【副本如意传送门】来到了下个区域</font></a>"."<br>";



///////////////////冰晶塔/////////////////
if($csm ==1){
$dtx=49;
$dty=6;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==2){
$dtx=49;
$dty=10;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==3){
$dtx=49;
$dty=21;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==4){
$dtx=49;
$dty=14;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==5){
$dtx=49;
$dty=0;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
///////////////////冰晶塔/////////////////


///////////////////白骨陵墓/////////////////
} elseif($csm ==6){
$dtx=46;
$dty=8;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==7){
$dtx=46;
$dty=12;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==8){
$dtx=46;
$dty=19;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==9){
$dtx=46;
$dty=24;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==10){
$dtx=46;
$dty=28;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==11){
$dtx=46;
$dty=32;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==12){
$dtx=38;
$dty=0;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
///////////////////白骨陵墓/////////////////

///////////////////波月洞/////////////////
} elseif($csm ==13){
$dtx=50;
$dty=30;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==14){
$dtx=50;
$dty=37;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==15){
$dtx=50;
$dty=16;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==16){
$dtx=50;
$dty=18;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==17){
$dtx=50;
$dty=19;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==18){
$dtx=50;
$dty=10;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==19){
$dtx=37;
$dty=0;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
///////////////////波月洞/////////////////




///////////////////变异紫竹铃/////////////////
} elseif($csm ==20){
$dtx=45;
$dty=2;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==21){
$dtx=45;
$dty=17;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==22){
$dtx=45;
$dty=10;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==23){
$dtx=45;
$dty=13;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==24){
$dtx=45;
$dty=8;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==25){
$dtx=14;
$dty=12;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

///////////////////变异紫竹铃/////////////////


///////////////////莲花洞/////////////////
} elseif($csm ==26){
$dtx=52;
$dty=32;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==27){
$dtx=52;
$dty=26;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==28){
$dtx=52;
$dty=9;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==29){
$dtx=52;
$dty=17;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==30){
$dtx=52;
$dty=22;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==31){
$dtx=52;
$dty=18;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==32){
$dtx=39;
$dty=3;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

///////////////////莲花洞/////////////////

///////////////////老君炉/////////////////
} elseif($csm ==33){
$dtx=34;
$dty=0;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==34){
$dtx=34;
$dty=2;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==35){
$dtx=34;
$dty=4;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==36){
$dtx=34;
$dty=8;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==37){
$dtx=34;
$dty=12;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==38){
$dtx=34;
$dty=15;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==39){
$dtx=23;
$dty=24;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

///////////////////老君炉/////////////////


///////////////////水帘洞/////////////////
} elseif($csm ==40){
$dtx=24;
$dty=27;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==41){
$dtx=24;
$dty=30;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==42){
$dtx=24;
$dty=34;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==43){
$dtx=24;
$dty=22;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);



///////////////////水帘洞/////////////////





///////////////////枉死城/////////////////

} elseif($csm ==44){
$dtx=47;
$dty=5;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==45){
$dtx=47;
$dty=12;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==46){
$dtx=47;
$dty=9;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==47){
$dtx=22;
$dty=18;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);



///////////////////枉死城/////////////////


///////////////////压龙洞/////////////////
} elseif($csm ==48){
$dtx=51;
$dty=8;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==49){
$dtx=51;
$dty=11;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==50){
$dtx=51;
$dty=14;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==51){
$dtx=51;
$dty=22;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==52){
$dtx=51;
$dty=18;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==53){
$dtx=51;
$dty=33;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==54){
$dtx=51;
$dty=39;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==55){
$dtx=41;
$dty=0;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);



///////////////////压龙洞/////////////////



///////////////////斩妖台/////////////////

} elseif($csm ==56){
$dtx=33;
$dty=0;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==57){
$dtx=33;
$dty=2;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==58){
$dtx=33;
$dty=4;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==59){
$dtx=33;
$dty=8;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==60){
$dtx=33;
$dty=12;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==61){
$dtx=23;
$dty=29;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);











///////////////////斩妖台/////////////////



///////////////////金兜洞/////////////////
} elseif($csm ==62){
$dtx=53;
$dty=6;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==63){
$dtx=53;
$dty=4;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==64){
$dtx=53;
$dty=11;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==65){
$dtx=53;
$dty=9;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==66){
$dtx=54;
$dty=12;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

///////////////////金兜洞/////////////////



///////////////////瑶池/////////////////

} elseif($csm ==67){
$dtx=48;
$dty=2;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==68){
$dtx=48;
$dty=4;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==69){
$dtx=48;
$dty=6;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);


} elseif($csm ==70){
$dtx=48;
$dty=12;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==71){
$dtx=23;
$dty=23;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);


///////////////////瑶池/////////////////





///////////////////通天水府/////////////////

} elseif($csm ==72){
$dtx=81;
$dty=1;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==73){
$dtx=81;
$dty=5;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==74){
$dtx=81;
$dty=8;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);


} elseif($csm ==75){
$dtx=81;
$dty=11;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==76){
$dtx=81;
$dty=0;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);


///////////////////通天水府/////////////////



///////////////////芭蕉洞/////////////////

} elseif($csm ==77){
$dtx=80;
$dty=8;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==78){
$dtx=80;
$dty=10;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==79){
$dtx=80;
$dty=0;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);


///////////////////芭蕉洞/////////////////




///////////////////小雷音寺/////////////////

} elseif($csm ==80){
$dtx=56;
$dty=4;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==81){
$dtx=56;
$dty=5;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==82){
$dtx=56;
$dty=8;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);


} elseif($csm ==83){
$dtx=56;
$dty=9;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==84){
$dtx=56;
$dty=11;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==85){
$dtx=56;
$dty=0;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);






///////////////////小雷音寺/////////////////



///////////////////盘丝洞/////////////////
} elseif($csm ==86){
$dtx=82;
$dty=1;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==87){
$dtx=82;
$dty=2;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==88){
$dtx=82;
$dty=4;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==89){
$dtx=82;
$dty=5;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);



} elseif($csm ==90){
$dtx=82;
$dty=7;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==91){
$dtx=82;
$dty=8;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==92){
$dtx=82;
$dty=10;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==93){
$dtx=82;
$dty=0;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
///////////////////盘丝洞/////////////////

///////////////////狮驼洞/////////////////
} elseif($csm ==94){
$dtx=83;
$dty=3;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==95){
$dtx=83;
$dty=6;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==96){
$dtx=83;
$dty=8;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==97){
$dtx=83;
$dty=0;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
///////////////////狮驼洞/////////////////


///////////////////无底洞/////////////////
} elseif($csm ==98){
$dtx=84;
$dty=8;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==99){
$dtx=84;
$dty=13;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==100){
$dtx=84;
$dty=12;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==101){
$dtx=84;
$dty=9;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==102){
$dtx=84;
$dty=0;
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
///////////////////无底洞/////////////////



} else{

}



} else{
echo "<font color=red>对不起【副本如意传送门】需要vip3级以上使用</font></a>"."<br>";

}














include("./template/xy002.php");//游戏主页


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini







?>