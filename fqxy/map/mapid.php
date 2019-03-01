<?php






//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));

include("./ini/xtsz_ini.php");
$xtsz=($iniFile->getCategory('显示设置'));
$tpbl=$xtsz[图片显示];

//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
//include("class/iniclass.php");//调用iniclass文件
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));

$dty=($iniFile->getItem('地图坐标','y'));

$fjmap=($iniFile->getItem('验证信息','cmid值'));
if ($fjmap==38||$fjmap==39||$fjmap==40||$fjmap==41) {
$fjmap=92;
} else{


	
} 



if ($wjid==10000001) {//gm号可看

echo "<font color=red>-----当前地图坐标-----</font>"."</br>";
echo "地图x：".$dtx;
echo "</br>";
echo "地图y：".$dty;
echo "</br>";
echo "<font color=red>-----当前地图坐标-----</font>"."</br>";

} else{


	
} 




if ($dty=="") {

# 添加一个分类并直接添加子项
$iniFile->addCategory('地图坐标', ['x' => '0', 'y' => '0']);

} else{


	
} 

if ($dtx==0) {
//跳转至新手村地图

if ($mapdx==2) {
	} else{
include("xsc.php");
} 





$inina="xsc".$dtx."x".$dty.".ini";
$ininalock="xsc".$dtx."x".$dty.".txt";

 } elseif ($dtx==1) {
//跳转至长安城地图
if ($fjmap!=92) {
include("cac.php");
} else{
} 
$inina="cac".$dtx."x".$dty.".ini";
$ininalock="cac".$dtx."x".$dty.".txt";

 } elseif ($dtx==2) {
//跳转至龙宫地图
if ($fjmap!=92) {
include("lg.php");
} else{
} 
$inina="lg".$dtx."x".$dty.".ini";
$ininalock="lg".$dtx."x".$dty.".txt";
 } elseif ($dtx==3) {
//跳转至龙宫海底莽林地图
if ($fjmap!=92) {
include("hdml.php");
} else{
} 
$inina="hdml".$dtx."x".$dty.".ini";
$ininalock="hdml".$dtx."x".$dty.".txt";

 } elseif ($dtx==4) {
//跳转至龙宫海底地图
if ($fjmap!=92) {
include("hd.php");
} else{
} 
$inina="hd".$dtx."x".$dty.".ini";
$ininalock="hd".$dtx."x".$dty.".txt";
 } elseif ($dtx==5) {
//跳转至龙宫泾水河地图
if ($fjmap!=92) {
include("jsh.php");
} else{
} 
$inina="jsh".$dtx."x".$dty.".ini";
$ininalock="jsh".$dtx."x".$dty.".txt";

 } elseif ($dtx==6) {
//跳转至龙宫莽林深处地图
if ($fjmap!=92) {
include("hdmlsc.php");
} else{
} 
$inina="hdmlsc".$dtx."x".$dty.".ini";
$ininalock="hdmlsc".$dtx."x".$dty.".txt";
 } elseif ($dtx==7) {
//跳转至月宫地图
if ($fjmap!=92) {
include("yg.php");
} else{
} 
$inina="yg".$dtx."x".$dty.".ini";
$ininalock="yg".$dtx."x".$dty.".txt";
 } elseif ($dtx==8) {
//跳转至月宫桂花地图
if ($fjmap!=92) {
include("ghl.php");
} else{
} 
$inina="ghl".$dtx."x".$dty.".ini";
$ininalock="ghl".$dtx."x".$dty.".txt";
 } elseif ($dtx==9) {
//跳转至月宫杏林地图
if ($fjmap!=92) {
include("xl.php");
} else{
} 
$inina="xl".$dtx."x".$dty.".ini";
$ininalock="xl".$dtx."x".$dty.".txt";
 } elseif ($dtx==10) {
//跳转至方寸山地图
if ($fjmap!=92) {
include("fcs.php");
} else{
} 
$inina="fcs".$dtx."x".$dty.".ini";
$ininalock="fcs".$dtx."x".$dty.".txt";
 } elseif ($dtx==11) {
//跳转至方寸山松林地图
if ($fjmap!=92) {
include("sl.php");
} else{
} 
$inina="sl".$dtx."x".$dty.".ini";
$ininalock="sl".$dtx."x".$dty.".txt";
 } elseif ($dtx==12) {
//跳转至长安城西瓜田地图
if ($fjmap!=92) {
include("xgt.php");
} else{
} 
$inina="xgt".$dtx."x".$dty.".ini";
$ininalock="xgt".$dtx."x".$dty.".txt";
 } elseif ($dtx==13) {
//跳转至普陀山地图
if ($fjmap!=92) {
include("pts.php");
} else{
} 
$inina="pts".$dtx."x".$dty.".ini";
$ininalock="pts".$dtx."x".$dty.".txt";
 } elseif ($dtx==14) {
//跳转至普陀山紫竹北林地图
if ($fjmap!=92) {
include("zzbl.php");
} else{
} 
$inina="zzbl".$dtx."x".$dty.".ini";
$ininalock="zzbl".$dtx."x".$dty.".txt";
 } elseif ($dtx==15) {
//跳转至普陀山紫竹林地图
if ($fjmap!=92) {
include("zzl.php");
} else{
} 
$inina="zzl".$dtx."x".$dty.".ini";
$ininalock="zzl".$dtx."x".$dty.".txt";
 } elseif ($dtx==16) {
//跳转至城南荒野地图
if ($fjmap!=92) {
include("hy.php");
} else{
} 
$inina="hy".$dtx."x".$dty.".ini";
$ininalock="hy".$dtx."x".$dty.".txt";
 } elseif ($dtx==17) {
//跳转至大雁塔地图
if ($fjmap!=92) {
include("dyt.php");
} else{
} 
$inina="dyt".$dtx."x".$dty.".ini";
$ininalock="dyt".$dtx."x".$dty.".txt";
 } elseif ($dtx==18) {
//跳转至小雁塔地图
if ($fjmap!=92) {
include("xyt.php");
} else{
} 
$inina="xyt".$dtx."x".$dty.".ini";
$ininalock="xyt".$dtx."x".$dty.".txt";
 } elseif ($dtx==19) {
//跳转至兵马俑地图
if ($fjmap!=92) {
include("bmy.php");
} else{
} 
$inina="bmy".$dtx."x".$dty.".ini";
$ininalock="bmy".$dtx."x".$dty.".txt";
 } elseif ($dtx==20) {
//跳转至碑林地图
if ($fjmap!=92) {
include("bl.php");
} else{
} 
$inina="bl".$dtx."x".$dty.".ini";
$ininalock="bl".$dtx."x".$dty.".txt";
 } elseif ($dtx==21) {
//跳转至高家庄地图
if ($fjmap!=92) {
include("gjz.php");
} else{
} 
$inina="gjz".$dtx."x".$dty.".ini";
$ininalock="gjz".$dtx."x".$dty.".txt";
 } elseif ($dtx==22) {
//跳转至地府地图
if ($fjmap!=92) {
include("df.php");
} else{
} 
$inina="df".$dtx."x".$dty.".ini";
$ininalock="df".$dtx."x".$dty.".txt";
 } elseif ($dtx==23) {
//跳转至天宫地图
if ($fjmap!=92) {
include("tg.php");
} else{
} 
$inina="tg".$dtx."x".$dty.".ini";
$ininalock="tg".$dtx."x".$dty.".txt";

 } elseif ($dtx==24) {
//跳转至傲来国地图
if ($fjmap!=92) {
include("alg.php");
} else{
} 
$inina="alg".$dtx."x".$dty.".ini";
$ininalock="alg".$dtx."x".$dty.".txt";

 } elseif ($dtx==25) {
//跳转至宝象国地图
if ($fjmap!=92) {
include("bxg.php");
} else{
} 
$inina="bxg".$dtx."x".$dty.".ini";
$ininalock="bxg".$dtx."x".$dty.".txt";
 } elseif ($dtx==26) {
//跳转至乌鸡国地图
if ($fjmap!=92) {
include("wjg.php");
} else{
} 
$inina="wjg".$dtx."x".$dty.".ini";
$ininalock="wjg".$dtx."x".$dty.".txt";
 } elseif ($dtx==27) {
//跳转至车迟国地图
if ($fjmap!=92) {
include("ccg.php");
} else{
} 
$inina="ccg".$dtx."x".$dty.".ini";
$ininalock="ccg".$dtx."x".$dty.".txt";
 } elseif ($dtx==28) {
//跳转至女儿国地图
if ($fjmap!=92) {
include("neg.php");
} else{
} 
$inina="neg".$dtx."x".$dty.".ini";
$ininalock="neg".$dtx."x".$dty.".txt";
 } elseif ($dtx==29) {
//跳转至季赛国地图
if ($fjmap!=92) {
include("jsg.php");
} else{
} 
$inina="jsg".$dtx."x".$dty.".ini";
$ininalock="jsg".$dtx."x".$dty.".txt";
 } elseif ($dtx==30) {
//跳转至朱紫国地图
if ($fjmap!=92) {
include("zzg.php");
} else{
} 
$inina="jsg".$dtx."x".$dty.".ini";
$ininalock="jsg".$dtx."x".$dty.".txt";
 } elseif ($dtx==31) {
//跳转至天宫银河地图
if ($fjmap!=92) {
include("yh.php");
} else{
} 
$inina="yh".$dtx."x".$dty.".ini";
$ininalock="yh".$dtx."x".$dty.".txt";
 } elseif ($dtx==32) {
//跳转至天宫蟠桃园地图
if ($fjmap!=92) {
include("pty.php");
} else{
} 
$inina="pty".$dtx."x".$dty.".ini";
$ininalock="pty".$dtx."x".$dty.".txt";
 } elseif ($dtx==33) {
//跳转至天宫斩妖台地图
if ($fjmap!=92) {
include("zyt.php");
} else{
} 
$inina="zyt".$dtx."x".$dty.".ini";
$ininalock="zyt".$dtx."x".$dty.".txt";
 } elseif ($dtx==34) {
//跳转至天宫老君炉一地图
if ($fjmap!=92) {
include("ljl.php");
} else{
} 
$inina="ljl".$dtx."x".$dty.".ini";
$ininalock="ljl".$dtx."x".$dty.".txt";
 } elseif ($dtx==35) {
//跳转至【宝象国】双叉岭地图
if ($fjmap!=92) {
include("scl.php");
} else{
} 
$inina="scl".$dtx."x".$dty.".ini";
$ininalock="scl".$dtx."x".$dty.".txt";
 } elseif ($dtx==36) {
//跳转至【宝象国】黑松林地图
if ($fjmap!=92) {
include("hsl.php");
} else{
} 
$inina="hsl".$dtx."x".$dty.".ini";
$ininalock="hsl".$dtx."x".$dty.".txt";
 } elseif ($dtx==37) {
//跳转至【宝象国】金塔地图//
if ($fjmap!=92) {
include("jt.php");
} else{
} 
$inina="jt".$dtx."x".$dty.".ini";
$ininalock="jt".$dtx."x".$dty.".txt";
 } elseif ($dtx==38) {
//跳转至【宝象国】白骨洞地图
if ($fjmap!=92) {
include("bgd.php");
} else{
} 
$inina="bgd".$dtx."x".$dty.".ini";
$ininalock="bgd".$dtx."x".$dty.".txt";
 } elseif ($dtx==39) {
//跳转至【宝象国】平顶山地图
if ($fjmap!=92) {
include("pds.php");
} else{
} 
$inina="pds".$dtx."x".$dty.".ini";
$ininalock="pds".$dtx."x".$dty.".txt";
 } elseif ($dtx==40) {
//跳转至【乌鸡国】夹脊关地图
if ($fjmap!=92) {
include("jjg.php");
} else{
} 
$inina="jjg".$dtx."x".$dty.".ini";
$ininalock="jjg".$dtx."x".$dty.".txt";
 } elseif ($dtx==41) {
//跳转至【乌鸡国】压龙山地图//
if ($fjmap!=92) {
include("yls.php");
} else{
} 
$inina="yls".$dtx."x".$dty.".ini";
$ininalock="yls".$dtx."x".$dty.".txt";
 } elseif ($dtx==42) {
//跳转至【乌鸡国】桃林地图
if ($fjmap!=92) {
include("tl.php");
} else{
} 
$inina="tl".$dtx."x".$dty.".ini";
$ininalock="tl".$dtx."x".$dty.".txt";
 } elseif ($dtx==43) {
//跳转至冰风谷迷宫地图
if ($fjmap!=92) {
include("bfg.php");
} else{
} 
$inina="bfg".$dtx."x".$dty.".ini";
$ininalock="bfg".$dtx."x".$dty.".txt";
/////////////
 } elseif ($dtx==44) {
//跳转至雪山迷宫地图
if ($fjmap!=92) {
include("xsmg.php");
} else{
} 
$inina="xsmg".$dtx."x".$dty.".ini";
$ininalock="xsmg".$dtx."x".$dty.".txt";
 } elseif ($dtx==45) {
//跳转至变异紫竹林地图
if ($fjmap!=92) {
include("byzzl.php");
} else{
} 
$inina="byzzl".$dtx."x".$dty.".ini";
$ininalock="byzzl".$dtx."x".$dty.".txt";

 } elseif ($dtx==46) {
//跳转至白骨陵墓地图
if ($fjmap!=92) {
include("bglm.php");
} else{
} 
$inina="bglm".$dtx."x".$dty.".ini";
$ininalock="bglm".$dtx."x".$dty.".txt";
 } elseif ($dtx==47) {
//枉死地图
if ($fjmap!=92) {
include("wsc.php");
} else{
} 
$inina="wsc".$dtx."x".$dty.".ini";
$ininalock="wsc".$dtx."x".$dty.".txt";
 } elseif ($dtx==48) {
//瑶池地图
if ($fjmap!=92) {
include("yc.php");
} else{
} 
$inina="yc".$dtx."x".$dty.".ini";
$ininalock="yc".$dtx."x".$dty.".txt";

 } elseif ($dtx==49) {
//冰晶塔地图
if ($fjmap!=92) {
include("bjt.php");
} else{
} 
$inina="bjt".$dtx."x".$dty.".ini";
$ininalock="bjt".$dtx."x".$dty.".txt";

 } elseif ($dtx==50) {
//波月洞地图
if ($fjmap!=92) {
include("byd.php");
} else{
} 
$inina="byd".$dtx."x".$dty.".ini";
$ininalock="byd".$dtx."x".$dty.".txt";
 } elseif ($dtx==51) {
//压龙洞地图
if ($fjmap!=92) {
include("yld.php");
} else{
} 
$inina="yld".$dtx."x".$dty.".ini";
$ininalock="yld".$dtx."x".$dty.".txt";
 } elseif ($dtx==52) {
//莲花洞地图
if ($fjmap!=92) {
include("lhd.php");
} else{
} 
$inina="lhd".$dtx."x".$dty.".ini";
$ininalock="lhd".$dtx."x".$dty.".txt";
 } elseif ($dtx==53) {
//金兜洞地图
if ($fjmap!=92) {
include("jdd.php");
} else{
} 
$inina="jdd".$dtx."x".$dty.".ini";
$ininalock="jdd".$dtx."x".$dty.".txt";
 } elseif ($dtx==54) {
//金兜山地图//
if ($fjmap!=92) {
include("jds.php");
} else{
} 
$inina="jds".$dtx."x".$dty.".ini";
$ininalock="jds".$dtx."x".$dty.".txt";
 } elseif ($dtx==55) {
//翠云山地图
if ($fjmap!=92) {
include("cys.php");
} else{
} 
$inina="cys".$dtx."x".$dty.".ini";
$ininalock="cys".$dtx."x".$dty.".txt";
 } elseif ($dtx==56) {
//小雷音寺地图
if ($fjmap!=92) {
include("xlys.php");
} else{
} 
$inina="xlys".$dtx."x".$dty.".ini";
$ininalock="xlys".$dtx."x".$dty.".txt";

 } elseif ($dtx==57) {
//盘丝洞地图
if ($fjmap!=92) {
include("psd.php");
} else{
} 

$inina="psd".$dtx."x".$dty.".ini";
$ininalock="psd".$dtx."x".$dty.".txt";
 } elseif ($dtx==58) {
//麒麟山地图
if ($fjmap!=92) {
include("qls.php");
} else{
} 
$inina="qls".$dtx."x".$dty.".ini";
$ininalock="qls".$dtx."x".$dty.".txt";
 } elseif ($dtx==59) {
//荆棘岭地图
if ($fjmap!=92) {
include("jjl.php");
} else{
} 
$inina="jjl".$dtx."x".$dty.".ini";
$ininalock="jjl".$dtx."x".$dty.".txt";

 } elseif ($dtx==60) {
//比丘国地图
if ($fjmap!=92) {
include("bqg.php");
} else{
} 
$inina="bqg".$dtx."x".$dty.".ini";
$ininalock="bqg".$dtx."x".$dty.".txt";
 } elseif ($dtx==61) {
//天法国地图
if ($fjmap!=92) {
include("tfg.php");
} else{
} 
$inina="tfg".$dtx."x".$dty.".ini";
$ininalock="tfg".$dtx."x".$dty.".txt";
 } elseif ($dtx==62) {
//fenxian郡地图
if ($fjmap!=92) {
include("fxq.php");
} else{
} 
$inina="fxq".$dtx."x".$dty.".ini";
$ininalock="fxq".$dtx."x".$dty.".txt";
 } elseif ($dtx==63) {
//玉华郡地图
if ($fjmap!=92) {
include("yhq.php");
} else{
} 
$inina="yhq".$dtx."x".$dty.".ini";
$ininalock="yhq".$dtx."x".$dty.".txt";
 } elseif ($dtx==64) {
//金平府地图
if ($fjmap!=92) {
include("jpf.php");
} else{
} 
$inina="jpf".$dtx."x".$dty.".ini";
$ininalock="jpf".$dtx."x".$dty.".txt";
 } elseif ($dtx==65) {
//天竺国地图
if ($fjmap!=92) {
include("tzg.php");
} else{
} 
$inina="tzg".$dtx."x".$dty.".ini";
$ininalock="tzg".$dtx."x".$dty.".txt";


 } elseif ($dtx==66) {
//因果岛地图
if ($fjmap!=92) {
include("ygd.php");
} else{
} 
$inina="ygd".$dtx."x".$dty.".ini";
$ininalock="ygd".$dtx."x".$dty.".txt";



 } elseif ($dtx==67) {
//止戈镇地图
if ($fjmap!=92) {
include("zgz.php");
} else{
} 
$inina="zgz".$dtx."x".$dty.".ini";
$ininalock="zgz".$dtx."x".$dty.".txt";

 } elseif ($dtx==68) {
//小遗迹
if ($fjmap!=92) {
include("xyj.php");
} else{
} 
$inina="xyj".$dtx."x".$dty.".ini";
$ininalock="xyj".$dtx."x".$dty.".txt";
 } elseif ($dtx==69) {
//大遗迹
if ($fjmap!=92) {
include("dyj.php");
} else{
} 
$inina="dyj".$dtx."x".$dty.".ini";
$ininalock="dyj".$dtx."x".$dty.".txt";
 } elseif ($dtx==70) {
//开封广场
if ($fjmap!=92) {
include("kfgc.php");
} else{
} 
$inina="kfgc".$dtx."x".$dty.".ini";
$ininalock="kfgc".$dtx."x".$dty.".txt";

 } elseif ($dtx==71) {
//民宅
if ($fjmap!=92) {
include("mz.php");
} else{
} 
$inina="mz.ini";
$inina="mz".$dtx."x".$dty.".ini";
$ininalock="mz".$dtx."x".$dty.".txt";
 } elseif ($dtx==72) {
//豪宅
if ($fjmap!=92) {
include("hz.php");
} else{
} 
$inina="hz.ini";
$inina="hz".$dtx."x".$dty.".ini";
$ininalock="hz".$dtx."x".$dty.".txt";
 } elseif ($dtx==73) {
	
//官宅
if ($fjmap!=92) {
include("gzai.php");
} else{
} 

$inina="gzai.ini";
$inina="gzai".$dtx."x".$dty.".ini";
$ininalock="gzai".$dtx."x".$dty.".txt";
 } elseif ($dtx==74) {
//攻城战场
if ($fjmap!=92) {
include("gczc.php");
} else{
} 
$inina="gczc".$dtx."x".$dty.".ini";
$ininalock="gczc".$dtx."x".$dty.".txt";
 } elseif ($dtx==75) {
//VIP练级区
if ($fjmap!=92) {
include("vipqy.php");
} else{
} 
$inina="vipqy".$dtx."x".$dty.".ini";
$ininalock="vipqy".$dtx."x".$dty.".txt";
 } elseif ($dtx==76) {
//VIP练级区
if ($fjmap!=92) {
include("emgc.php");
} else{
} 
$inina="emgc".$dtx."x".$dty.".ini";
$ininalock="emgc".$dtx."x".$dty.".txt";
 } elseif ($dtx==77) {
//宠物岛
if ($fjmap!=92) {
include("cwd.php");
} else{
} 
$inina="cwd".$dtx."x".$dty.".ini";
$ininalock="cwd".$dtx."x".$dty.".txt";

 } elseif ($dtx==78) {//通天塔

//宠物岛

include("ttt.php");


 } elseif ($dtx==79) {//十八层地狱

//十八层地狱

include("dy18.php");


 } elseif ($dtx==80) {//芭蕉洞

//芭蕉洞
if ($fjmap!=92) {
include("bjd.php");
} else{
} 
$inina="bjd".$dtx."x".$dty.".ini";
$ininalock="bjd".$dtx."x".$dty.".txt";
 } elseif ($dtx==81) {//通天水府

//通天水府
if ($fjmap!=92) {
include("ttsf.php");
} else{
} 
$inina="ttsf".$dtx."x".$dty.".ini";
$ininalock="ttsf".$dtx."x".$dty.".txt";

 } elseif ($dtx==82) {//盘丝洞
//盘丝洞地图
if ($fjmap!=92) {
include("psdd.php");
} else{
} 

$inina="psdd".$dtx."x".$dty.".ini";
$ininalock="psdd".$dtx."x".$dty.".txt";


 } elseif ($dtx==83) {//狮驼洞
//狮驼洞地图
if ($fjmap!=92) {
include("std.php");
} else{
} 

$inina="std".$dtx."x".$dty.".ini";
$ininalock="std".$dtx."x".$dty.".txt";


 } elseif ($dtx==84) {//无底洞
//无底洞地图
if ($fjmap!=92) {
include("wdd.php");
} else{
} 

$inina="wdd".$dtx."x".$dty.".ini";
$ininalock="wdd".$dtx."x".$dty.".txt";

 } elseif ($dtx==85) {//百花秘境
//百花秘境地图
if ($fjmap!=92) {
include("bhmj.php");
} else{
} 

$inina="bhmj".$dtx."x".$dty.".ini";
$ininalock="bhmj".$dtx."x".$dty.".txt";

 } elseif ($dtx==86) {//【万象阵】地图
//【万象阵】地图
if ($fjmap!=92) {
include("wxz01.php");
} else{
} 
$inina="wxz01".$dtx."x".$dty.".ini";
$ininalock="wxz01".$dtx."x".$dty.".txt";


 } elseif ($dtx==87) {
//【铁矿山】地图
if ($fjmap!=92) {
include("vip1qy.php");
} else{
} 
$inina="vip1qy".$dtx."x".$dty.".ini";
$ininalock="vip1qy".$dtx."x".$dty.".txt";
 } elseif ($dtx==88) {
//【铜矿山】地图
if ($fjmap!=92) {
include("vip2qy.php");
} else{
} 
$inina="vip2qy".$dtx."x".$dty.".ini";
$ininalock="vip2qy".$dtx."x".$dty.".txt";
 } elseif ($dtx==89) {
//【银矿山】地图
if ($fjmap!=92) {
include("vip3qy.php");
} else{
} 
$inina="vip3qy".$dtx."x".$dty.".ini";
$ininalock="vip3qy".$dtx."x".$dty.".txt";
} elseif ($dtx==90) {
//【金矿山】地图
if ($fjmap!=92) {
include("vip4qy.php");
} else{
} 
$inina="vip4qy".$dtx."x".$dty.".ini";
$ininalock="vip4qy".$dtx."x".$dty.".txt";









} else {

  echo "Have a good night!.";
}


?>

