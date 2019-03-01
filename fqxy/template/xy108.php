<?php
	
//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
$ininalock2=$npcc."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
if($zsspd==1&&$zsspd2==1){

//调用zt.ini是否存在
   
include("./ini/zt_ini.php");

	
$inina="zt.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);


# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));


$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;
//调用zt.ini是否存在
include("./ini/zt_ini.php");
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$wjxx=($iniFile->getCategory('玩家信息'));
$ckname=$wjxx[玩家名字];






	//调用hy.ini是否存在
include("./ini/hy_ini.php");
$inina="hy.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ivdd=($iniFile->getItem('序列',$wjid1));


# 获取一个分类下某个子项的值
$ivdd1=($iniFile->getItem('好友分类',$ivdd));
if($ivdd==""){
$ivdd1=1;
} else{
}




if($_POST['submit']){
	
	
	
	

	
	
	
$wjtake10= $_POST['wjtoke'];
$wjtakes2=iconv_strlen($wjtake10,"UTF-8");
$wjtake = iconv("utf-8","gbk",$wjtake10);  

if($wjtake10!=""){
if($wjtakes2>0&&$wjtakes2<=20||$wjtakes2>0&&$wjtakes2<=20){
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


if($ivdd1==1){



	//写入聊天ini、
	


	
	//调用slt.ini是否存在
   
include("./ini/slt_ini.php");
$inina="slt.ini";
$path='ache/'.$wjid;
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
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 




//写入聊天1ini、
	


	
	//调用sltt.ini是否存在
   
include("./ini/sltt_ini.php");
$inina="sltt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下所有数据
$lttpx1=($iniFile->getCategory('玩家排序'));
	foreach(array_keys($lttpx1) as $key){
$keylttpx1[]=$lttpx1[$key];
}
	
	
$ttmp1="排序";
$arr2=$keylttpx1;
foreach( $arr2 as $k1=>$v1) {
    if($ttmp1 == $v1) unset($arr2[$k1]);
}

$lttmax1=max($arr2);
if($lttmax1=="排序"){
$lttmax1=0;
	} else{
	} 
$$lttmax1=$lttmax1+1;
$zbtidd2=$wjid1."_".$lttmax1;
$iniFile->addItem('玩家排序',[$zbtidd2 => $lttmax1]); 
$iniFile->addItem('玩家id',[$lttmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$lttmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$lttmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$lttmax1 => $wjtake]); 







	echo "<font color=black>你对".$ckname."回复说：".$wjtake."</font><br>";
	
		
		} else{
			
			
echo "<font color=red>对不起！".$ckname."已将你拉黑无法发送消息给对方</font><br>";
			
			
	} 
	
	
	} else{



echo "<font color=red>你输入的内容包含敏感字符请重新输入</font>"."<br>";
}
} else{


echo "<font color=red>长度不能超过20个字符</font><br>";


}


} else{


echo "<font color=red>内容不能为空</font><br>";


}

	
	


}
$wjid=$wjid1;
echo "<font color=black>请输入你想回复".$ckname."的话</font><br>";

?>

<form  action="<?echo "xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1"?>" method="POST">
<input  type="text" name="wjtoke" placeholder="请输入你要说的话"id='search'><br>
<input  type="submit" name="submit" value="回复"id="search1" ><br>
</form>


<?php
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回玩家</font></a>"."<br>";
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
include("./ini/ojsini.php");
?>








