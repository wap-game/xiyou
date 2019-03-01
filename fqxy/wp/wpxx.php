<?php



if($npcc >=1&&$npcc<=100){
include("wpxx01.php");
} elseif($npcc >=101&&$npcc<=200){
include("wpxx02.php");
} elseif($npcc >=201&&$npcc<=300){
include("wpxx03.php");
} elseif($npcc >=301&&$npcc<=400){
include("wpxx04.php");
} elseif($npcc >=401&&$npcc<=500){
include("wpxx05.php");

} elseif($npcc >=501&&$npcc<=600){
include("wpxx06.php");

} elseif($npcc >=601&&$npcc<=700){
include("wpxx07.php");
} elseif($npcc >=701&&$npcc<=800){
include("wpxx08.php");
} elseif($npcc >=801&&$npcc<=900){
include("wpxx09.php");
} elseif($npcc >=901&&$npcc<=1000){
include("wpxx10.php");
} elseif($npcc >=1001&&$npcc<=1100){
include("wpxx11.php");
} elseif($npcc >=1101&&$npcc<=1200){
include("wpxx12.php");


} else{

echo "<font color=black>没有这个物品id编号".$npcc."请尝试联系gm解决此问题！！</font><br>";

}





















	

?>




