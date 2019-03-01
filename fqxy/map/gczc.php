<?php

include("./acher/guoz/zlbp.php");
include("./ini/wjxtbl_ini.php");
$dzzx=($iniFile->getItem('国战变量','夺仗'));
if($zlbp==$dzzx){	
 $gjqz=0;
} else{
$iniFile->updItem('国战变量', ['夺仗' => $zlbp]);
$gjqz=1;
} 



//
if($gjqz==1){	
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
echo "<font color=blue>【国家权杖】已被夺走了！！国家所有人员攻守位置进行调整！</font>"."<br>";
echo "</br>";



 //更新缓存数据
$inina="gczc".$dtx."x".$dty.".ini";
$path='acher/map';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
 //更新缓存数据
$inina="gczc".$ydtx."x".$ydty.".ini";
$path='acher/map';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据


if($zlbp==$bpid){
echo "<font color=blue>温馨提示：目前我的国家变更为守城方</font>"."<br>";	
include("./ini/user_ini.php");//修改地图坐标
$dtx=74;
$dty=8;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);

} else{
echo "<font color=black>温馨提示：目前我的国家变更为进攻方</font>"."<br>";	
include("./ini/user_ini.php");//修改地图坐标
$dtx=74;
$dty=27;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('地图坐标', ['x' => $dtx,'y' => $dty]);




} 
	

include("template/xy388.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
exit;
} else{
} 



$weekarray=array("7","1","2","3","4","5","6");
$week=$weekarray[date("w")];
if($week ==1){
$zcwz="傲来国";
} elseif($week ==2){
$zcwz="宝象国";
} elseif($week ==3){
$zcwz="乌鸡国";
} elseif($week ==4){
$zcwz="女儿国";
} elseif($week ==5){
$zcwz="车迟国";
} elseif($week ==6){
$zcwz="无";
$kfsj="休整";
} elseif($week ==7){
$zcwz="祭赛国";
} else{
$zcwz="无";
}
$gzjs=0;
$i= date('i')*1;
$s= date('s')*1;
$yjf=30-$i-1;
$yjm=60-$s-1;
echo "<font color=black>战场位置:【".$zcwz."】</font>"."<br>";
echo "<font color=black>国战计时:</font>";
if($yjf <=0){
if($i <=29){
echo "<font color=black>".$yjm."秒</font>"."<br>";
} else{
$gzjs=1;
echo "<font color=black>0秒</font>"."<br>";
}
} else{
echo "<font color=black>".$yjf."分".$yjm."秒</font>"."<br>";
}



$gzjs=0;
//国战结束
if($gzjs==1){
include("template/xy397.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
exit;
} else{
} 
//国战结束





//没报名的国家出去
//include("./ini/pz01.php");


//没报名的国家出去








if($zlbp==$bpid){
echo "<font color=black>【国家状态】--防守方--</font>"."<br>";
} else{
echo "<font color=black>【国家状态】--进攻方--</font>"."<br>";	
} 
include("./ini/gz06_ini.php");//更新防守时间
$hdtime=($iniFile->getItem('防守时间','初始'));
$fsgj=($iniFile->getItem('防守国家','初始'));
$fsgjid=($iniFile->getItem('防守国家id','初始'));
$vipqytime=300;//秒数30分钟
if ($hdtime!="") {
$startdate=$hdtime;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));
if($minute >= $vipqytime){
	
$vipqy=2;	
} else{
$vipqy=1;	
}
} else{
$vipqy=1;	
}


