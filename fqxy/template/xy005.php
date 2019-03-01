<?php

		//////////pk和死亡
include("./yq/yq5.php");	



//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){





include("./ini/bl_ini.php");
# 获取一个分类下所有数据
$wjfyid=($iniFile->getCategory('玩家id'));
$mm01=count($wjfyid,0)-1; 
include("./ini/bl1_ini.php");
# 获取一个分类下所有数据
$wjfyid=($iniFile->getCategory('玩家id'));
$mm02=count($wjfyid,0)-1; 
include("./ini/bl2_ini.php");
# 获取一个分类下所有数据
$wjfyid=($iniFile->getCategory('玩家id'));
$mm03=count($wjfyid,0)-1; 
# 获取一个分类下所有数据
$wjfyid=($iniFile->getCategory('玩家id'));
$mm04=count($wjfyid,0)-1; 
if($mm01>=1||$mm02>=1||$mm03>=1||$mm04>=1){
} else{	
include("./ini/user_ini.php");



//查询位置






# 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));

$dty=($iniFile->getItem('地图坐标','y'));




//向是西方向前行，左


//保存上次的地图值移动清除
$ydtx=$dtx;
$ydty=$dty;
//保存上次的地图值移动清除


//新手村地图
if ($dtx==0) {
//ini文件名字
$inina="xsc.ini";

if ($dty==3) {
$dty=2;



} elseif ($dty==1) {

$dty=4;



} elseif ($dty==6) {

$dty=1;

} elseif ($dty==7) {

$dty=6;


} elseif ($dty==8) {

$dty=7;

} elseif ($dty==9) {

$dty=8;


} elseif ($dty==11) {

$dty=10;


} elseif ($dty==10) {

$dty=13;

} elseif ($dty==13) {

$dty=14;

} elseif ($dty==19) {

$dty=18;


} elseif ($dty==20) {

$dty=19;

} elseif ($dty==21) {

$dty=20;

} elseif ($dty==24) {

$dty=27;

} elseif ($dty==27) {

$dty=28;

} elseif ($dty==28) {

$dty=15;

} elseif ($dty==29) {

$dty=16;

} elseif ($dty==30) {

$dty=29;
} elseif ($dty==23) {

$dty=30;

} elseif ($dty==22) {

$dty=31;

} elseif ($dty==31) {

$dty=32;

} elseif ($dty==32) {

$dty=17;



} else {
  echo "错误地图,编号：".$dty."<br>";
}







//长安城地图
 } elseif ($dtx==1) {

if ($dty==0) {
$dty=10;


} elseif ($dty==10) {

$dty=11;

} elseif ($dty==11) {

$dty=12;


} elseif ($dty==12) {

$dty=13;

} elseif ($dty==13) {

$dty=14;

} elseif ($dty==18) {

$dty=17;

} elseif ($dty==17) {

$dty=16;

} elseif ($dty==16) {

$dty=15;

} elseif ($dty==15) {

$dty=0;
} elseif ($dty==1) {

$dty=19;

} elseif ($dty==19) {

$dty=20;


} elseif ($dty==22) {

$dty=1;


} elseif ($dty==2) {

$dty=23;



} elseif ($dty==24) {

$dty=2;


} elseif ($dty==3) {

$dty=25;



} elseif ($dty==26) {

$dty=3;





} elseif ($dty==4) {

$dty=27;



} elseif ($dty==28) {

$dty=4;


} elseif ($dty==5) {

$dty=29;



} elseif ($dty==30) {

$dty=5;

} elseif ($dty==31) {

$dty=34;

} elseif ($dty==35) {

$dty=31;

} elseif ($dty==43) {

$dty=40;



} elseif ($dty==42) {

$dty=39;

} elseif ($dty==129) {

$dty=86;



} elseif ($dty==47) {

$dty=46;



} elseif ($dty==52) {

$dty=54;



} elseif ($dty==55) {

$dty=52;

} elseif ($dty==51) {

$dty=56;


} elseif ($dty==57) {

$dty=51;

} elseif ($dty==8) {

$dty=61;

} elseif ($dty==60) {

$dty=63;

} elseif ($dty==64) {

$dty=60;

} elseif ($dty==59) {

$dty=65;

} elseif ($dty==66) {

$dty=59;

} elseif ($dty==58) {

$dty=67;

} elseif ($dty==68) {

$dty=58;

} elseif ($dty==75) {

$dty=74;
} elseif ($dty==73) {

$dty=76;

} elseif ($dty==77) {

$dty=73;

} elseif ($dty==72) {

$dty=78;
} elseif ($dty==79) {

$dty=72;
} elseif ($dty==80) {

$dty=79;

} elseif ($dty==86) {

$dty=85;

} elseif ($dty==87) {

$dty=85;

} elseif ($dty==88) {

$dty=87;
} elseif ($dty==85) {

$dty=8;

} elseif ($dty==84) {

$dty=89;

} elseif ($dty==83) {

$dty=90;
} elseif ($dty==90) {

$dty=91;

} elseif ($dty==92) {

$dty=83;

} elseif ($dty==93) {

$dty=92;

} elseif ($dty==94) {

$dty=84;

} elseif ($dty==6) {

$dty=95;

} elseif ($dty==96) {

$dty=6;

} elseif ($dty==98) {

$dty=96;
} elseif ($dty==7) {

$dty=99;
} elseif ($dty==101) {

$dty=7;


} elseif ($dty==14) {

$dty=102;
} elseif ($dty==104) {

$dty=105;

} elseif ($dty==106) {

$dty=104;
} elseif ($dty==107) {

$dty=106;
} elseif ($dty==108) {

$dty=109;

} elseif ($dty==111) {

$dty=108;

} elseif ($dty==102) {

$dty=112;
} elseif ($dty==112) {

$dty=113;

} elseif ($dty==113) {

$dty=114;

} elseif ($dty==9) {

$dty=116;

} elseif ($dty==120) {

$dty=118;


} elseif ($dty==121) {

$dty=117;

} elseif ($dty==117) {

$dty=122;

} elseif ($dty==122) {

$dty=123;

} elseif ($dty==124) {

$dty=18;

} elseif ($dty==125) {

$dty=124;

} elseif ($dty==127) {

$dty=128;

} elseif ($dty==114) {
$dty=0;

//区域转换

$dtx=21;




} elseif ($dty==118) {
$dty=13;

//区域转换

$dtx=13;



} else {
  echo "错误地图,编号：".$dty."<br>";
}


//龙宫地图
 } elseif ($dtx==2) {
 
if ($dty==1) {
$dty=0;


} elseif ($dty==2) {
$dty=1;


} elseif ($dty==3) {
$dty=2;


} elseif ($dty==4) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==11) {
$dty=9;

} elseif ($dty==9) {
$dty=12;


} elseif ($dty==13) {
$dty=15;

} elseif ($dty==16) {
$dty=13;

} elseif ($dty==0) {
$dty=17;

} elseif ($dty==17) {
$dty=0;
//区域转换

$dtx=3;





} else {
  echo "错误地图,编号：".$dty."<br>";
}













//海底莽林4x4地图
 } elseif ($dtx==3) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;

} elseif ($dty==12) {
$dty=0;

//区域转换

$dtx=6;



} elseif ($dty==15) {
$dty=14;

} elseif ($dty==3) {
$dty=0;
//区域转换

$dtx=4;




} else {
  echo "错误地图,编号：".$dty."<br>";
}








