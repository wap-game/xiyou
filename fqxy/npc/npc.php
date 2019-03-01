<?php

if ($npcc==1) {




echo "<font color=red>村长</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击村长</font></a>"."<br>";
echo "<font color=black>村长：哎！老了，不管事了！</font>"."<br>"; 			



include("./rwmap/rwpdd2.php");//调用一个npc同时有两个任务




//
} elseif ($npcc==2) {
echo "<font color=red>大宝</font>"."<br>";

echo "<font color=black>大宝看起来憨厚老实</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击大宝</font></a>"."<br>";
//
} elseif ($npcc==3) {
echo "<font color=red>南极仙翁</font>"."<br>";
echo "<font color=black>一位得道成仙的仙人！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击南极仙翁</font></a>"."<br>";
//
} elseif ($npcc==4) {


echo "<font color=red>渔夫</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击渔夫</font></a>"."<br>";

echo "<font color=black>看起来强壮很结实的渔夫！</font>"."<br>";	
include("./rwmap/rwpdd2.php");//调用一个npc同时有两个任务

//
} elseif ($npcc==5) {
echo "<font color=red>小兰</font>"."<br>";
echo "<font color=black>一位活波可爱的小姑娘！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击小兰</font></a>"."<br>";
//
} elseif ($npcc==6) {
echo "<font color=red>张二妈</font>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击张二妈</font></a>"."<br>";

echo "<font color=black>开着渔村唯一一家店铺！</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=246;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>买东西</font></a>"."<br>";

//


//最小值
//$a4=$dcid+1;
///cmd及超链接值
//$cmi0d=$dcid+1;
//$cdid[]=$cmid;
//$clj[]=20;
//$npc[]=0;
//$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>东海龙宫</font></a>"."<br>";


} elseif ($npcc==7) {
echo "<font color=red>船夫</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击船夫</font></a>"."<br>";
echo "<font color=black>你这是要往哪里去？</font>"."<br>";	


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>南城客栈</font></a>"."<br>";
echo "<br>";
//





} elseif ($npcc==8) {
echo "<font color=red>渔夫海生</font>"."<br>";
echo "<font color=black>经常在外打鱼的渔夫！</font>"."<br>";;
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击渔夫海生</font></a>"."<br>";
//

} elseif ($npcc==11) {
echo "<font color=red>天璇星君</font>"."<br>";
echo "<font color=black>小仙卿,找老夫有何贵干？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击天璇星君</font></a>"."<br>";
//


} elseif ($npcc==20) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc2.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	
$npcname="李白";
$npctake="君不见,黄河之水天上来,小仙卿你要去哪里呢?";
echo "<font color=red>$npcname</font>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";


include("./rwmap/rwpdd2.php");//调用一个npc同时有两个任务

echo "要移动到哪个区域？"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>活动大厅（vip福利领取）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=153;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开封广场（房屋购买-恶魔广场）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=169;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宠物岛（宠物捕捉）</font></a>"."<br>";


//

} elseif ($npcc==21) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////		
$npcname="张果老";
$npctake="唉，我的小毛驴又跑哪里去了？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>龙宫（门派）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>月宫（门派）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>将军府（门派）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>方寸山（门派）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>普陀山（门派）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>东海渔村(新手村)</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>城南荒野（1000两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=13;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大小雁塔（1000两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=14;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>高家庄（1000两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兵马俑阵（1000两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>雪山迷宫（10000两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=17;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>天宫(10000两)</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=18;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>地府(20000两)</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>傲来国（10000两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宝象国（10000两）</font></a>"."<br>";

} elseif ($npcc==22) {
$npcname="今日抢购活动";
$npctake="设计中！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
} elseif ($npcc==23) {
$npcname="财神爷";
$npctake="快来看看我这里的活动吧！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
} elseif ($npcc==24) {

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;

$q2="gzhoures";
$sql1=mysql_query("select * from $q2 where gzid=3",$conn);
$info1=@mysql_fetch_array($sql1);
$gzid=$info1[fzid];
$npcname="【玄武居】";
if ($gzid!="") {


$q2="houres";
mysql_query("set names gb2312");
$sql1=mysql_query("select * from $q2 where fzid=$gzid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjmz=$info1[wjmz];
$wjid=$info1[wjid];

echo "<font color=red>$npcname</font>"."<br>";

if ($wjid==$fqidd) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=156;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入".$npcname."</font></a>"."<br>";
} else{
echo "<font color=black>".$npcname."归玩家".$wjmz."所有,你无法进入</font>"."<br>";
}


} else{
echo "<font color=black>".$npcname."还未出售,可前往开封广场进行购买</font>"."<br>";


}
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



} elseif ($npcc==25) {
$npcname="赏金猎人";
$npctake="我这里有很多赏金任务,完成后我会给你大量奖励~";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

} elseif ($npcc==26) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;

$q2="gzhoures";
$sql1=mysql_query("select * from $q2 where gzid=5",$conn);
$info1=@mysql_fetch_array($sql1);
$gzid=$info1[fzid];
$npcname="【欢欢居】";
if ($gzid!="") {


$q2="houres";
mysql_query("set names gb2312");
$sql1=mysql_query("select * from $q2 where fzid=$gzid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjmz=$info1[wjmz];
$wjid=$info1[wjid];

echo "<font color=red>$npcname</font>"."<br>";

if ($wjid==$fqidd) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=156;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入".$npcname."</font></a>"."<br>";
} else{
echo "<font color=black>".$npcname."归玩家".$wjmz."所有,你无法进入</font>"."<br>";
}


} else{
echo "<font color=black>".$npcname."还未出售,可前往开封广场进行购买</font>"."<br>";


}
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


} elseif ($npcc==27) {
$npcname="【上古超级神兽】";
$npctake="我身上全是宝贝哦看你有没有本事来取了";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
} elseif ($npcc==28) {
$npcname="金甲侍卫";
$npctake="大胆，皇宫圣地禁止擅闯！！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


} elseif ($npcc==29) {
$npcname="冰晶塔守卫";
//$npctake="大胆，皇宫圣地禁止擅闯！！";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//echo "<font color=black>$npctake</font>"."<br>";



echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=115;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>冰晶塔</font></a>"."<br>";

//
} elseif ($npcc==30) {
$npcname="金甲卫士";
$npctake="八宝铜锤 锁子甲 战靴 黑铁盔";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
} elseif ($npcc==31) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;

$q2="gzhoures";
$sql1=mysql_query("select * from $q2 where gzid=2",$conn);
$info1=@mysql_fetch_array($sql1);
$gzid=$info1[fzid];
$npcname="【朱雀居】";
if ($gzid!="") {


$q2="houres";
mysql_query("set names gb2312");
$sql1=mysql_query("select * from $q2 where fzid=$gzid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjmz=$info1[wjmz];
$wjid=$info1[wjid];

echo "<font color=red>$npcname</font>"."<br>";

if ($wjid==$fqidd) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=156;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入".$npcname."</font></a>"."<br>";
} else{
echo "<font color=black>".$npcname."归玩家".$wjmz."所有,你无法进入</font>"."<br>";
}


} else{
echo "<font color=black>".$npcname."还未出售,可前往开封广场进行购买</font>"."<br>";


}
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
} elseif ($npcc==32) {
$npcname="疥顶小僧";
$npctake="施主,小僧有礼了！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

} elseif ($npcc==33) {
$npcname="西域商人";
$npctake="老夫游历天下数十载，还是长安城气势不凡！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
              
			  
} elseif ($npcc==34) {
	
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;

$q2="gzhoures";
$sql1=mysql_query("select * from $q2 where gzid=6",$conn);
$info1=@mysql_fetch_array($sql1);
$gzid=$info1[fzid];
$npcname="【喜喜居】";
if ($gzid!="") {


$q2="houres";
mysql_query("set names gb2312");
$sql1=mysql_query("select * from $q2 where fzid=$gzid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjmz=$info1[wjmz];
$wjid=$info1[wjid];

echo "<font color=red>$npcname</font>"."<br>";

if ($wjid==$fqidd) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=156;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入".$npcname."</font></a>"."<br>";
} else{
echo "<font color=black>".$npcname."归玩家".$wjmz."所有,你无法进入</font>"."<br>";
}


} else{
echo "<font color=black>".$npcname."还未出售,可前往开封广场进行购买</font>"."<br>";


}
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


} elseif ($npcc==35) {
$npcname="通天仙官";
$npctake="我这里可以进行通天仙塔活动哦！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//			  
			  
			  
			} elseif ($npcc==36) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;

$q2="gzhoures";
$sql1=mysql_query("select * from $q2 where gzid=7",$conn);
$info1=@mysql_fetch_array($sql1);
$gzid=$info1[fzid];
$npcname="【梦之居】";
if ($gzid!="") {


$q2="houres";
mysql_query("set names gb2312");
$sql1=mysql_query("select * from $q2 where fzid=$gzid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjmz=$info1[wjmz];
$wjid=$info1[wjid];

echo "<font color=red>$npcname</font>"."<br>";

if ($wjid==$fqidd) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=156;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入".$npcname."</font></a>"."<br>";
} else{
echo "<font color=black>".$npcname."归玩家".$wjmz."所有,你无法进入</font>"."<br>";
}


} else{
echo "<font color=black>".$npcname."还未出售,可前往开封广场进行购买</font>"."<br>";


}
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==37) {
	  
   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc10.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
$npcname="水果贩子";
$npctake="衣着简陋的年轻人，挑着两大筐新鲜水果！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


			  
			  } elseif ($npcc==38) {
   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc11.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////				  
$npcname="守城士兵";
$npctake="别看是个小士兵，也是打过仗的人。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



			  
			} elseif ($npcc==39) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;

$q2="gzhoures";
$sql1=mysql_query("select * from $q2 where gzid=4",$conn);
$info1=@mysql_fetch_array($sql1);
$gzid=$info1[fzid];
$npcname="【白虎居】";
if ($gzid!="") {


$q2="houres";
mysql_query("set names gb2312");
$sql1=mysql_query("select * from $q2 where fzid=$gzid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjmz=$info1[wjmz];
$wjid=$info1[wjid];

echo "<font color=red>$npcname</font>"."<br>";

if ($wjid==$fqidd) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=156;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入".$npcname."</font></a>"."<br>";
} else{
echo "<font color=black>".$npcname."归玩家".$wjmz."所有,你无法进入</font>"."<br>";
}


} else{
echo "<font color=black>".$npcname."还未出售,可前往开封广场进行购买</font>"."<br>";


}
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==40) {
$npcname="幸运大使";
$npctake="人这一生每天的运气都是不一样的，你快来看看你今天的运气怎么样吧！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
			  
  } elseif ($npcc==41) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;

$q2="gzhoures";
$sql1=mysql_query("select * from $q2 where gzid=8",$conn);
$info1=@mysql_fetch_array($sql1);
$gzid=$info1[fzid];
$npcname="【水仙居】";
if ($gzid!="") {


$q2="houres";
mysql_query("set names gb2312");
$sql1=mysql_query("select * from $q2 where fzid=$gzid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjmz=$info1[wjmz];
$wjid=$info1[wjid];

echo "<font color=red>$npcname</font>"."<br>";

if ($wjid==$fqidd) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=156;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入".$npcname."</font></a>"."<br>";
} else{
echo "<font color=black>".$npcname."归玩家".$wjmz."所有,你无法进入</font>"."<br>";
}


} else{
echo "<font color=black>".$npcname."还未出售,可前往开封广场进行购买</font>"."<br>";


}
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

		  
			  
  } elseif ($npcc==42) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;

$q2="gzhoures";
$sql1=mysql_query("select * from $q2 where gzid=9",$conn);
$info1=@mysql_fetch_array($sql1);
$gzid=$info1[fzid];
$npcname="【天然居】";
if ($gzid!="") {


$q2="houres";
mysql_query("set names gb2312");
$sql1=mysql_query("select * from $q2 where fzid=$gzid",$conn);
$info1=@mysql_fetch_array($sql1);
$wjmz=$info1[wjmz];
$wjid=$info1[wjid];

echo "<font color=red>$npcname</font>"."<br>";

if ($wjid==$fqidd) {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=156;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入".$npcname."</font></a>"."<br>";
} else{
echo "<font color=black>".$npcname."归玩家".$wjmz."所有,你无法进入</font>"."<br>";
}


} else{
echo "<font color=black>".$npcname."还未出售,可前往开封广场进行购买</font>"."<br>";


}
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

		  
			  
			  
  } elseif ($npcc==43) {
	  
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc16.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
$npcname="游侠儿";
$npctake="龙纹古剑 白袍 牛皮靴 黑丝帽！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	

		  
		  } elseif ($npcc==44) {
$npcname="【逍遥居】";
$npctake="【逍遥居】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


	  
		  } elseif ($npcc==45) {
$npcname="神算子";
$npctake="修道之人,一心向道,易生执念,执念一出,心魔便起,为祸世人;若想修道有所大成,需勇斩心魔";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	  
			  		  
			  
	  } elseif ($npcc==46) {
$npcname="【神龙居】";
$npctake="【神龙居】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	  


  } elseif ($npcc==47) {
$npcname="【九天居】";
$npctake="【九天居】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==48) {
	  
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc3.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
$npcname="公孙大娘";
$npctake="一个徐娘半老的女人";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=327;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>修改名字(10金豆)</font></a>"."<br>";
*/
/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>转门派</font></a>"."<br>";
*/

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=611;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>做变性手术</font></a>"."<br>";
//
//

  } elseif ($npcc==49) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc3.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="【剧场负责人】";
