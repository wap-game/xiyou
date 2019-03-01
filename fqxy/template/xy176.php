<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));


$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){


if($bpid>=1){

if($npcc==1){
$bpzw="成员";
} elseif($npcc==2){  
$bpzw="辅助大臣";
} elseif($npcc==3){  
$bpzw="军机大臣";
} elseif($npcc==4){  
$bpzw="财政大臣";
} elseif($npcc==5){  
$bpzw="工部大臣";
} elseif($npcc==6){  
$bpzw="外交大臣";
} elseif($npcc==7){  
$bpzw="军团长";
} else{
$bpzw="成员";
}
echo "<font color=black>请选择你要将谁任命为【".$bpzw."】</font><br>";







include("./ini/bpp_ini.php");
# 获取一个分类下所有数据
$gjid=($iniFile->getCategory('序列'));
# 获取一个分类下所有数据
$gjmz=($iniFile->getCategory('名字'));
# 获取一个分类下所有数据
$gjmzid=($iniFile->getCategory('名字id'));
# 获取一个分类下所有数据
$gjlsgx=($iniFile->getCategory('历史贡献'));
$m=count($gjid,0)-1; 
$i=0;
$ym=$gjid[初始];
$km=0;
if($m>1){

//调用zt.ini是否存在
   
include("./ini/bp_ini.php");
# 获取一个分类下所有数据$
$bp=($iniFile->getCategory('国家信息'));









//将ini值存入数组方便使用
foreach(array_keys($gjmz) as $key){
$keygjmz[]=$gjmz[$key];
}
//将ini值存入数组方便使用
foreach(array_keys($gjmzid) as $key){
$keygjmzid[]=$gjmzid[$key];
}
//将ini值存入数组方便使用
foreach(array_keys($gjlsgx) as $key){
$keygjlsgx[]=$gjlsgx[$key];
}






//调用ltyeid.ini是否存在
include("./ini/user_ini.php");
$yymid=($iniFile->getItem('最后页面id','页面id'));
if($yymid==177){
	
		//调用yl.ini是否存在
include("./ini/yl_ini.php");
$iniFile->updItem('背包页面', ['页面id' => '176']);
	
	
//调用ltyeid.ini是否存在
include("./ini/ltymid_ini.php");

$ym=1;
$iniFile->updItem('页面id', ['任命国家成员页面' => $ym]);






} else{
	//调用ltyeid.ini是否存在
include("./ini/ltymid_ini.php");

$ym=($iniFile->getItem('页面id','任命国家成员页面'));
}



$mcc=$m/10;

if($mcc>=$ym){


$i=-1;
for($x=0;$x<10;$x++){
$i=$i+1;

$clname=$keygjmz[$ym*10-9+$i];
$xxid=$keygjmzid[$ym*10-9+$i];
$lsgx=$keygjlsgx[$ym*10-9+$i];


$xxh= $ym*10-9+$i;

echo "<font color=black>".$xxh.".</font>";

if($xxid!=$wjid&&$xxid!=""&&$wjid!=""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>";

} else{
echo "<font color=red>".$clname.".</font>";
}



if($bp[辅助大臣id]==$xxid){  
$bpzw1="辅助大臣";
} elseif($bp[军机大臣id]==$xxid){  
$bpzw1="军机大臣";
} elseif($bp[财政大臣id]==$xxid){  
$bpzw1="财政大臣";
} elseif($bp[工部大臣id]==$xxid){  
$bpzw1="工部大臣";
} elseif($bp[外交大臣id]==$xxid){  
$bpzw1="外交大臣";
} elseif($bp[军团长id]==$xxid){  
$bpzw1="军团长";
} elseif($bp[现任君主id]==$xxid){  
$bpzw1="君主";
} else{
$bpzw1="成员";
}




echo "<font color=black>[".$bpzw1."]</font>";


if($bpzw1=="成员"){
echo "|";	
//cmd及超链接值
$xxxid=$xxid."_".$npcc;
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=178;
$npc[]=$xxxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>任命".$bpzw."</font></a>";
} else{

}
echo "</br>";










}
} else{
	if($ym>1){
	
	$mcc=$m%10-1;
	$i=-1;
	for($x=0;$x<=$mcc;$x++){
	$i=$i+1;
$iid= $keygjid[$ym*10-9+$i];
$clname=$keygjmz[$ym*10-9+$i];
$xxid=$keygjmzid[$ym*10-9+$i];
$lsgx=$keygjlsgx[$ym*10-9+$i];


$xxh= $ym*10-9+$i;

echo "<font color=black>".$xxh.".</font>";
if($xxid!=$wjid&&$xxid!=""&&$wjid!=""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>";

} else{
echo "<font color=red>".$clname.".</font>";
}

if($bp[辅助大臣id]==$xxid){  
$bpzw1="辅助大臣";
} elseif($bp[军机大臣id]==$xxid){  
$bpzw1="军机大臣";
} elseif($bp[财政大臣id]==$xxid){  
$bpzw1="财政大臣";
} elseif($bp[工部大臣id]==$xxid){  
$bpzw1="工部大臣";
} elseif($bp[外交大臣id]==$xxid){  
$bpzw1="外交大臣";
} elseif($bp[军团长id]==$xxid){  
$bpzw1="军团长";
} elseif($bp[现任君主id]==$xxid){  
$bpzw1="君主";
} else{
$bpzw1="成员";
}


echo "<font color=black>[".$bpzw1."]</font>";


if($bpzw1=="成员"){
echo "|";	
//cmd及超链接值
$xxxid=$xxid."_".$npcc;
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=178;
$npc[]=$xxxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>任命".$bpzw."</font></a>";
} else{

}
echo "</br>";

	}

} else{

	
	
$i=-1;
for($x=0;$x<=$m-1;$x++){
	$i=$i+1;
$iid= $keygjid[$ym*10-9+$i];
$clname=$keygjmz[$ym*10-9+$i];
$xxid=$keygjmzid[$ym*10-9+$i];
$lsgx=$keygjlsgx[$ym*10-9+$i];


$xxh= $ym*10-9+$i;
	
echo "<font color=black>".$xxh.".</font>";
if($xxid!=$wjid&&$xxid!=""&&$wjid!=""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>";

} else{
echo "<font color=red>".$clname.".</font>";
}

if($bp[辅助大臣id]==$xxid){  
$bpzw1="辅助大臣";
} elseif($bp[军机大臣id]==$xxid){  
$bpzw1="军机大臣";
} elseif($bp[财政大臣id]==$xxid){  
$bpzw1="财政大臣";
} elseif($bp[工部大臣id]==$xxid){  
$bpzw1="工部大臣";
} elseif($bp[外交大臣id]==$xxid){  
$bpzw1="外交大臣";
} elseif($bp[军团长id]==$xxid){  
$bpzw1="军团长";
} elseif($bp[现任君主id]==$xxid){  
$bpzw1="君主";
} else{
$bpzw1="成员";
}

echo "<font color=black>[".$bpzw1."]</font>";

if($bpzw1=="成员"){
echo "|";	
//cmd及超链接值
$xxxid=$xxid."_".$npcc;
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=178;
$npc[]=$xxxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>任命".$bpzw."</font></a>";
} else{

}

echo "</br>";



	
}
}


}










if($ym!=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=40;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>首页</font></a>";
echo  "<font color=blue>|</font></a>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=39;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>上页</font></a>";

$f=1;

}
$mcc=$m/10;
if($f>0&&$mcc>$ym){
echo  "<font color=blue>|</font></a>";
}



$mcc=$m/10;
if($mcc>$ym){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=38;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>下页</font></a>";
echo  "<font color=blue>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=41;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>末页</font></a>";
$f=1;
}

if($f>0){
echo "<br>";
}



} else{
echo "<font color=black>没任何国家成员</font></a>"."<br>";
}






















echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=172;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回国家</font></a>"."<br>";

} else{
echo "<font color=black>你还未加入任何国家！！</font><br>";
}


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
echo "----------------------"."<br>";
//cmd及超链接值
include("fhgame.php");

} else{	
}
//解锁当前使用的ini
include("./ini/jjsini.php");
//解锁当前使用的ini



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini









?>