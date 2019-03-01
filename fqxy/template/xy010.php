<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



include("./ini/user_ini.php");
$yymid=($iniFile->getItem('最后页面id','页面id'));



include("./ini/npc_ini.php");
if($yymid==1||$yymid==2||$yymid==3||$yymid==4||$yymid==5||$yymid==6||$yymid==7||$yymid==20||$yymid==313||$yymid==351||$yymid==123){
 $iniFile->updItem('怪物2号属性', ['初始' => '10']);//写入战斗页面

 
 include("./npc/npcxx.php");//攻击模板
 
 include("./ini/npc_ini.php");
 
//第一次战斗将怪物属性写入	
$iniFile->updItem('怪物编号', ['1号' => $npcc]);
$iniFile->updItem('怪物1号属性', ['hp' => $nhp, 'mp' => $nmp,'攻击' => $ngj,'魔攻'=> $nmg,'防御'=> $nfy,'魔防'=> $nmf,'冰攻'=> $nbg,'火攻'=> $nhg,'雷攻'=> $nlg,'冰防'=> $nbf,'火防'=> $nhf,'雷防'=> $nlf]);
echo "<font color=black>$nname:$ntake</font>"."<br>";
//第一次战斗宠物id写入
//查询是否有出战宠物
include("./ini/cw_ini.php");
$cwcz=($iniFile->getCategory('宠物出战状态'));
$m=count($cwcz,0)-1; 
if($m>=1){
$cwczid1=($iniFile->getCategory('宠物id'));	
foreach(array_keys($cwcz) as $key){
$cwcz1[]=$cwcz[$key];
}
foreach(array_keys($cwczid1) as $key){
$cwcz3[]=$cwczid1[$key];
}
$i=-1;
for($x=0;$x<=$m;$x++){	
$i=$i+1;
if($cwcz1[$i]==2){
$cwidd=$cwcz3[$i];
$cwcz2=2;	
break;
} 
} 
} else{
$cwcz2=1;		
} 
//查询是否有出战宠物
include("./ini/npc_ini.php");
$iniFile->updItem('怪物编号', ['初始' => $cwcz2]);//宠物出战状态
$iniFile->updItem('怪物1号属性', ['初始' => $cwidd]);//宠物出战id









} elseif($yymid==10||$yymid==248||$yymid==247||$yymid==14||$yymid==15||$yymid==16||$yymid==17||$yymid==19||$yymid==249||$yymid==348){  
include("./ini/npc_ini.php");
$npcc=($iniFile->getItem('怪物编号','1号'));

$cwcz2=($iniFile->getItem('怪物编号','初始'));//宠物出战状态
$cwidd=($iniFile->getItem('怪物1号属性','初始'));//宠物出战id
include("./npc/npcxx.php");//攻击模板


} else{	
}



$nhp=($iniFile->getItem('怪物1号属性','hp'));

$nmp=($iniFile->getItem('怪物1号属性','mp'));





//获取宠物属性
if($cwcz2==2||$cwcz2==3){
$zbid=$cwidd;
include("./ini/cw_ini.php");
$cww01=($iniFile->getItem('宠物名字',$zbid));
$cww02=($iniFile->getItem('宠物hp',$zbid));
$zbid=$cwidd;
include("./wj/cwztt.php");
$cww03=$cwxx1[血];
} else{
} 





include("./ini/zd_ini.php");
# 获取一个分类下所有数据
$jnnid=($iniFile->getCategory('快捷技能id'));
$jnnfl=($iniFile->getCategory('快捷分类'));
$jnnmz=($iniFile->getCategory('快捷名字'));
//将ini值存入数组方便使用
foreach(array_keys($jnnid) as $key){
$keyjnnid[]=$jnnid[$key];
}
foreach(array_keys($jnnfl) as $key){
$keyjnnfl[]=$jnnfl[$key];
}
foreach(array_keys($jnnmz) as $key){
$keyjnnmz[]=$jnnmz[$key];
}

$jnid1=$keyjnnid[1];
$jnid2=$keyjnnid[2];
$jnid3=$keyjnnid[3];
$jnid4=$keyjnnid[4];
$jnid5=$keyjnnid[5];
$jnid6=$keyjnnid[6];
$jnid7=$keyjnnid[7];
$jnid8=$keyjnnid[8];
$jnid9=$keyjnnid[9];


