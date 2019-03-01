<?php




/*
//更新国家积分榜
include("./ini/gz03_ini.php");
$gj01=($iniFile->getCategory('id'));
$gj02=($iniFile->getCategory('id'));
$gj03=($iniFile->getCategory('国家积分'));
$m=count($gj01,0)-1; 
$i=0;
//将ini值存入数组方便使用
foreach(array_keys($gj01) as $key){
$keygj01[]=$gj01[$key];
}
//将ini值存入数组方便使用
foreach(array_keys($gj02) as $key){
$keygj02[]=$gj02[$key];
}
//将ini值存入数组方便使用
foreach(array_keys($gj03) as $key){
$keygj03[]=$gj03[$key];
}

for($d=0;$d<$m;$d++){
$i=$i+1;
if($keygj03[$i]>0){
$kidd[]=$keygj01[$i];
$kid[]=$keygj02[$i];
$ki[]=$keygj03[$i];
$hm=$hm+1;
}
}
$mt=0;
for($b=0;$b<$hm;$b++){

$xb[]=$ki[$mt]*10000+$kidd[$mt];
$fb[]=$ki[$mt]*10000;
$mt=$mt+1;
}
if ($hm>0){
rsort($fb);
rsort($xb);
} else{
}

$gjpm=0;
$mm=0;
$i=-1;
if ($hm>0){
for($b=0;$b<$hm;$b++){
$i=$i+1;
$xbbb=$xbb[$i];	
	
$xbb[]=$xb[$mt]-$fb[$mt];
$mt=$mt+1;

}

}
*/








include("./ini/gz01_ini.php");

$zlf1=($iniFile->getItem('国家名字','1'));
if($zlf1 ==""){
$zlf1="未";
} else{
}
$zlf2=($iniFile->getItem('国家名字','2'));
if($zlf2 ==""){
$zlf2="未";
} else{
}
$zlf3=($iniFile->getItem('国家名字','3'));
if($zlf3 ==""){
$zlf3="未";
} else{
}
$zlf4=($iniFile->getItem('国家名字','4'));
if($zlf4 ==""){
$zlf4="未";
} else{
}
$zlf5=($iniFile->getItem('国家名字','5'));
if($zlf5 ==""){
$zlf5="未";
} else{
}
$zlf7=($iniFile->getItem('国家名字','7'));
if($zlf7 ==""){
$zlf7="未";
} else{
}
$weekarray=array("7","1","2","3","4","5","6");
$week=$weekarray[date("w")];
if($week ==6){
$zlgj="无";
$gjjz="休整";
} else{
$zlgj=($iniFile->getItem('国家名字',$week));
$gjjz=($iniFile->getItem('君主名字',$week));
if($zlgj ==""){
$zlgj="无";
$gjjz="无";
}
}




if($week ==1){
$zcwz="傲来国";
$kfsj="今天21:00-21:30";
} elseif($week ==2){
$zcwz="宝象国";
$kfsj="今天21:00-21:30";
} elseif($week ==3){
$zcwz="乌鸡国";
$kfsj="今天21:00-21:30";
} elseif($week ==4){
$zcwz="女儿国";
$kfsj="今天21:00-21:30";
} elseif($week ==5){
$zcwz="车迟国";
$kfsj="今天21:00-21:30";
} elseif($week ==6){
$zcwz="无";
$kfsj="休整";
} elseif($week ==7){
$zcwz="祭赛国";
$kfsj="今天21:00-21:30";
} else{
$zcwz="无";

}



echo "<font color=black>[攻城-信息]</font>"."<br>";
echo "<font color=black>编号/位置/占领方</font>"."<br>";
echo "<font color=black>1.傲来国|（".$zlf1."占领）</font>"."<br>";
echo "<font color=black>2.宝象国|（".$zlf2."占领）</font>"."<br>";
echo "<font color=black>3.乌鸡国|（".$zlf3."占领）</font>"."<br>";
echo "<font color=black>4.女儿国|（".$zlf4."占领）</font>"."<br>";
echo "<font color=black>5.车迟国|（".$zlf5."占领）</font>"."<br>";
echo "<font color=black>6.祭赛国|（".$zlf7."占领）</font>"."<br>";
echo "<font color=black>战场位置：".$zcwz."</font>"."<br>";
echo "<font color=black>开放时间：".$kfsj."</font>"."<br>";
echo "<font color=black>开放等级：60级以上</font>"."<br>";
echo "<font color=black>占领国家：".$zlgj."(".$gjjz.")</font>"."<br>";
echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=187;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");







?>