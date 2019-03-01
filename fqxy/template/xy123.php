<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

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







//仓库
if ($npcc==1) {
$dtx=1;
$dty=37;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了仓库！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//三联书店
} elseif ($npcc==2) {
$dtx=1;
$dty=36;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了三联书店！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//回春药铺
} elseif ($npcc==3) {
$dtx=1;
$dty=22;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了回春药铺！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//镖局
} elseif ($npcc==4) {
$dtx=1;
$dty=90;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了镖局！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//活动大厅
} elseif ($npcc==5) {
$dtx=1;
$dty=30;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了活动大厅！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//装备锻造
} elseif ($npcc==6) {
$dtx=1;
$dty=70;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了装备锻造！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//渔村
} elseif ($npcc==7) {
$dtx=0;
$dty=1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了渔村！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//长安城
} elseif ($npcc==8) {
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了长安城！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//天宫
} elseif ($npcc==9) {
$dtx=23;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了天宫！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//地府
} elseif ($npcc==10) {
$dtx=22;
$dty=2;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了地府！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//傲来国
} elseif ($npcc==11) {
$dtx=24;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了傲来国！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//宝象国
} elseif ($npcc==12) {
$dtx=25;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了宝象国！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//乌鸡国
} elseif ($npcc==13) {
$dtx=26;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了乌鸡国！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//车迟国
} elseif ($npcc==14) {
$dtx=27;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了车迟国！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//女儿国
} elseif ($npcc==15) {
$dtx=28;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了女儿国！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//祭赛国
} elseif ($npcc==16) {
$dtx=29;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了祭赛国！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//朱紫国
} elseif ($npcc==17) {
$dtx=30;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了朱紫国！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//比丘国
} elseif ($npcc==18) {
$dtx=60;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了比丘国！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//天法国
} elseif ($npcc==19) {
$dtx=61;
$dty=1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了天法国！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//风仙郡
} elseif ($npcc==20) {
$dtx=62;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了风仙郡！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//玉华郡
} elseif ($npcc==21) {
$dtx=63;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了玉华郡！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//金平府
} elseif ($npcc==22) {
$dtx=64;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了金平府！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//龙宫
} elseif ($npcc==23) {
$dtx=2;
$dty=1;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了龙宫！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//月宫
} elseif ($npcc==24) {
$dtx=7;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了月宫！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//普陀
} elseif ($npcc==25) {
$dtx=13;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了普陀山！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//方寸
} elseif ($npcc==26) {
$dtx=10;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了方寸山！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//将军
} elseif ($npcc==27) {
$dtx=1;
$dty=72;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了将军府！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//东海沙滩
} elseif ($npcc==28) {
$dtx=0;
$dty=15;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了东海沙滩！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//东海海岸
} elseif ($npcc==29) {
$dtx=0;
$dty=7;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了东海海岸！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//大雁塔
} elseif ($npcc==30) {
$dtx=1;
$dty=129;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了大雁塔！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//城南荒野
} elseif ($npcc==31) {
$dtx=1;
$dty=122;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了城南荒野！</font>"."<br>"; 
include("template/xy002.php");//游戏主页

//小雁塔
} elseif ($npcc==32) {
$dtx=1;
$dty=130;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了小雁塔！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//冰风谷
} elseif ($npcc==33) {
$dtx=1;
$dty=105;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了冰风谷！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//火焰山洞
} elseif ($npcc==34) {
$dtx=1;
$dty=107;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了火焰山洞！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//冰晶塔
} elseif ($npcc==35) {
$dtx=43;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了冰晶塔！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//化生寺
} elseif ($npcc==36) {
$dtx=1;
$dty=50;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了化生寺！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//变异竹林
} elseif ($npcc==37) {
$dtx=14;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了变异竹林！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//白骨陵墓
} elseif ($npcc==38) {
$dtx=38;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了白骨陵墓！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//枉死城
} elseif ($npcc==39) {
$dtx=22;
$dty=18;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了枉死城！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//水帘洞天
} elseif ($npcc==40) {
$dtx=24;
$dty=22;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了水帘洞天！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//天宫瑶池
} elseif ($npcc==41) {
$dtx=23;
$dty=23;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了天宫瑶池！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//波月洞
} elseif ($npcc==42) {
$dtx=37;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了波月洞！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//老君炉
} elseif ($npcc==43) {
$dtx=23;
$dty=24;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了兜率宫！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//压龙洞
} elseif ($npcc==44) {
$dtx=41;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了压龙洞！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//莲花洞
} elseif ($npcc==45) {
$dtx=39;
$dty=3;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了莲花洞！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//斩妖台
} elseif ($npcc==46) {
$dtx=23;
$dty=29;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了斩妖台！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//金兜洞
} elseif ($npcc==47) {
$dtx=54;
$dty=12;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了金兜洞！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//琉璃塔
} elseif ($npcc==48) {
$dtx=29;
$dty=8;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了琉璃塔！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//芭蕉洞
} elseif ($npcc==49) {
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了芭蕉洞！</font>"."<br>"; 
echo "<font color=black>暂时还未开放！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//小雷音寺
} elseif ($npcc==50) {
$dtx=56;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了小雷音寺！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//盘丝洞
} elseif ($npcc==51) {
$dtx=57;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了盘丝洞！</font>"."<br>"; 
include("template/xy002.php");//游戏主页

//伏羲阵法
} elseif ($npcc==52) {
$dtx=23;
$dty=37;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了伏羲阵法！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//十方阵法
} elseif ($npcc==53) {
$dtx=23;
$dty=10;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了十方阵法！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
//狮驼洞
} elseif ($npcc==54) {
$dtx=1;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了狮驼洞！</font>"."<br>"; 
echo "<font color=black>暂时还未开放！</font>"."<br>"; 
include("template/xy002.php");//游戏主页





//天竺国
} elseif ($npcc==55) {
$dtx=65;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了天竺国！</font>"."<br>"; 
include("template/xy002.php");//游戏主页

//因果岛
} elseif ($npcc==56) {
$dtx=66;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了因果岛！</font>"."<br>"; 
include("template/xy002.php");//游戏主页


//止戈镇
} elseif ($npcc==57) {
$dtx=67;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了止戈镇！</font>"."<br>"; 
include("template/xy002.php");//游戏主页



//通天水府
}elseif($npcc ==58){
$dtx=81;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了通天水府！</font>"."<br>"; 
include("template/xy002.php");//游戏主页

//芭蕉洞
}elseif($npcc ==59){
$dtx=80;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了芭蕉洞！</font>"."<br>"; 
include("template/xy002.php");//游戏主页

//盘丝洞
}elseif($npcc ==60){
$dtx=82;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了盘丝洞！</font>"."<br>"; 
include("template/xy002.php");//游戏主页


//狮驼洞
}elseif($npcc ==61){
$dtx=83;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了狮驼洞！</font>"."<br>"; 
include("template/xy002.php");//游戏主页


//无底洞
}elseif($npcc ==62){
$dtx=84;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了无底洞！</font>"."<br>"; 
include("template/xy002.php");//游戏主页


}elseif($npcc ==63){
$dtx=1;
$dty=9;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了南城门！</font>"."<br>"; 
include("template/xy002.php");//游戏主页


}elseif($npcc ==64){
$dtx=1;
$dty=5;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了朝阳门！</font>"."<br>"; 
include("template/xy002.php");//游戏主页


}elseif($npcc ==65){
$dtx=1;
$dty=18;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了东城门！</font>"."<br>"; 
include("template/xy002.php");//游戏主页
}elseif($npcc ==66){
$dtx=1;
$dty=14;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了长安西门！</font>"."<br>"; 
include("template/xy002.php");//游戏主页

}elseif($npcc ==67){
$dtx=23;
$dty=0;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);
echo "<font color=black>你腾云驾雾来到了接引殿！</font>"."<br>"; 
include("template/xy002.php");//游戏主页




} else{



}

} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>