//海底4x4地图
 } elseif ($dtx==4) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=0;
//区域转换

$dtx=5;



} else {
  echo "错误地图,编号：".$dty."<br>";
}









//泾水河4x4地图
 } elseif ($dtx==5) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}







//莽林深处4x4地图
 } elseif ($dtx==6) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}






//月宫地图
 } elseif ($dtx==7) {
 
if ($dty==2) {
$dty=3;


} elseif ($dty==1) {
$dty=5;

} elseif ($dty==6) {
$dty=1;

} elseif ($dty==0) {
$dty=7;

} elseif ($dty==8) {
$dty=0;

} elseif ($dty==13) {
$dty=0;

//区域转换

$dtx=9;




} else {
  echo "错误地图,编号：".$dty."<br>";
}


//月宫桂花4x4地图
 } elseif ($dtx==8) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;

} elseif ($dty==12) {
$dty=12;

//区域转换

$dtx=7;



} else {
  echo "错误地图,编号：".$dty."<br>";
}



//杏林4x4地图
 } elseif ($dtx==9) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}






//方寸山地图
 } elseif ($dtx==10) {
 
if ($dty==5) {
$dty=2;



} elseif ($dty==6) {
$dty=5;

} elseif ($dty==10) {
$dty=9;

} elseif ($dty==9) {
$dty=1;

} elseif ($dty==1) {
$dty=12;

} elseif ($dty==13) {
$dty=0;


} elseif ($dty==14) {
$dty=15;
} elseif ($dty==15) {
$dty=16;



} else {
  echo "错误地图,编号：".$dty."<br>";
}




//方寸山松林4x4地图
 } elseif ($dtx==11) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}






//长安城西瓜田4x4地图
 } elseif ($dtx==12) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}



//普陀山地图
 } elseif ($dtx==13) {
 
if ($dty==2) {
$dty=4;

} elseif ($dty==4) {
$dty=0;

//区域转换

$dtx=14;




} elseif ($dty==5) {
$dty=1;



} elseif ($dty==6) {
$dty=5;



} elseif ($dty==1) {
$dty=8;

} elseif ($dty==8) {
$dty=10;





} else {
  echo "错误地图,编号：".$dty."<br>";
}





//普陀山紫竹北林4x4地图
 } elseif ($dtx==14) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}


//普陀山紫竹林4x4地图
 } elseif ($dtx==15) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}





//城南荒野4x4地图
 } elseif ($dtx==16) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}







//大雁塔4x4地图
 } elseif ($dtx==17) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;




} elseif ($dty==12) {

$dty=129;

//区域转换

$dtx=1;




} else {
  echo "错误地图,编号：".$dty."<br>";
}





//小雁塔4x4地图
 } elseif ($dtx==18) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;

} elseif ($dty==12) {
$dty=130;

//区域转换

$dtx=1;


} else {
  echo "错误地图,编号：".$dty."<br>";
}








//兵马佣4x4地图
 } elseif ($dtx==19) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;

} elseif ($dty==12) {

$dty=93;

//区域转换

$dtx=1;




} else {
  echo "错误地图,编号：".$dty."<br>";
}




//碑林4x4地图
 } elseif ($dtx==20) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}



