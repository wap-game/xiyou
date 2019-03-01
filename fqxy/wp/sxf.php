<?php


$b=mb_strlen($yl,'UTF8'); 

//include("wp/func1.php");

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

$y=999;
$w=999;
$yy=999;
}




}






if ($y>0) {
echo "<font color=".$clor.">$y</font>"."<font color=".$clor.">亿</font>";
}


if ($w>0) {
echo "<font color=".$clor.">$w</font>"."<font color=".$clor.">万</font>";
}
if ($yy>0) {
echo "<font color=".$clor.">$yy</font>";
}
if ($yl==0) {
echo "<font color=".$clor.">$yl</font>";
}

echo "<font color=".$clor.">两</font>";


?>




