

@echo off&setlocal enabledelayedexpansion
set Ymd=%date:~,4%%date:~5,2%%date:~8,2%
set "topa1=D:\数据备份\%ymd%\社区缓存\ache\"
set "topa2=D:\数据备份\%ymd%\社区缓存\acher\"



set "topa5=D:\数据备份\%ymd%\数据库\xxjyuser\"



xcopy D:\WWW\ache\*.* %topa1% /s /e /h /d /y
xcopy D:\WWW\acher\*.* %topa2% /s /e /h /d /y



xcopy C:\phpStudy\MySQL\data\xxjyuser\*.* %topa5% /s /e /h /d /y





