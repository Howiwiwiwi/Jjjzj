
<?php

flush();

ob_start();

set_time_limit(0);

error_reporting(0);

ob_implicit_flush(1);

date_default_timezone_set('Africa/Cairo');



$Dev = array('5367162943', '1548856787');

$API_KEY = '5553375579:AAHq1LpL6y3lNZBx90m8H92_1rHhoNpWclk';

define('API_KEY',$API_KEY);

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}


@$channel = "XOne_Team";
@$token = API_KEY;
$url_info = file_get_contents("https://api.telegram.org/bot$token/getMe");

$json_info = json_decode($url_info,true);

$usernamebot = $json_info['result']['username'];

$bot_id = $json_info['result']['id'];
$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text  = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;

@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;

@$mem = $update->message->chat_member->id;
@$newid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$deleted = $update->deleteed_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;

@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$sos = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$bot_id),true);
@$botstat = $sos['result']['status'];
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;

@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];
@$qre_id = $update->callback_query->message->reply_to_message->from->id;
@$qre_name = $update->callback_query->message->reply_to_message->from->first_name;

function SendMessage($chat_id, $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
 function Forward($berekoja,$azchejaei,$kodompayam)
{
bot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
function  getUserProfilePhotos($token,$from_id) {
  @$url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
  @$result = file_get_contents($url);
  @$result = json_decode ($result);
  @$result = $result->result;
  return $result;
}
$urler = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
$o = file_get_contents($urler);
$n = json_decode($o,true);
$pho = $n["result"]["photos"][0][0]["file_id"];
$urler0 = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$re_id;
$o0 = file_get_contents($urler0);
$n0 = json_decode($o0,true);
$pho0 = $n0["result"]["photos"][0][0]["file_id"];


$reply = $update->message->reply_to_message;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;




$reply = $update->message->reply_to_message;
$replys = $reply->$text;
$re_id      = $update->message->reply_to_message->from->id;
$API_KEY = API_KEY;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$re_id);
$info = json_decode($get, true);
$re_rou = $info['result']['status'];
if ($tc == 'supergroup'){
if($reply and $text == "/info"){
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://bots-xone-team.tk/bio.php?user=$re_user",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "accept: application/json"
  ],
]);

$bio = curl_exec($curl);
 
bot('sendphoto',[
'chat_id'=>$chat_id, 
'photo'=>$pho0,
'message_id'=>$re_msgid,
'caption'=>"
◖𝗜𝗻𝗳𝗼𝗿𝗺𝗮𝘁𝗶𝗼𝗻𝘀◗
« 𝖭??𝗆𝖾 - $re_name
« 𝖴𝗌𝖾?? - @$re_user
« 𝖨𝖣 - $re_id
« BIO -  « $bio » 
• بواسطـة .. @XOne_Team ✓
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
  [['text'=>"قناتنـاا الرسمية 💙",'url'=>"https://t.me/XOne_Team"]],
  [['text'=>"🔻 قناة اليوتيوب 🔺",'url'=>"https://youtube.com/channel/UCbBYdHceLnoYpUR5Iq4VyVA"]],
  ]])
  ]);
  }
elseif($text == "ايدي"){
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://bots-xone-team.tk/bio.php?user=$username",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "accept: application/json"
  ],
]);

$bio = curl_exec($curl);

bot('sendphoto',[
'chat_id'=>$chat_id, 
'photo'=>$pho,
'message_id'=>$message_id,
'caption'=>"
◖𝗜𝗻𝗳𝗼𝗿𝗺𝗮𝘁𝗶𝗼𝗻𝘀◗

« 𝖭𝖺𝗆𝖾 - $first_name
« 𝖴𝗌𝖾𝗋 - @$username
« 𝖨𝖣 - $from_id
« BIO -  « $bio » 
• بواسطـة .. @XOne_Team ✓
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
  [['text'=>"قناتنـاا الرسمية 💙",'url'=>"https://t.me/XOne_Team"]],
  [['text'=>"🔻 قناة اليوتيوب 🔺",'url'=>"https://youtube.com/channel/UCbBYdHceLnoYpUR5Iq4VyVA"]],
  ]])
  ]);
  }

