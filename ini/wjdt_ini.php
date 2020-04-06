<?php

$inina = "wjdt.ini";
$path = '../acher';
$file = $path . "/" . $inina;
if (file_exists($file)) {

} else {
    file_put_contents($file, "[玩家动态]");
    # 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);
    $iniFile->addItem('玩家排序', ['初始' => '排序']);
    $iniFile->addItem('玩家idd', ['初始' => 123]);
    $iniFile->addItem('玩家发言', ['初始' => 123]);
    $iniFile->addItem('年', ['初始' => 123]);
    $iniFile->addItem('月', ['初始' => 123]);
    $iniFile->addItem('日', ['初始' => 123]);
    $iniFile->addItem('时', ['初始' => 123]);
    $iniFile->addItem('分', ['初始' => 123]);
    $iniFile->addItem('秒', ['初始' => 123]);
}
$iniFile = new iniFile($file);
?>