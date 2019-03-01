<?php



$tzms="";
if($tzhp>=1){
$tzms=$tzms."血量+".$tzhp."&nbsp";	
} else{	
}
if($tzgj>=1){
$tzms=$tzms."攻击+".$tzgj."&nbsp";	
} else{	
}
if($tzmg>=1){
$tzms=$tzms."魔攻+".$tzmg."&nbsp";	
} else{	
}
if($tzfy>=1){
$tzms=$tzms."防御+".$tzmg."&nbsp";	
} else{	
}
if($tzms!=""){
$tzms=$tzms."</br>";		
} else{	
}
if($tzbg>=1){
$tzms=$tzms."冰攻+".$tzbg."&nbsp";		
} else{	
}
if($tzhg>=1){
$tzms=$tzms."火攻+".$tzhg."&nbsp";		
} else{	
}
if($tzlg>=1){
$tzms=$tzms."雷攻+".$tzlg."&nbsp";		
} else{	
}
if($tzbg>=1||$tzhg>=1||$tzlg>=1){
$tzms=$tzms."</br>";		
} else{	
}
if($tzbf>=1){
$tzms=$tzms."冰防+".$tzbf."&nbsp";		
} else{	
}
if($tzhf>=1){
$tzms=$tzms."火防+".$tzhf."&nbsp";		
} else{	
}
if($tzlf>=1){
$tzms=$tzms."雷防+".$tzlf."&nbsp";		
} else{	
}
if($tzbf>=1||$tzhf>=1||$tzlf>=1){
$tzms=$tzms."</br>";		
} else{	
}




?>


