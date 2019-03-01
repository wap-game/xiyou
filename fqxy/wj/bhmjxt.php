<?php




	
$file01="./mb/bhxt0x99999.php";
if(file_exists($file01)){


}else{
	
$nowtime=date('Y-m-d');
$zlmb='$mb';
file_put_contents($file01,"<?
$zlmb='".$nowtime."';
?>");			
}











?>


