<?php
// Удалить сразу несколько записей можно
// при помощи запроса "DELETE FROM table_1 WHERE id IN (1,3,5,7)"
// Получаем список отмеченных checkbox
$type = $_POST[`type`];
if(!empty($type))
{
// Начинаем формировать переменную, содержащую этот список
// в формате "(3,5,6,7)"
$query = "(" ;
foreach($type as $val) $query.= "$val,";
// Удаляем последнюю запятую, заменяя ее закрывающей скобкой)
$query = substr($query, 0, strlen($query) - 1 ). ")" ;
// Завершаем формирование SQL-запроса на удаление
$query = "SELECT FROM mappoint WHERE id IN ".$query;
// Выполняем запрос
if(!mysql_query($query))
{
echo mysql_error()."<br>";
echo $query."<br>";
}
}
?>