$jnfl1=$keyjnnfl[1];
$jnfl2=$keyjnnfl[2];
$jnfl3=$keyjnnfl[3];
$jnfl4=$keyjnnfl[4];
$jnfl5=$keyjnnfl[5];
$jnfl6=$keyjnnfl[6];
$jnfl7=$keyjnnfl[7];
$jnfl8=$keyjnnfl[8];
$jnfl9=$keyjnnfl[9];


$jnmz1=$keyjnnmz[1];
$jnmz2=$keyjnnmz[2];
$jnmz3=$keyjnnmz[3];
$jnmz4=$keyjnnmz[4];
$jnmz5=$keyjnnmz[5];
$jnmz6=$keyjnnmz[6];
$jnmz7=$keyjnnmz[7];
$jnmz8=$keyjnnmz[8];
$jnmz9=$keyjnnmz[9];

$jnfl=$jnfl1;
$jnid=$jnid1;
$jnnamex=$jnmz1;
$jn=1;
include("./wj/jnxx.php");

$jnfl=$jnfl2;
$jnid=$jnid2;
$jnnamex=$jnmz2;
$jn=2;
include("./wj/jnxx.php");

$jnfl=$jnfl3;
$jnid=$jnid3;
$jnnamex=$jnmz3;
$jn=3;
include("./wj/jnxx.php");





//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));
include("wj/ztt.php");
//动态祝福加成数据

include("wj/zfzt.php");
//玩家对npc和怪物的战斗摸班id提取	

echo "<font color=black>$nname:</font>"."<br>";


if($cmdd==348&&$mppppd!=1){
	

if($cwcz2==2){
echo "<font color=black>体力:(".$nhp."/".$nmaxhp.")-".$dxsh.",-".$cwdxsh."</font>"."<br>";
} else{	
echo "<font color=black>体力:(".$nhp."/".$nmaxhp.")-".$dxsh."</font>"."<br>";
}


} else{	
echo "<font color=black>体力:(".$nhp."/".$nmaxhp.")</font>"."<br>";
}
echo "<font color=black>内力:(".$nmp."/".$nmaxmp.")</font>"."<br>";

echo "<font color=black>----------</font>"."<br>";
echo "<font color=red>自己:</font>"."<br>";
if($cmdd==348||$cmdd==249&&$mppppd!=1){
echo "<font color=black>体力:(".$wjxx[红]."/".$wjxx1[血].")-".$wjsh."</font>"."<br>";
} else{	
echo "<font color=black>体力:(".$wjxx[红]."/".$wjxx1[血].")</font>"."<br>";
}

echo "<font color=black>内力:(".$wjxx[蓝]."/".$wjxx1[蓝].")</font>"."<br>";



//获取宠物属性
if($cwcz2==2){
$zbid=$cwidd;
include("./ini/cw_ini.php");
echo "<font color=red>宠物:</font>"."<br>";	
echo "<font color=red>".$cww01."</font>"."<br>";	
if($cmdd==348||$cmdd==249&&$mppppd!=1){
echo "<font color=black>体力:(".$cww02."/".$cww03.")-".$cwwjsh."</font>"."<br>";
} else{	
echo "<font color=black>体力:(".$cww02."/".$cww03.")</font>"."<br>";
}
} elseif ($cwcz2==3) {
echo "<font color=red>宠物:</font>"."<br>";	
echo "<font color=red>".$cww01."（已阵亡）</font>"."<br>";	

} else{
} 

echo "<font color=black>----------</font>"."<br>";




$jnfl=$jnfl4;
$jnid=$jnid4;
$jnnamex=$jnmz4;
$jn=4;
include("./wj/jnxx.php");

$jnfl=$jnfl5;
$jnid=$jnid5;
$jnnamex=$jnmz5;
$jn=5;
include("./wj/jnxx.php");

$jnfl=$jnfl6;
$jnid=$jnid6;
$jnnamex=$jnmz6;
$jn=6;
include("./wj/jnxx.php");

$jnfl=$jnfl7;
$jnid=$jnid7;
$jnnamex=$jnmz7;
$jn=7;
include("./wj/jnxx.php");

$jnfl=$jnfl8;
$jnid=$jnid8;
$jnnamex=$jnmz8;
$jn=8;
include("./wj/jnxx.php");

$jnfl=$jnfl9;
$jnid=$jnid9;
$jnnamex=$jnmz9;
$jn=9;
include("./wj/jnxx.php");

echo "<font color=black>===================</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=14;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>快捷键设置</font></a>"."<br>";
echo "<br>";





echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");


} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>