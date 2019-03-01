<?php




if($cwid >=1&&$cwid<=100){
include("cwxx01.php");
} elseif($cwid >=101&&$cwid<=200){
include("cwxx02.php");
} elseif($cwid >=201&&$cwid<=300){
include("cwxx03.php");
} elseif($cwid >=301&&$cwid<=400){
include("cwxx04.php");
} elseif($cwid >=401&&$cwid<=500){
include("cwxx05.php");











} else{

echo "<font color=black>没有这个宠物id编号".$cwid."请尝试联系gm解决此问题！！</font><br>";

}



?>




