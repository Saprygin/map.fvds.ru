<?php
header('Content-Type: text/html; charset=utf-8');
 
require ("config.php");
 
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
 
$json = '{"markers" :['."\n"; //+
 
$type = $_GET['cat']; //+ 


$result = mysql_query("SELECT * FROM mappoint");
if(mysql_num_rows($result)>0)
{
while ($mar = mysql_fetch_array($result))
{


$json =  array(name=>$mar['name'], address=>$mar['address'], descriptions=>$mar['descriptions'], telefone=>$mar['telefone'], manager=>$mar['manager'], type=>$mar['type'], pokupki=>$mar['pokupki'], srednesutochnaya=>$mar['srednesutochnaya'], lat=>$mar['cx'], lng=>$mar['cy']);
$markers[] = $json;

 
}
 
}
$points = array(markers=>$markers);
 
echo json_encode($points);
 
}
 
 
?>
