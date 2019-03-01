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
echo "<font color=black>国家成员列表</font><br>";
echo "<font color=black>名字/职务/贡献</font><br>";

//调用zt.ini是否存在

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
if($yymid==172){
	
		//调用yl.ini是否存在
include("./ini/yl_ini.php");
$iniFile->updItem('背包页面', ['页面id' => '175']);
	
	
//调用ltyeid.ini是否存在
include("./ini/ltymid_ini.php");

$ym=1;
$iniFile->updItem('页面id', ['国家成员页面' => $ym]);






} else{
	//调用ltyeid.ini是否存在
include("./ini/ltymid_ini.php");

$ym=($iniFile->getItem('页面id','国家成员页面'));
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


//辅助大臣和君主权限
if($bp[辅助大臣id]==$wjid||$wjid==$bp[现任君主id]){

echo "<font color=black>[".$bpzw1."]|".$lsgx."点|</font>";

if($xxid!=$wjid&&$xxid!=""&&$wjid!=""){
if($bpzw1!="成员"){
if($bpzw1=="辅助大臣"){
$gzzid=2;
} elseif($bpzw1=="军机大臣"){  
$gzzid=3;
} elseif($bpzw1=="财政大臣"){  
$gzzid=4;
} elseif($bpzw1=="工部大臣"){  
$gzzid=5;
} elseif($bpzw1=="外交大臣"){  
$gzzid=6;
} elseif($bpzw1=="军团长"){  
$gzzid=7;
} else{
}
if($xxid!=$bp[现任君主id]){

$xxxid=$xxid."_".$gzzid;	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=179;
$npc[]=$xxxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>罢免官职</font></a>";

echo "<font color=black>|</font>";

} else{
}
} else{

}

if($xxid!=$bp[现任君主id]){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=184;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>踢出</font></a>";
} else{

}


} else{

}

echo "</br>";

//工部大臣和军团长辅助大臣和君主权限
} elseif($bp[军机大臣id]==$wjid||$bp[财政大臣id]==$wjid||$bp[工部大臣id]==$wjid||$bp[外交大臣id]==$wjid||$bp[军团长id]==$wjid){   
echo "<font color=black>[".$bpzw1."]|".$lsgx."点|</font>";

if($xxid!=$wjid&&$xxid!=""&&$wjid!=""&&$xxid!=$bp[现任君主id]){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=184;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>踢出</font></a>";
} else{

}
echo "</br>";




//普通成员
} else{
echo "<font color=black>[".$bpzw1."]|".$lsgx."点</font><br>";
}






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


//辅助大臣和君主权限
if($bp[辅助大臣id]==$wjid||$wjid==$bp[现任君主id]){

echo "<font color=black>[".$bpzw1."]|".$lsgx."点|</font>";
if($xxid!=$wjid&&$xxid!=""&&$wjid!=""){
if($bpzw1!="成员"){
	if($bpzw1=="辅助大臣"){
$gzzid=2;
} elseif($bpzw1=="军机大臣"){  
$gzzid=3;
} elseif($bpzw1=="财政大臣"){  
$gzzid=4;
} elseif($bpzw1=="工部大臣"){  
$gzzid=5;
} elseif($bpzw1=="外交大臣"){  
$gzzid=6;
} elseif($bpzw1=="军团长"){  
$gzzid=7;
} else{
}
if($xxid!=$bp[现任君主id]){

$xxxid=$xxid."_".$gzzid;	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=179;
$npc[]=$xxxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>罢免官职</font></a>";

echo "<font color=black>|</font>";

} else{
}
} else{

}
if($xxid!=$bp[现任君主id]){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=184;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>踢出</font></a>";
} else{

}
} else{

}
echo "</br>";

//工部大臣和军团长辅助大臣和君主权限
} elseif($bp[军机大臣id]==$wjid||$bp[财政大臣id]==$wjid||$bp[工部大臣id]==$wjid||$bp[外交大臣id]==$wjid||$bp[军团长id]==$wjid){   
echo "<font color=black>[".$bpzw1."]|".$lsgx."点|</font>";

if($xxid!=$wjid&&$xxid!=""&&$wjid!=""&&$xxid!=$bp[现任君主id]){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=184;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>踢出</font></a>";
} else{

}
echo "</br>";




//普通成员
} else{
echo "<font color=black>[".$bpzw1."]|".$lsgx."点</font><br>";
}



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


//辅助大臣和君主权限
if($bp[辅助大臣id]==$wjid||$wjid==$bp[现任君主id]){

echo "<font color=black>[".$bpzw1."]|".$lsgx."点|</font>";
if($xxid!=$wjid&&$xxid!=""&&$wjid!=""){
if($bpzw1!="成员"){
if($bpzw1=="辅助大臣"){
$gzzid=2;
} elseif($bpzw1=="军机大臣"){  
$gzzid=3;
} elseif($bpzw1=="财政大臣"){  
$gzzid=4;
} elseif($bpzw1=="工部大臣"){  
$gzzid=5;
} elseif($bpzw1=="外交大臣"){  
$gzzid=6;
} elseif($bpzw1=="军团长"){  
$gzzid=7;
} else{
}

if($xxid!=$bp[现任君主id]){

$xxxid=$xxid."_".$gzzid;	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=179;
$npc[]=$xxxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>罢免官职</font></a>";

echo "<font color=black>|</font>";

} else{
}

} else{

}

if($xxid!=$bp[现任君主id]){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=184;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>踢出</font></a>";
} else{

}

} else{

}
echo "</br>";

//工部大臣和军团长辅助大臣和君主权限
} elseif($bp[军机大臣id]==$wjid||$bp[财政大臣id]==$wjid||$bp[工部大臣id]==$wjid||$bp[外交大臣id]==$wjid||$bp[军团长id]==$wjid){   
echo "<font color=black>[".$bpzw1."]|".$lsgx."点|</font>";

if($xxid!=$wjid&&$xxid!=""&&$wjid!=""&&$xxid!=$bp[现任君主id]){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=184;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>踢出</font></a>";
} else{

}
echo "</br>";





//普通成员
} else{
echo "<font color=black>[".$bpzw1."]|".$lsgx."点</font><br>";
}



	
}
}


}










if($ym!=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=40;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>首页</font></a>";
echo  "<font color=blue>|</font></a>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=39;
$npc[]=0;
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
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>下页</font></a>";
echo  "<font color=blue>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=41;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>末页</font></a>";
$f=1;
}

if($f>0){
echo "<br>";
}



} else{
echo "<font color=black>没任何国家成员</font></a>"."<br>";
}




} else{
echo "<font color=black>你还未加入任何国家！！</font><br>";
}











echo "<br>";














echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=172;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回国家</font></a>"."<br>";
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
include("./ini/jjsini.php");
//解锁当前使用的ini



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>