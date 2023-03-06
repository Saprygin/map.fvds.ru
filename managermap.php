<?php
header('Content-Type: text/html; charset=utf-8');
 
include ("config.php");
 
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
 
$json = '{"markers" :['."\n";
 
$type = $_GET['cat'];
 
$result = mysql_query("SELECT * FROM mappoint WHERE type='$manager'");
if(mysql_num_rows($result)>0)
{
while ($mar = mysql_fetch_array($result))
{
if($mar['type'] == 'torgovye') {$cattype = "Торговая точка";}
if($mar['type'] == 'rynok') {$cattype = "";}
if($mar['type'] == 'kiosk') {$cattype = "";}
if($mar['type'] == 'vagons') {$cattype = "";}
if($mar['type'] == 'palatka') {$cattype = "";}
if($mar['type'] == 'supermarket') {$cattype = "";}
if($mar['type'] == 'vip') {$cattype = "";}
if($mar['type'] == 'agriko') {$cattype = "";}
if($mar['type'] == 'conkurent') {$cattype = "";}
 
$json =  $json.'{"name" : "'.$mar['name'].'", 
"address" : "'.$mar['address'].'",
"descriptions" : "'.$mar['descriptions'].'", 
"telefone" : "'.$mar['telefone'].'",
"manager" : "'.$mar['manager'].'",
"type":"'.$cattype.'", 
"vip" : "'.$mar['vip'].'",
"competitor" : "'.$mar['competitor'].'",
"rating" : "'.$mar['rating'].'",
"pokupki" : "'.$mar['pokupki'].'",
"lat" : "'.$mar['cx'].'", "lng" : "'.$mar['cy'].'"},';
 
}
 
}
$json  = substr($json , 0,-1);
 
echo $json , ']}';
 
}			
 
?>