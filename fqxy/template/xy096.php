<?php
//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;

$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
if($zsspd==1&&$zsspd2==1){
//调用zt.ini是否存在

include("./ini/zt_ini.php");


include("wj/ztt.php");



$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$wjxx=($iniFile->getCategory('玩家信息'));

$cklh=$wjxx[靓号];
$img='pic/vip/'."vip".$wjxx[vip等级].'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	
echo "<br>";	



//动态祝福加成数据

include("wj/zfzt.php");



include("./ini/zgvip_ini.php");
$viptime=($iniFile->getItem('尊贵vip','1'));
$nowtime=date('Y-m-d H:i:s');	
if($viptime >$nowtime){
$vipkg=($iniFile->getItem('尊贵vip开关','1'));
if($vipkg==2){
echo "<font color=black>尊享：</font>";
$img='pic/vip/zgvip.gif';
echo '<img src="'.$img.' "alt="图片"/>';
echo "<br>";	
echo "<br>";
} else{	
echo "<font color=black>尊享：无</font>"."<br>";
}
} else{	
echo "<font color=black>尊享：无</font>"."<br>";
}



if($cklh >=1&&$cklh<=9999999){


echo "<font color=black>ID：</font>";
$img='pic/txpic/lh.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	

if($cklh ==1){
echo "<font color=red>【ʚ？？？ɞ】</font><br>";	
} else{	
echo "<font color=red>【".$cklh."】</font><br>";	
}

} else{



echo "<font color=black>ID：".$ckid."</font><br>";
echo "<br>";
}

//调用zt.ini是否存在
   
include("./ini/tx_ini.php");

//ini文件名字
$inina="tx.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据
$wpmzp=($iniFile->getCategory('头衔名字'));
# 获取一个分类下所有数据
$txxsp=($iniFile->getCategory('头衔显示'));
# 获取一个分类下所有数据
$wpidp=($iniFile->getCategory('头衔id'));
$m=count($wpidp,0)-1; 
foreach(array_keys($wpmzp) as $key){
$keywpmzp[]=$wpmzp[$key];
}
foreach(array_keys($txxsp) as $key){
$keytxxsp[]=$txxsp[$key];
}
foreach(array_keys($wpidp) as $key){
$keywpidp[]=$wpidp[$key];
}
$i=0;
$txsl=0;
$xsch=1;
for($d=0;$d<$m;$d++){
$i=$i+1;
$svl=$keytxxsp[$i];
	

if($svl ==2){
$txid=$keywpidp[$i];
$txmzsp=$keywpmzp[$i];
if($txmzs ==""){
$txmzs=$keywpmzp[$i];
}


//调用头衔图片	
include("./wp/txdt.php");






$xsch=2;

}

}
if($xsch ==2){
echo "<br>";




}

$wjid=$wjid1;

if($xsch==2){

echo "<font color=black>头衔：".$txmzs."</font>"."<br>";
} else{

echo "<font color=black>头衔：暂无</font>"."<br>";
}


if($wjxx[恶名值]>=1&&$wjxx[恶名值]<=20){
$em="【坏蛋】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=21&&$wjxx[恶名值]<=40){
$em="【匪徒】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=41&&$wjxx[恶名值]<=60){
$em="【恶人】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=61&&$wjxx[恶名值]<=80){
$em="【恶棍】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=81&&$wjxx[恶名值]<=100){
$em="【恶霸】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=101&&$wjxx[恶名值]<=150){
$em="【凶人】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=151&&$wjxx[恶名值]<=250){
$em="【凶徒】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=251&&$wjxx[恶名值]<=300){
$em="【凶手】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=301&&$wjxx[恶名值]<=350){
$em="【暴徒】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=351&&$wjxx[恶名值]<=400){
$em="【暴君】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=401&&$wjxx[恶名值]<=450){
$em="【嗜血成性】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=451&&$wjxx[恶名值]<=500){
$em="【赶尽杀绝】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=501&&$wjxx[恶名值]<=600){
$em="【杀人如麻】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=601&&$wjxx[恶名值]<=700){
$em="【十恶不赦】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=701&&$wjxx[恶名值]<=800){
$em="【血流成河】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=801&&$wjxx[恶名值]<=900){
$em="【血染山河】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=901&&$wjxx[恶名值]<=1000){
$em="【十方俱灭】"."(".$wjxx[恶名值]."点)";
} elseif ($wjxx[恶名值]>=1001){
$em="【神档杀神~佛档杀佛】"."(".$wjxx[恶名值]."点)";
} else{
	
$em="【与世无争】"."(".$wjxx[恶名值]."点)";	
} 
echo "<font color=red>恶名：".$em."</font><br>";





echo "<font color=black>昵称：</font>".$wjxx[玩家名字]."<br>";



if($wjxx[性别]==1){
echo "<font color=black>性别：男</font><br>";


} elseif ($wjxx[性别]==2){
echo "<font color=black>性别：女</font><br>";
} else{


echo "<font color=black>性别：人妖</font><br>";

}

if($wjxx[配偶id]>=10000000){

echo "<font color=black>配偶：</font>".$wjxx[配偶名字]."<br>";
} else{
	
echo "<font color=black>配偶：暂无</font><br>";	

} 
	


if($wjxx[住宅id]>=1){

if($wjxx[住宅分类]==1){
$zz="住宅";
} elseif ($wjxx[住宅分类]==2){
$zz="豪宅";	
} elseif ($wjxx[住宅分类]==3){
$zz="官宅";
} else{
$zz="住宅";
}

echo "<font color=black>".$zz."：</font>".$wjxx[住宅名字]."<br>";
} else{
	
echo "<font color=black>住宅：暂无</font><br>";	

} 
	
if($wjxx[帮派id]>=1){
echo "<font color=black>国家：</font>".$wjxx[帮派名字]."<br>";

} else{
echo "<font color=black>国家：无</font><br>";

}


if($wjxx[门派]>=1){
if($wjxx[门派]==1){
$menp="将军府";
} elseif($wjxx[门派]==2){
$menp="龙宫";
} elseif($wjxx[门派]==3){
$menp="月宫";
} elseif($wjxx[门派]==4){
$menp="方寸山";
} elseif($wjxx[门派]==5){
$menp="普陀山";
} else{

$menp="无门派";

}
	
echo "<font color=black>门派：</font>".$menp."<br>";

} else{
echo "<font color=black>门派：无门派</font><br>";

}
if($wjxx[等级]>=201){
$wjdj=$wjxx[等级]-200;
$wjdj="仙（".$wjdj."级）";	
} else{
$wjdj=$wjxx[等级]."级";
} 

echo "<font color=black>等级：</font>".$wjdj."<br>";


echo  "<font color=black>HP：</font>".$wjxx[红]."<font color=black>/</font>".$wjxx1[血]."<br>";
echo  "<font color=black>MP：</font>".$wjxx[蓝]."<font color=black>/</font>".$wjxx1[蓝]."<br>";
echo "<font color=black>攻击：</font>".$wjxx1[攻击]."<font color=black>-</font>".$wjxx1[max攻击]."<br/>";
echo "<font color=black>魔攻：</font>".$wjxx1[魔攻]."<font color=black>-</font>".$wjxx1[max魔攻]."<br/>";
echo "<font color=black>防御：</font>".$wjxx1[防御]."<font color=black>-</font>".$wjxx1[max防御]."<br/>";
echo  "<font color=black>攻击元素：冰+</font>".$wjxx1[冰攻]."<font color=black>&nbsp火+</font>".$wjxx1[火攻]."<font color=black>&nbsp雷+</font>".$wjxx1[雷攻]."<br>";
echo  "<font color=black>防御元素：冰+</font>".$wjxx1[冰防]."<font color=black>&nbsp火+</font>".$wjxx1[火防]."<font color=black>&nbsp雷+</font>".$wjxx1[雷防]."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回</font></a><br>";
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
include("./ini/ojsini.php");
//解锁当前使用的ini



?>