elseif($reply and strpos($text  , "/mute") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
if(preg_match('~[0-9]+~', $text)){
@$mute = json_decode(file_get_contents("data/mute/$chat_id/mute.json"), true);
if(in_array($re_id, $mute["mute"])) {


bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[تم الكـتم مسبقاً ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]); 
}else{

}
if(strpos($text, "M")){
$a = explode(" ", $text);
$b = $a[1];
$c = str_replace("M", "", $b);
bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$c*60,
         ]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تـم كتم الـعضو  [$re_name](tg://user?id=$re_id) 🔇‼️

مـده الـكتم [$c دقائق] ⏳

بواسطة القائد « [$first_name](tg://user?id=$from_id)»

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]); 
}
if(strpos($text, "H")){
$a = explode(" ", $text);
$b = $a[1];
$c = str_replace("H", "", $b);
bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$c*3600,
         ]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تـم كتم الـعضو  [$re_name](tg://user?id=$re_id) 🔇‼️

مـده الـكتم [$c ساعات] ⏳

بواسطة القائد « [$first_name](tg://user?id=$from_id)»

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]); 
}
if(strpos($text, "D")){
$a = explode(" ", $text);
$b = $a[1];
$c = str_replace("D", "", $b);
bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$c*86400,
         ]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تـم كتم الـعضو  [$re_name](tg://user?id=$re_id) 🔇‼️

مـده الـكتم [$c أيام ] ⏳

بواسطة القائد « [$first_name](tg://user?id=$from_id)»

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]); 
}
if(strpos($text, "W")){
$a = explode(" ", $text);
$b = $a[1];
$c = str_replace("W", "", $b);
bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$c*604800,
         ]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تـم كتم الـعضو  [$re_name](tg://user?id=$re_id) 🔇‼️

مـده الـكتم [ $c اسابيع] ⏳

بواسطة القائد « [$first_name](tg://user?id=$from_id)»

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]); 
}
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
$mute["mute"][] = "$re_id";
$muted = json_encode($mute, true);
file_put_contents("data/mute/$chat_id/mute.json",$muted);
}else{
@$mute = json_decode(file_get_contents("data/mute/$chat_id/mute.json"), true);
if(in_array($re_id, $mute["mute"])) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[تم الكـتم مسبقاً ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]); 
}else{

bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تـم كتم الـعضو [$re_name](tg://user?id=$re_id) 🔇‼️ 

 بواسطة القائد «[$first_name](tg://user?id=$from_id)»
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"إلغاء الكتم 🚫",'callback_data'=>"unmute"]],
]])
  ]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
$mute["mute"][] = "$re_id";
$muted = json_encode($mute, true);
file_put_contents("data/mute/$chat_id/mute.json",$muted);
}
}
}else{


bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[لا يمكنني كتم المشرفين ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
elseif($reply and strpos($text  , "/delmute") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
@$mute = json_decode(file_get_contents("data/mute/$chat_id/mute.json"), true);
if(in_array($re_id, $mute["mute"])) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[تم الكـتم مسبقاً ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]); 
}else{


bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تـم كتم الـعضو [$re_name](tg://user?id=$re_id) 🔇‼️ 

 بواسطة القائد «[$first_name](tg://user?id=$from_id)»
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"إلغاء الكتم 🚫",'callback_data'=>"unmute"]],
]])
  ]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
]);
$mute["mute"][] = "$re_id";
$muted = json_encode($mute, true);
file_put_contents("data/mute/$chat_id/mute.json",$muted);
}
}else{


bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[لا يمكنني كتم المشرفين ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}

}
elseif($reply and strpos($text  , "/unmute") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$XOneTeam) && !in_array($re_id,$developer)) {
@$mute = json_decode(file_get_contents("data/mute/$chat_id/mute.json"), true);
if(in_array($re_id, $mute["mute"])) {
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
         
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تـم إلغاء كتم الـعضو [$re_name](tg://user?id=$re_id) 🔇‼️

بواسطة القائد «[$first_name](tg://user?id=$from_id)»
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
for($x = 0;$x <= count($mute["mute"])-1;$x++){
if($mute["mute"][$x] = $re_id){
$mute["mute"][$x] = null;
$muted = json_encode($mute, true);
file_put_contents("data/mute/$chat_id/mute.json",$muted);

}
}
$b = array_filter($mute["mute"]);
$ba = Array("mute" => $b);
$o = json_encode($ba, true);
file_put_contents("data/mute/$chat_id/mute.json", $o); 
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[لم يتـم الكتـم ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]); 
}
}else{

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[هذا العضو مشرف⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}
elseif($reply and strpos($text  , "/ban") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
@$ban = json_decode(file_get_contents("data/ban/$chat_id/ban.json"), true);
if(in_array($re_id, $ban["ban"])) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[تم الحظـر مسبقاً ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]); 
}else{

bot('banChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
      
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تـم حظر الـعضو [$re_name](tg://user?id=$re_id) 🚷

بواسطة القائد «[$first_name](tg://user?id=$from_id)»

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"إلغاء الكتم 🚫",'callback_data'=>"unmute"]],
]])
  ]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