//高家庄地图
 } elseif ($dtx==21) {
 
if ($dty==5) {
$dty=3;


} elseif ($dty==6) {
$dty=1;

} elseif ($dty==1) {
$dty=7;

} elseif ($dty==8) {
$dty=10;

} elseif ($dty==0) {
$dty=11;

} elseif ($dty==11) {
$dty=12;


} else {
  echo "错误地图,编号：".$dty."<br>";
}



//地府地图
 } elseif ($dtx==22) {
 
if ($dty==3) {
$dty=6;


} elseif ($dty==6) {
$dty=7;


} elseif ($dty==7) {
$dty=8;
} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==11) {
$dty=12;
} elseif ($dty==12) {
$dty=13;

} elseif ($dty==13) {
$dty=14;
} elseif ($dty==14) {
$dty=15;

} elseif ($dty==15) {
$dty=16;

} elseif ($dty==16) {
$dty=3;
} elseif ($dty==17) {
$dty=2;
} elseif ($dty==2) {
$dty=18;
} elseif ($dty==1) {
$dty=19;

} elseif ($dty==20) {
$dty=1;

} elseif ($dty==21) {
$dty=123;

//区域转换

$dtx=1;

} elseif ($dty==23) {
$dty=22;



} else {
  echo "错误地图,编号：".$dty."<br>";
}

//天宫地图
 } elseif ($dtx==23) {
 
if ($dty==2) {
$dty=5;


} elseif ($dty==5) {
$dty=6;

} elseif ($dty==6) {
$dty=7;


} elseif ($dty==8) {
$dty=9;
} elseif ($dty==11) {
$dty=10;

} elseif ($dty==12) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;

} elseif ($dty==15) {
$dty=14;
} elseif ($dty==16) {
$dty=15;
} elseif ($dty==19) {
$dty=20;

} elseif ($dty==20) {
$dty=21;
} elseif ($dty==21) {
$dty=2;

} elseif ($dty==28) {
$dty=18;

} elseif ($dty==0) {
$dty=31;
} elseif ($dty==31) {
$dty=33;

} elseif ($dty==35) {
$dty=0;
} elseif ($dty==37) {
$dty=35;

} elseif ($dty==38) {
$dty=34;



} else {
  echo "错误地图,编号：".$dty."<br>";
}


//傲来国地图
 } elseif ($dtx==24) {
 
if ($dty==4) {
$dty=2;


} elseif ($dty==1) {
$dty=5;

} elseif ($dty==6) {
$dty=0;

} elseif ($dty==7) {
$dty=6;
} elseif ($dty==10) {
$dty=9;



} elseif ($dty==11) {
$dty=10;


} elseif ($dty==12) {
$dty=11;

} elseif ($dty==15) {
$dty=16;

} elseif ($dty==17) {
$dty=15;


} elseif ($dty==22) {
$dty=20;

} elseif ($dty==19) {
$dty=23;


} elseif ($dty==24) {
$dty=18;

} elseif ($dty==26) {
$dty=25;

} elseif ($dty==27) {
$dty=26;


} elseif ($dty==28) {
$dty=27;

} elseif ($dty==29) {
$dty=28;
} elseif ($dty==31) {
$dty=32;
} elseif ($dty==32) {
$dty=33;

} elseif ($dty==36) {
$dty=13;
} elseif ($dty==38) {
$dty=37;
} elseif ($dty==39) {
$dty=12;

} elseif ($dty==40) {
$dty=39;

} elseif ($dty==41) {
$dty=40;
} else {
  echo "错误地图,编号：".$dty."<br>";
}

//宝象国地图
 } elseif ($dtx==25) {
 
if ($dty==3) {
$dty=5;

} elseif ($dty==2) {
$dty=6;
} elseif ($dty==7) {
$dty=3;
} elseif ($dty==8) {
$dty=2;
} elseif ($dty==9) {
$dty=0;
} elseif ($dty==11) {
$dty=10;
} elseif ($dty==14) {
$dty=13;
} elseif ($dty==0) {
$dty=15;
} elseif ($dty==15) {
$dty=17;
} elseif ($dty==17) {
$dty=19;
} elseif ($dty==21) {
$dty=22;
} elseif ($dty==25) {
$dty=24;
} elseif ($dty==24) {
$dty=27;
} elseif ($dty==27) {
$dty=29;
} elseif ($dty==29) {
$dty=30;
} elseif ($dty==31) {
$dty=32;
} elseif ($dty==32) {
$dty=33;
} elseif ($dty==33) {
$dty=34;

} else {
  echo "错误地图,编号：".$dty."<br>";
}


//乌鸡国地图
 } elseif ($dtx==26) {
 
if ($dty==3) {
$dty=4;

} elseif ($dty==8) {
$dty=6;
} elseif ($dty==10) {
$dty=8;
} elseif ($dty==12) {
$dty=11;
} elseif ($dty==11) {
$dty=5;
} elseif ($dty==1) {
$dty=13;
} elseif ($dty==14) {
$dty=1;
} elseif ($dty==15) {
$dty=0;
} elseif ($dty==19) {
$dty=17;
} elseif ($dty==17) {
$dty=20;
} elseif ($dty==0) {
$dty=21;
} elseif ($dty==21) {
$dty=22;
} elseif ($dty==999) {
$dty=999;

} else {
  echo "错误地图,编号：".$dty."<br>";
}

//车迟国地图
 } elseif ($dtx==27) {
 
if ($dty==6) {
$dty=4;
} elseif ($dty==3) {
$dty=7;
} elseif ($dty==10) {
$dty=8;
} elseif ($dty==8) {
$dty=11;
} elseif ($dty==0) {
$dty=12;
} elseif ($dty==12) {
$dty=13;
} elseif ($dty==13) {
$dty=14;
} elseif ($dty==14) {
$dty=16;
} elseif ($dty==16) {
$dty=17;
} elseif ($dty==17) {
$dty=18;
} elseif ($dty==19) {
$dty=20;
} elseif ($dty==24) {
$dty=0;
} elseif ($dty==999) {
$dty=999;
} else {
  echo "错误地图,编号：".$dty."<br>";
}


//女儿国地图
 } elseif ($dtx==28) {
 
if ($dty==5) {
$dty=3;
} elseif ($dty==3) {
$dty=6;
} elseif ($dty==8) {
$dty=11;
} elseif ($dty==14) {
$dty=0;
} elseif ($dty==15) {
$dty=14;
} elseif ($dty==15) {
$dty=16;
} elseif ($dty==17) {
$dty=16;
} elseif ($dty==19) {
$dty=17;
} elseif ($dty==0) {
$dty=22;
} elseif ($dty==22) {
$dty=25;
} elseif ($dty==25) {
$dty=26;
} elseif ($dty==26) {
$dty=27;
} elseif ($dty==30) {
$dty=29;

} else {
  echo "错误地图,编号：".$dty."<br>";
}


//季赛国地图
 } elseif ($dtx==29) {
 
if ($dty==4) {
$dty=0;
} elseif ($dty==9) {
$dty=4;
} elseif ($dty==0) {
$dty=10;
} elseif ($dty==11) {
$dty=13;
} elseif ($dty==10) {
$dty=16;
} elseif ($dty==999) {
$dty=999;
} elseif ($dty==999) {
$dty=999;
} elseif ($dty==999) {
$dty=999;
} elseif ($dty==999) {
$dty=999;
} elseif ($dty==999) {
$dty=999;
} elseif ($dty==999) {
$dty=999;
} elseif ($dty==999) {
$dty=999;
} elseif ($dty==999) {
$dty=999;
} elseif ($dty==999) {
$dty=999;
} elseif ($dty==999) {
$dty=999;
} else {
  echo "错误地图,编号：".$dty."<br>";
}


//朱紫国地图
 } elseif ($dtx==30) {
 
if ($dty==4) {
$dty=3;
} elseif ($dty==3) {
$dty=5;
} elseif ($dty==6) {
$dty=7;
} elseif ($dty==8) {
$dty=6;
} elseif ($dty==9) {
$dty=10;
} elseif ($dty==11) {
$dty=9;
} elseif ($dty==14) {
$dty=15;
} elseif ($dty==16) {
$dty=13;
} elseif ($dty==17) {
$dty=16;
} elseif ($dty==0) {
$dty=19;
} elseif ($dty==19) {
$dty=20;
} elseif ($dty==22) {
$dty=23;
} elseif ($dty==24) {
$dty=22;
} elseif ($dty==26) {
$dty=25;
} elseif ($dty==27) {
$dty=0;
} elseif ($dty==28) {
$dty=30;
} elseif ($dty==31) {
$dty=27;

} elseif ($dty==32) {
$dty=31;
} elseif ($dty==34) {
$dty=32;






} else {
  echo "错误地图,编号：".$dty."<br>";
}

//天宫银河4x4地图
 } elseif ($dtx==31) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}


