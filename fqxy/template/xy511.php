<?php
echo "<font color=black>〖商品☆价格☆拍卖人〗</font>"."<br>";


$pmid=$npcc;
//调用wp.ini是否存在
include("./ini/pm_rw_ini.php");
$pmwjpx=($iniFile->getCategory('排序'));
$pmwjid=($iniFile->getCategory('玩家id'));
$pmwjmz=($iniFile->getCategory('玩家名字'));
$pmtime=($iniFile->getCategory('拍卖时间'));
$pmwpid=($iniFile->getCategory('拍卖物品id'));
$pmwpsl=($iniFile->getCategory('拍卖数量'));
$pmwpmz=($iniFile->getCategory('拍卖名字'));
$pmwpjg=($iniFile->getCategory('拍卖价格'));
$pmsjc=($iniFile->getCategory('拍卖时间搓'));




$keys = array_keys($pmwpid);
$m=count($keys,0)-1; 

$hm=0;
$i=0;



foreach(array_keys($pmwpid) as $key){
$keypmwpid[]=$pmwpid[$key];
}

for($x=0;$x<$m;$x++){
$i=$i+1;
if($pmid==$keypmwpid[$i]){  
$pxid[]=$keys[$i];
$hm=$hm+1;

}
}


$m=count($pxid,0); 
$km=0;
$i=-1;



for($x=0;$x<$m;$x++){
$i=$i+1;


$phbzz2[]=$pmwpjg[$pxid[$i]];
$phbzz4[]=$pmwjpx[$pxid[$i]];
}
/*
foreach(array_keys($phbzz2) as $key){
$keyphbzz2[]=$phbzz2[$key];
}

foreach(array_keys($phbzz4) as $key){
$keyphbzz4[]=$phbzz4[$key];
}
*/

$mt=0;
for($b=0;$b<$hm;$b++){

$xb[]=$phbzz2[$mt]*10000+$phbzz4[$mt];
$fb[]=$phbzz2[$mt]*10000;
$mt=$mt+1;
}



if ($hm>0){
sort($fb);
sort($xb);
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

$phxl[]=($iniFile->getItem('排序',$xbbb));
$phmz[]=($iniFile->getItem('拍卖名字',$xbbb));
$phjg[]=($iniFile->getItem('拍卖价格',$xbbb));
$phsl[]=($iniFile->getItem('拍卖数量',$xbbb));
$phwjid[]=($iniFile->getItem('玩家id',$xbbb));

$phwjmz[]=($iniFile->getItem('玩家名字',$xbbb));


}



$i=-1;
for($d=0;$d<$hm;$d++){
$i=$i+1;

$ik=$ik+1;


echo "<font color=black>".$ik.".</font>";

if ($wjid==$phwjid[$i]){

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=500;
$npc[]=$pmid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$phmz[$i]."</font></a>";
echo "<font color=blue>x".$phsl[$i]."</font>";






//数字转汉字
$yl=$phjg[$i];
include("./pz/ylts.php");

echo "<font color=blue>[".$ylxx."两]</font>";

echo "<font color=black>[".$phwjmz[$i]."]</font>";




} else{
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=500;
$npc[]=$pmid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>".$phmz[$i]."</font></a>";

echo "<font color=blue>x".$phsl[$i]."</font>";




//数字转汉字
$yl=$phjg[$i];
include("./pz/ylts.php");

echo "<font color=blue>[".$ylxx."两]</font>";

echo "<font color=black>[".$phwjmz[$i]."]</font>";
	
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=512;
$npc[]=$phxl[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>购买</font></a>";

	

}


echo "</br>";

if ($ik>=10){
	break;
	}







} 


/*


asort($pxid1);

print_r ($pxid1);


$keyss = array_keys($pxid1);


foreach($keyss as $k=>$v){
$pxid3[]= $v;
}



echo $pxid3[2];



*/



echo "</br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=494;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>"; 

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>"; 
echo "<br>"; 






include("fhgame.php");














?>