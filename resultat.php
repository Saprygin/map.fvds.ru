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
 $resultat = mysql_query("SELECT COUNT(*) FROM mappoint");
 $row = mysql_fetch_row($resultat);
 $total = $row[0]; // ����� �������
 echo $total;
?>