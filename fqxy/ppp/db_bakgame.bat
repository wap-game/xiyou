

@echo off&setlocal enabledelayedexpansion
set Ymd=%date:~,4%%date:~5,2%%date:~8,2%


set "topa3=D:\数据备份\%ymd%\游戏缓存\ache\"
set "topa4=D:\数据备份\%ymd%\游戏缓存\acher\"

set "topa6=D:\数据备份\%ymd%\数据库\xyy\"



xcopy D:\WWW\fqxy\ache\*.* %topa3% /s /e /h /d /y
xcopy D:\WWW\fqxy\acher\*.* %topa4% /s /e /h /d /y


xcopy C:\phpStudy\MySQL\data\xyy\*.* %topa6% /s /e /h /d /y