//天宫蟠桃园4x4地图
 } elseif ($dtx==32) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=22;
//区域转换

$dtx=23;



} else {
  echo "错误地图,编号：".$dty."<br>";
}



//天宫【斩妖台】4x4地图
 } elseif ($dtx==33) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=29;
//区域转换

$dtx=23;



} else {
  echo "错误地图,编号：".$dty."<br>";
}

//天宫老君炉一4x4地图
 } elseif ($dtx==34) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=24;
//区域转换

$dtx=23;



} else {
  echo "错误地图,编号：".$dty."<br>";
}


//宝象国双叉岭4x4地图
 } elseif ($dtx==35) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=14;
//区域转换

$dtx=25;



} else {
  echo "错误地图,编号：".$dty."<br>";
}


//【宝象国】黑松林地图
 } elseif ($dtx==36) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=25;
//区域转换

$dtx=25;



} else {
  echo "错误地图,编号：".$dty."<br>";
}

//【宝象国】黑松林地图
 } elseif ($dtx==37) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=26;
//区域转换

$dtx=25;



} else {
  echo "错误地图,编号：".$dty."<br>";
}


//【宝象国】白骨洞地图
 } elseif ($dtx==38) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=30;
//区域转换

$dtx=25;



} else {
  echo "错误地图,编号：".$dty."<br>";
}




//【宝象国】平顶山地图
 } elseif ($dtx==39) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=34;
//区域转换

$dtx=25;



} else {
  echo "错误地图,编号：".$dty."<br>";
}



//【宝象国】夹脊关地图
 } elseif ($dtx==40) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=7;
//区域转换

$dtx=26;



} else {
  echo "错误地图,编号：".$dty."<br>";
}




//【乌鸡国】压龙山地图
 } elseif ($dtx==41) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=12;
//区域转换

$dtx=26;



} else {
  echo "错误地图,编号：".$dty."<br>";
}


//【乌鸡国】桃林地图
 } elseif ($dtx==42) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=15;
//区域转换

$dtx=26;



} else {
  echo "错误地图,编号：".$dty."<br>";
}



//冰风谷迷宫地图
 } elseif ($dtx==43) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=105;
//区域转换

$dtx=1;



} else {
  echo "错误地图,编号：".$dty."<br>";
}


//雪山迷宫地图
 } elseif ($dtx==44) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=104;
//区域转换

$dtx=1;


} else {
  echo "错误地图,编号：".$dty."<br>";
}




