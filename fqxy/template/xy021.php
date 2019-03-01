<?php





	//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
	//阻塞代码防止出现脏数据
	$ggmz="lt";
$ininalock1=$ggmz."_lock".".txt";
include("./ini/zsggini.php");


if($zsspd==1&&$zsspd1==1){






//调用lt.ini是否存在
   
include("./ini/lt_ini.php");
//调用ltyeid.ini是否存在
include("./ini/ltymid_ini.php");

//ini文件名字
$inina="user.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);
$yymid=($iniFile->getItem('最后页面id','页面id'));

if($yymid==1||$yymid==2||$yymid==3||$yymid==4||$yymid==5||$yymid==6){
	//调用yl.ini是否存在
include("./ini/yl_ini.php");
$inina="yl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包页面', ['页面id' => '21']);

$inina="ltymid.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('页面id','公共页面'));
$ym=1;
$iniFile->updItem('页面id', ['公共页面' => $ym]);


} else{
}










include("./ini/alluser_ini.php");

$jy01=($iniFile->getItem('禁言信息','永久'));
$jy02=($iniFile->getItem('禁言信息','禁言时间'));
$jy03=($iniFile->getItem('禁言信息','解除变量'));




	
	
	
	
	if($jy01!=2){

if($jy03 >= 1){	
$startdate=$jy02;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));	

if($minute <= $jy03){
$jybl=2;
$minute1=$jy03-$minute;


$minute=floor($minute1/60);
$second=$minute1%60;


if($minute > 0){	

$minute10=floor($minute/60);
if($minute10 > 0){	
$minute9=floor($minute10/24);
if($minute9 > 0){
$second=$minute10%24;
echo "<font color=red>由于你在游戏内发布不正当言论已被GM禁言！！</font>"."<br>";	

echo "<font color=red>剩余：".$minute9."天".$second."小时后可正常发言</font>"."<br>";
} else{
$second=$minute%60;
echo "<font color=red>由于你在游戏内发布不正当言论已被GM禁言！！</font>"."<br>";	
echo "<font color=red>剩余：".$minute10."时".$second."分后可正常发言</font>"."<br>";
}
} else{
echo "<font color=red>由于你在游戏内发布不正当言论已被GM禁言！！</font>"."<br>";	
echo "<font color=red>剩余：".$minute."分".$second."秒后可正常发言</font>"."<br>";
} 


} else{
echo "<font color=red>由于你在游戏内发布不正当言论已被GM禁言！！</font>"."<br>";	
echo "<font color=red>剩余：".$second."秒后可正常发言</font>"."<br>";
} 


} else{
$jybl=1;
}
} else{	
$jybl=1;

} 

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
if($_POST['submit']){
	
	
	
if($jybl == 1){	

	
	
	
$wjtake10= $_POST['wjtoke'];
$wjtakes2=iconv_strlen($wjtake10,"UTF-8");
$wjtake = iconv("utf-8","gbk",$wjtake10);  

if($wjtake10!=""){
if($wjtakes2>0&&$wjtakes2<=100||$wjtakes2>0&&$wjtakes2<=100){
if($wjtakes2>0){
$wjtake=$wjtake10;
} else{
}
	
	
	
	
if(preg_match("/[ ';~`@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$wjtake)){ 



$tszf=2;
} else{
$tszf=1;

}

if($tszf==1){
	
	
	

$inina="ltymid.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('页面id','公共页面'));
$ym=1;
$iniFile->updItem('页面id', ['公共页面' => $ym]);

	
	
	
	//写入聊天ini、
	
	
//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
	
	
$inina="zt.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);


# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));

	
	
	
$inina="lt.ini";
$path='acher/lt';
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下所有数据
$ltpx1=($iniFile->getCategory('玩家排序'));
	foreach(array_keys($ltpx1) as $key){
$keyltpx1[]=$ltpx1[$key];
}
	
	
$tmp1="排序";
$arr1=$keyltpx1;
foreach( $arr1 as $k=>$v) {
    if($tmp1 == $v) unset($arr1[$k]);
}

$ltmax1=max($arr1);
if($ltmax1=="排序"){
$ltmax1=0;
	} else{
	} 
$ltmax1=$ltmax1+1;
$zbidd2=$wjid."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 

	
	
	
	
	
	//echo $wjtake;
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	} else{



echo "<font color=red>你输入的内容包含敏感字符请重新输入</font>"."<br>";
}
} else{


echo "<font color=red>长度不能超过50个字符</font><br>";


}


} else{


echo "<font color=red>内容不能为空</font><br>";


}

	
	
	
	
	} else{
}

}

} else{	
echo "<font color=red>由于你在游戏内发布不正当言论已被GM永久禁言！！</font>"."<br>";	


}
	