$npctake="幻想大剧场的负责人，玩家可以在此进入幻想各类剧本场景体验各种剧情获得奖励";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==50) {
$npcname="千金赌场";
$npctake="系统维护中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==51) {
$npcname="大剧场看西游大笑话";
$npctake="大剧场看西游大笑话正在紧张更新中.........";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==52) {
$npcname="打包保命丸";
$npctake="暂时不提供打包服务！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==53) {
$npcname="保命丸升级";
$npctake="〖保命丸〗+〖金豆〗x2+500万两银子升级为〖中保命丸〗！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==54) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc5.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
	  
$npcname="杨中顺";
$npctake="回春卖的药种类是非常齐全的！";
echo "<font color=red>$npcname</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=246;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>买东西</font></a>"."<br>";

//





  } elseif ($npcc==55) {
$npcname="召唤怪物分身";
$npctake="【金兜大王·分身】";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==56) {
$npcname="召唤神仙下凡";
$npctake="召唤需要〖大寻妖镜〗x1或者每天10次机会已经用完！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==57) {
$npcname="斗神台";
$npctake="暂时无法开启此活动！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==58) {
	  
	  
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc4.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
	  
$npcname="袁天罡";
$npctake="袁天罡将手中桃木剑向四方一划，缓缓道：眼下妖孽横行，为祸不小啊！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==59) {
$npcname="【烟雨楼】";
$npctake="【烟雨楼】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

	
  } elseif ($npcc==60) {
$npcname="大学士贺知章";
$npctake="学而时习之,不亦乐乎。有朋自远方来..小仙卿来找我干啥？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	
	  } elseif ($npcc==61) {
$npcname="金豆换〖玄铁令〗";
$npctake="金豆换〖玄铁令〗设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	
	
	  } elseif ($npcc==62) {
	  
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc5.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
$npcname="大宰相.房玄龄";
$npctake="小仙卿仪表不凡，可要好好努力为天下百姓谋福利啊！";
echo "<font color=red>$npcname</font>"."<br>";


echo "<font color=red>攻城属于测试阶段，需要一段时间的测试，无任何问题后方可加入奖励（攻城积分排名，与奖励暂不开启）</font>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=171;
$npc[]=0;  
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>建立国家</font></a>"."<br>";





/*
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=187;
$npc[]=0;  
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻城管理</font></a>"."<br>";

	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=191;
$npc[]=0;  
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>报名参战</font></a>"."<br>";


	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=156;  
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>传送至攻城战场</font></a>"."<br>";

*/


echo "<font color=red>报名参战正在抓紧制作中</font>"."<br>";









echo "<br>";

//
	
	  } elseif ($npcc==63) {
$npcname="【飞仙居】";
$npctake="【飞仙居】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	  } elseif ($npcc==64) {
$npcname="武状元选拔大赛活动";
$npctake="设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==65) {
$npcname="御林军校尉";
$npctake="大胆，皇宫圣地禁御林军校尉止擅闯！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==66) {
$npcname="30金豆兑换〖共工护符〗";
$npctake="确定兑换设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	  } elseif ($npcc==67) {
$npcname="1金豆兑换〖英雄牌〗x5";
$npctake="1金豆兑换〖英雄牌〗x5二次确定！设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
			  
			  
			  
	  } elseif ($npcc==68) {
$npcname="【许愿池】";
$npctake="许愿池下诚心许愿，包你实现各种愿望";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=black>--------------</font>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=92;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【我要财宝无数】</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=93;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【我要经验无数】</font></a>"."<br>";

/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【我要极品装备】</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【我要声望法宝无数】</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【我要强化装备符咒】</font></a>"."<br>";


*/

















echo "<font color=black>--------------</font>"."<br>";
echo "<font color=black>说明:许愿不会失败但有一定几率落空，遇见各种神仙还能获得各种额外大奖,后期添加更多物品！</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


		  
		  } elseif ($npcc==69) {
$npcname="最新活动列表";
$npctake="设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//cho "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	  
			  
			  
	  } elseif ($npcc==70) {
$npcname="金兜山土地神";
$npctake="掌管金兜山的土地爷。";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=123;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>金兜洞</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>激活金兜洞副本</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换〖神秘金兜丹〗</font></a>"."<br>";


//	

	  
			  
			  } elseif ($npcc==71) {
$npcname="李世民";
$npctake="英明神武的大唐皇帝李世民，在其领导下大唐蒸蒸日上，四夷臣服。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//  
			  
			  
	  } elseif ($npcc==72) {
$npcname="【金豆商城】";
$npctake="设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	



  } elseif ($npcc==73) {
$npcname="【君临天下】";
$npctake="【君临天下】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==74) {
$npcname="大唐国师";
$npctake="神机妙算，在开国战争中立下不朽功劳。亲爱的玩家每天在我这可以进行每日国家任务哦！";
echo "<font color=black>$npctake</font>"."<br>";


//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
	
if($bpid>=1){
echo "<font color=red>提示：如果是新的一天显示为0次请直接接取任务，或者收集齐了直接提交不用管提示（注意此项国家任务需要加入国家才能领取）</font>"."<br>";
//调用zt.ini是否存在  
include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','22_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','289'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=289;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>10级-20级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";


include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','23_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','290'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=290;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>20级-40级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");

include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','24_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','291'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=291;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>40级-60级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");


include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','25_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','292'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=292;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>60级-80级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");


include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','26_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','293'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=293;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>80级-100级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");



include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','27_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','294'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=294;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>100级-120级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");

include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','28_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','295'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=295;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>120级-140级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");

} else{
echo "<font color=red>你还未加入任何国家！！（需加入国家后才可领取）</font><br>";
}














  } elseif ($npcc==75) {
	  
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc6.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="孔方兄";


$npctake="前朝的秀才爱书成性才开了这间书馆，喜欢收集各种稀奇古怪的宝贝";
echo "<font color=red>$npcname</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=246;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>买东西</font></a>"."<br>";


//

  } elseif ($npcc==76) {
$npcname="存取物品";
$npctake="设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



	    } elseif ($npcc==77) {
$npcname="钱庄掌柜·铁算盘";
$npctake="你这是要存钱还是取钱？";
echo "<font color=red>$npcname</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=257;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>存取银两</font></a>"."<br>";


			  
			  

  } elseif ($npcc==78) {
	  
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc38.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
	  
$npcname="大管家李丁";
$npctake="身穿兵服 牛皮靴 黑丝帽";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==79) {
$npcname="殷夫人";
$npctake="镖头萧升的夫人";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==80) {
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc42.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
	  
$npcname="官府告示";
$npctake="官府的告示锁放置地方！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//







  } elseif ($npcc==81) {
	  
	  ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc43.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  ////////////////////////// 
	  
$npcname="衙役";
$npctake="衙役身穿杀威大棒 衙役服 牛皮靴 硬木盔！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==82) {
$npcname="牢头";
$npctake="看管犯人的牢头，听说很贪财！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
include("./ini/zt_ini.php");
$pkzzz=($iniFile->getItem('玩家信息','恶名值'));
if ($pkzzz>=1) {
echo "<font color=red>想出去么？？还是先为你犯下的滔天大罪赎罪吧（恶名值小于0开启传送）</font><br>";
echo "<font color=red>〖免罪金牌〗（洗脱恶名，我想做个好人）=1000金豆</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=148;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【购买】</font></a>"."<br>";
echo "<font color=red>【善果】=10金豆</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=149;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【购买】</font></a>"."<br>";
echo "<font color=red>【善果】x10=100金豆</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=150;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【购买】</font></a>"."<br>";



echo "<font color=blue>====================</font>"."<br>";

echo "<font color=red>〖免罪金牌〗=洗脱所有恶名</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=153;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【赎罪】</font></a>"."<br>";
echo "<font color=red>【善果】x1=洗脱恶名-1</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=151;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【赎罪】</font></a>"."<br>";

echo "<font color=red>【善果】x10=洗脱恶名-10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=152;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=red>【赎罪】</font></a>"."<br>";








} else{
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=141;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";

}





  } elseif ($npcc==83) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc8.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
	  
$npcname="店小二";
$npctake="在喜福会上忙忙碌碌的小二";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==84) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc40.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
	  
$npcname="老板娘";
$npctake="在喜福会的老板娘";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==85) {
$npcname="还愿!（开PK）";
$npctake="在我寺还愿可了却心念，坦然面对世间祸福劫难！施主可要考虑清楚了！（开启PK，现实时间1天内无法关闭）";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==86) {
$npcname="上香!（关PK）";
$npctake="在我寺还愿可了却心念，坦然面对世间祸福劫难！施主可要考虑清楚了！（开启PK，现实时间1天内无法关闭）";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==87) {
$npcname="大和尚";
$npctake="身穿僧袍 长筒靴 牛皮帽";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==88) {
$npcname="游方僧人";
$npctake="身穿浑铁杖 僧袍 长筒靴 牛皮帽<";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==89) {
$npcname="法明长老";
$npctake="身穿龙头杖 护法袈裟 行僧靴";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==90) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc31.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="卖糖人";
$npctake="香喷喷的糖人，快来买呀！";
echo "<font color=red>$npcname</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=246;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>买东西</font></a>"."<br>";

//

  } elseif ($npcc==91) {
	  
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc32.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="小男孩";
$npctake="在小巷子玩耍的小孩";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==92) {
	  
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc33.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
$npcname="小女孩";
$npctake="在小巷子玩耍的小孩";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==93) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc34.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
	  
$npcname="江湖艺人";
$npctake="一个打把式卖艺的中年人，正在场中练功夫。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==94) {
	  
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc35.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="香客";
$npctake="唉～求了个下下签～这可如何是好啊？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==95) {
	  
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc4.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="进香客";
$npctake="在这里上香的香客";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==96) {
	  
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc35.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
$npcname="许愿女";
$npctake="我还有好多愿望没实现了";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==97) {
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc10.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
	  
$npcname="庙祝";
$npctake="一个老弱的庙祝，一阵风似乎都可以把他吹倒。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==98) {
	  
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc36.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
$npcname="袁守诚";
$npctake="他就是当朝钦天监台正先生袁天罡的叔父，给人算命，十分厉害。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==99) {
	  
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc37.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
$npcname="白衣秀士";
$npctake="一位风流书生，不过他看起来好像有满腹心事。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=black>白衣秀士：我告诉你，这袁守诚根本就是个江湖骗子！</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==100) {
$npcname="古董老板";
$npctake="这位客官你需要什么？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==101) {
	  
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc38.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
$npcname="贾二";
$npctake="热乎乎的包子叻！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==102) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc39.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
	  
$npcname="大鼓";
$npctake="大鼓里似乎藏有什么玄机，不知道开启方法的人永远不知道其中的奥秘！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==103) {
	  

 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc28.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
	  
$npcname="小流氓";
$npctake="背阴巷的小流氓";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==104) {
	 
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc29.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
 
	  
$npcname="穷汉";
$npctake="一个近六旬的穷汉";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==105) {
	  
		   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc27.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////   
	  
$npcname="黑狗";
$npctake="穷凶极恶的黑狗";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==106) {
		   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc26.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////   
	  
$npcname="瘦老头";
$npctake="小子找老夫有何贵干？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==107) {
	  
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc25.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  ////////////////////////// 
    
	  
	  
$npcname="花母鸡";
$npctake="咕~~咕~咕~";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==108) {
$npcname="大公鸡";
$npctake="咕~~咕~咕~";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==109) {
$npcname="中年妇女";
$npctake="一位年长的妇女";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==110) {
$npcname="丰永贵";
$npctake="牛皮靴 硬木盔";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
		  
		  
		  
		  
		  
		  } elseif ($npcc==111) {
$npcname="打手";
$npctake="哪里来的野小子?快滚,否则对的不客气了!";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//  
		  
		  
		    } elseif ($npcc==112) {
$npcname="二堂主";
$npctake="长安三花堂的二堂主";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
		  
		  
	  } elseif ($npcc==113) {
		  

 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc6.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
		  
$npcname="老板魏录齐";
$npctake="老板魏录齐：你需要点什么呢?";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	  
		  
		  
	  } elseif ($npcc==114) {
		  
		  
		  
	
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc8.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
	  
		  
		  
		  
$npcname="王小二";
$npctake="客官有什么需要吗?";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

	    } elseif ($npcc==115) {

 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc30.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
			
			
$npcname="苦力";
$npctake="一天没日没夜的干着活";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
		  
		  } elseif ($npcc==116) {
$npcname="李玉娘";
$npctake="貌美如花的李玉娘";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//  
		  
		  
		  
		    } elseif ($npcc==117) {
$npcname="姑娘";
$npctake="常年跟随着李玉娘的小姑娘";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
		  
	  } elseif ($npcc==118) {
$npcname="戴文重";
$npctake="这里可以进行拍卖或购买的地方";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	  
		  
		  
		    } elseif ($npcc==119) {
				
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc13.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////			
$npcname="老板娘萧晓";
$npctake="客官我这里的兵器可是长安最好的";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
		  
		  
  } elseif ($npcc==120) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc17.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
	  
$npcname="雾渊道长";
$npctake="清虚观的主持，看起来仙风道骨。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	
	
	
	
	  } elseif ($npcc==121) {
$npcname="秦平";
$npctake="他是秦府的管家。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	  } elseif ($npcc==122) {
$npcname="秦琼";
$npctake="秦琼是九门提督。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	  } elseif ($npcc==123) {
$npcname="白发老人";
$npctake="小仙卿～根骨奇佳～当真是块练武的好材料！（打造初级师门武器及60级初级白虎套装）";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>请选择你需要打造的装备</font>"."<br>";

echo "<font color=black>【应龙戟】（40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【白虎枪】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";




echo "<font color=black>【白虎盔甲】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

echo "<font color=black>【白虎头盔】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";



echo "<font color=black>【白虎战靴】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【白虎项链】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【白虎手镯】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";











//
	
	
	  } elseif ($npcc==124) {
$npcname="罗成(拜师)";
$npctake="罗成是开国元勋之一。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	
	  } elseif ($npcc==125) {
$npcname="程咬金";
$npctake="程咬金是国老。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	  
		  
	  } elseif ($npcc==126) {
$npcname="尉迟恭";
$npctake="尉迟恭是兵马大都督。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	
	
	  } elseif ($npcc==127) {
   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc19.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////		  
		  
$npcname="枣红马";
$npctake="枣红马";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	
	
	  } elseif ($npcc==128) {
   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc20.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////		  
		  
$npcname="乌青马";
$npctake="乌青马";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	
	  } elseif ($npcc==129) {
		  
   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc21.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////		  
		  
$npcname="伊犁马";
$npctake="伊犁马";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	
	
	
	
	  } elseif ($npcc==130) {
$npcname="汗血宝马";
$npctake="汗血宝马";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	  } elseif ($npcc==131) {
		  
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc18.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
$npcname="马官";
$npctake="马场的马官";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	  } elseif ($npcc==132) {
$npcname="背水客";
$npctake="一个在曲江池里背水贩卖为生的人。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	  } elseif ($npcc==133) {
$npcname="僧人";
$npctake="慈恩寺里的和尚。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	  } elseif ($npcc==134) {
$npcname="慈恩法师(门派转换)";
$npctake="慈恩寺里的住持";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	  } elseif ($npcc==135) {
$npcname="洗衣少女";
$npctake="一个在曲江池里洗衣服的少女。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	
	  } elseif ($npcc==136) {
$npcname="赏花公子";
$npctake="实际上是来曲江池赏美女的";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	
	
	  } elseif ($npcc==137) {
		  
		  
		  

 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc24.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
		  
		  
$npcname="守泉仙女";
$npctake="在此守仙泉的仙女，生得美丽绝伦。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	
	  } elseif ($npcc==138) {
$npcname="仙童";
$npctake="一个生的眉清目秀的仙童";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	
	  } elseif ($npcc==139) {
echo "<font color=red>石碑</font>"."<br>";
echo "<font color=black>《子夜吴歌》 </font>"."<br>"; 
echo "<font color=black>李白  </font>"."<br>"; 
echo "<font color=black>长安一片月，万户捣衣声。 </font>"."<br>"; 
echo "<font color=black>秋风吹不尽，总是玉关情。</font>"."<br>"; 
echo "<font color=black>何日平胡虏，良人罢远征？</font>"."<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
	  } elseif ($npcc==140) {
echo "<font color=red>石碑</font>"."<br>";
echo "<font color=black>《江雪》 柳宗元</font>"."<br>"; 
echo "<font color=black>千山鸟飞绝</font>"."<br>"; 
echo "<font color=black>万径人踪灭。</font>"."<br>"; 
echo "<font color=black>孤舟蓑笠翁</font>"."<br>"; 
echo "<font color=black>独钓寒江雪。</font>"."<br>"; 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	
		  
		  
		    } elseif ($npcc==141) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc14.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////				
				
$npcname="林镖头";
$npctake="现在日子越来越好了,镖局的人手也不够了，你能帮我吗？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
		  
		  
		  
		  
		    } elseif ($npcc==142) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc14.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////				
				
$npcname="总镖头萧升";
$npctake="这里的镖头大人..";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
		  
		    } elseif ($npcc==143) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc23.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////				
				
