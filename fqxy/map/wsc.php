<?php



if ($dty==0) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>枉死门</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

include("./gw/wsc.php");






  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>枉死道</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>望乡台</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>区域坐标：【索命无常】（【观刑台】），【夜叉王】（【怨崖】），【鬼面判官】（【轻生狱】）
</font>"."<br>"; 
} elseif ($dty==1) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>枉死道</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  
  //npc


include("./gw/wsc.php");





  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>冤魂谷</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>枉死道</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>枉死门</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>枉死道往哪里走呢？</font>"."<br>"; 
  
  } elseif ($dty==2) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>枉死道</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  
  //npc


include("./gw/wsc.php");







  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>祭天坛</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>枉死道</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>枉死道往哪里走呢？</font>"."<br>"; 
  
  
    } elseif ($dty==3) {
  //地名
  
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>祭天坛</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc



include("./gw/wsc.php");






  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>背阴山</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>提查司</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>枉死道</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>祭天坛往哪里走呢？</font>"."<br>"; 
  
  
  
  
        } elseif ($dty==4) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>提查司</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  
  //npc

include("./gw/wsc.php");







  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>轻生狱</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>祭天坛</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>提查司往哪里走呢？</font>"."<br>"; 
  
  
  
          } elseif ($dty==5) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>轻生狱</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  
  //npc
  //副本如意传送门
$csid=45;//传送id值
include("./fb/rycs.php");

$fb="wsc";//副本变量
$fbid1=25;//副本变量
$fbid2=26;//副本变量
$fbid3=27;//副本变量
$fbid4=39;//副本变量
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
$npc[]=594;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【鬼面判官】(普通)</font></a>"."<br>";

} else{

}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=597;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【鬼面判官】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=600;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【鬼面判官】(梦魇)</font></a>"."<br>";

} else{

}


 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=686;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【鬼面判官】(地狱)</font></a>"."<br>";

} else{

}





include("./gw/wsc.php");







  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>提查司</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>轻生狱往哪里走呢？</font>"."<br>"; 
  
  
            } elseif ($dty==6) {
  //地名
  
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>背阴山</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc




include("./gw/wsc.php");





  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>背阴山</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>祭天坛</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>背阴山往哪里走呢？</font>"."<br>"; 
  
  
              } elseif ($dty==7) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>背阴山</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  
  //npc


include("./gw/wsc.php");







  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>背阴山</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>背阴山</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>背阴山往哪里走呢？</font>"."<br>"; 
  
  
                } elseif ($dty==8) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>背阴山</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  
  //npc



include("./gw/wsc.php");





  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>怨崖</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>背阴山</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>背阴山往哪里走呢？</font>"."<br>"; 
  
                  } elseif ($dty==9) {
  //地名
  
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>怨崖</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
  //副本如意传送门
$csid=47;//传送id值
include("./fb/rycs.php");
$fb="wsc";//副本变量
$fbid1=25;//副本变量
$fbid2=26;//副本变量
$fbid3=27;//副本变量
$fbid4=39;//副本变量
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
$npc[]=596;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【夜叉王】(普通)</font></a>"."<br>";

} else{

}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=599;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【夜叉王】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=602;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【夜叉王】(梦魇)</font></a>"."<br>";

} else{

}

 if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=688;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【夜叉王】(地狱)</font></a>"."<br>";

} else{

}



include("./gw/wsc.php");






  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>背阴山</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>提查司</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>怨崖往哪里走呢？</font>"."<br>"; 
  
  
                    } elseif ($dty==10) {
  //地名
  
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>冤魂谷</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc


include("./gw/wsc.php");






  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>枉死道</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>报冤台</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>冤魂谷往哪里走呢？</font>"."<br>"; 
  
  
                      } elseif ($dty==11) {
  //地名
  
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>报冤台</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc



include("./gw/wsc.php");






  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>观刑台</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>冤魂谷</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>报冤台往哪里走呢？</font>"."<br>"; 
  
                        } elseif ($dty==12) {
  //地名
  
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>观刑台</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
  //副本如意传送门
$csid=46;//传送id值
include("./fb/rycs.php");
$fb="wsc";//副本变量
$fbid1=25;//副本变量
$fbid2=26;//副本变量
$fbid3=27;//副本变量
$fbid4=39;//副本变量
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
$npc[]=595;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【索命无常】(普通)</font></a>"."<br>";

} else{

}
 if($gw2 ==1&&$wcqk2!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=598;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【索命无常】(困难)</font></a>"."<br>";

} else{

}   
 if($gw3 ==1&&$wcqk3!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=601;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【索命无常】(梦魇)</font></a>"."<br>";

} else{

}



if($gw4 ==1&&$wcqk4!=3){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=10;
$npc[]=687;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>&nbsp【索命无常】(地狱)</font></a>"."<br>";

} else{

}






include("./gw/wsc.php");






  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>提查司</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>报冤台</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>观刑台往哪里走呢？</font>"."<br>"; 
  
  


    } else {
  echo "错误地图,编号：".$dty."<br>";
}











?>