//变异紫竹林地图
 } elseif ($dtx==45) {
 
 if ($dty==1) {
$dty=0;


} elseif ($dty==2) {
$dty=1;

} elseif ($dty==3) {
$dty=2;

} elseif ($dty==4) {
$dty=3;
 
 
 } elseif ($dty==6) {
$dty=5;


  } elseif ($dty==9) {
$dty=6;

  } elseif ($dty==11) {
$dty=10;


   } elseif ($dty==13) {
$dty=11;
  } elseif ($dty==15) {
$dty=16;
  } elseif ($dty==16) {
$dty=18;


} else {
  echo "错误地图,编号：".$dty."<br>";
}





//白骨陵墓地图
 } elseif ($dtx==46) {
 if ($dty==1) {
$dty=0;
} elseif ($dty==3) {
$dty=2;
  } elseif ($dty==5) {
$dty=4;
  } elseif ($dty==6) {
$dty=5;
  } elseif ($dty==10) {
$dty=6;
  } elseif ($dty==14) {
$dty=15;
  } elseif ($dty==15) {
$dty=16;
  } elseif ($dty==16) {
$dty=17;
  } elseif ($dty==21) {
$dty=20;
  } elseif ($dty==22) {
$dty=21;
  } elseif ($dty==23) {
$dty=22;
  } elseif ($dty==25) {
$dty=26;

  } elseif ($dty==28) {
$dty=27;

  } elseif ($dty==29) {
$dty=10;

  } elseif ($dty==32) {
$dty=29;








} else {
  echo "错误地图,编号：".$dty."<br>";
}





//枉死地图
 } elseif ($dtx==47) {
 if ($dty==0) {
$dty=1;
} elseif ($dty==1) {
$dty=2;
  } elseif ($dty==2) {
$dty=3;
  } elseif ($dty==3) {
$dty=4;
  } elseif ($dty==4) {
$dty=5;
  } elseif ($dty==7) {
$dty=8;
  } elseif ($dty==10) {
$dty=11;
  } elseif ($dty==11) {
$dty=12;



} else {
  echo "错误地图,编号：".$dty."<br>";
}



//瑶池地图
 } elseif ($dtx==48) {
 if ($dty==5) {
$dty=3;
} elseif ($dty==6) {
$dty=5;
  } elseif ($dty==7) {
$dty=8;
  } elseif ($dty==8) {
$dty=2;
  } elseif ($dty==2) {
$dty=10;
  } elseif ($dty==10) {
$dty=11;
  } elseif ($dty==11) {
$dty=12;
  } elseif ($dty==14) {
$dty=13;




} else {
  echo "错误地图,编号：".$dty."<br>";
}



//冰晶塔地图
 } elseif ($dtx==49) {
 if ($dty==2) {
$dty=3;
} elseif ($dty==3) {
$dty=4;
  } elseif ($dty==9) {
$dty=8;
  } elseif ($dty==10) {
$dty=9;
  } elseif ($dty==11) {
$dty=10;
  } elseif ($dty==12) {
$dty=11;
  } elseif ($dty==16) {
$dty=17;
  } elseif ($dty==17) {
$dty=2;
  } elseif ($dty==18) {
$dty=19;
  } elseif ($dty==21) {
$dty=20;
  } elseif ($dty==22) {
$dty=21;
  } elseif ($dty==23) {
$dty=18;

  } elseif ($dty==999) {
$dty=999;
  } elseif ($dty==999) {
$dty=999;

  } elseif ($dty==999) {
$dty=999;



} else {
  echo "错误地图,编号：".$dty."<br>";
}

//波月洞地图
 } elseif ($dtx==50) {
 if ($dty==1) {
$dty=0;
} elseif ($dty==2) {
$dty=1;
  } elseif ($dty==3) {
$dty=2;
  } elseif ($dty==4) {
$dty=3;
  } elseif ($dty==6) {
$dty=5;
  } elseif ($dty==7) {
$dty=6;
  } elseif ($dty==8) {
$dty=7;
  } elseif ($dty==14) {
$dty=13;
  } elseif ($dty==15) {
$dty=14;
  } elseif ($dty==16) {
$dty=15;
  } elseif ($dty==17) {
$dty=16;
  } elseif ($dty==22) {
$dty=20;

  } elseif ($dty==24) {
$dty=25;
  } elseif ($dty==26) {
$dty=24;

  } elseif ($dty==27) {
$dty=28;
  } elseif ($dty==29) {
$dty=27;

  } elseif ($dty==34) {
$dty=33;

  } elseif ($dty==35) {
$dty=32;

  } elseif ($dty==36) {
$dty=35;

  } elseif ($dty==37) {
$dty=36;






} else {
  echo "错误地图,编号：".$dty."<br>";
}


//压龙山地图
 } elseif ($dtx==51) {
 if ($dty==1) {
$dty=0;
} elseif ($dty==3) {
$dty=2;
  } elseif ($dty==4) {
$dty=3;
  } elseif ($dty==7) {
$dty=9;
  } elseif ($dty==10) {
$dty=5;
  } elseif ($dty==13) {
$dty=11;
  } elseif ($dty==14) {
$dty=13;
  } elseif ($dty==15) {
$dty=14;
  } elseif ($dty==16) {
$dty=15;
  } elseif ($dty==17) {
$dty=18;
  } elseif ($dty==19) {
$dty=17;
  } elseif ($dty==20) {
$dty=19;

  } elseif ($dty==21) {
$dty=20;
  } elseif ($dty==22) {
$dty=21;

  } elseif ($dty==25) {
$dty=27;

  } elseif ($dty==28) {
$dty=25;
  } elseif ($dty==30) {
$dty=32;


  } elseif ($dty==33) {
$dty=30;

  } elseif ($dty==35) {
$dty=34;

  } elseif ($dty==36) {
$dty=35;

  } elseif ($dty==37) {
$dty=36;

  } elseif ($dty==39) {
$dty=38;

} else {
  echo "错误地图,编号：".$dty."<br>";
}



//莲花洞地图
 } elseif ($dtx==52) {
 if ($dty==2) {
$dty=1;
} elseif ($dty==4) {
$dty=3;
  } elseif ($dty==5) {
$dty=4;
  } elseif ($dty==6) {
$dty=5;
  } elseif ($dty==7) {
$dty=6;
  } elseif ($dty==9) {
$dty=8;
  } elseif ($dty==12) {
$dty=13;
  } elseif ($dty==15) {
$dty=11;
  } elseif ($dty==16) {
$dty=15;
  } elseif ($dty==17) {
$dty=16;
  } elseif ($dty==18) {
$dty=20;
  } elseif ($dty==21) {
$dty=18;

  } elseif ($dty==22) {
$dty=24;
  } elseif ($dty==25) {
$dty=22;

  } elseif ($dty==28) {
$dty=29;

  } elseif ($dty==31) {
$dty=30;



} else {
  echo "错误地图,编号：".$dty."<br>";
}



//金兜洞地图
 } elseif ($dtx==53) {
 if ($dty==2) {
$dty=3;
} elseif ($dty==7) {
$dty=0;
  } elseif ($dty==8) {
$dty=7;
  } elseif ($dty==9) {
$dty=8;




} else {
  echo "错误地图,编号：".$dty."<br>";
}




//金兜山4x4地图
 } elseif ($dtx==54) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}