$npcname="兵马俑";
$npctake="一个巨大的兵马俑";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
	  } elseif ($npcc==144) {
		  
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc22.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////		  
$npcname="钱秀才";
$npctake="钱秀才：万般皆下品～唯有读书高～可为什么读书人都这么穷呢？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	  
		  
		  
	  } elseif ($npcc==145) {
$npcname="宠物店老板";
$npctake="宠物店老板：想合成宠物可以找我啊！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	  
		  
		    } elseif ($npcc==146) {
			
			
			
			
			
			$ii=0;
if($m>1) {
$i=0;
for($x=0;$x<=$m;$x++){
$i=$i+1;
if ($rwid[$i]==21||$rwid[$i]==22) {
$ii=$ii+1;

}
}
}





 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc8.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////

echo "<font color=red>店小二</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击店小二</font></a>"."<br>";
if($ii>1) {
$i=0;
for($x=0;$x<=$m-1;$x++){
$i=$i+1;

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$rwid[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$rwname[$i]</font></a>"."<br>";
}
}
echo "<font color=black>南城客栈的小二，卖些稀有的补品。</font>"."<br>"; 			

			
		
//


  } elseif ($npcc==147) {
	 




$q2="yl".$fqidd;
$sql1=mysql_query("select * from $q2 where id=0",$conn);
$info1=@mysql_fetch_array($sql1);
$yl=$info1[yl];	
$xyyl=500;
if ($yl>=$xyyl) {
$q2="yl".$fqidd;
$yll=$yl-$xyyl;
$strsql = "update $q2 set yl=$yll where id=0";//物品id号必改值
$result = mysql_query($strsql);  
	
include("wj/zf.php");
include("wj/ztt.php");
$q2="zt".$fqidd;
$strsql = "update $q2 set hp=$maxhp,mp=$maxmp where id=0";//物品id号必改值
$result = mysql_query($strsql);  
echo "<font color=black>你花了500两银子，往床上一躺，睡了一会，只觉精力充沛！	</font>"."<br>"; 




} else{
	
echo "<font color=black>对不起！休息需要500银两哦！</font>"."<br>"; 	
	
	

}




	 

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

	  } elseif ($npcc==148) {
$npcname="存取物品";
$npctake="存取物品设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//	

  } elseif ($npcc==149) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc6.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
	  
$npcname="董朴升";
$npctake="董记当铺的老板是个老奸巨滑的家伙。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==150) {
   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc7.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
	  
$npcname="大老鼠";
$npctake="当铺的老鼠";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==151) {
$npcname="裁缝店老板";
$npctake="想合成装备可以找我啊！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//






  } elseif ($npcc==152) {
$npcname="守门僧";
$npctake="你想进入雷音寺吗？";
echo "<font color=red>$npcname</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=129;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【小雷音寺】</font></a>"."<br>";




//


  } elseif ($npcc==153) {
$npctake="你乘着船在海上漂流了很久很久...";
echo "<font color=black>$npctake</font>"."<br>";
//最小值
$a4=$dcid+1;
//cmd及超链接值
$cmid=$dcid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=0;
$npc[]=136;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续</font></a>"."<br>";


//





  } elseif ($npcc==154) {
$npcname="巨角犀怪";
$npctake="巨角犀怪";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==155) {
$npctake="你乘着船在海上漂流了很久很久...";
echo "<font color=black>$npctake</font>"."<br>";
//最小值
$a4=$dcid+1;
//cmd及超链接值
$cmid=$dcid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=0;
$npc[]=137;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续</font></a>"."<br>";


//


  } elseif ($npcc==156) {
$npctake="你走进了棺材，黑暗暗的一直往前走也不知道到了哪里！...";
echo "<font color=black>$npctake</font>"."<br>";
//最小值
$a4=$dcid+1;
//cmd及超链接值
$cmid=$dcid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=0;
$npc[]=138;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续</font></a>"."<br>";


//


  } elseif ($npcc==157) {
$npcname="潜入泾水河底";
$npctake="潜入泾水河底设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==158) {
$npcname="渡船(往普陀山)";
$npctake="渡船(往普陀山)设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==159) {
$npcname="渡船(往灵异岛)";
$npctake="通道封印中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==160) {
$npcname="城南荒野(区域)";
$npctake="城南荒野(区域)设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==161) {
$npcname="棺材";
$npctake="棺材设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==162) {
$npcname="进入修罗地狱";
$npctake="进入修罗地狱设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==163) {
	  
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc12.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
$npcname="渔夫李定";
$npctake="经常在这里钓鱼的渔夫";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==164) {
$npcname="盗墓者";
$npctake="盗墓者：我盗过许多古墓了，就是这修罗炼狱不敢进去，你敢进去的话我可以卖工具给你。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  
		  } elseif ($npcc==165) {
$npcname="士兵魂";
$npctake="士兵的魂魄在这皇陵游荡";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

	    } elseif ($npcc==166) {
$npcname="将军魂";
$npctake="将军的魂魄在这皇陵游荡";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
// 

  } elseif ($npcc==167) {
$npcname="守灵老人";
$npctake="孤独的守灵老人";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==168) {
$npcname="东海渔村";
$npctake="东海渔村设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==169) {
	  
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc45.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
$npcname="虾兵";
$npctake="龙宫的虾兵";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==170) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc46.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="蟹将";
$npctake="龙宫的蟹将";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==171) {
	  

 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc44.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
  
$npcname="龙宫大弟子";
$npctake="小仙卿面目清秀，根骨不俗，要是入我龙宫早晚能成为龙族";


echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=21;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=22;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>傲来国</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=23;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>海底莽林</font></a>"."<br>";

//

  } elseif ($npcc==172) {
$npcname="宫娥";
$npctake="一位漂亮的宫娥。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==173) {
$npcname="乌鲸力士";
$npctake="力大无穷的鲸鱼精。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==174) {
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc49.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
	  
$npcname="鲸无敌";
$npctake="龙宫的将军鲸无敌。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==175) {
$npcname="金背海马";
$npctake="龙宫的金背海马。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==176) {
$npcname="敖广";
$npctake="敖广是东海的龙王，其兄弟分别掌管东，南，西，北四海。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==177) {
$npcname="龙婆";
$npctake="龙王的老婆，东海的太后";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==178) {
$npcname="霸下";
$npctake="龙王九子之霸下。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==179) {
$npcname="龟八斗";
$npctake="龙宫里的军师，充满智慧。（打造初级师门武器及60级初级龙鳞套装）";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>你需要打造什么装备呢？</font>"."<br>";

echo "<font color=black>【五龙叉】（40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【龙鳞叉】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";




echo "<font color=black>【龙鳞盔甲】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

echo "<font color=black>【龙鳞头盔】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";



echo "<font color=black>【龙鳞战靴】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【龙鳞项链】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=13;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【龙鳞手镯】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=14;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";






//

  } elseif ($npcc==180) {
	  
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc47.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="龙表弟";
$npctake="龙表弟自豪地说：我是龙少爷的表弟和死党~";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==181) {
	  
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc47.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="龙王九子之饕餮";
$npctake="我最讨厌饿肚子了，所以要不停的吃东西，就这样还是老吃不饱！"."<br>"."哎呀～肚子饿了～没力气打啊";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==182) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc47.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
	  
$npcname="龙王九子之狴犴";
$npctake="我最恨世上不平之事，险恶狡诈之辈，让我遇到绝不轻饶！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==183) {
	  
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc47.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
$npcname="龙王九子之睚眦";
$npctake="父王真软弱，海底莽林的龙族异类越来越猖狂！换了我早把他们赶尽杀绝了！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==184) {
$npcname="宫女";
$npctake="一个漂亮的宫女，专门服侍龙女的。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==185) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc48.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="紫云公主龙女";
$npctake="唉～父王给我选了好几次驸马了，可是没一个让我满意的！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==186) {
$npcname="贝嫂";
$npctake="一位漂亮的贝壳精，龙女身边的仆人。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==187) {
$npcname="小虾米";
$npctake="一弹~又弹~再弹~";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==188) {
$npcname="采贝人";
$npctake="在海滨拾贝的采贝人，正在海边休息。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==189) {
$npcname="月宫管家麻姑";
$npctake="月宫虽然深居世外，但是也一样食人间烟火，不能免俗～（打造初级师门武器及60级初级碧海套装）";
echo "<font color=red>$npcname</font>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";


echo "<font color=black>你需要打造什么装备呢？</font>"."<br>";

echo "<font color=black>【碧落剑】（40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【碧海剑】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";




echo "<font color=black>【碧海盔甲】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=17;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

echo "<font color=black>【碧海头盔】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=18;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";



echo "<font color=black>【碧海战靴】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【碧海项链】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【碧海手镯】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=21;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";






//

  } elseif ($npcc==190) {
$npcname="痴梦仙姑";
$npctake="痴梦仙姑不受金银之谢，但遇有缘者渡之！";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";


echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=39;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=40;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>傲来国</font></a>"."<br>";

//





  } elseif ($npcc==191) {
$npcname="舞仙";
$npctake="月宫的舞仙";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==192) {
$npcname="西王母";
$npctake="传说西王母是元始天尊的女儿，三界十方的女仙都是她的下属";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//





  } elseif ($npcc==193) {
$npcname="玉女";
$npctake="西王母身边的玉女";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==194) {
$npcname="侍女润花";
$npctake="王母娘娘的随身侍女，现在是月宫里的仙子";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==195) {
$npcname="伺女锄药";
$npctake="这昆仑山上有不少名贵药材，月宫里也种的不少～都要精心料理";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==196) {
$npcname="嫦娥";
$npctake="嫦娥舞技精湛，尤盛其师";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==197) {
$npcname="玉兔";
$npctake="它是嫦娥的宠物";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==198) {
$npcname="织女";
$npctake="西王母的外甥女。因私自下凡与牛郎相爱，被罚银河永隔";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==199) {
$npcname="伺女抚琴";
$npctake="平常没事的时候，姐妹们便会互相切磋琴艺，我还要再多练练～";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==200) {
$npcname="桂花树";
$npctake="月宫桂花树";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==201) {
	  
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc50.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="山门迎客晨月";
$npctake="方寸山虽是清修之地，也难断俗尘，为百姓做些消灾避难之事！"."<br>"."一个小道士，负责在山门迎接远道而来的客人。";
echo "<font color=red>$npcname</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=41;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=42;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开封府(待续)</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=43;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>高家庄</font></a>"."<br>";
//

  } elseif ($npcc==202) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc52.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
	  
$npcname="扫地道童";
$npctake="这地每天扫～每天脏～为什么还要扫呢？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==203) {
$npcname="小天师云阳真人";
$npctake="方寸山总管，壮年时降魔除妖无数";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==204) {
$npcname="清风道长";
$npctake="你找我有什么事？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==205) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc56.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
$npcname="菩提祖师";
$npctake="天下万物皆有道，道生则万物生，道灭则万物灭！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==206) {
	  
	   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc57.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
$npcname="青衣道童";
$npctake="仙卿请留步～此地乃祖师清修之地，无事请回！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==207) {
	  
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc57.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
$npcname="小厨子晚风";
$npctake="正在热腾腾的厨房内忙碌的小厨子";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==208) {
$npcname="老道士";
$npctake="悟道不分大小，没有先后，完全是看个人的悟性！（打造初级师门武器及60级初级七星套装）";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";








echo "<font color=black>你需要打造什么装备呢？</font>"."<br>";

echo "<font color=black>【夸父棍】（40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=22;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【七星棍】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=23;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";




echo "<font color=black>【七星盔甲】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=24;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

echo "<font color=black>【七星头盔】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=25;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";



echo "<font color=black>【七星战靴】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=26;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【七星项链】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=27;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【七星手镯】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=28;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";








//



  } elseif ($npcc==209) {
$npcname="仙鹿";
$npctake="方寸山的仙鹿";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==210) {
	  
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc51.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="猎户";
$npctake="方寸山下砍柴的樵夫，边砍柴边吟唱着什么。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==211) {
	  
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc58.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="知客僧";
$npctake="施主～渡海而来！一定辛苦了！里边请茶！";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=44;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=45;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>紫竹林(1000两)</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=46;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>紫竹北林(1000两)</font></a>"."<br>";
//
  } elseif ($npcc==212) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc58.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="普陀山打扫僧";
$npctake="秋分扫落叶，只是近黄昏";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==213) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc60.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
	  
$npcname="惠岸行者";
$npctake="阿弥陀佛，善哉善哉！（打造初级师门武器及60级初级伏虎套装）";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";





echo "<font color=black>你需要打造什么装备呢？</font>"."<br>";

echo "<font color=black>【般若杖】（40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=29;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【伏虎杖】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=30;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";




echo "<font color=black>【伏虎盔甲】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=31;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

echo "<font color=black>【伏虎头盔】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=32;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";



echo "<font color=black>【伏虎战靴】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=33;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【伏虎项链】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=34;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


echo "<font color=black>【伏虎手镯】</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=35;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";















//

  } elseif ($npcc==214) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc61.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
	  
$npcname="观音菩萨";
$npctake="持之以恒,你的佛法才能达到大乘";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==215) {
$npcname="【紫竹林】";
$npctake="【紫竹林】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==216) {
	  
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc59.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
$npcname="普陀山掌厨僧";
$npctake="掌管普陀山上下的厨僧";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==217) {
	  
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc59.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="普陀山掌禅僧";
$npctake="仙卿请留步～看你骨骼惊奇，将来必成大器！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==218) {
$npcname="出海";
$npctake="出海设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==219) {
$npcname="听经石";
$npctake="石头上刻着一首诗："."<br>"."见说盘陀著地灵"."<br>"."普门曾此坐谈经"."<br>"."二龟何事翻成石"."<br>"."想是当年不解听";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==220) {
	  
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc62.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="看门大爷老余头";
$npctake="这里面是高家大院，不要到处乱逛～";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=47;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城(免费)</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=48;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开封府(免费)（待续）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=49;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>方寸山(免费)</font></a>"."<br>";

//


  } elseif ($npcc==221) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc63.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	  
	  
$npcname="酒鬼";
$npctake="不知道是哪里来的酒鬼";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==222) {
	  
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc64.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
$npcname="小乞丐";
$npctake="不知道是哪里来的乞丐";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==223) {
$npcname="老板娘胖嫂";
$npctake="刘家布店老板，卖些自家做的衣服";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==224) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc34.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////  
	  
