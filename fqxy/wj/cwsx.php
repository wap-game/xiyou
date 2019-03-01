<?php






//宠物星级加成
if($cw03>=2){
$cw03=1+$cw03/20;	
} else{	
$cw03=1;	
}
//宠物星级加成







//宠物品质加成
if($cw04==1){
$cw04=1;	
} elseif($cw04==2){  
$cw04=1.2;	
} elseif($cw04==3){  
$cw04=1.3;	
} elseif($cw04==4){  
$cw04=1.4;	
} elseif($cw04==5){  
$cw04=1.5;	
} elseif($cw04==6){  
$cw04=1.6;	
} else{	
$cw04=1;	
}
//宠物品质加成

//宠物变异加成
if($cw19==1){
$cw19=1;	
} elseif($cw19==2){  
$cw19=1.2;	
} elseif($cw19==3){  
$cw19=1.3;	
} elseif($cw19==4){  
$cw19=1.4;	
} elseif($cw19==5){  
$cw19=1.5;	
} elseif($cw19==6){  
$cw19=2;	
} else{	
$cw19=1;	
}
//宠物变异加成
















?>


