<?php
 
header('Content-Type: text/html; charset=utf-8');
 
require ("config2.php");
 
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
 
$namepoint = $_GET['id'];
 
if (isset($_GET['id']))       
{
$namepoint = $_GET['id']; 
if ($namepoint == '') 
{
unset($namepoint);
}  
}

//Вывод адреса
if (isset($_GET['kod']))       
{
$address = $_GET['kod']; 
if ($address == '') 
{
unset($address);
}  
}

//Конец вывод адреса

/*Вывод телефона
if (isset($_GET['tele']))       
{
$tele = $_GET['tele']; 
if ($tele == '') 
{
unset($tele);
}  
}
*/

 
if (isset($_GET['descriptpoint']))       
{
$descriptpoint = $_GET['descriptpoint']; 
if ($descriptpoint == '') 
{
unset($descriptpoint);
}  
}
$pcoord = $_GET['pcoord'];
 
if (isset($namepoint) && isset($address) && isset($descriptpoint))
{
 
$namepoint = htmlspecialchars(trim($namepoint));
$address = htmlspecialchars(trim($address));
//$tele = htmlspecialchars(trim($tele));
$descriptpoint = htmlspecialchars(trim($descriptpoint));
 
$exp_str1 = explode(",", $pcoord);
 
$coordx = $exp_str1[0];
$coordy = $exp_str1[1];
 
$sql = "INSERT INTO avto VALUES(0, '$LastLat', '$LastLong', '$name', '$coordx', '$coordy', 'None', 1)";
$result = mysql_query($sql) or die("Ошибочный запрос: " . mysql_error());
if($result == true)
{
echo '{ success: true }';
}
else
{
echo '{ success: false, message: "Не удалось сохранить точку" }';
}
 
 
}
 
else 
 
{
echo '{ success: false, message: "Вы ввели не всю информацию, поэтому метка не может быть добавлена" }';
}
 
}
 
?>