if($vipqy ==1){	
  echo "<font color=black>【".$fsgj."】防守</font>";
$minute1=$vipqytime-$minute;
$minute=floor($minute1/60);
$second=$minute1%60;
if($minute > 0){		
echo "<font color=black>[".$minute."分".$second."秒]</font>";
} else{
echo "<font color=black>[".$second."秒]</font>";
} 
} else{
	



//增加国战积分
$bpid=$fsgjid;
include("./ini/gz03_ini.php");
$gjjf=($iniFile->getItem('国家积分',$bpid));
$gjjf=$gjjf+10;
$iniFile->updItem('国家积分', [$bpid => $gjjf]);
include("./ini/gz02_ini.php");
$xl=($iniFile->getItem('idd',$bpid));
	if($xl >=1){	
$iniFile->updItem('国家积分', [$xl => $gjjf]);

include("./ini/gz06_ini.php");//更新防守时间
$enddate=date('Y-m-d H:i:s');
$iniFile->updItem('防守时间', ['初始' => $enddate]);	 
$iniFile->updItem('防守国家', ['初始' => $fsgj]);	 
$iniFile->updItem('防守国家id', ['初始' => $bpid]);	



//增加国战积分
$xtxx=$fsgj."防守5分钟成功！！获得国家积分+10，请进攻国抓紧时间拿下权杖";
include("./msg/msgg02.php");
	} 

}
echo "<br>";
if ($dty==0) {



  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>密室(0,0)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=193;
$npc[]=0;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【国家权杖】</font></a>"."<br>";




  //出
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>神兽守卫(1,0)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
echo "<font color=red>小提示：【国战内奸】前来时间（21：05，21：10，21：15，21：20，21：25）（防守方击杀获1国战积分和个人积分）</font>"."<br>"; 

   
   
  //地点描述
  echo "<font color=black>密室(0,0)往哪里走呢？（这里就是放置国家权杖的地方了点击权杖后便可变为防守方）</font>"."<br>"; 
} elseif ($dty==1) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>神兽守卫(1,0)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc


	  
$bossid=3;
include("./ini/boss_ini.php");
$yjdm1=($iniFile->getItem('世界BOSS属性','血'));
$bossid=4;
include("./ini/boss_ini.php");
$yjdm2=($iniFile->getItem('世界BOSS属性','血'));
$bossid=5;
include("./ini/boss_ini.php");
$yjdm3=($iniFile->getItem('世界BOSS属性','血'));
$bossid=6;
include("./ini/boss_ini.php");
$yjdm4=($iniFile->getItem('世界BOSS属性','血'));
include("./ini/gz01_ini.php");
$zlgjid=($iniFile->getItem('国家id','100'));
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));




  if($yjdm1<=0&&$yjdm2<=0&&$yjdm3<=0&&$yjdm4<=0||$zlgjid==$bpid){ 
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【前往密室】</font></a>"."<br>";
} else {
echo "<font color=red>【密室】（封印中：需要击杀防守方四大【神兽守卫】方可开启）</font>"."<br>";
}





$yjdm=$yjdm4;
if($zlgjid==$bpid){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=8;//需要改动
if($yjdm>=0){ 
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】</font></a>"."<br>";
} else {
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】（阵亡）</font></a>"."<br>";
} 
} elseif($yjdm>0){   
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=130;
$npc[]=$bossid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】</font></a>"."<br>";



} else {
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=8;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】（阵亡）</font></a>"."<br>";	
	
}

	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  

  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
  


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>神兽守卫(2,0)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>神兽守卫(1,1)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>神兽守卫(1,0)往哪里走呢？(提示：需要击败四大神兽守卫后密室大门方可从这里通往密室)</font>"."<br>";
  
  
} elseif ($dty==2) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>神兽守卫(1,1)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

$bossid=5;
include("./ini/boss_ini.php");
$yjdm=($iniFile->getItem('世界BOSS属性','血'));
include("./ini/gz01_ini.php");
$zlgjid=($iniFile->getItem('国家id','100'));
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
if($zlgjid==$bpid){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=7;//需要改动
if($yjdm>=0){ 
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】</font></a>"."<br>";
} else {
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】（阵亡）</font></a>"."<br>";
} 
} elseif($yjdm>0){   
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=130;
$npc[]=$bossid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】</font></a>"."<br>";
} else {
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=7;//需要改动
	echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】（阵亡）</font></a>"."<br>";
	
}



  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>神兽守卫(2,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>神兽守卫(1,0)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(1,2)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>神兽守卫(1,1)往哪里走呢？</font>"."<br>";
  
  } elseif ($dty==3) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>无名(1,2)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>中门(2,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>神兽守卫(1,1)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(1,2)往哪里走呢？</font>"."<br>";
  
	
	 } elseif ($dty==4) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>中门(2,2)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