//翠云山4x4地图
 } elseif ($dtx==55) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}



//小雷音寺地图
 } elseif ($dtx==56) {
 if ($dty==2) {
$dty=1;
} elseif ($dty==3) {
$dty=2;

} elseif ($dty==6) {
$dty=3;

} elseif ($dty==7) {
$dty=6;

} elseif ($dty==8) {
$dty=7;
} elseif ($dty==9) {
$dty=8;
} elseif ($dty==11) {
$dty=10;

} else {
  echo "错误地图,编号：".$dty."<br>";
}

//盘丝洞4x4地图
 } elseif ($dtx==57) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}

//麒麟山4x4地图
 } elseif ($dtx==58) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}



//荆棘岭4x4地图
 } elseif ($dtx==59) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}



//比丘国地图
 } elseif ($dtx==60) {
 
if ($dty==2) {
$dty=3;


} elseif ($dty==4) {
$dty=2;

} elseif ($dty==1) {
$dty=5;


} elseif ($dty==6) {
$dty=1;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==7) {
$dty=11;

} elseif ($dty==12) {
$dty=7;

} elseif ($dty==0) {
$dty=13;


} elseif ($dty==13) {
$dty=14;
} elseif ($dty==16) {
$dty=0;
} elseif ($dty==17) {
$dty=16;
} elseif ($dty==20) {
$dty=18;

} elseif ($dty==24) {
$dty=23;








} else {
  echo "错误地图,编号：".$dty."<br>";
}

//天法国地图
 } elseif ($dtx==61) {
 
if ($dty==4) {
$dty=1;
} elseif ($dty==5) {
$dty=4;
} elseif ($dty==6) {
$dty=5;
} elseif ($dty==8) {
$dty=10;
} elseif ($dty==10) {
$dty=11;
} elseif ($dty==0) {
$dty=12;
} elseif ($dty==12) {
$dty=13;
} elseif ($dty==13) {
$dty=14;
} elseif ($dty==14) {
$dty=15;
} elseif ($dty==18) {
$dty=0;
} elseif ($dty==19) {
$dty=18;
} elseif ($dty==20) {
$dty=19;


} else {
  echo "错误地图,编号：".$dty."<br>";
}

//凤仙郡地图
 } elseif ($dtx==62) {
 
if ($dty==1){
$dty=3;
} elseif ($dty==7) {
$dty=6;
} elseif ($dty==5) {
$dty=10;
} elseif ($dty==0) {
$dty=13;
} elseif ($dty==13) {
$dty=14;
} elseif ($dty==17) {
$dty=0;
} elseif ($dty==18) {
$dty=17;


} else {
  echo "错误地图,编号：".$dty."<br>";
}

//玉华郡地图
 } elseif ($dtx==63) {
 
if ($dty==4) {
$dty=3;
} elseif ($dty==2) {
$dty=5;
} elseif ($dty==6) {
$dty=2;
} elseif ($dty==1) {
$dty=7;
} elseif ($dty==8) {
$dty=1;
} elseif ($dty==11) {
$dty=10;
} elseif ($dty==14) {
$dty=11;
} elseif ($dty==10) {
$dty=15;
} elseif ($dty==15) {
$dty=16;
} elseif ($dty==0) {
$dty=17;
} elseif ($dty==17) {
$dty=18;
} elseif ($dty==21) {
$dty=0;
} elseif ($dty==22) {
$dty=21;
} else {
  echo "错误地图,编号：".$dty."<br>";
}

//金平府地图
 } elseif ($dtx==64) {
 
if ($dty==6) {
$dty=3;
} elseif ($dty==3) {
$dty=5;
} elseif ($dty==0) {
$dty=7;
} elseif ($dty==7) {
$dty=8;
} elseif ($dty==10) {
$dty=9;
} elseif ($dty==11) {
$dty=10;
} elseif ($dty==13) {
$dty=14;
} elseif ($dty==14) {
$dty=15;
} elseif ($dty==16) {
$dty=17;
} elseif ($dty==12) {
$dty=18;
} elseif ($dty==18) {
$dty=0;
} elseif ($dty==20) {
$dty=12;

} else {
  echo "错误地图,编号：".$dty."<br>";
}

//天竺国地图
 } elseif ($dtx==65) {
 
if ($dty==4) {
$dty=1;
} elseif ($dty==1) {
$dty=3;
} elseif ($dty==9) {
$dty=5;
} elseif ($dty==5) {
$dty=8;
} elseif ($dty==0) {
$dty=10;
} elseif ($dty==10) {
$dty=11;
} elseif ($dty==13) {
$dty=12;
} elseif ($dty==17) {
$dty=15;
} elseif ($dty==18) {
$dty=0;
} elseif ($dty==19) {
$dty=18;
} elseif ($dty==20) {
$dty=19;
} elseif ($dty==21) {
$dty=20;

} else {
  echo "错误地图,编号：".$dty."<br>";
}


//因果岛(地图
 } elseif ($dtx==66) {
 
if ($dty==1) {
$dty=2;
} elseif ($dty==4) {
$dty=3;
} elseif ($dty==0) {
$dty=5;
} elseif ($dty==7) {
$dty=0;



} else {
  echo "错误地图,编号：".$dty."<br>";
}


//止戈镇(地图
 } elseif ($dtx==67) {
 
if ($dty==0) {
$dty=11;
} elseif ($dty==11) {
$dty=12;
} elseif ($dty==12) {
$dty=13;
} elseif ($dty==13) {
$dty=14;
} elseif ($dty==14) {
$dty=15;
} elseif ($dty==16) {
$dty=0;
} elseif ($dty==17) {
$dty=16;
} elseif ($dty==18) {
$dty=17;
} elseif ($dty==19) {
$dty=18;
} elseif ($dty==20) {
$dty=19;


} else {
  echo "错误地图,编号：".$dty."<br>";
}





//小遗迹地图
 } elseif ($dtx==68) {
 
if ($dty==1) {
$dty=0;
} elseif ($dty==2) {
$dty=1;
} elseif ($dty==3) {
$dty=2;


} else {
  echo "错误地图,编号：".$dty."<br>";
}


//大遗迹地图
 } elseif ($dtx==69) {
 
if ($dty==1) {
$dty=0;
} elseif ($dty==2) {
$dty=1;
} elseif ($dty==3) {
$dty=2;


} else {
  echo "错误地图,编号：".$dty."<br>";
}


//开封广场地图
 } elseif ($dtx==70) {
 
if ($dty==2) {
$dty=0;




} else {
  echo "错误地图,编号：".$dty."<br>";
}

//民宅地图
 } elseif ($dtx==71) {
 
if ($dty==1) {
$dty=2;
} elseif ($dty==3) {
$dty=1;

} elseif ($dty==4) {
$dty=0;
} elseif ($dty==0) {
$dty=5;

} elseif ($dty==7) {
$dty=3;

} elseif ($dty==5) {
$dty=9;

} else {
  echo "错误地图,编号：".$dty."<br>";
}

//豪宅地图
 } elseif ($dtx==72) {
 
if ($dty==1) {
$dty=2;
} elseif ($dty==3) {
$dty=1;

} elseif ($dty==4) {
$dty=0;
} elseif ($dty==0) {
$dty=5;

} elseif ($dty==7) {
$dty=3;

} elseif ($dty==5) {
$dty=9;

} else {
  echo "错误地图,编号：".$dty."<br>";
}
//官宅地图
 } elseif ($dtx==73) {
 
if ($dty==1) {
$dty=2;
} elseif ($dty==3) {
$dty=1;

} elseif ($dty==4) {
$dty=0;
} elseif ($dty==0) {
$dty=5;

} elseif ($dty==7) {
$dty=3;

} elseif ($dty==5) {
$dty=9;

} elseif ($dty==13) {
$dty=12;

} else {
  echo "错误地图,编号：".$dty."<br>";
}





//攻城地图
 } elseif ($dtx==74) {
 
if ($dty==2) {
$dty=1;

} elseif ($dty==3) {
$dty=2;

} elseif ($dty==4) {
$dty=5;



} elseif ($dty==5) {
$dty=6;

} elseif ($dty==7) {
$dty=4;
} elseif ($dty==8) {
$dty=9;

} elseif ($dty==11) {
$dty=10;

} elseif ($dty==12) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==15) {
$dty=16;

} elseif ($dty==14) {
$dty=17;

} elseif ($dty==18) {
$dty=19;

} elseif ($dty==19) {
$dty=20;



} elseif ($dty==20) {
$dty=21;


} elseif ($dty==21) {
$dty=22;

} elseif ($dty==24) {
$dty=23;

} elseif ($dty==25) {
$dty=24;

} elseif ($dty==27) {
$dty=26;




} else {
  echo "错误地图,编号：".$dty."<br>";
}



