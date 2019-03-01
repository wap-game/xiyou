<?php

	

if($npcc >=1&&$npcc<=100){
include("zbxx01.php");
} elseif($npcc >=101&&$npcc<=200){
include("zbxx02.php");
} elseif($npcc >=201&&$npcc<=300){
include("zbxx03.php");
} elseif($npcc >=301&&$npcc<=400){
include("zbxx04.php");

} elseif($npcc >=401&&$npcc<=500){
include("zbxx05.php");


} elseif($npcc >=501&&$npcc<=600){
include("zbxx06.php");

} elseif($npcc >=601&&$npcc<=700){
include("zbxx07.php");
} elseif($npcc >=701&&$npcc<=800){
include("zbxx08.php");





} else{

echo "<font color=black>没有这个装备id编号".$npcc."请尝试联系gm解决此问题！！</font><br>";

}

?>




