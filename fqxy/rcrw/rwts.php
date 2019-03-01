<?	

include("./ini/xtsz_ini.php");

$tpbl=($iniFile->getItem('显示设置','图片显示'));


if ($rcrwbl==1||$rcrwbl==3) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='./pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
  
  } elseif ($rcrwbl==2&&$hdcs!=0) {

   ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='./pic/ts/ts2.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>？</font>"; 

}
  //////////////////////////////////////插入图片  //////////////////////////
  } else{
	  
	
if ($hdcs>0) {

 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='./pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<font color=black>！</font>"; 

}  
	  
	} else{  
	  
	  }
	  
	  
	  


}

?>