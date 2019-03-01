<?php

if($npcc ==1&&$npcc<=100){
include("zxrw01.php");
} elseif($npcc >=101&&$npcc<=200){
include("zxrw02.php");
} elseif($npcc >=201&&$npcc<=300){
include("zxrw03.php");
} elseif($npcc >=301&&$npcc<=400){
include("zxrw04.php");
} elseif($npcc >=401&&$npcc<=500){
include("zxrw05.php");











} else{

echo "<font color=black>没有这个任务id编号".$npcc."请尝试联系gm解决此问题！！</font><br>";

}
?>