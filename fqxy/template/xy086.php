<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



$rid=$npcc;


//调用zt.ini是否存在
include("./ini/yxrw_ini.php");
$rwname=($iniFile->getItem('日常任务名字',$rid));
if ($rid==1) {
	
$fb="bjt";//副本变量
$fbid1=1;//副本变量
$fbid2=2;//副本变量
$fbid3=3;//副本变量
$fbid4=31;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";

echo "<font color=black>【措达怙主】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【轮回使者】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【堕落神将】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【宝帐怙主】(普通)x1,"."已完成x".$gw4."</font>"."<br>";
} elseif ($rid==2) {
$fb="bjt";//副本变量
$fbid1=1;//副本变量
$fbid2=2;//副本变量
$fbid3=3;//副本变量
$fbid4=31;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";

echo "<font color=black>【措达怙主】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【轮回使者】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【堕落神将】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【宝帐怙主】(困难)x1,"."已完成x".$gw4."</font>"."<br>";

} elseif ($rid==3) {
$fb="bjt";//副本变量
$fbid1=1;//副本变量
$fbid2=2;//副本变量
$fbid3=3;//副本变量
$fbid4=31;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";

echo "<font color=black>【措达怙主】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【轮回使者】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【堕落神将】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【宝帐怙主】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";

} elseif ($rid==4) {

$fb="byzzl";//副本变量
$fbid1=4;//副本变量
$fbid2=5;//副本变量
$fbid3=6;//副本变量
$fbid4=32;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀5大BOSS！</font>"."<br>";

echo "<font color=black>【蓝羽蝶后】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【无影貂】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【蛇妖王】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【鬼门虎王】(普通)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【黄雀护将】(普通)x1,"."已完成x".$gw5."</font>"."<br>";
} elseif ($rid==5) {
$fb="byzzl";//副本变量
$fbid1=4;//副本变量
$fbid2=5;//副本变量
$fbid3=6;//副本变量
$fbid4=32;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀5大BOSS！</font>"."<br>";

echo "<font color=black>【蓝羽蝶后】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【无影貂】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【蛇妖王】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【鬼门虎王】(困难)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【黄雀护将】(困难)x1,"."已完成x".$gw5."</font>"."<br>";

} elseif ($rid==6) {
$fb="byzzl";//副本变量
$fbid1=4;//副本变量
$fbid2=5;//副本变量
$fbid3=6;//副本变量
$fbid4=32;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀5大BOSS！</font>"."<br>";

echo "<font color=black>【蓝羽蝶后】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【无影貂】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【蛇妖王】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【鬼门虎王】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【黄雀护将】(梦魇)x1,"."已完成x".$gw5."</font>"."<br>";
} elseif ($rid==7) {
$fb="yld";//副本变量
$fbid1=7;//副本变量
$fbid2=8;//副本变量
$fbid3=9;//副本变量
$fbid4=33;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
$gw7=$gwbl[怪物7]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀7大BOSS！</font>"."<br>";
echo "<font color=black>【狐将军】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【拔地鼠精】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【百花娘子】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【天香夫人】(普通)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【狐女】(普通)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【狐长老】(普通)x1,"."已完成x".$gw6."</font>"."<br>";
echo "<font color=black>【黑龙敖历】(普通)x1,"."已完成x".$gw7."</font>"."<br>";

} elseif ($rid==8) {
$fb="yld";//副本变量
$fbid1=7;//副本变量
$fbid2=8;//副本变量
$fbid3=9;//副本变量
$fbid4=33;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
$gw7=$gwbl[怪物7]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀7大BOSS！</font>"."<br>";
echo "<font color=black>【狐将军】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【拔地鼠精】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【百花娘子】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【天香夫人】(困难)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【狐女】(困难)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【狐长老】(困难)x1,"."已完成x".$gw6."</font>"."<br>";
echo "<font color=black>【黑龙敖历】(困难)x1,"."已完成x".$gw7."</font>"."<br>";














} elseif ($rid==9) {
$fb="yld";//副本变量
$fbid1=7;//副本变量
$fbid2=8;//副本变量
$fbid3=9;//副本变量
$fbid4=33;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
$gw7=$gwbl[怪物7]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀7大BOSS！</font>"."<br>";
echo "<font color=black>【狐将军】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【拔地鼠精】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【百花娘子】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【天香夫人】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【狐女】(梦魇)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【狐长老】(梦魇)x1,"."已完成x".$gw6."</font>"."<br>";
echo "<font color=black>【黑龙敖历】(梦魇)x1,"."已完成x".$gw7."</font>"."<br>";
} elseif ($rid==10) {
$fb="lhd";//副本变量
$fbid1=10;//副本变量
$fbid2=11;//副本变量
$fbid3=12;//副本变量
$fbid4=34;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【监察妖将】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【传令妖将】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【训练妖将】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【守备妖将】(普通)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【金角大王】(普通)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【银角大王】(普通)x1,"."已完成x".$gw6."</font>"."<br>";
} elseif ($rid==11) {
$fb="lhd";//副本变量
$fbid1=10;//副本变量
$fbid2=11;//副本变量
$fbid3=12;//副本变量
$fbid4=34;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【监察妖将】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【传令妖将】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【训练妖将】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【守备妖将】(困难)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【金角大王】(困难)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【银角大王】(困难)x1,"."已完成x".$gw6."</font>"."<br>";
} elseif ($rid==12) {
$fb="lhd";//副本变量
$fbid1=10;//副本变量
$fbid2=11;//副本变量
$fbid3=12;//副本变量
$fbid4=34;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【监察妖将】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【传令妖将】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【训练妖将】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【守备妖将】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【金角大王】(梦魇)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【银角大王】(梦魇)x1,"."已完成x".$gw6."</font>"."<br>";


} elseif ($rid==13) {
$fb="byd";//副本变量
$fbid1=13;//副本变量
$fbid2=14;//副本变量
$fbid3=15;//副本变量
$fbid4=35;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【巡逻妖将】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【黑熊厨子】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【黄袍老妖】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【野鹿大王】(普通)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【野熊大王】(普通)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【山妖将军】(普通)x1,"."已完成x".$gw6."</font>"."<br>";



} elseif ($rid==14) {
$fb="byd";//副本变量
$fbid1=13;//副本变量
$fbid2=14;//副本变量
$fbid3=15;//副本变量
$fbid4=35;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【巡逻妖将】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【黑熊厨子】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【黄袍老妖】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【野鹿大王】(困难)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【野熊大王】(困难)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【山妖将军】(困难)x1,"."已完成x".$gw6."</font>"."<br>";



} elseif ($rid==15) {
$fb="byd";//副本变量
$fbid1=13;//副本变量
$fbid2=14;//副本变量
$fbid3=15;//副本变量
$fbid4=35;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【巡逻妖将】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【黑熊厨子】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【黄袍老妖】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【野鹿大王】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【野熊大王】(梦魇)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【山妖将军】(梦魇)x1,"."已完成x".$gw6."</font>"."<br>";






} elseif ($rid==16) {
$fb="bglm";//副本变量
$fbid1=16;//副本变量
$fbid2=17;//副本变量
$fbid3=18;//副本变量
$fbid4=36;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【食尸鬼】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【剥皮鬼】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【白骨将】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【大祭祀】(普通)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【白骨夫人】(普通)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【炼尸鬼】(普通)x1,"."已完成x".$gw6."</font>"."<br>";


} elseif ($rid==17) {
$fb="bglm";//副本变量
$fbid1=16;//副本变量
$fbid2=17;//副本变量
$fbid3=18;//副本变量
$fbid4=36;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【食尸鬼】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【剥皮鬼】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【白骨将】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【大祭祀】(困难)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【白骨夫人】(困难)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【炼尸鬼】(困难)x1,"."已完成x".$gw6."</font>"."<br>";


} elseif ($rid==18) {
$fb="bglm";//副本变量
$fbid1=16;//副本变量
$fbid2=17;//副本变量
$fbid3=18;//副本变量
$fbid4=36;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【食尸鬼】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【剥皮鬼】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【白骨将】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【大祭祀】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【白骨夫人】(梦魇)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【炼尸鬼】(梦魇)x1,"."已完成x".$gw6."</font>"."<br>";



} elseif ($rid==19) {
$fb="sld";//副本变量
$fbid1=19;//副本变量
$fbid2=20;//副本变量
$fbid3=21;//副本变量
$fbid4=37;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀3大BOSS！</font>"."<br>";
echo "<font color=black>【通天教头】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【独角鬼王】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【混世魔王】(普通)x1,"."已完成x".$gw3."</font>"."<br>";

} elseif ($rid==20) {
$fb="sld";//副本变量
$fbid1=19;//副本变量
$fbid2=20;//副本变量
$fbid3=21;//副本变量
$fbid4=37;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀3大BOSS！</font>"."<br>";
echo "<font color=black>【通天教头】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【独角鬼王】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【混世魔王】(困难)x1,"."已完成x".$gw3."</font>"."<br>";

} elseif ($rid==21) {
$fb="sld";//副本变量
$fbid1=19;//副本变量
$fbid2=20;//副本变量
$fbid3=21;//副本变量
$fbid4=37;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀3大BOSS！</font>"."<br>";
echo "<font color=black>【通天教头】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【独角鬼王】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【混世魔王】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";

} elseif ($rid==22) {
$fb="zyt";//副本变量
$fbid1=22;//副本变量
$fbid2=23;//副本变量
$fbid3=24;//副本变量
$fbid4=38;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀5大BOSS！</font>"."<br>";
echo "<font color=black>【九尾天狐】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【双头雪妖】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【冰晶雪后】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【素衣雪女】(普通)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【冰火神兽】(普通)x1,"."已完成x".$gw5."</font>"."<br>";

} elseif ($rid==23) {
$fb="zyt";//副本变量
$fbid1=22;//副本变量
$fbid2=23;//副本变量
$fbid3=24;//副本变量
$fbid4=38;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;

echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀5大BOSS！</font>"."<br>";
echo "<font color=black>【九尾天狐】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【双头雪妖】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【冰晶雪后】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【素衣雪女】(困难)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【冰火神兽】(困难)x1,"."已完成x".$gw5."</font>"."<br>";


} elseif ($rid==24) {
$fb="zyt";//副本变量
$fbid1=22;//副本变量
$fbid2=23;//副本变量
$fbid3=24;//副本变量
$fbid4=38;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;

echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀5大BOSS！</font>"."<br>";
echo "<font color=black>【九尾天狐】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【双头雪妖】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【冰晶雪后】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【素衣雪女】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【冰火神兽】(梦魇)x1,"."已完成x".$gw5."</font>"."<br>";


} elseif ($rid==25) {
$fb="wsc";//副本变量
$fbid1=25;//副本变量
$fbid2=26;//副本变量
$fbid3=27;//副本变量
$fbid4=39;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀3大BOSS！</font>"."<br>";
echo "<font color=black>【鬼面判官】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【索命无常】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【夜叉王】(普通)x1,"."已完成x".$gw3."</font>"."<br>";

} elseif ($rid==26) {
$fb="wsc";//副本变量
$fbid1=25;//副本变量
$fbid2=26;//副本变量
$fbid3=27;//副本变量
$fbid4=39;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀3大BOSS！</font>"."<br>";
echo "<font color=black>【鬼面判官】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【索命无常】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【夜叉王】(困难)x1,"."已完成x".$gw3."</font>"."<br>";


} elseif ($rid==27) {
$fb="wsc";//副本变量
$fbid1=25;//副本变量
$fbid2=26;//副本变量
$fbid3=27;//副本变量
$fbid4=39;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀3大BOSS！</font>"."<br>";
echo "<font color=black>【鬼面判官】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【索命无常】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【夜叉王】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";


} elseif ($rid==28) {
$fb="ljl";//副本变量
$fbid1=28;//副本变量
$fbid2=29;//副本变量
$fbid3=30;//副本变量
$fbid4=40;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【九趾蟠龙】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【九天应龙】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【金眼狻猊】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【赤足青鸟】(普通)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【昊冥玄鸟】(普通)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【麒麟兄弟】(普通)x1,"."已完成x".$gw6."</font>"."<br>";
} elseif ($rid==29) {
$fb="ljl";//副本变量
$fbid1=28;//副本变量
$fbid2=29;//副本变量
$fbid3=30;//副本变量
$fbid4=40;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【九趾蟠龙】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【九天应龙】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【金眼狻猊】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【赤足青鸟】(困难)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【昊冥玄鸟】(困难)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【麒麟兄弟】(困难)x1,"."已完成x".$gw6."</font>"."<br>";





} elseif ($rid==30) {
$fb="ljl";//副本变量
$fbid1=28;//副本变量
$fbid2=29;//副本变量
$fbid3=30;//副本变量
$fbid4=40;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【九趾蟠龙】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【九天应龙】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【金眼狻猊】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【赤足青鸟】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【昊冥玄鸟】(梦魇)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【麒麟兄弟】(梦魇)x1,"."已完成x".$gw6."</font>"."<br>";





} elseif ($rid==31) {
$fb="bjt";//副本变量
$fbid1=1;//副本变量
$fbid2=2;//副本变量
$fbid3=3;//副本变量
$fbid4=31;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";

echo "<font color=black>【措达怙主】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【轮回使者】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【堕落神将】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【宝帐怙主】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";

} elseif ($rid==32) {
$fb="byzzl";//副本变量
$fbid1=4;//副本变量
$fbid2=5;//副本变量
$fbid3=6;//副本变量
$fbid4=32;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀5大BOSS！</font>"."<br>";



echo "<font color=black>【蓝羽蝶后】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【无影貂】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【蛇妖王】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【鬼门虎王】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【黄雀护将】(地狱)x1,"."已完成x".$gw5."</font>"."<br>";


} elseif ($rid==33) {
$fb="yld";//副本变量
$fbid1=7;//副本变量
$fbid2=8;//副本变量
$fbid3=9;//副本变量
$fbid4=33;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
$gw7=$gwbl[怪物7]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀7大BOSS！</font>"."<br>";
echo "<font color=black>【狐将军】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【拔地鼠精】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【百花娘子】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【天香夫人】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【狐女】(地狱)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【狐长老】(地狱)x1,"."已完成x".$gw6."</font>"."<br>";
echo "<font color=black>【黑龙敖历】(地狱)x1,"."已完成x".$gw7."</font>"."<br>";





} elseif ($rid==34) {
$fb="lhd";//副本变量
$fbid1=10;//副本变量
$fbid2=11;//副本变量
$fbid3=12;//副本变量
$fbid4=34;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【监察妖将】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【传令妖将】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【训练妖将】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【守备妖将】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【金角大王】(地狱)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【银角大王】(地狱)x1,"."已完成x".$gw6."</font>"."<br>";




} elseif ($rid==35) {
$fb="byd";//副本变量
$fbid1=13;//副本变量
$fbid2=14;//副本变量
$fbid3=15;//副本变量
$fbid4=35;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
$gw7=$gwbl[怪物7]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【巡逻妖将】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【黑熊厨子】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【黄袍老妖】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【野鹿大王】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【野熊大王】(地狱)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【山妖将军】(地狱)x1,"."已完成x".$gw6."</font>"."<br>";





} elseif ($rid==36) {
$fb="bglm";//副本变量
$fbid1=16;//副本变量
$fbid2=17;//副本变量
$fbid3=18;//副本变量
$fbid4=36;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【食尸鬼】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【剥皮鬼】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【白骨将】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【大祭祀】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【白骨夫人】(地狱)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【炼尸鬼】(地狱)x1,"."已完成x".$gw6."</font>"."<br>";





} elseif ($rid==37) {
$fb="sld";//副本变量
$fbid1=19;//副本变量
$fbid2=20;//副本变量
$fbid3=21;//副本变量
$fbid4=37;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀3大BOSS！</font>"."<br>";
echo "<font color=black>【通天教头】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【独角鬼王】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【混世魔王】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";





} elseif ($rid==38) {
$fb="zyt";//副本变量
$fbid1=22;//副本变量
$fbid2=23;//副本变量
$fbid3=24;//副本变量
$fbid4=38;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;


echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀5大BOSS！</font>"."<br>";
echo "<font color=black>【九尾天狐】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【双头雪妖】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【冰晶雪后】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【素衣雪女】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【冰火神兽】(地狱)x1,"."已完成x".$gw5."</font>"."<br>";


} elseif ($rid==39) {
$fb="wsc";//副本变量
$fbid1=25;//副本变量
$fbid2=26;//副本变量
$fbid3=27;//副本变量
$fbid4=39;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀3大BOSS！</font>"."<br>";
echo "<font color=black>【鬼面判官】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【索命无常】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【夜叉王】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";









} elseif ($rid==40) {
$fb="ljl";//副本变量
$fbid1=28;//副本变量
$fbid2=29;//副本变量
$fbid3=30;//副本变量
$fbid4=40;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;


echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀6大BOSS！</font>"."<br>";
echo "<font color=black>【九趾蟠龙】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【九天应龙】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【金眼狻猊】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【赤足青鸟】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【昊冥玄鸟】(地狱)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【麒麟兄弟】(地狱)x1,"."已完成x".$gw6."</font>"."<br>";



} elseif ($rid==41) {
$fb="jdd";//副本变量
$fbid1=41;//副本变量
$fbid2=42;//副本变量
$fbid3=43;//副本变量
$fbid4=44;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";
echo "<font color=black>【鹿头军师】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【花豹将军】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【山妖头目】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【金兜大王】(普通)x1,"."已完成x".$gw4."</font>"."<br>";




} elseif ($rid==42) {
$fb="jdd";//副本变量
$fbid1=41;//副本变量
$fbid2=42;//副本变量
$fbid3=43;//副本变量
$fbid4=44;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid2;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";
echo "<font color=black>【鹿头军师】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【花豹将军】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【山妖头目】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【金兜大王】(困难)x1,"."已完成x".$gw4."</font>"."<br>";


} elseif ($rid==43) {
$fb="jdd";//副本变量
$fbid1=41;//副本变量
$fbid2=42;//副本变量
$fbid3=43;//副本变量
$fbid4=44;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid3;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";
echo "<font color=black>【鹿头军师】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【花豹将军】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【山妖头目】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【金兜大王】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";

} elseif ($rid==44) {
$fb="jdd";//副本变量
$fbid1=41;//副本变量
$fbid2=42;//副本变量
$fbid3=43;//副本变量
$fbid4=44;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid4;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";
echo "<font color=black>【鹿头军师】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【花豹将军】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【山妖头目】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【金兜大王】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";







} elseif ($rid==45) {
$fb="yc";//副本变量
$fbid1=45;//副本变量
$fbid2=46;//副本变量
$fbid3=47;//副本变量
$fbid4=48;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";
echo "<font color=black>【瑶池守将】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【碧波仙女】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【紫霞仙子】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【王母娘娘】(普通)x1,"."已完成x".$gw4."</font>"."<br>";




} elseif ($rid==46) {
$fb="yc";//副本变量
$fbid1=45;//副本变量
$fbid2=46;//副本变量
$fbid3=47;//副本变量
$fbid4=48;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid2;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";
echo "<font color=black>【瑶池守将】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【碧波仙女】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【紫霞仙子】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【王母娘娘】(困难)x1,"."已完成x".$gw4."</font>"."<br>";

} elseif ($rid==47) {
$fb="yc";//副本变量
$fbid1=45;//副本变量
$fbid2=46;//副本变量
$fbid3=47;//副本变量
$fbid4=48;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid3;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";


echo "<font color=black>【瑶池守将】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【碧波仙女】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【紫霞仙子】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【王母娘娘】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";

} elseif ($rid==48) {
$fb="yc";//副本变量
$fbid1=45;//副本变量
$fbid2=46;//副本变量
$fbid3=47;//副本变量
$fbid4=48;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid4;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";


echo "<font color=black>【瑶池守将】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【碧波仙女】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【紫霞仙子】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【王母娘娘】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";





} elseif ($rid==49) {
$fb="ttsf";//副本变量
$fbid1=49;//副本变量
$fbid2=50;//副本变量
$fbid3=51;//副本变量
$fbid4=52;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";
echo "<font color=black>【黑鳞鲛人】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【倚海龙王】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【银鳞大王】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【金鳞大王】(普通)x1,"."已完成x".$gw4."</font>"."<br>";




} elseif ($rid==50) {
$fb="ttsf";//副本变量
$fbid1=49;//副本变量
$fbid2=50;//副本变量
$fbid3=51;//副本变量
$fbid4=52;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid2;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";
echo "<font color=black>【黑鳞鲛人】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【倚海龙王】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【银鳞大王】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【金鳞大王】(困难)x1,"."已完成x".$gw4."</font>"."<br>";

} elseif ($rid==51) {
$fb="ttsf";//副本变量
$fbid1=49;//副本变量
$fbid2=50;//副本变量
$fbid3=51;//副本变量
$fbid4=52;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid3;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";


echo "<font color=black>【黑鳞鲛人】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【倚海龙王】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【银鳞大王】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【金鳞大王】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";

} elseif ($rid==52) {
$fb="ttsf";//副本变量
$fbid1=49;//副本变量
$fbid2=50;//副本变量
$fbid3=51;//副本变量
$fbid4=52;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid4;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";


echo "<font color=black>【黑鳞鲛人】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【倚海龙王】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【银鳞大王】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【金鳞大王】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";








} elseif ($rid==53) {
$fb="bjd";//副本变量
$fbid1=53;//副本变量
$fbid2=54;//副本变量
$fbid3=55;//副本变量
$fbid4=56;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀两大BOSS！</font>"."<br>";
echo "<font color=black>【铁扇公主】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【牛魔王】(普通)x1,"."已完成x".$gw2."</font>"."<br>";





} elseif ($rid==54) {
$fb="bjd";//副本变量
$fbid1=53;//副本变量
$fbid2=54;//副本变量
$fbid3=55;//副本变量
$fbid4=56;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid2;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀两大BOSS！</font>"."<br>";
echo "<font color=black>【铁扇公主】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【牛魔王】(困难)x1,"."已完成x".$gw2."</font>"."<br>";


} elseif ($rid==55) {
$fb="bjd";//副本变量
$fbid1=53;//副本变量
$fbid2=54;//副本变量
$fbid3=55;//副本变量
$fbid4=56;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid3;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀两大BOSS！</font>"."<br>";


echo "<font color=black>【铁扇公主】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【牛魔王】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";


} elseif ($rid==56) {
$fb="bjd";//副本变量
$fbid1=53;//副本变量
$fbid2=54;//副本变量
$fbid3=55;//副本变量
$fbid4=56;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid4;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀两大BOSS！</font>"."<br>";


echo "<font color=black>【铁扇公主】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【牛魔王】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";




} elseif ($rid==57) {
$fb="xlys";//副本变量
$fbid1=57;//副本变量
$fbid2=58;//副本变量
$fbid3=59;//副本变量
$fbid4=60;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀5大BOSS！</font>"."<br>";
echo "<font color=black>【守门金刚】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【灵山接引僧】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【迦叶】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【青莲妖女】(普通)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【黄眉老佛】(普通)x1,"."已完成x".$gw5."</font>"."<br>";



} elseif ($rid==58) {
$fb="xlys";//副本变量
$fbid1=57;//副本变量
$fbid2=58;//副本变量
$fbid3=59;//副本变量
$fbid4=60;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid2;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀5大BOSS！</font>"."<br>";
echo "<font color=black>【守门金刚】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【灵山接引僧】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【迦叶】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【青莲妖女】(困难)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【黄眉老佛】(困难)x1,"."已完成x".$gw5."</font>"."<br>";
} elseif ($rid==59) {
$fb="xlys";//副本变量
$fbid1=57;//副本变量
$fbid2=58;//副本变量
$fbid3=59;//副本变量
$fbid4=60;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid3;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀5大BOSS！</font>"."<br>";


echo "<font color=black>【守门金刚】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【灵山接引僧】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【迦叶】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【青莲妖女】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【黄眉老佛】(梦魇)x1,"."已完成x".$gw5."</font>"."<br>";
} elseif ($rid==60) {
$fb="xlys";//副本变量
$fbid1=57;//副本变量
$fbid2=58;//副本变量
$fbid3=59;//副本变量
$fbid4=60;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid4;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀5大BOSS！</font>"."<br>";


echo "<font color=black>【守门金刚】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【灵山接引僧】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【迦叶】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【青莲妖女】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【黄眉老佛】(地狱)x1,"."已完成x".$gw5."</font>"."<br>";		





} elseif ($rid==61) {
$fb="psd";//副本变量
$fbid1=61;//副本变量
$fbid2=62;//副本变量
$fbid3=63;//副本变量
$fbid4=64;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
$gw7=$gwbl[怪物7]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀7大BOSS！</font>"."<br>";
echo "<font color=black>【七蛛精·红】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【六蛛精·橙】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【五蛛精·黄】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【四蛛精·紫】(普通)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【二蛛精·白】(普通)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【三蛛精·蓝】(普通)x1,"."已完成x".$gw6."</font>"."<br>";
echo "<font color=black>【大蛛精·黑】(普通)x1,"."已完成x".$gw7."</font>"."<br>";




} elseif ($rid==62) {
$fb="psd";//副本变量
$fbid1=61;//副本变量
$fbid2=62;//副本变量
$fbid3=63;//副本变量
$fbid4=64;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid2;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
$gw7=$gwbl[怪物7]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀7大BOSS！</font>"."<br>";
echo "<font color=black>【七蛛精·红】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【六蛛精·橙】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【五蛛精·黄】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【四蛛精·紫】(困难)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【二蛛精·白】(困难)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【三蛛精·蓝】(困难)x1,"."已完成x".$gw6."</font>"."<br>";
echo "<font color=black>【大蛛精·黑】(困难)x1,"."已完成x".$gw7."</font>"."<br>";

} elseif ($rid==63) {
$fb="psd";//副本变量
$fbid1=61;//副本变量
$fbid2=62;//副本变量
$fbid3=63;//副本变量
$fbid4=64;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid3;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
$gw7=$gwbl[怪物7]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀7大BOSS！</font>"."<br>";
echo "<font color=black>【七蛛精·红】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【六蛛精·橙】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【五蛛精·黄】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【四蛛精·紫】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【二蛛精·白】(梦魇)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【三蛛精·蓝】(梦魇)x1,"."已完成x".$gw6."</font>"."<br>";
echo "<font color=black>【大蛛精·黑】(梦魇)x1,"."已完成x".$gw7."</font>"."<br>";


} elseif ($rid==64) {
$fb="psd";//副本变量
$fbid1=61;//副本变量
$fbid2=62;//副本变量
$fbid3=63;//副本变量
$fbid4=64;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid4;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
$gw5=$gwbl[怪物5]-1;
$gw6=$gwbl[怪物6]-1;
$gw7=$gwbl[怪物7]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀7大BOSS！</font>"."<br>";
echo "<font color=black>【七蛛精·红】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【六蛛精·橙】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【五蛛精·黄】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【四蛛精·紫】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";
echo "<font color=black>【二蛛精·白】(地狱)x1,"."已完成x".$gw5."</font>"."<br>";
echo "<font color=black>【三蛛精·蓝】(地狱)x1,"."已完成x".$gw6."</font>"."<br>";
echo "<font color=black>【大蛛精·黑】(地狱)x1,"."已完成x".$gw7."</font>"."<br>";



} elseif ($rid==65) {
$fb="std";//副本变量
$fbid1=65;//副本变量
$fbid2=66;//副本变量
$fbid3=67;//副本变量
$fbid4=68;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀3大BOSS！</font>"."<br>";
echo "<font color=black>【狮驼王】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【白象尊者】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【大鹏明王】(普通)x1,"."已完成x".$gw3."</font>"."<br>";





} elseif ($rid==66) {
$fb="std";//副本变量
$fbid1=65;//副本变量
$fbid2=66;//副本变量
$fbid3=67;//副本变量
$fbid4=68;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid2;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀3大BOSS！</font>"."<br>";
echo "<font color=black>【狮驼王】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【白象尊者】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【大鹏明王】(困难)x1,"."已完成x".$gw3."</font>"."<br>";

} elseif ($rid==67) {
$fb="std";//副本变量
$fbid1=65;//副本变量
$fbid2=66;//副本变量
$fbid3=67;//副本变量
$fbid4=68;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid3;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀3大BOSS！</font>"."<br>";
echo "<font color=black>【狮驼王】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【白象尊者】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【大鹏明王】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";


} elseif ($rid==68) {
$fb="std";//副本变量
$fbid1=65;//副本变量
$fbid2=66;//副本变量
$fbid3=67;//副本变量
$fbid4=68;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid4;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀3大BOSS！</font>"."<br>";
echo "<font color=black>【狮驼王】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【白象尊者】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【大鹏明王】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";





} elseif ($rid==69) {
$fb="wdd";//副本变量
$fbid1=69;//副本变量
$fbid2=70;//副本变量
$fbid3=71;//副本变量
$fbid4=72;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";
echo "<font color=black>【白鼠精】(普通)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【黑鼠精】(普通)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【田鼠精】(普通)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【黄鼠精】(普通)x1,"."已完成x".$gw4."</font>"."<br>";


} elseif ($rid==70) {
$fb="wdd";//副本变量
$fbid1=69;//副本变量
$fbid2=70;//副本变量
$fbid3=71;//副本变量
$fbid4=72;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";
echo "<font color=black>【白鼠精】(困难)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【黑鼠精】(困难)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【田鼠精】(困难)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【黄鼠精】(困难)x1,"."已完成x".$gw4."</font>"."<br>";

} elseif ($rid==71) {
$fb="wdd";//副本变量
$fbid1=69;//副本变量
$fbid2=70;//副本变量
$fbid3=71;//副本变量
$fbid4=72;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";
echo "<font color=black>【白鼠精】(梦魇)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【黑鼠精】(梦魇)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【田鼠精】(梦魇)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【黄鼠精】(梦魇)x1,"."已完成x".$gw4."</font>"."<br>";

} elseif ($rid==72) {
$fb="wdd";//副本变量
$fbid1=69;//副本变量
$fbid2=70;//副本变量
$fbid3=71;//副本变量
$fbid4=72;//副本变量
include("./ini/fb_ini.php");
$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));
$gw1=$gwbl[怪物1]-1;
$gw2=$gwbl[怪物2]-1;
$gw3=$gwbl[怪物3]-1;
$gw4=$gwbl[怪物4]-1;
echo "<font color=black>【".$rwname."】</font></a>"."<br>"; 
echo "<font color=black>副本激活成功！请前往副本内击杀4大BOSS！</font>"."<br>";
echo "<font color=black>【白鼠精】(地狱)x1,"."已完成x".$gw1."</font>"."<br>";
echo "<font color=black>【黑鼠精】(地狱)x1,"."已完成x".$gw2."</font>"."<br>";
echo "<font color=black>【田鼠精】(地狱)x1,"."已完成x".$gw3."</font>"."<br>";
echo "<font color=black>【黄鼠精】(地狱)x1,"."已完成x".$gw4."</font>"."<br>";




} else{



} 












//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=47;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回日常任务</font></a>"."<br>";

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