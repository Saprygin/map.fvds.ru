<?php
$sdb_name = "localhost";
$user_name = "root";
$user_password = "89131418875";
$db_name = "mappoint";
 
// ���������� � �������� ���� ������
if(!$link = mysql_connect($sdb_name, $user_name, $user_password))
{
  echo "<br>�� ���� ����������� � �������� ���� ������<br>";
  exit();
}
 
// �������� ���� ������
if(!mysql_select_db($db_name, $link))
{
  echo "<br>�� ���� ������� ���� ������<br>";
  exit();
}
 
mysql_query('SET NAMES utf8');
 
?>