$npcname="老李头";
$npctake="高家庄的老铁匠，手艺好的没话说";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==225) {
$npcname="烈炽灵狐";
$npctake="烈炽灵狐";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==226) {
$npcname="孟婆";
$npctake="喝过孟婆我用年轻时的青丝及这桥下的滚滚江水煮好的汤，忘记世间的一切，何必和那些亡魂一样变成孤魂野鬼呢？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//





  } elseif ($npcc==227) {
$npcname="烈炽灵狐";
$npctake="烈炽灵狐";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//





  } elseif ($npcc==228) {
$npcname="钟馗(抓鬼)";
$npctake="现在恶鬼四处逃窜，你若能帮我消灭，我定将奖励你价值不菲的鬼灵珠";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==229) {
$npcname="烈炽灵狐";
$npctake="烈炽灵狐";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";






  } elseif ($npcc==230) {
$npcname="推磨鬼";
$npctake="有钱能使鬼推磨不是假的！";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=35;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=36;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=37;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>枉死城(副本)</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=38;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>鸟嘴元帅府</font></a>"."<br>";



//


  } elseif ($npcc==231) {
$npcname="牛头";
$npctake="不管是杀恶鬼，还是度亡魂，都可以获得功德值";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==232) {
$npcname="马面";
$npctake="不管是杀恶鬼，还是度亡魂，都可以获得功德值";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==233) {
$npcname="烈炽灵狐";
$npctake="烈炽灵狐";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";




  } elseif ($npcc==234) {
$npcname="烈炽灵狐";
$npctake="烈炽灵狐";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";




  } elseif ($npcc==235) {
$npcname="烈炽灵狐";
$npctake="烈炽灵狐）";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//








  } elseif ($npcc==236) {
$npcname="【勾魂】兑换【勾魂鬼玉】";
$npctake="【勾魂】兑换【勾魂鬼玉】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==237) {
$npcname="【引魄】兑换【引魄鬼玉】";
$npctake="【引魄】兑换【引魄鬼玉】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==238) {
$npcname="阎罗王";
$npctake="本王掌管着阴间的生杀大权，你若前世造了孽，本王必定把你打入一层、二层、三层......十八层地狱.....嗯，你阳寿未尽，还是速速离去吧！不要逼我哦！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==239) {
$npcname="地藏王";
$npctake="眼见亡魂无处可归，着实让我心痛，不知道道友是否能将那些混混僵僵的亡魂带来，此乃功德无量的大好事啊";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==240) {
$npcname="【轮转玄居】";
$npctake="【轮转玄居】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==241) {
$npcname="〖金豆〗兑换宠物2次转生道具";
$npctake="〖金豆〗兑换宠物2次转生道具设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==242) {
$npcname="兑换宠物2次转生道具";
$npctake="兑换宠物2次转生道具设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==243) {
$npcname="轮转王";
$npctake="你阳寿未尽，还是速速离去吧！不要逼我哦！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==244) {
$npcname="望乡台守卫";
$npctake="望乡台是亡魂看望家乡的地方，你到这做什么？";
echo "<font color=red>$npcname</font>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

//




  } elseif ($npcc==245) {
$npcname="夜游鬼";
$npctake="有钱能使鬼推磨不是假的！"."<br>"."夜游鬼：这枉死城冤气甚重，你真的要过去吗？我可以把你传送到晚上的枉死城去，现在那里极度危险！你确定要去那里吗？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";



echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=111;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【枉死城】</font></a>"."<br>";






//




  } elseif ($npcc==246) {
$npcname="白无常";
$npctake="世人都说：“喜荣华正好，恨无常又到”"."<br>"."你阳寿未尽，我小白先不和你一般计较了！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//








  } elseif ($npcc==247) {
$npcname="黑无常";
$npctake="世人都说：“喜荣华正好，恨无常又到”"."<br>"."你阳寿未尽，我小黑先不和你一般计较了！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==248) {
$npcname="【飞升居】";
$npctake="【飞升居】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
	//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==249) {
$npcname="接引仙子";
$npctake="我在这里就是为了接引各位初临仙界的小仙友！";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=50;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=51;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开封府（待续）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=52;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>傲来国</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=53;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>老君炉(副本)</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=54;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>斩妖台(副本)</font></a>"."<br>";

//





  } elseif ($npcc==250) {
$npcname="【招财进宝】";
$npctake="【招财进宝】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==251) {
$npcname="织女";
$npctake="纤云弄巧，飞星传恨，迢迢暗渡。金风玉露一相逢，便胜却人间无数。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==252) {
$npcname="逆央神卫";
$npctake="掌管逆央仙境入口的守卫。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==253) {
$npcname="【天元居】";
$npctake="【天元居】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==254) {
$npcname="拍卖行";
$npctake="拍卖行设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==255) {
$npcname="太白金星";
$npctake="太白金星：小仙卿，是不是遇到了瓶颈，来找我那就对了！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==256) {
$npcname="【凌霄宝殿】";
$npctake="【凌霄宝殿】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==257) {
$npcname="玉皇大帝";
$npctake="三界之帝，维护三界次序，身着金丝黄袍，闪闪发光。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==258) {
$npcname="王母娘娘";
$npctake="玉帝的老婆，生性多嫉，对嫦娥充满仇恨。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==259) {
$npcname="紫衣仙女";
$npctake="一个打扫王母住处的仙女。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//





  } elseif ($npcc==260) {
$npcname="【三生三世】";
$npctake="【三生三世】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==261) {
$npcname="金童";
$npctake="你找我有什么事情吗？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==262) {
$npcname="玉女";
$npctake="你找我有什么事情吗？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==263) {
$npcname="【封神居】";
$npctake="【封神居】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==264) {
$npcname="姜子牙";
$npctake="主管封神的阐教弟子！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==265) {
$npcname="土行孙";
$npctake="封神之战中幸存下来的修仙者。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==266) {
$npcname="三清道人";
$npctake="混沌大阵是远古众神魔的试练之地，，实力不足者到此即可领取奖励离开";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==267) {
$npcname="神瑛侍卫";
$npctake="紫薇宫的守卫";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==268) {
$npcname="灵虚子";
$npctake="你找我有什么事情？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==269) {
$npcname="马场主簿";
$npctake="马场管事的";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==270) {
$npcname="进入【蟠桃园】";
$npctake="进入【蟠桃园】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//





  } elseif ($npcc==271) {
$npcname="百花仙子";
$npctake="你找我有什么事情吗？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//







  } elseif ($npcc==272) {
$npcname="进入【瑶池】";
$npctake="进入【瑶池】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==273) {
$npcname="2金豆兑换瑶池仙露";
$npctake="2金豆兑换瑶池仙露设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==274) {
$npcname="【激活瑶池副本】";
$npctake="【激活瑶池副本】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//





  } elseif ($npcc==275) {
$npcname="进入【老君炉】";
$npctake="进入【老君炉】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==276) {
$npcname="太上老君";
$npctake="天地间最牛叉的炼丹大师。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==277) {
$npcname="银角童子";
$npctake="太上老君的炼丹童子。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==278) {
$npcname="金角童子";
$npctake="太上老君的炼丹童子。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==279) {
$npcname="进入【斩妖台】";
$npctake="进入【斩妖台】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==280) {
$npcname="电母";
$npctake="电是一个奇特的东西。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==281) {
$npcname="雷公";
$npctake="一个造型奇特的人";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==282) {
$npcname="李公明";
$npctake="你是来加入截教的吗？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==283) {
$npcname="医神.华佗";
$npctake="华佗：悬壶济世乃行医者的本分！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==284) {
$npcname="宝石升级";
$npctake="宝石升级设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==285) {
$npcname="宝石分解";
$npctake="宝石分解设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==286) {
$npcname="守护天神";
$npctake="每个人都有神灵为其默默守护，你愿意将你的守护请回去吗？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==287) {
$npcname="文昌星君";
$npctake="此处是为仙界，尔等不可造次。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//






  } elseif ($npcc==288) {
$npcname="太乙真人";
$npctake="好久没跟菩提老祖下棋了！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==289) {
$npcname="李天王";
$npctake="你是来加入阐教的吗？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==290) {
$npcname="天庭神匠";
$npctake="技艺高超的打铁师傅，曾经打造过万千神兵。";
echo "<font color=red>$npcname</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";

echo "<font color=red>温馨提示:法宝装备升级保留升级后的孔和星,终极法宝武器金箍棒</font>"."<br>";
echo "<font color=black>【阐气瓶】(银两500万)</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=36;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";






//


  } elseif ($npcc==291) {
$npcname="金顶大仙";
$npctake="主管坐骑的仙人。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=red>温馨提示:如果想要拥有超级坐骑,它将回吞噬掉副装备(超级坐骑将不保留孔和星级)</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

echo "<font color=black>你需要什么帮助呢？</font>"."<br>";




/*
echo "<font color=black>【风火双轮】(低阶坐骑)5000万</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=37;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>【玉角麒麟】(低阶坐骑)5000万</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=38;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>【五彩神牛】(低阶坐骑)5000万</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=39;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>【章鱼哥】(中阶坐骑)5亿银两+5万西游声望</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=40;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>【仙鹤】(中阶坐骑)5亿银两+5万西游声望</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=41;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=black>【五爪金龙】(中阶坐骑)5亿银两+5万西游声望</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=42;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


*/

echo "<font color=black>【镇东神兽】（青龙）(高阶坐骑)血20亿银两+10万西游声望</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=43;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=black>【镇东神兽】（白虎）(高阶坐骑)攻20亿银两+10万西游声望</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=44;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>【镇东神兽】（朱雀）(高阶坐骑)魔攻20亿银两+10万西游声望</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=45;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>【镇东神兽】（玄武）(高阶坐骑)防御20亿银两+10万西游声望</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=46;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

//



  } elseif ($npcc==292) {
$npcname="伏羲传人";
$npctake="上古伏羲的再传弟子。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==293) {
$npcname="哪吒三太子";
$npctake="仙界太闷了，还是两个哥哥自由自在！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==294) {
$npcname="顺风耳";
$npctake="别说我坏话，我听着呢！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==295) {
$npcname="千里眼";
$npctake="别做坏事，我看着呢！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==296) {
$npcname="西王母";
$npctake="传说西王母这里能够挑选一件如意的披风哦。";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

echo "<font color=black>你需要什么帮助呢？</font>"."<br>";





echo "<font color=black>【侠士披风】10亿银两+10万西游声望+50金豆</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=61;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



  } elseif ($npcc==297) {
$npcname="傲来国武士";
$npctake="你想要去哪里？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//echo "<font color=black>$npctake</font>"."<br>";


echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=24;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=25;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宝象国</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=26;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>水帘洞天(副本)</font></a>"."<br>";


//

  } elseif ($npcc==298) {
$npcname="游方道人";
$npctake="一个游历天下的道人";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==299) {
$npcname="东方寒雨";
$npctake="武馆馆主东方寒雨";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==300) {
$npcname="阿七婆";
$npctake="我在傲来国已经生活一辈子了，真想去长安看看啊！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==301) {
$npcname="山神";
$npctake="我就是这花果山的山神";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==302) {
$npcname="进入【水帘洞】";
$npctake="进入【水帘洞】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==303) {
$npcname="激活水帘洞天副本【普通】";
$npctake="激活水帘洞天副本【普通】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==304) {
$npcname="激活水帘洞天副本【困难】";
$npctake="激活水帘洞天副本【困难】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==305) {
$npcname="激活水帘洞天副本【梦魇】";
$npctake="激活水帘洞天副本【梦魇】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==306) {
$npcname="打造师门武器";
$npctake="打造师门武器设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==307) {
$npcname="1金豆兑换【东海神铁】";
$npctake="1金豆兑换【东海神铁】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==308) {
$npcname="驿站驿官";
//$npctake="你想要去哪里？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=55;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=56;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宝象国</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=57;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>水帘洞天(副本)</font></a>"."<br>";
//




  } elseif ($npcc==309) {
$npcname="进入车迟国";
$npctake="进入车迟国设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==310) {
$npcname="进入【压龙山】";
$npctake="进入【压龙山】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//






  } elseif ($npcc==311) {
$npcname="进入【平顶山】";
$npctake="进入【平顶山】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==312) {
$npcname="进入【桃林】";
$npctake="进入【桃林】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==313) {
$npcname="乌鸡国国王";
$npctake="哎~~最近妖魔鬼怪又开始猖獗了";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==314) {
$npcname="边关守卫";
$npctake="常年镇守乌鸡国边疆的守卫";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==315) {
$npcname="宫兵";
$npctake="装备烈火鞭、黑铁盔、护法袈裟";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=black>要移动到哪个区域？</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=27;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>地府</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=28;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>天宫</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=29;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=30;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>傲来国</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=31;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>双叉岭</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=32;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>波月洞（5万两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=33;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>白骨陵墓(5万两)</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=34;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>平顶山(冒险区域)</font></a>"."<br>";

//

  } elseif ($npcc==316) {
$npcname="宝象国王";
$npctake="现在妖魔横行，百姓生命朝不夕保，这如何是好？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==317) {
$npcname="宫妃";
$npctake="三公主失踪那么多年了，不知道她现在到底在哪，哎~";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==318) {
$npcname="大臣";
$npctake="我们上个星期已经派了一只精锐的队伍去妖精经常出没的地方查探去了，应该很快就会有消息传过来了。";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==319) {
$npcname="渔夫";
$npctake="这位小仙卿来自大唐吗？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==320) {
$npcname="宫兵";
$npctake="这里是宝象国王宫，请不要乱闯！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==321) {
$npcname="软泥怪";
$npctake="一滩烂泥";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==322) {
$npcname="进入【双叉岭】";
$npctake="进入【双叉岭】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==323) {
$npcname="进入【黑松林】";
$npctake="进入【黑松林】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==324) {
$npcname="进入【金塔】";
$npctake="进入【金塔】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==325) {
$npcname="进入【白骨洞】";
$npctake="进入【白骨洞】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==326) {
$npcname="佝偻的老人";
$npctake="一位可怜的老人家";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==327) {
$npcname="进入【平顶山】";
$npctake="进入【平顶山】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//
  } elseif ($npcc==328) {
$npcname="进入【五庄观】";
$npctake="进入【五庄观】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==329) {
$npcname="驿站官员";
$npctake="亲爱的小仙友!你想移动到哪个区域呢?";
echo "<font color=red>$npcname</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=139;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";

//



  } elseif ($npcc==330) {
$npcname="车迟国国王";
$npctake="最近妖魔横行,我的国家子民们该如何是好呢?";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



  } elseif ($npcc==331) {
$npcname="内阁大臣";
$npctake="在车迟国就得守这里的规矩不要到处乱逛";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


  } elseif ($npcc==332) {
$npcname="进入【通天水府】";
$npctake="进入【通天水府】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//




  } elseif ($npcc==333) {
$npcname="进入【子母河】";
$npctake="进入【子母河】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==334) {
$npcname="进入【通天河】";
$npctake="进入【通天河】设计中";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

  } elseif ($npcc==335) {
$npcname="螃蟹";
$npctake="";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

 } elseif ($npcc==336) {
$npcname="潮水螃蟹";
$npctake="";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


 } elseif ($npcc==386) {
$npcname="调查洞穴～";
$npctake="";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";




 } elseif ($npcc==5194) {
$npcname="【大螃蟹】";
$npctake="【大螃蟹】：找死";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//



 } elseif ($npcc==5195) {
$npcname="和黑衣人说话";
$npctake="和黑衣人说话";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//


} elseif ($npcc==451) {
	
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc41.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////	
$npcname="李捕头";
$npctake="李捕头：这长安城里谁敢惹事生非，我第一个饶不了他！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//最小值
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

} elseif ($npcc==456) {
$npcname="村长吴文";
$npctake="村长吴文：我是这里的村长有什么事可以找我！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//

} elseif ($npcc==463) {
	 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/npc/npc5.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{

}
  //////////////////////////////////////插入图片  //////////////////////////
	
$npcname="太守";
$npctake="太守：大胆刁民见了本官还不下跪！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//






} elseif ($npcc==466) {
$npcname="算命先生袁守诚";
$npctake="算命先生袁守诚：小仙卿，快过来老夫给你算上一卦";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
//






//
} elseif ($npcc==621) {
$npcname="女儿国马夫";
$npctake="女儿国马夫：小仙卿，要移动到哪里去呢？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=140;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";


//

} elseif ($npcc==622) {
$npcname="祭赛国车夫";
$npctake="祭赛国车夫：小仙卿，要移动到哪里去呢？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=141;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";


//


} elseif ($npcc==623) {
$npcname="马倌";
$npctake="马倌：小仙卿，要移动到哪里去呢？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=142;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";


//


} elseif ($npcc==624) {
$npcname="比丘国车夫";
$npctake="比丘国车夫：小仙卿，要移动到哪里去呢？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=143;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";


//

} elseif ($npcc==625) {
$npcname="天法国车夫";
$npctake="天法国车夫：小仙卿，要移动到哪里去呢？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=144;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";


//

} elseif ($npcc==626) {
$npcname="凤仙郡车夫";
$npctake="凤仙郡车夫：小仙卿，要移动到哪里去呢？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=145;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";


//




} elseif ($npcc==627) {
$npcname="玉华郡车夫";
$npctake="玉华郡车夫：小仙卿，要移动到哪里去呢？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=146;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";


//



} elseif ($npcc==628) {
$npcname="金平府车夫";
$npctake="金平府车夫：小仙卿，要移动到哪里去呢？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=147;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";


//


} elseif ($npcc==629) {
$npcname="天竺国车夫";
$npctake="天竺国车夫：小仙卿，要移动到哪里去呢？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=148;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";


//


} elseif ($npcc==630) {
$npcname="止戈将军";
$npctake="止戈将军：小仙卿，要移动到哪里去呢？";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

echo "<font color=black>$npctake</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=149;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=151;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>因果岛</font></a>"."<br>";

//

} elseif ($npcc==631) {
$npcname="车夫";
$npctake="客官,你要去哪里呢?";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";



echo "要移动到哪个区域？"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=154;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>"."<br>";

//

} elseif ($npcc==632) {
$npcname="宠物贩子";
$npctake="出来做点小生意养家糊口的小贩子";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";



echo "宠物技能书还在努力建设中....."."<br>";


//


//

} elseif ($npcc==633) {
$npcname="兑换恶魔广场声望";
$npctake="你可以兑换的恶魔广场声望如下";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";




echo "<font color=black>【1万西游声望卷轴】=【恶魔符文】x1000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=31;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=black>【1万法宝经验卷轴】=【恶魔符文】x200</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=32;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>【1万西游声望卷轴】x10=【恶魔符文】x1万</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=204;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=black>【1万法宝经验卷轴】x10=【恶魔符文】x2000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=205;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>【1万西游声望卷轴】x100=【恶魔符文】x10万</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=206;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=black>【1万法宝经验卷轴】x100=【恶魔符文】x2万</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=207;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";








echo "<font color=red>☯☯☯☯☯☯V3以上特权☯☯☯☯☯☯</font>"."<br>";
echo "<font color=black>〖1万西游声望卷轴〗=【恶魔符文】x1000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=33;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>〖1万法宝经验卷轴〗=【恶魔符文】x200</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=34;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";




echo "<font color=black>〖1万西游声望卷轴〗x10=【恶魔符文】x1万</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=208;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>〖1万法宝经验卷轴〗x10=【恶魔符文】x2000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=209;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=black>〖1万西游声望卷轴〗x100=【恶魔符文】x10万</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=210;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>〖1万法宝经验卷轴〗x100=【恶魔符文】x2万</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=211;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";








echo "<font color=red>☯☯☯☯☯☯V3以上特权☯☯☯☯☯☯</font>"."<br>";




echo "<font color=red>更多兑换在路上。。。。</font>"."<br>";





} elseif ($npcc==634) {
$npcname="恶魔广场传送员";
$npctake="恶魔广场又有很多妖怪出来了,你快进去消灭他们吧！可以使用【恶魔广场门票】进去";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=101;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>领取【恶魔入场卷】(每天一次)</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=163;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>传送至恶魔广场</font></a>"."<br>";


//

} elseif ($npcc==635) {
$npcname="房屋管理员";
$npctake="你要购买什么房屋呢？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";



echo "房屋每人限购一套,官宅全区限量预购从速,请仔细看清楚购买与出售房屋以免造成不必要的损失."."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=152;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>出售民宅（100万银两）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=152;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>出售豪宅（50金豆）</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=320;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看求购官宅（出售官宅）</font></a>"."<br>";



echo "<font color=black>-------------------------</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=151;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买民宅（1000万银两）</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=151;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买豪宅（188金豆）</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=151;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买豪宅（88金豆+豪宅优惠券）</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=319;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>求购官宅（购买官宅）</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=153;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看全区官宅（购买官宅）</font></a>"."<br>";
echo "<font color=black>-------------------------</font>"."<br>";
//





} elseif ($npcc==718) {
$npcname="宠物岛传送员";
$npctake="宠物岛最近又来了许多可爱的小宝贝们！想要获得他们就要看有没有这个缘分了";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>宠物品质：分为普通，极品，灵品，仙品，神品，圣品五等</font>"."<br>";
echo "<font color=red>宠物变异：1级-5级变异五等</font>"."<br>";
echo "<font color=red>宠物初始属性越好如加上品质和与变异将是极品圣宠物</font>"."<br>";
echo "<font color=red>宠物复活的时间越久基础属性也越好</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>领取【宠物岛门票】(每天一次)</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=171;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>传送至宠物岛</font></a>"."<br>";


} elseif ($npcc==730) {
$npcname="宠行天下";
$npctake="在我这里可以买到一些宠物小装备哦！！";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";


echo "<font color=black>〖小兽爪〗</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=49;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

echo "<font color=black>〖小兽甲〗</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=50;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
echo "<font color=black>〖小兽盔〗</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=51;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

echo "<font color=black>〖小兽靴〗</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=52;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

echo "<font color=black>〖小兽链〗</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=53;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

echo "<font color=black>〖小兽镯〗</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=54;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";



} elseif ($npcc==5387) {


//查询是否的参观模式
$q2="bl".$fqidd;
$sql1=mysql_query("select * from $q2 where id=2",$conn);
$info1=@mysql_fetch_array($sql1);
$bll1=$info1[bll1];

if ($bll1>=1) {
$npcname="管家";
$npctake="尊贵的贵客！！在这里到处走走可以可别把主人惹生气了哟";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;
//
} else{
$npcname="管家";

		//调用zt.ini是否存在  
include("./ini/fz_ini.php");
$fzpd=($iniFile->getItem('所处房间人id','初始'));

if($fzpd==123){
$npctake="主人,有什么我能帮助你的吗？";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";	


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=165;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>房屋改名</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=157;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造家具</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=160;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看家具及摆放情况</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=166;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>邀请好友</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=169;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>踢出玩家</font></a>"."<br>";

//

} else{	
$npctake="亲爱的客人！欢迎参观可不要惹主人生气哦";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
} 








}




} elseif ($npcc==636) {


$npcname="月下老人";
echo "<font color=red>$npcname</font>"."<br>";

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

$npctake="月下老人三：千里姻缘一线牵~愿天下有情人终成眷属！";

echo "<font color=black>一位和蔼可亲的老人家，手里拿着红线正忙着什么。</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=213;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换〖求婚玫瑰〗（10金豆）</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=245;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造婚饰</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=212;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我要结婚</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=216;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我要离婚</font></a>"."<br>";








echo "<br>";
//

} elseif ($npcc==637) {


$npcname="如意传送员";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

$npctake="亲爱的如果你是vip玩家每天都可以在我这领取一张vip练级卷哦，当然如果不是也别灰心活动的时候也会送出哦！";

echo "<font color=black>在我这里可以将你送入高倍经验区</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>领取练级卷（每天一次）</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=161;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>传送进入vip练级区</font></a>"."<br>";



} elseif ($npcc==732) {


$npcname="大唐国师";
echo "<font color=red>$npcname</font>"."<br>";

$npctake="亲爱的玩家每天在我这可以进行每日任务哦！请根据自己的实力挑选（每天可以完成10次哦）";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>提示：如果是新的一天显示为0次请直接接取任务</font>"."<br>";
include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','1_5'));

include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','9'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>1级-20级（杀怪任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','2_5'));

