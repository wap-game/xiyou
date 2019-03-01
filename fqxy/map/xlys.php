<?php


if ($dty==0) {

$map01="寺门";//地名
$map03="";//出口上
$map04="寺院";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端

//副本如意传送门
$csid=80;//传送id值
include("./fb/rycs.php");

    //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=316;
$npc[]=0;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【西游各大副本重置台】（需要副本重置令）</font></a>"."<br>";


include("./fb/xlys.php");

include("mapxx.php");//地图出入口


} elseif ($dty==1) {
$map01="寺院";//地名
$map03="寺门";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="走廊";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口


} elseif ($dty==2) {
$map01="走廊";//地名
$map03="";//出口上
$map04="";//出口下
$map05="寺院";//出口左
$map06="走廊";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口


} elseif ($dty==3) {
$map01="走廊";//地名
$map03="东侧殿";//出口上
$map04="西侧殿";//出口下
$map05="走廊";//出口左
$map06="走廊";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==4) {
$map01="东侧殿";//地名
$map03="";//出口上
$map04="走廊";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
//【守门金刚】
//副本如意传送门
$csid=81;//传送id值
include("./fb/rycs.php");

//========================================================
$fb="xlys";//副本变量
$fbid1=57;//副本变量
$fbid2=58;//副本变量
$fbid3=59;//副本变量
$fbid4=60;//副本变量
include("./ini/fb_ini.php");
$gw1=($iniFile->getItem($fbid1,'怪物1'));
$wcqk1=($iniFile->getItem($fbid1,'完成情况'));
$gw2=($iniFile->getItem($fbid2,'怪物1'));
$wcqk2=($iniFile->getItem($fbid2,'完成情况'));
$gw3=($iniFile->getItem($fbid3,'怪物1'));
$wcqk3=($iniFile->getItem($fbid3,'完成情况'));
$gw4=($iniFile->getItem($fbid4,'怪物1'));
$wcqk4=($iniFile->getItem($fbid4,'完成情况')); 

if($gw1 ==1&&$wcqk1!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=980;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【守门金刚】(普通)</font></a>"."<br>";

} else{

}


 if($gw2 ==1&&$wcqk2!=3){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=981;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【守门金刚】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=982;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【守门金刚】(梦魇)</font></a>"."<br>";

} else{

}

 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=983;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【守门金刚】(地狱)</font></a>"."<br>";

} else{

}





//========================================================












include("mapxx.php");//地图出入口


} elseif ($dty==5) {
$map01="西侧殿";//地名
$map03="走廊";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
//【灵山接引僧】
//副本如意传送门
$csid=82;//传送id值
include("./fb/rycs.php");


//========================================================
$fb="xlys";//副本变量
$fbid1=57;//副本变量
$fbid2=58;//副本变量
$fbid3=59;//副本变量
$fbid4=60;//副本变量
include("./ini/fb_ini.php");
$gw1=($iniFile->getItem($fbid1,'怪物2'));
$wcqk1=($iniFile->getItem($fbid1,'完成情况'));
$gw2=($iniFile->getItem($fbid2,'怪物2'));
$wcqk2=($iniFile->getItem($fbid2,'完成情况'));
$gw3=($iniFile->getItem($fbid3,'怪物2'));
$wcqk3=($iniFile->getItem($fbid3,'完成情况'));
$gw4=($iniFile->getItem($fbid4,'怪物2'));
$wcqk4=($iniFile->getItem($fbid4,'完成情况')); 

if($gw1 ==1&&$wcqk1!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=984;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【灵山接引僧】(普通)</font></a>"."<br>";

} else{

}


 if($gw2 ==1&&$wcqk2!=3){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=985;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【灵山接引僧】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=986;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【灵山接引僧】(梦魇)</font></a>"."<br>";

} else{

}

 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=987;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【灵山接引僧】(地狱)</font></a>"."<br>";

} else{

}





//========================================================