$ban["ban"][] = "$re_id";
$band = json_encode($ban, true);
file_put_contents("data/ban/$chat_id/ban.json",$band);
}
}else{

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[لا يمكنني حظر  المشرفين ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}


elseif($reply and strpos($text  , "/unban") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$XOneTeam) && !in_array($re_id,$developer)) {
@$ban = json_decode(file_get_contents("data/ban/$chat_id/ban.json"), true);
if(in_array($re_id, $ban["ban"])) {
 bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
      
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تـم إلغاء حظر الـعضو [$re_name](tg://user?id=$re_id) 🚷

  بواسطة القائد «[$first_name](tg://user?id=$from_id)»

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
for($x = 0;$x <= count($ban["ban"])-1;$x++){
if($ban["ban"][$x] = $re_id){
$ban["ban"][$x] = null;
$band = json_encode($ban, true);
file_put_contents("data/ban/$chat_id/ban.json",$band);
if($x == count($ban["ban"])-1){
$b = array_filter($ban["ban"]);
$ba = Array("ban" => $b);
$o = json_encode($ba, true);
file_put_contents("data/ban/$chat_id/ban.json", $o);
}
}
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[لم يتـم الحظـر ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]); 
}
}else{

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[هذا العضو مشرف⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}
elseif($reply and $text  == "/del"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);

 
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}
elseif(!$reply and strpos($text  , "/mute") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
 
         
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. لم يتم العثور على المستخدم ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}

elseif(!$reply and strpos($text  , "/unmute") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){

         
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. لم يتم العثور على المستخدم ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}
elseif(!$reply and strpos($text  , "/ban") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
 
         
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. لم يتم العثور على المستخدم ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}

elseif(!$reply and strpos($text  , "/unban") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
 if ($tc == 'supergroup'){
         
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. لم يتم العثور على المستخدم ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}
elseif(strpos($text  , "/send") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
 if ($tc == 'supergroup'){
 $c = substr($text, 6);
$word = $c;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$word
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}
elseif(!$reply and $text  == "/del"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
 
         
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. لم يتم العثور على الرسالة ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}
elseif(!$reply and strpos($text  , "/delmute") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
 
         
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. لم يتم العثور على المستخدم ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}

elseif(!$reply and strpos($text  , "/warn") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
 
         
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. لم يتم العثور على المستخدم ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}

elseif(!$reply and strpos($text  , "/unwarn") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
 
         
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. لم يتم العثور على المستخدم ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}
elseif(!$reply and strpos($text  , "/delwarn") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
 
         
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. لم يتم العثور على المستخدم ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}
}
elseif(!$reply and $text  == "/pin"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
 
         
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. لم يتم العثور على الرسالة ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}
elseif(!$reply and $text  == "/unpin"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
 
         
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. لم يتم العثور على الرسالة ⚠️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}

elseif($text == "/lock"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
	if ($tc == 'supergroup'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
« تم قفل الشات الآن ⛔️

بواسطـة القائد [$first_name](tg://user?id=$from_id)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
  [['text'=>"قناتنـاا الرسمية 💙",'url'=>"https://t.me/XOne_Team"]],
  [['text'=>"🔻 قناة اليوتيوب 🔺",'url'=>"https://youtube.com/channel/UCbBYdHceLnoYpUR5Iq4VyVA"]],
  ]])
  ]);
 
bot('setChatPermissions',[
 'chat_id'=>$chat_id,
]);
 bot('setChatPermissions',[
 'chat_id'=>$chat_id,
  'permissions'=>'{"can_invite_users":true}',
]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}
elseif($text == "/open"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
if ($tc == 'supergroup'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
« تم فتح الشات الآن ✅

بواسطـة القائد [$first_name](tg://user?id=$from_id)

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
  [['text'=>"قناتنـاا الرسمية 💙",'url'=>"https://t.me/XOne_Team"]],
  [['text'=>"🔻 قناة اليوتيوب 🔺",'url'=>"https://youtube.com/channel/UCbBYdHceLnoYpUR5Iq4VyVA"]],
  ]])
  ]);
