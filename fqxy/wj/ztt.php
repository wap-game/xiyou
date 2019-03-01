<?php


//存入ini缓存文件

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="ztt.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){

} else{




///////////////////////////////////////////////装备加成/////////////////////////////


//调用zbb.ini是否存在
   
include("./ini/zbb_ini.php");

//ini文件名字
$inina="zbb.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
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
//提取装备id
$zbtzid[]=$npcc;

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


///////////////////////////////////////////////获取所有称号加成/////////////////////////////
//调用tx.ini是否存在
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
$txid=($iniFile->getCategory('头衔id'));
$m=count($txid,0)-1; 
$i=0;
foreach(array_keys($txid) as $key){
$keytxid[]=$txid[$key];
}
for($d=0;$d<$m;$d++){
$i=$i+1;
$npcc=$keytxid[$i];
 include("./wp/txxx.php");

$txhp=$max1+$txhp;
$txgj=$max2+$txgj;
$txfy=$max3+$txfy;
$txmg=$max4+$txmg;


}
///////////////////////////////////////////////获取所有称号加成/////////////////////////////

///////////////////////////////////////////////获取所有属性丹药加成/////////////////////////////
//调用dyxx.ini是否存在
include("./ini/dyxx_ini.php");

//ini文件名字
$inina="dyxx.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据
$dyid=($iniFile->getCategory('物品id'));
# 获取一个分类下所有数据
$dysycs=($iniFile->getCategory('物品使用次数'));
//将ini值存入数组方便使用
$m=count($dyid,0)-1; 
$i=0;

foreach(array_keys($dysycs) as $key){
$keydysycs[]=$dysycs[$key];
}
foreach(array_keys($dyid) as $key){
$keydyid[]=$dyid[$key];
}

$dyhp=0;
$dymp=0;
$dygj=0;
$dymg=0;
$dyfy=0;
for($d=0;$d<$m;$d++){
$i=$i+1;
$npcc=$keydyid[$i];

include("./wj/dysx.php");

if($wpzz2=="血"){
$dyhp=$max*$keydysycs[$i]+$dyhp;
} elseif($wpzz2 =="max攻击"){
$dygj=$max*$keydysycs[$i]+$dygj;
} elseif($wpzz2 =="max魔攻"){
$dymg=$max*$keydysycs[$i]+$dymg;
} elseif($wpzz2 =="max防御"){
$dyfy=$max*$keydysycs[$i]+$dyfy;


} else{

}







}

///////////////////////////////////////////////获取所有属性丹药加成/////////////////////////////







///////////////////////////////////////////////住宅属性/////////////////////////////


include("./ini/jj_ini.php");
# 获取一个分类下所有数据
$jjid=($iniFile->getCategory('家具id'));



$m=count($jjid,0)-1; 
$i=0;
$jjhpsx=0;
$jjgjsx=0;
$jjmgsx=0;
$jjfysx=0;
$jjbgsx=0;
$jjhgsx=0;
$jjlgsx=0;
$jjbfsx=0;
$jjhfsx=0;
$jjlfsx=0;

if($m>=1){
foreach(array_keys($jjid) as $key){
$keyjjid[]=$jjid[$key];
}

for($d=0;$d<$m;$d++){
$i=$i+1;	
$jjid=$keyjjid[$i];
$jjidbf=($iniFile->getItem('家具摆放',$jjid));

if($jjidbf==2){
$jjdj=($iniFile->getItem('家具等级',$jjid));
include("./wp/jjsx.php");
$jjhpsx=$jjhpsx+$jjhp;//家具血
$jjgjsx=$jjgjsx+$jjgj;//家具攻击
$jjmgsx=$jjmgsx+$jjmg;//家具魔攻
$jjfysx=$jjgjsx+$jjfy;//家具防御
$jjbgsx=$jjbgsx+$jjbg;
$jjhgsx=$jjhgsx+$jjhg;
$jjlgsx=$jjlgsx+$jjlg;
$jjbfsx=$jjbfsx+$jjbf;
$jjhfsx=$jjhfsx+$jjhf;
$jjlfsx=$jjlfsx+$jjlf;
} else{

}

}




} else{

}





///////////////////////////////////////////////住宅属性/////////////////////////////



///////////////////////////////////////////////星盘属性/////////////////////////////

include("./ini/xp_ini.php");

# 获取一个分类下所有数据
$xpkq=($iniFile->getCategory('星盘开启'));
$xpid=($iniFile->getCategory('星盘id'));
$m=count($xpid,0)-1; 

foreach(array_keys($xpkq) as $key){
$keyxpkq[]=$xpkq[$key];
}
foreach(array_keys($xpid) as $key){
$keyxpid[]=$xpid[$key];
}
$i=0;

for($d=0;$d<$m;$d++){

$i=$i+1;
$xpwpid=$keyxpid[$i];


if($xpwpid>=717&&$xpwpid<=728||$xpwpid>=731&&$xpwpid<=736||$xpwpid>=825&&$xpwpid<=830){   
include("./wj/xpsx.php");
	
$xphpsx=$xphpsx+$xphp;//星盘血
$xpgjsx=$xpgjsx+$xpgj;//星盘攻击
$xpmgsx=$xpmgsx+$xpmg;//星盘魔攻
$xpfysx=$xpfysx+$xpfy;//星盘防御
$xpbgsx=$xpbgsx+$xpbg;
$xphgsx=$xphgsx+$xphg;
$xplgsx=$xplgsx+$xplg;
$xpbfsx=$xpbfsx+$xpbf;
$xphfsx=$xphfsx+$xphf;
$xplfsx=$xplfsx+$xplf;

} else{

}
	
	
	
	

}






///////////////////////////////////////////////星盘属性/////////////////////////////






$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$wjxx=($iniFile->getCategory('玩家信息'));

//初始maxhp，maxmp，攻击，防御，魔攻







	
	/*
	//maxhp
$djhp=($wjxx[等级]+15)*($wjxx[等级]+15)*2;
//maxmp
$djmp=ceil(($wjxx[等级]+30)*($wjxx[等级]+20)/ 4);
//攻击
$djgj=($wjxx[等级]+1)*($wjxx[等级]+2)*3+300;
//防御
$djfy=($wjxx[等级]+1)*($wjxx[等级]+1)*2+200;
//魔攻
$djmg=($wjxx[等级]+1)*($wjxx[等级]+2)*3+300;
	
	*/
if($wjxx[门派]==1){//将军府
//maxhp
$djhp=($wjxx[等级]+15)*($wjxx[等级]+15)*2;
//maxmp
$djmp=ceil(($wjxx[等级]+30)*($wjxx[等级]+20)/ 4);
//攻击
$djgj=($wjxx[等级]+1)*($wjxx[等级]+2)*4+300;
//防御
$djfy=($wjxx[等级]+1)*($wjxx[等级]+1)*2+200;
//魔攻
$djmg=($wjxx[等级]+1)*($wjxx[等级]+2)*3+300;
} elseif($wjxx[门派]==2){//龙宫

//maxhp
$djhp=($wjxx[等级]+15)*($wjxx[等级]+15)*2;
//maxmp
$djmp=ceil(($wjxx[等级]+30)*($wjxx[等级]+20)/ 4);
//攻击
$djgj=($wjxx[等级]+1)*($wjxx[等级]+2)*3+300;
//防御
$djfy=($wjxx[等级]+1)*($wjxx[等级]+1)*3+200;
//魔攻
$djmg=($wjxx[等级]+1)*($wjxx[等级]+2)*3+300;


} elseif($wjxx[门派]==3){//月宫

//maxhp
$djhp=($wjxx[等级]+15)*($wjxx[等级]+15)*4;
//maxmp
$djmp=ceil(($wjxx[等级]+30)*($wjxx[等级]+20)/ 4);
//攻击
$djgj=($wjxx[等级]+1)*($wjxx[等级]+2)*3+300;
//防御
$djfy=($wjxx[等级]+1)*($wjxx[等级]+1)*2+200;
//魔攻
$djmg=($wjxx[等级]+1)*($wjxx[等级]+2)*3+300;


} elseif($wjxx[门派]==4){//方寸山

//maxhp
$djhp=($wjxx[等级]+15)*($wjxx[等级]+15)*2;
//maxmp
$djmp=ceil(($wjxx[等级]+30)*($wjxx[等级]+20)/ 4);
//攻击
$djgj=($wjxx[等级]+1)*($wjxx[等级]+2)*3+300;
//防御
$djfy=($wjxx[等级]+1)*($wjxx[等级]+1)*2+200;
//魔攻
$djmg=($wjxx[等级]+1)*($wjxx[等级]+2)*4+300;


} elseif($wjxx[门派]==5){//普陀山

//maxhp
$djhp=($wjxx[等级]+15)*($wjxx[等级]+15)*3;
//maxmp
$djmp=ceil(($wjxx[等级]+30)*($wjxx[等级]+20)/ 4);
//攻击
$djgj=($wjxx[等级]+1)*($wjxx[等级]+2)*3+300;
//防御
$djfy=($wjxx[等级]+1)*($wjxx[等级]+1)*2+200;
//魔攻
$djmg=($wjxx[等级]+1)*($wjxx[等级]+2)*4+300;



} else{
$wp29="未知错误";
}
	
	
	
	
	include("./ini/xl_ini.php");
	$xldj1=($iniFile->getItem('修炼等级','1'));
	$xldj2=($iniFile->getItem('修炼等级','2'));
	$xldj3=($iniFile->getItem('修炼等级','3'));
	$xldj4=($iniFile->getItem('修炼等级','4'));
	
	//修炼加
$xldjj1=$xldj1;
$xldjj2=$xldj2;
$xldjj3=$xldj3;
$xldjj4=$xldj4;
//调用比例换算
include("./wj/xlxx01.php");
	

	//修炼加

//套装属性加
include("./wj/tzmzzt.php");
//套装属性加
	
	



$csdjhp=$djhp;
$csdjgj=$djgj;
$csdjmg=$djmg;
$csdjfy=$djfy;




//加成后的属性

//maxhp
$maxhp=$djhp+$dyhp+$txhp+$zbhp+$jjhpsx+$xljc01+$tzhpp+$xphpsx;
//maxmp
$maxmp=$djmp+$dymp;

//攻击
$djgj=$djgj+$dygj+$txgj+$zbgj+$jjgjsx+$xljc02+$tzgjp+$xpgjsx;
//魔攻
$djmg=$djmg+$dymg+$txmg+$zbmg+$jjmgsx+$xljc03+$tzmgp+$xpmgsx;
//防御
$djfy=$djfy+$dyfy+$txfy+$zbfy+$jjfysx+$xljc04+$tzfyp+$xpfysx;

/*

echo "调试信息"."</br>";
echo "hp:"."</br>";
echo "基础+".$csdjhp."</br>";
echo "丹药+".$dyhp."</br>";
echo "头衔+".$txhp."</br>";
echo "装备+".$zbhp."</br>";
echo "家具+".$jjhpsx."</br>";
echo "修炼+".$xljc01."</br>";
echo "套装+".$xljc01."</br>";
echo "星盘+".$xphpsx."</br>";
echo "</br>";
echo "攻击:"."</br>";
echo "基础+".$csdjgj."</br>";
echo "丹药+".$dygj."</br>";
echo "头衔+".$txgj."</br>";
echo "装备+".$zbgj."</br>";
echo "家具+".$jjgjsx."</br>";
echo "修炼+".$xljc02."</br>";
echo "套装+".$tzgjp."</br>";
echo "星盘+".$xpgjsx."</br>";
echo "</br>";

echo "魔攻:"."</br>";
echo "基础+".$csdjmg."</br>";
echo "丹药+".$dymg."</br>";
echo "头衔+".$txmg."</br>";
echo "装备+".$zbmg."</br>";
echo "家具+".$jjmgsx."</br>";
echo "修炼+".$xljc03."</br>";
echo "套装+".$tzmgp."</br>";
echo "星盘+".$xpmgsx."</br>";
echo "</br>";

echo "防御:"."</br>";
echo "基础+".$csdjfy."</br>";
echo "丹药+".$dyfy."</br>";
echo "头衔+".$txfy."</br>";
echo "装备+".$zbfy."</br>";
echo "家具+".$jjfysx."</br>";
echo "修炼+".$xljc04."</br>";
echo "套装+".$tzfyp."</br>";
echo "星盘+".$xpfysx."</br>";
echo "</br>";
*/

$gjj = ceil(($djgj)/ 1.3);
$maxgj=$djgj;

$fyy = ceil(($djfy)/ 1.3);
$maxfy=$djfy;

$mgg = ceil(($djmg)/ 1.3);
$maxmg=$djmg;

$bg=$wjxx[等级]+$zbbg+$jjbgsx+$tzbgp+$xpbgsx;
$hg=$wjxx[等级]+$zbhg+$jjhgsx+$tzhgp+$xphgsx;
$lg=$wjxx[等级]+$zblg+$jjlgsx+$tzlgp+$xplgsx;

$bf=$wjxx[等级]+$zbbf+$jjbfsx+$tzbfp+$xpbfsx;
$hf=$wjxx[等级]+$zbhf+$jjhfsx+$tzhfp+$xphfsx;
$lf=$wjxx[等级]+$zblf+$jjlfsx+$tzlfp+$xplfsx;










 
$inina="ztt.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家基础信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('玩家信息',['初始' => 123]);
$iniFile->addCategory('玩家信息', ['血' => $maxhp, '蓝' => $maxmp,'攻击' => $gjj,'max攻击' => $maxgj,'防御' => $fyy,'max防御' => $maxfy,'魔攻' => $mgg,'max魔攻' => $maxmg,'冰攻' => $bg, '火攻' => $hg,'雷攻' => $lg,'冰防' => $bf, '火防' => $hf,'雷防' => $lf]);




}

$inina="ztt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

$wjxx1=($iniFile->getCategory('玩家信息'));









?>