$bossid=2;
include("./ini/boss_ini.php");
$yjdm=($iniFile->getItem('世界BOSS属性','血'));
include("./ini/gz01_ini.php");
$zlgjid=($iniFile->getItem('国家id','100'));
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
if($yjdm<0||$zlgjid==$bpid){
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【进入中门】</font></a>"."<br>";
if($yjdm>=0){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=4;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【城池中门】</font></a>"."<br>";
} else {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=3;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【破损的城池中门】</font></a>"."<br>";	
}
} else {
if($yjdm>=0){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=130;
$npc[]=$bossid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【城池中门】</font></a>"."<br>";
} else {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=3;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【破损的城池中门】</font></a>"."<br>";
}
}




	
	
	





  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
  


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(3,2)</font></a>"."<br>";

  

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(2,3)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>中门(2,2)往哪里走呢？</font>"."<br>";
  
	
		 } elseif ($dty==5) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>神兽守卫(2,1)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
 
 
 
 
$bossid=3;
include("./ini/boss_ini.php");
$yjdm=($iniFile->getItem('世界BOSS属性','血'));
include("./ini/gz01_ini.php");
$zlgjid=($iniFile->getItem('国家id','100'));
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));


if($zlgjid==$bpid){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=5;//需要改动


if($yjdm>=0){ 
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】</font></a>"."<br>";
} else {
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】（阵亡）</font></a>"."<br>";
} 
} elseif($yjdm>0){   
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=130;
$npc[]=$bossid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】</font></a>"."<br>";
} else {
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=5;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】（阵亡）</font></a>"."<br>";
}













  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>神兽守卫(1,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>神兽守卫(2,0)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>中门(2,2)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>神兽守卫(2,1)往哪里走呢？</font>"."<br>";
  
	
			 } elseif ($dty==6) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>神兽守卫(2,0)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

$bossid=4;
include("./ini/boss_ini.php");
$yjdm=($iniFile->getItem('世界BOSS属性','血'));
include("./ini/gz01_ini.php");
$zlgjid=($iniFile->getItem('国家id','100'));
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
if($zlgjid==$bpid){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=6;//需要改动
if($yjdm>=0){ 
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】</font></a>"."<br>";
} else {
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】（阵亡）</font></a>"."<br>";
} 
} elseif($yjdm>0){   
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=130;
$npc[]=$bossid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】</font></a>"."<br>";
} else {
	
		//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=6;//需要改动
	echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【神兽守卫】（阵亡）</font></a>"."<br>";
	
}



  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>神兽守卫(1,0)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>神兽守卫(2,1)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>神兽守卫(2,0)往哪里走呢？</font>"."<br>";
  
	
	
	
				 } elseif ($dty==7) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>无名(2,3)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大门(3,3)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(2,2)</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(2,3)往哪里走呢？</font>"."<br>";
  
	
	
					 } elseif ($dty==8) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>大门(3,3)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
  
  
$bossid=1;
include("./ini/boss_ini.php");
$yjdm=($iniFile->getItem('世界BOSS属性','血'));
include("./ini/gz01_ini.php");
$zlgjid=($iniFile->getItem('国家id','100'));
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
if($yjdm<0||$zlgjid==$bpid){
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【进入大门】</font></a>"."<br>";
if($yjdm>=0){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=2;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【城池大门】</font></a>"."<br>";
} else {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=1;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【破损的城池大门】</font></a>"."<br>";	
}
} else {
if($yjdm>=0){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=130;
$npc[]=$bossid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【城池大门】</font></a>"."<br>";
} else {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=194;
$npc[]=1;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【破损的城池大门】</font></a>"."<br>";
}
}
	

	
	
	




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;



echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(4,3)</font></a>"."<br>";


/*
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(3,2)</font></a>"."<br>";
*/
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;


echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>大门(3,3)往哪里走呢？</font>"."<br>";
  
	
	
						 } elseif ($dty==9) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>无名(3,2)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(2,2)</font></a>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大门(3,3)</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(3,2)往哪里走呢？</font>"."<br>";
  
	
	
	
							 } elseif ($dty==10) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>无名(4,3)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大门(3,3)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(5,3)</font></a>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(4,4)</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(4,3)往哪里走呢？</font>"."<br>";
  
	
								 } elseif ($dty==11) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>无名(4,4)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(5,4)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(4,3)</font></a>"."<br>";
