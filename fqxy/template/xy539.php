<?php
include("seach.php");
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
include("./ini/post_ini.php");
$ckname=($iniFile->getItem('赠送人','初始'));
$ckid=($iniFile->getItem('赠送人ID','初始'));
if($ckid>10000000){
echo "<font color=red>请选择你要赠送给".$ckname."的物品</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=538;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>书卷</font></a>";
echo"<font color=black>|</font></a>";
echo"<font color=black>材料</font></a>";
echo"<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=540;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>装备</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=541;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>商城</font></a>";
echo"<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=542;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>丹药</font></a>";
echo"<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=543;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>任务</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=544;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>农场</font></a>";
echo"<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=545;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宝箱</font></a>";
echo"<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=546;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>其他</font></a>"."<br>";

//保存页面id方便分页使用
if($cmdd==538||$cmdd==539||$cmdd==540||$cmdd==541||$cmdd==542||$cmdd==543||$cmdd==544||$cmdd==545||$cmdd==546){
//调用yl.ini是否存在
include("./ini/yl_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包页面', ['页面id' => $cmdd]);
} else{

}

//显示搜索结果
$inina="seach.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){
$iniFile = new iniFile($file);	
# 获取一个分类下所有数据
$wpid=($iniFile->getCategory('物品id'));
$m=count($wpid,0); 
if($m>=1){


//如果任意一样缓存不存在则不显示搜索记录
$inina="wp.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){
$pdcc1=1;
}else{
$pdcc1=2;
}
$inina="cl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){
$pdcc2=1;
}else{
$pdcc2=2;
}
$inina="sc.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){
$pdcc3=1;
}else{
$pdcc3=2;
}
$inina="dy.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){
$pdcc4=1;
}else{
$pdcc4=2;
}
$inina="rw.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){
$pdcc5=1;
}else{
$pdcc5=2;
}
$inina="nc.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){
$pdcc6=1;
}else{
$pdcc6=2;
}
$inina="bx.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){
$pdcc7=1;
}else{
$pdcc7=2;
}
if($pdcc1==1&&$pdcc2==1&&$pdcc3==1&&$pdcc4==1&&$pdcc5==1&&$pdcc6==1&&$pdcc7==1){

//显示搜索结果

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=549;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【清除搜索记录】</font></a>"."<br>";	
	
	
foreach(array_keys($wpid) as $key){
$keywpid[]=$wpid[$key];
}	
$i=-1;
$km=0;
for($x=0;$x<$m;$x++){
$i=$i+1;	
$npcc=$keywpid[$i];

include("./wp/wpxx.php");
if($wpfl==1){//背包书卷
include("./ini/wp_ini.php");
$wpsl=($iniFile->getItem('书卷数量',$npcc));
$wpmz=($iniFile->getItem('书卷名字',$npcc));

} elseif($wpfl==2){ //背包材料
include("./ini/cl_ini.php");
$wpsl=($iniFile->getItem('材料数量',$npcc));
$wpmz=($iniFile->getItem('材料名字',$npcc));
} elseif($wpfl==4){ //背包商城
include("./ini/sc_ini.php");
$wpsl=($iniFile->getItem('商城数量',$npcc));
$wpmz=($iniFile->getItem('商城名字',$npcc));
} elseif($wpfl==5){ //背包丹药
include("./ini/dy_ini.php");
$wpsl=($iniFile->getItem('丹药数量',$npcc));
$wpmz=($iniFile->getItem('丹药名字',$npcc));
} elseif($wpfl==6){ //背包任务
include("./ini/rw_ini.php");
$wpsl=($iniFile->getItem('任务数量',$npcc));
$wpmz=($iniFile->getItem('任务名字',$npcc));
} elseif($wpfl==7){ //背包农场
include("./ini/nc_ini.php");
$wpsl=($iniFile->getItem('农场数量',$npcc));
$wpmz=($iniFile->getItem('农场名字',$npcc));
} elseif($wpfl==8){ //背包宝箱
include("./ini/bx_ini.php");
$wpsl=($iniFile->getItem('宝箱数量',$npcc));
$wpmz=($iniFile->getItem('宝箱名字',$npcc));
} else{
}

if($wpsl>=1){
$km=$km+1;	
echo "<font color=black>".$km.".</font>";	


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=547;
$npc[]=$npcc;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$wpmz</font></a>"."<font color=blue>x$wpsl|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=548;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>赠送</font></a>"."<br>";


}
}









}else{

}







}else{

}




}else{
include("./ini/cl_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('材料数量', ['初始' => 539]);



# 获取一个分类下所有数据
$wpid=($iniFile->getCategory('材料id'));
# 获取一个分类下所有数据
$wpmz=($iniFile->getCategory('材料名字'));

# 获取一个分类下所有数据
$wpsl=($iniFile->getCategory('材料数量'));

$wpxl=($iniFile->getCategory('序列'));
$cb01=count($wpxl,0); 
$cb02=count($wpid,0); 
$cb03=count($wpmz,0); 
$cb04=count($wpsl,0); 
if($cb01==$cb02&&$cb01==$cb03&&$cb01==$cb04&&$cb02==$cb03&&$cb02==$cb04&&$cb03==$cb04){




$m=count($wpid,0)-1; 
$i=0;

$ym=$wpid[初始];

$km=0;





//将ini值存入数组方便赠送
foreach(array_keys($wpmz) as $key){
$keywpmz[]=$wpmz[$key];
}
foreach(array_keys($wpsl) as $key){
$keywpsl[]=$wpsl[$key];
}
foreach(array_keys($wpid) as $key){
$keywpid[]=$wpid[$key];
}
//将ini值存入数组方便赠送











for($d=0;$d<$m;$d++){
$i=$i+1;

$ivd=$keywpid[$i];
$mvz=$keywpmz[$i];
$svl=$keywpsl[$i];



$mmz[]=$mvz;
$ssl[]=$svl;
$iid[]=$ivd;
$km=$km+1;
$mz[]=$mvz;






}






$i=-2;
$mcc=$km/10;


if($mcc>=$ym){


for($x=0;$x<=9;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];


if($cl>=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=547;
$npc[]=$xxid;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=548;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>赠送</font></a>"."<br>";
}

}


} else{
if($ym>1){
$mcc=$km%10-1;

for($x=0;$x<=$mcc;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];



if($cl>=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=547;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl|</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=548;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>赠送</font></a>"."<br>";
}
}
} else{
$i=-2;
for($x=0;$x<=$km-1;$x++){
$i=$i+1;

$clname= $mz[$ym*10-9+$i];


$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];

if($cl>=1){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=547;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl|</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=548;
$npc[]=$xxid;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>赠送</font></a>"."<br>";
}

}


}





}





$f=0;

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
$mcc=$km/10;
if($f>0&&$mcc>$ym){
echo  "<font color=blue>|</font></a>";
}



$mcc=$km/10;
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
echo "<font color=black>物品错位（联系GM修复）</font>"."<br>";
} 



} 
echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

} else{	
echo "<font color=red>对方ID有误~~请重新赠送</font><br>";

}

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
include("./ini/jsini.php");
//解锁当前使用的ini










?>