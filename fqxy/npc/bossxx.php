<?php

if($npcc >=1&&$npcc<=100){

include("bossxx01.php");

} elseif($npcc >=101&&$npcc<=200){
include("bossxx02.php");
} elseif($npcc >=201&&$npcc<=300){
include("bossxx03.php");
} elseif($npcc >=301&&$npcc<=400){
include("bossxx04.php");
} elseif($npcc >=401&&$npcc<=500){
include("bossxx05.php");
} elseif($npcc >=501&&$npcc<=600){
include("bossxx06.php");
} elseif($npcc >=601&&$npcc<=700){
include("bossxx07.php");
} elseif($npcc >=701&&$npcc<=800){
include("bossxx08.php");



} elseif($npcc ==5196||$npcc==5197){//主线任务特殊npc




} else{

echo "<font color=black>没有这个boss=id编号".$npcc."请尝试联系gm解决此问题！！</font><br>";

}















?>