include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','10'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>20级-40级（杀怪任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";

include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','3_5'));

include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','11'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>40级-60级（杀怪任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','4_5'));

include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','12'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>60级-80级（杀怪任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','5_5'));

include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','13'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=13;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>80级-100级（杀怪任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','6_5'));

include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','14'));

$hdcs=10-$hdcs;

include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=14;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>100级-120级（杀怪任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','7_5'));

include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','15'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>120级-140级（杀怪任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";



} elseif ($npcc==733) {


$npcname="女儿国国师";
echo "<font color=red>$npcname</font>"."<br>";

$npctake="亲爱的玩家每天在我这可以进行每日任务哦！";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>提示：如果是新的一天显示为0次请直接接取任务，或者收集齐了直接提交不用管提示（注意此项赏金任务需要达到最低等级要求方可领取）</font>"."<br>";


include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','8_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','16'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>10级-20级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");

include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','9_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','17'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=17;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>20级-40级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");

include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','10_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','18'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=18;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>40级-60级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");


include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','11_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','19'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>60级-80级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");


include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','12_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','20'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>80级-100级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");



include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','13_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','21'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=21;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>100级-120级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");

include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','14_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','22'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=22;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>120级-140级（收集任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");












} elseif ($npcc==734) {


$npcname="宝象国国师";
echo "<font color=red>$npcname</font>"."<br>";

$npctake="亲爱的玩家每天在我这可以进行每日任务哦！";




$npctake="亲爱的玩家每天在我这可以进行每日任务哦！";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>提示：如果是新的一天显示为0次请直接接取任务，不用管提示（注意此项材料任务需要达到最低等级要求方可领取）</font>"."<br>";


include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','15_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','23'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=23;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>10级-20级（精英任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");

include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','16_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','24'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=24;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>20级-40级（精英任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");

include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','17_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','25'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=25;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>40级-60级（精英任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");


include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','18_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','26'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=26;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>60级-80级（精英任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");


include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','19_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','27'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=27;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>80级-100级（精英任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");



include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','20_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','28'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=28;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>100级-120级（精英任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");

include("./ini/zxrw_ini.php");
$rcrwbl=($iniFile->getItem('任务变量','21_5'));
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数','29'));
$hdcs=10-$hdcs;
include("./rcrw/rwts.php");
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=29;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>120级-140级（精英任务）</font><font color=red>剩余:[".$hdcs."次]</font></a>"."<br>";
include("./ini/zxrw_ini.php");




} elseif ($npcc==735) {


$npcc1=$npcc;
$hdid=31;
$npcc=$hdid;	
include("./ini/hd_ini.php");

$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
$hdlq=2;
} else{	
}



//如果跨天则重置次数和时间
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=0 where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => '0']);	
$hdcs=0;

} else{	

} 

//如果跨天则重置次数和时间


$hdxzcs=10-$hdcs;



$npcc=$npcc1;
$npcname="万恶的班主任（暑期活动）";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";


$npctake="作业做完了吗？不会就去请教隔壁幼儿园的小朋友";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>提示：暑期活动期间可在班主任这里参与答题（班主任可是不按套路出牌的哦）</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=414;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开始答题（剩余".$hdxzcs."次）</font></a>"."<br>";






} elseif ($npcc==736) {
$npcname="老夫子（才子印记兑换）";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
$npctake="这个暑假过得怎么样啊？有【才子印记】么？";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>支持以下兑换：</font>"."<br>";





echo "<font color=red>【才子印记】x1（20碎片兑换）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【才子印记】x10（200碎片兑换）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【比翼图纸】x1（5才）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【比翼图纸】x10（50才）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【比翼图纸】x100（500才）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=red>【VIP练级卷】-（5才）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=red>〖铁宝箱〗-（10才）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>〖银宝箱〗-（30才）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=red>〖万能钥匙〗-（30才）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>〖大智慧果〗-（30才）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=436;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【比翼双飞の婚戒】（典藏版）</font></a>";
echo "<font color=black>（【比翼图纸】x150）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=55;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=437;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【比翼双飞の婚链】（典藏版）</font></a>";
echo "<font color=black>（【比翼图纸】x150）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=56;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";







} elseif ($npcc==737) {

$npcname="【测试人偶】仅供伤害各项目测试";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
$npctake="【测试人偶】仅供伤害各项目测试";
echo "<font color=black>$npctake</font>"."<br>";




} elseif ($npcc==798) {


$npcname="唐三藏（暑期活动第二波）";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
$npctake="唐三藏还在天天VIP练级区吃我的唐僧肉么？看看这个暑假给你们带来了什么宝贝";
echo "<font color=black>$npctake</font>"."<br>";




echo "<font color=red>【清】（〖万能字〗）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=17;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【清】x10（〖万能字〗x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=18;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【凉】（〖万能字〗）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【凉】x10（〖万能字〗x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【一】（〖万能字〗）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=21;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【一】x10（〖万能字〗x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=22;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【夏】（〖万能字〗）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=23;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【夏】x10（〖万能字〗x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=24;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【清凉宝箱】（清凉一夏每样x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=25;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【清凉宝箱】x10（清凉一夏每样x100）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=26;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";






} elseif ($npcc==800) {


$npcname="师门祖师";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
$npctake="阿弥陀佛，善哉善哉！";
echo "<font color=black>$npctake</font>"."<br>";


//801






echo "<br>";
//



} elseif ($npcc==640) {


$npcname="神仙姐姐";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

$npctake="vip用户每日可以在我这领取丰厚特权奖励";

//echo "<font color=red>元旦活动大使</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>免费领取每日vip福利(每天一次）</font></a>"."<br>";


} elseif ($npcc==697) {
$npcname="仙露";
echo "<font color=red>$npcname</font>"."<br>";

echo "<br>";
//

} elseif ($npcc==698) {
$npcname="黑衣大汉";
echo "<font color=red>$npcname</font>"."<br>";

} elseif ($npcc==699) {
$npcname="黑衣首领";
echo "<font color=red>$npcname</font>"."<br>";


} elseif ($npcc==700) {
$npcname="小流氓";
echo "<font color=red>$npcname</font>"."<br>";

} elseif ($npcc==701) {
$npcname="小流氓";
echo "<font color=red>$npcname</font>"."<br>";
} elseif ($npcc==702) {
$npcname="众酒客";
echo "<font color=red>$npcname</font>"."<br>";


} elseif ($npcc==704) {
$npcname="凌月";
echo "<font color=red>$npcname</font>"."<br>";
} elseif ($npcc==705) {
$npcname="绿衣女子";
echo "<font color=red>$npcname</font>"."<br>";


		} elseif ($npcc==706) {
$npcname="飞贼";
echo "<font color=red>$npcname</font>"."<br>";
		} elseif ($npcc==707) {
$npcname="萧晓月";
echo "<font color=red>$npcname</font>"."<br>";

		} elseif ($npcc==708) {
$npcname="清风道长";
echo "<font color=red>$npcname</font>"."<br>";

		} elseif ($npcc==709) {
$npcname="狐妖女";
echo "<font color=red>$npcname</font>"."<br>";

		} elseif ($npcc==710) {
$npcname="蛇妖男";
echo "<font color=red>$npcname</font>"."<br>";
		} elseif ($npcc==711) {
$npcname="喽罗";
echo "<font color=red>$npcname</font>"."<br>";

		} elseif ($npcc==712) {
$npcname="赤血龙王";
echo "<font color=red>$npcname</font>"."<br>";

		} elseif ($npcc==713) {
$npcname="酒鬼";
echo "<font color=red>$npcname</font>"."<br>";
	} elseif ($npcc==714) {

$npcname="守门兵俑";
echo "<font color=red>$npcname</font>"."<br>";



} elseif ($npcc==921) {


$npcname="〖活动〗金银山山神";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

$npctake="只有我这里有好宝贝哦~~一般人我不告诉他";

//echo "<font color=red>元旦活动大使</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=454;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【进入金银山寻宝】</font></a>"."<br>";




} elseif ($npcc==922) {


$npcname="〖活动〗牛郎";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
$npctake="〖活动〗牛郎：哎~~不知何时才能与嫦娥仙子和织女再续前缘呢？(给牛郎足够多的喜鹊蛋可以孵化小喜鹊哦)";
echo "<font color=black>$npctake</font>"."<br>";




echo "<font color=red>【小喜鹊】x1（【喜鹊蛋】x1【20%】）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=44;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>孵化</font></a>"."<br>";

echo "<font color=red>【小喜鹊】x10（【喜鹊蛋】x20【30%】）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=45;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>孵化</font></a>"."<br>";

echo "<font color=red>【小喜鹊】x50（【喜鹊蛋】x200【40%】）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=46;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>孵化</font></a>"."<br>";


echo "<font color=red>【小喜鹊】x100（【喜鹊蛋】x500【50%】）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=47;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>孵化</font></a>"."<br>";

echo "<font color=red>【小喜鹊】x200（【喜鹊蛋】x1000【60%】）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=48;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>孵化</font></a>"."<br>";


echo "<font color=red>【小喜鹊】x500（【喜鹊蛋】x3000【70%】）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=49;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>孵化</font></a>"."<br>";




} elseif ($npcc==923) {


$npcname="〖活动〗织女";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";
$npctake="织女：哎~~不知牛郎收集够足够多的小喜鹊没？(【小喜鹊】都可以在这兑换超值物品哦)";
echo "<font color=black>$npctake</font>"."<br>";



echo "<font color=red>〖攻之龙丹〗（【小喜鹊】x5）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=50;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>〖魔之龙丹〗（【小喜鹊】x5）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=51;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=red>〖防之龙丹〗（【小喜鹊】x5）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=52;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>〖血之龙丹〗（【小喜鹊】x5）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=53;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=red>〖荣誉宝石包〗（2个）（【小喜鹊】x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=54;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>〖齐天大圣〗（宠物蛋）（【小喜鹊】x50）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=55;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>〖至尊天圣〗（【小喜鹊】x666）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=56;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>〖圣灵锻造图纸〗（【小喜鹊】x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=57;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【喜鹊令】（【小喜鹊】x666+〖金豆〗x200）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=62;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【七夕令】（【小喜鹊】x888+〖金豆〗x500）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=175;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



/*

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=558;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【一生所爱の婚戒】（典藏版）</font></a>";
echo "<font color=black>（【小喜鹊】x666+〖金豆〗x200）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=57;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=559;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【一生所爱の婚链】（典藏版）</font></a>";
echo "<font color=black>（【小喜鹊】x666+〖金豆〗x200）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=58;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
*/
/*

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=560;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【恋人未满の婚戒】（靛蓝版）</font></a>";
echo "<font color=black>（【小喜鹊】x1000+〖金豆〗x200）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=59;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=561;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【恋人未满の婚链】（靛蓝版）</font></a>";
echo "<font color=black>（【小喜鹊】x1000+〖金豆〗x200）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=60;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


*/



} elseif ($npcc==924) {//副本boss










} elseif ($npcc==1001) {//〖活动〗紫霞仙子





$npcc1=$npcc;
$hdid=223;
$npcc=$hdid;	
include("./ini/hd_ini.php");

$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
$hdlq=2;
} else{	
}



//如果跨天则重置次数和时间
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=0 where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => '0']);	
$hdcs=0;

} else{	

} 

//如果跨天则重置次数和时间


$hdxzcs=10-$hdcs;



$npcc=$npcc1;
$npcname="〖活动〗紫霞仙子";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";


$npctake="我的意中人是一位盖世英雄,有一天他会身披金甲圣衣、驾着七彩祥云来娶我。我猜中了开头,却猜不中这结局......";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>提示：紫霞仙子可不是那么好骗的哦</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=480;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>假扮演至尊宝（剩余".$hdxzcs."次）</font></a>"."<br>";



} elseif ($npcc==1002) {//〖活动〗青霞仙子




echo "<font color=red>〖月光宝盒〗(圣衣,祥云,眼泪,紧箍咒各20)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=69;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=red>〖灵匣宝盒〗(圣衣,祥云,眼泪,紧箍咒各5)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=71;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";




echo "<font color=red>〖神匣宝盒〗(圣衣,祥云,眼泪,紧箍咒各10)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=73;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=pink>==============================</font>"."<br>";



echo "<font color=red>〖月光宝盒〗x10(圣衣,祥云,眼泪,紧箍咒各200)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=70;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";






echo "<font color=red>〖灵匣宝盒〗x10(圣衣,祥云,眼泪,紧箍咒各50)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=72;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";









echo "<font color=red>〖神匣宝盒〗x10(圣衣,祥云,眼泪,紧箍咒各100)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=74;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=pink>==============================</font>"."<br>";


echo "<font color=red>〖小智慧果〗(圣衣,祥云,眼泪,紧箍咒各5)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=75;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>〖大智慧果〗(圣衣,祥云,眼泪,紧箍咒各10)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=76;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>〖至尊宝密令〗（银两5000万）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=77;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>〖至尊宝密令〗x10（银两5亿）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=78;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=pink>==============================</font>"."<br>";

echo "<font color=red>〖紫霞眼泪〗（银两500万）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=79;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>〖紫霞眼泪〗x10（银两5000万）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=80;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>〖紫霞眼泪〗x100（银两5亿）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=81;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";





} elseif ($npcc==1004) {//



$npcc=$npcc1;
$npcname="〖活动〗苏于迟";
echo "<font color=red>$npcname</font>"."<br>";



$npctake="星空熠熠之下，天衣阁学徒苏语迟带来的清甜之曲，故人又逢之时，此曲只应天上有~~（七夕活动期间每日倾听一次）";
echo "<font color=black>$npctake</font>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=225;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>倾听天籁之音~~</font></a>"."<br>";
echo "<font color=red>提示：活动期间充值每满10元可获得【鹊翎】x2</font>"."<br>";
echo "<font color=red>备注：以下全部为称号，具体信息查看人物状态</font>"."<br>";
echo "<font color=black>---------------------</font>"."<br>";

echo "<font color=red>〖情圣〗（【鹊翎】x10）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=105;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>oh~yes兑换</font></a>"."<br>";

echo "<font color=red>〖万人迷〗（【鹊翎】x10）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=106;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>oh~yes兑换</font></a>"."<br>";




echo "<font color=red>〖天作之合〗（【鹊翎】x15）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=107;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>oh~yes兑换</font></a>"."<br>";



echo "<font color=red>〖爱你一万年〗（【鹊翎】x20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=108;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>oh~yes兑换</font></a>"."<br>";



echo "<font color=red>〖真爱无敌〗（【鹊翎】x20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=109;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>oh~yes兑换</font></a>"."<br>";



echo "<font color=red>〖绝世情圣〗（【鹊翎】x20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=110;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>oh~yes兑换</font></a>"."<br>";



echo "<font color=red>〖天下最倾城〗（【鹊翎】x25）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=111;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>oh~yes兑换</font></a>"."<br>";


echo "<font color=red>〖天下最风流〗（【鹊翎】x25）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=112;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>oh~yes兑换</font></a>"."<br>";






} elseif ($npcc==1005) {//



$npcc=$npcc1;
$npcname="〖活动〗潇道长";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="恋人的生与死该如何抉择呢？？（七夕活动期间每日可猜生死，猜对即可获得每次X10倍的经验，通关得随机1-100金豆）";
echo "<font color=black>$npctake</font>"."<br>";


$npcc1=$npcc;
$hdid=226;
$npcc=$hdid;	
include("./ini/hd_ini.php");

$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
$hdlq=2;
} else{	
}



//如果跨天则重置次数和时间
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=0 where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => '0']);	
$hdcs=0;

} else{	

} 

//如果跨天则重置次数和时间


$hdxzcs=30-$hdcs;



