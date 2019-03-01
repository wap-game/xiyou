<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
$cwidd=$npcc;
if($cwidd!=""){


//调用cw.ini是否存在
include("./ini/cw_ini.php");
$cw01x=($iniFile->getItem('宠物原始名字',$cwidd));
$cw03x=($iniFile->getItem('宠物星级',$cwidd));

if($cw03x<150){

if($cw03x>=0&&$cw03x<=19){
$cwxf01=617;//需要扣除的星符id
$cwxf02=$cw03x+1;//需要扣除的星符量
$cwxf03="〖练星符〗（白）";//需要扣除的星符名字
} elseif($cw03x>=20&&$cw03x<=39){   
$cwxf01=618;//需要扣除的星符id
$cwxf02=$cw03x-20+1;//需要扣除的星符量
$cwxf03="〖练星符〗（绿）";//需要扣除的星符名字
} elseif($cw03x>=40&&$cw03x<=59){   
$cwxf01=619;//需要扣除的星符id
$cwxf02=$cw03x-40+1;//需要扣除的星符量
$cwxf03="〖练星符〗（蓝）";//需要扣除的星符名字
} elseif($cw03x>=60&&$cw03x<=79){   
$cwxf01=620;//需要扣除的星符id
$cwxf02=$cw03x-60+1;//需要扣除的星符量
$cwxf03="〖练星符〗（紫）";//需要扣除的星符名字
} elseif($cw03x>=80&&$cw03x<=99){   
$cwxf01=621;//需要扣除的星符id
$cwxf02=$cw03x-80+1;//需要扣除的星符量
$cwxf03="〖练星符〗（完美の紫）";//需要扣除的星符名字
} elseif($cw03x>=100&&$cw03x<=119){   
$cwxf01=622;//需要扣除的星符id
$cwxf02=$cw03x-100+1;//需要扣除的星符量
$cwxf03="〖练星符〗（橙）";//需要扣除的星符名字
} elseif($cw03x>=120&&$cw03x<=149){   
$cwxf01=623;//需要扣除的星符id
$cwxf02=$cw03x-120+1;//需要扣除的星符量
$cwxf03="〖练星符〗（完美の橙）";//需要扣除的星符名字
} else{	
$cwxf01=623;//需要扣除的星符id
$cwxf02=999999;//需要扣除的星符量
$cwxf03="〖练星符〗（完美の橙）";//需要扣除的星符名字
}



$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]=$cwxf03;//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=$cwxf01;//物品id
$wpdz4[]=$cwxf02;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");


if ($pd==2) {

include("./ini/cw_ini.php");
$cw01x=($iniFile->getItem('宠物原始名字',$cwidd));
$cw03x=($iniFile->getItem('宠物星级',$cwidd));
$cw03x=$cw03x+1;
$iniFile->updItem('宠物星级', [$cwidd => $cw03x]);

include("./sql/mysql.php");//调用数据库连接 
$arr = explode("_",$cwidd);
$cwidd1=$arr[0];
$cwidd2=$arr[1];

$q2="cw".$wjid;
mysql_query("set names utf8");
$strsql = "update $q2 set cwxj='$cw03x' where id=$cwidd2";//物品id号必改值
$result = mysql_query($strsql);
include("./ini/zt_ini.php");





//更新缓存数据
$inina="cwztt_".$cwidd.".ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  







echo "<font color=black>恭喜你！成功将".$cw01x."提升至了极品".$cw03x."星</font>"."<br>";



if($cw03x==10||$cw03x==20||$cw03x==30||$cw03x==40||$cw03x==50||$cw03x==60||$cw03x==70||$cw03x>=80&&$cw03x<=150){
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."经历了千辛万苦，将".$cw01x."提升至了极品".$cw03x."星！！";
include("./msg/msgg02.php");
} else{
} 










} else{
	
	
	
echo "<font color=black>对不起！升星失败需要".$cwxf03."x".$cwxf02."</font>"."<br>";

}


} else{	
echo "<font color=black>阁下的".$cwmz2."已经是极品满星了（不需要升星了）</font>"."<br>";

}










//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=365;
$npc[]=$cwidd;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=362;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回宠物</font></a>"."<br>";
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


} else{	
echo "<font color=red>宠物有误！！请联系GM解决此问题</font>"."<br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";
}













} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



?>