<?php
include("./ini/kswin_ini.php");
$win=($iniFile->getItem('矿山','初始'));

if($win ==1){	
$oysxx=rand(1, 2);
$oysbv=7;
} elseif ($win ==2) {	
$oysxx=rand(1, 2);
$oysbv=13;
} elseif ($win ==3) {
$oysxx=rand(1, 2);//1800
$oysbv=20;
} elseif ($win ==4) {
$oysxx=rand(1, 2);
$oysbv=27;
} elseif ($win ==5) {
$oysxx=rand(1, 2);
$oysbv=34;
} elseif ($win ==6) {
$oysxx=rand(1, 4);//3000
$oysbv=24;
} elseif ($win ==7) {
$oysxx=rand(1, 4);
$oysbv=28;
} elseif ($win ==8) {
$oysxx=rand(1, 4);
$oysbv=32;
} elseif ($win ==9) {
$oysxx=rand(1, 4);
$oysbv=36;
} elseif ($win ==10) {
$oysxx=rand(1, 4);	
$oysbv=38;
} elseif ($win ==11) {
$oysxx=rand(1, 4);	
$oysbv=40;
} elseif ($win ==12) {
$oysxx=rand(1, 2);	//1800
$oysbv=70;	
} elseif ($win ==13) {
$oysxx=rand(1, 2);	//1800
$oysbv=74;	
} elseif ($win ==14) {
$oysxx=rand(1, 2);	//1800
$oysbv=80;	
} elseif ($win ==15) {
$oysxx=rand(1, 4);	//3000
$oysbv=52;	
} elseif ($win ==16) {
$oysxx=rand(1, 4);	//3000
$oysbv=56;	
} elseif ($win ==17) {
$oysxx=rand(1, 4);	//3000
$oysbv=60;	
} elseif ($win ==18) {
$oysxx=rand(1, 4);	//3000
$oysbv=64;	
} elseif ($win ==19) {
$oysxx=rand(1, 4);	//3000
$oysbv=68;	
} elseif ($win ==20) {
$oysxx=rand(1, 4);	//3000
$oysbv=72;	
} elseif ($win ==21) {
$oysxx=rand(1, 4);	//3000
$oysbv=76;	
} else{
$oysxx=rand(1, 2);
$oysbv=7;
} 
$mapbvv=$oysxx*$mapbv;





?>



