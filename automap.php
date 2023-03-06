<?php
header('Content-Type: text/html; charset=utf-8');
 
require ("config2.php");
 
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {

$result = mysql_query("SELECT * FROM avto");
if(mysql_num_rows($result)>0)
{
while ($mar = mysql_fetch_array($result))
{
//$json =  array(id=>$mar['id'], kod=>$mar['kod'], lat=>$mar['LastLong'], lng=>$mar['LastLat']);
$json =  array(id=>$mar['id'], kod=>$mar['kod'],  lng=>$mar['LastLat'], lat=>$mar['LastLong'], name=>$mar['name']);
$markers[] = $json;
}
 
}
$points = array(markers=>$markers);
 
echo json_encode($points);
 
}
 
 
?>