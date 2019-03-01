<?php


//阻塞代码防止出现脏数据
$ininalock="jdjc.txt";
$zspd=0;
$zsspd=0;
   flock($fp, LOCK_NB);
   //路径
$path='acher/hdjc';
$gglockname=$path."/".$ininalock;

for($x=0;$x<=30;$x++){

$fp = fopen($gglockname, "w+");
if(flock($fp,LOCK_EX | LOCK_NB)){
  $zsspd=1;
 //usleep(800);
 
 
  flock($fp,LOCK_EX);

  break;
}else{
	//排队等待
	//延时200毫秒
	usleep(200000);
	$zspd=$zspd+1;//五秒内没获得锁则提示服务器繁忙
	if($zspd>=25){
	$zsspd=2;	
	  break;
	} else{	
	} 

}

}



if($zsspd==1){


echo "<font color=red>娱乐项目-【金豆泡泡】（玩家场）</font>"."<br>";




include("./ini/jdjc_ini.php");
$phbzz2=($iniFile->getCategory('排行榜值2'));
$phbzz4=($iniFile->getCategory('排行榜值4'));
$hm=0;

$ik=0;
$hm=count($phbzz2,0); 

if($hm>1){


foreach(array_keys($phbzz2) as $key){
$keyphbzz2[]=$phbzz2[$key];
}

foreach(array_keys($phbzz4) as $key){
$keyphbzz4[]=$phbzz4[$key];
}

$mt=0;
for($b=0;$b<$hm;$b++){
$xb[]=$keyphbzz2[$mt]*10000+$keyphbzz4[$mt];
$fb[]=$keyphbzz2[$mt]*10000;


$mt=$mt+1;

}

if ($hm>0){
rsort($fb);
rsort($xb);

} else{
} 


$mt=0;
for($b=0;$b<$hm;$b++){

$xbb[]=$xb[$mt]-$fb[$mt];
$mt=$mt+1;
}
$mm=0;
$i=-1;
for($b=0;$b<$hm;$b++){
$i=$i+1;
$xbbb=$xbb[$i];

$phmz[]=($iniFile->getItem('排行榜名字',$xbbb));
$phidd[]=($iniFile->getItem('排行榜值1',$xbbb));
$phsx[]=($iniFile->getItem('排行榜值2',$xbbb));
$vvip[]=($iniFile->getItem('排行榜值3',$xbbb));
$icd[]=($iniFile->getItem('排行榜值4',$xbbb));
$itime[]=($iniFile->getItem('排行榜值6',$xbbb));
}













$i=-1;
for($d=0;$d<$hm-1;$d++){
$i=$i+1;

$ik=$ik+1;


echo "<font color=black>".$ik.".</font>";

$img='pic/vip/'."vip".$vvip[$i].'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	



if ($wjid==$phidd[$i]){

	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$phidd[$i];
echo "<font color=black>".$phmz[$i]."</font></a>";

//数字转汉字
$yl=$phsx[$i];
include("./pz/ylts.php");

echo "<font color=red>&nbsp&nbsp&nbsp[".$ylxx."豆]</font>";
$kkk=$icd[$i]."_".$itime[$i];
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=470;
$npc[]=$kkk;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【撤销】</font></a>";


} else{
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$phidd[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$phmz[$i]."</font></a>";
//数字转汉字
$yl=$phsx[$i];
include("./pz/ylts.php");

echo "<font color=red>&nbsp&nbsp&nbsp[".$ylxx."豆]</font>";


$kkk=$icd[$i]."_".$itime[$i];
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=471;
$npc[]=$kkk;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【真泡】</font></a>";
echo "<font color=black>/</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=472;
$npc[]=$kkk;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【假泡】</font></a>";


} 
	





echo "</br>";
if ($ik>=100){
	break;
	}
	
	
	
	
}

 

 
 
 

 

 } else{	
echo "<font color=black>目前还没有【金豆泡泡】的玩家</font>"."<br>";

}






 echo "</br>";
 //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=403;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回娱乐</font></a>"."<font color=black></font>"."<br>";

 
 




echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 flock($fp,LOCK_UN);
	} else{	

echo "服务器开小差了";





}









?>