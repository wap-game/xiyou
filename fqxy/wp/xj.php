<?php

//装备星级加属性
if($xvjj!=0){
if($wp14>0){
$xjxl=ceil(($wp14)/ 3)*($xvjj+($xvjj-1));
//$wp14=$xjxl*2;
}

if($wp15>0){
$xjgj=ceil(($wp15)/ 3)*($xvjj+($xvjj-1));
//$wp15=$xjgj*2;
}

if($wp16>0){
$xjmg=ceil(($wp16)/ 3)*($xvjj+($xvjj-1));
//$wp16=$xjmg*2;
}
if($wp17>0){
$xjfy=ceil(($wp17)/ 3)*($xvjj+($xvjj-1));
//$wp17=$xjfy*2;
}


}


if($xvjj!=0){

if($xvjj!=18||$xvjj!=27||$xvjj!=36||$xvjj!=45||$xvjj!=54){
$xjj=$xvjj%9;


if($xjj==0){
$xjj=9;
}


} else{

$xjj=9;

}




} else{

$xjj="无";


}
?>




