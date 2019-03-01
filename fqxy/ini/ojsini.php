<?php

if($zsspd2==1){


 flock($fp2,LOCK_UN);
} else{	
//调用服务器繁忙页面
//include("fm.php");
echo "服务器开小差了";
}
fclose($fp2);

?>