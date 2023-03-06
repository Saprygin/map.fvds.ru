<?php
 
header('Content-Type: text/html; charset=utf-8');
 
include ("config.php");
 
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
 
$namepoint = $_GET['namepoint'];
 
if (isset($_GET['namepoint']))       
{
$namepoint = $_GET['namepoint']; 
if ($namepoint == '') 
{
unset($namepoint);
}  
}

//Вывод адреса
if (isset($_GET['address']))       
{
$address = $_GET['address']; 
if ($address == '') 
{
unset($address);
}  
}

//Конец вывод адреса

//Вывод телефона
if (isset($_GET['telefone']))       
{
$telefone = $_GET['telefone']; 
if ($telefone == '') 
{
unset($telefone);
}  
}
//Конец Вывод телефона


//Вывод менеджера
if (isset($_GET['manager']))       
{
$manager = $_GET['manager']; 
if ($manager == '') 
{
unset($manager);
}  
}
//Конец Вывод менеджера


//Вывод категории
if (isset($_GET['type']))       
{
$type = $_GET['type']; 
if ($type == '') 
{
unset($type);
}  
}
//Конец Вывод категории */



/*
//Вывод vip
if (isset($_GET['vip']))       
{
$vip = $_GET['vip']; 
if ($vip == '') 
{
unset($vip);
}  
}
//Конец Вывод vip



// Вывод конкурента
if (isset($_GET['competitor']))       
{
$competitor = $_GET['competitor']; 
if ($competitor == '') 
{
unset($competitor);
}  
}
//Конец Вывод конкурента


// Вывод рейтинга
if (isset($_GET['rating']))       
{
$rating = $_GET['rating']; 
if ($rating == '') 
{
unset($rating);
}  
}
//Конец Вывод рейтинга
*/
// Вывод покупки
if (isset($_GET['pokupki']))       
{
$pokupki = $_GET['pokupki']; 
if ($pokupki == '') 
{
unset($pokupki);
}  
}
//Конец вывод покупки

// Вывод среднесуточной
if (isset($_GET['srednesutochnaya']))       
{
$srednesutochnaya = $_GET['srednesutochnaya']; 
if ($srednesutochnaya == '') 
{
unset($srednesutochnaya);
}  
}
//Конец вывода среднесуточной
/*
// Вывод лотков
if (isset($_GET['lotki']))       
{
$lotki = $_GET['lotki']; 
if ($lotki == '') 
{
unset($lotki);
}  
}
//Конец вывода лотков
*/ 
if (isset($_GET['descriptpoint']))       
{
$descriptpoint = $_GET['descriptpoint']; 
if ($descriptpoint == '') 
{
unset($descriptpoint);
}  
}
$type = $_GET['type']; //+
$pcoord = $_GET['pcoord'];
 
if (isset($namepoint) && isset($address) && isset($descriptpoint) && isset($telefone) && isset($manager) && isset($type) && isset($pokupki) && isset($srednesutochnaya))
{
 
$namepoint = htmlspecialchars(trim($namepoint));
$address = htmlspecialchars(trim($address));
$descriptpoint = htmlspecialchars(trim($descriptpoint));
$telefone = htmlspecialchars(trim($telefone));
$manager = htmlspecialchars(trim($manager)); 
$type = htmlspecialchars(trim($type));
//$vip = htmlspecialchars(trim($vip));  
//$competitor = htmlspecialchars(trim($competitor));
//$rating = htmlspecialchars(trim($rating));
$pokupki = htmlspecialchars(trim($pokupki));
$srednesutochnaya = htmlspecialchars(trim($srednesutochnaya));
//$lotki = htmlspecialchars(trim($lotki));
 
$exp_str1 = explode(",", $pcoord);
 
$coordx = $exp_str1[0];
$coordy = $exp_str1[1];
 
$sql = "INSERT INTO mappoint VALUES(0, '$namepoint', '$address', '$descriptpoint', '$telefone', '$manager', '$type', '$pokupki', '$srednesutochnaya', '$coordx', '$coordy', 'None', 1)";
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
