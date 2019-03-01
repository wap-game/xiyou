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


if ($rid==26||$rid==27||$rid==31||$rid==32||$rid==33||$rid==34||$rid==35||$rid==27||$rid==36) {


$strr1=$xrwidd."_".$xrwfl."_5196";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==26||$rid==31||$rid==32||$rid==33||$rid==34||$rid==35||$rid==36) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==27||$rid==37) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>醉道士</font></a>"."<br>";
}


if ($rid==22||$rid==23||$rid==24||$rid==25) {


$strr1=$xrwidd."_".$xrwfl."_696";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==22||$rid==23||$rid==24) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==25) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>和黑衣人说话</font></a>"."<br>";
}




if ($rid==400||$rid==401||$rid==416||$rid==417||$rid==418) {

$strr1=$xrwidd."_".$xrwfl."_5196";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==400||$rid==416||$rid==417) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==401||$rid==418) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>客栈古董商</font></a>"."<br>";
}

if ($rid==401||$rid==402||$rid==403||$rid==404) {


$strr1=$xrwidd."_".$xrwfl."_5197";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==401||$rid==403) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==402||$rid==404) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>飞贼</font></a>"."<br>";
}


    if ($rid==402) {


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=706;

if ($rid==402) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==402) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>教训飞贼</font></a>"."<br>";
}



if ($rid==59) {


$strr1=$xrwidd."_".$xrwfl."_5197";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==59) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==60) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>一阵忙碌之后</font></a>"."<br>";
}

if ($rid==60||$rid==61||$rid==62||$rid==63) {

$strr1=$xrwidd."_".$xrwfl."_5197";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==60||$rid==61||$rid==62) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==63) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>黑衣客商</font></a>"."<br>";
}




if ($rid==63) {

$strr1=$xrwidd."_".$xrwfl."_5196";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==63) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==64) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>你突然想起…</font></a>"."<br>";
}


if ($rid==101||$rid==102||$rid==103||$rid==104) {


$strr1=$xrwidd."_".$xrwfl."_5196";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==101||$rid==103) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==102||$rid==104) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>黑衣头领</font></a>"."<br>";
}


    if ($rid==102) {


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=699;

if ($rid==102) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==102) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>教训黑衣头领</font></a>"."<br>";
}

if ($rid==105) {


$strr1=$xrwidd."_".$xrwfl."_5196";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==105) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==106) {
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

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>一动不动的黑衣人</font></a>"."<br>";
}

if ($rid==114||$rid==115||$rid==116||$rid==117||$rid==118||$rid==119||$rid==120||$rid==121||$rid==122||$rid==123) {


$strr1=$xrwidd."_".$xrwfl."_5197";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==114||$rid==115||$rid==116||$rid==121||$rid==122) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==117||$rid==118||$rid==119||$rid==120||$rid==123) {
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











include("./rwmap/cac96_ts.php");//任务提示	


if ($m==1) {
	
$strr1=$xrwidd."_".$xrwfl."_".$npcc;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>店小二</font></a>"."<br>";
} else {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>店小二</font></a>"."<br>";
}








//查询npc是否有任务

?>







