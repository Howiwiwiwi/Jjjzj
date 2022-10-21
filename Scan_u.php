<?php
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
 CURLOPT_POSTFIELDS => "url=www.elegant.games&apikey=0c3c4ede23df932be54be1d39c615e0b4026dde4a6009a0c76401922f6c1edaf",
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
unlink('vitus_url.txt');
$sc = file_get_contents('virus_url.txt');
$sca = substr($response1, 558);
$scaa = str_replace('"detected": false, ', '', $sca);
$scan = str_replace('"', '', $scaa); 
$scan = str_replace('{', '', $scan);
$scan = str_replace('}', '', $scan);
$scan = str_replace(',',"\n", $scan);
$scan = str_replace(':', '', $scan);
$scan = str_replace(' result ', '=>', $scan);

$filer = explode("\n", $scan);

$a ='bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"
تـم كتم الـعضو [$re_name](tg://user?id=$re_id) 🔇‼️ 

 بواسطة القائد «[$first_name](tg://user?id=$from_id)»
","parse_mode"=>"markdown","disable_web_page_preview"=>true,
"reply_to_message_id"=>$message->message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"إلغاء الكتم 🚫","callback_data"=>"unmute"]],
';
foreach($filer as $file){
$one = explode("=>", $file);
$virus = $one[0];
$stat = $one[1];
$put = '
[["text"=>"'.$virus.'"], ["text"=>"'.$stat.'"]],
';
file_put_contents("vitus_url.txt" ,$put,FILE_APPEND);
}
$final = file_get_contents("vitus_url.txt");
$c = append($a, $final);
$d = ']])
  ]);';
$e = append($c, $d);
echo $e;
