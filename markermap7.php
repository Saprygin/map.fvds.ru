<?php
header('Content-Type: text/html; charset=utf-8');
 
include ("config.php");
 
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
 
$json = '{"markers" :['."\n";
 
$type = $_GET['cat'];
 
$result = mysql_query("SELECT * FROM mappoint WHERE type='$type'");
if(mysql_num_rows($result)>0)
{
while ($mar = mysql_fetch_array($result))
{
if($mar['type'] == 'Магазины') {$cattype = "Магазины";}
if($mar['type'] == 'Рынок') {$cattype = "Рынок";}
if($mar['type'] == 'Киоск') {$cattype = "Киоск";}
if($mar['type'] == 'Павильоны') {$cattype = "Павильоны";}
if($mar['type'] == 'Палатка') {$cattype = "Палатка";}
if($mar['type'] == 'Супермаркет') {$cattype = "Супермаркет";}
if($mar['type'] == 'VIP') {$cattype = "VIP";}
if($mar['type'] == 'Агрико') {$cattype = "Агрико";}
if($mar['type'] == 'Конкурент') {$cattype = "Конкурент";}
if($mar['type'] == 'Астор') {$cattype = "Астор";}
if($mar['type'] == 'Не работает с нами') {$cattype = "Не работает с нами";} 
if($mar['type'] == 'Собственная торговля') {$cattype = "Собственная торговля";}
if($mar['type'] == 'Минирынок') {$cattype = "Минирынок";}
 
$json =  $json.'{"name" : "'.$mar['name'].'", 
"address" : "'.$mar['address'].'",
"descriptions" : "'.$mar['descriptions'].'", 
"telefone" : "'.$mar['telefone'].'",
"manager" : "'.$mar['manager'].'",
"type":"'.$cattype.'", 
"pokupki" : "'.$mar['pokupki'].'",
"srednesutochnaya" : "'.$mar['srednesutochnaya'].'",
"lat" : "'.$mar['cx'].'", "lng" : "'.$mar['cy'].'"},';
 
}
 
}
$json  = substr($json , 0,-1);
 
echo $json , ']}';
 
}			
 
?>