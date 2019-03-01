<?php




//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


include("./ini/zt_ini.php");
$sex=($iniFile->getItem('玩家信息','性别'));


if($npcc ==0){
	$img='pic/login/img1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
//调用游戏开局
echo "<font color=black>大唐年间,妖魔四起,无数百姓处于水生火热当中!！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=295;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续</font></a>"."<br>";
} elseif($npcc ==2){
	$img='pic/login/img2.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
//调用游戏开局
echo "<font color=black>十万天兵天将与众妖魔战斗的难解难分！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=295;
$npc[]=99;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续</font></a>"."<br>";


} elseif($npcc ==99){
	
		$img='pic/login/img3.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
//调用游戏开局
echo "<font color=black>不断有英雄侠女从亿万百姓中脱颖而出，踏上降妖除魔的征程！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=295;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续</font></a>"."<br>";

	} elseif($npcc ==3){
	
		$img='pic/login/img4.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
//调用游戏开局
echo "<font color=black>由东海龙王敖广一手创办，希望收罗天下有识之士，借以壮大龙宫</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=295;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>选择龙宫</font></a>"."<br>";

		$img='pic/login/img5.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
//调用游戏开局
echo "<font color=black>选择月宫(限女玩家)</font><br>";

if($sex ==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=295;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>选择月宫</font></a>"."<br>";
	} else{
echo "<font color=black>选择月宫</font><br>";		
		}
			$img='pic/login/img6.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
//调用游戏开局
echo "<font color=black>大唐将军府由当朝太祖钦命秦琼立派授徒</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=295;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>选择将军府</font></a>"."<br>";
		
			$img='pic/login/img7.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
//调用游戏开局
echo "<font color=black>南海普陀山乃是救苦救难大慈大悲观音菩萨宣讲佛法之所在！(限男弟子)</font><br>";


if($sex ==1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=295;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>选择普陀山</font></a>"."<br>";
	} else{
echo "<font color=black>选择普陀山</font><br>";		
		}


	
	
				$img='pic/login/img8.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
//调用游戏开局
echo "<font color=black>灵台方寸山开山祖师是菩提祖师，传说他是佛的十大弟子之一！</font><br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=295;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>选择方寸山</font></a>"."<br>";



	
	} elseif($npcc ==4){
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
mysql_query("set names utf8");
$strsql = "update $q2 set mpp=2 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
		include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['门派' => '2']);
	
	echo "<font color=black>龙宫弟子借助龙宫得天独厚的灵气修得一身防御功夫是五门派中最强的，虽然法术与物攻都并非最强，但是一套风波叉法使出来倒也没有人敢小看！</font><br>";	
		//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续</font></a>"."<br>";	
		} elseif($npcc ==5){	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
mysql_query("set names utf8");
$strsql = "update $q2 set mpp=3 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);
		include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['门派' => '3']);

	echo "<font color=black>月宫弟子为法术门派,男子谢绝入内!法术惊人</font><br>";	
		//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续</font></a>"."<br>";
			} elseif($npcc ==6){
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
mysql_query("set names utf8");
$strsql = "update $q2 set mpp=1 where wjid=$wjid";//物品id号必改值
		include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['门派' => '1']);

$result = mysql_query($strsql);
echo "<font color=black>将军府为物攻门派，物理攻击为五门派中最高！一套霸王枪法使出来是威势惊人，难以匹敌！</font><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续</font></a>"."<br>";


			} elseif($npcc ==7){
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
mysql_query("set names utf8");
$strsql = "update $q2 set mpp=5 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);

		include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['门派' => '5']);
				
echo "<font color=black>南海普陀从来只收男弟子，女子谢绝入内。普陀山为法术攻击门派，大乘佛法法力无边，无与伦比，是五门派中法术攻击最高的！	</font><br>";				
		
				
		
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续</font></a>"."<br>";	
			} elseif($npcc ==8){
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
mysql_query("set names utf8");
$strsql = "update $q2 set mpp=4 where wjid=$wjid";//物品id号必改值
$result = mysql_query($strsql);	

		include("./ini/zt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('玩家信息', ['门派' => '4']);
				
	echo "<font color=black>方寸山为法术攻击门派，道家仙法法力无边，可谓妙道通天，是五门派中法术暴击最高的门派！</font><br>";				
		
	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续</font></a>"."<br>";
} else{
} 












echo "<br>";

echo "----------------------"."<br>";
//cmd及超链接值
include("fhgame.php");












} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>





