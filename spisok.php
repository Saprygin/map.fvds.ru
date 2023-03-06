<html>
<body>
<?php
$sdd_db_host='localhost';// ваш адрес где находится, хостится ваша база данных
$sdd_db_name='mappoint';// Имя базы данных с которой вы хотите работать, так как их может быть множество
$sdd_db_user='root';// логин доступ к базе данных
$sdd_db_pass='89131418875';// пароль доступа к базе данных
@mysql_connect($sdd_db_host,$sdd_db_user,$sdd_db_pass);// устанавливаем связь с сервером
@mysql_select_db($sdd_db_name;// переключаемся на нужную нам базу данных
$result=mysql_query('SELECT * FROM `mappoint`');// делаем выборку из таблицы
while($row=mysql_fetch_array($result))// берем результаты из каждой строки
{ echo '<p>Запись id='.$row['id'].'. Текст: '.$row['name'].'</p>';// выводим данные
}
?>
</body>
</html>