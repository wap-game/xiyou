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
//include("class/iniclass.php");//调用iniclass文件
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));

$dty=($iniFile->getItem('地图坐标','y'));





$inina="map.ini";
//路径
$path='ache/'.$wjid;

$dir = iconv("UTF-8", "GBK", "$path");
        if (!file_exists($dir)){
            mkdir ($dir,0777,true);
        } else {
        }
	//判断ini文件是否存在	
$ininame = $path."/".$inina;


$filename = $ininame;


if(!file_exists($filename)){
$counter_file=$ininame;//文件名及路径,在当前目录下新建aa.txt文件 
$fopen=fopen($counter_file,   'wb ');//新建文件命令 
fputs($fopen,   '[地图信息]');//向文件中写入内容; 
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

fclose($fopen); 
} else {
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
}


	////////玩家id值


# 获取一个分类下所有数据$
$dt=($iniFile->getCategory('地图比例'));


	if($dt[初始]==""){
# 添加一个分类并直接添加子项
$iniFile->addCategory('地图比例', ['初始' => 888]);		
# 添加一个分类并直接添加子项
$iniFile->addCategory('地图比例', ['大小' => 1]);
}else{

}
# 获取一个分类下某个子项的值
$dtdx=($iniFile->getItem('地图比例','大小'));

$img='./pic/dtpic/'.$dtx."-".$dty.".jpg";
if(!file_exists($img)){
echo "<font color=black>这个区域的地图图片不存在！如果你想弄这个点的地图图片请把这张图片改名发我</font>"."<br>"; 
$imgg=$dtx."-".$dty.".jpg";
echo "<font color=black>图片名称:</font>";
echo "<font color=red>".$imgg."</font>"."<br>"; 

	} else{
		echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
	echo "<br>";
	echo "<br>";		
	}

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
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>