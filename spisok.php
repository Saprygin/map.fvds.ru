<html>
<body>
<?php
$sdd_db_host='localhost';// ��� ����� ��� ���������, �������� ���� ���� ������
$sdd_db_name='mappoint';// ��� ���� ������ � ������� �� ������ ��������, ��� ��� �� ����� ���� ���������
$sdd_db_user='root';// ����� ������ � ���� ������
$sdd_db_pass='89131418875';// ������ ������� � ���� ������
@mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);// ������������� ����� � ��������
@mysql_select_db($sdd_db_name;// ������������� �� ������ ��� ���� ������
$result=mysql_query('SELECT * FROM `mappoint`');// ������ ������� �� �������
while($row=mysql_fetch_array($result))// ����� ���������� �� ������ ������
{ echo '<p>������ id='.$row['id'].'. �����: '.$row['name'].'</p>';// ������� ������
}
?>
</body>
</html>