$inina="ltymid.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ltymid=($iniFile->getItem('页面id','公共页面'));
$inina="lt.ini";
$path='acher/lt';
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下所有数据
$ltpx=($iniFile->getCategory('玩家排序'));
# 获取一个分类下所有数据
$ltwjid=($iniFile->getCategory('玩家id'));
# 获取一个分类下所有数据
$ltwjvip=($iniFile->getCategory('玩家vip'));
# 获取一个分类下所有数据
$ltwjname=($iniFile->getCategory('玩家名字'));
# 获取一个分类下所有数据
$ltwjtake=($iniFile->getCategory('玩家发言'));









foreach(array_keys($ltwjid) as $key){
$keyltwjid[]=$ltwjid[$key];
}
foreach(array_keys($ltpx) as $key){
$keyltpx[]=$ltpx[$key];
}
foreach(array_keys($ltwjvip) as $key){
$keyltwjvip[]=$ltwjvip[$key];
}
foreach(array_keys($ltwjname) as $key){
$keyltwjname[]=$ltwjname[$key];
}
foreach(array_keys($ltwjtake) as $key){
$keyltwjtake[]=$ltwjtake[$key];
}



$tmp="排序";
$arr=$keyltpx;
foreach( $arr as $k=>$v) {
    if($tmp == $v) unset($arr[$k]);
}

$ltmax=max($arr);
$ltmin=0;

//echo $ltymid;
$m=count($ltpx,0)-1; 	
$ltsl1=$m/10;
if($ltsl1 >$ltymid){
if($ltymid >=2){
$ymsl=($ltymid-1)*10-1;
$ltsl=$m%10;
$ltmin1=min($arr);
$ltmin=$ltmin1+$ymsl+$ltsl-10;
$ltmax=$ltmin1+$ymsl+$ltsl;
	
	
} elseif($ltymid ==1){	
if($m >=10){
$ltmin=$ltmax-10;
} else{
$ltsl=$m%10;
$ltmin1=min($arr);
$ltmin=$ltmin1-1;
$ltmax=$ltmin1-1+$ltsl;
	

}

	} else{
		
}
		
} elseif($ltymid>$ltsl1){
$ltsl=$m%10;
$ltmin1=min($arr);
$ltmin=$ltmin1-1;
$ltmax=$ltmin1-1+$ltsl;

		
	} else{
}




echo "<font color=black>聊天频道</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=21;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新信息</font></a>"."<br>";


if($m >=1){


$i=-1;
for($b=0;$b<10;$b++){
$i=$i+1;
if($ltmax ==$ltmin){
break;
}
$pxwjid[]= $keyltwjid[$ltmax];
$pxwjname[]=$keyltwjname[$ltmax];
$pxwjtake[]=$keyltwjtake[$ltmax];
$pxwjvip[]=$keyltwjvip[$ltmax];

echo "<font color=black>[公共]</font></a>";


$img='pic/vip/'."vip".$pxwjvip[$i].'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	
if($wjid==$pxwjid[$i]){

echo "<font color=black>".$pxwjname[$i]."</font>";

} else{

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$pxwjid[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$pxwjname[$i]."</font></a>";

}

echo "<font color=black>：".$pxwjtake[$i]."</font><br>";


$ltmax=$ltmax-1;
}
	} else{	
	echo "<br>";	
	echo "<font color=red>小轩Say：这个世界还很清静！！</font><br>";	
		echo "<br>";	
	echo "<font color=red>没有了爱也没有了烦恼！！</font><br>";	
	echo "<br>";	
		
		
}



?>
<form  action="" method="POST">
<font color=black>请输入你要说的话:</font><br>
<input  type="text" name="wjtoke" placeholder="请输入你要说的话"id='search'><br>
<input  type="submit" name="submit" value="发送"id="search1" ><br>
</form>





<?php

echo "<br>";
echo "<br>";

if($ltymid!=1){
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
if($f>0&&$mcc>$ltymid){
echo  "<font color=blue>|</font></a>";
}



$mcc=$m/10;
if($mcc>$ltymid){

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














echo "<font color=black>-----------</font></a>"."<br>";

echo "<font color=black>公共</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=22;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>组队</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=23;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>国家</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=24;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>私聊</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";




echo "<font color=black>----------------------</font></a>"."<br>";
//cmd及超链接值
include("fhgame.php");

} else{	
}
//解锁当前使用的ini
include("./ini/jsggini.php");
//解锁当前使用的ini


?>