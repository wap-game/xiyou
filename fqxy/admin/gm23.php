<?php



echo "<font color=red>【公共数据管理】</font>"."<br>";







function deldir($dir) {
  //先删除目录下的文件：
  $dh=opendir($dir);
  while ($file=readdir($dh)) {
    if($file!="." && $file!="..") {
      $fullpath=$dir."/".$file;
      if(!is_dir($fullpath)) {
          unlink($fullpath);
      } else {
          deldir($fullpath);
      }
    }
  }
  
  closedir($dh);

}



$path='acher/boss';
deldir($path);
$path='acher/bp';
deldir($path);
$path='acher/gz';
deldir($path);
$path='acher/lock';
deldir($path);
$path='acher/lt';
deldir($path);
$path='acher/map';
deldir($path);
$path='acher/phb';
deldir($path);


echo "<font color=black>公共数据刷新完毕</font>"."<br>";







echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><font color=blue>【返回GM管理首页】</font></a>"."<br>";

echo "<br>";
echo "<font color=black>---------------------</font>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";


















?>





