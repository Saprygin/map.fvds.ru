<?php
 
include("bd.php");
 
header('Content-Type: text/html; charset=utf-8');
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
 
$mappoint = $_GET['mappoint'];
 
$query1= "SELECT * FROM mappoint where mappoint='$mappoint' ORDER BY address";
$result1 = mysql_query($query1);
 
if(mysql_num_rows($result1)>0)
{
while ($par1 = mysql_fetch_array($result1)){
 
$addressshop[] = array("id"=>$par1['id'],
 
"name" => $par1['name'],
 
"address" => $par1['address'],
"descriptions" => $par1['desctiptions'],
"telefone" => $par1['telefone'],
"manager" => $par1['manager'],
"type" => $par1['type'],
"vip" => $par1['vip'],
"competitor" => $par1['competitor'],
"rating" => $par1['rating'],
"pokupki" => $par1['pokupki']);

 
}
 
$json = json_encode($addressshop);
 
echo $json;
 
}
 
}
 
?>