//VIP练级区4x4地图
 } elseif ($dtx==75) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;



} elseif ($dty==15) {
$dty=14;

} elseif ($dty==3) {
$dty=0;
//区域转换

$dtx=4;




} else {
  echo "错误地图,编号：".$dty."<br>";
}






//恶魔区4x4地图
 } elseif ($dtx==76) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;



} elseif ($dty==15) {
$dty=14;

} elseif ($dty==3) {
$dty=0;




} else {
  echo "错误地图,编号：".$dty."<br>";
}




//宠物岛4x4地图
 } elseif ($dtx==77) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;



} elseif ($dty==15) {
$dty=14;

} elseif ($dty==3) {
$dty=0;




} else {
  echo "错误地图,编号：".$dty."<br>";
}



 } elseif ($dtx==80) {
 
if ($dty==2) {
$dty=1;
} elseif ($dty==3) {
$dty=4;
} elseif ($dty==5) {
$dty=2;
} elseif ($dty==6) {
$dty=5;
} elseif ($dty==8) {
$dty=7;

} elseif ($dty==999) {

} else {
  echo "错误地图,编号：".$dty."<br>";
}



 } elseif ($dtx==81) {
 
if ($dty==1) {
$dty=0;
} elseif ($dty==3) {
$dty=1;

} elseif ($dty==4) {
$dty=3;
} elseif ($dty==5) {
$dty=4;

} elseif ($dty==9) {
$dty=5;
} elseif ($dty==10) {
$dty=9;

} elseif ($dty==11) {
$dty=10;



} elseif ($dty==999) {

} else {
  echo "错误地图,编号：".$dty."<br>";
}





//盘丝洞
 } elseif ($dtx==82) {
 if ($dty==2) {
$dty=1;
} elseif ($dty==4) {
$dty=5;

 } elseif ($dty==7) {
$dty=4;









} else {
  echo "错误地图,编号：".$dty."<br>";
}






//狮驼洞
 } elseif ($dtx==83) {
 if ($dty==2) {
$dty=1;
} elseif ($dty==5) {
$dty=2;
 } elseif ($dty==6) {
$dty=5;

 } elseif ($dty==9) {
$dty=6;

 } elseif ($dty==10) {
$dty=9;







} else {
  echo "错误地图,编号：".$dty."<br>";
}





//无底洞
 } elseif ($dtx==84) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;


} elseif ($dty==12) {
$dty=34;
//区域转换

$dtx=25;



} else {
  echo "错误地图,编号：".$dty."<br>";
}


