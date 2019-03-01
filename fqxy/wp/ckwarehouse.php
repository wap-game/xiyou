<?php


//ini文件名字
$inina="yl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('背包仓库银两',['仓库银两']));




$yl=$wjxx[仓库银两];





$b=mb_strlen($yl,'UTF8'); 


if ($yl>99999999999) {
$b=12;

include("./sql/mysql.php");//调用数据库连接 
//更新数据库数据
$q2="all_yl";
$strsql = "update $q2 set ckyl=99999999999 where wjid=$wjid";
$result = @mysql_query($strsql);

//更新本地数据
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包仓库银两', ['仓库银两' => 99999999999]);




}

if ($b==1||$b==2||$b==3||$b==4) {
//将数据分割为两
$y=0;
$w=0;
$yy=$yl;
} elseif ($b==5||$b==6||$b==7||$b==8) {
//将数据分割为万两

if ($b==5) {
$array = str_split($yl, 1);
$y=0;
$w=$array[0]*1;
$yy=$array[1]*1000+$array[2]*100+$array[3]*10+$array[4]*1;

}

if ($b==6) {
$array = str_split($yl, 1);
$y=0;
$w=$array[0]*10+$array[1]*1;
$yy=$array[2]*1000+$array[3]*100+$array[4]*10+$array[5]*1;

}
if ($b==7) {
$array = str_split($yl, 1);
$y=0;
$w=$array[0]*100+$array[1]*10+$array[2]*1;
$yy=$array[3]*1000+$array[4]*100+$array[5]*10+$array[6]*1;

}

if ($b==8) {
$array = str_split($yl, 1);
$y=0;

$w=$array[0]*1000+$array[1]*100+$array[2]*10+$array[3]*1;
$yy=$array[4]*1000+$array[5]*100+$array[6]*10+$array[7]*1;

}

} elseif ($b>=9) {
//将数据分割为亿万两
if ($b==9) {
$array = str_split($yl, 1);
$y=$array[0]*1;
$w=$array[1]*1000+$array[2]*100+$array[3]*10+$array[4]*1;
$yy=$array[5]*1000+$array[6]*100+$array[7]*10+$array[8]*1;
}

if ($b==10) {
$array = str_split($yl, 1);
$y=$array[0]*10+$array[1]*1;
$w=$array[2]*1000+$array[3]*100+$array[4]*10+$array[5]*1;
$yy=$array[6]*1000+$array[7]*100+$array[8]*10+$array[9]*1;
}

if ($b==11) {
$array = str_split($yl, 1);
$y=$array[0]*100+$array[1]*10+$array[2]*1;
$w=$array[3]*1000+$array[4]*100+$array[5]*10+$array[6]*1;
$yy=$array[7]*1000+$array[8]*100+$array[9]*10+$array[10]*1;
}
if ($b==12) {
$array = str_split($yl, 1);
$y=999;
$w=999;
$yy=999;
}




}






if ($y>0) {
echo "<font color=black>$y</font>"."<font color=black>亿</font>";
}


if ($w>0) {
echo "<font color=black>$w</font>"."<font color=black>万</font>";
}
if ($yy>0) {
echo "<font color=black>$yy</font>";
}
if ($yl==0) {
echo "<font color=black>$yl</font>";
}

echo "<font color=black>两</font>"."<br>";



?>