bot('setChatPermissions',[
 'chat_id'=>$chat_id,
  'permissions'=>'{"can_invite_users":true, "can_send_media_messages":true, "can_send_other_messages":true, "can_send_messages":true, "can_invite_users":true}',
]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);

}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}
elseif($reply and $text  == "/pin"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
      
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[📌 تم تثبيت الرسالة ..  ](http://t.me/$usernamebot)

بواسطة «[$first_name](tg://user?id=$from_id)»

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}
elseif($reply and $text  == "/unpin"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[❌ تم الغاء تثبيت الرسالة ..](http://t.me/$usernamebot)

بواسطة «[$first_name](tg://user?id=$from_id)»

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}
elseif($reply and $text == "/UPadmin"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {

if ($tc == 'supergroup'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تـمت تـرقيه الـعضو [$re_name](tg://user?id=$re_id) للاشـراف

بواسطـة القائـد [$first_name](tg://user?id=$from_id)

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
  [['text'=>"قناتنـاا الرسمية 💙",'url'=>"https://t.me/XOne_Team"]],
  [['text'=>"🔻 قناة اليوتيوب 🔺",'url'=>"https://youtube.com/channel/UCbBYdHceLnoYpUR5Iq4VyVA"]],
  ]])
  ]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$re_id,
 'can_change_info'=>false,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>false
]);
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}}
elseif($reply and $text == "/DOadmin"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {

if ($tc == 'supergroup'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تـمت تـنزيل الـعضو [$re_name](tg://user?id=$re_id) مـن الاشـراف

بواسطـة القائـد [$first_name](tg://user?id=$from_id)

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
  [['text'=>"قناتنـاا الرسمية 💙",'url'=>"https://t.me/XOne_Team"]],
  [['text'=>"🔻 قناة اليوتيوب 🔺",'url'=>"https://youtube.com/channel/UCbBYdHceLnoYpUR5Iq4VyVA"]],
  ]])
  ]);
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
  [['text'=>"قناتنـاا الرسمية 💙",'url'=>"https://t.me/XOne_Team"]],
  [['text'=>"🔻 قناة اليوتيوب 🔺",'url'=>"https://youtube.com/channel/UCbBYdHceLnoYpUR5Iq4VyVA"]],
  ]])
  ]);
}
}}
elseif($newid == $bot_id ){
if($botstat == 'administrator'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🤖 تـم تفعيل البوت بنجاح .. ✅

بواسطة «[$first_name](tg://user?id=$from_id)»

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
mkdir("data");
mkdir("data/ban");
mkdir("data/mute");
mkdir("data/warn");
mkdir("data/ban/$chat_id");
mkdir("data/mute/$chat_id");
mkdir("data/warn/$chat_id");
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. البوت ليس مشرف ⛔️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
  ]);
bot('LeaveChat',[
  'chat_id'=>$chat_id,
  ]);
  
}}
elseif($text  == "/active"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($botstat == 'administrator'){

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🤖 تـم تفعيل البوت بنجاح .. ✅

بواسطة «[$first_name](tg://user?id=$from_id)»

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
 
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. البوت ليس مشرف ⛔️ ](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
  ]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
  ]);
}
}

elseif(strpos($text  , "/reload") !== false){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {


bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"« جاري تحديث البوت .. 🔄",
  ]);
  sleep(3);
	bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
      'text'=>"
🤖 • تـم إعادة تشغيل البوت
🔰 • تـم تحديث قائمة الاوامر
🛡 • تـم تحديث الحمايـة
✅ • تـم تحديث قائمة المشرفين .. 

Sponsored.. @XOne_Team
",
  ]);
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
[خطأ .. انـت لست مشرف ⛔️](http://t.me/$usernamebot)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,

  ]);
}
}
}else{
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}

if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$XOneTeam) && !in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
if($update->message->contact){
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}}}
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$XOneTeam) && !in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
if($update->message->forward_from | $update->message->forward_from_chat){
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}}}
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$XOneTeam) && !in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
if($update->message->audio){
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}}}

if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$XOneTeam) && !in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
if($update->message->entities){
$xoneteam= strpos($text, 'http') !== false || strpos($text, 'www.') !== false;

if($xoneteam){
unlink("vitus_url.txt");
function append($str1, $str2) {
$str1 .=$str2;
return $str1;
}
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://www.virustotal.com/vtapi/v2/url/scan",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
 CURLOPT_POSTFIELDS => "url=$text&apikey=0c3c4ede23df932be54be1d39c615e0b4026dde4a6009a0c76401922f6c1edaf",
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/x-www-form-urlencoded",
    "accept: application/json"
  ],
]);

$response = curl_exec($curl);

$json = json_decode($response, true);
$re = $json['resource'];
$curl = curl_init();


$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://www.virustotal.com/vtapi/v2/url/report?apikey=0c3c4ede23df932be54be1d39c615e0b4026dde4a6009a0c76401922f6c1edaf&resource=$re&allinfo=false&scan=0",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "accept: application/json"
  ],
]);

$response1 = curl_exec($curl);

