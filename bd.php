<?php
 
$sdb_name = "localhost"; //адрес сервера базы данных, обычно  localhost
$user_name = "root"; //логин пользователя
$user_password = "89131418875"; //пароль пользователя
$db_name = "mappoint"; //имя базы данных MySQL
 
// соединение с сервером базы данных
if(!$link = mysql_connect($sdb_name, $user_name, $user_password))
{
  echo "<br>Не могу соединиться с сервером базы данных<br>";
  exit();
}
 
// выбираем базу данных
if(!mysql_select_db($db_name, $link))
{
  echo "<br>Не могу выбрать базу данных<br>";
  exit();
}
 
mysql_query('SET NAMES utf8');
 
?>