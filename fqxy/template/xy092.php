<?php

//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
if($bpid>=1){
$bpmz=($iniFile->getItem('玩家信息','帮派名字'));
$bpzw=($iniFile->getItem('玩家信息','帮派职务'));
} else{

	} 
	
	
	$mapdx=2;
//游戏首页页面模板
include("./map/mapid.php");








//阻塞代码防止出现脏数据

$zspd=0;
$zsspd=0;
   flock($fp, LOCK_NB);
   //路径
$path='acher/map';
$gglockname=$path."/".$ininalock;

for($x=0;$x<=30;$x++){

$fp = fopen($gglockname, "w+");
if(flock($fp,LOCK_EX | LOCK_NB)){
  $zsspd=1;
 //usleep(800);
 
 
   flock($fp, LOCK_NB);

  break;
}else{
	//排队等待
	//延时200毫秒
	usleep(800);
	$zspd=$zspd+1;
	if($zspd>=25){
	$zsspd=2;	
	  break;
	} else{	
	} 

}

}




if($zsspd==1){






//路径
$path='acher/map';

$dir = iconv("UTF-8", "GBK", "$path");
        if (!file_exists($dir)){
            mkdir ($dir,0777,true);
        } else {
        }
	//判断ini文件是否存在	
$ininame = $path."/".$inina;


$filename = $ininame;


if(!file_exists($filename)){
$counter_file=$ininame;//文件名及路径,在当前目录下新建aa.txt文件 
$fopen=fopen($counter_file,   'wb ');//新建文件命令 
fputs($fopen,   '[地图信息]');//向文件中写入内容; 
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

fclose($fopen); 
} else {
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
}


	
	
	
# 获取一个分类下所有数据
$dt01=($iniFile->getCategory('玩家id值'.$dtx.'x'.$dty));
$dt02=($iniFile->getCategory('玩家名字值'.$dtx.'x'.$dty));
$dt03=($iniFile->getCategory('玩家vip值'.$dtx.'x'.$dty));
$dt04=($iniFile->getCategory('国家名字值'.$dtx.'x'.$dty));
$dt05=($iniFile->getCategory('国家职务名字值'.$dtx.'x'.$dty));
$m=count($dt01,0)-1; 
	
	if($m>1){
		
//将ini值存入数组方便使用
foreach(array_keys($dt01) as $key){
$keydt01[]=$dt01[$key];
}
		
//将ini值存入数组方便使用
foreach(array_keys($dt02) as $key){
$keydt02[]=$dt02[$key];
}		
		
	//将ini值存入数组方便使用
foreach(array_keys($dt03) as $key){
$keydt03[]=$dt03[$key];
}	
		
	//将ini值存入数组方便使用
foreach(array_keys($dt04) as $key){
$keydt04[]=$dt04[$key];
}	
		
//将ini值存入数组方便使用
foreach(array_keys($dt05) as $key){
$keydt05[]=$dt05[$key];
}		
	//调用ltyeid.ini是否存在
include("./ini/user_ini.php");
$yymid=($iniFile->getItem('最后页面id','页面id'));
if($yymid==1||$yymid==2||$yymid==3||$yymid==4||$yymid==5||$yymid==6){
	
		//调用yl.ini是否存在
include("./ini/yl_ini.php");
$iniFile->updItem('背包页面', ['页面id' => '92']);
	
	
//调用ltyeid.ini是否存在
include("./ini/ltymid_ini.php");

$ym=1;
$iniFile->updItem('页面id', ['附近玩家页面' => $ym]);






} else{
	//调用ltyeid.ini是否存在
include("./ini/ltymid_ini.php");

$ym=($iniFile->getItem('页面id','附近玩家页面'));
}	

		
		
$mcc=$m/10;

if($mcc>=$ym){


$i=-1;
for($x=0;$x<10;$x++){
$i=$i+1;
$keydtt01=$keydt01[$ym*10-9+$i];
$keydtt02=$keydt02[$ym*10-9+$i];
$keydtt03=$keydt03[$ym*10-9+$i];
$keydtt04=$keydt04[$ym*10-9+$i];
$keydtt05=$keydt05[$ym*10-9+$i];
$xxh= $ym*10-9+$i;
echo "<font color=black>".$xxh.".</font>";	

 	if ($keydtt03!="") {	 
$img='pic/vip/'."vip".$keydtt03.'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	


} else{
}
if($keydtt01!=$wjid&&$keydtt01!=""&&$wjid!=""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$keydtt01;
if ($keydtt04!="") {	
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keydtt02."【".$keydtt04."】（".$keydtt05."）</font></a>";
} else{
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keydtt02."</font></a>";
}
} else{
	if ($keydtt04!="") {	
echo "<font color=red>".$keydtt02."【".$keydtt04."】（".$keydtt05."）</font>";
} else{
echo "<font color=red>".$keydtt02.".</font>";
}
}
echo "</br>";

}

} else{
if($ym>1){
$mcc=$m%10-1;
$i=-1;

for($x=0;$x<=$mcc;$x++){
$i=$i+1;
$keydtt01=$keydt01[$ym*10-9+$i];
$keydtt02=$keydt02[$ym*10-9+$i];
$keydtt03=$keydt03[$ym*10-9+$i];
$keydtt04=$keydt04[$ym*10-9+$i];
$keydtt05=$keydt05[$ym*10-9+$i];
$xxh= $ym*10-9+$i;
echo "<font color=black>".$xxh.".</font>";	

 	if ($keydtt03!="") {	 
$img='pic/vip/'."vip".$keydtt03.'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	


} else{
}
if($keydtt01!=$wjid&&$keydtt01!=""&&$wjid!=""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$keydtt01;
if ($keydtt04!="") {	
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keydtt02."【".$keydtt04."】（".$keydtt05."）</font></a>";
} else{
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keydtt02."</font></a>";
}
} else{
	if ($keydtt04!="") {	
echo "<font color=red>".$keydtt02."【".$keydtt04."】（".$keydtt05."）</font>";
} else{
echo "<font color=red>".$keydtt02.".</font>";
}
}
echo "</br>";

}	
	
	
	} else{
		
	$i=-1;
for($x=0;$x<=$m-1;$x++){	
		

$i=$i+1;
$keydtt01=$keydt01[$ym*10-9+$i];
$keydtt02=$keydt02[$ym*10-9+$i];
$keydtt03=$keydt03[$ym*10-9+$i];
$keydtt04=$keydt04[$ym*10-9+$i];
$keydtt05=$keydt05[$ym*10-9+$i];
$xxh= $ym*10-9+$i;
echo "<font color=black>".$xxh.".</font>";	

 	if ($keydtt03!="") {	 
$img='pic/vip/'."vip".$keydtt03.'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	


} else{
}
if($keydtt01!=$wjid&&$keydtt01!=""&&$wjid!=""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$keydtt01;
if ($keydtt04!="") {	
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keydtt02."【".$keydtt04."】（".$keydtt05."）</font></a>";
} else{
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$keydtt02."</font></a>";
}
} else{
	if ($keydtt04!="") {	
echo "<font color=red>".$keydtt02."【".$keydtt04."】（".$keydtt05."）</font>";
} else{
echo "<font color=red>".$keydtt02.".</font>";
}
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
echo "<font color=black>你周围没有更多的玩家了！！</font></a>"."<br>";
}

	
	
	
	


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");

	
	
	
	
	
	
	
	
	
	




 
 flock($fp,LOCK_UN);
	} else{	





echo "fm";












}
 
 

































?>