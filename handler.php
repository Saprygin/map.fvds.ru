<?php
// ������� ����� ��������� ������� �����
// ��� ������ ������� "DELETE FROM table_1 WHERE id IN (1,3,5,7)"
// �������� ������ ���������� checkbox
$type = $_POST[`type`];
if(!empty($type))
{
// �������� ����������� ����������, ���������� ���� ������
// � ������� "(3,5,6,7)"
$query = "(" ;
foreach($type as $val) $query.= "$val,";
// ������� ��������� �������, ������� �� ����������� �������)
$query = substr($query, 0, strlen($query) - 1 ). ")" ;
// ��������� ������������ SQL-������� �� ��������
$query = "SELECT FROM mappoint WHERE id IN ".$query;
// ��������� ������
if(!mysql_query($query))
{
echo mysql_error()."<br>";
echo $query."<br>";
}
}
?>