$npcc=$npcc1;


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=527;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开始猜生死（剩余".$hdxzcs."次）(每轮5亿银两)</font></a>"."<br>";



} elseif ($npcc==1006) {//



$npcc=$npcc1;
$npcname="〖活动〗苏小白";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="石榴裙下死做鬼也风流~~~";
echo "<font color=black>$npctake</font>"."<br>";



echo "<font color=red>【甜】（〖七夕万能字〗）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=113;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【甜】x10（〖七夕万能字〗x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=119;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【蜜】（〖七夕万能字〗）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=114;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【蜜】x10（〖七夕万能字〗x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=120;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【七】（〖七夕万能字〗）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=115;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【七】x10（〖七夕万能字〗x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=121;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【夕】（〖七夕万能字〗）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=116;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【夕】x10（〖七夕万能字〗x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=122;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【七夕宝箱】（甜蜜七夕每样x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=117;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【七夕宝箱】x10（甜蜜七夕每样x100）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=123;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=red>【超级七夕宝箱】（甜蜜七夕每样x100）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=118;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【超级七夕宝箱】x10（甜蜜七夕每样x1000）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=124;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>-----------------</font>"."<br>";

echo "<font color=red>【比翼图纸】x1（甜蜜七夕每样x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=125;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【比翼图纸】x10（甜蜜七夕每样x100）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=126;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【比翼图纸】x100（甜蜜七夕每样x1000）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=127;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=436;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【比翼双飞の婚戒】（典藏版）</font></a>";
echo "<font color=black>（【比翼图纸】x150）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=55;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=437;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【比翼双飞の婚链】（典藏版）</font></a>";
echo "<font color=black>（【比翼图纸】x150）</font>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=56;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


/*


echo "<font color=red>【喜鹊令】（甜蜜七夕每样x3000+〖金豆〗x200）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=128;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";










echo "<font color=red>〖七夕令〗（甜蜜七夕每样x3000+〖金豆〗x200）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=129;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
*/


} elseif ($npcc==1007) {//



$npcc=$npcc1;
$npcname="〖活动〗蓝铮";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="石榴裙下死做鬼也风流~~~";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>提示：以下为各类称号兑换详情查看人物状态栏（需要三样七夕材料〖鸳鸯帕〗〖姻缘草〗〖银心铃〗）</font>"."<br>";

echo "<font color=red>〖鹊桥仙子〗（每样x100+〖金豆〗x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=130;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>〖谦谦公子〗（每样x100+〖金豆〗x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=131;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>〖娇美宠儿〗（每样x100+〖金豆〗x120）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=132;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>〖柔情郎君〗（每样x100+〖金豆〗x120）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=133;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";







} elseif ($npcc==1008) {//



$npcc=$npcc1;
$npcname="〖活动〗体育老师";
echo "<font color=red>$npcname</font>"."<br>";



$npctake="昨晚用功了没？？来找我聊聊人生（开学活动期间每天可获得【铅球】一个）";
echo "<font color=black>$npctake</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=227;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>偷取体育老师的【铅球】~~</font></a>"."<br>";


echo "<font color=red>提示：活动期间每天可获取【铅球】x1（满足【铅球】x7后请及时兑换体育老师很忙的要赶紧回家交功课哦~~~）</font>"."<br>";
echo "<font color=red>备注：以下称号，具体信息查看人物状态</font>"."<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<font color=black>称号：〖西游新秀〗</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=154;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";




} elseif ($npcc==1009) {//





$npcc1=$npcc;
$hdid=228;
$npcc=$hdid;	
include("./ini/hd_ini.php");

$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
$hdlq=2;
} else{	
}



//如果跨天则重置次数和时间
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=0 where hdid=$hdid";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => '0']);	
$hdcs=0;

} else{	

} 

//如果跨天则重置次数和时间


$hdxzcs=10-$hdcs;



$npcc=$npcc1;
$npcname="〖活动〗脑筋急转弯老师";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";


$npctake="让老师来考考你";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>提示：开学活动期间可在脑筋急转弯老师这里参与答题（每答对一题可获得【奖状】x1）</font>"."<br>";
echo "<font color=red>提示：开学活动期间每充值10元可获得【奖状】x2</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=551;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>开始答题（剩余".$hdxzcs."次）</font></a>"."<br>";




echo "<font color=red>备注：以下称号，具体信息查看人物状态</font>"."<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<font color=black>称号：【科举答题】（【奖状】x25）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=155;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>称号：【举人】（【奖状】x25）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=156;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>称号：【榜眼】（【奖状】x25）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=157;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>熔炼：【1万西游声望卷轴】（【奖状】x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=158;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>熔炼</font></a>"."<br>";

echo "<font color=black>熔炼：【1万西游声望卷轴】x10（【奖状】x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=159;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>熔炼</font></a>"."<br>";

echo "<font color=black>熔炼：【1万法宝经验卷轴】（【奖状】x2）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=160;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>熔炼</font></a>"."<br>";

echo "<font color=black>熔炼：【1万法宝经验卷轴】x10（【奖状】x20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=161;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>熔炼</font></a>"."<br>";








} elseif ($npcc==1010) {//



$npcc=$npcc1;
$npcname="〖活动〗校长";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="学校刚开学缺一大批物资去收集点来吧（开学活动期间各大副本挑战掉落）";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>凑齐【粉笔】【橡皮擦】【铅笔】【墨水】〖女神同桌〗</font>"."<br>";

echo "<font color=black>〖开学礼包〗（每样x30）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=162;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>〖开学大礼包〗（每样x60）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=163;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>〖女神同桌〗x1（〖金豆〗x1）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=164;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>〖女神同桌〗x10（〖金豆〗x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=165;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=black>〖女神同桌〗x100（〖金豆〗x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=166;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=black>〖女神同桌〗x1000（〖金豆〗x1000）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=167;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

/*

echo "<font color=black>一键提交〖课本〗（〖课本〗=1积分）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=554;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>提交</font></a>"."<br>";

*/

} elseif ($npcc==1011) {
$npcname="李世民";
echo "<font color=red>$npcname</font>"."<br>";


} elseif ($npcc==1012) {//


} elseif ($npcc==1013) {//



} elseif ($npcc==1014) {//


} elseif ($npcc==1077) {//

$npcc=$npcc1;
$npcname="〖世界〗BOSS狩猎员";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="取世界BOSS首级可在我这兑换丰富的狩猎BOSS称号哦（各个世界boss有几率掉落〖BOSS如意令〗普通小概率，财神百分之百掉落）";
echo "<font color=black>$npctake</font>"."<br>";



echo "<font color=black>〖BOSS杀手〗=〖BOSS如意令〗x5〖金豆〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=170;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=black>〖猎魔之王〗=〖BOSS如意令〗x15〖金豆〗x25</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=171;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>〖BOSS终结者〗=〖BOSS如意令〗x35〖金豆〗x35</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=172;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>〖一骑当先〗=〖BOSS如意令〗x50〖金豆〗x50</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=173;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=black>〖新妖之王〗=〖BOSS如意令〗x70〖金豆〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=174;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

} elseif ($npcc==1078) {//

$npcc=$npcc1;
$npcname="〖活动〗至尊宝（抢榜）";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="收集紫霞眼泪找回意中人";
echo "<font color=black>$npctake</font>"."<br>";

echo "<font color=black>一键提交〖紫霞眼泪〗（〖紫霞眼泪〗=1积分）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=563;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>提交</font></a>"."<br>";

} elseif ($npcc==1079) {//
$npcc=$npcc1;
$npcname="〖活动〗吴刚";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="赏花赏月赏秋香~~~";
echo "<font color=black>$npctake</font>"."<br>";

/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=296;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>中秋赏月（每天一次）</font></a>"."<br>";
*/




echo "<font color=red>备注：以下称号，具体信息查看人物状态</font>"."<br>";
echo "<font color=black>---------------------</font>"."<br>";

echo "<font color=red>温馨提示：中秋活动期间每充值10元赠送【桂花】x5（绝对的优惠哦~~机会不要错过）</font>"."<br>";
echo "<font color=black>称号：〖至尊天圣〗（【桂花糕】x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=222;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>称号：〖望门贵族〗（【桂花糕】x11）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=223;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>称号：〖至尊红颜〗（【桂花糕】x12）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=224;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>称号：〖昆仑至尊〗（【桂花糕】x15）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=225;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>称号：〖万法不侵〗（【桂花糕】x15）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=226;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>称号：〖乾坤唯仙〗（【桂花糕】x15）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=227;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>称号：〖名动天下〗（【桂花糕】x20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=228;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>称号：〖蓬莱至尊〗（【桂花糕】x20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=229;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>称号：〖天下至尊〗（【桂花糕】x25）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=230;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";




echo "<font color=black>称号：〖王者宝石包〗（3个）（【桂花糕】x20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=231;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";








} elseif ($npcc==1080) {//
$npcc=$npcc1;
$npcname="〖活动〗嫦娥姐姐";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="各大副本通天塔掉落制作月饼礼盒材料【糯米粉】x20〖香甜桂花〗x20〖玉兔蜜糖〗x20";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>提示充值〖嫦娥月饼礼盒〗【糯米粉】哦宝贝多多~~具体关注首页公告</font>"."<br>";


echo "<font color=black>【糯米粉】x10（〖金豆〗x1）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=232;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=black>【糯米粉】x100（〖金豆〗x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=233;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>【糯米粉】x1000（〖金豆〗x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=234;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=black>〖风花月饼礼盒〗</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=235;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


echo "<font color=black>〖雪月月饼礼盒〗</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=236;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


echo "<font color=black>〖金秋月饼礼盒〗</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=237;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


echo "<font color=black>〖鸿福月饼礼盒〗</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=238;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=black>〖风花月饼礼盒〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=239;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


echo "<font color=black>〖雪月月饼礼盒〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=240;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


echo "<font color=black>〖金秋月饼礼盒〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=241;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


echo "<font color=black>〖鸿福月饼礼盒〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=242;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";



echo "<br>";

/*
echo "<font color=red>〖玉兔月饼〗（〖玉兔月饼〗=1中秋积分）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=609;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>一键提交</font></a>"."<br>";

*/



  } elseif ($npcc==1081) {
$npcname="龟仙人（时装兑换）";
$npctake="潮流时尚的龟仙人（可用【金秋的思念】兑换时装哦）";
echo "<font color=red>$npcname</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=$npcc;echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";








echo "<font color=black>你需要兑换什么时装呢？</font>"."<br>";


echo "<font color=red>〖时装凭证〗(200金豆)</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=243;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>---------------------</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=621;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小恶魔の魔翼】</font></a>";
echo "<font color=black>(100金秋)</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=71;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=622;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小恶魔の魔杖】</font></a>";
echo "<font color=black>(100金秋)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=72;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=623;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小恶魔の魔盾】</font></a>";
echo "<font color=black>(100金秋)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=73;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=624;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小恶魔の魔镜】</font></a>";
echo "<font color=black>(100金秋)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=74;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=625;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小恶魔の魔服】</font></a>";
echo "<font color=black>(100金秋)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=75;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=626;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小恶魔の魔靴】</font></a>";
echo "<font color=black>(100金秋)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=76;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=627;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小恶魔の魔戒】</font></a>";
echo "<font color=black>(100金秋)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=77;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=628;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小恶魔の魔链】</font></a>";
echo "<font color=black>(100金秋)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=78;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=629;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小恶魔の魔袍】</font></a>";
echo "<font color=black>(100金秋)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=79;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=415;
$npc[]=630;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【小恶魔の十字勋章】</font></a>";
echo "<font color=black>(100金秋)</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=91;
$npc[]=80;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";




} elseif ($npcc==1082) {//
$npcc=$npcc1;
$npcname="〖活动〗爱国富商（领红旗，升国旗）";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="爱国之心，人人有责~~~";
echo "<font color=black>$npctake</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=304;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>领取【五星红旗】【国庆金锤】（每天一次）</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=634;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>我要升国旗（需要【五星红旗】x1）</font></a>"."<br>";


} elseif ($npcc==1083) {//
$npcc=$npcc1;
$npcname="〖活动〗国庆大使（字体兑换,抢榜）";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="爱国之心，人人有责~~~凑齐欢度国庆可兑换价值不菲的礼物哦";
echo "<font color=black>$npctake</font>"."<br>";


echo "<font color=red>【欢】（〖国庆万能字〗）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=277;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【欢】x10（〖国庆万能字〗x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=278;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【度】（〖国庆万能字〗）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=279;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【度】x10（〖国庆万能字〗x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=280;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【国】（〖国庆万能字〗）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=281;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【国】x10（〖国庆万能字〗x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=282;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【庆】（〖国庆万能字〗）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=283;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【庆】x10（〖国庆万能字〗x10）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=284;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【国庆宝箱】（欢度国庆每样x50）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=285;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>【国庆宝箱】x10（欢度国庆每样x500）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=286;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=red>------------大佬兑换区-------------</font>"."<br>";




echo "<font color=red>【欢】x100（〖国庆万能字〗x100）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=287;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=red>【度】x100（〖国庆万能字〗x100）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=288;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=red>【国】x100（〖国庆万能字〗x100）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=289;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=red>【庆】x100（〖国庆万能字〗x100）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=290;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>【欢】x1000（〖国庆万能字〗x1000）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=291;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=red>【度】x1000（〖国庆万能字〗x1000）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=292;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=red>【国】x1000（〖国庆万能字〗x1000）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=293;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=red>【庆】x1000（〖国庆万能字〗x1000）-</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=294;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>------------大佬兑换区-------------</font>"."<br>";
/*

echo "<font color=red>〖国庆愉快卡〗（〖国庆愉快卡〗=1国庆积分）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=637;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>一键提交</font></a>"."<br>";
*/
} elseif ($npcc==1202) {//
$npcc=$npcc1;
$npcname="〖采花〗百花仙子";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="亲爱的玩家每日限时采花哦~~(15:00开启15:30结束)";
echo "<font color=black>$npctake</font>"."<br>";



echo "<font color=red>【尊享VIP】（月卡）=〖采花花魁〗x100</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=299;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";







//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=646;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【采花大盗】（说明）</font></a>"."<br>";



$nowtime=date('Y-m-d');
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=644;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【采花大盗】排名(".$nowtime.")</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=645;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【采花大盗】（领取奖励）</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=175;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【百花秘境】（传送）（采花大盗活动）</font></a>"."<br>";

} elseif ($npcc==1203) {//
$npcc=$npcc1;
$npcname="〖活动〗【小果】（制作蛋糕）";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="【小果】：从开区就在，一直被模仿，从未被遗忘~~~（有一定的几率获得各种天数尊享月卡vip哦）";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>制作材料包含鸟蛋,奶油,白糖,牛奶</font>"."<br>";
echo "<font color=blue>〖鲜果蛋糕〗（制作材料每样x50+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=300;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";
echo "<font color=blue>〖奶油蛋糕〗（制作材料每样x70+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=301;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖草莓蛋糕〗（制作材料每样x90+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=302;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖焦糖蛋糕〗（制作材料每样x120+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=303;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖香椰子蛋糕〗（制作材料每样x150+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=304;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


echo "<font color=blue>〖鲜果蛋糕〗x10（制作材料每样x50+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=305;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";
echo "<font color=blue>〖奶油蛋糕〗x10（制作材料每样x70+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=306;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖草莓蛋糕〗x10（制作材料每样x90+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=307;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖焦糖蛋糕〗x10（制作材料每样x120+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=308;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖香椰子蛋糕〗x10（制作材料每样x150+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=309;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";



} elseif ($npcc==1204) {//
$npcc=$npcc1;
$npcname="〖活动〗公主的小朋友（制作饼干）";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="公主的小朋友：新晋级的大佬，低调低调（有一定的几率获得各种天数尊享月卡vip哦）";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>制作材料包含鸟蛋,面粉,黄油,牛奶</font>"."<br>";
echo "<font color=blue>〖曲奇饼干〗（制作材料每样x50+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=310;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";
echo "<font color=blue>〖蛋卷饼干〗（制作材料每样x70+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=311;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖夹心饼干〗（制作材料每样x90+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=312;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖芝麻饼干〗（制作材料每样x120+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=313;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖杏仁饼干〗（制作材料每样x150+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=314;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


echo "<font color=blue>〖曲奇饼干〗x10（制作材料每样x50+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=315;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";
echo "<font color=blue>〖蛋卷饼干〗x10（制作材料每样x70+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=316;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖夹心饼干〗x10（制作材料每样x90+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=317;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖芝麻饼干〗x10（制作材料每样x120+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=318;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖杏仁饼干〗x10（制作材料每样x150+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=319;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


} elseif ($npcc==1205) {//
$npcc=$npcc1;
$npcname="〖活动〗及时雨【宋江】（制作面包）";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="及时雨【宋江】：一直默默无闻的大佬，淡定淡定（有一定的几率获得各种天数尊享月卡vip哦）";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>制作材料包含鸟蛋,奶油,小麦粉,牛奶</font>"."<br>";
echo "<font color=blue>〖奶油面包〗（制作材料每样x50+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=320;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";
echo "<font color=blue>〖奶香面包〗（制作材料每样x70+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=321;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖抹茶面包〗（制作材料每样x90+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=322;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖椰蓉面包〗（制作材料每样x120+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=323;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖毛毛虫面包〗（制作材料每样x150+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=324;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


echo "<font color=blue>〖奶油面包〗x10（制作材料每样x50+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=325;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";
echo "<font color=blue>〖奶香面包〗x10（制作材料每样x70+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=326;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖抹茶面包〗x10（制作材料每样x90+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=327;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖椰蓉面包〗x10（制作材料每样x120+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=328;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖毛毛虫面包〗x10（制作材料每样x150+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=329;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


} elseif ($npcc==1206) {//
$npcc=$npcc1;
$npcname="〖活动〗南风（制作巧克力）";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="南风：嗜赌成性，花花公子，赌场得意，春风满面（有一定的几率获得各种天数尊享月卡vip哦）";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>制作材料包含巧克力酱,可可粉,黄油,力娇酒</font>"."<br>";
echo "<font color=blue>〖酥圈巧克力〗（制作材料每样x50+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=330;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";
echo "<font color=blue>〖浓夫巧克力〗（制作材料每样x70+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=331;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖米雪巧克力〗（制作材料每样x90+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=332;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖乐荷巧克力〗（制作材料每样x120+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=333;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖香雪巧克力〗（制作材料每样x150+5000千万银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=334;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


echo "<font color=blue>〖酥圈巧克力〗x10（制作材料每样x50+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=335;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";
echo "<font color=blue>〖浓夫巧克力〗x10（制作材料每样x70+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=336;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖米雪巧克力〗x10（制作材料每样x90+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=337;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖乐荷巧克力〗x10（制作材料每样x120+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=338;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";

echo "<font color=blue>〖香雪巧克力〗x10（制作材料每样x150+5亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=339;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";


} elseif ($npcc==1207) {//



$npcc=$npcc1;
$npcname="〖活动〗姝菟（抢积分榜）";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="姝菟：小轩西游2000元开区首充，为游戏打下了坚实的基础";
echo "<font color=black>$npctake</font>"."<br>";



echo "<font color=black>一键提交〖西游蛋糕〗（〖西游蛋糕〗=1积分）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=651;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>提交</font></a>"."<br>";


} elseif ($npcc==1208) {//
$npcc=$npcc1;
$npcname="〖活动〗永不言败（生日甜品礼盒）";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="永不言败：一言不合就开干，谁挡路就杀谁，虐遍天下无对手";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>兑换材料：字体，半周年庆典</font>"."<br>";
echo "<font color=blue>〖生日甜品礼盒〗（每样200+2亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=340;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖生日甜品礼盒〗x10（每样2000+20亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=341;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=blue>〖生日甜品礼盒〗x100（每样2w+200亿银两）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=342;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


} elseif ($npcc==1209) {//
$npcc=$npcc1;
$npcname="〖活动〗LoKC（贩卖原材料）";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="LoKC：一直默默为游戏提供游戏内容，159.199转职内容都有参与不知被自己坑道没";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>兑换材料：〖原料购物票〗</font>"."<br>";
echo "<font color=blue>〖鸟蛋〗x10（票x1）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=343;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖奶油〗x10（票x1）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=344;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖白糖〗x10（票x1）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=345;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖牛奶〗x10（票x1）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=346;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖面粉〗x10（票x1）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=347;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=blue>〖黄油〗x10（票x1）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=348;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖小麦粉〗x10（票x1）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=349;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖巧克力酱〗x10（票x1）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=350;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖可可粉〗x10（票x1）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=351;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖力娇酒〗x10（票x1）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=352;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";





echo "<font color=red>========10倍========</font>"."<br>";


echo "<font color=blue>〖鸟蛋〗x100（票x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=353;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖奶油〗x100（票x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=354;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖白糖〗x100（票x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=355;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖牛奶〗x100（票x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=356;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖面粉〗x100（票x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=357;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=blue>〖黄油〗x100（票x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=358;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖小麦粉〗x100（票x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=359;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖巧克力酱〗x100（票x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=360;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖可可粉〗x100（票x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=361;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖力娇酒〗x100（票x10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=362;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";




echo "<font color=red>========100倍========</font>"."<br>";


echo "<font color=blue>〖鸟蛋〗x1000（票x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=363;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖奶油〗x1000（票x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=364;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖白糖〗x1000（票x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=365;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖牛奶〗x1000（票x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=366;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖面粉〗x1000（票x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=367;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=blue>〖黄油〗x1000（票x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=368;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖小麦粉〗x1000（票x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=369;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖巧克力酱〗x1000（票x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=370;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖可可粉〗x1000（票x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=371;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖力娇酒〗x1000（票x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=372;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";






echo "<font color=red>========1000倍========</font>"."<br>";


echo "<font color=blue>〖鸟蛋〗x10000（票x1000）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=373;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖奶油〗x10000（票x1000）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=374;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖白糖〗x10000（票x1000）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=375;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖牛奶〗x10000（票x1000）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=376;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖面粉〗x10000（票x1000）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=377;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



echo "<font color=blue>〖黄油〗x10000（票x1000）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=378;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖小麦粉〗x10000（票x1000）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=379;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖巧克力酱〗x10000（票x1000）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=380;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=blue>〖可可粉〗x10000（票x1000）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=381;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=blue>〖力娇酒〗x10000（票x1000）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=382;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";



} elseif ($npcc==1210) {//



$npcc=$npcc1;
$npcname="〖日常〗伏羲仙人（福满阵）";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="看守各大阵法的仙人";
echo "<font color=black>$npctake</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=652;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>玩法介绍</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=468;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>领取【伏羲阵图】（v3以上每日）</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=423;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换【伏羲阵图】（10紫星币）</font></a>"."<br>";

/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=383;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换【伏羲阵图】（100金豆）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=384;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换【伏羲阵图】x10（900金豆）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=385;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换【伏羲阵图】x100（8000金豆）</font></a>"."<br>";
*/


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=386;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换〖护身符〗x1（30金豆）</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=387;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换〖护身符〗x10（280金豆）</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=388;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换〖护身符〗x100（2500金豆）</font></a>"."<br>";


echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=186;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入【伏羲大阵】</font></a>"."<br>";



} elseif ($npcc==1314) {//

$npcc=$npcc1;
$npcname="〖活动〗摔伤的老人";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="〖活动〗摔伤的老人：小仙卿，我本是高家庄人氏，重阳节路过长安想去登高，岂料遇上了这附近的妖怪，把我身上的带着的【重阳糕】原料夺去了。小仙卿你帮我找回来，我给你做美味的【重阳糕】和传授你种植摇钱树的技术。";
echo "<font color=black>$npctake</font>"."<br>";




/*

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=470;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>领取〖小公主の激素〗（每日一次）</font></a>"."<br>";
echo "<font color=red>提示：活动期间每天可获取〖小公主の激素〗（可用于农场快速催生）</font>"."<br>";
*/
echo "<br>";
echo "<font color=red>备注：以下【重阳糕】制作需要【面粉】【红枣】【栗子】【杏仁】</font>"."<br>";
echo "<font color=black>【重阳糕】x1（每样x100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=389;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";
echo "<font color=black>【重阳糕】x10（每样x1000）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=390;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>制作</font></a>"."<br>";
echo "<br>";



echo "<font color=red>备注：以下称号，具体信息查看人物状态</font>"."<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<font color=black>称号：〖神乎其技〗=【重阳糕】x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=391;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>称号：〖灵机百变〗=【重阳糕】x10〖紫星币〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=392;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>称号：〖姐是白富美〗=【重阳糕】x10〖紫星币〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=393;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>---------------------</font>"."<br>";

echo "<font color=black>激素：〖小公主の激素〗=【重阳糕】x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=410;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>激素：〖小公主の激素〗x10=【重阳糕】x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=411;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>激素：〖小公主の激素〗=【重阳糕】x5〖紫星币〗x5</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=412;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>激素：〖小公主の激素〗x10=【重阳糕】x50〖紫星币〗x50</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=413;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";






} elseif ($npcc==1315) {//

$npcc=$npcc1;
$npcname="〖活动〗奇怪的商人";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="〖活动〗奇怪的商人：小仙卿，我这里用〖小公主の材料票〗能买到各种活动材料";
echo "<font color=black>$npctake</font>"."<br>";



echo "<font color=red>=============1倍===============</font>"."<br>";
echo "<font color=black>【面粉】x10=〖小公主の材料票〗x1</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=394;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【红枣】x10=〖小公主の材料票〗x1</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=395;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【栗子】x10=〖小公主の材料票〗x1</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=396;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【杏仁】x10=〖小公主の材料票〗x1</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=397;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=red>=============1倍===============</font>"."<br>";

echo "<font color=red>=============10倍===============</font>"."<br>";
echo "<font color=black>【面粉】x100=〖小公主の材料票〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=398;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【红枣】x100=〖小公主の材料票〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=399;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【栗子】x100=〖小公主の材料票〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=400;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【杏仁】x100=〖小公主の材料票〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=401;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=red>=============10倍===============</font>"."<br>";


echo "<font color=red>=============100倍===============</font>"."<br>";
echo "<font color=black>【面粉】x1000=〖小公主の材料票〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=402;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【红枣】x1000=〖小公主の材料票〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=403;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【栗子】x1000=〖小公主の材料票〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=404;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【杏仁】x1000=〖小公主の材料票〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=405;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=red>=============100倍===============</font>"."<br>";

echo "<font color=red>=============1000倍===============</font>"."<br>";
echo "<font color=black>【面粉】x10000=〖小公主の材料票〗x1000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=406;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【红枣】x10000=〖小公主の材料票〗x1000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=407;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【栗子】x10000=〖小公主の材料票〗x1000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=408;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【杏仁】x10000=〖小公主の材料票〗x1000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=409;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=red>=============1000倍===============</font>"."<br>";




} elseif ($npcc==1316) {//

$npcc=$npcc1;
$npcname="〖活动〗重阳婆婆";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="〖活动〗重阳婆婆：〖小公主の仙竹〗能能在我这里兑换和提交哦";
echo "<font color=black>$npctake</font>"."<br>";

echo "<font color=blue>以下为农场材料和抢榜材料</font>"."<br>";
echo "<font color=red>=============10倍===============</font>"."<br>";
echo "<font color=black>【黑沃土】x100=〖小公主の材料票〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=414;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【仙玉露】x100=〖小公主の材料票〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=415;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>〖小公主の仙竹〗x100=〖小公主の材料票〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=416;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";


echo "<font color=red>=============10倍===============</font>"."<br>";


echo "<font color=red>=============100倍===============</font>"."<br>";
echo "<font color=black>【黑沃土】x1000=〖小公主の材料票〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=417;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【仙玉露】x1000=〖小公主の材料票〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=418;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";

echo "<font color=black>〖小公主の仙竹〗x1000=〖小公主の材料票〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=419;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=red>=============100倍===============</font>"."<br>";


echo "<font color=red>=============1000倍===============</font>"."<br>";
echo "<font color=black>【黑沃土】x10000=〖小公主の材料票〗x1000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=420;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=black>【仙玉露】x10000=〖小公主の材料票〗x1000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=421;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";

echo "<font color=black>〖小公主の仙竹〗x10000=〖小公主の材料票〗x1000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=422;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>"."<br>";
echo "<font color=red>=============1000倍===============</font>"."<br>";
echo "<br>";


echo "<font color=red>【一键提交〖小公主の仙竹〗（〖小公主の仙竹〗=1积分）】</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=667;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>提交</font></a>"."<br>";



} elseif ($npcc==1318) {//

$npcc=$npcc1;
$npcname="〖活动〗西方传教士";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="〖活动〗西方传教士：我准备了一些好吃的糖果，按照我的提示把对应颜色的糖果找出来，我把好吃的糖果奖励给你";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>积分榜（答对1分答错扣1分）</font>"."<br>";


include("./ini/color_ini.php");
$hdlq=1;
$hdtime=($iniFile->getItem('答题时间','初始'));
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
$nowtime=date('Y-m-d H:i:s');
$iniFile->updItem('答题时间', ['初始' => $nowtime]);
} else{	
}
//时间验证
include("./ini/color_ini.php");
$hdtime=($iniFile->getItem('答题时间','初始'));
$vipqytime=300;//系统消息存活秒数5分钟

