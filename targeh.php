<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);


if($data == "mnas"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
if (!in_array($idcarlos,$nazar)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
file_put_contents("data/nazar/$chat_id.txt",$idcarlos . "\n" , FILE_APPEND);
file_put_contents("data/nazar/$chat_id/nazr.txt" , " *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idcarlos ."` *𓆪* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em."العسل ← [$namee](tg://user?id=$idcarlos)
".$em."تم رقيت الحلو وقعد  منشئ اساسي",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ تنزيل ⋄' ,'callback_data'=>"delmnas"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "mnas"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
if (in_array($idcarlos,$nazar)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." العسل ← [$namee](tg://user?id=$idcarlos)
".$em." هوا اساسا منشئ اساسي",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ تنزيل ⋄' ,'callback_data'=>"delmnas"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delmnas"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
if (in_array($idcarlos,$nazar)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
$re_id_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($idYOUSSEF,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idYOUSSEF ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." العسل ← [$namee](tg://user?id=$idcarlos)
".$em." تم تنزيلة من المنشيئن الاساسين",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}}
if ($data == "delmnas"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri)) {
if (!in_array($idcarlos,$nazar)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." العسل ← [$namee](tg://user?id=$idcarlos)
".$em." ماتقدرش تنزله  هو ليس منشئ اساسي",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}}
if($data == "mn"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idYOUSSEF,$YOUSSEF)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
file_put_contents("data/carlos/$chat_id.txt",$idcarlos . "\n" , FILE_APPEND);
file_put_contents("data/carlos/$chat_id/crlo.txt" , " *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idcarlos ."` *𓆪* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." العسل ← [$namee](tg://user?id=$idcarlos)
".$em."تم رقيت الحلو وقعد  منشئ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ تنزيل ⋄' ,'callback_data'=>"delmn"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "mn"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$carlos)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." العسل ← [$namee](tg://user?id=$idcarlos)
".$em." هوا اساسا ← منشئ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ تنزيل ⋄' ,'callback_data'=>"delmn"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delmn"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$carlos)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
$re_id_info = file_get_contents("data/carlos/$chat_id.txt");
	$mdrs = file_get_contents("data/carlos/$chat_id/crlo.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($idYOUSSEF,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idYOUSSEF ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/carlos/$chat_id.txt",$str);
	file_put_contents("data/carlos/$chat_id/crlo.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"".$em." العسل ← [$namee](tg://user?id=$idcarlos)
".$em." تم تنزيلة من المنشئين",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}}
if ($data == "delmn"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$carlos)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙ماتقدرش تنزله  هوه ليس  ← منشئ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}}
if($data == "md"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$manger)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
file_put_contents("data/manger/$chat_id.txt",$idYOUSSEF . "\n" , FILE_APPEND);
file_put_contents("data/manger/$chat_id/mange.txt" , " *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idYOUSSEF ."` *𓆪* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙تم ترقيه ليصبح ← مدير",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ تنزيل ⋄' ,'callback_data'=>"delmd"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "md"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$manger)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙هوه بالفعل ← مدير",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ تنزيل ⋄' ,'callback_data'=>"delmd"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delmd"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$manger)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($idYOUSSEF,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idYOUSSEF ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙تم تنزيل من ← المدراء",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if ($data == "delmd"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$manger)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙ماتقدرش تنزله  هوه ليس  ← مدير",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if($data == "ad"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$admin_user)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
file_put_contents("data/admin_user/$chat_id.txt",$idYOUSSEF . "\n" , FILE_APPEND);
file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* ". $idYOUSSEF ." *𓆪* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙تم ترقيه ليصبح ← بوديقارد",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ تنزيل ⋄' ,'callback_data'=>"delad"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "ad"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$admin_user)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙هوه بالفعل ← بوديقارد",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ تنزيل ⋄' ,'callback_data'=>"delad"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delad"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$admin_user)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
 $admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
 $admn1 = explode("             \n",$admn);
 $str = str_replace($idcarlos,"",$re_id_info);
 $str2 = str_replace(" *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* ". $idcarlos ." *𓆪* ","",$admn1);
 file_put_contents("data/admin_user/$chat_id.txt",$str);
 file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙تم تنزيل من ← البوديقارديه",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if ($data == "delad"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$admin_user)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙ماتقدرش تنزله  هوه ليس  ← بوديقارد",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if($data == "mz"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$mmyaz)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
file_put_contents("data/mmyaz/$chat_id.txt",$idcarlos . "\n" , FILE_APPEND);
file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idcarlos ."` *𓆪* ". "\n" , FILE_APPEND);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙تم ترقيه ليصبح ← مميز",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ تنزيل ⋄' ,'callback_data'=>"delmz"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "mz"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$mmyaz)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙هوه بالفعل ← مميز",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ تنزيل ⋄' ,'callback_data'=>"delmz"]],
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}}}
if ($data == "delmz"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (in_array($idcarlos,$mmyaz)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($idcarlos,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $userr ."] *𓆪* " . "»" . " *𓆩* `". $idcarlos ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙تم تنزيل من ← المميزين",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if ($data == "delmz"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
if (!in_array($idcarlos,$mmyaz)){
$userr = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->username;
$namee = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$idcarlos"))->result->first_name;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙العسل ← [$namee](tg://user?id=$idcarlos)
⋄︙ماتقدرش تنزله  هوه ليس  ← مميز",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ رجوع ⋄' ,'callback_data'=>"rafaa"]],
]])
]); 
}
}
}
if ($data == "rafaa"){
if ( $status == 'creator' or in_array($from_id2,$Dev) or in_array($from_id2,$manger) or in_array($from_id2,$admin_user) or in_array($from_id2,$developer) or in_array($from_id2,$carlos) or in_array($from_id2,$eri) or in_array($from_id2,$nazar)) {
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"⋄︙عزيزي ← [$name2](tg://user?id=$from_id2)
⋄︙الان قم ب تحديد الرتبه",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'⋄ قائمة الرفع ⋄' ,'callback_data'=>"mnas"],['text'=>'⋄ قائمة تنزيل ⋄' ,'callback_data'=>"mnas"]],
[['text'=>'⋄ منشئ اساسي ⋄' ,'callback_data'=>"mnas"],['text'=>'⋄ منشئ اساسي ⋄' ,'callback_data'=>"mnas"]],
[['text'=>'⋄ منشئ ⋄' ,'callback_data'=>"mn"],['text'=>'⋄ منشئ ⋄' ,'callback_data'=>"delmd"]],
[['text'=>'⋄ مدير ⋄' ,'callback_data'=>"md"],['text'=>'⋄ مدير ⋄' ,'callback_data'=>"delmd"]],
[['text'=>'⋄ بوديقارد⋄' ,'callback_data'=>"ad"],['text'=>'⋄ بوديقارد⋄' ,'callback_data'=>"delad"]],
[['text'=>'⋄ مميز ⋄' ,'callback_data'=>"mz"],['text'=>'⋄ مميز ⋄' ,'callback_data'=>"delmz"]],
[['text'=>'⋄ الغاء ⋄' ,'callback_data'=>"deletmil"]],
[['text'=>"⋄ قناة السورس ⋄",'url'=>"t.me/$YO_US_EF_AL_BR_AZ_IL"]],
]])
]); 
}
}
if (strpos($text, 'بيع نقاطي') !== false or strpos($text, 'بيع نقودي') !== false){
if($game['game'][$chat_id][$from_id] >= 1 and $game['game'][$chat_id][$from_id] != null){
$num= str_replace(['بيع نقودي','بيع نقاطي'],'',$text);
if ($num <= 300 && $num >= 1){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." تم خصم ~ { $num } من مجوهراتك 
".$em." وتم زيادة تفاعلك في المجموعه",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('data/msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+$num*5);
file_put_contents('data/msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-$num);file_put_contents('data/game.json', json_encode($game));
}
}
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
if ($rt && strpos($text, 'اضف رسائل') !== false){
$num= str_replace('اضف رسائل','',$text);
if ($num <= 300000000 && $num >= 1){ 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." تم اضافة له {$num} من الرسائل
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
$msgs = json_decode(file_get_contents('data/msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$re_id] = ($msgs['msgs'][$chat_id][$re_id]+$num);
file_put_contents('data/msgs.json', json_encode($msgs));
}
}
}
$ngat = file_get_contents("data/ngt.json");
$n = file_get_contents("data/sero.json");
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if(strpos($text, "اضف نقاط ") !== false){
$an = str_replace("اضف نقاط ", "", $text);
if($tc == "supergroup"){
file_put_contents("data/ngt.json","ngat");
file_put_contents("data/sero.json","$an");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
".$em." عزيزي ~⪼ $info
".$em." شخص المطلوب ~⪼ $an
".$em." قم بأرسال عدد النقاط ليتم توصيلهن
",
 'reply_to_message_id'=>$message_id
,]);}}}
if($text and preg_match('/([0-9])/i',$text) && $ngat =="ngat"){
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($tc == "supergroup"){
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"
".$em." عزيزي ~⪼ $info
".$em." العسل المطلوب ~⪼ $n
".$em." عدد النقاط ~⪼ $text
".$em." تم توصيل الطلب 
",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/ngt.json","");
$game['game'][$chat_id][$n] = ($game['game'][$chat_id][$n]+$text);file_put_contents('data/game.json', json_encode($game));
}}}

