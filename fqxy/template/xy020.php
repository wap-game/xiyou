<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
	
	

		//删除掉住宅参观变量	

if($npcc ==166||$npcc ==167||$npcc==168){
//更新缓存数据
$inina1="fz.ini";
$path1='ache/'.$wjid;
//判断ini文件是否存在	
$ininame1 = $path1."/".$inina1;
unlink($ininame1); //删除文件 

//更新缓存数据
} else{

}
		
//删除掉住宅参观变量	
		


	
	
	
	
	
//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$ininame1=$ininame;

# 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));

$dty=($iniFile->getItem('地图坐标','y'));
//保存上次的地图值移动清除
$ydtx=$dtx;
$ydty=$dty;
//保存上次的地图值移动清除


$csm=$npcc;


if($csm ==1){
//东海龙宫--船夫--0-6
$dtx=1;
$dty=6;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==2){
//进入傲来国--入口--3-1
$dtx=24;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==3){
//金豆大厅--李白--0-1
$dtx=1;
$dty=33;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==4){
//活动大厅--李白--0-1
$dtx=1;
$dty=30;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==5){
//开封广场--李白--0-1
$dtx=24;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==6){
//龙宫--张果老--0-1
$dtx=2;
$dty=1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==7){
//月宫--张果老--0-1
$dtx=7;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==8){
//将军府--张果老--0-1
$dtx=1;
$dty=72;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==9){
//方寸山--张果老--0-1
$dtx=10;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==10){
//普陀山--张果老--0-1
$dtx=13;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==11){
//东海渔村(新手村)--张果老--0-1
$dtx=0;
$dty=1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==12){
//城南荒野--张果老--0-1
$dtx=1;
$dty=122;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==13){
//大小雁塔--张果老--0-1
$dtx=1;
$dty=86;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==14){
//高家大门--张果老--0-1
$dtx=21;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==15){
//兵马俑--张果老--0-1
$dtx=1;
$dty=93;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==16){

//雪山迷宫--张果老--0-1
$dtx=1;
$dty=104;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==17){
//天宫--张果老--0-1
$dtx=23;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==18){
//地府--张果老--0-1
$dtx=22;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==19){

//傲来国--张果老--0-1
$dtx=24;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==20){
//宝象国--张果老--0-1
$dtx=25;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);


} elseif($csm ==21){
//长安城--龙宫大弟子--2-1
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==22){
//傲来国--龙宫大弟子--3-1
$dtx=24;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==23){
//海底莽林--龙宫大弟子--3-1
$dtx=3;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==24){
//长安城--傲来国武士--24-0
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==25){
//宝象国--傲来国武士--24-0
$dtx=24;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==26){
//水帘洞天(副本)--傲来国武士--24-0
$dtx=24;
$dty=22;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==27){
//地府--宫兵（传送）--25-0
$dtx=22;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==28){
//天宫--宫兵（传送）--25-0
$dtx=23;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==29){
//长安城--宫兵（传送）--25-0
$dtx=25;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==30){
//傲来国--宫兵（传送）--25-0
$dtx=24;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==31){
//双叉岭--宫兵（传送）--25-0
$dtx=25;
$dty=14;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==32){
//波月洞--宫兵（传送）--25-0
$dtx=37;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==33){
//白骨陵墓--宫兵（传送）--25-0
$dtx=38;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==34){
//平顶山--宫兵（传送）--25-0
$dtx=26;
$dty=14;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==35){
//长安城--推磨鬼（传送）--22-2
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==36){
//生死河--推磨鬼（传送）--22-2
$dtx=22;
$dty=7;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==37){
//枉死城--推磨鬼（传送）--22-2
$dtx=22;
$dty=18;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==38){
//鸟嘴元帅府--推磨鬼（传送）--22-2
$dtx=22;
$dty=17;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==39){
//长安城--痴梦仙姑（传送）--7-0
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==40){
//傲来国--痴梦仙姑（传送）--7-0
$dtx=24;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==41){
//长安城--山门迎客晨月（传送）--10-0
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==42){
//开封府--山门迎客晨月（传送）--10-0
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==43){
//高家庄--山门迎客晨月（传送）--10-0
$dtx=21;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);


} elseif($csm ==44){
//长安城--知客僧（传送）--13-0
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==45){
//紫竹林(1000两)--知客僧（传送）--13-0
$dtx=13;
$dty=4;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==46){
//紫竹北林(1000两)--知客僧（传送）--13-0
$dtx=14;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==47){
//长安城--看门大爷老余头（传送）--21-0
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==48){
//开封府--看门大爷老余头（传送）--21-0
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==49){
//方寸山--看门大爷老余头（传送）--21-0
$dtx=10;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==50){
//长安城--接引仙子（传送）--23-0
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==51){
//开封府（待续）--接引仙子（传送）--23-0
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==52){
//傲来国--接引仙子（传送）--23-0
$dtx=24;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==53){
//老君炉(副本)--接引仙子（传送）--23-0
$dtx=23;
$dty=24;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==54){
//斩妖台(副本)--接引仙子（传送）--23-0
$dtx=23;
$dty=29;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==55){
//长安城--傲来国武士（传送）--24-0
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==56){
//宝象国--傲来国武士（传送）--24-0
$dtx=25;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==57){
//水帘洞天(副本)--傲来国武士（传送）--24-0
$dtx=24;
$dty=22;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==58){
//进入【皇宫】
$dtx=1;
$dty=31;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==59){
//进入【长安城】
$dtx=1;
$dty=5;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==60){
//长安---城城南荒野(区域)--1-122
$dtx=16;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==61){
//城南荒野---长安--16-12
$dtx=1;
$dty=122;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==62){
//长安---雪山迷宫入口--1-104
$dtx=44;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==63){
//雪山迷宫入口---长安--44-12
$dtx=1;
$dty=104;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==64){
//海底莽林---进入傲来国--3-12
$dtx=24;
$dty=7;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==65){
//泾水河---长安--5-12
$dtx=1;
$dty=116;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==66){
//长安---泾水河--1-116
$dtx=5;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==67){
//普陀山---紫竹林--13-4
$dtx=15;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==68){
//紫竹林---普陀山--15-12
$dtx=13;
$dty=4;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==79){
//银河---天宫--31-12
$dtx=23;
$dty=40;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==80){
//天宫---银河--23-40
$dtx=31;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==81){
//蟠桃园---天宫--32-12
$dtx=23;
$dty=22;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==82){
//天宫---蟠桃园--23-22
$dtx=32;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==83){
//斩妖台---天宫--33-12
$dtx=23;
$dty=29;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==84){
//天宫---斩妖台--23-29
$dtx=33;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==85){
//老君炉---天宫--34-12
$dtx=23;
$dty=24;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==86){
//天宫---老君炉--23-24
$dtx=34;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==87){
//双叉岭---宝象国--35-12
$dtx=25;
$dty=14;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==88){
//宝象国---双叉岭--25-14
$dtx=35;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==89){
//黑松林---宝象国--36-12
$dtx=25;
$dty=25;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==90){
//宝象国---黑松林--25-25
$dtx=36;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==91){
//金塔---宝象国--37-12
$dtx=25;
$dty=26;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==92){
//宝象国---金塔--25-26
$dtx=37;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==93){
//白骨洞---宝象国--38-12
$dtx=25;
$dty=30;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==94){
//宝象国---白骨洞--25-30
$dtx=38;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm ==95){
//平顶山---宝象国--39-12
$dtx=25;
$dty=34;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==96){
//宝象国---平顶山--25-34
$dtx=39;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==97){
//平顶山---乌鸡国--39-0
$dtx=26;
$dty=14;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
} elseif($csm ==98){
//乌鸡国---平顶山--26-14
$dtx=39;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);


} elseif($csm ==99){
//夹脊关---乌鸡国--40-12
$dtx=26;
$dty=7;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} elseif($csm >=100&&$csm <=300){
//s调用csm大于100
include("./wj/xy020-1.php");






} else{

}

include("./template/xy002.php");//游戏主页


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini







?>