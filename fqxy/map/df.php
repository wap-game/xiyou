<?php

if ($dty==0) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>奈何桥</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=226;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>孟婆</font></a>"."<br>";
//cmd及超链接值
//$cmid=$cmid+1;
//$cdid[]=$cmid;
//$clj[]=10;
//$npc[]=5389;//需要改动
//echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【测试人偶】</font></a>"."<br>";
  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴阳界</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>黄泉道</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>奈何桥往哪里走呢？</font>"."<br>"; 
} elseif ($dty==1) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阴阳界</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=228;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>钟馗(抓鬼)</font></a>"."<br>";
  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>鬼门关</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>奈何桥</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>引魂司</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>引魄司</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>阴阳界往哪里走呢？</font>"."<br>"; 
  
  
  } elseif ($dty==2) {


  //地名

  
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>鬼门关</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=230;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>推磨鬼（传送）</font></a>"."<br>";
		
  //出口
  
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>奉祭场</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴阳界</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>望乡台</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>孽镜台</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>鬼门关往哪里走呢？</font>"."<br>"; 
  
  
    } elseif ($dty==3) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>奉祭场</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=231;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>牛头</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=232;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>马面</font></a>"."<br>";

  //出口

  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阎罗殿</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>鬼门关</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>轮回司</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>寂灭司</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>奉祭场往哪里走呢？</font>"."<br>"; 
  
  
      } elseif ($dty==4) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>阎罗殿</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

include("rwmap/df4.php");

  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>翠云宫</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>奉祭场</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>阎罗殿往哪里走呢</font>？"."<br>"; 
  
  
        } elseif ($dty==5) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>翠云宫</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=239;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>地藏王</font></a>"."<br>";
  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阎罗殿</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>翠云宫往哪里走呢</font>？"."<br>"; 
  
  
  
          } elseif ($dty==6) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>轮回司</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc
  //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=240;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【轮转玄居】</font></a>"."<br>";
  //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=241;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>〖金豆〗兑换宠物2次转生道具</font></a>"."<br>";
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=242;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>兑换宠物2次转生道具</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=243;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>轮转王</font></a>"."<br>";
  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>奉祭场</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  
  
  //地点描述
  echo "<font color=black>轮回司往哪里走呢</font>？"."<br>"; 
  
  
  
            } elseif ($dty==7) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>生死河</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

  //出口

  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>剪刀地狱</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>拔舌地狱</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>轮回司</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>生死河往哪里走呢？</font>"."<br>"; 
  
  
              } elseif ($dty==8) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>生死河</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

  //出口
  
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>孽镜地狱(1,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>铁树地狱(1,6)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>生死河往哪里走呢？</font>"."<br>"; 
  
                } elseif ($dty==9) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>生死河</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

  //出口

  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>铜柱地狱(1,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>蒸笼地狱(1,6)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>生死河往哪里走呢？</font>"."<br>"; 
  
  
                  } elseif ($dty==10) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>生死河</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>冰山地狱(1,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刀山地狱(1,6)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  
  //地点描述
  echo "<font color=black>生死河往哪里走呢？</font>"."<br>"; 
  
  
                    } elseif ($dty==11) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>生死河</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

  //出口

  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>牛坑地狱(1,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>油锅地狱(1,6)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>生死河往哪里走呢？</font>"."<br>"; 
  
  
  
                      } elseif ($dty==12) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>生死河</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>舂臼地狱(1,1)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>石压地狱(1,6)</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>生死河往哪里走呢？</font>"."<br>"; 
  
  
  
                        } elseif ($dty==13) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>生死河</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>枉死地狱</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>血池地狱</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>生死河往哪里走呢？</font>"."<br>"; 
  
  
  
                          } elseif ($dty==14) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>生死河</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

  //出口

  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>火山地狱</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>磔刑地狱</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>生死河往哪里走呢？</font>"."<br>"; 
  
  
                            } elseif ($dty==15) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>生死河</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刀锯地狱</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<font color=black>下:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>石磨地狱</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>生死河</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>生死河往哪里走呢？</font>"."<br>"; 
  
  
  
                              } elseif ($dty==16) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>寂灭司</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

  //出口

  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>奉祭场</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>寂灭司往哪里走呢？</font>"."<br>"; 
  
  
                                } elseif ($dty==17) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>孽镜台</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  //npc

  //出口

  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>鬼门关</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>孽镜台往哪里走呢？</font>"."<br>"; 
  
  
  
                              } elseif ($dty==18) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>望乡台</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
  


  //副本如意传送门
$csid=44;//传送id值
include("./fb/rycs.php");
  //npc
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=244;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>望乡台守卫</font></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=245;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>夜游鬼（副本传送）</font></a>"."<br>";

    //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=316;
$npc[]=0;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>【西游各大副本重置台】（需要副本重置令）</font></a>"."<br>";
  //出口
  include("./fb/wsc.php");
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>鬼门关</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>望乡台往哪里走呢？</font>"."<br>"; 
  
  
                                } elseif ($dty==19) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>引魂司</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
   //npc
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=246;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>白无常</font></a>"."<br>";

  //出口
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴阳界</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  
  //地点描述
  echo "<font color=black>引魂司往哪里走呢？</font>"."<br>"; 
  
  
  
                                  } elseif ($dty==20) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>引魂司</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
   //npc

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=247;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>黑无常</font></a>"."<br>";
  //出口
  
  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>阴阳界</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>引魂司往哪里走呢？</font>"."<br>"; 
  
  
 } elseif ($dty==21) {


  //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>黄泉道</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
   //npc


  //出口


  echo "<font color=black>请选择出口</font>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<font color=black>上:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>奈何桥</font></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>孤坟堆</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>黄泉道往哪里走呢？</font>"."<br>"; 
  
  
    
 } elseif ($dty==22) {
include("./ini/pksw_ini.php");
$hdtime=($iniFile->getItem('死亡时间','初始'));
$vipqytime=600;//系统消息存活秒数30分钟
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
echo "<font color=red>恭喜你！！孟婆的汤已为你熬制好了~~~</font>"."<br>";
} else{
}








//地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>黄泉大道</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
   //npc
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=524;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>孟婆</font></a>"."<br>";


  //出口


  echo "<font color=black>请选择出口</font>"."<br>";


  
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<font color=black>右:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>黄泉大道</font></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>黄泉大道往哪里走呢？</font>"."<br>"; 
  
  
  
 } elseif ($dty==23) {
  
  include("./ini/pksw_ini.php");
$hdtime=($iniFile->getItem('死亡时间','初始'));
$vipqytime=600;//系统消息存活秒数30分钟
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
echo "<font color=red>恭喜你！！孟婆的汤已为你熬制好了~~~</font>"."<br>";
} else{
}
    //地名
    $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<font color=black>黄泉大道</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>刷新</font></a>"."<br>";
   //npc
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=524;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>孟婆</font></a>"."<br>";


  //出口


  echo "<font color=black>请选择出口</font>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<font color=black>左:</font>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>黄泉大道</font></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>查看地图</font></a>"."<br>";
  //地点描述
  echo "<font color=black>黄泉大道往哪里走呢？</font>"."<br>"; 
  
  
  
  
  
  
  
  
  
  } else {
  echo "错误地图,编号：".$dty."<br>";
}






?>