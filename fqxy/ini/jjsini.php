<?php

if($zsspd5==1){


 flock($fp5,LOCK_UN);
} else{	
//调用服务器繁忙页面
//include("fm.php");
echo "fm";
}


?>