include("mapxx.php");//地图出入口
} elseif ($dty==6) {
$map01="走廊";//地名
$map03="";//出口上
$map04="";//出口下
$map05="走廊";//出口左
$map06="走廊";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口



} elseif ($dty==7) {
$map01="走廊";//地名
$map03="";//出口上
$map04="";//出口下
$map05="走廊";//出口左
$map06="大雄宝殿";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口


} elseif ($dty==8) {
$map01="大雄宝殿";//地名
$map03="";//出口上
$map04="";//出口下
$map05="走廊";//出口左
$map06="内殿";//出口右
include("maptop.php");//地图顶端
//【迦叶】
//副本如意传送门
$csid=83;//传送id值
include("./fb/rycs.php");



//========================================================
$fb="xlys";//副本变量
$fbid1=57;//副本变量
$fbid2=58;//副本变量
$fbid3=59;//副本变量
$fbid4=60;//副本变量
include("./ini/fb_ini.php");
$gw1=($iniFile->getItem($fbid1,'怪物3'));
$wcqk1=($iniFile->getItem($fbid1,'完成情况'));
$gw2=($iniFile->getItem($fbid2,'怪物3'));
$wcqk2=($iniFile->getItem($fbid2,'完成情况'));
$gw3=($iniFile->getItem($fbid3,'怪物3'));
$wcqk3=($iniFile->getItem($fbid3,'完成情况'));
$gw4=($iniFile->getItem($fbid4,'怪物3'));
$wcqk4=($iniFile->getItem($fbid4,'完成情况')); 

if($gw1 ==1&&$wcqk1!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=988;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【迦叶】(普通)</font></a>"."<br>";

} else{

}


 if($gw2 ==1&&$wcqk2!=3){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=989;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【迦叶】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=990;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【迦叶】(梦魇)</font></a>"."<br>";

} else{

}

 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=991;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【迦叶】(地狱)</font></a>"."<br>";

} else{

}





//========================================================














include("mapxx.php");//地图出入口


} elseif ($dty==9) {
$map01="内殿";//地名
$map03="";//出口上
$map04="阶梯";//出口下
$map05="大雄宝殿";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
//【青莲妖女】
//副本如意传送门
$csid=84;//传送id值
include("./fb/rycs.php");




//========================================================
$fb="xlys";//副本变量
$fbid1=57;//副本变量
$fbid2=58;//副本变量
$fbid3=59;//副本变量
$fbid4=60;//副本变量
include("./ini/fb_ini.php");
$gw1=($iniFile->getItem($fbid1,'怪物4'));
$wcqk1=($iniFile->getItem($fbid1,'完成情况'));
$gw2=($iniFile->getItem($fbid2,'怪物4'));
$wcqk2=($iniFile->getItem($fbid2,'完成情况'));
$gw3=($iniFile->getItem($fbid3,'怪物4'));
$wcqk3=($iniFile->getItem($fbid3,'完成情况'));
$gw4=($iniFile->getItem($fbid4,'怪物4'));
$wcqk4=($iniFile->getItem($fbid4,'完成情况')); 

if($gw1 ==1&&$wcqk1!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=992;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【青莲妖女】(普通)</font></a>"."<br>";

} else{

}


 if($gw2 ==1&&$wcqk2!=3){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=993;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【青莲妖女】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=994;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【青莲妖女】(梦魇)</font></a>"."<br>";

} else{

}

 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=995;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【青莲妖女】(地狱)</font></a>"."<br>";

} else{

}





//========================================================







include("mapxx.php");//地图出入口



} elseif ($dty==10) {
$map01="阶梯";//地名
$map03="内殿";//出口上
$map04="";//出口下
$map05="";//出口左
$map06="藏经阁";//出口右
include("maptop.php");//地图顶端


include("mapxx.php");//地图出入口

} elseif ($dty==11) {
$map01="藏经阁";//地名
$map03="";//出口上
$map04="";//出口下
$map05="阶梯";//出口左
$map06="";//出口右
include("maptop.php");//地图顶端
//【黄眉老佛】
//副本如意传送门
$csid=85;//传送id值
include("./fb/rycs.php");



//========================================================
$fb="xlys";//副本变量
$fbid1=57;//副本变量
$fbid2=58;//副本变量
$fbid3=59;//副本变量
$fbid4=60;//副本变量
include("./ini/fb_ini.php");
$gw1=($iniFile->getItem($fbid1,'怪物5'));
$wcqk1=($iniFile->getItem($fbid1,'完成情况'));
$gw2=($iniFile->getItem($fbid2,'怪物5'));
$wcqk2=($iniFile->getItem($fbid2,'完成情况'));
$gw3=($iniFile->getItem($fbid3,'怪物5'));
$wcqk3=($iniFile->getItem($fbid3,'完成情况'));
$gw4=($iniFile->getItem($fbid4,'怪物5'));
$wcqk4=($iniFile->getItem($fbid4,'完成情况')); 

if($gw1 ==1&&$wcqk1!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=996;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【黄眉老佛】(普通)</font></a>"."<br>";

} else{

}


 if($gw2 ==1&&$wcqk2!=3){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=997;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【黄眉老佛】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=998;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【黄眉老佛】(梦魇)</font></a>"."<br>";

} else{

}

 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=999;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【黄眉老佛】(地狱)</font></a>"."<br>";

} else{

}





//========================================================



include("mapxx.php");//地图出入口












    } else {
  echo "错误地图,编号：".$dty."<br>";
}












?>