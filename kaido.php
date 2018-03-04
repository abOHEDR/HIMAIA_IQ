<?php
ob_start();
$API_KEY = 'توكن';
echo "api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
define('API_KEY',$API_KEY);
function KasperTP($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $update->message->text;
$inline=$update->inline_query;
$voice = $update->message->voice;
$video = $update->message->video;
$audio = $update->message->audio;
$photo = $update->message->photo;
$game = $update->message->game;
$sticker = $update->message->sticker;
$contact = $update->message->contact;
$chat_id = $update->message->chat->id;
$replay = $message->reply_to_message; 
$from_id = $update->message->from->id;
$fwd = $update->message->forward_from;
$edited = $update->edited_message->text;
$document = $update->message->document;
$title_name = $update->message->chat->title;
$user = $update->message->from->username;
$name = $update->message->from->first_name;
$message_id = $update->message->message_id;
$edit_id = $update->edited_message->message_id;
$edit_chat_id = $update->edited_message->chat->id;
$fwd0 = $update->message->forward_from_chat->id;
$newid = $update->message->new_chat_member->id;
$edit_from_id = $update->edited_message->message->from->id;
$newbots = $update->message->new_chat_member->username;
$newname = $update->message->new_chat_member->first_name;
$reply_name = $update->message->reply_to_message->from->first_name;
$reply_user = $update->message->reply_to_message->from->username;
$reply_id = $update->message->reply_to_message->from->id;
$title =  "\nֆ • ᘐᖘ ᘉᗩᙢᕮ • ".$title_name."\nֆ • ᘐᖘ Ꭵᗪ • ".$chat_id;
if(isset($update->callback_query)){
$callbackMessage = '';
var_dump(KasperTP('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>$callbackMessage]));
$chat_id = $update->callback_query->message->chat->id;
$from_id = $update->callback_query->from->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
}
//حصانة الادمنيه
$sudo = "حط ايديك هنا";
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$from_id), true);
$group = $info['result']['status'];
$admin = "administrator";
$mudir = "creator";
$info_ = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$edit_chat_id&user_id=".$edit_from_id), true);
$group_ = $info_['result']['status'];
$bot = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=395446310");
//فنكشنات
function en($text) {
if(stristr($text,"a") or stristr($text, 'b') or stristr($text, 'c') or stristr($text, 'd') or stristr($text, 'e') or stristr($text, 'f') or stristr($text, 'g') or stristr($text, 'h') or stristr($text, 'i') or stristr($text, 'j') or stristr($text, 'k') or stristr($text, 'l') or stristr($text, 'm') or stristr($text, 'n') or stristr($text, 'o') or stristr($text, 'p') or stristr($text, 'q') or stristr($text, 'r') or stristr($text, 's') or stristr($text, 't') or stristr($text, 'u') or stristr($text, 'v') or stristr($text, 'w') or stristr($text, 'x') or stristr($text, 'y') or stristr($text, 'z')){
return true;
}
else
{
return false;
}
}
$en = en($text);
function ar($text) {
if(stristr($text,"ض") or stristr($text, 'ص') or stristr($text, 'ث') or stristr($text, 'ق') or stristr($text, 'ف') or stristr($text, 'غ') or stristr($text, 'ع') or stristr($text, 'ه') or stristr($text, 'خ') or stristr($text, 'ح') or stristr($text, 'ج') or stristr($text, 'ش') or stristr($text, 'س') or stristr($text, 'ي') or stristr($text, 'ب') or stristr($text, 'ل') or stristr($text, 'ا') or stristr($text, 'ت') or stristr($text, 'ن') or stristr($text, 'م') or stristr($text, 'ك') or stristr($text, 'ط') or stristr($text, 'ذ') or stristr($text, 'ء') or stristr($text, 'ؤ') or stristr($text, 'ر') or stristr($text, 'ى') or stristr($text, 'ئ') or stristr($text, 'ة') or stristr($text, 'و') or stristr($text, 'ز') or stristr($text, 'ظ') or stristr($text, 'د') or stristr($text, 'أ') or stristr($text, 'إ') or stristr($text, 'آ')){
return true;
}
else
{
return false;
}
}
$ar = ar($text);
// تخزين المجموعات
$_gif = file_get_contents("data/gif.json");
$gif_ = explode("\n", $_gif);
$_link = file_get_contents("data/link.json");
$link_ = explode("\n", $_link);
$_fwd = file_get_contents("data/fwd.json");
$fwd_ = explode("\n", $_fwd);
$_voice = file_get_contents("data/voice.json");
$voice_ = explode("\n", $_voice);
$_audio = file_get_contents("data/audio.json");
$audio_ = explode("\n", $_audio);
$_video = file_get_contents("data/video.json");
$video_ = explode("\n", $_video);
$_sticker = file_get_contents("tg/sticker.json");
$sticker_ = explode("\n", $_sticker);
$_photo = file_get_contents("data/photo.json");
$photo_ = explode("\n", $_photo);
$_hash = file_get_contents("data/hash.json");
$hash_ = explode("\n", $_hash);
$_ar = file_get_contents("data/ar.json");
$ar_ = explode("\n", $_ar);
$_en = file_get_contents("data/en.json");
$en_ = explode("\n", $_en);
$_game = file_get_contents("data/game.json");
$game_ = explode("\n", $_game);
$_contact = file_get_contents("data/contact.json");
$contact_ = explode("\n", $_contact);
$_document = file_get_contents("data/document.json");
$document_ = explode("\n", $_document);
$_username = file_get_contents("data/username.json");
$username_ = explode("\n", $_username);
$_bots = file_get_contents("data/bots.json");
$bots_ = explode("\n", $_bots);
$_edited = file_get_contents("data/edited.json");
$edited_ = explode("\n", $_edited);
$_inline = file_get_contents("data/inline.json");
$inline_ = explode("\n", $_inline);
$_spam = file_get_contents("data/spam.json");
$spam_ = explode("\n", $_spam);
$_mute = file_get_contents("data/mute.json");
$mute_ = explode("\n", $_mute);
$_add = file_get_contents("data/add.json");
$add_ = explode("\n", $_add);
$_replay = file_get_contents("data/replay.json");
$replay_ = explode("\n", $_replay);
$_wlc = file_get_contents("data/wlc.json");
$wlc_ = explode("\n", $_wlc);
$selict = explode("\n", file_get_contents("data/selict/s$chat_id.json"));
// الترحيب
if($data == "back"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"\n\nםـرحـبـا بـك فـي الاواםـر 🔰الان يـםـكـنـك اخـتـيـار םـا يـنـا๛ـبـك مـن الاواםـر ☑️",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"💬 ا໑امـﮩر الـحـمـايـة 🔰",'callback_data'=>"help"],['text'=>"💭 ا໑امـﮩر الاخـﮩرہ📍",'callback_data'=>"help1"]],[['text'=>"⏱ الـوقـﮩت وتـاريـخ ⏱",'callback_data'=>"time"]],[['text'=>"🔅 اخـفـاء الاوامـﮩر 🔆",'callback_data'=>"rem"]],]])]);}}
if($text == "الاوامر" and $message->chat->type == "supergroup"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"\n\nםـرحـبـا بـك فـي الاواםـر 🔰الان يـםـكـنـك اخـتـيـار םـا يـنـا๛ـبـك مـن الاواםـر ☑️",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"💬 ا໑امـﮩر الـحـمـايـة 🔰",'callback_data'=>"help"],['text'=>"💭 ا໑امـﮩر الاخـﮩرہ📍",'callback_data'=>"help1"]],[['text'=>"⏱ الـوقـﮩت وتـاريـخ ⏱",'callback_data'=>"time"]],[['text'=>"🔅 اخـفـاء الاوامـﮩر 🔆",'callback_data'=>"rem"]],]])]);}}
if($data == "help1"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"
|---------------------------------------------------------|
(تثبيت) + برد
رد ؏ رسـالـه لـيـتـم تـثـبـيـتـه 📌
|---------------------------------------------------------|
(الغاء تثبيت) + برد
رد ؏ رسـالـه لـيـتـم الـغـاء تـثـبـيـتـه 📌
|---------------------------------------------------------|
(كتم) + برد
كـتـم ؏ـضـو بـرد 🔕
|---------------------------------------------------------|
(الغاء كتم) + برد
الـغـاء كـتـﮩم عـن الـ؏ـضـو 🔕
|---------------------------------------------------------|
(مسح المكتومين)
لـםـسـح جـםـيـ؏ الـםـكـتـ໑םـيـن 🔕
|---------------------------------------------------------|
(منع) + الكلمة
لـ໑ضـ؏ كـلـםـة داخـل الـفـلـتـر 🚯
|---------------------------------------------------------|
(الغاء منع) + الكلمة
لاخـراج كـلـםـة םـن الـفـلـتـر 🚯
|---------------------------------------------------------|
(قائمة المنع)
لـ؏ـرض كـلـםـات الـداخـل الـفـلـتـر 🚯
|---------------------------------------------------------|
(مسح قائمة المنع)
لـםـسـح كـلـםـات الـداخـل الـفـلـتـر 🚯
|---------------------------------------------------------|
(حظر) + برد
حـضر ؏ـضـو 📛
|---------------------------------------------------------|
(مغادرة البوت)
لـﮩخـر໑ج الـبـ໑ت םـﮩن الـمـجـمـو؏ـة 👞
|---------------------------------------------------------|
(تفعيل الردود)
لـﮩجـ؏ـل الـبـ໑تـ« يـتـﮩكـلـم
|---------------------------------------------------------|
(تعطيل الردود)
لـﮩجـ؏ـل الـبـ໑تـ« لا يـتـﮩكـلـم
|---------------------------------------------------------|
(مسح) + عدد / مطور فقط
مـسـح الرسـائـل بـ؏ـدد 🗑
|---------------------------------------------------------|
(ضع اسم) + نص
تـغـيـر اسـم الـمـجـمـو؏ـة 🔁
|---------------------------------------------------------|
(ماركداون) + نص
عـمـل نـصـوص بـجـمـيـ؏ انـوا؏ الـمـاركـدا໑ن ✨
|---------------------------------------------------------|
(معلوماتي)
اضـهـار مـ؏ـلـ໑مـاتـك الـشـخـصـيـه 📍
|---------------------------------------------------------|
(معلوماته) برد
اضـهـار مـ؏ـلـﮩ໑مـات الـمـسـتـخـدم بـرد 🎫
|---------------------------------------------------------|
(ماركت) + اسم
لـلـبـحـث ؏ـن تـطـبـيـق انـدرويـد 🛍
|---------------------------------------------------------|
(اختصار الرابط) + رابط
اخـتـصـار روابـط بـأشـهـر مـواقـ؏ الاخـتـصـار 🖇
|---------------------------------------------------------|
(انستا) + يوز
اضـهـار םـ؏ـلـ໑םـات الانـسـتـا الـخـاصـه بـ يـ໑زر
|---------------------------------------------------------|
(اشعار) + رقم + نص
تـصـםـيـ۾ اشـ؏ـار خـاص بـك 
|---------------------------------------------------------|
(قالب لوا) + الكليشه=الامر
انـشـاء كـ໑د كـلـيـشـه جـاهـزه
|---------------------------------------------------------|
(رابط حذف)
رابـط حـذفـ« حـ๛ـاب الـتـلـي نـهـائـيـاً
|---------------------------------------------------------|
📡┊*Channel Bots* [TP Team](t.me/dev_kasper)",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجـ(🔙)ـو؏", 'callback_data'=>"back"]],[['text'=>"🔅 اخـفـاء الاوامـﮩر 🔆", 'callback_data'=>"rem"]],]])]);}}
if($data == "help"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('editmessagetext',[
'chat_id'=>$chat_id,
'text'=>"مـرحـبـا بـك 🌹
فـي ا໑امـﮩر الـحـمـايـة الـمـجـمـوعـة 🎋🙂
{-------------------------------------------------------}
قفل 🔐| فتح 🔓> الروابط 📎
قفل 🔐| فتح 🔓> التوجيه 🔄
قفل 🔐| فتح 🔓> الكلايش 📊
قفل 🔐| فتح 🔓> البصمة 🎙
قفل 🔐| فتح 🔓> الصوت 🔕
قفل 🔐| فتح 🔓> الصور 🏞
قفل 🔐| فتح 🔓> الفيديو 🎥
قفل 🔐| فتح 🔓> التعديل ⚡️
قفل 🔐| فتح 🔓> العربيه 🇮🇶
قفل 🔐| فتح 🔓> الانكليزيه 🇱🇷
قفل 🔐| فتح 🔓> انلاين 💎
قفل 🔐| فتح 🔓> الملصقات 🎭
قفل 🔐| فتح 🔓> الصور متحركه 🔞
قفل 🔐| فتح 🔓> جهات تصال ☎️
قفل 🔐| فتح 🔓> البوتات 🤖
قفل 🔐| فتح 🔓> المعرفات Ⓜ️
قفل 🔐| فتح 🔓> هاش تاك #⃣
قفل 🔐| فتح 🔓> العاب 🕹
قفل 🔐| فتح 🔓> الملفات 🗃
قفل 🔐| فتح 🔓> الدردشه 👤
{-------------------------------------------------------}
📡┊*Channel Bots* [TP Team](t.me/dev_kasper)",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"رجـ(🔙)ـو؏", 'callback_data'=>"back"]],[['text'=>"🔅 اخـفـاء الاوامـﮩر 🔆", 'callback_data'=>"rem"]],]])]);}}
if($data == 'rem'){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/twsal.json");
$send = str_replace($from_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/twsal.json', $send);
KasperTP('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"✔️ تـﮩم اخـفـاء الاوامـﮩر 👁‍🗨",
'message_id'=>$message_id,]);}}
if($text == "/start" and !strpos($inch , '"status":"left"') !== false and $message->chat->type == "private"){
mkdir("data");
mkdir("data/selict");
mkdir("data/filter");
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- םـرحـبـا بـك فـي بـ໑تـ» الـحـםـايـة 👾 •

- الـبـ໑تـ» رسـםـي مـن شـركـة تـلـيـجـرا۾ 🔰 •

- الـبـ໑تـ» يـجـ؏ـل םـجـםـو؏ـة اםـنـه 💯 •

- םـسـح جـםـيـ؏ ؏ـلانـاتـ» الـمـز؏ـجـه םـن الـםـيـديـا ♻️ •

- الـبـ໑ت حـصـل ؏ تـقـيـ۾ (⭐️⭐️⭐️⭐️⭐️) •

- كـيـف يـ؏ـםـل الـبـ໑تـ» ?? ⚠️ •

- اضـاف الـبـوتــ» اداري فـي الـםـجـםـ໑؏ـة ☑️ •

- ار๛ـل اםـر ( تفعيل ) في الـםـجـםـ໑؏ـة💡•

- بـ؏ـدهـا ار๛ـل اםـر ( الاوامر ) فـي الـםـجـםـ໑؏ـة 🛠 •
",
'message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"الـםـطـ໑ر",'url'=>"t.me/dev_kasper"]],[['text'=>"تـ໑اصـل الـםـطـ໑ر",'url'=>"t.me/Abohaedrk"]],[['text'=>"هل لديك اقتراح ؟",'callback_data'=>"sendsudo"]],]])]);}
if($text == "تفعيل الترحيب" and !in_array($chat_id, $wlc_)){
if($from_id == $sudo){
file_put_contents("data/wlc.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـفـعـيـل 📳 الـتـرحـيـب 📊".$title,]);}}
if($text == "تفعيل الترحيب" and in_array($chat_id, $wlc_)){
if($from_id == $sudo){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـفـعـيـل 📳 الـتـرحـيـب 📊 بـتـأكـيـد 🔝".$title,]);}}
if($text == "تعطيل الترحيب" and in_array($chat_id, $wlc_)){
if($from_id == $sudo){
$send = file_get_contents("data/wlc.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/wlc.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـعـطـيـل 📴 الـتـرحـيـب 📊".$title,]);}}
if($text == "تعطيل الترحيب" and !in_array($chat_id, $wlc_)){
if($from_id == $sudo){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ تـعـطـيـل 📴 الـتـرحـيـب 📊 بـتـأكـيـد 🔝".$title,]);}}
if($update->message->new_chat_members and $newid != 341488340){
if(in_array($chat_id, $wlc_)){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- םـرحـبـا بـك ؏ـزيـزي 📮 •
- اسـمـك • $newname 📌 • 
- مـعـرفـك • @$newbots 🗳 •
- ايـديـك • $newid 🏷 •
- ضـيـف جـهـاتـك خـوة 😻 •
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"- تـابـ؏ جـديـدنـا 📢 •", 'url'=>"https://t.me/joinchat/AAAAAD_tj8ChUsPMOwncsQ"]],]])]);
}else
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}
if($update->message->new_chat_members and $newid == 341488340 and !in_array($chat_id, $wlc_)){
file_put_contents("data/wlc.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[ 
'chat_id'=>$chat_id, 'text'=>"
ار๛ـل الان ( تفعيل ) 👾
اذا لـ۾ تـر๛ـل تـفـ؏ـيـل الـبـوتـ» لـن يـ؏ـمـل 🎩
تـابـ؏ جـديـدنـا [اضـغـط هـنـا](t.me/Abohaedrk) 📢
", 'parse_mode'=>markdown, 'disable_web_page_preview'=>true,]);}
//الاوامر
if($text == "قفل الروابط" and !in_array($chat_id, $link_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/link.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـروابـط 🖇".$title,]);}}
if($text == "قفل الروابط" and in_array($chat_id, $link_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـروابـط 🖇 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الروابط" and in_array($chat_id, $link_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/link.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/link.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـروابـط 🖇".$title,]);}}
if($text == "فتح الروابط" and !in_array($chat_id, $link_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـروابـط 🖇 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل المعرفات" and !in_array($chat_id, $username_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/username.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـمـعـرفـات Ⓜ️".$title,]);}}
if($text == "قفل المعرفات" and in_array($chat_id, $username_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـمـعـرفـات Ⓜ️ بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح المعرفات" and in_array($chat_id, $username_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/username.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/username.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـمـعـرفـات Ⓜ️".$title,]);}}
if($text == "فتح المعرفات" and !in_array($chat_id, $username_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـمـعـرفـات Ⓜ️ بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل هاش تاك" and !in_array($chat_id, $hash_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/hash.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـهـاش تـاك #⃣".$title,]);}}
if($text == "قفل هاش تاك" and in_array($chat_id, $hash_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـهـاش تـاك #⃣ بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح هاش تاك" and in_array($chat_id, $hash_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/hash.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/hash.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـهـاش تـاك #⃣".$title,]);}}
if($text == "فتح هاش تاك" and !in_array($chat_id, $hash_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـهـاش تـاك #⃣ بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل التوجيه" and !in_array($chat_id, $fwd_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/fwd.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـتـوجـيـه 🔄".$title,]);}}
if($text == "قفل التوجيه" and in_array($chat_id, $fwd_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـتـوجـيـه 🔄 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح التوجيه" and in_array($chat_id, $fwd_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/fwd.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/fwd.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـتـوجـيـه 🔄".$title,]);}}
if($text == "فتح التوجيه" and !in_array($chat_id, $fwd_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـتـوجـيـه 🔄 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الكلايش" and !in_array($chat_id, $spam_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/spam.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـكـلايـش 📊".$title,]);}}
if($text == "قفل الكلايش" and in_array($chat_id, $spam_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـكـلايـش 📊 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الكلايش" and in_array($chat_id, $spam_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/spam.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/spam.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـكـلايـش 📊".$title,]);}}
if($text == "فتح الكلايش" and !in_array($chat_id, $spam_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـكـلايـش 📊 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل العربيه" and !in_array($chat_id, $ar_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/ar.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـعـربـيـه 🇮🇶".$title,]);}}
if($text == "قفل العربيه" and in_array($chat_id, $ar_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـعـربـيـه 🇮🇶 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح العربيه" and !strpos($inch , '"status":"left"') !== false and in_array($chat_id, $add_) and in_array($chat_id, $ar_)){
if($from_id == $admin | strpos($inch , '"status":"member"') == false){
$send = file_get_contents("data/ar.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/ar.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـعـربـيـه 🇮🇶".$title,]);}}
if($text == "فتح العربيه" and !in_array($chat_id, $ar_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـعـربـيـه 🇮🇶 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الانكليزيه" and !in_array($chat_id, $en_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/en.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الانـكـلـيـزيـه 🇱🇷".$title,]);}}
if($text == "قفل الانكليزيه" and in_array($chat_id, $en_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الانـكـلـيـزيـه 🇱🇷 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الانكليزيه" and in_array($chat_id, $en_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/en.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/en.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الانـكـلـيـزيـه 🇱🇷".$title,]);}}
if($text == "فتح الانكليزيه" and !in_array($chat_id, $en_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الانـكـلـيـزيـه 🇱🇷 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل البصمه" and !in_array($chat_id, $voice_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/voice.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـبـصـمـه 🎙".$title,]);}}
if($text == "قفل البصمه" and in_array($chat_id, $voice_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـبـصـمـه 🎙 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح البصمه" and in_array($chat_id, $voice_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/voice.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/voice.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـبـصـمـه 🎙".$title,]);}}
if($text == "فتح البصمه" and !in_array($chat_id, $voice_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـبـصـمـه 🎙 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الصوت" and !in_array($chat_id, $audio_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/audio.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـصـوت 🔕".$title,]);}}
if($text == "قفل الصوت" and in_array($chat_id, $audio_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـصـوت 🔕 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الصوت" and in_array($chat_id, $audio_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/audio.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/audio.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـصـوت 🔕".$title,]);}}
if($text == "فتح الصوت" and !in_array($chat_id, $audio_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـصـوت 🔕 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الفيديو" and !in_array($chat_id, $video_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/video.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـفـيـديـو 🎥".$title,]);}}
if($text == "قفل الفيديو" and in_array($chat_id, $video_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـفـيـديـو 🎥 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الفيديو" and in_array($chat_id, $video_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/video.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/video.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـفـيـديـو 🎥".$title,]);}}
if($text == "فتح الفيديو" and !in_array($chat_id, $video_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـفـيـديـو 🎥 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الملصقات" and !in_array($chat_id, $sticker_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/sticker.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـمـلصـقـات 🎭".$title,]);}}
if($text == "قفل الملصقات" and in_array($chat_id, $sticker_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـمـلـصـقـات 🎭 بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "فتح الملصقات" and in_array($chat_id, $sticker_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/sticker.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/sticker.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـمـلـصـقـات 🎭".$title,]);}}
if($text == "فتح الملصقات" and !in_array($chat_id, $sticker_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـمـلـصـقـات 🎭 بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "قفل الصور" and !in_array($chat_id, $photo_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/photo.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـصـور 🏞".$title,]);}}
if($text == "قفل الصور" and in_array($chat_id, $photo_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـصـور 🏞 بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "فتح الصور" and in_array($chat_id, $photo_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/photo.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/photo.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـصـور 🏞".$title,]);}}
if($text == "فتح الصور" and !in_array($chat_id, $photo_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـصـور 🏞 بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "قفل البوتات" and !in_array($chat_id, $bots_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/bots.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـبـوتـات 🤖".$title,]);}}
if($text == "قفل البوتات" and in_array($chat_id, $bots_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـبـوتـات 🤖 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح البوتات" and in_array($chat_id, $bots_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/bots.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/bots.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـبـوتـات 🤖".$title,]);}}
if($text == "فتح البوتات" and !in_array($chat_id, $bots_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـبـوتـات 🤖 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل العاب" and !in_array($chat_id, $game_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/game.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـعـاب 🕹".$title,]);}}
if($text == "قفل العاب" and in_array($chat_id, $game_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـعـاب 🕹 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح العاب" and in_array($chat_id, $game_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/game.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/game.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـعـاب 🕹".$title,]);}}
if($text == "فتح العاب" and !in_array($chat_id, $game_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـعـاب 🕹 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الملفات" and !in_array($chat_id, $document_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/document.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـمـلـفـات 🗃".$title,]);}}
if($text == "قفل الملفات" and in_array($chat_id, $document_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـمـلـفـات 🗃 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الملفات" and in_array($chat_id, $document_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/document.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/document.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـمـلـفـات 🗃".$title,]);}}
if($text == "فتح الملفات" and !in_array($chat_id, $document_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـمـلـفـات 🗃 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل جهات تصال" and !in_array($chat_id, $contact_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/contact.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 جـهـات تـصـال ☎️".$title,]);}}
if($text == "قفل جهات تصال" and in_array($chat_id, $contact_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 جـهـات تـصـال ☎️ بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح جهات تصال" and in_array($chat_id, $contact_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/contact.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/contact.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 جـهـات تـصـال ☎️".$title,]);}}
if($text == "فتح جهات تصال" and !in_array($chat_id, $contact_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 جـهـات تـصـال ☎️ بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الصور متحركه" and !in_array($chat_id, $gif_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/gif.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـصـور مـتـحـركـه 🔞".$title,]);}}
if($text == "قفل الصور متحركه" and in_array($chat_id, $gif_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـصـور مـتـحـركـه 🔞 بـتـأكـيـد 🔝".$title,]);}}
if($text == "فتح الصور متحركه" and in_array($chat_id, $gif_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/gif.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/gif.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـصـور مـتـحـركـه 🔞".$title,]);}}
if($text == "فتح الصور متحركه" and !in_array($chat_id, $gif_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـصـور مـتـحـركـه 🔞 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل التعديل" and !in_array($chat_id, $edited_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/edited.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـتـعـديـل ⚡️".$title,]);}}
if($text == "قفل التعديل" and in_array($chat_id, $edited_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـتـعـديـل ⚡️ بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "فتح التعديل" and in_array($chat_id, $edited_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/edited.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/edited.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـتـعـديـل ⚡️".$title,]);}}
if($text == "فتح التعديل" and !in_array($chat_id, $edited_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـتـعـديـل ⚡️ بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل انلاين" and !in_array($chat_id, $inline_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/inline.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 انـلايـن 💎".$title,]);}}
if($text == "قفل انلاين" and in_array($chat_id, $inline_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 انـلايـن 💎 بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "فتح انلاين" and in_array($chat_id, $inline_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/inline.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/inline.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 انـلايـن 💎".$title,]);}}
if($text == "فتح انلاين" and !in_array($chat_id, $inline_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 انـلايـن 💎 بـتـأكـيـد 🔝".$title,]);}}
if($text == "قفل الدردشه" and !in_array($chat_id, $mute_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/mute.json", "$chat_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔒 الـدردشـه 👥".$title,]);}}
if($text == "قفل الدردشه" and in_array($chat_id, $mute_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ قـفـل 🔐 الـدردشـه 👥 بـتـأكـيـد 🔝 ".$title,]);}}
if($text == "فتح الدردشه" and in_array($chat_id, $mute_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/mute.json");
$send = str_replace($chat_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents('data/mute.json', $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـدردشـه 👥".$title,]);}}
if($text == "فتح الدردشه" and !in_array($chat_id, $mute_)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ فـتـح 🔓 الـدردشـه 👥 بـتـأكـيـد 🔝".$title,]);}}
//كتم عضو
if($replay and $text == "كتم" and in_array($reply_id, $selict) and $reply_id != $sudo){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ كـتـم 🔕 الـعـضـو 🗣 بـتـأكـيـد 🔝".$title,]);}}
if($replay and $text == "كتم" and !in_array($reply_id, $selict) and $reply_id != $sudo){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
file_put_contents("data/selict/s$chat_id.json", "$reply_id\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ كـتـم 🔕 الـعـضـو 🗣".$title,]);}}
if($replay and $text == "الغاء كتم" and !in_array($reply_id, $selict) and $reply_id != $sudo){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ الـغـاء 🎈 كـتـم 🔕 الـعـضـو 🗣 بـتـأكـيـد 🔝".$title,]);}}
if($replay and $text == "الغاء كتم" and in_array($reply_id, $selict) and $reply_id != $sudo){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/selict/s$chat_id.json");
$send = str_replace($reply_id, " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents("data/selict/s$chat_id.json", $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ الـغـاء 🎈 كـتـم 🔕 الـعـضـو 🗣".$title,]);}}
//مسح المكتومين
if($text == "مسح المكتومين" and !file_exists("data/selict/s$chat_id.json")){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لا يـوجـد ❌ مـكـتـومـيـن 🔕 لـلـمـسـح 🗑".$title,]);}}
if($text == "مسح المكتومين" and file_exists("data/selict/s$chat_id.json")){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
unlink("data/selict/s$chat_id.json");
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ مـسـح 🗑 الـمـكـتـومـيـن 🔕".$title,]);}}
//فلتر كلمات
if(preg_match('/^(منع) (.*)/s', $text, $filter)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ مـنـع 🚯 الـ($filter[2]) 💯 بـتـأكـيـد 🔝".$title,]);}}}
if(preg_match('/^(منع) (.*)/s', $text, $filter)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(!in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
file_put_contents("data/filter/s$chat_id.json", "$filter[2]\n", FILE_APPEND);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ مـنـع 🚯 الـ($filter[2]) 💯".$title,]);}}}
if(preg_match('/^(الغاء منع) (.*)/s', $text, $filter)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(!in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ الـغـاء مـنـع 🚯 الـ($filter[2]) 💯 بـتـأكـيـد 🔝",]);}}}
if(preg_match('/^(الغاء منع) (.*)/s', $text, $filter)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
if(in_array($filter[2], explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
$send = file_get_contents("data/filter/s$chat_id.json");
$send = str_replace($filter[2], " ", $send);
$send = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $send);
file_put_contents("data/filter/s$chat_id.json", $send);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ الـغـاء مـنـع 🚯 الـ($filter[2]) 💯",]);}}}
if($text == "قائمة المنع"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$filter = file_get_contents("data/filter/s$chat_id.json");
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
قـائـمـة 📃 الـكـلـمـات 📈 الـمـمـنـوعـة 🚯 
داخـل الـمـجـمـوعـه 👥 ⏬
|---------------------------------------------------------|
$filter
|---------------------------------------------------------|
📡┊*Channel Bots* [اظطراب](t.me/Abohaedrk)",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,]);}}
if($text == "مسح قائمة المنع" and !file_exists("data/filter/s$chat_id.json")){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"لا يـوجـد ❌ قـائـمـة الـمـنـع 🚯 لـلـمـسـح 🗑".$title,]);}}
if($text == "مسح قائمة المنع" and file_exists("data/filter/s$chat_id.json")){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
unlink("data/filter/s$chat_id.json");
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تـم ✔️ مـسـح 🗑 قـائـمـة الـمـنـع 🚯".$title,]);}}
// قسم التنفيذ
if(preg_match("/^(.*)([Tt].[Mm][Ee])|(.*)([Tt].[Mm][Ee])(.*)|([Tt].[Mm][Ee])(.*)|(.*)([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])|(.*)([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])(.*)|([Tt][Ee][Ll][Ee][Gg][Rr][Aa][Mm].[Mm][Ee])(.*)|(.*)([Ww][Ww][Ww])|(.*)([Ww][Ww][Ww])(.*)|(.*)([Cc][Oo][Mm])|(.*)([Cc][Oo][Mm])(.*)|([Cc][Oo][Mm])(.*)/", $text) and in_array($chat_id, $link_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($message->text_entities->type == "text_link" and in_array($chat_id, $link_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if(preg_match('/^(.*)([Bb][Oo][Tt])/s',$newbots) and in_array($chat_id, $bots_)){
if($group == "member"){
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- لـقـد تـم ໑جـ໑د بـ໑ت تـفـلـيـش 🚨 •\n\n- وقـد تـم طـرده ໑طـرد םـن قـام بـ اضـافـتـه 👞 •", ]);
KasperTP('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$update->message->new_chat_member->id]);
KasperTP('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id]);}}
if(preg_match("/^(@)(.*)|(.*)(@)|(.*)(@)(.*)/s", $text) and in_array($chat_id, $username_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if(preg_match("/^(#)(.*)|(.*)(#)|(.*)(#)(.*)/s", $text) and in_array($chat_id, $hash_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($edited and in_array($chat_id, $edited_)){
if($group_ == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$edit_chat_id,
'message_id'=>$edit_id]);}}
if($inline and in_array($chat_id, $inline_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if(str_word_count($text) > 40 and in_array($chat_id, $spam_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($fwd and in_array($chat_id, $fwd_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($fwd0 and in_array($chat_id, $fwd_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($voice and in_array($chat_id, $voice_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($audio and in_array($chat_id, $audio_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($video and in_array($chat_id, $video_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($sticker and in_array($chat_id, $sticker_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($text == $en and in_array($chat_id, $en_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($text == $ar and in_array($chat_id, $ar_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($photo and in_array($chat_id, $photo_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($game and in_array($chat_id, $game_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($document and in_array($chat_id, $document_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($contact and in_array($chat_id, $contact_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($document and in_array($chat_id, $gif_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
if($text and in_array($from_id, explode("\n", file_get_contents("data/selict/s$chat_id.json")))){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,]);}}
if($text and in_array($text, explode("\n", file_get_contents("data/filter/s$chat_id.json")))){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,]);}}
if($message and in_array($chat_id, $mute_)){
if($group == "member"){
KasperTP('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id]);}}
//حضر مستخدم
if($text == "حظر" and $replay){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
KasperTP('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$reply_id,]);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'- ☑️ تـ۾ دفـر الـ؏ـضـ໑ 👞 •',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>$reply_name, 'url'=>"https://telegram.me/$reply_user"]],]])]);}}
if(preg_match('/^(حظر) (.*)/s', $text, $ban)){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$ban[2]"), true);
$_user = $info['result']['user']['username'];
$_name = $info['result']['user']['first_name'];
$_id = $info['result']['user']['id'];
KasperTP('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$_id,]);
KasperTP('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'- ☑️ تـ۾ دفـر الـ؏ـضـ໑ 👞 •',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>$_name, 'url'=>"https://telegram.me/$_user"]],]])]);}}
//مغادرة
if($text == "مغادرة البوت"){
if($from_id == $sudo or $group == $mudir or  $group == $admin){
$send = file_get_contents("data/add.json");
$send = str_replace($chat_id, " ", $send);
}
