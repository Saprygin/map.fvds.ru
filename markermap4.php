<?php
header('Content-Type: text/html; charset=utf-8');
 
include ("config.php");
 
if($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
 
//?????????? ??????? ????(????????) ??? ????????????? json_encode()
function json_encode_cyr($str) {
$arr_replace_utf = array('\u0410', '\u0430','\u0411','\u0431','\u0412','\u0432',
'\u0413','\u0433','\u0414','\u0434','\u0415','\u0435','\u0401','\u0451','\u0416',
'\u0436','\u0417','\u0437','\u0418','\u0438','\u0419','\u0439','\u041a','\u043a',
'\u041b','\u043b','\u041c','\u043c','\u041d','\u043d','\u041e','\u043e','\u041f',
'\u043f','\u0420','\u0440','\u0421','\u0441','\u0422','\u0442','\u0423','\u0443',
'\u0424','\u0444','\u0425','\u0445','\u0426','\u0446','\u0427','\u0447','\u0428',
'\u0448','\u0429','\u0449','\u042a','\u044a','\u042d','\u044b','\u042c','\u044c',
'\u042d','\u044d','\u042e','\u044e','\u042f','\u044f');
$arr_replace_cyr = array('?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?',
'?', '?', '?','?','?','?','?','?','?','?','?','?','?','?','?','?','?','?','?','?',
'?','?','?','?','?','?','?','?','?','?','?','?','?','?','?','?','?','?','?','?',
'?','?','?','?','?','?','?','?','?','?','?','?','?','?');
$str1 = json_encode($str);
$str2 = str_replace($arr_replace_utf,$arr_replace_cyr,$str1);
return $str2;
}
 
$type = $_GET['cat'];
 
$result = mysql_query("SELECT * FROM mappoint WHERE type='$type'");
if(mysql_num_rows($result)>0)
{
while ($mar = mysql_fetch_array($result))
{
if($mar['type'] == 'torgovye') {$cattype = "???????? ?????";}
if($mar['type'] == 'rynok') {$cattype = "?????";}
if($mar['type'] == 'kiosk') {$cattype = "??????";}
 
$json =  array(name=>$mar['name'], address=>$mar['address'], descriptions=>$mar['descriptions'], telefone=>$mar['telefone'], manager=>$mar['manager'], type=>$mar['type'], vip=>$mar['vip'], competitor=>$mar['competitor'], rating=>$mar['rating'], pokupki=>$mar['pokupki'], lat=>$mar['cx'], lng=>$mar['cy']);
$markers[] = $json;
}
 
}
$points = array(markers=>$markers);
 
echo json_encode_cyr($points );
 
}			
 
?>