$json1 = json_decode($response1, true);
unlink('a.txt');
$sc = file_get_contents('virus_url.txt');
$sca = substr($response1, 558);
$scaa = str_replace('"detected": false, ', '', $sca);
$scan = str_replace('"', '', $scaa); 
$scan = str_replace('{', '', $scan);
$scan = str_replace("unrated site", "❔", $scan);
$scan = str_replace("clean site", "✅", $scan);
$scan = str_replace('}', '', $scan);
$scan = str_replace(',',"\n", $scan);
$scan = str_replace(':', '', $scan);
$scan = str_replace("unrated site", "❔", $scan);
$scan = str_replace("clean site", "✅", $scan);
$scan = str_replace(' result ', '=>', $scan);

$filer = explode("\n", $scan);


foreach($filer as $file){
$one = explode("=>", $file);
$virus = $one[0];
$stat = $one[1];

file_put_contents("a.txt" ,$virus."\n",FILE_APPEND);
file_put_contents("b.txt" ,$stat."\n",FILE_APPEND);
}
$c = file_get_contents("a.txt");
$f = explode("\n", $c);
$e0 = $f[0];
$e1 = $f[1];
$e2 = $f[2];
$e3 = $f[3];
$e4 = $f[4];
$e5 = $f[5];
$e6 = $f[6];
$e7 = $f[7];
$e8 = $f[8];
$e9 = $f[9];
$e10 = $f[10];
$e11 = $f[11];
$e12 = $f[12];
$e13 = $f[13];
$e14 = $f[14];
$e15 = $f[15];
$e16 = $f[16];
$e17 = $f[17];
$e18 = $f[18];
$e19 = $f[19];
$e20 = $f[20];
$e21 = $f[21];
$e22 = $f[22];
$e23 = $f[23];
$e24 = $f[24];
$e25 = $f[25];
$e26 = $f[26];
$e27 = $f[27];
$e28 = $f[28];
$e29 = $f[29];
$e30 = $f[30];
$e31 = $f[31];
$e32 = $f[32];
$e33 = $f[33];
$e34 = $f[34];
$e35 = $f[35];
$e36 = $f[36];
$e37 = $f[37];
$e38 = $f[38];
$e39 = $f[39];
$e40 = $f[40];
$e41 = $f[41];
$e42 = $f[42];
$e43 = $f[43];
$e44 = $f[44];
$e45 = $f[45];
$e46 = $f[46];
$e47 = $f[47];
$e48 = $f[48];
$e49 = $f[49];
$e50 = $f[50];
$e51 = $f[51];
$e52 = $f[52];
$e53 = $f[53];
$e54 = $f[54];
$e55 = $f[55];
$e56 = $f[56];
$e57 = $f[57];
$e58 = $f[58];
$e59 = $f[59];
$e60 = $f[60];
$e61 = $f[61];
$e62 = $f[62];
$e63 = $f[63];
$e64 = $f[64];
$e65 = $f[65];
$e66 = $f[66];
$e67 = $f[67];
$e68 = $f[68];
$e69 = $f[69];
$e70 = $f[70];
$e71 = $f[71];
$e72 = $f[72];
$e73 = $f[73];
$e74 = $f[74];
$e75 = $f[75];
$e76 = $f[76];
$e77 = $f[77];
$e78 = $f[78];
$e79 = $f[79];
$e80 = $f[80];
$e81 = $f[81];
$e82 = $f[82];
$e83 = $f[83];
$e84 = $f[84];
$e85 = $f[85];



$d = file_get_contents("b.txt");
$x = explode("\n", $d);
$v0 = $x[0];
$v1 = $x[1];
$v2 = $x[2];
$v3 = $x[3];
$v4 = $x[4];
$v5 = $x[5];
$v6 = $x[6];
$v7 = $x[7];
$v8 = $x[8];
$v9 = $x[9];
$v10 = $x[10];
$v11 = $x[11];
$v12 = $x[12];
$v13 = $x[13];
$v14 = $x[14];
$v15 = $x[15];
$v16 = $x[16];
$v17 = $x[17];
$v18 = $x[18];
$v19 = $x[19];
$v20 = $x[20];
$v21 = $x[21];
$v22 = $x[22];
$v23 = $x[23];
$v24 = $x[24];
$v25 = $x[25];
$v26 = $x[26];
$v27 = $x[27];
$v28 = $x[28];
$v29 = $x[29];
$v30 = $x[30];
$v31 = $x[31];
$v32 = $x[32];
$v33 = $x[33];
$v34 = $x[34];
$v35 = $x[35];
$v36 = $x[36];
$v37 = $x[37];
$v38 = $x[38];
$v39 = $x[39];
$v40 = $x[40];
$v41 = $x[41];
$v42 = $x[42];
$v43 = $x[43];
$v44 = $x[44];
$v45 = $x[45];
$v46 = $x[46];
$v47 = $x[47];
$v48 = $x[48];
$v49 = $x[49];
$v50 = $x[50];
$v51 = $x[51];
$v52 = $x[52];
$v53 = $x[53];
$v54 = $x[54];
$v55 = $x[55];
$v56 = $x[56];
$v57 = $x[57];
$v58 = $x[58];
$v59 = $x[59];
$v60 = $x[60];
$v61 = $x[61];
$v62 = $x[62];
$v63 = $x[63];
$v64 = $x[64];
$v65 = $x[65];
$v66 = $x[66];
$v67 = $x[67];
$v68 = $x[68];
$v69 = $x[69];
$v70 = $x[70];
$v71 = $x[71];
$v72 = $x[72];
$v73 = $x[73];
$v74 = $x[74];
$v75 = $x[75];
$v76 = $x[76];
$v77 = $x[77];
$v78 = $x[78];
$v79 = $x[79];
$v80 = $x[80];
$v81 = $x[81];
$v82 = $x[82];
$v83 = $x[83];
$v84 = $x[84];
$v85 = $x[85];


bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
فحص جديد
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Virus📜",'callback_data'=>"v"],['text'=>"Status⚔️",'callback_data'=>"s"]],
[['text'=>"$e0",'callback_data'=>"v"],['text'=>"$v0",'callback_data'=>"s"]],
[['text'=>"$e1",'callback_data'=>"v"],['text'=>"$v1",'callback_data'=>"s"]],
[['text'=>"$e2",'callback_data'=>"v"],['text'=>"$v2",'callback_data'=>"s"]],
[['text'=>"$e3",'callback_data'=>"v"],['text'=>"$v3",'callback_data'=>"s"]],
[['text'=>"$e4",'callback_data'=>"v"],['text'=>"$v4",'callback_data'=>"s"]],
[['text'=>"$e5",'callback_data'=>"v"],['text'=>"$v5",'callback_data'=>"s"]],
[['text'=>"$e6",'callback_data'=>"v"],['text'=>"$v6",'callback_data'=>"s"]],
[['text'=>"$e7",'callback_data'=>"v"],['text'=>"$v7",'callback_data'=>"s"]],
[['text'=>"$e8",'callback_data'=>"v"],['text'=>"$v8",'callback_data'=>"s"]],
[['text'=>"$e9",'callback_data'=>"v"],['text'=>"$v9",'callback_data'=>"s"]],
[['text'=>"$e10",'callback_data'=>"v"],['text'=>"$v10",'callback_data'=>"s"]],
[['text'=>"$e11",'callback_data'=>"v"],['text'=>"$v11",'callback_data'=>"s"]],
[['text'=>"$e12",'callback_data'=>"v"],['text'=>"$v12",'callback_data'=>"s"]],
[['text'=>"$e13",'callback_data'=>"v"],['text'=>"$v13",'callback_data'=>"s"]],
[['text'=>"$e14",'callback_data'=>"v"],['text'=>"$v14",'callback_data'=>"s"]],
[['text'=>"$e15",'callback_data'=>"v"],['text'=>"$v15",'callback_data'=>"s"]],
[['text'=>"$e16",'callback_data'=>"v"],['text'=>"$v16",'callback_data'=>"s"]],
[['text'=>"$e17",'callback_data'=>"v"],['text'=>"$v17",'callback_data'=>"s"]],
[['text'=>"$e18",'callback_data'=>"v"],['text'=>"$v18",'callback_data'=>"s"]],
[['text'=>"$e19",'callback_data'=>"v"],['text'=>"$v19",'callback_data'=>"s"]],
[['text'=>"$e20",'callback_data'=>"v"],['text'=>"$v20",'callback_data'=>"s"]],
[['text'=>"$e21",'callback_data'=>"v"],['text'=>"$v21",'callback_data'=>"s"]],
[['text'=>"$e22",'callback_data'=>"v"],['text'=>"$v22",'callback_data'=>"s"]],
[['text'=>"$e23",'callback_data'=>"v"],['text'=>"$v23",'callback_data'=>"s"]],
[['text'=>"$e24",'callback_data'=>"v"],['text'=>"$v24",'callback_data'=>"s"]],
[['text'=>"$e25",'callback_data'=>"v"],['text'=>"$v25",'callback_data'=>"s"]],
[['text'=>"$e26",'callback_data'=>"v"],['text'=>"$v26",'callback_data'=>"s"]],
[['text'=>"$e27",'callback_data'=>"v"],['text'=>"$v27",'callback_data'=>"s"]],
[['text'=>"$e28",'callback_data'=>"v"],['text'=>"$v28",'callback_data'=>"s"]],
[['text'=>"$e29",'callback_data'=>"v"],['text'=>"$v29",'callback_data'=>"s"]],
[['text'=>"$e30",'callback_data'=>"v"],['text'=>"$v30",'callback_data'=>"s"]],
[['text'=>"$e31",'callback_data'=>"v"],['text'=>"$v31",'callback_data'=>"s"]],
[['text'=>"$e32",'callback_data'=>"v"],['text'=>"$v32",'callback_data'=>"s"]],
[['text'=>"$e33",'callback_data'=>"v"],['text'=>"$v33",'callback_data'=>"s"]],
[['text'=>"$e34",'callback_data'=>"v"],['text'=>"$v34",'callback_data'=>"s"]],
[['text'=>"$e35",'callback_data'=>"v"],['text'=>"$v35",'callback_data'=>"s"]],
[['text'=>"$e36",'callback_data'=>"v"],['text'=>"$v36",'callback_data'=>"s"]],
[['text'=>"$e37",'callback_data'=>"v"],['text'=>"$v37",'callback_data'=>"s"]],
[['text'=>"$e38",'callback_data'=>"v"],['text'=>"$v38",'callback_data'=>"s"]],
[['text'=>"$e39",'callback_data'=>"v"],['text'=>"$v39",'callback_data'=>"s"]],
[['text'=>"$e40",'callback_data'=>"v"],['text'=>"$v40",'callback_data'=>"s"]],
[['text'=>"$e41",'callback_data'=>"v"],['text'=>"$v41",'callback_data'=>"s"]],
[['text'=>"$e42",'callback_data'=>"v"],['text'=>"$v42",'callback_data'=>"s"]],
[['text'=>"$e43",'callback_data'=>"v"],['text'=>"$v43",'callback_data'=>"s"]],
[['text'=>"$e44",'callback_data'=>"v"],['text'=>"$v44",'callback_data'=>"s"]],
[['text'=>"$e45",'callback_data'=>"v"],['text'=>"$v45",'callback_data'=>"s"]],
[['text'=>"$e46",'callback_data'=>"v"],['text'=>"$v46",'callback_data'=>"s"]],
[['text'=>"$e47",'callback_data'=>"v"],['text'=>"$v47",'callback_data'=>"s"]],
[['text'=>"$e48",'callback_data'=>"v"],['text'=>"$v48",'callback_data'=>"s"]],
[['text'=>"$e49",'callback_data'=>"v"],['text'=>"$v49",'callback_data'=>"s"]],
[['text'=>"$e50",'callback_data'=>"v"],['text'=>"$v50",'callback_data'=>"s"]],
[['text'=>"$e51",'callback_data'=>"v"],['text'=>"$v51",'callback_data'=>"s"]],
[['text'=>"$e52",'callback_data'=>"v"],['text'=>"$v52",'callback_data'=>"s"]],
[['text'=>"$e53",'callback_data'=>"v"],['text'=>"$v53",'callback_data'=>"s"]],
[['text'=>"$e54",'callback_data'=>"v"],['text'=>"$v54",'callback_data'=>"s"]],
[['text'=>"$e55",'callback_data'=>"v"],['text'=>"$v55",'callback_data'=>"s"]],
[['text'=>"$e56",'callback_data'=>"v"],['text'=>"$v56",'callback_data'=>"s"]],
[['text'=>"$e57",'callback_data'=>"v"],['text'=>"$v57",'callback_data'=>"s"]],
[['text'=>"$e58",'callback_data'=>"v"],['text'=>"$v58",'callback_data'=>"s"]],
[['text'=>"$e59",'callback_data'=>"v"],['text'=>"$v59",'callback_data'=>"s"]],
[['text'=>"$e60",'callback_data'=>"v"],['text'=>"$v60",'callback_data'=>"s"]],
[['text'=>"$e61",'callback_data'=>"v"],['text'=>"$v61",'callback_data'=>"s"]],
[['text'=>"$e62",'callback_data'=>"v"],['text'=>"$v62",'callback_data'=>"s"]],
[['text'=>"$e63",'callback_data'=>"v"],['text'=>"$v63",'callback_data'=>"s"]],
[['text'=>"$e64",'callback_data'=>"v"],['text'=>"$v64",'callback_data'=>"s"]],
[['text'=>"$e65",'callback_data'=>"v"],['text'=>"$v65",'callback_data'=>"s"]],
[['text'=>"$e66",'callback_data'=>"v"],['text'=>"$v66",'callback_data'=>"s"]],
[['text'=>"$e67",'callback_data'=>"v"],['text'=>"$v67",'callback_data'=>"s"]],
[['text'=>"$e68",'callback_data'=>"v"],['text'=>"$v68",'callback_data'=>"s"]],
[['text'=>"$e69",'callback_data'=>"v"],['text'=>"$v69",'callback_data'=>"s"]],
[['text'=>"$e70",'callback_data'=>"v"],['text'=>"$v70",'callback_data'=>"s"]],
[['text'=>"$e71",'callback_data'=>"v"],['text'=>"$v71",'callback_data'=>"s"]],
[['text'=>"$e72",'callback_data'=>"v"],['text'=>"$v72",'callback_data'=>"s"]],
[['text'=>"$e73",'callback_data'=>"v"],['text'=>"$v73",'callback_data'=>"s"]],
[['text'=>"$e74",'callback_data'=>"v"],['text'=>"$v74",'callback_data'=>"s"]],
[['text'=>"$e75",'callback_data'=>"v"],['text'=>"$v75",'callback_data'=>"s"]],
[['text'=>"$e76",'callback_data'=>"v"],['text'=>"$v76",'callback_data'=>"s"]],
[['text'=>"$e77",'callback_data'=>"v"],['text'=>"$v77",'callback_data'=>"s"]],
[['text'=>"$e78",'callback_data'=>"v"],['text'=>"$v78",'callback_data'=>"s"]],
[['text'=>"$e79",'callback_data'=>"v"],['text'=>"$v79",'callback_data'=>"s"]],
[['text'=>"$e80",'callback_data'=>"v"],['text'=>"$v80",'callback_data'=>"s"]],
[['text'=>"$e81",'callback_data'=>"v"],['text'=>"$v81",'callback_data'=>"s"]],
[['text'=>"$e82",'callback_data'=>"v"],['text'=>"$v82",'callback_data'=>"s"]],
[['text'=>"$e83",'callback_data'=>"v"],['text'=>"$v83",'callback_data'=>"s"]],
[['text'=>"$e84",'callback_data'=>"v"],['text'=>"$v84",'callback_data'=>"s"]],
[['text'=>"$e85",'callback_data'=>"v"],['text'=>"$v85",'callback_data'=>"s"]],
]])
  ]);
}
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);

}}}

