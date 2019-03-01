<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
include("./ini/zt_ini.php");
# 获取一个分类下某个子项的值
$fzfl =($iniFile->getItem('玩家信息','住宅分类'));
$fzzr =($iniFile->getItem('玩家信息','玩家名字'));
$wjvip=($iniFile->getItem('玩家信息','vip等级'));

if($fzfl ==1){
$fz="民宅";
} elseif($fzfl ==2){
$fz="豪宅";
} elseif($fzfl ==3){
$fz="官宅";
} else{


}
	  	if ($wjvip!="") {	 
$img='pic/vip/'."vip".$wjvip.'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	


} else{
}

echo "<font color=black>".$fzzr."的".$fz."可打造的家具如下：</font>"."<br>";
	
	
	
//调用家具缓存
include("./ini/jj_ini.php");
# 获取一个分类下所有数据$
$jjxx=($iniFile->getCategory('家具摆放'));

	
if($fzfl ==1){


if($jjxx[1]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖琉璃灯排〗（1级）</font></a>";
echo "<font color=black>（1金豆,红黄蓝宝石二×5）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[2]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖水晶珠帘〗（1级）</font></a>";
echo "<font color=black>（1金豆,红黄蓝水晶二×5）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[3]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖豹纹宝石屏风〗（1级）</font></a>";
echo "<font color=black>（1金豆,玄武石二×5）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[4]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八卦宝石镜〗（1级）</font></a>";
echo "<font color=black>（1金豆,佛印石二×5）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[5]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖松竹迎客图〗（1级）</font></a>";
echo "<font color=black>（1金豆,金刚石二×5）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[6]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖豹头兵器架〗（1级）</font></a>";
echo "<font color=black>（1金豆,玄武石二×5）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[7]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖铜角八卦台〗（1级）</font></a>";
echo "<font color=black>（1金豆,佛印石二×5）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[22]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=22;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖泥胚打磨台〗</font></a>";
echo "<font color=black>（1金豆,百年魔珠×20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=22;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[25]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=25;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖红木桌〗（1级）</font></a>";
echo "<font color=black>（1金豆,红黄蓝宝石二×5）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=25;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[36]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=36;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖大木箱〗（1级）</font></a>";
echo "<font color=black>（1金豆,百年魔珠×20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=36;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[37]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=37;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖铜柜〗</font></a>";
echo "<font color=black>（1金豆,百年魔珠×20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=37;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
////////////////////////////
} else{
}



} elseif($fzfl ==2){




if($jjxx[8]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖七星灯排〗（1级）</font></a>";
echo "<font color=black>（4金豆,红黄蓝宝石三×20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


} else{
}


if($jjxx[9]==""){


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖玛瑙珠帘〗（1级）</font></a>";
echo "<font color=black>（4金豆,红黄蓝水晶三×20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[10]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖虎纹宝石屏风〗（1级）</font></a>";
echo "<font color=black>（4金豆,玄武石三×20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[11]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖太极宝石镜〗（1级）</font></a>";
echo "<font color=black>（4金豆,佛印石三×20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[12]==""){


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖福禄迎客图〗（1级）</font></a>";
echo "<font color=black>（4金豆,金刚石三×20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


} else{
}


if($jjxx[13]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=13;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖虎头兵器架〗（1级）</font></a>";
echo "<font color=black>（4金豆,玄武石三×20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=13;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[14]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=14;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖银角太极台〗（1级）</font></a>";
echo "<font color=black>（2金豆,佛印石三×10）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=14;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[23]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=23;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖白玉打磨台〗</font></a>";
echo "<font color=black>（4金豆,百年魔珠×40）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=23;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[26]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=26;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖檀木桌〗（1级）</font></a>";
echo "<font color=black>（4金豆,红黄蓝宝石三×20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=26;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[27]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=27;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖高级盔甲陈列〗（1级）</font></a>";
echo "<font color=black>（4金豆,红黄蓝水晶三×20）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=27;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[38]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=38;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖铁皮箱〗（1级）</font></a>";
echo "<font color=black>（4金豆,百年魔珠×50）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=38;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[39]==""){


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=39;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖银柜〗</font></a>";
echo "<font color=black>（4金豆,百年魔珠×50）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=39;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}





} elseif($fzfl ==3){



if($jjxx[15]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖乾坤灯排〗（1级）</font></a>";
echo "<font color=black>（8金豆,红黄蓝宝石四×40）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[16]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖翡翠珠帘〗（1级）</font></a>";
echo "<font color=black>（8金豆,红黄蓝水晶四×40）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";


} else{
}


if($jjxx[17]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=17;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖龙纹宝石屏风〗（1级）</font></a>";
echo "<font color=black>（8金豆,玄武石四×40）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=17;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[18]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=18;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖无极宝石镜〗（1级）</font></a>";
echo "<font color=black>（8金豆,佛印石四×40）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=18;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[19]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖八仙迎客图〗（1级）</font></a>";
echo "<font color=black>（8金豆,金刚石四×40）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[20]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖龙头兵器架〗（1级）</font></a>";
echo "<font color=black>（8金豆,玄武石四×40）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[21]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=21;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金角无极台〗（1级）</font></a>";
echo "<font color=black>（8金豆,佛印石四×40）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=21;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[24]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=24;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖水晶打磨台〗</font></a>";
echo "<font color=black>（8金豆,百年魔珠×100）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=24;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[28]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=28;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖沉香木桌〗（1级）</font></a>";
echo "<font color=black>（8金豆,红黄蓝宝石四×40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=28;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[29]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=29;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖精品盔甲陈列〗（1级）</font></a>";
echo "<font color=black>（8金豆,红黄蓝水晶四×40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=29;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[30]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=30;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖战利品陈列〗（1级）</font></a>";
echo "<font color=black>（8金豆,玄武石四×40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=30;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[31]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=31;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖卦纹辟邪门神〗（1级）</font></a>";
echo "<font color=black>（8金豆,玄武石四×40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=31;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[32]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=32;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖龙纹寒玉床〗（1级）</font></a>";
echo "<font color=black>（8金豆,佛印石四×40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=32;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[33]==""){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=33;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖琉璃棋盘〗（1级）</font></a>";
echo "<font color=black>（8金豆,金刚石四×40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=33;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[34]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=34;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖沉香雕花桌〗（1级）</font></a>";
echo "<font color=black>（8金豆,佛印石四×40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=34;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[35]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=35;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖龙晶观音像〗（1级）</font></a>";
echo "<font color=black>（8金豆,金刚石四×40）</font>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=35;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";

} else{
}


if($jjxx[40]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=40;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖方口宝箱〗（1级）</font></a>";
echo "<font color=black>（6金豆,百年魔珠×100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=40;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}


if($jjxx[41]==""){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=158;
$npc[]=41;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金柜〗（1级）</font></a>";
echo "<font color=black>（3金豆,百年魔珠×100）</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=159;
$npc[]=41;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>打造</font></a>"."<br>";
} else{
}











} else{
echo "<font color=black>未获取到住宅信息请联系gm进行解决</font>"."<br>";

}
	
echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=5387;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回管家</font></a>"."<br>";






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
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>