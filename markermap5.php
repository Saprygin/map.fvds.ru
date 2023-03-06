<?php
header('Content-Type: text/html; charset=utf-8');
 
require ("config.php");
 
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
 
$json = '{"markers" :['."\n"; //+
 
$type = $_GET['cat']; //+ 


$result = mysql_query("SELECT * FROM mappoint WHERE type='$type'");
if(mysql_num_rows($result)>0)
{
while ($mar = mysql_fetch_array($result))
{

//$json =  $json.'{"name" : "'.$mar['name'].'", "descriptions" : "'.$descriptions.'", "type":"'.$cattype.'", "lat" : "'.$mar['cx'].'", "lng" : "'.$mar['cy'].'"},';
 
$json =  array(name=>$mar['name'], address=>$mar['address'], descriptions=>$mar['descriptions'], telefone=>$mar['telefone'], manager=>$mar['manager'], type=>$mar['type'], vip=>$mar['vip'], competitor=>$mar['competitor'], rating=>$mar['rating'], pokupki=>$mar['pokupki'], lat=>$mar['cx'], lng=>$mar['cy']);
$markers[] = $json;

 
}
 
}
$points = array(markers=>$markers);
 
echo json_encode($points);
 
}
 
 
?>