if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$XOneTeam) && !in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
if($update->message->game){
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}}}
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$XOneTeam) && !in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
if($update->message->location){
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}}}
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$XOneTeam) && !in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
if($update->message->sticker){
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}}}
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$XOneTeam) && !in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
if($update->message->sticker->is_sticker){
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}}}

if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$XOneTeam) && !in_array($from_id,$developer)) {
if ($tc == 'supergroup'){
if ($message->new_chat_member->is_bot) {
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id
]);
}}}




if( $text=="/start" &&  $tc == "private" or $text=="🔙  رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'translation'=>"en",
'text'=>"
السلام عليكم ورحمة الله وبركاته ❤️

- إذكـر الله قبل كل شي🤲

- ما هي اخبارك اخي المسلم🤝

- اهلا اخي $first_name في بوت الحمايه

- يمكنك استخدامي في حمايه شات قناتك من الضرر
",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"إضـافه الـبوت فـي مـجـموعـتك <>",'url'=>"http://t.me/$usernamebot?startgroup=start"]],
[['text'=>"قناتنـاا الرسمية 💙",'url'=>"https://t.me/XOne_Team"], ['text'=>"شـات قناتنـاا الرسمية 💙",'url'=>"https://t.me/Chat_XOne_Team"]],
[['text'=>"مـبرمج الـبوت",'url'=>"https://t.me/XDev_X1"], ['text'=>"مـدير الـبوت",'url'=>"https://t.me/Alsarhan_X1"]],
]])
]);


}}
if($text=="/start" &&  $tc == "private"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'translation'=>"en",
'text'=>"
السلام عليكم ورحمة الله وبركاته ❤️

- إذكـر الله قبل كل شي🤲

- ما هي اخبارك اخي المسلم🤝

- اهلا اخي $first_name في بوت الحمايه

- يمكنك استخدامي في حمايه شات قناتك من الضرر
",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"إضـافه الـبوت فـي مـجـموعـتك <>",'url'=>"http://t.me/$usernamebot?startgroup=start"]],
[['text'=>"قناتنـاا الرسمية 💙",'url'=>"https://t.me/XOne_Team"], ['text'=>"شـات قناتنـاا الرسمية 💙",'url'=>"https://t.me/Chat_XOne_Team"]],
[['text'=>"مـبرمج الـبوت",'url'=>"https://t.me/XDev_X1"], ['text'=>"مـدير الـبوت",'url'=>"https://t.me/Alsarhan_X1"]],
]])
]);
}}



echo "SCRIP IS GOOD";
