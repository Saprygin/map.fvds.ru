<html>

<body>

<?php

$db = mysql_connect("mysql12.leaderhost.ru", "root");

mysql_select_db("mydb",$db);

$result = mysql_query("SELECT * FROM employees",$db);

printf("First Name: %s<br>\n", mysql_result($result,0,"first"));

printf("Last Name: %s<br>\n", mysql_result($result,0,"last"));

printf("Address: %s<br>\n", mysql_result($result,0,"address"));

printf("Position: %s<br>\n", mysql_result($result,0,"position"));

mysql_close($db);

?>

</body>

</html>