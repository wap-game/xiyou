<?php


//存入ini缓存文件

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="cwztt_".$zbid.".ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){

} else{

$cwidd=$zbid;


///////////////////////////////////////////////装备加成/////////////////////////////


$zbid=$cwidd;
//调用cwzbb.ini是否存在
include("./ini/cwzbb_ini.php");

$zbidx=($iniFile->getCategory('装备idd'));
$zbxj=($iniFile->getCategory('装备星级'));
$zbxq1=($iniFile->getCategory('装备镶嵌1'));
$zbxq2=($iniFile->getCategory('装备镶嵌2'));
$zbxq3=($iniFile->getCategory('装备镶嵌3'));
$zbxq4=($iniFile->getCategory('装备镶嵌4'));
$zbxq5=($iniFile->getCategory('装备镶嵌5'));



foreach(array_keys($zbidx) as $key){
$zbidxx[]=$zbidx[$key];
}
foreach(array_keys($zbxj) as $key){
$zbxjj[]=$zbxj[$key];
}
foreach(array_keys($zbxq1) as $key){
$keyzbxq1[]=$zbxq1[$key];
}
foreach(array_keys($zbxq2) as $key){
$keyzbxq2[]=$zbxq2[$key];
}
foreach(array_keys($zbxq3) as $key){
$keyzbxq3[]=$zbxq3[$key];
}
foreach(array_keys($zbxq4) as $key){
$keyzbxq4[]=$zbxq4[$key];
}
foreach(array_keys($zbxq5) as $key){
$keyzbxq5[]=$zbxq5[$key];
}

$m=count($zbidx,0)-1; 
$i=0;

for($d=0;$d<$m;$d++){
$i=$i+1;


//装备初始值
$zbidx=$zbidxx[$i];
$npcc=$zbidx;
 //调用装备信息
include("./wp/zbxx.php");
$xjxl=0;
$xjgj=0;
$xjmg=0;
$xjfy=0;
$xvjj=$zbxjj[$i];
include("wp/xj.php");



$zbhp=$zbhp+$wp14+$xjxl;
$zbgj=$zbgj+$wp15+$xjgj;
$zbmg=$zbmg+$wp16+$xjmg;
$zbfy=$zbfy+$wp17+$xjfy;
$zbbg=$zbbg+$wp18;
$zblg=$zblg+$wp19;
$zbhg=$zbhg+$wp20;
$zbbf=$zbbf+$wp21;
$zblf=$zblf+$wp22;
$zbhf=$zbhf+$wp23;

//装备镶嵌值
$bsid=$keyzbxq1[$i];
if($bsid>=1){
 //调用宝石信息
include("./wp/zbbs.php");
$zbhp=$zbhp+$bsxl;
$zbgj=$zbgj+$bsgj;
$zbmg=$zbmg+$bsmg;
$zbfy=$zbfy+$bsfy;
} else{

}

$bsid=$keyzbxq2[$i];
if($bsid>=1){
 //调用宝石信息
include("./wp/zbbs.php");
$zbhp=$zbhp+$bsxl;
$zbgj=$zbgj+$bsgj;
$zbmg=$zbmg+$bsmg;
$zbfy=$zbfy+$bsfy;
} else{

}
$bsid=$keyzbxq3[$i];
if($bsid>=1){
 //调用宝石信息
include("./wp/zbbs.php");
$zbhp=$zbhp+$bsxl;
$zbgj=$zbgj+$bsgj;
$zbmg=$zbmg+$bsmg;
$zbfy=$zbfy+$bsfy;
} else{

}
$bsid=$keyzbxq4[$i];
if($bsid>=1){
 //调用宝石信息
include("./wp/zbbs.php");
$zbhp=$zbhp+$bsxl;
$zbgj=$zbgj+$bsgj;
$zbmg=$zbmg+$bsmg;
$zbfy=$zbfy+$bsfy;
} else{

}

$bsid=$keyzbxq5[$i];
if($bsid>=1){
 //调用宝石信息
include("./wp/zbbs.php");
$zbhp=$zbhp+$bsxl;
$zbgj=$zbgj+$bsgj;
$zbmg=$zbmg+$bsmg;
$zbfy=$zbfy+$bsfy;
} else{

}



}
///////////////////////////////////////////////装备加成/////////////////////////////





$zbid=$cwidd;

//调用cw.ini是否存在
include("./ini/cw_ini.php");

$cw03=($iniFile->getItem('宠物星级',$zbid));

$cw04=($iniFile->getItem('宠物品质',$zbid));




$cw06=($iniFile->getItem('宠物maxhp',$zbid));
$cw08=($iniFile->getItem('宠物maxmp',$zbid));
$cw09=($iniFile->getItem('宠物攻击',$zbid));
$cw10=($iniFile->getItem('宠物魔攻',$zbid));
$cw11=($iniFile->getItem('宠物防御',$zbid));
$cw19=($iniFile->getItem('宠物变异',$zbid));
$cw20=($iniFile->getItem('宠物等级',$zbid));
//调用宠物属性加成
include("./wj/cwsx.php");


$arr1 = explode("_",$zbid);
$cwid=$arr1[0];

//获取宠物基础属性
include("./cw/cwxx.php");


//初始maxhp，maxmp，攻击，防御，魔攻

//maxhp
$djhp=ceil((($cw20+15)*($cw20+15)*2+$nmaxhp)*$cw04*$cw03*$cw19);

//maxmp
$djmp=ceil((($cw20+30)*($cw20+20)/ 4+$nmp)*$cw04*$cw03*$cw19);

//攻击
$djgj=ceil((($cw20+1)*($cw20+2)*3+$ngj)*$cw04*$cw03*$cw19+300);
//防御
$djfy=ceil((($cw20+1)*($cw20+1)*2+$nfy)*$cw04*$cw03*$cw19+200);
//魔攻
$djmg=ceil((($cw20+1)*($cw20+2)*3+$nmg)*$cw04*$cw03*$cw19+300);



//加成后的属性

//maxhp
$maxhp=$djhp+$zbhp;
//maxmp
$maxmp=$djmp;

//攻击
$djgj=$djgj+$zbgj;
//魔攻
$djmg=$djmg+$zbmg;
//防御
$djfy=$djfy+$zbfy;







$gjj = ceil(($djgj)/ 1.3);
$maxgj=$djgj;

$fyy = ceil(($djfy)/ 1.3);
$maxfy=$djfy;

$mgg = ceil(($djmg)/ 1.3);
$maxmg=$djmg;

$bg=$nbg+$cw20+$zbbg;
$hg=$nhg+$cw20+$zbhg;
$lg=$nlg+$cw20+$zblg;

$bf=$nbf+$cw20+$zbbf;
$hf=$nhf+$cw20+$zbhf;
$lf=$nlf+$cw20+$zblf;









 
$zbid=$cwidd;
$inina="cwztt_".$zbid.".ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[宠物基础信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('宠物信息',['初始' => 123]);
$iniFile->addCategory('宠物信息', ['血' => $maxhp, '蓝' => $maxmp,'攻击' => $gjj,'max攻击' => $maxgj,'防御' => $fyy,'max防御' => $maxfy,'魔攻' => $mgg,'max魔攻' => $maxmg,'冰攻' => $bg, '火攻' => $hg,'雷攻' => $lg,'冰防' => $bf, '火防' => $hf,'雷防' => $lf]);




}

$zbid=$cwidd;
$inina="cwztt_".$zbid.".ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$cwxx1=($iniFile->getCategory('宠物信息'));









?>