//$cmid=$cmid+1;
//$cdid[]=$cmid;
//$clj[]=6;
//$npc[]=0;
//echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(4,5)</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(4,4)往哪里走呢？</font>"."<br>";
	
									 } elseif ($dty==12) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>无名(4,5)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(3,5)</font></a>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(4,4)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(4,6)</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(4,5)往哪里走呢？</font>"."<br>";
	
	
	
									 } elseif ($dty==13) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>无名(4,6)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(3,6)</font></a>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(4,5)</font></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(4,6)往哪里走呢？</font>"."<br>";
		
	
										 } elseif ($dty==14) {


  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>无名(3,6)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(2,6)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(4,6)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(3,6)</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(3,6)往哪里走呢？</font>"."<br>";
		
	
										 } elseif ($dty==15) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>无名(2,6)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(3,6)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻方墓地(2,5)</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(2,6)往哪里走呢？</font>"."<br>";
			
	
											 } elseif ($dty==16) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>攻方墓地(2,5)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(3,5)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(2,6)</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>攻方墓地(2,5)往哪里走呢？</font>"."<br>";
			
			
			
			
											 } elseif ($dty==17) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>无名(3,5)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻方墓地(2,5)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(4,5)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(3,6)</font></a>"."<br>";



//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(3,5)往哪里走呢？</font>"."<br>";
						
			
			
			
												 } elseif ($dty==18) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>无名(5,4)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(4,4)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>入口通道(6,4)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(5,3)</font></a>"."<br>";




//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(5,4)往哪里走呢？</font>"."<br>";		
			
			
			
			
														 } elseif ($dty==19) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>无名(5,3)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(4,3)</font></a>"."<br>";
//$cmid=$cmid+1;
//$cdid[]=$cmid;
//$clj[]=5;
//$npc[]=0;
//echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(5,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(5,4)</font></a>"."<br>";




//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(5,3)往哪里走呢？</font>"."<br>";			
			
			
															 } elseif ($dty==20) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>无名(5,2)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(6,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(5,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(5,3)</font></a>"."<br>";




//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(5,2)往哪里走呢？</font>"."<br>";			
					
			
																 } elseif ($dty==21) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>无名(5,1)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(6,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>守方墓地(5,0)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(5,2)</font></a>"."<br>";




//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(5,1)往哪里走呢？</font>"."<br>";			
							
			
			
																		 } elseif ($dty==22) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>守方墓地(5,0)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(6,0)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(5,1)</font></a>"."<br>";




//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>守方墓地(5,0)往哪里走呢？</font>"."<br>";			
								
			
																				 } elseif ($dty==23) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动

echo "<font color=black>无名(6,0)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>守方墓地(5,0)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(6,1)</font></a>"."<br>";




//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(6,0)往哪里走呢？</font>"."<br>";	
  
  																				 } elseif ($dty==24) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>无名(6,1)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(5,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(6,0)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(6,2)</font></a>"."<br>";




//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(6,1)往哪里走呢？</font>"."<br>";	
  
  
  
  
  																				 } elseif ($dty==25) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>无名(6,2)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(5,2)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(6,1)</font></a>"."<br>";





//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(6,2)往哪里走呢？</font>"."<br>";	
  
  
  
   																				 } elseif ($dty==26) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动
echo "<font color=black>入口通道(6,4)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




  //出口
  echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(5,4)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无名(6,5)</font></a>"."<br>";





//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>入口通道(6,4)往哪里走呢？</font>"."<br>";	
  
  
     																				 } elseif ($dty==27) {


  //地名
   $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=195;
$npc[]=0;


echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查询国战信息</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;//需要改动


echo "<font color=black>无名(6,5)</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=159;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【离开战场】</font></a>"."<br>";

  //出口
  echo "<font color=black>请选择出口</font>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>入口通道(6,4)</font></a>"."<br>";






//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>无名(6,5)往哪里走呢？</font>"."<br>";	
  
  
  
  
  
  
  
  			
			
	
	
	
      } else {
  echo "错误地图,编号：".$dty."<br>";
}



?>