//百花秘境4x4地图
 } elseif ($dtx==85) {
 
if ($dty==0) {
$dty=1;


} elseif ($dty==1) {
$dty=2;


} elseif ($dty==2) {
$dty=3;

} elseif ($dty==5) {
$dty=4;


} elseif ($dty==6) {
$dty=5;

} elseif ($dty==7) {
$dty=6;


} elseif ($dty==8) {
$dty=9;

} elseif ($dty==9) {
$dty=10;

} elseif ($dty==10) {
$dty=11;

} elseif ($dty==13) {
$dty=12;

} elseif ($dty==14) {
$dty=13;


} elseif ($dty==15) {
$dty=14;



} else {
  echo "错误地图,编号：".$dty."<br>";
}




 } elseif ($dtx==87) {
if ($dty==0) {
$dty=1;
} elseif ($dty==1) {
$dty=2;
} elseif ($dty==2) {
$dty=3;
} elseif ($dty==5) {
$dty=4;
} elseif ($dty==6) {
$dty=5;
} elseif ($dty==7) {
$dty=6;
} elseif ($dty==8) {
$dty=9;
} elseif ($dty==9) {
$dty=10;
} elseif ($dty==10) {
$dty=11;
} elseif ($dty==13) {
$dty=12;
} elseif ($dty==14) {
$dty=13;
} elseif ($dty==15) {
$dty=14;
} else {
  echo "错误地图,编号：".$dty."<br>";
}
 } elseif ($dtx==88) {
if ($dty==0) {
$dty=1;
} elseif ($dty==1) {
$dty=2;
} elseif ($dty==2) {
$dty=3;
} elseif ($dty==5) {
$dty=4;
} elseif ($dty==6) {
$dty=5;
} elseif ($dty==7) {
$dty=6;
} elseif ($dty==8) {
$dty=9;
} elseif ($dty==9) {
$dty=10;
} elseif ($dty==10) {
$dty=11;
} elseif ($dty==13) {
$dty=12;
} elseif ($dty==14) {
$dty=13;
} elseif ($dty==15) {
$dty=14;
} else {
  echo "错误地图,编号：".$dty."<br>";
}
 } elseif ($dtx==89) {
if ($dty==0) {
$dty=1;
} elseif ($dty==1) {
$dty=2;
} elseif ($dty==2) {
$dty=3;
} elseif ($dty==5) {
$dty=4;
} elseif ($dty==6) {
$dty=5;
} elseif ($dty==7) {
$dty=6;
} elseif ($dty==8) {
$dty=9;
} elseif ($dty==9) {
$dty=10;
} elseif ($dty==10) {
$dty=11;
} elseif ($dty==13) {
$dty=12;
} elseif ($dty==14) {
$dty=13;
} elseif ($dty==15) {
$dty=14;
} else {
  echo "错误地图,编号：".$dty."<br>";
}

} elseif ($dtx==90) {
if ($dty==0) {
$dty=1;
} elseif ($dty==1) {
$dty=2;
} elseif ($dty==2) {
$dty=3;
} elseif ($dty==5) {
$dty=4;
} elseif ($dty==6) {
$dty=5;
} elseif ($dty==7) {
$dty=6;
} elseif ($dty==8) {
$dty=9;
} elseif ($dty==9) {
$dty=10;
} elseif ($dty==10) {
$dty=11;
} elseif ($dty==13) {
$dty=12;
} elseif ($dty==14) {
$dty=13;
} elseif ($dty==15) {
$dty=14;
} else {
  echo "错误地图,编号：".$dty."<br>";
}


} else {
  echo "错误地图,编号：".$dty."<br>";
}




# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
//写入公共数据附近玩家


}

include("./template/xy002.php");//游戏主页

} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的i
















?>