$oopp = file_get_contents("data/ngt.json");
$n = file_get_contents("data/sero.json");
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if ($rt && $text == "اضف نقاط" ){
if($tc == "supergroup"){
file_put_contents("data/ngt.json","nnam");
file_put_contents("data/sero.json","$re_id");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
".$em." عزيزي ~⪼ $info
".$em." شخص المطلوب ~⪼ $re_id
".$em." قم بأرسال عدد النقاط ليتم توصيلهن
",
 'reply_to_message_id'=>$message_id
,]);}}}
if($text && $oopp =="nnam"){
if($status == "craetor" or in_array($from_id,$Dev) or in_array($from_id,$developer)){
if($tc == "supergroup"){
bot("sendmessage",[
"chat_id"=>$chat_id,
'text'=>"
".$em." عزيزي ~⪼ $info
".$em." العسل المطلوب ~⪼ $n
".$em." عدد النقاط ~⪼ $text
".$em." تم توصيل الطلب 
",
 'reply_to_message_id'=>$message_id
,]);
file_put_contents("data/ngt.json","");
$game['game'][$chat_id][$n] = ($game['game'][$chat_id][$n]+$text);file_put_contents('data/game.json', json_encode($game));
}}}
if($text == "نقاطي" and $game['game'][$chat_id][$from_id]!== NULL || $game['game'][$chat_id][$from_id]!== 0){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." اهلأ عزيزي ← $info
".$em." نقودك الحاليأ ← .".$game['game'][$chat_id][$from_id].".
",
'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
}
if($message and $tc == "supergroup"){
$msgs = json_decode(file_get_contents('data/msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('data/msgs.json', json_encode($msgs));
}
if($text == "msg" or $text == "رسائلي"){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*💬 ❉ رسائلك »{ ".$msgs['msgs'][$chat_id][$from_id]." } ➺*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
if($text == "مسح رسايلي" or $text == "مسح رسائلي" || $text == "رس"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." تم مسح جميع رسائلك",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('data/msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]=0);
file_put_contents('data/msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('data/game.json', json_encode($game));
}
$chatid = $update->edited_message->chat->id;
$fromid = $update->edited_message->from->id;
$edit = json_decode(file_get_contents('data/edit.json'),true);
$editMessage = $update->edited_message;
if($editMessage){
$edit['edit'][$chatid][$fromid] = ($edit['edit'][$chatid][$fromid]+1);
file_put_contents('data/edit.json', json_encode($edit));
}
if($edit['edit'][$chat_id][$from_id] == null){
$editt = 0;
}else{
$editt = $edit['edit'][$chat_id][$from_id];
}
if($text == 'سحكاتي'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'".$em." سحكاتك : '.$editt,
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "مسح سحكاتي" or $text == "مسح تعديلاتي" || $text == "سح"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"".$em." تم مسح جميع تعديلاتك",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$edit = json_decode(file_get_contents('data/edit.json'),true);
$update = json_decode(file_get_contents('php://input'));
$edit['edit'][$chat_id][$from_id] = ($edit['edit'][$chat_id][$from_id]=0);
file_put_contents('data/edit.json', json_encode($edit));
}
if($msgs['msgs'][$chat_id][$from_id] > 8000){
$rate = array("100%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 7000){
$rate = array("97%","90%","99%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 6000){
$rate = array("83%","80%","87%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 3000){
$rate = array("77%","70%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$rate = array('69%','56%',);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 200){
$rate = array("40%","43%","39%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 100){
$rate = array("36%","29%",);
$rate1 = array_rand($rate,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$rate = array('18%','20%','6%',);
$rate1 = array_rand($rate,1);
}
if($msgs['msgs'][$chat_id][$from_id] > 8000){
$active = array("حارك الكروب ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 7000){
$active = array("معلك لربك ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 6000){
$active = array("جهنم حبي ","نار وشرار ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل ","اسطورة التفاعل ","الله مال تفاعل ","نايس التفاعل ","قمه التفاعل ",);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط ','متفاعل ',);
$abstfal = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('ضعيف ',);
$abstfal = array_rand($active,1);
}
$new = json_decode(file_get_contents('data/new.json'),true);
if($message->new_chat_member){
$new['new'][$chat_id][$from_id] = ($new['new'][$chat_id][$from_id]+1);
file_put_contents('data/new.json', json_encode($new));
}

if($new['new'][$chat_id][$from_id] == null){
$new = 0;
}else{
$new = $new['new'][$chat_id][$from_id];
}
if($text == 'جهاتي'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." عدد جهاتك المضافه هنا ~ $new
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$eri)){
$info = "مطور السورس";
}
elseif(in_array($from_id,$devYOUSSEF) ){
$info = "مطور ثانوي";
}
elseif(in_array($from_id,$Dev) ){
$info = "مطور الاساسي";
}
elseif(in_array($from_id,$YOUSSEF) ){
$info = "منشئ اساسي";
}
elseif(in_array($from_id,$YOUSSEF) ){
$info = "منشئ";
}
elseif($status == "creator"){
$info = "المالك";
}
elseif(in_array($from_id,$manger) ){
$info = "المدير";
}
elseif(in_array($from_id,$admin_user) ){
$info = "بوديقارد";
}
elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز";
}elseif($status == "member" ){
$info = "عضو فقط";
}
if(!$username){
$casss = "لايوجد يوزر";
}elseif($username){
$casss = "$username";
}

if(!$bio){
$biio = "لايوجد بايو";
}elseif($bio){
$biio = "$bio";
}

if(!$username){
$usr = "لا يوجد معرف";
}elseif($username){
$usr = "@$username";
}
$usr = "@$username";

$armofom = $settings["information"]["textaddid"];
$idchange = file_get_contents("data/ok.txt");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
if($text == "تعيين الايدي" or $text == "تعين الايدي" || $text == "تغ"){
file_put_contents("data/ok.txt",$chat_id);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⋄︙ارسل الان النص
⋄︙ اضغط للنسخ
⋄︙  يمكنك اضافه :
- لعرض المعرف > `{المعرف}`
- لعرض الرسائل > `{الرسائل}`
- لعرض الصور > `{الصور}`
- لعرض الايدي > `{الايدي}`
- لعرض الرتبه > `{الرتبه}`
- لعرض مجوهرات > `{المجوهرات}`
- لعرض جهات > `{جهاتي}`
- لعرض تفاعل > `{تفاعل}`
- لعرض تعليق > `{لايك}`
- لعرض نسبة تفاعل > `{نسبة تفاعل}`
- لعرض بايو > `{بايو}`
- لعرض سحكات > `{سحكاتي}`
- لعرض اسم مجموعه > `{اسم الجموعة}`

⋄︙ قناة كلايش الايدي : [@$devchink]
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text and $idchange == $chat_id){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
file_put_contents("data/ok.txt","none");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." تم تعيين الايدي بنجاح
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["information"]["textaddid"]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($text == "حذف الايدي" or $text == "مسح الايدي"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
".$em." اهلا عزيزي ~⪼ $info 
".$em." تم حذف الايدي
",'parse_mode'=>"MARKDOWN",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$settings["information"]["textaddid"]="";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
$armofom = $settings["information"]["textaddid"];
if($text=="ايدي" or $text=="ايديي" or $text=="id"){
$like = array("موش صوره غمبله ☹️❤️","شهل عسل ،₍🍯😻⁾","يهلا بلعافيه😍","مارتاحلك😐","تحبني؟🙈","فديت الحلو🌚😹","كيكك والله🥺","حلغوم والله☹️","ملاك وناسيك بكروبنه😟","لازك بيها غيرها عاد😒");
$likee = array_rand($like,1);
$iduser = $settings["lock"]["iduser"];
$armofom = $settings["information"]["textaddid"];
if($armofom !== null){
if($iduser == "مفتوح"){
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
$a = str_replace('{الاسم}',"$first_name",$armofom);
$a = str_replace('{الايدي}',$from_id,$a);
$a = str_replace('{اسم المجموعة}',$namegroup,$a);
$a = str_replace('{المعرف}',$usr,$a);
$a = str_replace('{الرتبه}',$info,$a);
$a = str_replace('{المجوهرات}',$game['game'][$chat_id][$from_id],$a);
$a = str_replace('{الرسائل}',$msgs['msgs'][$chat_id][$from_id],$a);
$a = str_replace('{الصور}',$count,$a);
$a = str_replace('{سحكاتي}',$editt,$a);
$a = str_replace('{جهاتي}',$new,$a);
$a = str_replace('{تفاعل}',$active[$abstfal],$a);
$a = str_replace('{لايك}',$like[$likee],$a);
$a = str_replace('{بايو}',$biio,$a);
$a = str_replace('{نسبة تفاعل}',$rate[$rate1],$a);
$g = $a;
var_dump(
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"$g",
'reply_to_message_id'=>$message->message_id,
]));
}
}
}
$armofom = $settings["information"]["textaddid"];
if($text == "ايدي" or $text=="ايديي" or $text=="ا"){
$likeee = array("الايدي بالصورة معطل حاليأ","الايدي بالصورة معطل حاليأ");
$likeeee = array_rand($likeee,1);
$armofom = $settings["information"]["textaddid"];
if($armofom !== null){
if($iduser !== "مفتوح"){
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
$g = array_rand($a,1);
$a = str_replace('{الاسم}',"$first_name",$armofom);
$a = str_replace('{الايدي}',$from_id,$a);
$a = str_replace('{اسم المجموعة}',$namegroup,$a);
$a = str_replace('{المعرف}',$usr,$a);
$a = str_replace('{الرتبه}',$info,$a);
$a = str_replace('{المجوهرات}',$game['game'][$chat_id][$from_id],$a);
$a = str_replace('{الرسائل}',$msgs['msgs'][$chat_id][$from_id],$a);
$a = str_replace('{الصور}',$count,$a);
$a = str_replace('{سحكاتي}',$editt,$a);
$a = str_replace('{جهاتي}',$new,$a);
$a = str_replace('{تفاعل}',$active[$abstfal],$a);
$a = str_replace('{لايك}',$likeeee[$likeee],$a);
$a = str_replace('{بايو}',$biio,$a);
$a = str_replace('{نسبة تفاعل}',$rate[$rate1],$a);
$g = $a;
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$g",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
$armofom = $settings["information"]["textaddid"];
if($text=="ايدي" or $text=="ايديي" or $text=="ا"){
$iduser = $settings["lock"]["iduser"];
$armofom = $settings["information"]["textaddid"];
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
if($armofom == null){
if($iduser == "مفتوح"){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
var_dump(
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$file_id",
'caption'=>"*
".$em." ايديك ⋖ *`$from_id`*.
".$em." معرفك ⋖ $usr.
".$em." رتبتك ⋖ $info.
".$em." تعديلاتك ⋖ $editt.
".$em." صورك ⋖ $count.
".$em." رسائلك ⋖.".$msgs['msgs'][$chat_id][$from_id].".
*",'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
]));
}
}
}
$armofom = $settings["information"]["textaddid"];
if($text == "ايدي" or $text=="ايديي" or $text=="ا"){
$armofom = $settings["information"]["textaddid"];
$result = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id = $result["result"]["photos"][0][0]["file_id"];
$count = $result["result"]["total_count"];
if($armofom == null){
if($iduser !== "مفتوح"){
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"*
".$em." ايديك ⋖ *`$from_id`*.
".$em." معرفك ⋖ $usr.
".$em." رتبتك ⋖ $info.
".$em." تعديلاتك ⋖ $editt.
".$em." صورك ⋖ $count.
".$em." رسائلك ⋖.".$msgs['msgs'][$chat_id][$from_id].".
*",'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if($text == "😔"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش الحلو ضايج ❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "😳"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ها بس لا شفت خالتك الشكره 😳😹🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "😭"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتبجي حياتي 😭😭",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "😡"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ابرد  🚒",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($text == "😍"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يَمـه̷̐ إآلُحــ❤ــب يَمـه̷̐ ❤️😍",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "😉"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"باع الغمزه 🙀 تموت 🙈🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "😋"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طبب لسانك جوه عيب 😌",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "☹️"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لضوج حبيبي 😢❤️🍃",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "🥺"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اوف يـࢪوحـي شبيڪ ضـايـج💘🥺",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "السلام عليكم"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وعليكم السلام ورحمة الله وبركاته🌝👋",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "كيف حالك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تـمـام عمࢪيي نتا ڪيفڪ💘💋",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شلونك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عمࢪࢪيي بخيࢪ اذا انـته بخيࢪ💘🙊",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شلونج"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عمࢪࢪيي بخيࢪ اذا انـته بخيࢪ💘🙊",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شلونج"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عمࢪࢪيي بخيࢪ اذا انـته بخيࢪ💘🙊",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "دوم"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دوم وكعد ع عناد الواكفين 🤷🏼‍♀️😂",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "دومج"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ادوم ايامك يالغالي  ❤️",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "دومك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يدوم نبضك يالحب 💘☺️",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "بخير"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دومڪ بخيࢪ حياتيہ 💓🍯",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "نورت"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نــوࢪك/ج حياتيہ 🥺💞",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "نورتي"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نــوࢪك/ج حياتيہ 🥺💞",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "نورتو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نــوࢪك/ج حياتيہ 🥺💞",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شكرأ"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ادلل يــ؏ـمࢪيي ،🖤",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شكرا"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ادلل يــ؏ـمࢪيي ،🖤",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شنو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شـ؏ـليـڪ 😞😹",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شتريد"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اريد اسمط راس الزواحف 😹🙂💞",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "هلو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هـلاوات يحات 💘😻",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "مح"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"محات حياتي🙈❤",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "تف"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب ابني/بتي اتفل/ي اكبر منها شوية 😌😹",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "تخليني"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اخليك بزاويه 380 درجه وانته تعرف الباقي 🐸",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "اكرهك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ديله شلون اطيق خلقتك اني😾🖖🏿🕷",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "باي"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بايات حياتي 😍",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "زاحف"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"زاحف عله خالتك الشكره 🌝",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "واو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"قميل 🌝🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شكو ماكو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"غيرك/ج بل كلب ماكو يبعد كلبي😍❤️️",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "شكو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يــاخــيہ شـ؏ـليـڪ 😞😹💓🍯",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "معزوفه"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طرطاا طرطاا طرطاا 😂👌",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "زاحفه"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لو زاحفتلك جان ماكلت زاحفه 🌝🌸",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "حفلش"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"افلش راسك 🤓",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "ضوجه"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شي اكيد الكبل ماكو 😂 لو بعدك/ج مازاحف/ة 🙊😋",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "صباحوو"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يـمـه فـديـت صباحڪ 💋🙈",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "صباح الخير"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يـمـه فـديـت صباحڪ 💋🙈",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "😂😂"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ضڪه تࢪد ࢪوح دايـمه عمغࢪيي🙈💘",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "هههه"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ضڪه تࢪد ࢪوح دايـمه عمغࢪيي🙈💘",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "مساء الخير"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مسـآء الـياسـمين 💘",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "طرد"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/2",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "حظر"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/4",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "حبج"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/3",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "خاص"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/5",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "خاصج"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/5",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "خاصك"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/5",
'reply_to_message_id'=>$message->message_id, 
]);
}}
if($text == "تثبيت"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"https://t.me/R_EIII/6",
'reply_to_message_id'=>$message->message_id, 
]);
}}
$message_id = $update->message->message_id;
if($text == "اقرالي دعاء"){
if($settings["lock"]["rdona"] == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اللهم عذب المدرسين 😢 منهم الاحياء والاموات 😭🔥 اللهم عذب ام الانكليزي 😭💔 وكهربها بلتيار الرئيسي 😇 اللهم عذب ام الرياضيات وحولها الى غساله بطانيات 🙊 اللهم عذب ام الاسلاميه واجعلها بائعة الشاميه 😭🍃 اللهم عذب ام العربي وحولها الى بائعه البلبي اللهم عذب ام الجغرافيه واجعلها كلدجاجه الحافية اللهم عذب ام التاريخ وزحلقها بقشره من البطيخ وارسلها الى المريخ اللهم عذب ام الاحياء واجعلها كل مومياء اللهم عذب المعاون اقتله بلمدرسه بهاون 😂😂😂،",
'reply_to_message_id'=>$message->message_id, 
]);
}
}


if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "رابط حذف تلجرام" and in_array($from_id, $Dev)){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"⋄︙ححذف و عيش حياتك مرتاح
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
⋄︙[رابط حذف تلجرام](https://telegram.org/deactivate)
",'parse_mode'=>"Markdown",
'disable_web_page_preview'=> true ,
]); 
}
if ( $rt && $text =="تثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
".$em." تم تثبيت الرساله
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
elseif($text =="الغاء التثبيت"){
if( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
".$em." تم الغاء تثبيت الرساله
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}

if ($text =="تفعيل البحث" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تفعيل البحث بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["serhi"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل البحث" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$eri) || in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تعطيل البحث بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["serhi"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تفعيل اغاني" or $text == "تفعيل الاغاني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تفعيل الاغاني بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ahbgii"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="تعطيل الاغاني" or $text == "تعطيل اغاني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تعطيل الاغاني بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["ahbgii"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تفعيل الرفع" or $text == "تفعيل الرفع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تفعيل الرفع بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rfaabot"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="تعطيل الرفع" or $text == "تعطيل الرفع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تعطيل الرفع بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rfaabot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تفعيل نزلني" or $text == "تفعيل نزل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تفعيل امر نزلني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rfabot"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="تعطيل نزلني" or $text == "تعطيل نزل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تعطيل امر نزلني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rfabot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تفعيل حساب العمر" or $text == "تفعيل العمر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تفعيل حساب العمر
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["zkrf"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="تعطيل حساب العمر" or $text == "تعطيل العمر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تعطيل حساب العمر
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["zkrf"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="تفعيل ضافني" or $text == "تفعيل من ضافني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تفعيل امر ضافني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["nweadd"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ( $text =="تعطيل ضافني" or $text == "تعطيل من ضافني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تعطيل امر ضافني
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["nweadd"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الالعاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تفعيل الالعاب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["game"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if ($text =="تعطيل الالعاب" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
".$em." بواسطة ⋙ [$first_name](tg://user?id=$from_id)
".$em." تم تعطيل الالعاب بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}