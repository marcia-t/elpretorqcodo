set FECHA=%date%
set FECHA=%FECHA:/=%
set FECHA=%FECHA: =%
set FECHA=%FECHA::=%
set FECHA=%FECHA:,=%
set FILE=C:\\Backups\\Backup_%FECHA%.sql
"C:/Program Files (x86)/MySQL/MySQL Workbench CE 5.2.40/mysqldump" -u root -proot sistema > %FILE%