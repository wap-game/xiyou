<?php




//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));


if($dtx==78||$dtx==79){
 echo "<font color=black>对不起！！你正在挑战内请先离开</font><br>";
  	
	
} else{	

$npcc11=$npcc;//存值
$pd=0;//初始
$wpts="";//初始	
$wpdz1="";//初始
$wpdz2="";//初始
$wpdz3="";//初始
$wpdz4="";//初始
$wpdz5="";//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]="腾云符";//名字
$wpdz2[]=1;//物品分类
$wpdz3[]=8;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {
echo "<font color=black>【世界BOSS区域】</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=63;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>朱雀BOSS</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=64;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>玄武BOSS</font></a>";

echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=65;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>青龙BOSS</font></a>";


echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=66;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>白虎BOSS</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=67;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>财神BOSS</font></a>"."<br>";






echo "<font color=black>【功能区域】</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>仓库</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>三联书店</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>回春药铺</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>镖局</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>活动大厅</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>装备锻造</font></a>"."<br>";

echo "<font color=black>【主城区域】</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>渔村</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>长安城</font></a>";

echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>天宫</font></a>";

echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>地府</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>傲来国</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宝象国</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=13;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>乌鸡国</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=14;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>车迟国</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>女儿国</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>祭赛国</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=17;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>朱紫国</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=18;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>比丘国</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>天法国</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>风仙郡</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=21;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>玉华郡</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=22;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>金平府</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=55;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>天竺国</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=56;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>因果岛</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=57;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>止戈镇</font></a>"."<br>";

echo "<font color=black>【门派区域】</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=23;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>龙宫</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=24;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>月宫</font></a>";

echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=25;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>普陀</font></a>";

echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=26;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>方寸</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=27;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>将军</font></a>"."<br>";
echo "<font color=black>【野外区域】</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=28;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>东海沙滩</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=29;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>东海海岸</font></a>";

echo "<font color=black>|</font></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=30;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>大雁塔</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=31;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>城南荒野</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=32;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>小雁塔</font></a>";

echo "<font color=black>|</font></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=33;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>冰风谷</font></a>"."<br>";

echo "<font color=black>【副本区域】</font></a>"."<br>";







//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=35;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>冰晶塔</font></a>";

echo "<font color=black>|</font></a>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=37;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>变异竹林</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=38;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>白骨陵墓</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=39;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>枉死城</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=40;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>水帘洞天</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=41;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>天宫瑶池</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=42;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>波月洞</font></a>";
echo "<font color=black>|</font></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=43;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>老君炉</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=44;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>压龙洞</font></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=45;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>莲花洞</font></a>";

echo "<font color=black>|</font></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=46;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>斩妖台</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=47;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>金兜洞</font></a>"."<br>";





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=58;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>通天水府</font></a>";
echo "<font color=black>|</font></a>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=59;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>芭蕉洞</font></a>";
echo "<font color=black>|</font></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=50;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>小雷音寺</font></a>"."<br>";











//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=60;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>盘丝洞</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=61;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>狮驼洞</font></a>";
echo "<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=123;
$npc[]=62;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>无底洞</font></a>"."<br>";








echo "<font color=black>=================</font></a>"."<br>";


echo "<font color=black>注：部分区域无法直接传送，请寻找NPC！</font></a>"."<br>";


} else{
echo "<font color=red>对不起使用【腾云驾雾】需要腾云符x1（十字往左再往上书店购买）</font>"."<br>";

}

}



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";











} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>





