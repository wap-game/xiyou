<?php
//初始化
$rw1="";
$rw2="";
$rw3="";
$rw4="";
$rw5="";
$rw6="";
$npcc=146;//npcid
//初始化
include("./ini/zxrw_ini.php");

////////////////////任务属性//////////////
$rwidd=1;//任务的id
$rwfl=1;//任务的分类1主线2支线5日常4活动


//第一个必须加变量转换
$xrwidd=$rwidd;
$xrwfl=$rwfl;
//第一个必须加变量转换

////////////////////任务属性//////////////


$rw1=($iniFile->getCategory('任务id'));
$rw2=($iniFile->getCategory('任务变量'));
$rw3=($iniFile->getCategory('已杀怪'));
$rw4=($iniFile->getCategory('要杀怪'));
$rw5=($iniFile->getCategory('任务分类'));
$rw6=($iniFile->getCategory('任务名字'));


include("./rwmap/rwpdd.php");//调用任务判断




if ($rid==28||$rid==29||$rid==30||$rid==31||$rid==32||$rid==33||$rid==34||$rid==35||$rid==36) {



$strr1=$xrwidd."_".$xrwfl."_5197";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==28||$rid==29||$rid==30) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==31||$rid==32||$rid==33||$rid==34||$rid==35||$rid==36) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts2.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>？</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   

}

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>黑衣客人</font></a>"."<br>";
}

  if ($rid==77) {



$strr1=$xrwidd."_".$xrwfl."_5197";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==77) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==77) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts2.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>？</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   

}

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大麻布口袋</font></a>"."<br>";
}




  if ($rid==113||$rid==114) {



$strr1=$xrwidd."_".$xrwfl."_5196";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==113) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==114) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts2.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>？</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   

}

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>呜呜～呜～</font></a>"."<br>";
}










    if ($rid==78||$rid==79||$rid==83||$rid==84||$rid==85) {



$strr1=$xrwidd."_".$xrwfl."_5197";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==78||$rid==83||$rid==84) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==79||$rid==85) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts2.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>？</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   

}

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>清清</font></a>"."<br>";
}


    if ($rid==79||$rid==80||$rid==81||$rid==82||$rid==83) {




 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc9.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////



$strr1=$xrwidd."_".$xrwfl."_5196";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;
if ($rid==79||$rid==80||$rid==82) {
	
	if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}

   } elseif ($rid==81||$rid==83) {
  ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts2.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>？</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   

}

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>黑衣大汉</font></a>"."<br>";
}

    if ($rid==81) {



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=698;

if ($rid==81) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==81) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts2.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>？</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   

}

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>教训黑衣大汉</font></a>"."<br>";
}

if ($rid==399||$rid==400) {



$strr1=$xrwidd."_".$xrwfl."_5197";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==399) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==400) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts2.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>？</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   

}

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>外面传来…</font></a>"."<br>";
}

///













//查询npc是否有任务

?>