if ($hdtime!="") {
$startdate=$hdtime;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));
if($minute <= $vipqytime){
$minute1=$vipqytime-$minute;
$minute=floor($minute1/60);
$second=$minute1%60;

if($minute > 0){		
echo "<font color=black>剩余：".$minute."分".$second."秒</font>"."<br>";
} else{
echo "<font color=black>剩余：".$second."秒</font>"."<br>";
} 	
$vipqy=2;	
} else{
$vipqy=1;	
}
} else{
$vipqy=1;	
}
if($vipqy == 1){
echo "<font color=red>答题时间已到！！请明天再来</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1; 
$cdid[]=$cmid;
$clj[]=674;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖紫星币〗x10重置活动</font></a>"."<br>";
} else{




$colortm= rand(1, 2);
if ($colortm==1) {
//随机颜色，红，黑，蓝，橙，绿，紫，黄，粉
include("./ini/color_ini.php");
$colorid= rand(1, 8);
$iniFile->updItem('正确颜色', ['初始' => $colorid]);
$iniFile->updItem('题目', ['初始' => '1']);
if ($colorid==1) {
$colormz="红色";	
} elseif ($colorid==2) {	
$colormz="黑色";
} elseif ($colorid==3) {	
$colormz="蓝色";
} elseif ($colorid==4) {	
$colormz="橙色";
} elseif ($colorid==5) {	
$colormz="绿色";
} elseif ($colorid==6) {	
$colormz="紫色";
} elseif ($colorid==7) {	
$colormz="橘黄";
} elseif ($colorid==8) {	
$colormz="粉色";
} else {
}	
echo "</br>";
echo "<font color=black>请找出".$colormz."颜色糖果</font>"."<br>";
$arr[] ="1_red";
$arr[] ="2_black";
$arr[] ="3_blue";
$arr[] ="4_orange";
$arr[] ="5_green";
$arr[] ="6_purple";
$arr[] ="7_bisque";
$arr[] ="8_pink";
shuffle($arr);
//随机颜色文字
$arr1[] ="红色";
$arr1[] ="黑色";
$arr1[] ="蓝色";
$arr1[] ="橙色";
$arr1[] ="绿色";
$arr1[] ="紫色";
$arr1[] ="橘黄";
$arr1[] ="粉色";
shuffle($arr1);
$arr3 = explode("_",$arr[0]);
$arrid=$arr3[0];
$arrmz=$arr3[1];

echo "<font color=black>1.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[0]</font></a>"."<br>";
$arr3 = explode("_",$arr[1]);
$arrid=$arr3[0];
$arrmz=$arr3[1];

echo "<font color=black>2.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[1]</font></a>"."<br>";


$arr3 = explode("_",$arr[2]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>3.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[2]</font></a>"."<br>";

$arr3 = explode("_",$arr[3]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>4.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[3]</font></a>"."<br>";

$arr3 = explode("_",$arr[4]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>5.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[4]</font></a>"."<br>";

$arr3 = explode("_",$arr[5]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>6.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[5]</font></a>"."<br>";

$arr3 = explode("_",$arr[6]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>7.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[6]</font></a>"."<br>";

$arr3 = explode("_",$arr[7]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>8.</font>";
//cmd及超链接值
$cmid=$cmid+1; 
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[7]</font></a>"."<br>";




} else {


//随机颜色，红，黑，蓝，橙，绿，紫，黄，粉
include("./ini/color_ini.php");
$colorid= rand(1, 8);
$iniFile->updItem('正确文字', ['初始' => $colorid]);
$iniFile->updItem('题目', ['初始' => '2']);
if ($colorid==1) {
$colormz="红色";	
} elseif ($colorid==2) {	
$colormz="黑色";
} elseif ($colorid==3) {	
$colormz="蓝色";
} elseif ($colorid==4) {	
$colormz="橙色";
} elseif ($colorid==5) {	
$colormz="绿色";
} elseif ($colorid==6) {	
$colormz="紫色";
} elseif ($colorid==7) {	
$colormz="橘黄";
} elseif ($colorid==8) {	
$colormz="粉色";
} else {
}	
echo "</br>";
echo "<font color=black>请找出".$colormz."文字糖果</font>"."<br>";
$arr[] ="red";
$arr[] ="black";
$arr[] ="blue";
$arr[] ="orange";
$arr[] ="green";
$arr[] ="purple";
$arr[] ="bisque";
$arr[] ="pink";
shuffle($arr);
//随机颜色文字
$arr1[] ="1_红色";
$arr1[] ="2_黑色";
$arr1[] ="3_蓝色";
$arr1[] ="4_橙色";
$arr1[] ="5_绿色";
$arr1[] ="6_紫色";
$arr1[] ="7_橘黄";
$arr1[] ="8_粉色";
shuffle($arr1);
$arr3 = explode("_",$arr1[0]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>1.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[0]>$arrmz</font></a>"."<br>";

$arr3 = explode("_",$arr1[1]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>2.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[1]>$arrmz</font></a>"."<br>";


$arr3 = explode("_",$arr1[2]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>3.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[2]>$arrmz</font></a>"."<br>";

$arr3 = explode("_",$arr1[3]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>4.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[3]>$arrmz</font></a>"."<br>";

$arr3 = explode("_",$arr1[4]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>5.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[4]>$arrmz</font></a>"."<br>";

$arr3 = explode("_",$arr1[5]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>6.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[5]>$arrmz</font></a>"."<br>";

$arr3 = explode("_",$arr1[6]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>7.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[6]>$arrmz</font></a>"."<br>";

$arr3 = explode("_",$arr1[7]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>8.</font>";
//cmd及超链接值
$cmid=$cmid+1; 
$cdid[]=$cmid;
$clj[]=670;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[7]>$arrmz</font></a>"."<br>";

}



}


} elseif ($npcc==1319) {//

$npcc=$npcc1;
$npcname="〖活动〗西方传教士";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="〖活动〗西方传教士：我准备了一些好吃的糖果，按照我的提示把对应颜色的糖果找出来，我把好吃的糖果奖励给你";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>奖励（答对奖励云梯石，护身符，金豆，碎银，帝王石，荣誉宝石-至尊宝石，双四八倍掉宝，尊贵vip卡答错扣10秒时间）</font>"."<br>";


include("./ini/color1_ini.php");
$hdlq=1;
$hdtime=($iniFile->getItem('答题时间','初始'));
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
$nowtime=date('Y-m-d H:i:s');
$iniFile->updItem('答题时间', ['初始' => $nowtime]);
} else{	
}
//时间验证
include("./ini/color1_ini.php");
$hdtime=($iniFile->getItem('答题时间','初始'));
$vipqytime=180;//系统消息存活秒数3分钟

if ($hdtime!="") {
$startdate=$hdtime;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));
if($minute <= $vipqytime){
$minute1=$vipqytime-$minute;
$minute=floor($minute1/60);
$second=$minute1%60;

if($minute > 0){		
echo "<font color=black>剩余：".$minute."分".$second."秒</font>"."<br>";
} else{
echo "<font color=black>剩余：".$second."秒</font>"."<br>";
} 	
$vipqy=2;	
} else{
$vipqy=1;	
}
} else{
$vipqy=1;	
}


if($vipqy == 1){
echo "<font color=red>答题时间已到！！请明天再来</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1; 
$cdid[]=$cmid;
$clj[]=672;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖紫星币〗x5重置活动</font></a>"."<br>";
} else{




$colortm= rand(1, 2);
if ($colortm==1) {
//随机颜色，红，黑，蓝，橙，绿，紫，黄，粉
include("./ini/color1_ini.php");
$colorid= rand(1, 8);
$iniFile->updItem('正确颜色', ['初始' => $colorid]);
$iniFile->updItem('题目', ['初始' => '1']);
if ($colorid==1) {
$colormz="红色";	
} elseif ($colorid==2) {	
$colormz="黑色";
} elseif ($colorid==3) {	
$colormz="蓝色";
} elseif ($colorid==4) {	
$colormz="橙色";
} elseif ($colorid==5) {	
$colormz="绿色";
} elseif ($colorid==6) {	
$colormz="紫色";
} elseif ($colorid==7) {	
$colormz="橘黄";
} elseif ($colorid==8) {	
$colormz="粉色";
} else {
}	
echo "</br>";
echo "<font color=black>请找出".$colormz."颜色糖果</font>"."<br>";
$arr[] ="1_red";
$arr[] ="2_black";
$arr[] ="3_blue";
$arr[] ="4_orange";
$arr[] ="5_green";
$arr[] ="6_purple";
$arr[] ="7_bisque";
$arr[] ="8_pink";
shuffle($arr);
//随机颜色文字
$arr1[] ="红色";
$arr1[] ="黑色";
$arr1[] ="蓝色";
$arr1[] ="橙色";
$arr1[] ="绿色";
$arr1[] ="紫色";
$arr1[] ="橘黄";
$arr1[] ="粉色";
shuffle($arr1);
$arr3 = explode("_",$arr[0]);
$arrid=$arr3[0];
$arrmz=$arr3[1];

echo "<font color=black>1.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[0]</font></a>"."<br>";
$arr3 = explode("_",$arr[1]);
$arrid=$arr3[0];
$arrmz=$arr3[1];

echo "<font color=black>2.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[1]</font></a>"."<br>";


$arr3 = explode("_",$arr[2]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>3.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[2]</font></a>"."<br>";

$arr3 = explode("_",$arr[3]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>4.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[3]</font></a>"."<br>";

$arr3 = explode("_",$arr[4]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>5.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[4]</font></a>"."<br>";

$arr3 = explode("_",$arr[5]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>6.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[5]</font></a>"."<br>";

$arr3 = explode("_",$arr[6]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>7.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[6]</font></a>"."<br>";

$arr3 = explode("_",$arr[7]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>8.</font>";
//cmd及超链接值
$cmid=$cmid+1; 
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arrmz>$arr1[7]</font></a>"."<br>";




} else {


//随机颜色，红，黑，蓝，橙，绿，紫，黄，粉
include("./ini/color1_ini.php");
$colorid= rand(1, 8);
$iniFile->updItem('正确文字', ['初始' => $colorid]);
$iniFile->updItem('题目', ['初始' => '2']);
if ($colorid==1) {
$colormz="红色";	
} elseif ($colorid==2) {	
$colormz="黑色";
} elseif ($colorid==3) {	
$colormz="蓝色";
} elseif ($colorid==4) {	
$colormz="橙色";
} elseif ($colorid==5) {	
$colormz="绿色";
} elseif ($colorid==6) {	
$colormz="紫色";
} elseif ($colorid==7) {	
$colormz="橘黄";
} elseif ($colorid==8) {	
$colormz="粉色";
} else {
}	
echo "</br>";
echo "<font color=black>请找出".$colormz."文字糖果</font>"."<br>";
$arr[] ="red";
$arr[] ="black";
$arr[] ="blue";
$arr[] ="orange";
$arr[] ="green";
$arr[] ="purple";
$arr[] ="bisque";
$arr[] ="pink";
shuffle($arr);
//随机颜色文字
$arr1[] ="1_红色";
$arr1[] ="2_黑色";
$arr1[] ="3_蓝色";
$arr1[] ="4_橙色";
$arr1[] ="5_绿色";
$arr1[] ="6_紫色";
$arr1[] ="7_橘黄";
$arr1[] ="8_粉色";
shuffle($arr1);
$arr3 = explode("_",$arr1[0]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>1.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[0]>$arrmz</font></a>"."<br>";

$arr3 = explode("_",$arr1[1]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>2.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[1]>$arrmz</font></a>"."<br>";


$arr3 = explode("_",$arr1[2]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>3.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[2]>$arrmz</font></a>"."<br>";

$arr3 = explode("_",$arr1[3]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>4.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[3]>$arrmz</font></a>"."<br>";

$arr3 = explode("_",$arr1[4]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>5.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[4]>$arrmz</font></a>"."<br>";

$arr3 = explode("_",$arr1[5]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>6.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[5]>$arrmz</font></a>"."<br>";

$arr3 = explode("_",$arr1[6]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>7.</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[6]>$arrmz</font></a>"."<br>";

$arr3 = explode("_",$arr1[7]);
$arrid=$arr3[0];
$arrmz=$arr3[1];
echo "<font color=black>8.</font>";
//cmd及超链接值
$cmid=$cmid+1; 
$cdid[]=$cmid;
$clj[]=671;
$npc[]=$arrid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=$arr[7]>$arrmz</font></a>"."<br>";

}



}

} elseif ($npcc==1320) {//
$npcc=$npcc1;
$npcname="〖活动〗南瓜大仙";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="〖活动〗南瓜大仙：凑齐万圣节快乐五字兑换南瓜宝箱哦~~";
echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>=============1倍===============</font>"."<br>";
echo "<font color=black>〖南瓜宝箱〗=万圣节快乐（每样）x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=424;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>=============10倍===============</font>"."<br>";
echo "<font color=black>〖南瓜宝箱〗x10=万圣节快乐（每样）x1000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=425;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>=============字体转换===============</font>"."<br>";

echo "<font color=red>=============10倍===============</font>"."<br>";
echo "<font color=black>【万】x10=〖万圣节万能字〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=426;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=black>【圣】x10=〖万圣节万能字〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=427;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>【节】x10=〖万圣节万能字〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=428;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>【快】x10=〖万圣节万能字〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=429;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>【乐】x10=〖万圣节万能字〗x10</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=430;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";




echo "<font color=red>=============100倍===============</font>"."<br>";
echo "<font color=black>【万】x100=〖万圣节万能字〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=431;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=black>【圣】x100=〖万圣节万能字〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=432;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>【节】x100=〖万圣节万能字〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=433;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>【快】x100=〖万圣节万能字〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=434;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=black>【乐】x100=〖万圣节万能字〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=435;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";




echo "<font color=red>=============称号兑换===============</font>"."<br>";



echo "<font color=black>〖制胜斗者〗=【万圣节捣蛋劵】x150</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=436;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=black>〖诛魔大神〗=【万圣节捣蛋劵】x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=437;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";





} elseif ($npcc==1321) {//
$npcc=$npcc1;
$npcname="〖活动〗竞猜使者";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="〖活动〗竞猜使者：一夜暴富不再是梦！！";
echo "<font color=black>$npctake</font>"."<br>";
$npcc=471;
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=1;
if ($hdtime=="") {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$npcc));
$hdlq=2;
} else{	
}
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1!=""||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$npcc";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$npcc => $nowtime]);


//随机将正确数字写入
include("./ini/jcyx_ini.php");
$iniFile->updItem('竞猜次数', ['初始' => '30']);
$iniFile->updItem('竞猜购买', ['初始' => '1']);


} else{	

} 














//随机将正确数字写入
include("./ini/jcyx_ini.php");
$jcgk=($iniFile->getItem('竞猜关卡','初始'));
$jccs=($iniFile->getItem('竞猜次数','初始'));
$jcgm=($iniFile->getItem('竞猜购买','初始'));
if($jcgm==1){
$zxb=10;
} elseif($jcgm==2){   
$zxb=20;
} elseif($jcgm==3){   
$zxb=30;
} elseif($jcgm==4){   
$zxb=40;
} elseif($jcgm==5){   
$zxb=50;
} elseif($jcgm==6){   
$zxb=60;
} elseif($jcgm==7){   
$zxb=70;
} elseif($jcgm==8){   
$zxb=80;
} elseif($jcgm==9){   
$zxb=90;
} elseif($jcgm==10){   
$zxb=100;
} else {
$zxb=9999999999;	
} 
if ($jcgk==1) {//如果没有值则添加新数据
$jcid= rand(1, 100);
$jcid1= rand(1, 100);
$jcid2=$jcid+$jcid1;
$iniFile->updItem('竞猜答案', ['初始' => $jcid]);
$iniFile->updItem('竞猜答案1', ['初始' => $jcid2]);
$iniFile->updItem('竞猜答案2', ['初始' => '1']);

} else{	
}



echo "<font color=black>竞猜关卡【第".$jcgk."关】</font>"."<br>";
echo "<font color=black>剩余竞猜【".$jccs."次】</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=682;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【开始竞猜】</font></a>"."<br>";




if($jcgm<=10){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=684;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买10次竞猜=【紫星币】x".$zxb."</font></a>"."<br>";
} else {
} 



} elseif ($npcc==1322) {//

$npcc=$npcc1;
$npcname="〖活动〗火鸡先生";
echo "<font color=red>$npcname</font>"."<br>";
$npctake="〖活动〗火鸡先生：疯狂的烤火鸡，火鸡也疯狂！！凑齐感恩节活动材料换取好吃的火鸡哦~火鸡材料=【烤火鸡】【南瓜饼】【红莓酱】【甜山芋】【玉蜀黎】";
echo "<font color=black>$npctake</font>"."<br>";


echo "<font color=black>$npctake</font>"."<br>";
echo "<font color=red>=============1倍===============</font>"."<br>";
echo "<font color=black>〖感恩火鸡礼包〗=（火鸡材料每样）x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=438;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


echo "<font color=red>=============10倍===============</font>"."<br>";
echo "<font color=black>〖感恩火鸡礼包〗x10=（火鸡材料每样）x1000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=439;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";
echo "<font color=red>=============100倍===============</font>"."<br>";
echo "<font color=black>〖感恩火鸡礼包〗x100=（火鸡材料每样）x10000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=440;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>=============【烤火鸡】100倍===============</font>"."<br>";
echo "<font color=black>【烤火鸡】x100=〖感恩票〗x100</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=441;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>=============【烤火鸡】1000倍===============</font>"."<br>";
echo "<font color=black>【烤火鸡】x1000=〖感恩票〗x1000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=442;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";

echo "<font color=red>=============【烤火鸡】10000倍===============</font>"."<br>";
echo "<font color=black>【烤火鸡】x10000=〖感恩票〗x10000</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=443;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换</font></a>"."<br>";


} elseif ($npcc==1323) {
include("./ini/kswin_ini.php");




$bz= rand(1, 10);
if($bz >=1&&$bz <=4){
$bz= rand(1, 80);
if($bz >=1&&$bz <=2){	
$win=21;
} elseif ($bz >=3&&$bz <=5) {	
$win=20;
} elseif ($bz >=6&&$bz <=10) {	
$win=19;
} elseif ($bz >=11&&$bz <=16) {	
$win=18;
} elseif ($bz >=17&&$bz <=23) {	
$win=17;
} elseif ($bz >=24&&$bz <=31) {	
$win=16;
} elseif ($bz >=32&&$bz <=40) {	
$win=15;
} elseif ($bz >=41&&$bz <=50) {	
$win=14;
} elseif ($bz >=51&&$bz <=60) {	
$win=13;
} elseif ($bz >=61&&$bz <=71) {	
$win=12;
} else{
$win=11;	
} 

$iniFile->updItem('矿山', ['初始' => $win]);//赢
} else{
$bz= rand(1, 80);
if($bz >=1&&$bz <=2){	
$win=10;
} elseif ($bz >=3&&$bz <=5) {	
$win=9;
} elseif ($bz >=6&&$bz <=10) {	
$win=8;
} elseif ($bz >=11&&$bz <=16) {	
$win=7;
} elseif ($bz >=17&&$bz <=23) {	
$win=6;
} elseif ($bz >=24&&$bz <=31) {	
$win=5;
} elseif ($bz >=32&&$bz <=40) {	
$win=4;
} elseif ($bz >=41&&$bz <=50) {	
$win=3;
} elseif ($bz >=51&&$bz <=60) {	
$win=2;
} elseif ($bz >=61&&$bz <=71) {	
$win=1;
} else{
$win=11;	
} 	
	
$iniFile->updItem('矿山', ['初始' => $win]);//输	
} 



$npcname="〖活动〗点石成金传送员";
echo "<font color=red>$npcname</font>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=0;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>攻击$npcname</font></a>"."<br>";

$npctake="亲爱的可用〖点石成金劵〗进入本区域（时间为五分钟）";

echo "<font color=black>在我这里可以让你一夜暴富（铁矿山掉率1倍，铜矿山掉率10倍，银矿山掉率50倍，金矿山掉率100倍，无视倍卡效果）</font>"."<br>";
echo "<font color=black>$npctake</font>"."<br>";
/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=302;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>领取练级卷（每天一次）</font></a>"."<br>";
*/
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=199;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入铁矿山（〖点石成金劵〗x1）</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=200;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入铜矿山（〖点石成金劵〗x10）</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=201;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入银矿山（〖点石成金劵〗x50）</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=202;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>进入金矿山（〖点石成金劵〗x100）</font></a>"."<br>";


echo "<font color=black>=======〖金矿石〗换购〖金矿券〗========</font>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=444;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖1金矿券〗x1=〖金矿石〗x1200</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=445;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖5金矿券〗x1=〖金矿石〗x6000</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=446;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖10金矿券〗x1=〖金矿石〗x12000</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=447;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖20金矿券〗x1=〖金矿石〗x24000</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=448;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖50金矿券〗x1=〖金矿石〗x60000</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=449;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖100金矿券〗x1=〖金矿石〗x120000</font></a>"."<br>";

echo "<font color=black>=======〖金矿石〗换购〖金矿券〗========</font>"."<br>";
echo "<font color=black>=======〖金矿券〗换购〖点石成金劵〗========</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=450;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖点石成金劵〗x1=〖1金矿券〗x1</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=451;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖点石成金劵〗x5=〖5金矿券〗x1</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=452;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖点石成金劵〗x10=〖10金矿券〗x1</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=453;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖点石成金劵〗x20=〖20金矿券〗x1</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=454;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖点石成金劵〗x50=〖50金矿券〗x1</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=455;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖点石成金劵〗x100=〖100金矿券〗x1</font></a>"."<br>";
echo "<font color=black>=======〖金矿券〗换购〖点石成金劵〗========</font>"."<br>";
echo "<font color=black>=======〖金矿券〗换购【充值卡】========</font>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=456;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【10元充值卡】=〖10金矿券〗x1</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=457;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【20元充值卡】=〖20金矿券〗x1</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=458;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【50元充值卡】=〖50金矿券〗x1</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=459;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【100元充值卡】=〖100金矿券〗x1</font></a>"."<br>";
echo "<font color=black>=======〖金矿券〗换购【充值卡】========</font>"."<br>";



 } else {

}


?>




