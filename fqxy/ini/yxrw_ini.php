<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina = "yxrw.ini";
$path = 'ache/' . $wjid;
$file = $path . "/" . $inina;
if (file_exists($file)) {

} else {

    //连接数据库提取数据写入ini
    $inina = "yxrw.ini";
    $path = 'ache/' . $wjid;
    $file = $path . "/" . $inina;
    //创建文件
    file_put_contents($file, "[玩家背包]");
    # 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);
    $iniFile->addItem('主线任务', ['初始' => 123]);
    $iniFile->addItem('主线任务名字', ['初始' => 123]);
    $iniFile->addItem('主线任务已杀怪', ['初始' => 123]);
    $iniFile->addItem('主线任务要杀怪', ['初始' => 123]);

    $iniFile->addItem('支线任务', ['初始' => 123]);
    $iniFile->addItem('支线任务名字', ['初始' => 123]);
    $iniFile->addItem('支线任务已杀怪', ['初始' => 123]);
    $iniFile->addItem('支线任务要杀怪', ['初始' => 123]);

    $iniFile->addItem('日常任务', ['初始' => 123]);
    $iniFile->addItem('日常任务名字', ['初始' => 123]);
    $iniFile->addItem('日常任务已杀怪', ['初始' => 123]);
    $iniFile->addItem('日常任务要杀怪', ['初始' => 123]);

    $iniFile->addItem('活动任务', ['初始' => 123]);
    $iniFile->addItem('活动任务名字', ['初始' => 123]);
    $iniFile->addItem('活动任务已杀怪', ['初始' => 123]);
    $iniFile->addItem('活动任务要杀怪', ['初始' => 123]);

    include("./sql/mysql.php");//调用数据库连接

    $q2 = "yxrw" . $wjid;

    mysql_query("set names utf8");
    $str = "select * from $q2";
    $result = mysql_query($str) or die('SQL语句有误');
    //把有值的数据存入一个数组
    $m = 0;

    while (!!$row = mysql_fetch_array($result)) {

        if ($row[rwfl] == 1) {
            $iniFile->addItem('主线任务', [$row[rwid] => $row[rwid]]);
            $iniFile->addItem('主线任务名字', [$row[rwid] => $row[rwmz]]);
            $iniFile->addItem('主线任务已杀怪', [$row[rwid] => $row[yisg]]);
            $iniFile->addItem('主线任务要杀怪', [$row[rwid] => $row[ysg]]);

        } elseif ($row[rwfl] == 2) {

            $iniFile->addItem('支线任务', [$row[rwid] => $row[rwid]]);
            $iniFile->addItem('支线任务名字', [$row[rwid] => $row[rwmz]]);
            $iniFile->addItem('支线任务已杀怪', [$row[rwid] => $row[yisg]]);
            $iniFile->addItem('支线任务要杀怪', [$row[rwid] => $row[ysg]]);
        } elseif ($row[rwfl] == 3) {

            $iniFile->addItem('日常任务', [$row[rwid] => $row[rwid]]);
            $iniFile->addItem('日常任务名字', [$row[rwid] => $row[rwmz]]);
            $iniFile->addItem('日常任务已杀怪', [$row[rwid] => $row[yisg]]);
            $iniFile->addItem('日常任务要杀怪', [$row[rwid] => $row[ysg]]);

        } elseif ($row[rwfl] == 4) {

            $iniFile->addItem('活动任务', [$row[rwid] => $row[rwid]]);
            $iniFile->addItem('活动任务名字', [$row[rwid] => $row[rwmz]]);
            $iniFile->addItem('活动任务已杀怪', [$row[rwid] => $row[yisg]]);
            $iniFile->addItem('活动任务要杀怪', [$row[rwid] => $row[ysg]]);
        } else {

        }
    }
}

$iniFile = new iniFile($file);

?>