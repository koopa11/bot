 <?php
ob_start();
$API_KEY = "5288207017:AAH86H3x9zsj6UPP5JdTR6WLZvPobxksANM";
define('API_KEY',$API_KEY);
function Mostafa($method,$datas=[]){$BOT_SYRIA = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$BOT_SYRIA";
$BOTS_SYR1A = file_get_contents($url); return json_decode($BOTS_SYR1A);}

/*===== - متغيرات المطور والقناة ومعرف البوت - =====*/
  $Dev = array("1255909521","",""); // ايديك علما ان اول ايدي رح يستلم الرسائل
@$usernamebot = "family_omer_bot"; // معرف بوتك بدون @
@$channel = "koopahack";
@$token = API_KEY;
$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$textmassage = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
/*===== dev ~ @OO1OOO =====*/
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$text = $update->inline_qurey->qurey;
/*===== dev ~ @OO1OOO =====*/
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
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
/*===== dev ~ @OO1OOO =====*/
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
/*===== dev ~ @OO1OOO =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];
$usercr = file_get_contents("usercr.txt");
$nbot = file_get_contents("namebot.txt");
$kdeveloper = file_get_contents("kdeveloper.txt");
$namebot = file_get_contents("namebot.txt");
$chatid3=$update->message->chat->id;
$fromid3=$update->message->from->id;
$text=$update->message->text;
$mid=$update->message->message_id;
/*===== dev ~ @OO1OOO =====*/
/*===== فاكشن =====*/
function SendMessage($chat_id, $text){
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
 function Forward($berekoja,$azchejaei,$kodompayam)
{
Mostafa('ForwardMessage',[
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
function check_filter($str){
	global $filterget;
	foreach($filterget as $d){
		if (mb_strpos($str, $d) !== false) {
			return true;
		}
	}
}
/*===== dev ~ @OO1OOO =====*/
// اختصار
@$inlinebutton = json_encode([
    'inline_keyboard'=>[
           [
        ['text'=>"",'url'=>"https://t.me/family_omer_bot"]
     ],
   ]
   ]);



if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
 // settings inline
 elseif($data=="media"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockdocument = $settings2["lock"]["document"];
$lockgif = $settings2["lock"]["gif"];
$lockvideo_note = $settings2["lock"]["video_msg"];
$locklocation = $settings2["lock"]["location"];
$lockphoto = $settings2["lock"]["photo"];
$lockcontact = $settings2["lock"]["contact"];
$lockaudio = $settings2["lock"]["audio"];
$lockvoice = $settings2["lock"]["voice"];
$locksticker = $settings2["lock"]["sticker"];
$lockgame = $settings2["lock"]["game"];
$lockvideo = $settings2["lock"]["video"];
$locktext = $settings2["lock"]["text"];
         Mostafa('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"
⛔️┊هذه اعدادات ميديا مجموعتك 🔧
📌┊مقفول ~ مفتوح 🔰
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
['text'=>"📂 الملفات 📂",'callback_data'=>'text'],['text'=>"$lockdocument",'callback_data'=>'lockdocument']
],
[
['text'=>"🏞 المتحركة 🏞",'callback_data'=>'text'],['text'=>"$lockgif",'callback_data'=>'lockgif']
],
[
['text'=>"🔊 البصمات 🔊",'callback_data'=>'text'],['text'=>"$lockvideo_note",'callback_data'=>'lockself']
],
  [
 ['text'=>"🚩 المواقع 🚩",'callback_data'=>'text'],['text'=>"$locklocation",'callback_data'=>'locklocation']
 ],
   [
 ['text'=>"🌄 الصور 🌄",'callback_data'=>'text'],['text'=>"$lockphoto",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"🔢 الارقام 🔢",'callback_data'=>'text'],['text'=>"$lockcontact",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎶 الموسيقى 🎶",'callback_data'=>'text'],['text'=>"$lockaudio",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🔊 البصمات 🔊",'callback_data'=>'text'],['text'=>"$lockvoice",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎭 الملصقات 🎭",'callback_data'=>'text'],['text'=>"$locksticker",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 الألعاب 🎮",'callback_data'=>'text'],['text'=>"$lockgame",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 الفيديو 🎥",'callback_data'=>'text'],['text'=>"$lockvideo",'callback_data'=>'lockvideo']
],
 [
['text'=>"👥 الدردشة 👥",'callback_data'=>'text'],['text'=>"$locktext",'callback_data'=>'locktext']
],
[
['text'=>"🔁 الأعدادات القفل الإضافية 🔁",'callback_data'=>'other']
],
[
['text'=>"🔙 رجوع",'callback_data'=>'settings'],['text'=>"",'url'=>"https://t.me/BOTS_Damascus"]
],
	]
	])
	]);
		 }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>" عذرا انت لست ادمن⚠️",
]);
	}
 }
	 elseif($data=="other" ){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$locklink = $settings2["lock"]["link"];
$lockusername = $settings2["lock"]["username"];
$locktag = $settings2["lock"]["tag"];
$lockedit = $settings2["lock"]["edit"];
$lockfosh = $settings2["lock"]["fosh"];
$lockbots = $settings2["lock"]["bot"];
$lockforward = $settings2["lock"]["forward"];
$locktg = $settings2["lock"]["tgservic"];
$lockreply = $settings2["lock"]["reply"];
$lockcmd = $settings2["lock"]["cmd"];
         Mostafa('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"
⛔️┊هذه اعدادات ميديا مجموعتك 🔧
📌┊مقفول ~ مفتوح 🔰
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"🔗 الروابط 🔗",'callback_data'=>'text'],['text'=>"$locklink",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"#⃣ التاك #⃣",'callback_data'=>'text'],['text'=>"$locktag",'callback_data'=>'locktag']
 ],
   [
 ['text'=>"🌀 المعرفات 🌀",'callback_data'=>'text'],['text'=>"$lockusername",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 التعديل 📝",'callback_data'=>'text'],['text'=>"$lockedit",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"⚠️ الكلمات السيئات ⚠️",'callback_data'=>'text'],['text'=>"$lockfosh",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 دخول البوتات 🤖",'callback_data'=>'text'],['text'=>"$lockbots",'callback_data'=>'lockbot']
],
  [
 ['text'=>"🔁 التوجيه 🔁",'callback_data'=>'text'],['text'=>"$lockforward",'callback_data'=>'lockforward']
 ],
[
['text'=>"🔰خدمات تيليجرام🔰",'callback_data'=>'text'],['text'=>"$locktg",'callback_data'=>'locktgservic']
],
[
['text'=>"↩️ رد الرسائل ↪️",'callback_data'=>'text'],['text'=>"$lockreply",'callback_data'=>'lockreply']
],
[
['text'=>"🔑 الأوامر العامة 🔑",'callback_data'=>'text'],['text'=>"$lockcmd",'callback_data'=>'lockcmd']
],
[
['text'=>"🔁 الأعدادات القفل الإضافية 🔁",'callback_data'=>'media']
],
[
['text'=>"🔙 رجوع",'callback_data'=>'settings'],['text'=>"",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"]
],
	]
	])
	]);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
	}
	 }
elseif($data=="settings" ){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$mute_all = $settings2["lock"]["mute_all"];
         Mostafa('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"
⛔️┊مرحبا بك في الاوامر الشفافة 🔧
📌┊تتيح لك الاوامر الشفافة سهولة في استخدام بعض الاوامر 💯

----------
BY~ @Alphp
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"- اوامر القفل والفتح ، 🔐 •",'callback_data'=>'media']
],
[
['text'=>"- اوامر الوضع ، 📩 •",'callback_data'=>'tbbots']
 ],
[
['text'=>"- اوامر الكتم والتقييد ، 🔇 •",'callback_data'=>'tbbots1']
 ],
[
['text'=>"- اوامر المطور ، 👮 •",'callback_data'=>'tbbots2']
 ],
[
['text'=>"- اوامر الاعضاء ، 👥 •",'callback_data'=>'tbbots3']
 ],
[
['text'=>"- اوامر عامة اضافية ، 🤖 •",'callback_data'=>'panel2']
 ],
[
['text'=>"- معلومات المجموعة ، 🔱 •",'callback_data'=>'tbbots5']
 ],
  [
 ['text'=>"🔐 قفل الكل (الحالة) 🔐",'callback_data'=>'text'],['text'=>"$mute_all",'callback_data'=>'lockall']
 ],
[
['text'=>"",'callback_data'=>'back'],['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"]
],
	]
	])
	]);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>" عذرا انت لست ادمن⚠️",
]);
	}
}
  elseif($data=="tbbots"){
			 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
'text'=>"🌿┇اهلا عزيزي ، 👨‍✈️ 
🌿┇رجاء قم باختيار ماتريد من الاوامر بالاسفل ، 👮 •
----------
BY~ @Alphp",
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
 [
 ['text'=>"- الترحيب ، 🚸 •",'callback_data'=>'welcome']
],
[
['text'=>"- القوانين ، 🔐 •",'callback_data'=>'rules']
 ],
[
['text'=>"- اسم الجروب ، 📌 •",'callback_data'=>'groupenam']
 ],
 [
 ['text'=>"- وصف الجروب ، 📦 •",'callback_data'=>'desgroupe']
 ],
[
['text'=>"العودة",'callback_data'=>'settings'],['text'=>"- تابعنا ، 📡 •",'url'=>"https://t.me/tbbots"]
],
	]
	])
	]);
	}
	}
	  elseif($data=="desgroupe"){
			 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
'text'=>"🌿┇اهلا عزيزي ، 👨‍✈️ 

- لتغيير وصف الجروب {ضع الوصف+ الوصف} ، ✅",
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
 [
 ['text'=>"",'callback_data'=>'welcome']
],
[
['text'=>"",'callback_data'=>'rules']
 ],
[
['text'=>"",'callback_data'=>'chaname']
 ],
 [
 ['text'=>"",'callback_data'=>'decgroupe']
 ],
[
['text'=>"العودة",'callback_data'=>'settings'],['text'=>"- تابعنا ، 📡 •",'url'=>"https://t.me/C3D3D"]
],
	]
	])
	]);
	}
	}
if (strpos($textmassage , "/bot") !== false or strpos($textmassage , "ضع اسم للبوت") !== false ) {
if(in_array($from_id,$Dev)) {
if ($tc == "private") {
$we = str_replace(['ضع اسم للبوت ','/bot '],'',$textmassage);
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
تم وضع اسم للبوت بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents("namebot.txt","$we");
	}
}
}
if (strpos($textmassage , "/adddd") !== false or strpos($textmassage , "ضع اسم للبوت") !== false ) {
if(in_array($from_id,$Dev)) {
if ($tc == "private") {
$we = str_replace(['ضع اسم للبوت ','/adddd '],'',$textmassage);
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
تم وضع مطور جديد بنجاح 1

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents("adddd.txt","$we");
	}
}
}
if (strpos($textmassage , "/addd") !== false or strpos($textmassage , "ضع اسم للبوت") !== false ) {
if(in_array($from_id,$Dev)) {
if ($tc == "private") {
$we = str_replace(['ضع اسم للبوت ','/addd '],'',$textmassage);
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
تم وضع مطور جديد بنجاح 2

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents("addd.txt","$we");
	}
}
}
if (strpos($textmassage , "/dev") !== false or strpos($textmassage , "ضع معرف لي") !== false ) {
if(in_array($from_id,$Dev)) {
if ($tc == "private") {
$we = str_replace(['ضع معرف لي ','/dev '],'',$textmassage);
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"🍃￤مرحبا عزيزي ، 
	تم وضع معرف المطور بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents("usercr.txt","$we");
	}
}
}
if (strpos($textmassage , "/msg") !== false or strpos($textmassage , "ضع معرف لي") !== false ) {
if(in_array($from_id,$Dev)) {
if ($tc == "private") {
$we = str_replace(['ضع معرف لي ','/msg '],'',$textmassage);
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"🍃￤مرحبا عزيزي ، 
	تم وضع كليشة المطور بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents("kdeveloper.txt","$we");
	}
}
}

	  elseif($data=="groupename"){
			 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
	'text'=>"🌿┇اهلا عزيزي ، 👨‍✈️ 
- اسم الجروب : $gpname

- لتغير الاسم ارسل {ضع الاسم + الاسم} ، ✅",
'reply_markup'=>json_encode([
	'inline_keyboard'=>[
 [
 ['text'=>"",'callback_data'=>'welcome']
],
[
['text'=>"",'callback_data'=>'rules']
 ],
[
['text'=>"",'callback_data'=>'chaname']
 ],
 [
 ['text'=>"",'callback_data'=>'decgroupe']
 ],
[
['text'=>"العودة",'callback_data'=>'settings'],['text'=>"- تابعنا ، 📡 •",'url'=>"https://t.me/C3D3D"]
],
	]
	])
	]);
	}
	}
if($textmassage=="الاوامر" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
📮¦ اهلآ بك، في اوامر الپوت
 ٴ━━━━━━━━━━
💥¦ مہ1 » لعَرض قائمهۃ الـحمـايهۃ 
💥¦ مہ2 » لعَرض اوامر الاعضاء
💥¦ مہ3 » لعَرض قائمهۃ الحظَر والخہ...
💥¦ مہ4 » لعَرض قائمهۃ الادمنيهۃ
 ٴ━━━━━━━━━━
💥¦ مہ5 » لعَرض اوامر المدراء
💥¦ مہ6 » لعَرض اوامر المنشئين
💥¦ مہ7 » لعَرض اوامر الاضافية
💥¦ مہ8 » لعرض حالة الحماية
 ٴ━━━━━━━━━━
📯¦ مطور البوت @Alphp
",
'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if( $textmassage =="/start" &&  $tc == "private" or $textmassage =="🔙  رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Dev)){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
📮¦ اهلا بك عزيزي المطور
⭐¦ اختر ماتريد عزيزي
🔖¦ اليك الخيارات اختر ماتريد
",
     'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"اسم للبوت"],['text'=>"وضع عدد التفعيل"]
],
[
['text'=>"اضف مطور 1"],['text'=>"اضف مطور 2"]
],
[
['text'=>"اضف رد عام"],['text'=>"حذف رد عام"]
],
[
['text'=>"الردود"]
],
[
['text'=>"كليشة مطور"],['text'=>"معرف مطور"]
],
[
['text'=>"مسح الردود"]
],
[
['text'=>"❗️حظر مجموعة❗️"],['text'=>"💥 الاحصائيات"]
],
[
['text'=>"🔅 نشر كروبات"],['text'=>"👤 نشر مستخدم"]
],
[
['text'=>"📌 توجية كروبات"],['text'=>"📍 توجية مستخدم"]                            
],
],
  'resize_keyboard'=>true
])
]);
}
}
$setstart = file_get_contents("setstart.txt");
$star = file_get_contents("star.txt");
if ($textmassage == "وضع عدد التفعيل" and in_array($from_id,$Dev)){
file_put_contents("setstart.txt","start");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"📭¦ ارسل عدد اعضاء المجموعات التي تريد ان يتفعل البوت فيها

كحد اقل { 10 }
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($textmassage && $setstart =="start" and in_array($from_id,$Dev)){
file_put_contents("star.txt",$textmassage); 
file_put_contents("setstart.txt","");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text" => "✓ تم اضافة عدد الاعضاء $textmassage
 -",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}

if ($textmassage == "معرف مطور" and in_array($from_id,$Dev)){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
ارسل الاتي
- /dev + معرف المطور
كمثال
- /dev @OO0SO
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
}
if ($textmassage == "اضف مطور 1" and in_array($from_id,$Dev)){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
ارسل الاتي
- /addd + ايدي المطور
كمثال
- /addd 799840104
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
}
if ($textmassage == "اضف مطور 2" and in_array($from_id,$Dev)){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
ارسل الاتي
- /adddd + ايدي المطور
كمثال
- /adddd 799840104
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
}

if ($textmassage == "اسم للبوت" and in_array($from_id,$Dev)){
file_put_contents("setname.txt","nam");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"
📭¦ حسننا عزيزي المطور،
ارسل الاتي
- /bot + اسم البوت 
كمثال
- /bot روكي
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($textmassage == "بوت" || $textmassage == "شسمك" || $text == "ايش اسمك" || $text == "اسمك" || $text == "اسمك؟"){
if ($tc == 'group' | $tc == 'supergroup'){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🌝 اسمي $nbot 💐"
,'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id,
]);}}

$message = $update->message;
$arr = array('اجيت اجيت كافي لتصيح 🌚👌','خليلي حالي 😕 ماتشتي"
');
$arr1 = array_rand($arr,true);
if($message){

$get = file_get_contents("msg.txt")+1; 
file_put_contents("msg.txt",$get); 
if ($settings["lock"]["rdodsg"] == "مقفول️"){
if($get == "5" or $text == $namebot ){
if ($tc == 'group' | $tc == 'supergroup'){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>$arr[$arr1],
 'reply_to_message_id'=>$message_id,
]);
} 
}
}
}
if ($textmassage == "كليشة مطور" and in_array($from_id,$Dev)){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
ارسل الاتي
- /msg + كليشة مطور 
كمثال
- /msg لمراسلتي @OO0SO
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($textmassage == "المطور" ){
if ($tc == 'group' | $tc == 'supergroup'){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"$kdeveloper",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}

if($textmassage=="حظر عام" && $tc == "private" ){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل حظر عام + الايدي
√
",
]);}
elseif( strpos($textmassage , "حظر عام") !== false) {
if (in_array($from_id,$Dev)) {
$textmassage = str_replace(['حظر عام'],'',$textmassage);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$textmassage);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ العضو @$username
📡¦ الايدي `$id`
💯¦ تم حظره عام
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
if($textmassage=="الغاء حظر عام" && $tc == "private" ){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل الغاء حظر عام + الايدي
√
",
]);}
elseif ( strpos($textmassage , "الغاء حظر عام") !== false) {
if (in_array($from_id,$Dev)) {
$textmassage = str_replace(['الغاء حظر عام'],'',$textmassage);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$textmassage);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
🙋🏼‍♂️¦ العضو @$username
📡¦ الايدي `$id`
💯¦ تم الغاء حظره عام
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif( $textmassage == "المحظورين عام" or $text == "🚫 المحظورين عام 🚫") {
if ( in_array($from_id,$Dev)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
☑┇قائمة المحظورين

$result
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif($textmassage=="❗️حظر مجموعة❗️" ){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل غادر + ايدي مجموعة
√
",
'reply_to_message_id'=>$message_id,
 ]);
}
}
}
elseif(strpos($textmassage , "غادر" ) !== false ) {
$textmassage = str_replace(['غادر'],'',$textmassage);
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ تم مغادرة المجموعة بنجاح
√
",
  ]);
Mostafa('LeaveChat',[
  'chat_id'=>$textmassage,
  ]);
unlink("data/$textmassage.json");
}
}
}
$message_id = $update->message->message_id;
$user          = $update->message->from->username;

/*
الاوامر كتٱلي : 
- اضف رد ، مسح رد ، الردود ، مسح الردود 
- اضف رد عام ، مسح رد عام ، الردود العامه ، مسح الردود العامه
*/

mkdir("data");
mkdir("data/addrd");

$opption = file_get_contents("data/addrd/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addrd/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addrd/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addrd/opption.txt");
$get_from_id1_ = file_get_contents("data/addrd/from_id.txt");
$I_get_rd = file_get_contents("data/addrd/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);


if($textmassage == "اضف رد"){
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");

 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","GG1ZZ");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($textmassage and in_array($from_id,$get_from_id_) and $opption == "GG1ZZ"){
  if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
 	file_put_contents("data/addrd/$chat_id/opption.txt","IBADLZ");
     file_put_contents("data/addrd/$chat_id/mod.txt",$textmassage);
     file_put_contents("data/addrd/$chat_id/media/media.txt",$textmassage);
     file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $textmassage . "\n" , FILE_APPEND);
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"
📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
- 
",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($message and in_array($from_id,$get_from_id_) and $opption == "IBADLZ"){
 	if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
  file_put_contents("data/addrd/$chat_id/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/$chat_id/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/$chat_id/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$chat_id/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/$chat_id/mod.txt","");
   file_put_contents("data/addrd/$chat_id/media/media.txt","");
   file_put_contents("data/addrd/$chat_id/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/$chat_id/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/$chat_id/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/$chat_id/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/$chat_id/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/$chat_id/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/$chat_id/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/$chat_id/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*مقفول️ تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($textmassage == "مسح رد"){
 	if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","delete");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الرد لمسحها من  للمجموعه 🍃*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if(file_exists("data/addrd/$chat_id/$textmassage.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
 	if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
 	$str = str_replace("- $textmassage","",$get_rd);
     file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
      file_put_contents("data/addrd/$chat_id/from_id.txt","");
      file_put_contents("data/addrd/$chat_id/opption.txt","");
 	unlink("data/addrd/$chat_id/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/sticker/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/video/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/videonote/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/document/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/photo/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/audio/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/contact/$text.txt");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*($textmassage)
  ✓ تم مسح الرد 🚀* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
elseif(!file_exists("data/addrd/$chat_id/$textmassage.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
	if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
	file_put_contents("data/addrd/$chat_id/from_id.txt","");
    file_put_contents("data/addrd/$chat_id/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*💬¦ هذا الرد ليس مضاف في قائمه الردود 📛*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
}
if($text == "مسح الردود"){
	if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
$links = __DIR__ . "/data/addrd/$chat_id";
$media = __DIR__ . "/data/addrd/$chat_id/media";
$media_contact = __DIR__ . "/data/addrd/$chat_id/media/contact";
$media_document = __DIR__ . "/data/addrd/$chat_id/media/document";
$media_video = __DIR__ . "/data/addrd/$chat_id/media/video";
$media_videonote = __DIR__ . "/data/addrd/$chat_id/media/videonote";
$media_photo = __DIR__ . "/data/addrd/$chat_id/media/photo";
$media_sticker = __DIR__ . "/data/addrd/$chat_id/media/sticker";
$media_audio = __DIR__ . "/data/addrd/$chat_id/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الردود 🚀*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/$chat_id/getrd.txt", "");
}
}
if($textmassage== "الردود" and $get_rd != NULL and $get_rd != "" and $get_rd != " " and $get_rd != "\n\n" and $get_rd != "\n" and $get_rd != "\n\n\n" and $get_rd != "\n\n\n\n" and $get_rd != "\n\n\n\n\n" and $get_rd != "\n\n\n\n\n\n"){
	if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ ردود البوت في المجموعه  :

$get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($textmassage == "الردود" and $get_rd == NULL || $get_rd == "" || $get_rd == " " || $get_rd == "\n\n" || $get_rd == "\n" || $get_rd == "\n\n\n" || $get_rd == "\n\n\n\n" || $get_rd == "\n\n\n\n\n" || $get_rd == "\n\n\n\n\n\n"){
	if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*🚸¦ لا يوجد ردود مضافه حاليا 
❕*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}

if($textmassage == "اضف رد عام" || $text == "🔊 اضف رد عام 🔊"){
if(in_array($from_id,$Dev)){
mkdir("data/addrd/media");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/media/sticker");
mkdir("data/addrd/media/video");
mkdir("data/addrd/media/videonote");
mkdir("data/addrd/media/document");
mkdir("data/addrd/media/photo");
mkdir("data/addrd/media/audio");
mkdir("data/addrd/media/contact");
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_GG1ZZ");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($textmassage and in_array($from_id,$get_from_id_1) and $opption_ == "I_GG1ZZ"){
 	if(in_array($from_id,$Dev)){
 	file_put_contents("data/addrd/opption.txt","I_BADLZ");
     file_put_contents("data/addrd/mod.txt",$text);
     file_put_contents("data/addrd/media/media.txt",$text);
     file_put_contents("data/addrd/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($message and in_array($from_id,$get_from_id_1) and $opption_ == "I_BADLZ"){
 	if(in_array($from_id,$Dev)){
  file_put_contents("data/addrd/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/mod.txt","");
   file_put_contents("data/addrd/media/media.txt","");
   file_put_contents("data/addrd/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*مقفول️ تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($textmassage == "مسح رد عام" ){
 	if(in_array($from_id,$Dev)){
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_delete");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الرد لمسحها من  للمجموعه 🍃*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if(file_exists("data/addrd/$textmassage.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
 	if(in_array($from_id,$Dev)){
 	$str = str_replace("- $text","",$I_get_rd);
     file_put_contents("data/addrd/getrd.txt",$str);
      file_put_contents("data/addrd/from_id.txt","");
      file_put_contents("data/addrd/opption.txt","");
 	unlink("data/addrd/$textmassage.txt");
     unlink("data/addrd/media/$textmassage.txt");
     unlink("data/addrd/media/sticker/$textmassage.txt");
     unlink("data/addrd/media/video/$textmassage.txt");
     unlink("data/addrd/media/videonote/$textmassage.txt");
     unlink("data/addrd/media/document/$textmassage.txt");
     unlink("data/addrd/media/photo/$textmassage.txt");
     unlink("data/addrd/media/audio/$textmassage.txt");
     unlink("data/addrd/media/contact/$text.txt");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*($textmassage)
  ✓ تم مسح الرد 🚀* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 elseif(!file_exists("data/addrd/$textmassage.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
 	if(in_array($from_id,$Dev)){
	file_put_contents("data/addrd/from_id.txt","");
    file_put_contents("data/addrd/opption.txt","");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*🚸¦ لا يوجد ردود مضافه حاليا *",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($textmassage == "مسح الردود العامه" ){
 	if(in_array($from_id,$Dev)){
$links = __DIR__ . "/data/addrd";
$media = __DIR__ . "/data/addrd/media";
$media_contact = __DIR__ . "/data/addrd/media/contact";
$media_document = __DIR__ . "/data/addrd/media/document";
$media_video = __DIR__ . "/data/addrd/media/video";
$media_videonote = __DIR__ . "/data/addrd/media/videonote";
$media_photo = __DIR__ . "/data/addrd/media/photo";
$media_sticker = __DIR__ . "/data/addrd/media/sticker";
$media_audio = __DIR__ . "/data/addrd/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الردود 🚀*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/getrd.txt", "");
}
}
if($textmassage == "الردود العامه" and $I_get_rd != NULL and $I_get_rd != "" and $I_get_rd != " " and $I_get_rd != "\n\n" and $I_get_rd != "\n" and $I_get_rd != "\n\n\n" and $I_get_rd != "\n\n\n\n" and $I_get_rd != "\n\n\n\n\n" and $I_get_rd != "\n\n\n\n\n\n"){
	if(in_array($from_id,$Dev)){
	Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ الردود العامه في البوت :

$I_get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($textmassage == "الردود العامه" and $I_get_rd == NULL || $I_get_rd == "" || $I_get_rd == " " || $I_get_rd == "\n\n" || $I_get_rd == "\n" || $I_get_rd == "\n\n\n" || $I_get_rd == "\n\n\n\n" || $I_get_rd == "\n\n\n\n\n" || $I_get_rd == "\n\n\n\n\n\n"){
if(in_array($from_id,$Dev)){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🚸¦ لا يوجد ردود مضافه حاليا ❕*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}


if($message->text and file_exists("data/addrd/$textmassage.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$textmassage.txt");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/$textmassage.txt");
   Mostafa('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/audio/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/audio/$textmassage.txt");
 Mostafa('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/sticker/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/sticker/$textmassage.txt");
 Mostafa('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/video/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/video/$textmassage.txt");
Mostafa('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/photo/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/photo/$textmassage.txt");
Mostafa('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/videonote/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/videonote/$textmassage.txt");
 Mostafa('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/document/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/document/$textmassage.txt");
 Mostafa('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/contact/$textmassage.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/media/contact/$textmassage.txt");
Mostafa('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/$textmassage.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$chat_id/$textmassage.txt");
   Mostafa('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/$textmassage.txt");
   Mostafa('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/audio/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/audio/$textmassage.txt");
 Mostafa('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/sticker/$textmassage.txt");
 Mostafa('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/video/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/video/$textmassage.txt");
Mostafa('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/photo/$textmassage.txt");
Mostafa('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/videonote/$textmassage.txt");
 Mostafa('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/document/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/document/$textmassage.txt");
 Mostafa('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$textmassage.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/contact/$textmassage.txt");
Mostafa('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
  elseif($data=="clcc"){
			 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"🙋🏻‍♂¦ اهلا بك عزيزي 🍃
📮¦ ڤي اوآمر المجموعهۃ..
 ٴ━━━━━━━━━━
💥¦ مہ1 » لعَرض اوامر المدراء
💥¦ مہ2 » لعَرض اوامر الاعضاء والادمن
 ٴ━━━━━━━━━━
📯¦ مطور البوت @Alphp",
'reply_markup'=>$inlinebutton,
]);
}
}
  elseif($data=="tbbots3"){
			 if ($statusq != 'creator' or $statusq != 'administrator' or !in_array($fromid,$Dev) ){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"  👮¦ اوامر الاعضاء هي كالاتي ، 👇
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
👤¦ ايدي ↫ لعرض ملفك الشخصي
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📯¦ مطور البوت @Alphp",
'reply_markup'=>$inlinebutton,
]);
}
}
  elseif($data=="tbbots4"){
			 if ($statusq == 'creator' or $statusq == 'administrator' ){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"- للمطور فقط ، 🚸",
   'reply_markup'=>$inlinebutton,
   ]);
   }
   }
   elseif($data=="tbbots1"){
			 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
'text'=>"🌿┇اهلا عزيزي ، 👨‍✈️ 

  👮¦ اوامر الكتم والتقييد هي كالاتي ، 👇
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
🔕¦ تقييد {بالرد | بالايدي}
??¦ كتم {بالرد | بالايدي}
🔕¦ الغاء تقييد {بالرد | بالايدي}
🔕¦ الغاء كتم {بالرد | بالايدي}
🔕¦ طرد {بالرد | بالايدي}
🔕¦ حظر {بالرد | بالايدي}

- لتقييد او لكتم العضو لفترة من الوقت ارسل { تقييد | كتم + عدد الدقائق } بالرد او بالايدي مثل :
تقييد 3 ↫ سيتم تقييد العضو لمدة 3 دقائق ، ✅
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📯¦ مطور البوت @Alphp",
'reply_markup'=>$inlinebutton,
]);
}
}
	elseif($data=="exit" ){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('deletemessage',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>" عذرا انت لست ادمن⚠️",
]);
}}
elseif($data=="groupe"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$url = file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chatid");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
مرحبا في معلومات المجموعة 👤
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
🌿¦ المجموعة : `$gpname`

🌿¦ المجموعة : `$chatid`

🌿¦عداد الرسائل : `$messageid`

🌿¦العدد الكلي لاعضاء المجموعة  : `$howmember`
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
      ]);
$settings2["information"]["step"]="none";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>" عذرا انت لست ادمن⚠️",
]);
    }
}
	elseif($data=="adminlist"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chatid),true);
  $result = $up['result'];
$msg = "";
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg."\n"."📍"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>" 📍 المدير : $owner | @$owner2
➖➖➖
👮🏻 قائمة المسؤولين  :
$msg",
'parse_mode'=>"MarkDown",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'lists']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
	}
	elseif($data=="support"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"تذكر الملاحظات التالية قبل إرسال طلب الدعم إلى المجموعة
➖➖➖➖➖
قبل إرسال الطلب 1 ، تأكد من تجميع البوت كمسؤول { مشرف } قبل إرسال طلبك 

تجنب إرسال الطلبات غير الضرورية ثم ارسل طلبك

اقرا دليل البوت بدقة اولا 

ارسل طلب للحصول على دعم لإعادة ارسال الطلب وانتظر دعم مجموعتك ليتم معالجتها ومعالجة

لارسال نسخة احتياطية اذا كان هناك مشكلة في البوت او خطا بمجموعتك انقر ارسال طلب 


",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"👥 طلب الدعم 👥",'callback_data'=>'yessup']
				   ],
					 [
					 ['text'=>"📢 تابع جديدنا 📢",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'groupe']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
	}
	elseif($data=="requstcharge"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"البوت مجاني 
➖➖➖
قناتنا
🆔 : @$channel
",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"🎯 ارسال طلب",'callback_data'=>'requstcheck']
	],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 العودة",'callback_data'=>'groupe']
					 ],
              ]
        ])
            ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
	}	
	elseif($data=="yessup"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chatid");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
            Mostafa('sendmessage', [
                'chat_id' =>$Dev[0],
                'text' => "🔖المجموعة  : [$gpname]
تم طلب الدعم تحتاج مساعدة ✅
➖➖➖➖➖➖➖
💥معلومات الشخص الذي قام بطلبك :

📍 الايدي : [ $fromid ]
📍 الاسم : [ $firstname ]
📍 المعرف : [ @$usernames ]
➖➖➖➖➖
🎉معلومات المجموعة  :

📍ايدي المجموعة  : [ $chatid ]
📍 رابط المجموعة : [ $getlinkde ]",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
            ]);
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"تم ارسال طلبك الى المطور للحصول على الدعم ✅
➖➖➖➖
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"📢 تابع جديدنا 📢",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'groupe']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
	}
		elseif($data=="requstcheck"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chatid");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$ndate = $settings2["information"]["expire"];
$charge = $settings2["information"]["charge"];
$rdate = $settings2["information"]["dataadded"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"تم ارسال طلبك الى المطور للحصول على الدعم ✅
➖➖➖➖
 ",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'back']
					 ],
                     ]
               ])
           ]);
 Mostafa('sendmessage',[
  'chat_id'=>$Dev[0],
        'text'=>"المجموعة 🔻 $gpname 🔻تقاظایی شارژ 🔝گروه کرده اند😃✔️
➖➖➖
📍 تسجيل البوت بتاريخ : [$rdate]
📍 تاريخ اخر دفع المجموعة  : [$charge]
📍 المبلغ الحالي : [$ndate]
➖➖➖➖➖➖➖
💥معلومات الشخص :
📍 الايدي : [ $fromid ]
📍 الاسم  : [ $firstname ]
📍 المعرف : [ @$usernames ]
➖➖➖➖➖
🎉معلومات الكروب :

📍 ايدي الكروب : [ $chatid ]
📍 رابط الكروب : [ $getlinkde  ]",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        ]);		   
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
	}
	elseif($data=="filterword"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$filter = $settings2["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🌿┇اهلا عزيزي  👮‍♀
🌿┇- قائمة الكلمات الممنوعة ، 💢 •

- $result",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"- مسح القائمة ، 🗑 •",'callback_data'=>'cleanfilterlist']
				   ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'lists']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
	}
		elseif($data=="cleanfilterlist"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم حذف قائمة الممنوعات

✓",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'lists']
					 ],
                     ]
               ])
           ]);
unset($settings2["filterlist"]);
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
	}
	elseif($data=="link"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
		$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chatid");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
              'text'=>"🌿┇رابط المجموعة 👮‍♀
   
🌿┇`$gpname`
🌿┇$getlinkde",
'parse_mode'=>"markdown",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
	}
		elseif($data=="rules"){
$text = $settings2["information"]["rules"];
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤قوانين المجموعة

$text

✓
               ",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   		   				   [
				   ['text'=>"- وضع قوانين ، 📜 •",'callback_data'=>'setrules']
				   ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'tbbots']
					 ],
                     ]
               ])
           ]);

		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
		}
				elseif($data=="setrules"){
$text = $settings2["information"]["rules"];
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📌￤ارسل قوانين مجموعتك الان :",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'tbbots']
					 ],
                     ]
               ])
           ]);
$settings2["information"]["step"]="setrules";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
		}
		elseif($data=="silentlist" ){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$silent = $settings2["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
'text'=>"📌￤قائمة الاعضاء المكتومين في الجروب ، 👇 •

- $result" ,
'parse_mode'=>"MarkDown",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   				   [
				   ['text'=>"- مسح القائمة ، 🗑 •",'callback_data'=>'cleansilentlist']
				   ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'lists']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
		}
				elseif($data=="cleansilentlist"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$silent = $settings2["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 Mostafa('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chatid,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
}
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🌿┇اهلا عزيزي  👮‍♀
🌿┇تم مسح قائمة المكتومين 

✓",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'lists']
					 ],
                     ]
               ])
           ]);
unset($settings2["silentlist"]);
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
	}




if($textmassage == "تفعيل الاعضاء" or $textmassage == "تفعيل الاضافة" or $textmassage == "/add2yes"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📌￤تم تفعيل الاضافة الاجبارية ، ✅ •

- سيتم الان حذف كل من لم يضف العدد $code من الاعضاء ، ✅ •

- تستطيع تغيير عدد الاعضاء من خلال ارسال { /setadd + العدد المطلوب } مثل :-
- /setadd 11

#ملاحظة :- تستطيع فرض الاضافة من 1 الى 20 عضو فقط ❌",
'parse_mode'=>"markdown"
	,	 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["add"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}   
}
	}
}
elseif($textmassage == "تعطيل الاعضاء" or $textmassage == "تعطيل الاضافة" or $textmassage == "/add2no"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"☑️┇تم تعطيل الاضافة الاجبارية ، 📌 •

- يستطيع اي عضو الدردشة بدون اضافة اعضاء ، 📌 •
",
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["add"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);   
}	   
}
	}
}
elseif (strpos($textmassage , '/setadd ') !== false or strpos($textmassage , 'الاضافة الاجبارية') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setadd ','الاضافة الاجبارية'],'',$textmassage);
if($code <= 20 && $code >= 1){
 Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم وضع العدد {$code} من الاعضاء ، 👏 •

- لن يستطيع احد الدردشة بدون اضافة $code من الاعضاء ، 👥 •

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setadd"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇يجب ان يكون العدد بين 1 إلى 20",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);  
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);   
}	   
}
}
// delall
elseif($textmassage == "مسح الرسائل" or $textmassage == "حذف الرسائل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
$time = $settings["information"]["timermsg"];
date_default_timezone_set('Asia/Damascus');
$date1 = date("H:i:s");
if($date1 > $time){
$msg_id = $settings["information"]["msg_id"];	
$manha = $message_id - $msg_id ;
if($manha < 1000){
for($i=$update->message->message_id; $i>= $msg_id; $i--){
Mostafa('deletemessage',[
 'chat_id' =>$update->message->chat->id,
 'message_id' =>$i,
              ]);
}
Mostafa('sendmessage',[
 'chat_id' =>$update->message->chat->id,
 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم مسح جميع الرسائل بنجاح ، ✅

- عدد الرسائل المحذوفة $manha ، 🗑 •

✓",
]);
date_default_timezone_set('Asia/Damascus');
$date1 = date("H:i:s");
$date2 = isset($_GET['date']) ? $_GET['date'] : date("H:i:s");;
$next_date = date('H:i:s', strtotime($date2 ."+120 Minutes"));
$settings["information"]["timermsg"]="$next_date";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
$plus = $message_id - 500 ;
for($i=$update->message->message_id; $i>= $plus; $i--){
Mostafa('deletemessage',[
 'chat_id' =>$update->message->chat->id,
 'message_id' =>$i,
              ]);
}
date_default_timezone_set('Asia/Damascus');
$date1 = date("H:i:s");
$date2 = isset($_GET['date']) ? $_GET['date'] : date("H:i:s");;
$next_date = date('H:i:s', strtotime($date2 ."+60 Minutes"));
$settings["information"]["timermsg"]="$next_date";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
Mostafa('sendmessage',[
 'chat_id' =>$update->message->chat->id,
 'text' =>"☑️┇تم حذف جميع الرسائل بالفعل 

⏰┇اخر عملية حذف $time ",
   ]);
}
}	
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
					elseif($data=="addbzn"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$add = $settings2["information"]["add"];
$setadd = $settings2["information"]["setadd"];
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🌺┇اهلا بك في قسم اعدادات الدعم

🌿┇فـي هـذا القسم يتيح لـك تفعيل

👤┇دعم مجموعة بإلزام الاعضاء من

💢┇اضافة جهات الاتصال ليستطيعو

🔰┇التكلم هنا يمكنك تفعيلها بالضغط

⚙┇وضبط اعداداتك بالازرار الشفافة",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"👥 اضافة مستخدمين",'callback_data'=>'text'],['text'=>"$add",'callback_data'=>'lockadd']
					 ],
					 [
					 ['text'=>"عدد المطلوب 🚸",'callback_data'=>'text'],['text'=>"🔸 $setadd 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ زيادة",'callback_data'=>'add+'],['text'=>"➖ تنقيص",'callback_data'=>'add-']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 العودة",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذا انت لست ادمن ⚠️",
]);
	}
		  }
		elseif($data=="lockadd" && $settings2["information"]["add"] == "✅ مقفول ✅"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setadd"];
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🌺┇اهلا بك في قسم اعدادات الدعم

🌿┇فـي هـذا القسم يتيح لـك تفعيل

👤┇دعم مجموعة بإلزام الاعضاء من

💢┇اضافة جهات الاتصال ليستطيعو

🔰┇التكلم هنا يمكنك تفعيلها بالضغط

⚙┇وضبط اعداداتك بالازرار الشفافة",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"👥 اضافة مستخدمين",'callback_data'=>'text'],['text'=>"☑️ معطل ☑️",'callback_data'=>'lockadd']
					 ],
					 [
					 ['text'=>"عدد المطلوب 🚸",'callback_data'=>'text'],['text'=>"🔸 $setadd 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ زيادة",'callback_data'=>'add+'],['text'=>"➖ تنقيص",'callback_data'=>'add-']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 العودة",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
$settings2["information"]["add"]="☑️ معطل ☑️";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذا انت لست ادمن ⚠️",
]);
	}
		  }
		  		elseif($data=="lockadd" && $settings2["information"]["add"] == "☑️ معطل ☑️"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setadd"];
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🌺┇اهلا بك في قسم اعدادات الدعم

🌿┇فـي هـذا القسم يتيح لـك تفعيل

👤┇دعم مجموعة بإلزام الاعضاء من

💢┇اضافة جهات الاتصال ليستطيعو

🔰┇التكلم هنا يمكنك تفعيلها بالضغط

⚙┇وضبط اعداداتك بالازرار الشفافةد",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"👥 اضافة مستخدمين",'callback_data'=>'text'],['text'=>"✅ مقفول ✅",'callback_data'=>'lockadd']
					 ],
					 [
					 ['text'=>"عدد المطلوب 🚸",'callback_data'=>'text'],['text'=>"🔸 $setadd 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ زيادة",'callback_data'=>'add+'],['text'=>"➖ تنقيص",'callback_data'=>'add-']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 العودة",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
$settings2["information"]["add"]="✅ مقفول ✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذا انت لست ادمن ⚠️",
]);
	}
		  }
		  		  		elseif($data=="add+"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setadd"];
$add = $settings2["information"]["add"];
$manfi = $setadd + 1;
if($manfi <= 20 && $manfi >= 1){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🌺┇اهلا بك في قسم اعدادات الدعم

🌿┇فـي هـذا القسم يتيح لـك تفعيل

👤┇دعم مجموعة بإلزام الاعضاء من

💢┇اضافة جهات الاتصال ليستطيعو

🔰┇التكلم هنا يمكنك تفعيلها بالضغط

⚙┇وضبط اعداداتك بالازرار الشفافة",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"👥 اضافة مستخدمين",'callback_data'=>'text'],['text'=>"$add",'callback_data'=>'lockadd']
					 ],
					 [
					 ['text'=>"عدد المطلوب 🚸",'callback_data'=>'text'],['text'=>"🔸 $manfi 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ زيادة",'callback_data'=>'add+'],['text'=>"➖ تنقيص",'callback_data'=>'add-']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 العودة",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
$settings2["information"]["setadd"]="$manfi";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
}
else
{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"لا يمكن التغير هذا الامر ⚠",
]);
	}
		 }
	else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذا انت لست ادمن ⚠️",
]);
	}
		  }
								  		  		elseif($data=="add-"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setadd"];
$add = $settings2["information"]["add"];
$manfi = $setadd - 1;
    if ($manfi <= 20 && $manfi >= 1){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🌺┇اهلا بك في قسم اعدادات الدعم

🌿┇فـي هـذا القسم يتيح لـك تفعيل

👤┇دعم مجموعة بإلزام الاعضاء من

💢┇اضافة جهات الاتصال ليستطيعو

🔰┇التكلم هنا يمكنك تفعيلها بالضغط

⚙┇وضبط اعداداتك بالازرار الشفافة",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"👥 اضافة مستخدمين",'callback_data'=>'text'],['text'=>"$add",'callback_data'=>'lockadd']
					 ],
					 [
					 ['text'=>"عدد المطلوب 🚸",'callback_data'=>'text'],['text'=>"🔸 $manfi 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ زيادة",'callback_data'=>'add+'],['text'=>"➖ تنقيص",'callback_data'=>'add-']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 العودة",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
$settings2["information"]["setadd"]="$manfi";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
}
else
{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"لا يمكن التغير هذا الامر ⚠",
]);
	}
		 }
	else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذا انت لست ادمن ⚠️",
]);
	}
		  }

if($textmassage=="قائمة المنع" or $textmassage=="الممنوعات" or $textmassage=="قائمة الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" - هذه قائمة الكلمات التي تم منعها من الارسال في المجموعة ، 📌 •

- $result",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif (strpos($textmassage , "/filter ") !== false or strpos($textmassage , "منع") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$text = str_replace(['/filter ','منع'],'',$textmassage);
Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"- تم اضافة {$text} الى قائمة المنع ، ✅ •",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings["filterlist"][]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔘┋لم يتم تفعيل البوت في مجموعتك⁉️┋ يرجى تفعيل البوت في المجموعة
☑️┋يمكنك تفعيل البوت مجانا م̷ـــِْن خلال ارسال كلمة { • تفعيل • }",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($textmassage , "/unfilter " ) !== false or strpos($textmassage , "الغاء منع") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$text = str_replace(['/unfilter ','الغاء منع'],'',$textmassage);
Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"- تم ازالة {$text} من قائمة المنع ، ✅ •",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$key = array_search($text,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($textmassage=="/clean filterlist" or $textmassage=="مسح الممنوعات" or $textmassage=="مسح قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⚠️ • تم مسح قائمة المنع • ✅
",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($settings["filterlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// lock auto 
	    elseif($data=="lockauto"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
🌿┇مرحبًا بك في لوحة القفل الألي 
🌿┇هنا يمكنك ضبط تصميت وكتم المجموعة تلقائيًا لإسكات المجموعة أو إسكاتها في وقت محدد
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🔰┇مثال وشرح عن امر القفل
⏰┇الساعة ~ 12:00 يعني 12:00
⏰┇الساعة ~ 13:00 يعني 1:00 م
⏰┇الساعة ~ 14:00 يعني 2:00 م
⏰┇الساعة ~ 15:00 يعني 3:00 م
⏰┇الساعة ~ 16:00 يعني 4:00 م
⏰┇الساعة ~ 17:00 يعني 5:00 م
⏰┇الساعة ~ 18:00 يعني 6:00 م
⏰┇الساعة ~ 19:00 يعني 7:00 م
⏰┇الساعة ~ 20:00 يعني 8:00 م
⏰┇الساعة ~ 21:00 يعني 9:00 م
⏰┇الساعة ~ 22:00 يعني 10:00 م
⏰┇الساعة ~ 23:00 يعني 11:00 م
⏰┇الساعة ~ 00:00 يعني 12:00ص
⏰┇الساعة ~ 1:00 يعني   1:00  ص
⏰┇الساعة ~ 2:00 يعني   2:00  ص
⏰┇الساعة ~ 3:00 يعني   3:00  ص
⏰┇الساعة ~ 4:00 يعني   3:00  ص
⏰┇الساعة ~ 5:00 يعني   4:00  ص
⏰┇الساعة ~ 6:00 يعني   5:00  ص
⏰┇الساعة ~ 7:00 يعني   6:00  ص
⏰┇الساعة ~ 8:00 يعني   7:00  ص
⏰┇الساعة ~ 9:00 يعني   8:00  ص
⏰┇الساعة ~ 10:00 يعني 10:00 ص
⏰┇الساعة ~ 11:00 يعني 11:00 ص

🚩 استخدم الأزرار التالية ↙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 قفل مؤقت",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ وضع الساعة الحالية ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourlockautoplus'],['text'=>"➕ خمس دقائق",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة ",'callback_data'=>'hourlockautodown'],['text'=>"➖ خمس دقائق",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ فتح الدردشة في وقت ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ ساعة ",'callback_data'=>'hourunlockautoplus'],['text'=>"➕خمس دقائق",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة ",'callback_data'=>'hourunlockautodown'],['text'=>"➖ خمس دقائق",'callback_data'=>'minunlockautodown']
					 ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
				}
											    elseif($data=="lockautostats" &&  $settings2["lock"]["lockauto"] == "| غیر مفتوح | ❌"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
🌿┇مرحبًا بك في لوحة القفل الألي 
🌿┇هنا يمكنك ضبط تصميت وكتم المجموعة تلقائيًا لإسكات المجموعة أو إسكاتها في وقت محدد
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🔰┇مثال وشرح عن امر القفل
⏰┇الساعة ~ 12:00 يعني 12:00
⏰┇الساعة ~ 13:00 يعني 1:00 م
⏰┇الساعة ~ 14:00 يعني 2:00 م
⏰┇الساعة ~ 15:00 يعني 3:00 م
⏰┇الساعة ~ 16:00 يعني 4:00 م
⏰┇الساعة ~ 17:00 يعني 5:00 م
⏰┇الساعة ~ 18:00 يعني 6:00 م
⏰┇الساعة ~ 19:00 يعني 7:00 م
⏰┇الساعة ~ 20:00 يعني 8:00 م
⏰┇الساعة ~ 21:00 يعني 9:00 م
⏰┇الساعة ~ 22:00 يعني 10:00 م
⏰┇الساعة ~ 23:00 يعني 11:00 م
⏰┇الساعة ~ 00:00 يعني 12:00ص
⏰┇الساعة ~ 1:00 يعني   1:00  ص
⏰┇الساعة ~ 2:00 يعني   2:00  ص
⏰┇الساعة ~ 3:00 يعني   3:00  ص
⏰┇الساعة ~ 4:00 يعني   3:00  ص
⏰┇الساعة ~ 5:00 يعني   4:00  ص
⏰┇الساعة ~ 6:00 يعني   5:00  ص
⏰┇الساعة ~ 7:00 يعني   6:00  ص
⏰┇الساعة ~ 8:00 يعني   7:00  ص
⏰┇الساعة ~ 9:00 يعني   8:00  ص
⏰┇الساعة ~ 10:00 يعني 10:00 ص
⏰┇الساعة ~ 11:00 يعني 11:00 ص

🚩 استخدم الأزرار التالية ↙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 قفل مؤقت",'callback_data'=>'text'],['text'=>"| مقفول | ✅",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ وضع الساعة الحالية ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourlockautoplus'],['text'=>"➕  دقيقة واحدة",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ساعة",'callback_data'=>'hourlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ فتح الدردشة في وقت ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ساعة ",'callback_data'=>'hourunlockautodown'],['text'=>"➖دقيقة واحدة",'callback_data'=>'minunlockautodown']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["lock"]["lockauto"]="| مقفول | ✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
				}
															    elseif($data=="lockautostats" &&  $settings2["lock"]["lockauto"] == "| مقفول | ✅"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
🌿┇مرحبًا بك في لوحة القفل الألي 
🌿┇هنا يمكنك ضبط تصميت وكتم المجموعة تلقائيًا لإسكات المجموعة أو إسكاتها في وقت محدد
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🔰┇مثال وشرح عن امر القفل
⏰┇الساعة ~ 12:00 يعني 12:00
⏰┇الساعة ~ 13:00 يعني 1:00 م
⏰┇الساعة ~ 14:00 يعني 2:00 م
⏰┇الساعة ~ 15:00 يعني 3:00 م
⏰┇الساعة ~ 16:00 يعني 4:00 م
⏰┇الساعة ~ 17:00 يعني 5:00 م
⏰┇الساعة ~ 18:00 يعني 6:00 م
⏰┇الساعة ~ 19:00 يعني 7:00 م
⏰┇الساعة ~ 20:00 يعني 8:00 م
⏰┇الساعة ~ 21:00 يعني 9:00 م
⏰┇الساعة ~ 22:00 يعني 10:00 م
⏰┇الساعة ~ 23:00 يعني 11:00 م
⏰┇الساعة ~ 00:00 يعني 12:00ص
⏰┇الساعة ~ 1:00 يعني   1:00  ص
⏰┇الساعة ~ 2:00 يعني   2:00  ص
⏰┇الساعة ~ 3:00 يعني   3:00  ص
⏰┇الساعة ~ 4:00 يعني   3:00  ص
⏰┇الساعة ~ 5:00 يعني   4:00  ص
⏰┇الساعة ~ 6:00 يعني   5:00  ص
⏰┇الساعة ~ 7:00 يعني   6:00  ص
⏰┇الساعة ~ 8:00 يعني   7:00  ص
⏰┇الساعة ~ 9:00 يعني   8:00  ص
⏰┇الساعة ~ 10:00 يعني 10:00 ص
⏰┇الساعة ~ 11:00 يعني 11:00 ص

🚩 استخدم الأزرار التالية ↙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 قفل مؤقت",'callback_data'=>'text'],['text'=>"| | مفتوح | ❌",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ وضع الساعة الحالية ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourlockautoplus'],['text'=>"➕دقيقة واحدة",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖دقيقة واحدة",'callback_data'=>'hourlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ فتح الدردشة في وقت ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourunlockautoplus'],['text'=>"➕دقيقة واحدة",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة",'callback_data'=>'hourunlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minunlockautodown']
					 ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["lock"]["lockauto"]="| | مفتوح | ❌";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
				}
											    elseif($data=="hourlockautoplus"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timelockauto ."+60 Minutes"));
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
🌿┇مرحبًا بك في لوحة القفل الألي 
🌿┇هنا يمكنك ضبط تصميت وكتم المجموعة تلقائيًا لإسكات المجموعة أو إسكاتها في وقت محدد
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🔰┇مثال وشرح عن امر القفل
⏰┇الساعة ~ 12:00 يعني 12:00
⏰┇الساعة ~ 13:00 يعني 1:00 م
⏰┇الساعة ~ 14:00 يعني 2:00 م
⏰┇الساعة ~ 15:00 يعني 3:00 م
⏰┇الساعة ~ 16:00 يعني 4:00 م
⏰┇الساعة ~ 17:00 يعني 5:00 م
⏰┇الساعة ~ 18:00 يعني 6:00 م
⏰┇الساعة ~ 19:00 يعني 7:00 م
⏰┇الساعة ~ 20:00 يعني 8:00 م
⏰┇الساعة ~ 21:00 يعني 9:00 م
⏰┇الساعة ~ 22:00 يعني 10:00 م
⏰┇الساعة ~ 23:00 يعني 11:00 م
⏰┇الساعة ~ 00:00 يعني 12:00ص
⏰┇الساعة ~ 1:00 يعني   1:00  ص
⏰┇الساعة ~ 2:00 يعني   2:00  ص
⏰┇الساعة ~ 3:00 يعني   3:00  ص
⏰┇الساعة ~ 4:00 يعني   3:00  ص
⏰┇الساعة ~ 5:00 يعني   4:00  ص
⏰┇الساعة ~ 6:00 يعني   5:00  ص
⏰┇الساعة ~ 7:00 يعني   6:00  ص
⏰┇الساعة ~ 8:00 يعني   7:00  ص
⏰┇الساعة ~ 9:00 يعني   8:00  ص
⏰┇الساعة ~ 10:00 يعني 10:00 ص
⏰┇الساعة ~ 11:00 يعني 11:00 ص

🚩 استخدم الأزرار التالية ↙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 قفل مؤقت",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ وضع الساعة الحالية ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ فتح الدردشة في وقت ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourunlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minunlockautodown']
					 ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["timelock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
				}
															    elseif($data=="hourlockautodown"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timelockauto ."-60 Minutes"));
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
🌿┇مرحبًا بك في لوحة القفل الألي 
🌿┇هنا يمكنك ضبط تصميت وكتم المجموعة تلقائيًا لإسكات المجموعة أو إسكاتها في وقت محدد
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🔰┇مثال وشرح عن امر القفل
⏰┇الساعة ~ 12:00 يعني 12:00
⏰┇الساعة ~ 13:00 يعني 1:00 م
⏰┇الساعة ~ 14:00 يعني 2:00 م
⏰┇الساعة ~ 15:00 يعني 3:00 م
⏰┇الساعة ~ 16:00 يعني 4:00 م
⏰┇الساعة ~ 17:00 يعني 5:00 م
⏰┇الساعة ~ 18:00 يعني 6:00 م
⏰┇الساعة ~ 19:00 يعني 7:00 م
⏰┇الساعة ~ 20:00 يعني 8:00 م
⏰┇الساعة ~ 21:00 يعني 9:00 م
⏰┇الساعة ~ 22:00 يعني 10:00 م
⏰┇الساعة ~ 23:00 يعني 11:00 م
⏰┇الساعة ~ 00:00 يعني 12:00ص
⏰┇الساعة ~ 1:00 يعني   1:00  ص
⏰┇الساعة ~ 2:00 يعني   2:00  ص
⏰┇الساعة ~ 3:00 يعني   3:00  ص
⏰┇الساعة ~ 4:00 يعني   3:00  ص
⏰┇الساعة ~ 5:00 يعني   4:00  ص
⏰┇الساعة ~ 6:00 يعني   5:00  ص
⏰┇الساعة ~ 7:00 يعني   6:00  ص
⏰┇الساعة ~ 8:00 يعني   7:00  ص
⏰┇الساعة ~ 9:00 يعني   8:00  ص
⏰┇الساعة ~ 10:00 يعني 10:00 ص
⏰┇الساعة ~ 11:00 يعني 11:00 ص

🚩 استخدم الأزرار التالية ↙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 قفل مؤقت",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ وضع الساعة الحالية ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ فتح الدردشة في وقت ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourunlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minunlockautodown']
					 ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["timelock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
				}
											    elseif($data=="minlockautoplus"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timelockauto ."+5 Minutes"));
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
🌿┇مرحبًا بك في لوحة القفل الألي 
🌿┇هنا يمكنك ضبط تصميت وكتم المجموعة تلقائيًا لإسكات المجموعة أو إسكاتها في وقت محدد
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🔰┇مثال وشرح عن امر القفل
⏰┇الساعة ~ 12:00 يعني 12:00
⏰┇الساعة ~ 13:00 يعني 1:00 م
⏰┇الساعة ~ 14:00 يعني 2:00 م
⏰┇الساعة ~ 15:00 يعني 3:00 م
⏰┇الساعة ~ 16:00 يعني 4:00 م
⏰┇الساعة ~ 17:00 يعني 5:00 م
⏰┇الساعة ~ 18:00 يعني 6:00 م
⏰┇الساعة ~ 19:00 يعني 7:00 م
⏰┇الساعة ~ 20:00 يعني 8:00 م
⏰┇الساعة ~ 21:00 يعني 9:00 م
⏰┇الساعة ~ 22:00 يعني 10:00 م
⏰┇الساعة ~ 23:00 يعني 11:00 م
⏰┇الساعة ~ 00:00 يعني 12:00ص
⏰┇الساعة ~ 1:00 يعني   1:00  ص
⏰┇الساعة ~ 2:00 يعني   2:00  ص
⏰┇الساعة ~ 3:00 يعني   3:00  ص
⏰┇الساعة ~ 4:00 يعني   3:00  ص
⏰┇الساعة ~ 5:00 يعني   4:00  ص
⏰┇الساعة ~ 6:00 يعني   5:00  ص
⏰┇الساعة ~ 7:00 يعني   6:00  ص
⏰┇الساعة ~ 8:00 يعني   7:00  ص
⏰┇الساعة ~ 9:00 يعني   8:00  ص
⏰┇الساعة ~ 10:00 يعني 10:00 ص
⏰┇الساعة ~ 11:00 يعني 11:00 ص

🚩 استخدم الأزرار التالية ↙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 قفل مؤقت",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ وضع الساعة الحالية ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ فتح الدردشة في وقت ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourunlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minunlockautodown']
					 ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["timelock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
				}
															    elseif($data=="minlockautodown"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timelockauto ."-5 Minutes"));
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
🌿┇مرحبًا بك في لوحة القفل الألي 
🌿┇هنا يمكنك ضبط تصميت وكتم المجموعة تلقائيًا لإسكات المجموعة أو إسكاتها في وقت محدد
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🔰┇مثال وشرح عن امر القفل
⏰┇الساعة ~ 12:00 يعني 12:00
⏰┇الساعة ~ 13:00 يعني 1:00 م
⏰┇الساعة ~ 14:00 يعني 2:00 م
⏰┇الساعة ~ 15:00 يعني 3:00 م
⏰┇الساعة ~ 16:00 يعني 4:00 م
⏰┇الساعة ~ 17:00 يعني 5:00 م
⏰┇الساعة ~ 18:00 يعني 6:00 م
⏰┇الساعة ~ 19:00 يعني 7:00 م
⏰┇الساعة ~ 20:00 يعني 8:00 م
⏰┇الساعة ~ 21:00 يعني 9:00 م
⏰┇الساعة ~ 22:00 يعني 10:00 م
⏰┇الساعة ~ 23:00 يعني 11:00 م
⏰┇الساعة ~ 00:00 يعني 12:00ص
⏰┇الساعة ~ 1:00 يعني   1:00  ص
⏰┇الساعة ~ 2:00 يعني   2:00  ص
⏰┇الساعة ~ 3:00 يعني   3:00  ص
⏰┇الساعة ~ 4:00 يعني   3:00  ص
⏰┇الساعة ~ 5:00 يعني   4:00  ص
⏰┇الساعة ~ 6:00 يعني   5:00  ص
⏰┇الساعة ~ 7:00 يعني   6:00  ص
⏰┇الساعة ~ 8:00 يعني   7:00  ص
⏰┇الساعة ~ 9:00 يعني   8:00  ص
⏰┇الساعة ~ 10:00 يعني 10:00 ص
⏰┇الساعة ~ 11:00 يعني 11:00 ص

🚩 استخدم الأزرار التالية ↙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 قفل مؤقت",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ وضع الساعة الحالية ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ فتح الدردشة في وقت ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourunlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minunlockautodown']
					 ],
					 [
					 ['text'=>"📢 تابع جديدنا 📢",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["timelock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
				}
												    elseif($data=="hourunlockautoplus"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timeunlockauto ."+60 Minutes"));
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
🌿┇مرحبًا بك في لوحة القفل الألي 
🌿┇هنا يمكنك ضبط تصميت وكتم المجموعة تلقائيًا لإسكات المجموعة أو إسكاتها في وقت محدد
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🔰┇مثال وشرح عن امر القفل
⏰┇الساعة ~ 12:00 يعني 12:00
⏰┇الساعة ~ 13:00 يعني 1:00 م
⏰┇الساعة ~ 14:00 يعني 2:00 م
⏰┇الساعة ~ 15:00 يعني 3:00 م
⏰┇الساعة ~ 16:00 يعني 4:00 م
⏰┇الساعة ~ 17:00 يعني 5:00 م
⏰┇الساعة ~ 18:00 يعني 6:00 م
⏰┇الساعة ~ 19:00 يعني 7:00 م
⏰┇الساعة ~ 20:00 يعني 8:00 م
⏰┇الساعة ~ 21:00 يعني 9:00 م
⏰┇الساعة ~ 22:00 يعني 10:00 م
⏰┇الساعة ~ 23:00 يعني 11:00 م
⏰┇الساعة ~ 00:00 يعني 12:00ص
⏰┇الساعة ~ 1:00 يعني   1:00  ص
⏰┇الساعة ~ 2:00 يعني   2:00  ص
⏰┇الساعة ~ 3:00 يعني   3:00  ص
⏰┇الساعة ~ 4:00 يعني   3:00  ص
⏰┇الساعة ~ 5:00 يعني   4:00  ص
⏰┇الساعة ~ 6:00 يعني   5:00  ص
⏰┇الساعة ~ 7:00 يعني   6:00  ص
⏰┇الساعة ~ 8:00 يعني   7:00  ص
⏰┇الساعة ~ 9:00 يعني   8:00  ص
⏰┇الساعة ~ 10:00 يعني 10:00 ص
⏰┇الساعة ~ 11:00 يعني 11:00 ص

🚩 استخدم الأزرار التالية ↙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 قفل مؤقت",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ وضع الساعة الحالية ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ فتح الدردشة في وقت ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourunlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minunlockautodown']
					 ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["timeunlock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
				}
																    elseif($data=="hourunlockautodown"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timeunlockauto ."-60 Minutes"));
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
🌿┇مرحبًا بك في لوحة القفل الألي 
🌿┇هنا يمكنك ضبط تصميت وكتم المجموعة تلقائيًا لإسكات المجموعة أو إسكاتها في وقت محدد
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🔰┇مثال وشرح عن امر القفل
⏰┇الساعة ~ 12:00 يعني 12:00
⏰┇الساعة ~ 13:00 يعني 1:00 م
⏰┇الساعة ~ 14:00 يعني 2:00 م
⏰┇الساعة ~ 15:00 يعني 3:00 م
⏰┇الساعة ~ 16:00 يعني 4:00 م
⏰┇الساعة ~ 17:00 يعني 5:00 م
⏰┇الساعة ~ 18:00 يعني 6:00 م
⏰┇الساعة ~ 19:00 يعني 7:00 م
⏰┇الساعة ~ 20:00 يعني 8:00 م
⏰┇الساعة ~ 21:00 يعني 9:00 م
⏰┇الساعة ~ 22:00 يعني 10:00 م
⏰┇الساعة ~ 23:00 يعني 11:00 م
⏰┇الساعة ~ 00:00 يعني 12:00ص
⏰┇الساعة ~ 1:00 يعني   1:00  ص
⏰┇الساعة ~ 2:00 يعني   2:00  ص
⏰┇الساعة ~ 3:00 يعني   3:00  ص
⏰┇الساعة ~ 4:00 يعني   3:00  ص
⏰┇الساعة ~ 5:00 يعني   4:00  ص
⏰┇الساعة ~ 6:00 يعني   5:00  ص
⏰┇الساعة ~ 7:00 يعني   6:00  ص
⏰┇الساعة ~ 8:00 يعني   7:00  ص
⏰┇الساعة ~ 9:00 يعني   8:00  ص
⏰┇الساعة ~ 10:00 يعني 10:00 ص
⏰┇الساعة ~ 11:00 يعني 11:00 ص

🚩 استخدم الأزرار التالية ↙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 قفل مؤقت",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ وضع الساعة الحالية ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ فتح الدردشة في وقت ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourunlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minunlockautodown']
					 ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["timeunlock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
				}
																    elseif($data=="minunlockautoplus"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timeunlockauto ."+5 Minutes"));
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
🌿┇مرحبًا بك في لوحة القفل الألي 
🌿┇هنا يمكنك ضبط تصميت وكتم المجموعة تلقائيًا لإسكات المجموعة أو إسكاتها في وقت محدد
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🔰┇مثال وشرح عن امر القفل
⏰┇الساعة ~ 12:00 يعني 12:00
⏰┇الساعة ~ 13:00 يعني 1:00 م
⏰┇الساعة ~ 14:00 يعني 2:00 م
⏰┇الساعة ~ 15:00 يعني 3:00 م
⏰┇الساعة ~ 16:00 يعني 4:00 م
⏰┇الساعة ~ 17:00 يعني 5:00 م
⏰┇الساعة ~ 18:00 يعني 6:00 م
⏰┇الساعة ~ 19:00 يعني 7:00 م
⏰┇الساعة ~ 20:00 يعني 8:00 م
⏰┇الساعة ~ 21:00 يعني 9:00 م
⏰┇الساعة ~ 22:00 يعني 10:00 م
⏰┇الساعة ~ 23:00 يعني 11:00 م
⏰┇الساعة ~ 00:00 يعني 12:00ص
⏰┇الساعة ~ 1:00 يعني   1:00  ص
⏰┇الساعة ~ 2:00 يعني   2:00  ص
⏰┇الساعة ~ 3:00 يعني   3:00  ص
⏰┇الساعة ~ 4:00 يعني   3:00  ص
⏰┇الساعة ~ 5:00 يعني   4:00  ص
⏰┇الساعة ~ 6:00 يعني   5:00  ص
⏰┇الساعة ~ 7:00 يعني   6:00  ص
⏰┇الساعة ~ 8:00 يعني   7:00  ص
⏰┇الساعة ~ 9:00 يعني   8:00  ص
⏰┇الساعة ~ 10:00 يعني 10:00 ص
⏰┇الساعة ~ 11:00 يعني 11:00 ص

🚩 استخدم الأزرار التالية ↙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 قفل مؤقت",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ وضع الساعة الحالية ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ فتح الدردشة في وقت ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourunlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minunlockautodown']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["timeunlock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
				}
																				    elseif($data=="minunlockautodown"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timeunlockauto ."-5 Minutes"));
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
🌿┇مرحبًا بك في لوحة القفل الألي 
🌿┇هنا يمكنك ضبط تصميت وكتم المجموعة تلقائيًا لإسكات المجموعة أو إسكاتها في وقت محدد
➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖
🔰┇مثال وشرح عن امر القفل
⏰┇الساعة ~ 12:00 يعني 12:00
⏰┇الساعة ~ 13:00 يعني 1:00 م
⏰┇الساعة ~ 14:00 يعني 2:00 م
⏰┇الساعة ~ 15:00 يعني 3:00 م
⏰┇الساعة ~ 16:00 يعني 4:00 م
⏰┇الساعة ~ 17:00 يعني 5:00 م
⏰┇الساعة ~ 18:00 يعني 6:00 م
⏰┇الساعة ~ 19:00 يعني 7:00 م
⏰┇الساعة ~ 20:00 يعني 8:00 م
⏰┇الساعة ~ 21:00 يعني 9:00 م
⏰┇الساعة ~ 22:00 يعني 10:00 م
⏰┇الساعة ~ 23:00 يعني 11:00 م
⏰┇الساعة ~ 00:00 يعني 12:00ص
⏰┇الساعة ~ 1:00 يعني   1:00  ص
⏰┇الساعة ~ 2:00 يعني   2:00  ص
⏰┇الساعة ~ 3:00 يعني   3:00  ص
⏰┇الساعة ~ 4:00 يعني   3:00  ص
⏰┇الساعة ~ 5:00 يعني   4:00  ص
⏰┇الساعة ~ 6:00 يعني   5:00  ص
⏰┇الساعة ~ 7:00 يعني   6:00  ص
⏰┇الساعة ~ 8:00 يعني   7:00  ص
⏰┇الساعة ~ 9:00 يعني   8:00  ص
⏰┇الساعة ~ 10:00 يعني 10:00 ص
⏰┇الساعة ~ 11:00 يعني 11:00 ص

🚩 استخدم الأزرار التالية ↙️
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 قفل مؤقت",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ وضع الساعة الحالية ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ فتح الدردشة في وقت ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ساعة",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ دقيقة واحدة",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ ساعة واحدة",'callback_data'=>'hourunlockautodown'],['text'=>"➖ دقيقة واحدة",'callback_data'=>'minunlockautodown']
					 ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["timeunlock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن⚠️",
]);
    }
				}


if($textmassage=="/tibme" or $textmassage=="bbساعت" or $textmassage=="time"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
if ($tc == 'group' | $tc == 'supergroup'){  
$basetime = file_get_contents("http://irapi.ir/time/");
$getchat = json_decode($basetime, true);
$time = $getchat["FAtime"];
$date = $getchat["FAdate"];
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"?? ساعت و تاریخ امروز :
➖➖➖➖➖➖➖➖
",
'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
  [
                    ['text'=>"🔻تاریخ امروز🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"$date",'callback_data'=>'text']
                ],
                [
                    ['text'=>"🔻 ساعت 🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"$time",'callback_data'=>'text']
                ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/$channel"]
		 ],
   ]
   ])
   ]);
   }  
}
}
else
{
$basetime = file_get_contents("http://irapi.ir/time/");
$getchat = json_decode($basetime, true);
$time = $getchat["FAtime"];
$date = $getchat["FAdate"];
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🗓 ساعت و تاریخ امروز :
➖➖➖➖➖➖➖➖
",
'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
  [
                    ['text'=>"🔻تاریخ امروز🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"$date",'callback_data'=>'text']
                ],
                [
                    ['text'=>"🔻 ساعت 🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"$time",'callback_data'=>'text']
                ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/$channel"]
		 ],
   ]
   ])
   ]);
}
}
// id
else
if($rt && $textmassage =="ايدvي" or $rt && $textmassage =="ايوودي" or $rt && $textmassage =="vايدى"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
if ($getuserphoto != false) {
  Mostafa('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"
┐اسـمــك↫-• $first_name •-
┤معرفـك↫-• @$username -•
┤ايـديـك↫•{$from_id}•
┤صـورك↫•{$cuphoto}•
┤رسائلك ↫•{$tedadmsg}•
┘رتبتــك ↫ •- عضو فقط 👦 -•
",
'reply_markup'=>$inlinebutton,
   ]);
   }  
else
{
	Mostafa('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>new CURLFile("other/nophoto.png"),
  'caption'=>"
┐اسـمــك↫-• $first_name •-
┤معرفـك↫-• @$username -•
┤ايـديـك↫•{$from_id}•
┤صـورك↫•{$cuphoto}•
┤رسائلك ↫•{$tedadmsg}•
┘رتبتــك ↫ •- عضو فقط 👦 -•
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }  
}
}   
else
{
$getuserprofile = getUserProfilePhotos($token,$re_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
  Mostafa('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"
ء┐اسمك↫$re_name
ء┤معرفك↫@$re_user
ء┤ايديك↫( `$re_id` )
ء┘ايدي المجموعة $chat_id
",
'reply_markup'=>$inlinebutton,
   ]);
   }
   }
elseif($textmassage=="ايدي" or $textmassage=="ااریدی" or $textmassage=="idر"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));
$iBadlz = array(
"خوش متفاعل 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🌈ء",
"الله مال تفاعل ⚜️",
"نايس التفاعل 💘ء");
 $JJ119 = array_rand($iBadlz,1);
 $p_pppp = array(
    "0.14%",
    "0.22%",
    "0.31%",
    "0.65%",
    "0.77%",
    "0.80%",
    "0.89%",
    "0.95%");
     $markst = array_rand($p_pppp,1);
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
if ($getuserphoto != false) {
  Mostafa('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"
┐اسـمــك↫-• $first_name •-
┤معرفـك↫-• @$username -•
┤ايـديـك↫•{$from_id}•
┤صـورك↫•{$cuphoto}•
┘رسائل المجموعة ↫•{$tedadmsg}•
",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
else
{
	Mostafa('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>new CURLFile("other/nophoto.png"),
  'caption'=>"
┐اسـمــك↫-• $first_name •-
┤معرفـك↫-• @$username -•
┤ايـديـك↫•{$from_id}•
┤صـورك↫•{$cuphoto}•
┘رسائل المجموعة ↫•{$tedadmsg}•
",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
}
else
{
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
  Mostafa('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"
┐اسـمــك↫-• $first_name •-
┤معرفـك↫-• @$username -•
┤ايـديـك↫•{$from_id}•
┤صـورك↫•{$cuphoto}•
┘رسائل المجموعة ↫•{$tedadmsg}•
",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
// getpro
elseif(strpos($textmassage ,"ايدي ") !== false or strpos($textmassage ,"ايدي") !== false) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$text = str_replace(['ايديي ','ايدي'],'',$textmassage);
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[$text - 1][0]->file_id;
if ($getuserphoto != false) {
  Mostafa('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"
┐اسـمــك↫-• $first_name •-
┤معرفـك↫-• @$username -•
┤ايـديـك↫•{$from_id}•
┤صـورك↫•{$cuphoto}•
┤رسائل الكل ↫•{$tedadmsg}•
",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
}
}

   // nerkh
elseif($textmassage=="/nerkh" or $textmassage=="نرخ" or $textmassage=="nerkh"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖نرخ ربات مدیریت گروه
➖➖➖➖
💵یک ماه : 5000 تومان

💴دو ماه : 10000 تومان

💶نامحدود : 15000 تومان
➖➖➖
💥ربات پرقدرت بدون خاموشی با سرور قوی و امکانات فوق العاده",
'reply_to_message_id'=>$message_id,
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"1⃣ یک ماه",'url'=>"https://gpgrambot.tk/gpgrambot/pay/pay.php?amount=5000&callback=https://gpgrambot.tk/gpgrambot/pay/by-5000.php?id=$from_id"],['text'=>"2⃣  دو ماه",'url'=>"https://gpgrambot.tk/gpgrambot/pay/pay.php?amount=10000&callback=https://gpgrambot.tk/gpgrambot/pay/by-10000.php?id=$from_id"]
	],
	[
	['text'=>"3⃣  نامحدود",'url'=>"https://gpgrambot.tk/gpgrambot/pay/pay.php?amount=15000&callback=https://gpgrambot.tk/gpgrambot/pay/by-15000.php?id=$from_id"]
	],
	           [
         ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/$channel"]
     ]
              ],
        ])
   ]);
   }  
}
else
{
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖نرخ ربات مدیریت گروه
➖➖➖➖
💵یک ماه : 5000 تومان

💴دو ماه : 10000 تومان

💶نامحدود : 15000 تومان
➖➖➖
💥ربات پرقدرت بدون خاموشی با سرور قوی و امکانات فوق العاده",
'reply_to_message_id'=>$message_id,
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"1⃣ یک ماه",'url'=>"https://gpgrambot.tk/gpgrambot/pay/pay.php?amount=5000&callback=https://gpgrambot.tk/gpgrambot/pay/by-5000.php?id=$from_id"],['text'=>"2⃣  دو ماه",'url'=>"https://gpgrambot.tk/gpgrambot/pay/pay.php?amount=10000&callback=https://gpgrambot.tk/gpgrambot/pay/by-10000.php?id=$from_id"]
	],
	[
	['text'=>"3⃣  نامحدود",'url'=>"https://gpgrambot.tk/gpgrambot/pay/pay.php?amount=15000&callback=https://gpgrambot.tk/gpgrambot/pay/by-15000.php?id=$from_id"]
	],
	           [
         ['text'=>"🎉 کانال ما",'url'=>"https://telegram.me/$channel"]
     ]
              ],
        ])
   ]);
}
}
// info
elseif($textmassage=="/infتo" && $rt or $textmassage=="اطلاعات" && $rt or $textmassage=="iرnfo" && $rt){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
ء┐اسمك↫$re_name
ء┤معرفك↫@$re_user
ء┤ايديك↫( `$re_id` )
ء┤عدد صورك↫( `$cuphoto` )
ء┤رسائلك ↫( `$tedadmsg` )
ء┘ايدي المجموعة $chat_id
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   } 
}
else
{
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
ء┐اسمك↫$re_name
ء┤معرفك↫@$re_user
ء┤ايديك↫( `$re_id` )
ء┤عدد صورك↫( `$cuphoto` )
ء┘ايدي المجموعة $chat_id
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
if(strpos($textmassage ,"/وinfo ") !== false or strpos($textmassage ,"معلوزمات") !== false) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$text = str_replace(['/info ','معلرومات'],'',$textmassage);
if($text > 0){
              Mostafa('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"
",
			 'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
}
else
{
$text = str_replace(['/info ','مزعلومات'],'',$textmassage);
              Mostafa('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"
☑️┇تم كشف بروفايل العضو
 [$text](tg://user?id=$text)
",
			 'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}


if( $textmassage=="انلاینی" or $textmassage=="ping" or $textmassage=="رباتم" or $textmassage=="گپ گرامم" or $textmassage=="پینگ"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
   Mostafa('sendmessage',[
  'chat_id'=>$chat_id,
	'text'=>"لامصـب کـم بـزن آنلاینـم😌💋",
		'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
        ]);
   } 
}
else
{
Mostafa('sendmessage',[
  'chat_id'=>$chat_id,
	'text'=>"لامصـب کـم بـزن آنلاینـم😌💋",
		'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
        ]);	
}
}
// gif
elseif ( strpos($textmassage , '/gif ') !== false  ) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$text = str_replace("/gif ","",$textmassage);
$ran = rand(1,3);
if ($ran == "1") {
$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=memories-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 Mostafa('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
}
if ($ran == "2") {
	$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=flash-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 Mostafa('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
}
if ($ran == "3") {
		$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=alien-glow-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 Mostafa('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
   }  
}
}
else
{
$text = str_replace("/gif ","",$textmassage);
$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=memories-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 Mostafa('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
}
}
// voice
elseif ( strpos($textmassage ,'/voice ') !== false  ) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$text = str_replace("/voice ","",$textmassage);
$trtext = urlencode($text);
 Mostafa('sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>"http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text=$trtext",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   } 
}
else
{	
$text = str_replace("/voice ","",$textmassage);
$trtext = urlencode($text);
 Mostafa('sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>"http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text=$trtext",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
// sticker

 if($textmassage=="/hرelp" or $textmassage=="راهنما" or $textmassage=="helرp"){
	 if ($tc == 'group' | $tc == 'supergroup'){  
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🚩به راهنمای ربات مدیریت گروه خوش امدید
➖➖➖➖➖➖➖➖
🔖لطفا زبان مورد نظر برای دستورات را انتخاب کنید

💥در راهنما به نکات زیر توجه کنید

🔹🔸🔹🔸🔹🔸🔹🔸🔹🔸🔹

🔹برای دستورات انگلیسی ان هارو تایپ کنید و روی ان ها کلیک نکنید!

🔸در جای که علامت های [] وجود دارد در دستورات از ان ها استفاده نکنید
➖➖➖",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=>"🇮🇷 فارسی",'callback_data'=>"farsi"],['text'=>"🇬🇧 انگلیسی",'callback_data'=>"english"]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"✖️ خروج",'callback_data'=>'exit']
		 ],
   ]
   ])
   ]);
   }  
  }
elseif($textmassage=="🗄 دستورات و امکانات"){
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 راهنمای دستورات مدیریتی کلی ربات:
راهنمای دستورات قفلی :
➖➖➖➖➖
🔐قفل لینک
🔓بازکردن لینک 
/lock link
/unlock link
〰〰〰
🔐قفل تگ
🔓بازکردن تگ
/lock tag
/unlock tag
〰〰〰
🔐قفل یوزرنیم
🔓بازکرن یوزرنیم
/lock username
/unlock username
〰〰〰
🔐قفل متن
🔓بازکردن متن
/lock text
/unlock text
〰〰〰
🔐قفل ویرایش
🔓بازکردن ویرایش
/lock edit
/unlock edit
〰〰〰
🔐قفل ربات
🔓بازکردن ربات
/lock bots
/unlock bots
〰〰〰
🔐قفل فحش
🔓بازکردن فحش
/lock fosh
/unlock fosh
〰〰〰
🔐قفل گیف
🔓بازکردن گیف
/lock gif
/unlock gif
〰〰〰
🔐قفل عکس
🔓بازکردن عکس
/lock photo
/unlock photo
〰〰〰
🔐قفل فیلم
🔓بازکردن فیلم
/lock video
/unlock video
〰〰〰
🔐قفل آهنگ
🔓بازکردن آهنگ
/lock audio
/unlock audio
〰〰〰
🔐قفل ویس
🔓بازکردن ویس
/lock voice
/unlock voice
〰〰〰
🔐قفل استیکر
🔓بازکردن استیکر
/lock sticker
/unlock sticker
〰〰〰
🔐قفل مخاطب
🔓بازکردن مخاطب
/lock contact
/unlock contact
〰〰〰
🔐قفل فوروارد
🔓بازکردن فوروارد
/lock forward
/unlock forward
〰〰〰
🔐قفل مکان
🔓بازکردن مکان
/lock location
/unlock location
〰〰〰
🔐قفل فایل
🔓بازکردن فایل
/lock document
/unlock document
〰〰〰
🔐قفل بازی
🔓بازکردن بازی
/lock game
/unlock game
〰〰〰
🔐قفل پیام ویدیویی
🔓بازکردن پیام ویدیویی
/lock videonote
/unlock videonote
〰〰〰
🔐قفل ریپلای
🔓بازکردن ریپلای
/lock reply
/unlock reply
〰〰〰
🔐قفل دستورات
🔓بازکردن دستورات
/lock cmd
/unlock cmd
〰〰〰
🔐قفل خدمات
🔓بازکردن خدمات
/lock tgservic
/unlock tgservic

ایموجی های ابتدای دستورات را وارد نکنید
بازکردن و قفل کردن هم از طریق پنل و هم از طریق دستور ممکن است
➰➰➰➰➰➰➰➰➰
راهنمای دستورات عمومی :
/rules
🔺قوانین گروه
/link
🔺لینک گروه
/id
🔺ایدی
/id [ریپلای]
🔺ایدی (ریپلای)
/me
🔺من
/info
🔺اطلاعات گروه
/info [ریپلای| ایدی]
🔺اطلاعات (ریپلای)
/ping
🔺ربات_ زنده ایی _انلاینی
➰➰➰➰➰➰➰➰➰➰
راهنمای دستورات مدیریتی :
/panel 
🔺پنل
/settings
🔺 تنظیمات
/promote [ریپلای]
🔺ترفیع (مقام)
/demote [ریپلای]
🔺تنزل (مقام)
/admin list 
🔺لیست ادمین
/pin [ریپلای]
🔺سنجاق
/unpin 
🔺حذف سنجاق
/kick [ریپلای | ایدی]
🔺اخراج فرد
/del [ریپلای]
🔺حذف (ریپلای)
/rmsg [1-300]
🔺پاک کردن (1_300)
/setname [نام]
🔺تنظیم نام (نام)
/setdescription [متن]
🔺تنظیم اطلاعات (متن)
/automatic
🔺مدیریت خودکار
/mute all
🔺بیصدا همه
/unmute all
🔺باصدا همه
/filter
🔺افزودن فیلتر (متن)
/unfilter
🔺حذف فیلتر (متن)
/add [on | off]
🔺اخطار
/unwarn [ریپلای]
🔺حذف اخطار 
/setrules [متن]
🔺تنظیم قوانین (متن)
/modebot [on | off]
🔺سختگیرانه ربات (روشن،خاموش)
/modewarn [on | off]
🔺سختگیرانه اخطار (روشن،خاموش)
➰➰➰➰➰➰➰➰➰➰
برای دستورات انگلیسی ان هارو تایپ کنید و روی ان ها کلیک نکنید!
در جای که علامت های [] و () وجود دارد در دستورات از ان ها استفاده نکنید
➖➖➖",
  'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"دستورات فارسی",'callback_data'=>'farese'],['text'=>"دستورات انگلیسی",'callback_data'=>'engi']
					 ],
					 [
					 ['text'=>"دستورات کلی",'callback_data'=>'koali']
					 ],
                     ]
                               
               ])
           ]);
   }  
   
   elseif($data=="farese"){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>" 
📍 راهنمای دستورات قفلی :
➖➖➖
📌پاک کردن لینک 
🔹قفل لینک
🔸بازکردن لینک
〰〰〰
📌پاک کرد هشتگ
🔹قفل تگ
🔸بازکردن تگ
〰〰〰
📌پاک کردن یوزرنیم
🔹قفل یوزرنیم
🔸بازکردن یوزرنیم
〰〰〰
📌پاک کردن متن
🔹قفل متن
🔸بازکردن متن
〰〰〰
📌پاک کردن ویرایش پیام
🔹قفل ویرایش
🔸بازکردن ویرایش
〰〰〰
📌پاک کردن ربات های مخرب
🔹قفل ربات
🔸بازکردن ربات
〰〰〰
📌پاک کردن کلمات رکیک
🔹قفل فحش
🔸بازکردن فحش
〰〰〰
📌پاک کردن تصاویر متحرک
🔹قفل گیف
🔸بازکردن گیف
〰〰〰
📌پاک کردن عکس
🔹قفل عکس
🔸بازکردن عکس
〰〰〰
📌پاک کردن فیلم
🔹قفل ویدیو
🔸بازکردن ویدیو
〰〰〰
📌پاک کردن اهنگ
🔹قفل اهنگ
🔸بازکردن اهنگ
〰〰〰
📌پاک کردن ویس
🔹قفل ویس
🔸بازکردن ویس
〰〰〰
📌پاک کردن استیکر
🔹قفل استیکر
🔸بازکردن استیکر
〰〰〰
📌پاک کردن ارسال مخاطب
🔹قفل مخاطب
🔸بازکردن مخاطب
〰〰〰
📌پاک کردن فوروارد
🔹قفل فوروارد
🔸بازکردن فوروارد
〰〰〰
📌پاک کردن ارسال مکان
🔹قفل مکان
🔸بازکردن مکان
〰〰〰
📌پاک کردن ارسال فایل
🔹قفل فایل
🔸بازکردن فایل
〰〰〰
📌پاک کردن بازی تحت وب
🔹قفل بازی
🔸بازکردن بازی
〰〰〰
📌پاک کردن پیام ویدیویی
🔹قفل پیام ویدیویی
🔸بازکردن پیام ویدیویی
〰〰〰
📌پاک کردن ریپلای کردن پیام
🔹قفل ریپلای
🔸بازکردن ریپلای
〰〰〰
📌جلو گیری از دستورات عمومی
🔹قفل دستورات
🔸بازکردن دستورات
〰〰〰
📌قفل خدمات تلگرام
🔹قفل خدمات
🔸بازکردن خدمات
〰〰〰
📌خاموش و روشن کردن قفل خودکار گروه
🔹قفل خودکار روشن
🔸قفل خودکار خاموش
❄️تنظیم قفل خودکار [زمان پایان زمان شروع] 
📍 زمان را باید با فرمت صحیح استفاده کنید مثال :
تنظیم قفل خودکار 13:36 19:05
〰〰〰
📌خاموش و روشن کردن و تنظیم کاراکتر پیام
🔹قفل کاراکتر
🔸بازکردن کاراکتر
❄️تنظیم کاراکتر [حداقل کاراکتر حداکثر کاراکتر]
📍 باید حتما به عدد وارد کنید مثال :
تنظیم کاراکتر 10 320

➖➖➖
🔹ایموجی های ابتدای دستورات را وارد نکنید

🔖بازکردن و قفل کردن هم از طریق پنل و هم از طریق دستور ممکن است

🔸مثال :
قفل لینک
بازکردن لینک
➖➖➖
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"دستورات فارسی",'callback_data'=>'farese'],['text'=>"دستورات انگلیسی",'callback_data'=>'engi']
					 ],
					[
					 ['text'=>"دستورات کلی",'callback_data'=>'koali']
					 ],
                     ]
               ])
           ]);
}
   
      elseif($data=="engi"){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>" 
📍 راهنمای دستورات مدیریتی :
➖➖
/panel
💭دریافت پنل تنظیمات و پنل مدیریت گروه

/settings
💭دریافت تنظیمات گروه به صورت متنی

/promote [ریپلای]
💭ادمین کرد فرد مورد نظر

/demote [ریپلای]
💭تنزل مقام فرد مورد نظر

/admin list 
💭دریافت لیست ادمین های گروه

/pin [ریپلای]
💭سنحاق کردن پیام مورد نظر توسط ربات

/unpin 
💭برداشتن پیام از حالت سنجاق

/kick [ریپلای | ایدی]
💭اخراج فرد مورد نظر از گروه

/del [ریپلای]
💭حذف پیام مورد نظر

/rmsg [1-300]
💭پاک کردن پیام های اخیر گروه

/setname [نام]
💭تنظیم نام گروه

/setdescription [متن]
💭تنظیم اطلاعات گروه

/delphoto 
??حذف عکس گروه

/setphoto [ریپلای]
💭تنظیم عکس گروه

/check
💭دریافت میزان شارژ گروه

/automatic
💭فعال کردن قفل ها به صورت خودکار و مدیریت خود کار گروه

/mute all
💭ساکت کردن همه گروه

/unmute all
💭غیر فعال کردن سکوت گروه

/welcome [enable |disable]
💭روشن و خاموش کردن خوش امد

/setwelcome [متن]
💭تنظیم پیام خوش امد

/silent
💭افزودن فرد به لیست سکوت گروه

/silent [دقیقه]
💭افزودن فرد به لیست سکوت گروه به صورت زمان داره

/unsilent
💭خارج کردن فرد از لیست سکوت گروه

/list silent
💭دریافت لیست سکوت گروه

/clean silentlist
💭 پاک کردن لیست سکوت گروه

/request
💭درخواست تمدید شارژ برای گروه

/filter
💭افزودن کلمه به لیست کلمات فیلترشده

/unfilter
💭حذف کلمه از لیست کلمات فیلتر شده

/filterlist
💭دریافت لیست کلمات فیلتر شد

/clean filterlist
💭پاک کردن تمام کلمات درون لیست فیلتر

/restart settings
💭ریستارت کردن تنظیمات گروه به حالت اولیه

/add [on | off]
💭روشن و خاموش کردن اد اجباری در گروه

/setadd [عدد]
💭تنظیم مقدار کاربری که یک فرد باید دعوت کند تا بتواند در گروه چت کند

/setwarn [عدد]
💭 تنظیم حداکثر اخطار برای کاربر

/warn [ریپلای]
💭اخطار دادن به کاربر مورد نظر

/unwarn [ریپلای]
💭کم کردن اخطار های کاربر مورد نظر

/warn info [ریپلای]
💭به دست اوردن تعداد اخطار های کاربر

/setrules [متن]
💭تنظیم قوانین گروه

/muteall [دقیقه]
💭سکوت همه به صورت زمان دار

/channel [on | off]
💭روشن و خاموش کردن قفل کانال

/setchannel [@یوزرنیم کانال]
💭 قفل کردن ربات روی کانال تنظیم شد

/modebot [on | off]
💭 روشن و خاموش کردن حالت سختگیرانه اضافه کردن ربات

/modewarn [on | off]
💭 روشن و خاموش کردن حالت سختگیرانه اخراج کاربر پس از رسیدن به حداکثر اخطار

/delall
💭 پاکسازی پیام های اخیر گروه تا حد ممکن

➖➖
🔹برای دستورات انگلیسی ان هارو تایپ کنید و روی ان ها کلیک نکنید!

🔸در جای که علامت های [] وجود دارد در دستورات از ان ها استفاده نکنید

✨مثال :
/setrules hi
➖➖➖
📍 راهنمای دستورات قفلی :
➖➖
📌پاک کردن لینک 
/lock link
/unlock link
〰〰〰
📌پاک کرد هشتگ
/lock tag
/unlock tag
〰〰〰
📌پاک کردن یوزرنیم
/lock username
/unlock username
〰〰〰
📌پاک کردن متن
/lock text
/unlock text
〰〰〰
📌پاک کردن ویرایش پیام
/lock edit
/unlock edit
〰〰〰
📌پاک کردن ربات های مخرب
/lock bots
/unlock bots
〰〰〰
📌پاک کردن کلمات رکیک
/lock fosh
/unlock fosh
〰〰〰
📌پاک کردن تصاویر متحرک
/lock gif
/unlock gif
〰〰〰
📌پاک کردن عکس
/lock photo
/unlock photo
〰〰〰
📌پاک کردن فیلم
/lock video
/unlock video
〰〰〰
📌پاک کردن اهنگ
/lock audio
/unlock audio
〰〰〰
📌پاک کردن ویس
/lock voice
/unlock voice
〰〰〰
📌پاک کردن استیکر
/lock sticker
/unlock sticker
〰〰〰
📌پاک کردن ارسال مخاطب
/lock contact
/unlock contact
〰〰〰
📌پاک کردن فوروارد
/lock forward
/unlock forward
〰〰〰
📌پاک کردن ارسال مکان
/lock location
/unlock location
〰〰〰
📌پاک کردن ارسال فایل
/lock document
/unlock document
〰〰〰
📌پاک کردن بازی تحت وب
/lock game
/unlock game
〰〰〰
📌پاک کردن پیام ویدیویی
/lock videonote
/unlock videonote
〰〰〰
📌پاک کردن ریپلای کردن پیام
/lock reply
/unlock reply
〰〰〰
📌جلو گیری از دستورات عمومی
/lock cmd
/unlock cmd
〰〰〰
📌قفل خدمات تلگرام
/lock tgservic
/unlock tgservic
〰〰〰
📌خاموش و روشن کردن قفل خودکار گروه
/lock auto
/unlock auto
/setlockauto [زمان پایان زمان شروع]
📍 زمان را باید با فرمت صحیح استفاده کنید مثال :
/setlockauto 13:36 19:05
〰〰〰
📌خاموش و روشن کردن و تنظیم کاراکتر پیام
/lock character
/unlock character
/setlockcharacter [حداقل کاراکتر حداکثر کاراکتر]
📍 باید حتما به عدد وارد کنید مثال :
/setlockcharacter 10 320

➖➖➖
🔹برای دستورات انگلیسی ان هارو تایپ کنید و روی ان ها کلیک نکنید!

🔖بازکردن و قفل کردن هم از طریق پنل و هم از طریق دستور ممکن است

🔸مثال :
/lock link
/unlock link
➖➖
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"دستورات فارسی",'callback_data'=>'farese'],['text'=>"دستورات انگلیسی",'callback_data'=>'engi']
					 ],
					[
					 ['text'=>"دستورات کلی",'callback_data'=>'koali']
					 ],
                     ]
               ])
           ]);
}
elseif($data=="sendorder"){
	if ( $status == 'creator' && $status == 'administrator' && in_array($from_id,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>" 
📌¦ مرحبا بك عزيزي في قائمة الاوامر الكتابية ، 👮
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📌¦ م1↫ لعرض اوامر القفل والفتح 🔐
📌¦ م2↫ لعرض اوامر الوضع 🚸
📌¦ م3↫ لعرض اوامر الكتم والتقييد 🔇
📌¦ م4↫ لعرض اوامر الاعضاء 👥
📌¦ م5↫ لعرض اوامر المطور 👨‍✈️
📌¦ م6↫ لعرض الاوامر العامة 🌐
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
📯¦ مطور البوت @Alphp",
]);
}
}
   	    elseif($data=="help"){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🚩به راهنمای ربات مدیریت گروه خوش امدید
➖➖➖➖➖➖➖➖
🔖لطفا زبان مورد نظر برای دستورات را انتخاب کنید

💥در راهنما به نکات زیر توجه کنید

🔹🔸🔹🔸🔹🔸🔹🔸🔹🔸🔹

🔹برای دستورات انگلیسی ان هارو تایپ کنید و روی ان ها کلیک نکنید!

🔸در جای که علامت های [] وجود دارد در دستورات از ان ها استفاده نکنید
➖➖➖",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=>"🇮🇷 فارسی",'callback_data'=>"farsi"],['text'=>"🇬🇧 انگلیسی",'callback_data'=>"english"]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"✖️ خروج",'callback_data'=>'exit']
		 ],
   ]
   ])
   ]);
   } 
	    elseif($data=="english"){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش دریافت دستورات انگلیسی خوش امدید❤️
➖➖➖➖➖➖➖➖
🔖لطفا بخش مورد نظر خورد را انتخاب کنید

➖➖➖➖

⚠️به نکات زیر توجه کنید :

🔹برای دیدن دستورات قفلی و مدیریتی شما باید حتما مدیر ربات باشید و کابران عادی اجازه ورود به این بخش را ندارند

💥دستورات عمومی برای همه کاربران است و همه اجازه استفاده از این دستورات را دارند

🎉دستورات صاحب ربات فقط برای سودو ربات هست و دیگر کاربران  اجازه ورود ندارند
➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				    	[
	  ['text'=>"🚦 عمومی",'callback_data'=>"allen"],['text'=>"🔖 مدیریتی",'callback_data'=>"manageen"]
	  ],
	  				    	[
	  ['text'=>"🔐 قفل ها",'callback_data'=>"locken"],['text'=>"🤦🏻‍♂ صاحب ربات",'callback_data'=>"sudohelpen"]
	  ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'help']
					 ],
                     ]
               ])
           ]);
    }
		
		    elseif($data=="farsi"){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش دریافت دستورات فارسی خوش امدید❤️
➖➖➖➖➖➖➖➖
🔖لطفا بخش مورد نظر خورد را انتخاب کنید

➖➖➖➖

⚠️به نکات زیر توجه کنید :

🔹برای دیدن دستورات قفلی و مدیریتی شما باید حتما مدیر ربات باشید و کابران عادی اجازه ورود به این بخش را ندارند

💥دستورات عمومی برای همه کاربران است و همه اجازه استفاده از این دستورات را دارند

🎉دستورات صاحب ربات فقط برای سودو ربات هست و دیگر کاربران  اجازه ورود ندارند
➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				    	[
	  ['text'=>"🚦 عمومی",'callback_data'=>"allfa"],['text'=>"🔖 مدیریتی",'callback_data'=>"managefa"]
	  ],
	  				    	[
	  ['text'=>"🔐 قفل ها",'callback_data'=>"lockfa"],['text'=>"🤦🏻‍♂ صاحب ربات",'callback_data'=>"sudohelpfa"]
	  ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'help']
					 ],
                     ]
               ])
           ]);
    }
			    elseif($data=="manageen"){
			 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 راهنمای دستورات مدیریتی :
➖➖➖➖➖

/panel
💭دریافت پنل تنظیمات و پنل مدیریت گروه

/settings
💭دریافت تنظیمات گروه به صورت متنی

/promote [ریپلای]
💭ادمین کرد فرد مورد نظر

/demote [ریپلای]
💭تنزل مقام فرد مورد نظر

/admin list 
💭دریافت لیست ادمین های گروه

/pin [ریپلای]
💭سنحاق کردن پیام مورد نظر توسط ربات

/unpin 
💭برداشتن پیام از حالت سنجاق

/kick [ریپلای | ایدی]
💭اخراج فرد مورد نظر از گروه

/del [ریپلای]
💭حذف پیام مورد نظر

/rmsg [1-300]
💭پاک کردن پیام های اخیر گروه

/setname [نام]
💭تنظیم نام گروه

/setdescription [متن]
💭تنظیم اطلاعات گروه

/delphoto 
💭حذف عکس گروه

/setphoto [ریپلای]
💭تنظیم عکس گروه

/check
💭دریافت میزان شارژ گروه

/automatic
💭فعال کردن قفل ها به صورت خودکار و مدیریت خود کار گروه

/mute all
💭ساکت کردن همه گروه

/unmute all
💭غیر فعال کردن سکوت گروه

/welcome [enable |disable]
💭روشن و خاموش کردن خوش امد

/setwelcome [متن]
💭تنظیم پیام خوش امد

/silent
💭افزودن فرد به لیست سکوت گروه

/silent [دقیقه]
💭افزودن فرد به لیست سکوت گروه به صورت زمان داره

/unsilent
💭خارج کردن فرد از لیست سکوت گروه

/list silent
💭دریافت لیست سکوت گروه

/clean silentlist
💭 پاک کردن لیست سکوت گروه

/request
💭درخواست تمدید شارژ برای گروه

/filter
💭افزودن کلمه به لیست کلمات فیلترشده

/unfilter
💭حذف کلمه از لیست کلمات فیلتر شده

/filterlist
💭دریافت لیست کلمات فیلتر شد

/clean filterlist
💭پاک کردن تمام کلمات درون لیست فیلتر

/restart settings
💭ریستارت کردن تنظیمات گروه به حالت اولیه

/add [on | off]
💭روشن و خاموش کردن اد اجباری در گروه

/setadd [عدد]
💭تنظیم مقدار کاربری که یک فرد باید دعوت کند تا بتواند در گروه چت کند

/setwarn [عدد]
💭 تنظیم حداکثر اخطار برای کاربر

/warn [ریپلای]
💭اخطار دادن به کاربر مورد نظر

/unwarn [ریپلای]
💭کم کردن اخطار های کاربر مورد نظر

/warn info [ریپلای]
💭به دست اوردن تعداد اخطار های کاربر

/setrules [متن]
💭تنظیم قوانین گروه

/muteall [دقیقه]
💭سکوت همه به صورت زمان دار

/channel [on | off]
💭روشن و خاموش کردن قفل کانال

/setchannel [@یوزرنیم کانال]
💭 قفل کردن ربات روی کانال تنظیم شد

/modebot [on | off]
💭 روشن و خاموش کردن حالت سختگیرانه اضافه کردن ربات

/modewarn [on | off]
💭 روشن و خاموش کردن حالت سختگیرانه اخراج کاربر پس از رسیدن به حداکثر اخطار

/delall
💭 پاکسازی پیام های اخیر گروه تا حد ممکن

➖➖➖
🔹برای دستورات انگلیسی ان هارو تایپ کنید و روی ان ها کلیک نکنید!

🔸در جای که علامت های [] وجود دارد در دستورات از ان ها استفاده نکنید

🔹میتوانید در متن خوش امد و قوانین برای گرفتن مشخصات از پارامتر های زیر استفاده کنید
gpname = دریافت نام گروه
username = دریافت یوزرنیم فرد
time = دریافت ساعت وتاریخ

✨مثال :
/setrules hi
➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'english']
					 ],
                     ]
               ])
           ]);
		   		 }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
				    elseif($data=="managefa"){
				 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 راهنمای دستورات مدیریتی :
➖➖➖➖➖
🔸پنل
💭دریافت پنل تنظیمات و پنل مدیریت گروه

🔹تنظیمات
💭دریافت تنظیمات گروه به صورت متنی

🔸ترفیع [ریپلای]
💭ادمین کرد فرد مورد نظر

🔹تنزل [ریپلای]
💭تنزل مقام فرد مورد نظر

🔸لیست ادمین
💭دریافت لیست ادمین های گروه

🔹سنجاق [ریپلای]
💭سنحاق کردن پیام مورد نظر توسط ربات

🔸حذف سنجاق
💭حذف سنجاق پیام سنجاق شده

🔹اخراج فرد
💭اخراج فرد مورد نظر از گروه

🔸حذف [ریپلای]
💭حذف پیام مورد نظر

🔹پاک کردن [1-300]
💭پاک کردن پیام های اخیر گروه

🔸تنظیم نام [نام]
💭تنظیم نام گروه

🔹تنظیم اطلاعات [متن]
💭تنظیم اطلاعات گروه

🔸حذف عکس
💭حذف عکس گروه

🔹تنظیم عکس [ریپلای]
💭تنظیم عکس گروه

🔸میزان شارژ
💭دریافت میزان شارژ گروه

🔹اتوماتیک فعال
💭فعال کردن قفل ها به صورت خودکار و مدیریت خود کار گروه

🔸بیصدا همه
💭ساکت کردن همه گروه

🔹باصدا همه
💭غیر فعال کردن سکوت گروه

🔸خوش امد [روشن - خاموش]
💭روشن . خاموش کردن خوش امد گویی گروه

🔹تنظیم خوش امد [متن]
💭تنظیم پیام خوش امد

🔸بیصدا
💭افزودن فرد به لیست سکوت گروه

🔹بیصدا [دقیقه]
💭افزودن فرد به لیست سکوت گروه به صورت زمان داره

🔸باصدا
💭خارج کردن فرد از لیست سکوت گروه

🔹لیست سکوت
💭دریافت لیست سکوت گروه

🔸حذف لیست سکوت
💭 پاک کردن لیست سکوت گروه

🔹درخواست شارژ
💭درخواست تمدید شارژ برای گروه

🔸افزودن فیلتر [کلمه]
💭افزودن کلمه به لیست کلمات فیلترشده

🔹حذف فیلتر [کلمه]
💭حذف کلمه از لیست کلمات فیلتر شده

🔸لیست فیلتر
💭دریافت لیست کلمات فیلتر شد

🔹حذف لیست فیلتر
💭پاک کردن تمام کلمات درون لیست فیلتر

🔸ریستارت تنظیمات
💭ریستارت کردن تنظیمات گروه به حالت اولیه

🔹دعوت [روشن | خاموش]
💭روشن و خاموش کردن اد اجباری در گروه

🔸تنظیم دعوت [عدد]
💭تنظیم مقدار کاربری که یک فرد باید دعوت کند تا بتواند در گروه چت کند

🔹تنظیم اخطار [عدد]
💭 تنظیم حداکثر اخطار برای کاربر

🔸اخطار [ریپلای]
💭اخطار دادن به کاربر مورد نظر

🔹حذف اخطار [ریپلای]
💭کم کردن اخطار های کاربر مورد نظر

🔸اطلاعات اخطار [ریپلای]
💭به دست اوردن تعداد اخطار های کاربر

🔹تنظیم قوانین [متن]
💭تنظیم قوانین گروه

🔸بیصدا همه [دقیقه]
💭سکوت همه به صورت زمان دار

🔹قفل کانال [روشن | خاموش]
💭روشن و خاموش کردن قفل کانال

🔸تنظیم کانال [@یوزرنیم کانال]
💭 قفل کردن ربات روی کانال تنظیم شد

🔹سختگیرانه ربات [روشن | خاموش]
💭 روشن و خاموش کردن حالت سختگیرانه اضافه کردن ربات

🔸سختگیرانه اخطار [روشن | خاموش]
💭 روشن و خاموش کردن حالت سختگیرانه اخراج کاربر پس از رسیدن به حداکثر اخطار

🔹پاکسازی کلی
💭 پاکسازی پیام های اخیر گروه تا حد ممکن

➖➖➖
🔹ایموجی های ابتدای دستورات را وارد نکنید

🔸در جای که علامت های [] وجود دارد در دستورات از ان ها استفاده نکنید

🔹میتوانید در متن خوش امد و قوانین برای گرفتن نام و ایدی فرد از موارد زیر استفاده کنید
gpname = دریافت نام گروه
username = دریافت یوزرنیم طرف

✨مثال :
/setrules hi
➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'farsi']
					 ],
                     ]
               ])
           ]);
		   		 }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
					}
					 elseif($data=="allen"){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,      'text'=>"📍 راهنمای دستورات عمومی :
➖➖➖➖➖➖➖➖

🛑مربوط به گروه:

🔸قوانین
💭دریافت قوانین گروه

🔹لینک
💭دریافت لینک گروه

🔸نرخ
💭دریافت نرخ برای خرید ربات

🔹انلاینی
💭اطمینان حاصل کردن از انلاینی ربات

💥ربات
☃️ اطمینان حاصل کردن از انلاینی ربات


🔹درخواست پشتیبانی
💭در صورت وجود مشکل با ارسال این دستور پشتیبانی به گروه شما اعزام میشود

🔸ریپورت [ریپلای]
💭ارسال گزارش برای مدیر گروه

🔹اخراج من
💭اخراج شما از گروه
➖➖➖➖➖➖➖➖
🛑مربوط به کاربر:
🔹ایدی
💭دریافت اطلاعات خودتان

🔸ایدی [ریپلای]
💭دریافت اطلاعات فرد

🔹من
💭دریافت اطلاعات شما به همراه مقام شما در ربات

🔹اطلاعات
💭دریافت اطلاعات گروه و خودتان

🔸اطلاعات فرد [ریپلای| ایدی]
💭دریافت اطلاعات فرد مورد نظر

🔹عکس پروفایل [عدد]
💭دریافت عکس پروفایل شما به عدد
➖➖➖➖➖➖➖➖

🛑کاربردی:
🔹 /tr [متن]
💭ترجمه متن به انگلیسی و فارسی

🔸 /music  [اسم خواننده]
💭یافتن موزیک

🔹 /film [اسم خواننده]
💭 یافتن موزیک ویدیو

🔸 /kanal [ایدی چنل]
💭 اطلاعات چنل

🔹 info [اسم کشور به انگلیسی]
💭 اطلاعات کشورها
➖➖➖➖➖➖➖➖
🛑تبدیلات عکس:

⭐️تبدیل به عکس
💥تبدیل استیکر به عکس

⭐️تبدیل به استیکر 
💥تبدیل عکس به استیکر 

⭐️استیکرشو
💥تبدیل پک و فایل به استیکر

⭐️پک شو
💥تبدیل عکس به پک

⭐️فایل شو
💥تبدیل استیکر به فایل

➖➖➖➖➖➖➖➖
🛑تبدیلات فیلم:

⭐️تبدیل به صوت
💥تبدیل فیلم به صوت

⭐️گیف شو
💥تبدیل فیلم به گیف
➖➖➖➖➖➖➖➖
🛑تبدیلات صوت

⭐️ویس شو
💥تبدیل اهنگ به ویس

⭐️اهنگ شو
💥تبدیل ویس به اهنگ
➖➖➖➖➖➖➖➖
🛑تبدیلات متن:

🌟گیف [متن به انگلیسی]
💥ارسال گیف های مربوط به متن

🌟 /gif [متن]
💥 تبدیل متن شما به گیف به صورت رندوم

🌟 /stic [متن]
💥 تبدیل متن شما به استیکر

🌟 /voice [متن]
💥تبدیل متن شما به صدا
➖➖➖➖➖➖➖➖
🛑سرگرمی:
✨ساعت
💭دریافت تاریخ و ساعت


✨بکنش  [اسم طرف]
💨فان

✨چه باحال
💨فان

✨zan  [اسم طرف]
💨نمایش زن آینده طرف

✨shohar  [اسم طرف]
💨نمایش شوهر آینده طرف
➖➖➖➖➖➖➖➖
🔹ایموجی های ابتدای دستورات را وارد نکنید

🔸در جایی که علامت های [] وجود دارد در دستورات از ان ها استفاده نکنید
🔹 به بزرگ و کوچکی حروف توی دستورات دقت کنید

✨مثال :
/setrules hi
zan ممد

>توجه کنید برخی دستورات فقط به ادمین گروه پاسخ داده میشود

☑️ @EliyaTM ☑️",
               'reply_markup'=>json_encode([
           'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'english']
					 ],
                     ]
               ])
           ]);
    }
						 elseif($data=="allfa"){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,      'text'=>"📍 راهنمای دستورات عمومی :
➖➖➖➖➖➖➖➖

🛑مربوط به گروه:

🔸قوانین
💭دریافت قوانین گروه

🔹لینک
💭دریافت لینک گروه

🔸نرخ
💭دریافت نرخ برای خرید ربات

🔹انلاینی
💭اطمینان حاصل کردن از انلاینی ربات

💥ربات
☃️ اطمینان حاصل کردن از انلاینی ربات


🔹درخواست پشتیبانی
💭در صورت وجود مشکل با ارسال این دستور پشتیبانی به گروه شما اعزام میشود

🔸ریپورت [ریپلای]
💭ارسال گزارش برای مدیر گروه

🔹اخراج من
💭اخراج شما از گروه
➖➖➖➖➖➖➖➖
🛑مربوط به کاربر:
🔹ایدی
💭دریافت اطلاعات خودتان

🔸ایدی [ریپلای]
💭دریافت اطلاعات فرد

🔹من
💭دریافت اطلاعات شما به همراه مقام شما در ربات

🔹اطلاعات
💭دریافت اطلاعات گروه و خودتان

🔸اطلاعات فرد [ریپلای| ایدی]
💭دریافت اطلاعات فرد مورد نظر

🔹عکس پروفایل [عدد]
💭دریافت عکس پروفایل شما به عدد
➖➖➖➖➖➖➖➖

🛑کاربردی:
🔹 /tr [متن]
💭ترجمه متن به انگلیسی و فارسی

🔸 /music  [اسم خواننده]
💭یافتن موزیک

🔹 /film [اسم خواننده]
💭 یافتن موزیک ویدیو

🔸 /kanal [ایدی چنل]
💭 اطلاعات چنل

🔹 info [اسم کشور به انگلیسی]
💭 اطلاعات کشورها
➖➖➖➖➖➖➖➖
🛑تبدیلات عکس:

⭐️تبدیل به عکس
💥تبدیل استیکر به عکس

⭐️تبدیل به استیکر 
💥تبدیل عکس به استیکر 

⭐️استیکرشو
💥تبدیل پک و فایل به استیکر

⭐️پک شو
💥تبدیل عکس به پک

⭐️فایل شو
💥تبدیل استیکر به فایل

➖➖➖➖➖➖➖➖
🛑تبدیلات فیلم:

⭐️تبدیل به صوت
💥تبدیل فیلم به صوت

⭐️گیف شو
💥تبدیل فیلم به گیف
➖➖➖➖➖➖➖➖
🛑تبدیلات صوت

⭐️ویس شو
💥تبدیل اهنگ به ویس

⭐️اهنگ شو
💥تبدیل ویس به اهنگ
➖➖➖➖➖➖➖➖
🛑تبدیلات متن:

??گیف [متن به انگلیسی]
💥ارسال گیف های مربوط به متن

🌟 /gif [متن]
💥 تبدیل متن شما به گیف به صورت رندوم

🌟 /stic [متن]
💥 تبدیل متن شما به استیکر

🌟 /voice [متن]
💥تبدیل متن شما به صدا
➖➖➖➖➖➖➖➖
🛑سرگرمی:
✨ساعت
💭دریافت تاریخ و ساعت


✨بکنش  [اسم طرف]
💨فان

✨چه باحال
💨فان

✨zan  [اسم طرف]
💨نمایش زن آینده طرف

✨shohar  [اسم طرف]
💨نمایش شوهر آینده طرف
➖➖➖➖➖➖➖➖
🔹ایموجی های ابتدای دستورات را وارد نکنید

🔸در جایی که علامت های [] وجود دارد در دستورات از ان ها استفاده نکنید
🔹 به بزرگ و کوچکی حروف توی دستورات دقت کنید

✨مثال :
/setrules hi
zan ممد

>توجه کنید برخی دستورات فقط به ادمین گروه پاسخ داده میشود

☑️ @EliyaTM ☑️",
               'reply_markup'=>json_encode([
                'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'farsi']
					 ],
                     ]
               ])
           ]);
    }	
				    elseif($data=="lockfa"){
				 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 راهنمای دستورات قفلی :
➖➖➖
📌پاک کردن لینک 
🔹قفل لینک
🔸بازکردن لینک
〰〰〰
📌پاک کرد هشتگ
🔹قفل تگ
🔸بازکردن تگ
〰〰〰
📌پاک کردن یوزرنیم
🔹قفل یوزرنیم
🔸بازکردن یوزرنیم
〰〰〰
📌پاک کردن متن
🔹قفل متن
🔸بازکردن متن
〰〰〰
📌پاک کردن ویرایش پیام
🔹قفل ویرایش
🔸بازکردن ویرایش
〰〰〰
📌پاک کردن ربات های مخرب
🔹قفل ربات
🔸بازکردن ربات
〰〰〰
📌پاک کردن کلمات رکیک
🔹قفل فحش
🔸بازکردن فحش
〰〰〰
📌پاک کردن تصاویر متحرک
🔹قفل گیف
🔸بازکردن گیف
〰〰〰
📌پاک کردن عکس
🔹قفل عکس
🔸بازکردن عکس
〰〰〰
📌پاک کردن فیلم
🔹قفل ویدیو
🔸بازکردن ویدیو
〰〰〰
📌پاک کردن اهنگ
🔹قفل اهنگ
🔸بازکردن اهنگ
〰〰〰
📌پاک کردن ویس
🔹قفل ویس
🔸بازکردن ویس
〰〰〰
📌پاک کردن استیکر
🔹قفل استیکر
🔸بازکردن استیکر
〰〰〰
📌پاک کردن ارسال مخاطب
🔹قفل مخاطب
🔸بازکردن مخاطب
〰〰〰
📌پاک کردن فوروارد
🔹قفل فوروارد
🔸بازکردن فوروارد
〰〰〰
📌پاک کردن ارسال مکان
🔹قفل مکان
🔸بازکردن مکان
〰〰〰
📌پاک کردن ارسال فایل
🔹قفل فایل
🔸بازکردن فایل
〰〰〰
📌پاک کردن بازی تحت وب
🔹قفل بازی
🔸بازکردن بازی
〰〰〰
📌پاک کردن پیام ویدیویی
🔹قفل پیام ویدیویی
🔸بازکردن پیام ویدیویی
〰〰〰
📌پاک کردن ریپلای کردن پیام
🔹قفل ریپلای
🔸بازکردن ریپلای
〰〰〰
📌جلو گیری از دستورات عمومی
🔹قفل دستورات
🔸بازکردن دستورات
〰〰〰
📌قفل خدمات تلگرام
🔹قفل خدمات
🔸بازکردن خدمات
〰〰〰
📌خاموش و روشن کردن قفل خودکار گروه
🔹قفل خودکار روشن
🔸قفل خودکار خاموش
❄️تنظیم قفل خودکار [زمان پایان زمان شروع] 
📍 زمان را باید با فرمت صحیح استفاده کنید مثال :
تنظیم قفل خودکار 13:36 19:05
〰〰〰
📌خاموش و روشن کردن و تنظیم کاراکتر پیام
🔹قفل کاراکتر
🔸بازکردن کاراکتر
❄️تنظیم کاراکتر [حداقل کاراکتر حداکثر کاراکتر]
📍 باید حتما به عدد وارد کنید مثال :
تنظیم کاراکتر 10 320

➖➖➖
🔹ایموجی های ابتدای دستورات را وارد نکنید

🔖بازکردن و قفل کردن هم از طریق پنل و هم از طریق دستور ممکن است

🔸مثال :
قفل لینک
بازکردن لینک
➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'farsi']
					 ],
                     ]
               ])
           ]);
		   		 }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
					}	
									    elseif($data=="locken"){
				 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 راهنمای دستورات قفلی :
➖➖➖➖➖

📌پاک کردن لینک 
/lock link
/unlock link
〰〰〰
📌پاک کرد هشتگ
/lock tag
/unlock tag
〰〰〰
📌پاک کردن یوزرنیم
/lock username
/unlock username
〰〰〰
📌پاک کردن متن
/lock text
/unlock text
〰〰〰
📌پاک کردن ویرایش پیام
/lock edit
/unlock edit
〰〰〰
📌پاک کردن ربات های مخرب
/lock bots
/unlock bots
〰〰〰
📌پاک کردن کلمات رکیک
/lock fosh
/unlock fosh
〰〰〰
📌پاک کردن تصاویر متحرک
/lock gif
/unlock gif
〰〰〰
📌پاک کردن عکس
/lock photo
/unlock photo
〰〰〰
📌پاک کردن فیلم
/lock video
/unlock video
〰〰〰
📌پاک کردن اهنگ
/lock audio
/unlock audio
〰〰〰
📌پاک کردن ویس
/lock voice
/unlock voice
〰〰〰
📌پاک کردن استیکر
/lock sticker
/unlock sticker
〰〰〰
📌پاک کردن ارسال مخاطب
/lock contact
/unlock contact
〰〰〰
📌پاک کردن فوروارد
/lock forward
/unlock forward
〰〰〰
📌پاک کردن ارسال مکان
/lock location
/unlock location
〰〰〰
📌پاک کردن ارسال فایل
/lock document
/unlock document
〰〰〰
📌پاک کردن بازی تحت وب
/lock game
/unlock game
〰〰〰
📌پاک کردن پیام ویدیویی
/lock videonote
/unlock videonote
〰〰〰
📌پاک کردن ریپلای کردن پیام
/lock reply
/unlock reply
〰〰〰
📌جلو گیری از دستورات عمومی
/lock cmd
/unlock cmd
〰〰〰
📌قفل خدمات تلگرام
/lock tgservic
/unlock tgservic
〰〰〰
📌خاموش و روشن کردن قفل خودکار گروه
/lock auto
/unlock auto
/setlockauto [زمان پایان زمان شروع]
📍 زمان را باید با فرمت صحیح استفاده کنید مثال :
/setlockauto 13:36 19:05
〰〰〰
📌خاموش و روشن کردن و تنظیم کاراکتر پیام
/lock character
/unlock character
/setlockcharacter [حداقل کاراکتر حداکثر کاراکتر]
📍 باید حتما به عدد وارد کنید مثال :
/setlockcharacter 10 320

➖➖➖
🔹برای دستورات انگلیسی ان هارو تایپ کنید و روی ان ها کلیک نکنید!

🔖بازکردن و قفل کردن هم از طریق پنل و هم از طریق دستور ممکن است

🔸مثال :
/lock link
/unlock link
➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'english']
					 ],
                     ]
               ])
           ]);
		   		 }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
					}
						 elseif($data=="sudohelpfa"){
				 if (in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 راهنمای دستورات سودو :
➖➖➖➖➖

🔸پنل مدیریت
💭دریافت پنل مدیریت ربات و ارسال پیام به گروه ها و ممبر ها

🔹مدیریت گروه ها
💭دریافت پنل مدیریت گروه های ربات

🔸ترک
💭خروج ربات از گروه

🔹حذف
💭حدف گروه از لیست گروه های پشتیبانی

🔸نصب
💭اضافه کردن گروه به لیست گروه های پشتیبانی

🔹تنظیم شارژ
💭تنظیم شارژ برای گروه مورد نظر

🔸ارسال شارژ [ایدی گروه]
💭فعال سازی شارژ برای گروه مورد نظر به مدت 30 روز

🔹ترک [ایدی گروه]
💭ترک ربات از گروه مورد نظر

🔸 مسدود همگانی [ایدی]
💭 مسدود کردن فرد هم از پیوی و هم از تمام گروه های ربات

🔹 ازاد همگانی [ایدی]
💭 خارج کردن فرد از لیست مسدودت همگانی

🔸 لیست مسدود همگانی
💭 مشاهده لیست مسدود همگانی ربات

➖➖➖
🔹ایموجی های ابتدای دستورات را وارد نکنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'farsi']
					 ],
                     ]
               ])
           ]);
		   		 }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما ادمین ربات نیستید ⚠️",
]);
    }
					}
							elseif($data=="sudohelpen"){
				 if (in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 راهنمای دستورات سودو :
➖➖➖➖➖

/panel admin
??دریافت پنل مدیریت ربات و ارسال پیام به گروه ها و ممبر ها

/panel group
💭دریافت پنل مدیریت گروه های ربات

/leave
💭خروج ربات از گروه

/rem
💭حدف گروه از لیست گروه های پشتیبانی

/add
💭اضافه کردن گروه به لیست گروه های پشتیبانی

/charge
💭تنظیم شارژ برای گروه مورد نظر

/sendcharge [ایدی گروه]
💭فعال سازی شارژ برای گروه مورد نظر به مدت 30 روز

/left [ایدی گروه]
💭ترک ربات از گروه مورد نظر

/banall [ایدی]
💭 مسدود کردن فرد هم از پیوی و هم از تمام گروه های ربات

/unbanall [ایدی]
💭 خارج کردن فرد از لیست مسدودت همگانی

/banlist
💭 مشاهده لیست مسدود همگانی ربات

➖➖➖
🔹برای دستورات انگلیسی ان هارو تایپ کنید و روی ان ها کلیک نکنید!

➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'english']
					 ],
                     ]
               ])
           ]);
		   		 }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما ادمین ربات نیستید ⚠️",
]);
    }
					}
  elseif($data=="helppanel"){
									 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🚩به راهنمای ربات مدیریت گروه خوش امدید
➖➖➖➖➖➖➖➖
🔖لطفا زبان مورد نظر برای دستورات را انتخاب کنید

💥در راهنما به نکات زیر توجه کنید

🔹🔸🔹🔸🔹🔸🔹🔸🔹🔸🔹

🔹برای دستورات انگلیسی ان هارو تایپ کنید و روی ان ها کلیک نکنید!

🔸در جای که علامت های [] وجود دارد در دستورات از ان ها استفاده نکنید
➖➖➖",
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=>"🇮🇷 فارسی",'callback_data'=>"farsipanel"],['text'=>"🇬🇧 انگلیسی",'callback_data'=>"englishpanel"]
	  ],
	  	  	 [
				 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'back']
		 ],
		      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
   ]
   ])
   ]);
   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
   } 
						}
   	    elseif($data=="englishpanel"){
					 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش دریافت دستورات انگلیسی خوش امدید❤️
➖➖➖➖➖➖➖➖
🔖لطفا بخش مورد نظر خورد را انتخاب کنید

➖➖➖➖

⚠️به نکات زیر توجه کنید :

🔹برای دیدن دستورات قفلی و مدیریتی شما باید حتما مدیر ربات باشید و کابران عادی اجازه ورود به این بخش را ندارند

💥دستورات عمومی برای همه کاربران است و همه اجازه استفاده از این دستورات را دارند

🎉دستورات صاحب ربات فقط برای سودو ربات هست و دیگر کاربران  اجازه ورود ندارند
➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				    	[
	  ['text'=>"🚦 عمومی",'callback_data'=>"allenpanel"],['text'=>"🔖 مدیریتی",'callback_data'=>"manageenpanel"]
	  ],
	  				    	[
	  ['text'=>"🔐 قفل ها",'callback_data'=>"lockenpanel"],['text'=>"🤦🏻‍♂ صاحب ربات",'callback_data'=>"sudohelpenpanel"]
	  ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'helppanel']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
		}
		    elseif($data=="farsipanel"){
						 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش دریافت دستورات فارسی خوش امدید❤️
➖➖➖➖➖➖➖➖
🔖لطفا بخش مورد نظر خورد را انتخاب کنید

➖➖➖➖

⚠️به نکات زیر توجه کنید :

🔹برای دیدن دستورات قفلی و مدیریتی شما باید حتما مدیر ربات باشید و کابران عادی اجازه ورود به این بخش را ندارند

💥دستورات عمومی برای همه کاربران است و همه اجازه استفاده از این دستورات را دارند

🎉دستورات صاحب ربات فقط برای سودو ربات هست و دیگر کاربران  اجازه ورود ندارند
➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				    	[
	  ['text'=>"🚦 عمومی",'callback_data'=>"allfapanel"],['text'=>"🔖 مدیریتی",'callback_data'=>"managefapanel"]
	  ],
	  				    	[
	  ['text'=>"🔐 قفل ها",'callback_data'=>"lockfapanel"],['text'=>"🤦🏻‍♂ صاحب ربات",'callback_data'=>"sudohelpfapanel"]
	  ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'helppanel']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
			}
			elseif($data=="manageenpanel"){
			 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 راهنمای دستورات مدیریتی :
➖➖➖➖➖

/panel
💭دریافت پنل تنظیمات و پنل مدیریت گروه

/settings
💭دریافت تنظیمات گروه به صورت متنی

/promote [ریپلای]
💭ادمین کرد فرد مورد نظر

/demote [ریپلای]
💭تنزل مقام فرد مورد نظر

/admin list 
💭دریافت لیست ادمین های گروه

/pin [ریپلای]
💭سنحاق کردن پیام مورد نظر توسط ربات

/unpin 
💭برداشتن پیام از حالت سنجاق

/kick [ریپلای | ایدی]
💭اخراج فرد مورد نظر از گروه

/del [ریپلای]
💭حذف پیام مورد نظر

/rmsg [1-300]
💭پاک کردن پیام های اخیر گروه

/setname [نام]
💭تنظیم نام گروه

/setdescription [متن]
💭تنظیم اطلاعات گروه

/delphoto 
💭حذف عکس گروه

/setphoto [ریپلای]
💭تنظیم عکس گروه

/check
💭دریافت میزان شارژ گروه

/automatic
💭فعال کردن قفل ها به صورت خودکار و مدیریت خود کار گروه

/mute all
💭ساکت کردن همه گروه

/unmute all
💭غیر فعال کردن سکوت گروه

/welcome [enable |disable]
💭روشن و خاموش کردن خوش امد

/setwelcome [متن]
💭تنظیم پیام خوش امد

/silent
💭افزودن فرد به لیست سکوت گروه

/silent [دقیقه]
💭افزودن فرد به لیست سکوت گروه به صورت زمان داره

/unsilent
💭خارج کردن فرد از لیست سکوت گروه

/list silent
💭دریافت لیست سکوت گروه

/clean silentlist
💭 پاک کردن لیست سکوت گروه

/request
💭درخواست تمدید شارژ برای گروه

/filter
💭افزودن کلمه به لیست کلمات فیلترشده

/unfilter
💭حذف کلمه از لیست کلمات فیلتر شده

/filterlist
💭دریافت لیست کلمات فیلتر شد

/clean filterlist
💭پاک کردن تمام کلمات درون لیست فیلتر

/restart settings
💭ریستارت کردن تنظیمات گروه به حالت اولیه

/add [on | off]
💭روشن و خاموش کردن اد اجباری در گروه

/setadd [عدد]
💭تنظیم مقدار کاربری که یک فرد باید دعوت کند تا بتواند در گروه چت کند

/setwarn [عدد]
💭 تنظیم حداکثر اخطار برای کاربر

/warn [ریپلای]
💭اخطار دادن به کاربر مورد نظر

/unwarn [ریپلای]
💭کم کردن اخطار های کاربر مورد نظر

/warn info [ریپلای]
💭به دست اوردن تعداد اخطار های کاربر

/setrules [متن]
💭تنظیم قوانین گروه

/muteall [دقیقه]
💭سکوت همه به صورت زمان دار

/channel [on | off]
💭روشن و خاموش کردن قفل کانال

/setchannel [@یوزرنیم کانال]
💭 قفل کردن ربات روی کانال تنظیم شد

/modebot [on | off]
💭 روشن و خاموش کردن حالت سختگیرانه اضافه کردن ربات

/modewarn [on | off]
💭 روشن و خاموش کردن حالت سختگیرانه اخراج کاربر پس از رسیدن به حداکثر اخطار

/delall
💭 پاکسازی پیام های اخیر گروه تا حد ممکن

➖➖➖
🔹برای دستورات انگلیسی ان هارو تایپ کنید و روی ان ها کلیک نکنید!

🔸در جای که علامت های [] وجود دارد در دستورات از ان ها استفاده نکنید

🔹میتوانید در متن خوش امد و قوانین برای گرفتن نام و ایدی فرد از موارد زیر استفاده کنید
gpname = دریافت نام گروه
username = دریافت یوزرنیم طرف

✨مثال :
/setrules hi
➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'englishpanel']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
				    elseif($data=="managefapanel"){
				 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 راهنمای دستورات مدیریتی :
➖➖➖➖➖
🔹پنل
💭دریافت پنل تنظیمات و پنل مدیریت گروه

🔸تنظیمات
💭دریافت تنظیمات گروه به صورت متنی

🔹ترفیع [ریپلای]
💭ادمین کرد فرد مورد نظر

🔸تنزل [ریپلای]
💭تنزل مقام فرد مورد نظر

🔹لیست ادمین [ریپلای]
💭دریافت لیست ادمین های گروه

🔸سنجاق [ریپلای]
💭سنحاق کردن پیام مورد نظر توسط ربات

🔹حذف سنجاق
💭حذف سنجاق پیام سنجاق شده

🔸پاک کردن [1-300]
💭پاک کردن پیام های اخیر گروه

🔹تنظیم نام [نام]
💭تنظیم نام گروه

🔸تنظیم اطلاعات [متن]
💭تنظیم اطلاعات گروه

🔹حذف عکس
💭حذف عکس گروه

🔸تنظیم عکس
💭تنظیم عکس گروه

🔹میزان شارژ
💭دریافت میزان شارژ گروه

🔸اتوماتیک فعال
💭فعال کردن قفل ها به صورت خودکار و مدیریت خود کار گروه

🔹بیصدا همه
💭ساکت کردن همه گروه

🔸باصدا همه
💭غیر فعال کردن سکوت گروه

🔹خوش امد روشن
💭روشن کردن خوش امد

🔸خوش امد خاموش
💭خاموش کردن خوش امد

🔹تنظیم خوش امد [متن]
💭تنظیم پیام خوش امد

🔸بیصدا
💭افزودن فرد به لیست سکوت گروه

🔹بیصدا [دقیقه]
💭افزودن فرد به لیست سکوت گروه به صورت زمان داره

🔸باصدا
💭خارج کردن فرد از لیست سکوت گروه

🔹لیست سکوت
💭دریافت لیست سکوت گروه

🔸حذف لیست سکوت
💭 پاک کردن لیست سکوت گروه

🔹درخواست شارژ
💭درخواست تمدید شارژ برای گروه

🔸افزودن فیلتر [کلمه]
💭افزودن کلمه به لیست کلمات فیلترشده

🔹حذف فیلتر [کلمه]
💭حذف کلمه از لیست کلمات فیلتر شده

🔸فیلتر لیست
💭دریافت لیست کلمات فیلتر شد

🔹حذف لیست فیلتر
💭پاک کردن تمام کلمات درون لیست فیلتر

🔸ریستارت تنظیمات
💭ریستارت کردن تنظیمات گروه به حالت اولیه

🔹ادد [روشن | خاموش]
💭روشن و خاموش کردن اد اجباری در گروه

🔸تنظیم دعوت [عدد]
💭تنظیم مقدار کاربری که یک فرد باید دعوت کند تا بتواند در گروه چت کند

🔸تنظیم اخطار [عدد]
💭 تنظیم حداکثر اخطار برای کاربر

🔹اخطار [ریپلای]
💭اخطار دادن به کاربر مورد نظر

🔸حذف اخطار [ریپلای]
💭کم کردن اخطار های کاربر مورد نظر

🔹اطلاعات اخطار [ریپلای]
💭به دست اوردن تعداد اخطار های کاربر

🔸تنظیم قوانین [متن]
💭تنظیم قوانین گروه

🔹بیصدا همه [دقیقه]
💭سکوت همه به صورت زمان دار

🔸قفل کانال [روشن | خاموش]
💭روشن و خاموش کردن قفل کانال

🔹تنظیم کانال [@یوزرنیم کانال]
💭 قفل کردن ربات روی کانال تنظیم شد

🔸سختگیرانه ربات [روشن | خاموش]
💭 روشن و خاموش کردن حالت سختگیرانه اضافه کردن ربات

🔹سختگیرانه اخطار [روشن | خاموش]
💭 روشن و خاموش کردن حالت سختگیرانه اخراج کاربر پس از رسیدن به حداکثر اخطار

🔸 پاکسازی کلی
💭 پاکسازی پیام های اخیر گروه تا حد ممکن

➖➖➖
🔹ایموجی های ابتدای دستورات را وارد نکنید

🔸در جای که علامت های [] وجود دارد در دستورات از ان ها استفاده نکنید

🔹میتوانید در متن خوش امد و قوانین برای گرفتن مشخصات از پارامتر های زیر استفاده کنید
gpname = دریافت نام گروه
username = دریافت یوزرنیم فرد
time = دریافت ساعت وتاریخ

✨مثال :
/setrules hi
➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'farsipanel']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
					}
					 elseif($data=="allenpanel"){
						 	 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,      'text'=>"📍 راهنمای دستورات عمومی :
➖➖➖➖➖➖➖➖

🛑مربوط به گروه:

🔸قوانین
💭دریافت قوانین گروه

🔹لینک
💭دریافت لینک گروه

🔸نرخ
💭دریافت نرخ برای خرید ربات

🔹انلاینی
💭اطمینان حاصل کردن از انلاینی ربات

💥ربات
☃️ اطمینان حاصل کردن از انلاینی ربات


🔹درخواست پشتیبانی
💭در صورت وجود مشکل با ارسال این دستور پشتیبانی به گروه شما اعزام میشود

🔸ریپورت [ریپلای]
💭ارسال گزارش برای مدیر گروه

🔹اخراج من
💭اخراج شما از گروه
➖➖➖➖➖➖➖➖
🛑مربوط به کاربر:
🔹ایدی
💭دریافت اطلاعات خودتان

🔸ایدی [ریپلای]
💭دریافت اطلاعات فرد

🔹من
💭دریافت اطلاعات شما به همراه مقام شما در ربات

🔹اطلاعات
💭دریافت اطلاعات گروه و خودتان

🔸اطلاعات فرد [ریپلای| ایدی]
💭دریافت اطلاعات فرد مورد نظر

🔹عکس پروفایل [عدد]
💭دریافت عکس پروفایل شما به عدد
➖➖➖➖➖➖➖➖

🛑کاربردی:
🔹 /tr [متن]
💭ترجمه متن به انگلیسی و فارسی

🔸 /music  [اسم خواننده]
💭یافتن موزیک

🔹 /film [اسم خواننده]
💭 یافتن موزیک ویدیو

🔸 /kanal [ایدی چنل]
💭 اطلاعات چنل

🔹 info [اسم کشور به انگلیسی]
💭 اطلاعات کشورها
➖➖➖➖➖➖➖➖
🛑تبدیلات عکس:

⭐️تبدیل به عکس
💥تبدیل استیکر به عکس

⭐️تبدیل به استیکر 
💥تبدیل عکس به استیکر 

⭐️استیکرشو
💥تبدیل پک و فایل به استیکر

⭐️پک شو
💥تبدیل عکس به پک

⭐️فایل شو
💥تبدیل استیکر به فایل

➖➖➖➖➖➖➖➖
🛑تبدیلات فیلم:

⭐️تبدیل به صوت
💥تبدیل فیلم به صوت

⭐️گیف شو
💥تبدیل فیلم به گیف
➖➖➖➖➖➖➖➖
🛑تبدیلات صوت

⭐️ویس شو
💥تبدیل اهنگ به ویس

⭐️اهنگ شو
💥تبدیل ویس به اهنگ
➖➖➖➖➖➖➖➖
🛑تبدیلات متن:

🌟گیف [متن به انگلیسی]
💥ارسال گیف های مربوط به متن

🌟 /gif [متن]
💥 تبدیل متن شما به گیف به صورت رندوم

🌟 /stic [متن]
💥 تبدیل متن شما به استیکر

🌟 /voice [متن]
💥تبدیل متن شما به صدا
➖➖➖➖➖➖➖➖
🛑سرگرمی:
✨ساعت
💭دریافت تاریخ و ساعت


✨بکنش  [اسم طرف]
💨فان

✨چه باحال
💨فان

✨zan  [اسم طرف]
💨نمایش زن آینده طرف

✨shohar  [اسم طرف]
💨نمایش شوهر آینده طرف
➖➖➖➖➖➖➖➖
🔹ایموجی های ابتدای دستورات را وارد نکنید

🔸در جایی که علامت های [] وجود دارد در دستورات از ان ها استفاده نکنید
🔹 به بزرگ و کوچکی حروف توی دستورات دقت کنید

✨مثال :
/setrules hi
zan ممد

>توجه کنید برخی دستورات فقط به ادمین گروه پاسخ داده میشود

☑️ @EliyaTM ☑️",
               'reply_markup'=>json_encode([
    
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'englishpanel']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
					 }
						 elseif($data=="allfapanel"){
							 	 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
          'text'=>"📍 راهنمای دستورات عمومی :
➖➖➖➖➖➖➖➖

🛑مربوط به گروه:

🔸قوانین
💭دریافت قوانین گروه

🔹لینک
💭دریافت لینک گروه

🔸نرخ
💭دریافت نرخ برای خرید ربات

🔹انلاینی
💭اطمینان حاصل کردن از انلاینی ربات

💥ربات
☃️ اطمینان حاصل کردن از انلاینی ربات


🔹درخواست پشتیبانی
💭در صورت وجود مشکل با ارسال این دستور پشتیبانی به گروه شما اعزام میشود

🔸ریپورت [ریپلای]
💭ارسال گزارش برای مدیر گروه

🔹اخراج من
💭اخراج شما از گروه
➖➖➖➖➖➖➖➖
🛑مربوط به کاربر:
🔹ایدی
💭دریافت اطلاعات خودتان

🔸ایدی [ریپلای]
💭دریافت اطلاعات فرد

🔹من
💭دریافت اطلاعات شما به همراه مقام شما در ربات

🔹اطلاعات
💭دریافت اطلاعات گروه و خودتان

🔸اطلاعات فرد [ریپلای| ایدی]
💭دریافت اطلاعات فرد مورد نظر

🔹عکس پروفایل [عدد]
💭دریافت عکس پروفایل شما به عدد
➖➖➖➖➖➖➖➖

🛑کاربردی:
🔹 /tr [متن]
💭ترجمه متن به انگلیسی و فارسی

🔸 /music  [اسم خواننده]
💭یافتن موزیک

🔹 /film [اسم خواننده]
💭 یافتن موزیک ویدیو

🔸 /kanal [ایدی چنل]
💭 اطلاعات چنل

🔹 info [اسم کشور به انگلیسی]
💭 اطلاعات کشورها
➖➖➖➖➖➖➖➖
🛑تبدیلات عکس:

⭐️تبدیل به عکس
💥تبدیل استیکر به عکس

⭐️تبدیل به استیکر 
💥تبدیل عکس به استیکر 

⭐️استیکرشو
💥تبدیل پک و فایل به استیکر

⭐️پک شو
💥تبدیل عکس به پک

⭐️فایل شو
💥تبدیل استیکر به فایل

➖➖➖➖➖➖➖➖
🛑تبدیلات فیلم:

⭐️تبدیل به صوت
💥تبدیل فیلم به صوت

⭐️گیف شو
💥تبدیل فیلم به گیف
➖➖➖➖➖➖➖➖
🛑تبدیلات صوت

⭐️ویس شو
💥تبدیل اهنگ به ویس

⭐️اهنگ شو
💥تبدیل ویس به اهنگ
➖➖➖➖➖➖➖➖
🛑تبدیلات متن:

🌟گیف [متن به انگلیسی]
💥ارسال گیف های مربوط به متن

🌟 /gif [متن]
💥 تبدیل متن شما به گیف به صورت رندوم

🌟 /stic [متن]
💥 تبدیل متن شما به استیکر

🌟 /voice [متن]
??تبدیل متن شما به صدا
➖➖➖➖➖➖➖➖
🛑سرگرمی:
✨ساعت
💭دریافت تاریخ و ساعت


✨بکنش  [اسم طرف]
💨فان

✨چه باحال
💨فان

✨zan  [اسم طرف]
💨نمایش زن آینده طرف

✨shohar  [اسم طرف]
💨نمایش شوهر آینده طرف
➖➖➖➖➖➖➖➖
🔹ایموجی های ابتدای دستورات را وارد نکنید

🔸در جایی که علامت های [] وجود دارد در دستورات از ان ها استفاده نکنید
🔹 به بزرگ و کوچکی حروف توی دستورات دقت کنید

✨مثال :
/setrules hi
zan ممد

>توجه کنید برخی دستورات فقط به ادمین گروه پاسخ داده میشود

☑️ @EliyaTM ☑️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'farsipanel']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }	
						 }
				    elseif($data=="lockfapanel"){
				 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 راهنمای دستورات قفلی :
➖➖➖
📌پاک کردن لینک 
🔹قفل لینک
🔸بازکردن لینک
〰〰〰
📌پاک کرد هشتگ
🔹قفل تگ
🔸بازکردن تگ
〰〰〰
📌پاک کردن یوزرنیم
🔹قفل یوزرنیم
🔸بازکردن یوزرنیم
〰〰〰
📌پاک کردن متن
🔹قفل متن
🔸بازکردن متن
〰〰〰
📌پاک کردن ویرایش پیام
🔹قفل ویرایش
🔸بازکردن ویرایش
〰〰〰
📌پاک کردن ربات های مخرب
🔹قفل ربات
🔸بازکردن ربات
〰〰〰
📌پاک کردن کلمات رکیک
🔹قفل فحش
🔸بازکردن فحش
〰〰〰
📌پاک کردن تصاویر متحرک
🔹قفل گیف
🔸بازکردن گیف
〰〰〰
📌پاک کردن عکس
🔹قفل عکس
🔸بازکردن عکس
〰〰〰
📌پاک کردن فیلم
🔹قفل ویدیو
🔸بازکردن ویدیو
〰〰〰
📌پاک کردن اهنگ
🔹قفل اهنگ
🔸بازکردن اهنگ
〰〰〰
📌پاک کردن ویس
🔹قفل ویس
🔸بازکردن ویس
〰〰〰
📌پاک کردن استیکر
🔹قفل استیکر
🔸بازکردن استیکر
〰〰〰
📌پاک کردن ارسال مخاطب
🔹قفل مخاطب
🔸بازکردن مخاطب
〰〰〰
📌پاک کردن فوروارد
🔹قفل فوروارد
🔸بازکردن فوروارد
〰〰〰
📌پاک کردن ارسال مکان
🔹قفل مکان
🔸بازکردن مکان
〰〰〰
📌پاک کردن ارسال فایل
🔹قفل فایل
🔸بازکردن فایل
〰〰〰
📌پاک کردن بازی تحت وب
🔹قفل بازی
🔸بازکردن بازی
〰〰〰
📌پاک کردن پیام ویدیویی
🔹قفل پیام ویدیویی
🔸بازکردن پیام ویدیویی
〰〰〰
📌پاک کردن ریپلای کردن پیام
🔹قفل ریپلای
🔸بازکردن ریپلای
〰〰〰
📌جلو گیری از دستورات عمومی
🔹قفل دستورات
🔸بازکردن دستورات
〰〰〰
📌قفل خدمات تلگرام
🔹قفل خدمات
🔸بازکردن خدمات
〰〰〰
📌خاموش و روشن کردن قفل خودکار گروه
🔹قفل خودکار روشن
🔸قفل خودکار خاموش
❄️تنظیم قفل خودکار [زمان پایان زمان شروع] 
📍 زمان را باید با فرمت صحیح استفاده کنید مثال :
تنظیم قفل خودکار 13:36 19:05
〰〰〰
📌خاموش و روشن کردن و تنظیم کاراکتر پیام
🔹قفل کاراکتر
🔸بازکردن کاراکتر
❄️تنظیم کاراکتر [حداقل کاراکتر حداکثر کاراکتر]
📍 باید حتما به عدد وارد کنید مثال :
تنظیم کاراکتر 10 320

➖➖➖
🔹ایموجی های ابتدای دستورات را وارد نکنید

🔖بازکردن و قفل کردن هم از طریق پنل و هم از طریق دستور ممکن است

🔸مثال :
قفل لینک
بازکردن لینک
➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'farsipanel']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
					}	
									    elseif($data=="lockenpanel"){
				 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 راهنمای دستورات قفلی :
➖➖➖➖➖

📌پاک کردن لینک 
/lock link
/unlock link
〰〰〰
📌پاک کرد هشتگ
/lock tag
/unlock tag
〰〰〰
📌پاک کردن یوزرنیم
/lock username
/unlock username
〰〰〰
📌پاک کردن متن
/lock text
/unlock text
〰〰〰
📌پاک کردن ویرایش پیام
/lock edit
/unlock edit
〰〰〰
📌پاک کردن ربات های مخرب
/lock bots
/unlock bots
〰〰〰
📌پاک کردن کلمات رکیک
/lock fosh
/unlock fosh
〰〰〰
📌پاک کردن تصاویر متحرک
/lock gif
/unlock gif
〰〰〰
📌پاک کردن عکس
/lock photo
/unlock photo
〰〰〰
📌پاک کردن فیلم
/lock video
/unlock video
〰〰〰
📌پاک کردن اهنگ
/lock audio
/unlock audio
〰〰〰
📌پاک کردن ویس
/lock voice
/unlock voice
〰〰〰
📌پاک کردن استیکر
/lock sticker
/unlock sticker
〰〰〰
📌پاک کردن ارسال مخاطب
/lock contact
/unlock contact
〰〰〰
📌پاک کردن فوروارد
/lock forward
/unlock forward
〰〰〰
📌پاک کردن ارسال مکان
/lock location
/unlock location
〰〰〰
📌پاک کردن ارسال فایل
/lock document
/unlock document
〰〰〰
📌پاک کردن بازی تحت وب
/lock game
/unlock game
〰〰〰
📌پاک کردن پیام ویدیویی
/lock videonote
/unlock videonote
〰〰〰
📌پاک کردن ریپلای کردن پیام
/lock reply
/unlock reply
〰〰〰
📌جلو گیری از دستورات عمومی
/lock cmd
/unlock cmd
〰〰〰
📌قفل خدمات تلگرام
/lock tgservic
/unlock tgservic
〰〰〰
📌خاموش و روشن کردن قفل خودکار گروه
/lock auto
/unlock auto
/setlockauto [زمان پایان زمان شروع]
📍 زمان را باید با فرمت صحیح استفاده کنید مثال :
/setlockauto 13:36 19:05
〰〰〰
📌خاموش و روشن کردن و تنظیم کاراکتر پیام
/lock character
/unlock character
/setlockcharacter [حداقل کاراکتر حداکثر کاراکتر]
📍 باید حتما به عدد وارد کنید مثال :
/setlockcharacter 10 320

➖➖➖
🔹برای دستورات انگلیسی ان هارو تایپ کنید و روی ان ها کلیک نکنید!

🔖بازکردن و قفل کردن هم از طریق پنل و هم از طریق دستور ممکن است

🔸مثال :
/lock link
/unlock link
➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'englishpanel']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
					}
						 elseif($data=="sudohelpfapanel"){
				 if (in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 راهنمای دستورات سودو :
➖➖➖➖➖

🔸پنل مدیریت
💭دریافت پنل مدیریت ربات و ارسال پیام به گروه ها و ممبر ها

🔹مدیریت گروه ها
💭دریافت پنل مدیریت گروه های ربات

🔸ترک
💭خروج ربات از گروه

🔹حذف
💭حدف گروه از لیست گروه های پشتیبانی

🔸نصب
💭اضافه کردن گروه به لیست گروه های پشتیبانی

🔹تنظیم شارژ
💭تنظیم شارژ برای گروه مورد نظر

🔸ارسال شارژ [ایدی گروه]
💭فعال سازی شارژ برای گروه مورد نظر به مدت 30 روز

🔹ترک [ایدی گروه]
💭ترک ربات از گروه مورد نظر

🔸 مسدود همگانی [ایدی]
💭 مسدود کردن فرد هم از پیوی و هم از تمام گروه های ربات

🔹 ازاد همگانی [ایدی]
💭 خارج کردن فرد از لیست مسدودت همگانی

🔸 لیست مسدود همگانی
💭 مشاهده لیست مسدود همگانی ربات

➖➖➖
🔹ایموجی های ابتدای دستورات را وارد نکنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'farsipanel']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما ادمین ربات نیستید ⚠️",
]);
    }
					}
							elseif($data=="sudohelpenpanel"){
				 if (in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 راهنمای دستورات سودو :
➖➖➖➖➖

/panel admin
💭دریافت پنل مدیریت ربات و ارسال پیام به گروه ها و ممبر ها

/panel group
💭دریافت پنل مدیریت گروه های ربات

/leave
💭خروج ربات از گروه

/rem
💭حدف گروه از لیست گروه های پشتیبانی

/add
💭اضافه کردن گروه به لیست گروه های پشتیبانی

/charge
💭تنظیم شارژ برای گروه مورد نظر

/sendcharge [ایدی گروه]
💭فعال سازی شارژ برای گروه مورد نظر به مدت 30 روز

/left [ایدی گروه]
💭ترک ربات از گروه مورد نظر

/banall [ایدی]
💭 مسدود کردن فرد هم از پیوی و هم از تمام گروه های ربات

/unbanall [ایدی]
💭 خارج کردن فرد از لیست مسدودت همگانی

/banlist
💭 مشاهده لیست مسدود همگانی ربات

➖➖➖
🔹برای دستورات انگلیسی ان هارو تایپ کنید و روی ان ها کلیک نکنید!

➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'englishpanel']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما ادمین ربات نیستید ⚠️",
]);
    }
					}



if($textmassage=="قفل الروابط" or $textmassage=="قفل روابط"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"👁‍🗨┇أهلا عزيزي  👮‍♀
📯┇تم قفل الروابط بنجاح
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["link"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الروابط" or $textmassage=="فتح روابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"👁‍🗨┇أهلا عزيزي  👮‍♀
📯┇تم فتح الروابط بنجاح
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["link"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// lock photo
elseif($textmassage=="قفل الصور" or $textmassage=="قفل صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {	
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل الصور بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["photo"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الصور" or $textmassage=="فتح صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح الصور بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["photo"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// gif
elseif($textmassage=="قفل المتحركة" or $textmassage=="قفل المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل المتحركة بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["gif"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح المتحركة" or $textmassage=="فتح المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح المتحركة بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["gif"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// document
elseif($textmassage=="قفل الملفات" or $textmassage=="قفل ملفات،"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل الملفات بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الملفات" or $textmassage=="فتح ملفات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح الملفات بنجاح 

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// video
elseif($textmassage=="قفل الفيديو" or $textmassage=="قفل فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل الفيديو بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الفيديو" or $textmassage=="فتح فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح الفيديو بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// edit
elseif($textmassage=="قفل التعديل" or $textmassage=="قفل تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل التعديل بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح التعديل" or $textmassage=="فتح تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح التعديل بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// game
elseif($textmassage=="قفل الالعاب" or $textmassage=="قفل العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم قفل الالعاب بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الالعاب" or $textmassage=="فتح العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم فتح الالعاب بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $settings["lock"]["game"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// location
elseif($textmassage=="قفل المواقع" or $textmassage=="قفل الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم قفل الموقع بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح المواقع" or $textmassage=="فتح الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم فتح الموقع بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// contact
elseif($textmassage=="قفل الجهات" or $textmassage=="قفل جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل الجهات بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الجهات" or $textmassage=="فتح جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح الجهات بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// tag
elseif($textmassage=="قفل التاك" or $textmassage=="قفل الهاشتاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل التاك بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح التاك" or $textmassage=="فتح الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح التاك بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// username 
elseif($textmassage=="قفل المعرفات" or $textmassage=="قفل اليوزرات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل المعرفات

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح المعرفات" or $textmassage=="فتح المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح المعرفات بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// audio
elseif($textmassage=="قفل الصوت" or $textmassage=="قفل البصمة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل الصوت بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الصوت" or $textmassage=="فتح صوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح الصوت بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
  
  

if($textmassage == "تفعيل الاشتراك الاجباري" or $textmassage == "/addyes" or $textmassage == "تفعيل الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم تفعيل الاشتراك الاجباري

✓",
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["lockchannel"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }   
}
elseif($textmassage == "/addno" or $textmassage == "تعطيل اشتراك اجباري" or $textmassage == "تعطيل الاشتراك الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم تفعيل الاشتراك الاجباري

✓",
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["lockchannel"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }   
}
elseif ( strpos($textmassage , 'وضع قناة ') !== false or strpos($textmassage , 'ضع القناة ') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = $num = str_replace(['ضع القناة ','وضع قناة'],'',$textmassage);
 Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم وضع القناة { $code } في قائمة الاشتراك الاجباري بنجاح

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setchannel"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }  
   if($textmassage=="م1" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
📮 ¦ اهلا بك في اوامر القفل
🔐 ¦ ڨفلٰ ‹› ڤتح » الامر
ٴ━━━━━━━━━━
🗯¦ قفل «» فتح •⊱ التعديل  ⊰•
🗯¦️ قفل «» فتح •⊱ البصمات ⊰•
🗯¦ قفل «» فتح •⊱ الــفيديو ⊰•
🗯¦ قفل «» فتح •⊱ الـصــور ⊰•
🗯¦ قفل «» فتح •⊱ الملصقات ⊰•
🗯¦ قفل «» فتح •⊱ المتحركه ⊰•
🗯¦ قفل «» فتح •⊱ الدردشه ⊰•
🗯¦ قفل «» فتح •⊱ الروابط ⊰•
🗯¦ قفل «» فتح •⊱ التاك ⊰•
🗯¦ قفل «» فتح •⊱ البوتات ⊰•
🗯¦ ️قفل «» فتح •⊱ المعرفات ⊰•
🗯¦ قفل «» فتح •⊱ البوتات بالطرد ⊰•
🗯¦ قفل «» فتح •⊱ الكلايش ⊰•
🗯¦️ قفل «» فتح •⊱ التكرار ⊰•
🗯¦ قفل «» فتح •⊱ التوجيه ⊰•
🗯¦ قفل «» فتح •⊱ العربية ⊰•
🗯¦ قفل «» فتح •⊱ الاجنبية ⊰•
🗯¦ قفل «» فتح •⊱ الرد ⊰•
🗯¦ قفل «» فتح •⊱ المواقع ⊰•
🗯¦ قفل «» فتح •⊱ العربية ⊰•
🗯¦ قفل «» فتح •⊱ الاشعارات ⊰•
🗯¦ قفل «» فتح •⊱ الجهات ⊰•
🗯¦ قفل «» فتح •⊱ الموسيقى ⊰•
🗯¦ قفل «» فتح •⊱ بصمة الفيديو ⊰•
🗯¦ قفل «» فتح •⊱ الــكـــل ⊰•
 ٴ━━━━━━━━━━
📯¦ مطور البوت @Alphp
",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}
   if($textmassage=="م2" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
🙋🏻‍♂¦ مرحبا بك عزيزي، 🍃
📮¦ في اوامــر الآعضاء
ٴ━━━━━━━━━━
🔘¦ عرض معلوماتك ↑↓
 ٴ━━━━━━━━━━
📬¦ ايدي
ٴ━━━━━━━━━━
🔘¦ اوآمر المجموعه ↑↓
 ٴ━━━━━━━━━━
⚜¦ الرابط – القوانين 
⚜¦ اطردني
⚜¦ تحذيراتي
 ٴ━━━━━━━━━━
📯¦ مطور البوت @Alphp
",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}
 
   if($textmassage=="م4" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
🙋🏻‍♂¦ اهلا بك عزيزي 🍃
📮¦ ڤي اوآمر الادمنيهۃ..
 ٴ━━━━━━━━━━
🗳¦ رفع مٰميز !
🗳¦ تنزيل مٰميز !
🗳¦ تثبيت !
 ٴ━━━━━━━━━━
📯¦ اوامر التفعيل و التعطيٰل ★
 ٴ━━━━━━━━━━
📌¦ تڤعيل – تعطيل – الترحيب !
📌¦ تڤعيل – تعطيل – الايدي !
📌¦ تڤعيل – تعطيل–  الردود !
 ٴ━━━━━━━━━━
🔘¦ اوآمر الوضَع ↑↓
 ٴ━━━━━━━━━━
💬¦ ضع توديع + التوديع
💬¦ ضع اسم + اسم المجموعة
💬¦ ضع قوانين + قوانين المجموعة
💬¦ ضع ترحيب + ترحيب المجموعة
💬¦ ضع وصف + وصف المجموعة
 ٴ━━━━━━━━━━
📯¦ مسح + الامر ادناه ↑↓
 ٴ━━━━━━━━━━
📤¦ مسح المكتومين ٭
📤¦ مسح المَميزين ٭
📤¦ مسح المڨيدين ٭
📤¦ مسح الممنوعات ٭
📤¦ مسح الادمنية ٭
📤¦ مسح المدراء ٭
 ٴ━━━━━━━━━━
⚔¦ لعرضَ القوائمہَ ↑↓
 ٴ━━━━━━━━━━
📨¦ قائمهۃ المنعَ «
📨¦ الڨوانين «
📨¦ الرابطہَ «
📨¦ المميزين «
📨¦ المڨيدين «
📨¦ المگتومين «
 ٴ━━━━━━━━━━
📯¦ مطور البوت @Alphp
",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}
if($textmassage == "مسح الادمنية" || $text == "مسح قائمه الادمنية"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
file_put_contents("data/admins/$chat_id/admins.txt","");
file_put_contents("data/admins/$chat_id/Cadmins.txt","");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🥠¦ تم حذف جميع الادمنية",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
         }
}}}
   if($textmassage=="م3" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
🙋🏻‍♂¦ اهلا بك عزيزي 🍃
📮¦ ڤي اوآمر الكتم والحظَر الخہ...
 ٴ━━━━━━━━━━
♦️¦ كتم » 
♦️¦ الغاء الكتم » 
♦️¦ تقيد » 
♦️¦ الغاء تقيد 
♦️¦ حظر » 
♦️¦ الغاء الحظر
♦️¦ طرد » 
♦️¦ تقييد لمدة + عدد الدقائق
- لتقييد العضو بالوقت
♦️¦ كتم لندة + عدد الدقائق
- لكتم العضو بالوقت
 ٴ━━━━━━━━━━
📯¦ مطور البوت @Alphp",
]);
}
}
}}
   if($textmassage=="م7" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
🙋🏻‍♂¦ اهلا بك عزيزي 🍃
📮¦ ڤي اوآمر الاضافية
 ٴ━━━━━━━━━━
 📲¦ قفل «» فتح •⊱ التوجيه بالتقييد ⊰•
🔗¦ قفل «» فتح •⊱ الروابط بالتقييد ⊰•
🔅¦ـ➖➖➖➖➖
📌¦ تفعيل «» تعطيل •⊱  الترحيب ⊰•
🗯¦ تفعيل «» تعطيل •⊱  الردود ⊰•
🗨¦ تفعيل «» تعطيل •⊱  الايدي ⊰•

ــــ ــــ ـــــ ــــ ــــ ــــ 
📯¦ مطور البوت @Alphp",
]);
}
}}}
   if($textmassage== "تفعيل الايدي" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تفعيل الايدي" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($textmassage== "تفعيل الايدي" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم تفعيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($textmassage== "تفعيل الايدي" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($textmassage== "تعطيل الايدي" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if ($status == 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المشرف](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if( in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المطور](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "تعطيل الايدي" ){
if( in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المدير](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($textmassage== "تعطيل الايدي" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم تعطيل الايدي
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($textmassage== "تعطيل الايدي" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($textmassage == "قفل التوجيه بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($textmassage== "قفل التوجيه بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($textmassage== "قفل التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($textmassage== "فتح التوجيه بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($textmassage== "فتح التوجيه بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح التوجيه بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($textmassage== "فتح التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($textmassage== "قفل الروابط بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($textmassage== "قفل الروابط بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم قفل الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مقفول️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($textmassage== "قفل الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($textmassage== "فتح الروابط بالتقييد" ){
if ($status == 'creator' and !in_array($from_id,$Dev) and !in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [المنشئ](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($textmassage== "فتح الروابط بالتقييد" ){
if( in_array($from_id,$useradmin) and !in_array($from_id,$getCCmember) and  !in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي [الادمن](tg://user?id=$from_id) 👷🏽
📡¦ تم فتح الروابط بالتقييد
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($textmassage== "فتح الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if( $status != 'creator' and $status != 'administrator' and !in_array($from_id,$Dev) and !in_array($from_id,$getCCmember) and !in_array($from_id,$useradmin) ){
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
   if($textmassage=="م5" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
🙋🏻‍♂¦ مرحبا بك عزيزي، 🍃
📮¦ في اوامــر المدراء 
 ٴ━━━━━━━━━━
📚¦ الآدمنيهۃ
📚¦ مسح الادمنيۃ
📚¦ مسح + العدد 
 ٴ━━━━━━━━━━
🔘¦ اوآمر الردود ↑↓
 ٴ━━━━━━━━━━
📨¦ اضف رد 
📨¦ حذف رد 
📨¦ قائمه الردود 
📨¦ مسح الردود 
ٴ━━━━━━━━━━
🔘¦ اوآمر تفعيل و التعطيل ↑↓
 ٴ━━━━━━━━━━
📬¦ تفعيل ‹› تعطيل » الايدي 
📬¦ تفعيل ‹› تعطيل » الردود  
📬¦ تفعيل ‹› تعطيل » الترحيب
 ٴ━━━━━━━━━━
⚜📯¦ مطور البوت @Alphp",
]);
}
}}}
   if($textmassage=="م6" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
🙋🏻‍♂¦ مرحبا بك عزيزي، 🍃
📮¦ في اوامــر المنڜئين'
 ٴ━━━━━━━━━━
📬¦ غادر !
📬¦ رفع مدير – تنزيل مدير !
📬¦ المدراء !
📬¦ مسح المدراء !
 ٴ━━━━━━━━━━
📯¦ مطور البوت @Alphp",
]);
}
}}}
      if($textmassage=="م7" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
	$locklink = $settings["lock"]["link"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockcmd = $settings["lock"]["cmd"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$bye = $settings["information"]["bye"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
  - هذه حالة الحماية في الجروب ، 👇
  
🎗》🔒الروابط
 : $locklink
🎗》🔒التاك
 : $locktag
🎗》🔒المعرفات
 : $lockusername
🎗》🔒التعديل
 : $lockedit
🎗》🔒السيئات
 : $lockfosh
🎗》🔒البوتات
 : $lockbots
🎗》🔒التوجيه 
: $lockforward
🎗》🔒خدمات التلجرام
  $locktg
🎗》🔒الرد : 
$lockreply
🎗》🔒الاوامر االعامة :
 $lockcmd
➖➖➖➖
📂قفل الاوامر :

🎗》🔒الملفات : 
$lockdocument
🎗》🔒المتحركة 
: $lockgif
🎗》🔒تسجيل الفيديو 
: $lockvideo_note
🎗》🔒الموقع
 : $locklocation
🎗》🔒الصور : 
$lockphoto
🎗》🔒ارسال الارقام 
: $lockcontact
🎗》🔒الموسيقى / الصوت :
 $lockaudio
🎗》🔒البصمة : 
$lockvoice
🎗》🔒الملصقات 
: $locksticker
🎗》🔒الالعاب 
: $lockgame
🎗》🔒الفيديو :
 $lockvideo
🎗》🔒الدردشة 
: $locktext
➖➖➖
- لـ الاستفسار راسلنا ~> @Alphp",
]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }  
if($textmassage=="م8" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"- اهلا بك ياعزيزي في قسم اعدادات اضافة البوتات ، 👮
  - يمكنك اختيار عقوبة من يضيف بوتات كالكتم والطرد ، ✅",
        'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"- دخول الاعدادات ، 🤖",'callback_data'=>'hardmode']
   ],
                     ]
               ])
	]);
	}
	}
	}
	}
					elseif($data=="lockchannel"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$add = $settings2["information"]["lockchannel"];
$setadd = $settings2["information"]["setchannel"];
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤هذه اعدادات تحكم الاشتراك الاجباري لقناتك في الجروب ، ✅ •",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"📣  حالة القناة",'callback_data'=>'text'],['text'=>"$add",'callback_data'=>'channellock']
					 ],
					 [
					 ['text'=>"📢  تم ضبط االقناة",'callback_data'=>'text'],['text'=>"$setadd",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"🔔 اضافة قناتك",'callback_data'=>'setchannel']
					 ],
					 [
					 ['text'=>"📢 تابع جديدنا 📢",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
$settings2["information"]["step"]="none";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"⚠️ عذا انت لست ادمن",
]);
	}
		  }
		elseif($data=="channellock" && $settings2["information"]["lockchannel"] == "✅ مقفول ✅"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setchannel"];
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤هذه اعدادات تحكم الاشتراك الاجباري لقناتك في الجروب ، ✅ •",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"📣  حالة القناة",'callback_data'=>'text'],['text'=>"☑️ معطل ☑️",'callback_data'=>'channellock']
					 ],
 [
					 ['text'=>"📢  تم ضبط االقناة",'callback_data'=>'text'],['text'=>"$setadd",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"🔔 اضافة قناتك",'callback_data'=>'setchannel']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
$settings2["information"]["lockchannel"]="☑️ معطل ☑️";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
	}
		  }
		  		elseif($data=="channellock" && $settings2["information"]["lockchannel"] == "☑️ معطل ☑️"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setchannel"];
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤هذه اعدادات تحكم الاشتراك الاجباري لقناتك في الجروب ، ✅ •",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"📣  حالة القناة",'callback_data'=>'text'],['text'=>"✅ مقفول ✅",'callback_data'=>'channellock']
					 ],
 [
					 ['text'=>"📢  تم ضبط االقناة",'callback_data'=>'text'],['text'=>"$setadd",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"🔔 اضافة قناتك",'callback_data'=>'setchannel']
					 ],
					 [
					 ['text'=>"C3D3D",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
$settings2["information"]["lockchannel"]="✅ مقفول ✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"⚠️ عذا انت لست ادمن",
]);
	}
		  }
		  		  		elseif($data=="setchannel"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤قم بارسال معرف قناتك مثل { @C3D3D } وتاكد من ان البوت ادمن في القناة لكي يتم التفعيل بشكل صحيح ، ✅

✓",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
					 [
					 ['text'=>"🔙 رجوع",'callback_data'=>'lockchannel']
					 ],
                     ]
               ])
	]);
$settings2["information"]["step"]="setchannel";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"⚠️ عذا انت لست ادمن",
]);
	}
		  }
// lock auto cmd 
if($textmassage=="قفل الي" or $textmassage=="تفعيل القفل الالي"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┇تم تفعيل القفل الالي",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockauto"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الي" or $textmassage=="تعطيل القفل الالي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┇تم تعطيل القفل الالي",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockauto"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif (strpos($textmassage , "قفل الي") !== false or strpos($textmassage , "قفل الالي") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$num = str_replace(['قفل الي','قفل الالي'],'',$textmassage);
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
date_default_timezone_set('Asia/baghdad');
$date1 = date("H:i:s");
$startlock = date("H:i:s");
$endlock = $te[1];
			  Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم قفل الكل ، ✅

- الوقت الان ، 02:25:23 🕑 •
- وقت فتح الكل ، 02:28:23 🕒 •

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["timelock"]="$startlock";
$settings["information"]["timeunlock"]="$endlock";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}


if($textmassage=="قفل الصوت" or $textmassage=="قفل البصمة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل الصوت بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الصوت" or $textmassage=="فتح البصمة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح الصوت بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// sticker
elseif($textmassage=="قفل الملصقات" or $textmassage=="قفل ملصقات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل الملصقات بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الملصقات" or $textmassage=="فتح ملصقات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح الملصقات بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// forward
elseif($textmassage=="قفل التوجيه" or $textmassage=="قفل التوجية"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل التوجية بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح التوجيه" or $textmassage=="فتح التوجية"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح التوجيه بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// fosh
elseif($textmassage=="قفل السيئات" or $textmassage=="قفل الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم ققل الكلمات الممنوعة بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح السيئات" or $textmassage=="فتح الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم فتح الكلمات الممنوعة بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// muteall
elseif($textmassage=="قفل كل"  or $textmassage=="mute all" or $textmassage=="قفل الكل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل الكل بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mute_all"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح كل"  or $textmassage=="unmute all" or $textmassage=="فتح الكل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح الكل بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mute_all"]="☑️ معطل ☑️";
$settings["lock"]["mute_all_time"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// muteall time
elseif (strpos($textmassage , "قفل المجموعه") !== false or strpos($textmassage , "قفل المجموعه") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
	$num = str_replace(['قفل المجموعه'],'',$textmassage);
	$add = $settings["information"]["added"];
if ($add == true) {
	if ($num <= 100000 && $num >= 1){
		date_default_timezone_set('Asia/Damascus');
        $date1 = date("h:i:s");
        $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
        $next_date = date('h:i:s', strtotime($date2 ."+$num Minutes"));
			  Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم قفل المجموعه لمدة $num دقيقة ✅ •

- الوقت الان ، $date1 🕑 •
- وقت فتح المجموعه ، $next_date 🕒 •

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["mute_all_time"]="$next_date";
$settings["lock"]["mute_all_time"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
   }else{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"خطا ⚠️
➖➖➖➖➖➖
- تستطيع فقط الاختيار من دقيقة الى 1000 دقيقة ، ❌ •
$date1
$nextdata",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// farsi
if($textmassage=="قفل الدردشة" or $textmassage=="قفل الدردشه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل الدردشة بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الدردشة" or $textmassage=="فتح الدردشه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح الدردشة بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// cmd
elseif($textmassage=="قفل الادارة" or $textmassage=="قفل الاوامر العامة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم قفل الاوامر العامة بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["cmd"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الادارة" or $textmassage=="فتح الاوامر العامة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم فتح الاوامر العامة بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["cmd"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// replay
elseif($textmassage=="قفل الرد" or $textmassage=="قفل رد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل الرد بنجاح 

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["reply"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الرد" or $textmassage=="فتح رد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح الرد بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["reply"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// tgservic
elseif($textmassage=="قفل الخدمات" or $textmassage=="قفل خدمات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم ققل الخدمات بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الخدمات" or $textmassage=="بازکردن خدمات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم فتح الخدمات بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// video note
elseif($textmassage=="قفل الفيديو نوت" or $textmassage=="قفل تسجيل فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم ققل تسجيل الفيديو بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الفيديو نوت" or $textmassage=="فتح تسجيل فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم فتح تسجيل الفيديو بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// lock bots
elseif ($textmassage == "قفل البوتات" or $textmassage == "قفل بوتات" or $textmassage == "قفل البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل البوتات بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif ($textmassage == "فتح البوتات" or $textmassage == "فتح بوتات"  or $textmassage == "فتح البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح البوتات بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}









//♥

if($settings["lock"]["link"] == "✅ مقفول ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if (strstr($textmassage,"t.me") == true or strstr($textmassage,"telegram.me") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// lock photo
if($settings["lock"]["photo"] == "✅ مقفول ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->photo){  
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// gif
if($settings["lock"]["gif"] == "✅ مقفول ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->document){  
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// document
if($settings["lock"]["document"] == "✅ مقفول ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->document){  
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// video
if($settings["lock"]["video"] == "✅ مقفول ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->video){  
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// edit 
if($editgetsettings["lock"]["edit"] == "✅ مقفول ✅"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev){
if ($update->edited_message->text){  
Mostafa('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
  }
}
}
// contact
if ($settings["lock"]["contact"] == "✅ مقفول ✅"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}

// tag
if ($settings["lock"]["tag"] == "✅ مقفول ✅"){
if (strstr($textmassage,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}// username 
if ($settings["lock"]["username"] == "✅ مقفول ✅"){
if (strstr($textmassage,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// audio
if ($settings["lock"]["audio"] == "✅ مقفول ✅"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// voice 
if ($settings["lock"]["voice"] == "✅ مقفول ✅"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}


if($settings["lock"]["bot"] == "✅ مقفول ✅"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "☑️ معطل ☑️"){
 Mostafa('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
  }
else
{
 Mostafa('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
   Mostafa('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$from_id
  ]);
}
}
}
// sticker
if ($settings["lock"]["sticker"] == "✅ مقفول ✅"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// forward
if ($settings["lock"]["forward"] == "✅ مقفول ✅"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// fosh 
if ($settings["lock"]["fosh"] == "✅ مقفول ✅"){
if (strstr($textmassage,"كس") == true  or strstr($textmassage,"ذب") == true or strstr($textmassage,"اير") == true  or  strstr($textmassage,"شرموطة") == true   or strstr($textmassage,"الاسد") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// muteall
if ($settings["lock"]["mute_all"] == "✅ مقفول ✅"){
if($update->message){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
// muteall time
if ($settings["lock"]["mute_all_time"] == "✅ مقفول ✅"){
$locktime = $settings["information"]["mute_all_time"];
date_default_timezone_set('Asia/Damascus');
$date1 = date("h:i:s");
if($date1 < $locktime){
if($update->message){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
else
{
$settings["lock"]["mute_all_time"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
// replay
if ($settings["lock"]["reply"] == "✅ مقفول ✅"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// tg
if ($settings["lock"]["tgservic"] == "✅ مقفول ✅"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// text
if ($settings["lock"]["text"] == "✅ مقفول ✅"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// video note
if ($settings["lock"]["video_msg"] == "✅ مقفول ✅"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ) {
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}



if($settings["information"]["add"] == "✅ مقفول ✅") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if($settings["information"]["add"] == "✅ مقفول ✅"){
if ($status != "creator" && $status != "administrator" && !in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$youadding = $settings["addlist"]["$from_id"]["add"];
$setadd = $settings["information"]["setadd"];
$addtext = $settings["addlist"]["$from_id"]["addtext"];
$msg = $settings["information"]["lastmsgadd"];
            if($youadding < $setadd){
			if($addtext == false){
            Mostafa('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"⚠️￤المعذرة ، يا @$username •
🗣￤عليك اولا باضافة {$setadd} عضو
💬￤لكي تتمكن من الدردشة ، ✅ •

✓",
            ]);
            Mostafa('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            Mostafa('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsgadd"]="$msgplus";
$settings["addlist"]["$from_id"]["addtext"]="true";
$settings["addlist"]["$from_id"]["add"]=0;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              Mostafa('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}
//  game
if($settings["lock"]["game"] == "✅ مقفول ✅"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// location
if ($settings["lock"]["location"] == "✅ مقفول ✅"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// filter
if($settings["filterlist"] != false){
if ($status != 'creator' && $status != 'administrator' ) {
$check = check_filter("$textmassage");
if ($check == true) {
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
}
}
}
// setrules
if($settings["information"]["step"] == "setrules"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$textmassage");
if($plus < 600) {
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم بنجاح وضع قوانين للجروب

✓",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["rules"]="$textmassage";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لقد ارسلت رسالة تحتوي600 حرف لٱ يمكنك ارسال اكثر م̷ـــِْن 600 حرف",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
// lock channel 
if($settings["information"]["lockchannel"] == "✅ مقفول ✅"){
if ($status != "creator" && $status != "administrator" && !in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$usernamechannel = $settings["information"]["setchannel"];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$usernamechannel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
$msg = $settings["information"]["lastmsglockchannel"];
$channeltext = $settings["channellist"]["$from_id"]["channeltext"];
			if($channeltext == false){
            Mostafa('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"⚠️￤المعذرة ، يا @$username •
🗣￤عليك اولا الاشتراك بـ { $usernamechannel } 
💬￤لكي تتمكن من الدردشة ، ✅ •

✓",
            ]);
            Mostafa('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            Mostafa('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsglockchannel"]="$msgplus";
$settings["channellist"]["$from_id"]["channeltext"]="true";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              Mostafa('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}
if($settings["information"]["step"] == "setchannel"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){
if(strpos($textmassage , '@') !== false) {
$plus = mb_strlen("$textmassage");
if($plus < 25) {
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم وضع القناة { $textmassage } في قائمة الاشتراك الاجباري بنجاح

✓",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["setchannel"]="$textmassage";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍خطا المعرف غير مَسمَـَّوُوُح به",
  'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
					 [
					 ['text'=>"🔙 رجوع",'callback_data'=>'lockchannel']
					 ],
                     ]
               ])
 ]);
}
}
else
{
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 📍 خطأ يجب ان تضع @ للمعرف  
	 مثال • @$channel •√",
  'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
					 [
					 ['text'=>"🔙 رجوع",'callback_data'=>'lockchannel']
					 ],
                     ]
               ])
 ]);
}
}
}
}
// setwelcome
if($settings["information"]["step"] == "setwelcome"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$textmassage");
if($plus < 200) {
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم وضع الترحيب بنجاح

✓",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["textwelcome"]="$textmassage";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 خطا ! النص كبير جدا يرجى تقليل م̷ـــِْن الكلمات",
  'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
					 [
					 ['text'=>"🔙 رجوع",'callback_data'=>'welcome']
					 ],
                     ]
               ])
 ]);
}
}
}
}
// banall
elseif ($tc == 'private'){ 
if(in_array($from_id, $user["banlist"])) {
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🛑 لقد تم حظرك م̷ـــِْن البوت

❇️ ارجو ان لٱ تقوم بارسال رسالة اخرى",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
]);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){ 
if(in_array($from_id, $user["banlist"])) {
		Mostafa('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
      ]);
}
}
// sup
if($user["userjop"]["$from_id"]["file"] == "sup"&& $tc == "private"){   
if ($textmassage != "🔙 رجوع") {	
Mostafa('ForwardMessage',[
'chat_id'=>$Dev[0],
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
			Mostafa('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"✔️ تم ارسال اقتراحك شكرا لك",
	]);	
	}
	}


mkdir('data/rd');
$TM1 = json_decode(file_get_contents('data/rd/'.$chat_id.'.json'),true);
$new = file_get_contents("new.txt");
$frr = file_get_contents("frr.txt");
$i = 0;
foreach($TM1 as $TM2 => $TM3){
if($textmassage == $TM2){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$TM1[$TM2],
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
if($textmassage == "الردود"){
if($TM1[$TM2] != null){
$i++;
file_put_contents("data/rd/$chat_id.txt","$i - $TM2 => $TM1[$TM2]\n",FILE_APPEND);
}
}
}
//الردود
if($textmassage == "اضف رد"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
file_put_contents("f.txt", "");
file_put_contents("f1.txt", "");
file_put_contents("new.txt", "1");
file_put_contents("frr.txt","$from_id");
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
'reply_to_message_id'=>$msg,
]);
}}
if($textmassage and $new == "1" and $frr == $from_id){
file_put_contents("f1.txt", "$text");
Mostafa("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛",
'reply_to_message_id'=>$msg,
]);
file_put_contents("new.txt", "2");
}
if($textmassage and $new == "2" and $frr == $from_id){
file_put_contents("f.txt", "$textmassage");
Mostafa("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
✓ تم اضافة الرد 🚀 
-",
'reply_to_message_id'=>$msg,
]);
$tx = file_get_contents("f.txt");
$txt = "$tx";
$txt1 = file_get_contents("f1.txt");
$TM1[$txt1] = $txt; file_put_contents('data/rd/'.$chat_id.'.json',json_encode($TM1,128|64|256));
unlink("new.txt");
unlink("f.txt");
unlink("f1.txt");
unlink("frr.txt");
}
if($textmassage == "حذف رد" ){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
file_put_contents("new.txt", "3");
file_put_contents("frr.txt","$from_id");
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
'reply_to_message_id'=>$msg,
            'message_id'=>$message_id
]);
}}
if($textmassage and $new == "3" and $frr == $from_id){
Mostafa("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم حذف الرد بنجاح.😭",
'reply_to_message_id'=>$msg,
]);
unlink("frr.txt");
unlink("new.txt");
 $TM1[$text] = null; file_put_contents('data/rd/'.$chat_id.'.json',json_encode($TM1));
}
$hiii = file_get_contents("data/rd/$chat_id.txt");
if($textmassage == "الردود"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>$hiii,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
unlink("data/rd/$chat_id.txt");
}}



if($textmassage=="/panel admin" or $textmassage=="م المطور" or $textmassage=="🔙  رجوع"){

if (in_array($from_id,$Dev)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🚦اهلا بك عزيزي المطور في لوحة التحكم 
➖➖➖➖
قم بإختيار احد الاوامر لتنفيذها✅",
         'reply_to_message_id'=>$message_id,
	  'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"👥 اعدادات المجموعات"],['text'=>"💥 الاحصائيات"]
	],
 	[
	  	['text'=>"📌 توجية كروبات"],['text'=>"📍 توجية مستخدم"]
	  ],
	  	  	 [
		['text'=>"🔅 نشر كروبات"],['text'=>"👤 نشر مستخدم"]                            
		 ],
		 	  	  	 [
					 ['text'=>"🔙 رجوع"]                            
		 ],
   ],
      'resize_keyboard'=>true
   ])
 ]);
}

}
$SAIED = file_get_contents("SAIED.txt");
$SAIED0 = file_get_contents("SAIED0.txt");
$SAIED1= file_get_contents("SAIED1.txt");
$SAIED5 = file_get_contents("SAIED2.txt");
$SAIED6 = file_get_contents("SAIED3.txt");
$SAIED20 = json_decode(file_get_contents('php://input'));
$SAIED18 = $update->message;
$SAIED13 = $SAIED18->chat->id;
$SAIED17 = $SAIED18->text;
$SAIED19 = $SAIED20->callback_query->data;
$SAIED12 = $SAIED20->callback_query->message->chat->id;
$SAIED14 =  $SAIED20->callback_query->message->message_id;
$SAIED15 = $SAIED18->from->first_name;
$SAIED16 = $SAIED18->from->username;
$SAIED11 = $SAIED18->from->id;
$SAIED2 = explode("\n",file_get_contents("SAIED4.txt"));
$SAIED3 = count($SAIED2)-1;
if ($SAIED18 && !in_array($SAIED11, $SAIED2)) {
    file_put_contents("SAIED4.txt", $SAIED11."\n",FILE_APPEND);
  }
elseif($textmassage=="/er" or $textmassage=="/Er" or $textmassage=="er"){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
	          Mostafa('sendMessage',[
              'chat_id'=>$chat_id,
'text'=>"🌿┇اهلا عزيزي ، 👨‍✈️ 
- ارسل قم باختيار ماتريد",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"اسم للبوت",'callback_data'=>'SAIED0'],['text'=>"معرف لي",'callback_data'=>'SAIED2']
					 ],
					[
					 ['text'=>"",'callback_data'=>'koali']
					 ],
                     ]
               ])
           ]);
}
}
}
if($SAIED19 == "SAIED0"){
Mostafa('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- ارسل اسم للبوت الان Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]
])
]);
file_put_contents("SAIED.txt","SAIED0");
}
if($SAIED17 and $SAIED == "SAIED0" and $SAIED11 == $Dev){
Mostafa("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'تم حفظ اسم للبوت بنجاح',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED0.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED2"){
Mostafa('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'ارسل معرف للمطور',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED1");
}
if($SAIED17 and $SAIED == "SAIED1" and $SAIED11 == $Dev){
Mostafa("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم حفظ معرف المطور بنجاح',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED1.txt","$SAIED17");
unlink("SAIED.txt");
}
elseif($textmassage=="👥 اعدادات المجموعات" or $textmassage=="اعدادات المجموعات" or $textmassage=="اعدادات مجموعات"){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🚦اهلا بك عزيزي المطور في قسم اعدادات المجموعات
➖➖➖➖
 قم بإختيار احد الاوامر✅",
         'reply_to_message_id'=>$message_id,
	  'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"📜 عرض المجموعات"],['text'=>"❗️ حظر مجموعة"]
	],
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
}
}
}
elseif($textmassage=="📜 عرض المجموعات" ){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
	Mostafa('senddocument',[
	'chat_id'=>$chat_id,
	'document'=>new CURLFile("data/group.txt"),
	'caption'=>"🚥 قائمة المجموعات هي",
	'reply_to_message_id'=>$message_id,
	]);
}
}
}
elseif($textmassage=="❗️ حظر مجموعة" ){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📍┇ عزيزي المطور لحظر المجموعة يمكنك حظرها عن طريق
➖➖➖
/left + ايدي المجموعة
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

غادر + ايدي المجموعة
➖➖➖➖
مثال : left -1001073837688/",
'reply_to_message_id'=>$message_id,
 ]);
}
}
}
elseif(strpos($textmassage , "غادر" ) !== false or strpos($textmassage , "/left " ) !== false) {
$text = str_replace(['/left ','غادر'],'',$textmassage);
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🤖ربات از گروه با ایدی :

$text

خارج شد ✅",
  ]);
Mostafa('LeaveChat',[
  'chat_id'=>$text,
  ]);
unlink("data/$text.json");
}
}
}
elseif($textmassage=="💥 الاحصائيات"){
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
				Mostafa('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"🤖 الاحصائيات هي :

👥 عدد المجموعات: $group

👤 عدد المستخدمين: $users
",
                'hide_keyboard'=>true,
		]);
		}
elseif ($textmassage == '👤 نشر مستخدم' && in_array($from_id,$Dev)) {
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"قم بإرسال رسالتك 🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="senduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($textmassage == '🔅 نشر كروبات' && in_array($from_id,$Dev)) {
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"ارسل رسالتك لنشرها في مجموعات 🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="sendgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($textmassage == '📌 توجية كروبات' && in_array($from_id,$Dev)) {
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"قم بتوجيه رسالتك لنشرها في المجموعات 🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="forwardgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($textmassage == '📍 توجية مستخدم' && in_array($from_id,$Dev)) {
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"قم بتوجيه رسالتك لنشرها للمستخدمين 🚀",
				  'reply_to_message_id'=>$message_id,
				   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
    		]);
$user["userjop"]["$from_id"]["file"]="forwarduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
// banall
elseif (strpos($textmassage , "/banall ") !== false or strpos($textmassage , "مسدود همگانی ") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/banall ','مسدود همگانی '],'',$textmassage);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"⛔️ فرد مسدود همگانی شد
			
🔖 اطلاعات کاربر :			
📮 نام : [$name]
?? یوزرنیم : [ @$username ]
🔸 ایدی : [$id]",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif (strpos($textmassage , "/unbanall ") !== false or strpos($textmassage , "ازاد همگانی ") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/unbanall ','ازاد همگانی '],'',$textmassage);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"فرد از مسدودیت همگانی ازاد شد ✅
			
🔖 اطلاعات کاربر :			
📮 نام : [$name]
🔹 یوزرنیم : [ @$username ]
🔸 ایدی : [$id]",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif($textmassage == "/banlist"  or $textmassage == "banlist" or $textmassage == "لیست مسدود همگانی") {
if ( in_array($from_id,$Dev)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
	  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"قائمة المحظورين 🚫 : 
➖➖➖➖➖

$result
🔸🔹🔸🔹🔸🔹",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
// lock character
// lock photo
elseif($textmassage=="/lock character" or $textmassage=="قفل الكلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {	
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》قفل کاراکتر #پیام فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️قفل کاراکتر فعال شد  از این پس متن ارسال توسط کاربران باید بیش تر از $pluscharacter و کم تر از $downcharacter باشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور  `نصب ` یا  `/add ` میتوانید ربات را  رایگان فعال کنید ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="/unlock character" or $textmassage=="بازکردن کاراکتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》قفل کاراکتر #پیام غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن کاراکتر غیر فعال شد و  محدودیتی دیگر در پیام ارسالی وجود ندارد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور  `نصب ` یا  `/add ` میتوانید ربات را  رایگان فعال کنید ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif (strpos($textmassage , "/setlockcharacter ") !== false or strpos($textmassage , "تنظیم کاراکتر ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
	$num = str_replace(['/setlockcharacter ','تنظیم کاراکتر '],'',$textmassage);
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
$startlock = $te[0];
$endlock = $te[1];
			  Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"☆》قفل کاراکتر پیام تنظیم شد🔇\n➖➖➖➖➖➖➖
ℹ️محدودیت در پیام های ارسالی به شکل زیر است :

🖍حداقل تعداد کاراکتر پیام : $startlock
🖌حداکثر تعداد کراکتر پیام : $endlock\n➖➖➖➖\nتوسط ☆> [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["downcharacter"]="$startlock";
$settings["information"]["pluscharacter"]="$endlock";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور  `نصب ` یا  `/add ` میتوانید ربات را  رایگان فعال کنید ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

 
 
if($data=="panel2"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤قم باختيار ماتريد من الاسفل ، 🔰

",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
           ['text'=>"- اعدادات القفل التلقائي ، 🔐 •",'callback_data'=>'lockauto']
					 ],
					 [
					 ['text'=>"",'callback_data'=>'warn']
],
[
['text'=>"- ضبط افتراضي ، 🔄 •",'callback_data'=>'restart']
					 ],
					 [
					 ['text'=>"- اعدادات الاضافة الاجبارية ، ➕ •",'callback_data'=>'addbzn'],['text'=>"",'callback_data'=>'warn']
					 ],
					 					 [
					 ['text'=>"- اعدادات الاشتراك الاجباري ، 📡 •",'callback_data'=>'lockchannel']
],
[
['text'=>"- اعدادات اضافة البوتات ، ☠ •",'callback_data'=>'hardmode']
					 ],
					 [
					 ['text'=>"📢 تابع جديدنا 📢",'url'=>"https://t.me/joinchat/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'settings']
					 ],
					    [
   ['text'=>"",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
    }
		}
									    elseif($data=="restart"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍هذا القسم اذا كنت ضبط الحماية الافتراضية 
➖➖➖➖➖➖➖
يمكنك تهيئة البوت انقر على تأكيد ✔️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[

					 [
					 ['text'=>"تأكيد ✅",'callback_data'=>'yes']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
    }
				}
													    elseif($data=="yes"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍تم ضبط البوت الى الحالة الافتراضية✅
➖➖➖➖➖
🔖بواسطة الادمن :

🚀اسم الادمن : [‏$firstname]
🚦ايدي الادمن: [$fromid]
💫معرف الادمن : [@$usernames]
➖➖➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
$ndate = $settings2["information"]["expire"];
$dateadd = $settings2["information"]["dataadded"];
       $settings2 = '{"lock": {
                "text": "☑️ معطل ☑️",
                "photo": "☑️ معطل ☑️",
                "link": "☑️ معطل ☑️",
                "tag": "☑️ معطل ☑️",
				"username": "☑️ معطل ☑️",
                "sticker": "☑️ معطل ☑️",
                "video": "☑️ معطل ☑️",
                "voice": "☑️ معطل ☑️",
                "audio": "☑️ معطل ☑️",
                "gif": "☑️ معطل ☑️",
                "bot": "☑️ معطل ☑️",
                "forward": "☑️ معطل ☑️",
                "document": "☑️ معطل ☑️",
                "tgservic": "☑️ معطل ☑️",
				"edit": "☑️ معطل ☑️",
				"reply": "☑️ معطل ☑️",
				"contact": "☑️ معطل ☑️",
				"location": "☑️ معطل ☑️",
				"game": "☑️ معطل ☑️",
				"cmd": "☑️ معطل ☑️",
				"mute_all": "☑️ معطل ☑️",
				"mute_all_time": "☑️ معطل ☑️",
				"fosh": "☑️ معطل ☑️",
				"lockauto": "☑️ معطل ☑️",
				"lockcharacter": "☑️ معطل ☑️",
				"video_msg": "☑️ معطل ☑️"
			},
			"information": {
            "added": "true",
			"welcome": "☑️ معطل ☑️",
			"add": "☑️ معطل ☑️",
			"lockchannel": "☑️ معطل ☑️",
			"hardmodebot": "☑️ معطل ☑️",
			"hardmodewarn": " كتم العضو ♨️",
			"charge": "999 روز",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"textwelcome": "مرحبا بك عزيزي ، ✅",
			"rules": "لايوجد",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"setwarn": "3"
			}
}';
        $settings2 = json_decode($settings2,true);
		$settings2["information"]["expire"]="$ndate";
		$settings2["information"]["dataadded"]="$dateadd";
		$settings2["information"]["msg_id"]="$messageid";
        $settings2 = json_encode($settings2,true);
        file_put_contents("data/$chatid.json",$settings2);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
    }
				}
							    
			    elseif($data=="welcome"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$welcome = $settings2["information"]["welcome"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"✨مرحبا بك في قسم اضافة الترحيب
➖➖➖➖➖➖➖➖
🚩 استخدم الازرار التالية",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🎗 حالة الترحيب",'callback_data'=>'text'],['text'=>"$welcome",'callback_data'=>'pwelcome']
					 ],
					 [
					 ['text'=>"📜 اضافة ترحيب",'callback_data'=>'textwelcome']
					 ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
$settings2["information"]["step"]="none";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
    }
				}
				    elseif($data=="textwelcome"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$textwelcome = $settings2["information"]["textwelcome"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 الترحيب هو 
$textwelcome",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   		 [
['text'=>"🔆وضع ترحيب جديد",'callback_data'=>'setwelcome']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'welcome']
					 ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
    }
					}
									    elseif($data=="setwelcome"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$textwelcome = $settings2["information"]["textwelcome"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 يمكنك وضع الترحيب الان  :
			   
🔹يوجد عدة انواع للترحيب 
gpname = لترحيب باسم المجموعة
مثال ~ نورت الكروب $gpname
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
username = الترحيب بالمعرف
مثال ~ نورت الكروب @$username
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'welcome']
					 ],
                     ]
               ])
           ]);
$settings2["information"]["step"]="setwelcome";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
    }
					}
					    elseif($data=="pwelcome" && $settings2["information"]["welcome"] =="✅ مقفول ✅" ){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"✨مرحبا بك في قسم اضافة الترحيب
➖➖➖➖➖➖➖➖
🚩 حالة الترحيب هي معطلة ❌",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				     [
                     ['text'=>"🎗 حالة الترحيب",'callback_data'=>'text'],['text'=>"☑️ معطل ☑️",'callback_data'=>'pwelcome']
					 ],
			    	 [
					 ['text'=>"📜اضافة ترحيب",'callback_data'=>'textwelcome']
					 ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
$settings2["information"]["welcome"]="☑️ معطل ☑️";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }
		  else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
    }
						}
						    elseif($data=="pwelcome" && $settings2["information"]["welcome"] == "☑️ معطل ☑️"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>" ✨مرحبا بك في قسم اضافة الترحيب
➖➖➖➖➖➖➖➖
🚩 حالة الترحيب مفعلة ✅",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				     [
                     ['text'=>"🎗 حالة الترحيب",'callback_data'=>'text'],['text'=>"✅ مقفول ✅",'callback_data'=>'pwelcome']
					 ],
					 [
					 ['text'=>"📜 اضافة ترحيب",'callback_data'=>'textwelcome']
					 ],
					 [
					 ['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
$settings2["information"]["welcome"]="✅ مقفول ✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
    }
							}
		    
		  elseif($data=="lockall" && $settings2["lock"]["mute_all"] =="✅ مقفول ✅"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
  'text'=>"
📌￤اعدادات جروب { $gpname} ، ♻️ •


",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"- اوامر القفل والفتح ، 🔐 •",'callback_data'=>'media']
],
[
['text'=>"- اوامر الوضع ، 📩 •",'callback_data'=>'tbbots']
 ],
[
['text'=>"- اوامر الكتم والتقييد ، 🔇 •",'callback_data'=>'tbbots1']
 ],
[
['text'=>"- اوامر المطور ، 👮 •",'callback_data'=>'tbbots2']
 ],
[
['text'=>"- اوامر الاعضاء ، 👥 •",'callback_data'=>'tbbots3']
 ],
[
['text'=>"- اوامر عامة اضافية ، 🤖 •",'callback_data'=>'tbbots4']
 ],
[
['text'=>"- معلومات المجموعة ، 🔱 •",'callback_data'=>'groupe']
 ],
  [
 ['text'=>"🔐 قفل الكل (الحالة) 🔐",'callback_data'=>'text'],['text'=>"☑️ معطل ☑️",'callback_data'=>'lockall']
 ],
[
['text'=>"",'callback_data'=>'back'],['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"]
],
	]
	])
	]);
$settings2["lock"]["mute_all"]="☑️ معطل ☑️";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"انت لست ادمن ⚠️",
]);
	}
		  }
			  elseif($data=="lockall" && $settings2["lock"]["mute_all"] =="☑️ معطل ☑️"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"
📌￤اعدادات جروب { $gpname} ، ♻️ •


",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"- اوامر القفل والفتح ، 🔐 •",'callback_data'=>'media']
],
[
['text'=>"- اوامر الوضع ، 📩 •",'callback_data'=>'tbbots']
 ],
[
['text'=>"- اوامر الكتم والتقييد ، 🔇 •",'callback_data'=>'tbbots1']
 ],
[
['text'=>"- اوامر المطور ، 👮 •",'callback_data'=>'tbbots2']
 ],
[
['text'=>"- اوامر الاعضاء ، 👥 •",'callback_data'=>'tbbots3']
 ],
[
['text'=>"- اوامر عامة اضافية ، 🤖 •",'callback_data'=>'tbbots4']
 ],
[
['text'=>"- معلومات المجموعة ، 🔱 •",'callback_data'=>'tbbots5']
 ],
  [
 ['text'=>"🔐 قفل الكل (الحالة) 🔐",'callback_data'=>'text'],['text'=>"✅ مقفول ✅",'callback_data'=>'lockall']
 ],
[
['text'=>"",'callback_data'=>'back'],['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"]
],
	]
	])
	]);
$settings2["lock"]["mute_all"]="✅ مقفول ✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
	}
			  }
			      elseif($data=="warn"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$setwarn = $settings2["information"]["setwarn"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"مرحبا بك في قسم التحذيرات ❤️
➖➖➖➖➖➖➖➖
🔹 يمكنك وضع تحذير لمجموعة
🔸يمكنك تحديد عدد التحذيرات من 1 الى 20 ",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"⚠️ عدد التحذيرات",'callback_data'=>'text'],['text'=>"🔸 $setwarn 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕زيادة",'callback_data'=>'warn+'],['text'=>"➖ نقصان",'callback_data'=>'warn-']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
    }
	}
	elseif($data=="warn+"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$setwarn = $settings2["information"]["setwarn"];
    $manfi = $setwarn + 1;
    if ($manfi <= 20 && $manfi >= 1){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"مرحبا بك في قسم التحذيرات ❤️
➖➖➖➖➖➖➖➖
🔹 يمكنك وضع تحذير لمجموعة
🔸يمكنك تحديد عدد التحذيرات من 1 الى 20 ",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
					 ['text'=>"⚠️ عدد التحذيرات",'callback_data'=>'text'],['text'=>"🔸 $manfi 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ زيادة",'callback_data'=>'warn+'],['text'=>"➖ نقصان",'callback_data'=>'warn-']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
$settings2["information"]["setwarn"]="$manfi";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
	}
		  }
						}
								  		  		elseif($data=="warn-"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$setwarn = $settings2["information"]["setwarn"];
    $manfi = $setwarn - 1;
    if ($manfi <= 20 && $manfi >= 1){
          Mostafa('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"مرحبا بك في قسم التحذيرات ❤️
➖➖➖➖➖➖➖➖
🔹 يمكنك وضع تحذير لمجموعة
🔸يمكنك تحديد عدد التحذيرات من 1 الى 20 ",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
					 ['text'=>"⚠️ عدد التحذيرات",'callback_data'=>'text'],['text'=>"🔸 $manfi 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ زيادة",'callback_data'=>'warn+'],['text'=>"➖ نقصان",'callback_data'=>'warn-']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
$settings2["information"]["setwarn"]="$manfi";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"غير مسموح لك ⚠️",
]);
	}
		  }
						}
											    elseif($data=="hardmode"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodebot = $settings2["information"]["hardmodebot"];
$hardmodewarn = $settings2["information"]["hardmodewarn"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"♨️ اهلا بك في قسم الحماية من اضافة البوتات
➖➖➖➖➖➖➖➖
🚩 اختر احد الاوامر الموجودة في الاسفل",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🤖 اضافة البوتات",'callback_data'=>'text'],['text'=>"$hardmodebot",'callback_data'=>'hardmodebot']
					 ],
					            [
                     ['text'=>"❗️عقوبة المضيف",'callback_data'=>'text'],['text'=>"$hardmodewarn",'callback_data'=>'hardmodewarn']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
						  elseif($data=="hardmodebot" && $settings2["information"]["hardmodebot"] == "🚷 اخراج کاربر"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodewarn = $settings2["information"]["hardmodewarn"];
                    Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"♨️ اهلا بك في قسم الحماية من اضافة البوتات
➖➖➖➖➖➖➖➖
🚩 اختر احد الاوامر الموجودة في الاسفل",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🤖 اضافة البوتات",'callback_data'=>'text'],['text'=>"☑️ معطل ☑️",'callback_data'=>'hardmodebot']
					 ],
					            [
                     ['text'=>"❗️ عقوبة المضيف",'callback_data'=>'text'],['text'=>"$hardmodewarn",'callback_data'=>'hardmodewarn']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["hardmodebot"]="☑️ معطل ☑️";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
	}
		  }
		  						  elseif($data=="hardmodebot" && $settings2["information"]["hardmodebot"] == "☑️ معطل ☑️"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodewarn = $settings2["information"]["hardmodewarn"];
                    Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"♨️ اهلا بك في قسم الحماية من اضافة البوتات
➖➖➖➖➖➖➖➖
🚩 اختر احد الاوامر الموجودة في الاسفل",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🤖 اضافة البوتات",'callback_data'=>'text'],['text'=>"🚷طرد البوتات",'callback_data'=>'hardmodebot']
					 ],
					            [
                     ['text'=>"❗️عقوبة المضيف",'callback_data'=>'text'],['text'=>"$hardmodewarn",'callback_data'=>'hardmodewarn']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"?? رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["hardmodebot"]="🚷طرد البوتات";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
	}
		  }
		  						  elseif($data=="hardmodewarn" && $settings2["information"]["hardmodewarn"] == "🚷طرد البوتات"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodebot = $settings2["information"]["hardmodebot"];
                    Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>" ♨️ اهلا بك في قسم الحماية من اضافة البوتات
➖➖➖➖➖➖➖➖
🚩 اختر احد الاوامر الموجودة في الاسفل",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🤖 اضافة البوتات",'callback_data'=>'text'],['text'=>"$hardmodebot",'callback_data'=>'hardmodebot']
					 ],
					            [
                     ['text'=>"❗️ عقوبة المضيف",'callback_data'=>'text'],['text'=>"كتم العضو ♨️",'callback_data'=>'hardmodewarn']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["hardmodewarn"]="كتم العضو ♨️";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
	}
		  }
		  						  elseif($data=="hardmodewarn" && $settings2["information"]["hardmodewarn"] == "كتم العضو ♨️"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodebot = $settings2["information"]["hardmodebot"];
                    Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"♨️ اهلا بك في قسم الحماية من اضافة البوتات
➖➖➖➖➖➖➖➖
🚩 اختر احد الاوامر الموجودة في الاسفل",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🤖 اضافة البوتات",'callback_data'=>'text'],['text'=>"$hardmodebot",'callback_data'=>'hardmodebot']
					 ],
					            [
                     ['text'=>"❗️عقوبة المضيف",'callback_data'=>'text'],['text'=>"🚷طرد العضو",'callback_data'=>'hardmodewarn']
					 ],
					 [
					 ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"🔙 رجوع",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["hardmodewarn"]="🚷طرد العضو";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"عذرا انت لست ادمن ⚠️",
]);
	}
		  }



if($textmassage=="/restart settings" or $textmassage=="restart settings" or $textmassage=="ضبط افتراضي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'reply_to_message_id'=>$message_id,
 'chat_id'=>$chat_id,
 'text'=>"📍 عزيزي الادمن لضبط الاعدادات افتراضيا 
➖➖➖➖➖➖➖
ارسل نعم للتراجع ارسل لا ✅",
 ]);
$settings["information"]["step"]="reset";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
 }
}
// kick me
elseif($textmassage=="اطردني" or $textmassage=="kickme" or $textmassage=="اخراج من"){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
Mostafa('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
	]);
              Mostafa('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"✔¦ تم طردك بنجاح
@$username
",
'reply_markup'=>$inlinebutton,
 ]);
 }
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لايمكنني طرد الادمنية او المدراء او المطورين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// silent
elseif($textmassage == "كتم"&& $rt or $textmassage == "siرlent" && $rt or $textmassage == "تقيرريد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true){
   Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم كتمه للابد

✓",
'reply_to_message_id'=>$re_msgid,
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"",'url'=>"https://t.me/tbbots"]
	]
    ]
    ])
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لايمكنني تقييد الادمنية او المدراء او المطورين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($textmassage , "/silوورent ") !== false && $rt or strpos($textmassage , "كتم لمدة") !== false && $rt) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
$add = $settings["information"]["added"];
$we = str_replace(['/silent ','كتم لمدة'],'',$textmassage);
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم كتم العضو لمدة {$we} دقيقة 

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$weplus*60,
         ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"خطا⚠️
➖➖➖➖➖➖
يجب اختيار عدد بين 1 الى 1000",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"📍 لايمكنني تقييد الادمنية او المدراء او المطورين",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
elseif($textmassage == "/unsiرlent" && $rt or $textmassage == "unرsilent" && $rt or $textmassage == "الغاء الكتم" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم الغاء كتمه بنجاح

✓",
'reply_to_message_id'=>$re_msgid,
 
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"]
	]
    ]
    ])
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($textmassage == "تقييد"&& $rt or $textmassage == "siرlent" && $rt or $textmassage == "تقيرريد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true){
   Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم تقييدة للابد

✓",
'reply_to_message_id'=>$re_msgid,
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"",'url'=>"https://t.me/tbbots"]
	]
    ]
    ])
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لايمكنني تقييد الادمنية او المدراء او المطورين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($textmassage , "/silوورent ") !== false && $rt or strpos($textmassage , "تقييد لمدة ") !== false && $rt) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
$add = $settings["information"]["added"];
$we = str_replace(['/silent ','تقييد لمدة'],'',$textmassage);
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم تقييد العضو لمدة {$we} دقيقة 

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$weplus*60,
         ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"خطا⚠️
➖➖➖➖➖➖
يجب اختيار عدد بين 1 الى 1000",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"📍 لايمكنني تقييد الادمنية او المدراء او المطورين",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
elseif($textmassage == "/unsiرlent" && $rt or $textmassage == "unرsilent" && $rt or $textmassage == "الغاء التقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم الغاء تقييدة بنجاح

✓",
'reply_to_message_id'=>$re_msgid,
 
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"]
	]
    ]
    ])
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($textmassage == "/list silent"  or $textmassage == "المكتومين" or $textmassage == "قائمة المكتومين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📮¦ قائمه المكتومين
ٴ━━━━━━━━━

$result",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif($textmassage == "المقيدين"  or $textmassage == "قائمة المقيدين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📮¦ قائمه المقيدين
ٴ━━━━━━━━━

$result",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif($textmassage == "/clean silentlist"  or $textmassage == "cleaرn silentlist" or $textmassage == "مسح المكتومين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 Mostafa('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
         }
	  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🚸¦ تـم مسح المكتومين بنجاح
 
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($textmassage == "/clean silentlist"  or $textmassage == "cleaرn silentlist" or $textmassage == "مسح المقيدين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 Mostafa('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
         }
	  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🚸¦ تـم مسح المقيدين بنجاح
 
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// promote
mkdir("data/member");
mkdir("data/member/$chat_id");

$Cmember = file_get_contents("data/member/$chat_id/Cmember.txt");
$CCmember = file_get_contents("data/member/$chat_id/member.txt");
$getCCmember = explode("\n",$CCmember);

if($re and $textmassage == "رفع مدير"  and !in_array($re_id,$getCCmember)){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
file_put_contents("data/member/$chat_id/member.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/member/$chat_id/Cmember.txt","- @" . $re_user . " ٭ " . $re_id . " ٭" . "\n" , FILE_APPEND);
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح مدير 

✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}
}}}
if($re and $textmassage == "رفع مدير" and in_array($re_id,$getCCmember)){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح مدير مسبقا

✓️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}
}}}

if($re and $text == "تنزيل مدير"  and in_array($re_id,$getCCmember)){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
$str = str_replace($re_id,"",$getCCmember);
$str2 = str_replace("- @" . $re_user . " ٭ " . $re_id . " ٭","",$Cmember);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/member/$chat_id/member.txt",$ex);
file_put_contents("data/member/$chat_id/Cmember.txt",$ex2);
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
⚜️¦ العضو » [$re_name](tg://user?id=$re_id) 
🛠¦ تم تنزيله من الادمنيةة

✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}
}}}
if($re and $textmassage == "تنزيل مدير"  and !in_array($re_id,$getCCmember)){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
⚜️¦ العضو » [$re_name](tg://user?id=$re_id) 
🛠¦ تم تنزيله من الادمنيةة من قبل

✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}
}}}

if($textmassage == "المدراء" || $textmassage == "قائمه المدراء" and $Cmember != null || $Cmember != ""){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"📮¦ قائمه مدراء المجموعه 
ٴ━━━━━━━━━

$Cmember ",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
}
}
}}
if($textmassage == "مسح المدراء" || $textmassage == "مسح قائمه المدراء"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
file_put_contents("data/member/$chat_id/member.txt","");
file_put_contents("data/member/$chat_id/Cmember.txt","");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
📬¦ تم مسح المدراء",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
         }
    }
}
}
mkdir("data/admins");
mkdir("data/admins/$chat_id");

$Cadmins = file_get_contents("data/admins/$chat_id/Cadmins.txt");
$CCadmins = file_get_contents("data/admins/$chat_id/admins.txt");
$useradmin = explode("\n",$CCadmins);

if($textmassage=="رفع ادمن" or $textmassage=="prوomote" or $textmassage=="وذتايتنايu"){
	file_put_contents("data/admins/$chat_id/admins.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/admins/$chat_id/Cadmins.txt","- @" . $re_user . " ٭ " . $re_id . " ٭" . "\n" , FILE_APPEND);
if ( $status == 'creator' or in_array($from_id,$Dev)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم رفعه ادمن في المجموعة

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 Mostafa('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$re_id,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>false
]);
	}
}
if($textmassage=="تنزيل ادمن" or $textmassage=="حذف ادمن" or $textmassage=="تنزيل الادمن"){
	$str = str_replace($re_id,"",$CCadmins);
$str2 = str_replace("- @" . $re_user . " ٭ " . $re_id . " ٭","",$Cadmins);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/admins/$chat_id/admins.txt",$ex);
file_put_contents("data/admins/$chat_id/Cadmins.txt",$ex2);
if ( $status == 'creator' or in_array($from_id,$Dev)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم تنزيله من الادمنية

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
	}
}
// admin list
elseif($textmassage=="/admin list" or $textmassage=="admin list" or $textmassage=="الادمنية"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg."\n"."👷"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📍 المشرفين : $owner | @$owner2 🌟
➖➖➖
👮🏻 قائمة الادمنية :
$msg",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
'parse_mode'=>"MarkDown",
 ]);
	}
}
  // text callback
elseif ($data == 'text'){
Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"🔱 هاذا امر معنوي",
]);
}




if($settings["information"]["step"] == "reset"){
if($textmassage == "نعم"){
              Mostafa('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"تم ضبط البوت افتراضي 
➖➖➖➖➖➖➖
🔖بواسطة  :
➖➖➖➖
📮 الاسم : [$first_name]

🔹 المعرف : [ @$username ]

🔸 الايدي : [$from_id]
➖➖ ",
'reply_markup'=>$inlinebutton,
 ]);
$ndate = $settings["information"]["expire"];
$dateadd = $settings["information"]["dataadded"];
       $settings = '{"lock": {
                "text": "☑️ معطل ☑️",
                "photo": "☑️ معطل ☑️",
                "link": "☑️ معطل ☑️",
                "tag": "☑️ معطل ☑️",
				"username": "☑️ معطل ☑️",
                "sticker": "☑️ معطل ☑️",
                "video": "☑️ معطل ☑️",
                "voice": "☑️ معطل ☑️",
                "audio": "☑️ معطل ☑️",
                "gif": "☑️ معطل ☑️",
                "bot": "☑️ معطل ☑️",
                "forward": "☑️ معطل ☑️",
                "document": "☑️ معطل ☑️",
                "tgservic": "☑️ معطل ☑️",
				"edit": "☑️ معطل ☑️",
				"reply": "☑️ معطل ☑️",
				"contact": "☑️ معطل ☑️",
				"location": "☑️ معطل ☑️",
				"game": "☑️ معطل ☑️",
				"cmd": "☑️ معطل ☑️",
				"mute_all": "☑️ معطل ☑️",
				"mute_all_time": "☑️ معطل ☑️",
				"fosh": "☑️ معطل ☑️",
				"lockauto": "☑️ معطل ☑️",
				"lockcharacter": "☑️ معطل ☑️",
				"video_msg": "☑️ معطل ☑️"
			},
			"information": {
            "added": "true",
			"welcome": "☑️ معطل ☑️",
			"add": "☑️ معطل ☑️",
			"lockchannel": "☑️ معطل ☑️",
			"hardmodebot": "☑️ معطل ☑️",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "365 اليوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"textwelcome": "مرحبا بك",
			"rules": "غير مسجل",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$ndate";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
}else{
	Mostafa('sendmessage',[
          'chat_id' => $chat_id,
'text'=>"تم رفض طلبه بنجاح ✅",
]);
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
 }
}
// buy charge
if(file_exists("data/$from_id.txt") && $tc == "private"){
		date_default_timezone_set('Asia/Damascus');
		$date1 = date('Y-m-d', time());
		$date2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
		$next_date = date('Y-m-d', strtotime($date2 ." +30 day"));
	Mostafa('sendmessage',[
        "chat_id"=>$chat_id,
        "text"=>"✅ تم شحن مجموعتك بنجاح"
		]);
			Mostafa('sendmessage',[
        "chat_id"=>$textmassage,
        "text"=>"✅ تم شراء والدفع لهذه المجموعه"
		]);
$settings = json_decode(file_get_contents("data/$textmassage.json"),true);
$settings["information"]["expire"]="$next_date";
$settings["information"]["charge"]="30 اليوم";
$settings = json_encode($settings,true);
file_put_contents("data/$textmassage.json",$settings);
unlink("data/$from_id.txt");
}
 // left group when end charge
date_default_timezone_set('Asia/Damascus');
$date4 = date('Y-m-d', time());
if ($tc == 'group' | $tc == 'supergroup'){ 
if($settings["information"]["expire"] != false){
if($date4 > $settings["information"]["expire"]){
			Mostafa('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"🚩لقد انتهت صلاحية المجموعة
➖➖➖➖
💭البوت غادر المجموعة 
➖➖➖
🔖معلومات المجموعة :

🔸ايدي المجموعة : [$chat_id]

🔹اسم المجموعة: [$namegroup]


➖➖",
        ]); 
			 Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"🚩تم انتهاء الشحن المجموعة 
➖➖➖➖
💭البوت يغادر المجموعة 
➖➖➖
🔖معلومات المجموعة

🔸ايدي المجموعة : [$chat_id]

🔹اسم المجموعة : [$namegroup]

🔖لم يتم التحقق من رسائل الاخرى المجموعة
➖➖",
]);
        Mostafa('LeaveChat', [
        'chat_id' =>$chat_id,
    ]);
    }
}
}
// welcome
if ($settings["information"]["welcome"] == "✅ مقفول ✅"){
if($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
$text1 = $settings["information"]["textwelcome"];
$newmemberuser = $update->message->new_chat_member->username;
$name = $update->message->new_chat_member->first_name;
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$text1");
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$text",
'reply_to_message_id'=>$message_id,
	]);
}
}
}
// lock character
if($settings["lock"]["lockcharacter"] == "✅ مقفول ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
$plus = mb_strlen("$textmassage");
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
if ($pluscharacter < $plus or $plus < $downcharacter) {   
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// autolock 
if ($settings["lock"]["lockauto"] == "✅ مقفول ✅"){
date_default_timezone_set('Asia/Damascus');
$date1 = date("H:i");
$timelockauto = $settings["information"]["timelock"];
$unlocktime = $settings["information"]["timeunlock"];
if($unlocktime > $date1 && $date1 > $timelockauto){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ) {
$timeremmber = $settings["information"]["timeremmber"];
if($date1 < $timeremmber){
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
}
else
{
	 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);

		Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"",
'reply_markup'=>$inlinebutton,
   ]);
$next_date = date('H:i', strtotime($date1 ."+180 Minutes"));
$settings["information"]["timeremmber"]="$next_date";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
}
// panel
elseif ($user["userjop"]["$from_id"]["file"] == 'forwarduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "رجوع  🔙") {
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال الرسالة بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'forwardgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "رجوع  🔙") {
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>" تم ارسال الرسالة بنجاح✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'sendgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "رجوع  🔙") {
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال رسالتك بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     Mostafa('sendmessage',[
          'chat_id'=>$numbers[$z],        
		  'text'=>"$textmassage",
        ]);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'senduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "رجوع  🔙") {
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال رسالتك بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     Mostafa('sendmessage',[
          'chat_id'=>$numbers[$z],        
		  'text'=>"$textmassage",
        ]);
}
}
}
if($textmassage=="/start" && $tc == "private" or $textmassage=="start" && $tc == "private"){
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📬¦ انا بوت اسمي { $nbot }
⭐¦ اختصاصي حماية كروبات المتفاعله
🔖¦ لتفعيل البوت اتبع مايلي 🔰
⚀¦ اضف البوت الى المجموعه
⚁¦ ارفع البوت ادمن في المجموعه
⚂¦ سيتم تفعيل البوت ورفع الادمنيةة
ـــــــــــــــــــــــــــــــــــــــــــــــــــ
📯¦ مطور البوت @Alphp

",
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- لمسات برمجيه ✅",'url'=>"t.me/C3D3D"]],
]])
]);
}
 elseif($textmassage=="وضع اسم لg" && $tc == "private"){
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"لوضع اسم للبوت ومعرف للمطور ارسل",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"√ • اضافة البوت الى مجموعتك • √",'url'=>"https://telegram.me/$usernamebot?startgroup=start"]
              ] 
              ],
        ])
            ]);
        }
elseif($textmassage=="🔙 رجوع" && $tc == "private"){
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"العودة إلى القائمة الرئيسية! ➖➖➖➖➖ استخدم زر الرجوع ",

   'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"💭طريقة التفعيل"],['text'=>""]
				],
                 [
                   ['text'=>""],['text'=>"🚦ارسال اقتراحك"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
    		]);
$user["userjop"]["$from_id"]["file"]="none";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
}
elseif($textmassage=="🔖 مساعدة" && $tc == "private"){
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🚦لطفا منك اختر القائمة المطلوبة
➖➖➖➖➖➖
🔻يمكنك اختيار الازرار في الاسفل",
   'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"🏅 طريقة الاستخدام"],['text'=>"🎖 طريقة تفعيل"]
				],
				[
			['text'=>"🔙 رجوع"]
				]
 	],
            	'resize_keyboard'=>true
       		])
    		]);
        }
else
{
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📣 لاستعمال اوامر البوت المجانية يجب عليك اولا ان تصبح عضو في القناة 
	
📍 ثم المحاولة مجددا عزيزي

📌 قناة البوت : @$channe",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📢 اضغط هنا للاشتراك",'url'=>"https://t.me/tbbots"]
	],
              ]
        ])
            ]);
}
}
elseif($textmassage=="🏅 طريقة الاستخدام" && $tc == "private"){
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تعليمات م̷ـــِْن المطور لاستخدام البوت
➖➖

1️⃣ اضف البوت إلى مجموعتك 

2️⃣ اذهب لاعدادات المجموعة

3️⃣ اذهب إلى قائمة المشرفين

4️⃣ ثم اضف البوت مشرف

5️⃣ ثم ارسل كلمة { • تفعيل • }

6️⃣ ثم ارسل الاوامر لعرض الاوامر

7️⃣ او ارسال /panel لفتح الاوامر",
	]);
}
elseif($textmassage=="🎖 طريقة تفعيل" && $tc == "private"){
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔶طريقة تفعيل البوت في المجموعة :

1⃣ اضف البوت إلى مجموعتك اولا 

2⃣ ثم بإضافة البوت مشرف في مجموعتك
3⃣ بعد ذلك ارسل كلمة { • تفعيل • }

4⃣ لاظهار الاوامر ارسل { • الاوامر • }

طاب يومك عزيزي شكرا لاستخدامك البوت 😄
➖➖",
	]);
}
/* elseif($textmassage=="🚀 دریافت رایگان" && $tc == "private"){
if($tch == 'member' or $tch == 'creator' or $tch == 'administrator'){
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به بخش دریافت ربات رایگان خوش امدید😀
➖➖➖➖➖
📍 شما با استفاده از این بخش میتوانید ربات را برای گروه خودتان به صورت رایگان دریافت کنید
",
 'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"📅 365 روز رایگان"],['text'=>"👥 زیر مجموعه گیری"]
				],
	[
	['text'=>"🔙 رجوع"]
	],
 	],
            	'resize_keyboard'=>true
       		])
            ]);
        }
else
{
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📣 برای استفاده از امکانات رایگان ربات شما باید ابتدا عضو کانال اطلاع رسانی ربات شوید
	
📍 سپس به ربات برگشته و مجدد امتحان کنید تا از امکانات فوق العاده ربات بهر مند شوید

📌 ادرس کانال : @$channel",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📢 عضویت در کانال",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"]
	],
              ]
        ])
            ]);
}
}
		elseif($textmassage=="👥 زیر مجموعه گیری" && $tc == "private"){
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"شما با استفاده از این بخش میتوانید با دعوت دیگران ربات رو به زمان بیش تری رایگان دریافت کنید
➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید🔻",
 'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"🔗 لینک دعوت من"],['text'=>"ℹ️ اطلاعات حساب"]
				],
	[
	['text'=>"دریافت ربات [365 روز]"],['text'=>"دریافت ربات [730 روز]"]
	],
		[
	['text'=>"دریافت ربات [1095 روز]"],['text'=>"🔙 رجوع"]
	],
 	],
            	'resize_keyboard'=>true
       		])
            ]);
        }
			elseif($textmassage=="🔗 لینک دعوت من" && $tc == "private"){
		Mostafa('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>new CURLFile("other/logo.jpg"),
	'caption'=>"دوست داری گروهت رو 24 ساعته مدیریت کنی ؟ 😃
➖
از ربات های بی کیفیت خسته شدی ؟ ☹️

ربات رایگان ولی خوب برای مدیریت گروهت میخوای ؟ 👾

🤖 کافیه بری ربات زیر :
https://telegram.me/$usernamebot?start=$from_id",
            ]);
			Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 بنر بالا حاوی لینک شخصی شماست بنر را برای دوستان و گروه های خود ارسال کنید و با دریافت زیر مجموعه ربات رایگان دریافت کنید
➖➖
ℹ️ برای اطلاع از تعداد حساب و میزان دعوت شما از دکمه حساب کاربری استفاده کنید",
            ]);
        }
					elseif($textmassage=="ℹ️ اطلاعات حساب" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite != false){
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖 اطلاعات حساب شما :
➖➖

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : $invite",
            ]);
        }
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖 اطلاعات حساب شما :
➖➖

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : 0",
            ]);
}
}
elseif($textmassage=="دریافت ربات [365 روز]" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite > 10){
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تبریک شما میتوانید رباترا برای 265 روز دریافت کنید
➖➖
ℹ️ لینک گروه خود را ارسال کنید",
            ]);
				Mostafa('sendmessage',[
				'chat_id'=>$Dev[0],
	'text'=>"📍 یک کاربر توانست ربات رایگان دریافت کند به پشتیبانی متصل شد
➖➖	
🔖 اطلاعات وی :

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : $invite
$text
365",
            ]);
$plusinvite = $invite - 10;
$user["userjop"]["$from_id"]["invite"]=$plusinvite;
$user["userjop"]["$from_id"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
        }
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 شما هنوز زیر مجموعه کافی برای دریافت ربات ندارید
➖➖
ℹ️ باید 10 نفر را به ربات دعوت کنید",
            ]);
}
}
elseif($textmassage=="دریافت ربات [730 روز]" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite > 20){
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تبریک شما میتوانید رباترا برای 730 روز دریافت کنید
➖➖
ℹ️ لینک گروه خود را ارسال کنید",
            ]);
				Mostafa('sendmessage',[
				'chat_id'=>$Dev[0],
	'text'=>"📍 یک کاربر توانست ربات رایگان دریافت کند به پشتیبانی متصل شد
➖➖	
🔖 اطلاعات وی :

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : $invite
730
$text",
            ]);
$plusinvite = $invite - 20;
$user["userjop"]["$from_id"]["invite"]=$plusinvite;
$user["userjop"]["$from_id"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
        }
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 شما هنوز زیر مجموعه کافی برای دریافت ربات ندارید
➖➖
ℹ️ باید 20 نفر را به ربات دعوت کنید",
            ]);
}
}
elseif($textmassage=="دریافت ربات [1095 روز]" && $tc == "private"){
$invite = $user["userjop"]["$from_id"]["invite"];
if($invite > 40){
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تبریک شما میتوانید رباترا برای 1095 روز دریافت کنید
➖➖
ℹ️ لینک گروه خود را ارسال کنید",
            ]);
				Mostafa('sendmessage',[
				'chat_id'=>$Dev[0],
	'text'=>"📍 یک کاربر توانست ربات رایگان دریافت کند به پشتیبانی متصل شد
➖➖	
🔖 اطلاعات وی :

📍نام : $first_name
📍یوزرنیم : $username
📍ایدی : $from_id
📍تعداد زیر مجموعه : $invite
$text
1095",
            ]);
$plusinvite = $invite - 40;
$user["userjop"]["$from_id"]["invite"]=$plusinvite;
$user["userjop"]["$from_id"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
        }
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 شما هنوز زیر مجموعه کافی برای دریافت ربات ندارید
➖➖
ℹ️ باید 40 نفر را به ربات دعوت کنید",
            ]);
}
}  */
elseif(strpos($textmassage , '/start ') !== false && $tc == "private") {
$from = str_replace("/start ","",$textmassage);
@$user = json_decode(file_get_contents("data/user.json"),true);
if(in_array($from_id, $user["userlist"])) {
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📌￤اهلا بك ، $first_name 👋 •

💢￤في اقوى نظام بوت حماية مجاني في التليجرام ، ✅ •

⚜￤بوت متكامل اسرع من السورسات المنشورة حاليا ، ♻️ •

🌐￤بوت يجعل مجموعتك آمنة وخالية من الاعلانات الفاسدة (الفارسية) ، ✅ • 

📍￤فقط قم باضافة البوت لمجموعتك وارسل • (تفعيل) •

♻️￤[اضف البوت لمجموعتك](https://telegram.me/$usernamebot?startgroup=start) ، ✅ •

- [Our Channel 📡](t.me/tb_bots)",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
     'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"💭طريقة التفعيل"],['text'=>""]
				],
                 [
                   ['text'=>""],['text'=>"🚦ارسال اقتراحك"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
    		]);
}
else 
{
$invite = $user["userjop"]["$from"]["invite"];
$plusinvite = $invite + 1;	
	Mostafa('sendmessage',[
	'chat_id'=>$from,
	'text'=>"📍 تم دخول شخص البوت مع رابط دعوتك
➖➖
ℹ️ عدد الاشخاص الذين دعوتهم	: $plusinvite",
    		]);
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙎‍♂┋مرحبا بك عزيزي يعتبر ه̷̷َـَْـُذآ البوت
☑️┋الآۆلْ في التيليجرام في حماية مجموعات
⚙┋جميع عناصر الحماية متكاملة وهو مجاني
🌺┋لتفعيل البوت في مجموعتك قم بإضافتي
🌻┋في مجموعتك ثم رفعي مشرف بعدها ارسل { • تفعيل • }
➖➖➖➖➖
قناة المطور
🆔 : @$channel
➖➖➖➖➖
",
     'reply_markup'=>json_encode([
    'keyboard'=>[
				[
				['text'=>"💭طريقة التفعيل"],['text'=>"🔖 مساعدة"]
				],
                 [
                   ['text'=>"🗄 اوامر الاقسام"],['text'=>"🚦ارسال اقتراحك"]
                ],
 	],
            	'resize_keyboard'=>true
       		])
    		]);
$user["userjop"]["$from"]["invite"]=$plusinvite;
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
/* elseif($textmassage=="📅 365 روز رایگان" && $tc == "private"){
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🏅شما با استفاده از این بخش میتوانید برای گروه خودت ربات مدیریت گروه با تمام امکانات دریافت کنید

🏵قبل از دریافت ربات به نکات زیر توجه داشته باشید
➖➖➖

1⃣دریافت ربات با تمام امکانات به صورت رایگان  برای 365 روز است

2⃣ربات باید حتما در گروه ادمین باشد تا بتواند به صورت کامل عمل کند

3⃣درصورتی که نیاز به اموزش تصویری دارید از بخش راهنما اقدام کنید

4⃣ تعداد اعضا باید بیش تر از 15 نفر باشد

⚠️ تمام دسترسی ها یک ادمین را به ربات بدهید
➖➖➖➖
🔶اموزش افزودن ربات به گروه به صورت متنی :

1️⃣ابتدا با استفاده از دکمه زیر ربات را به گروه خود اضافه کنید

2️⃣سپس ربات را ادمین کنید
[اموزش ادمین کردن ربات در پیام بالا ارسال شد]

3️⃣با ارسال دستور
/addfree
یا

نصب رایگان

ربات برای شما برای 365 روز فعال میشود

4️⃣سپس با ارسال دستور
/panel
یا
/help

اقدام به انجام تنظیمات ربات کنید😄
برای افزودن ربات به گروه خود:
https://telegram.me/$GpPaybot?startgroup=addfree
را بزنید و گروهتان را انتحاب کنید
➖➖",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"📍 اضافه کردن ربات به گروه",'url'=>"https://telegram.me/$usernamebot?startgroup=addfree"],['text'=>"توسعه دهنده",'url'=>"@JimzZz"]
	],
              ]
        ])
            ]);
        } */
	elseif($textmassage=="🚦ارسال اقتراحك" && $tc == "private"){
				Mostafa('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"اقتراحاتك تساعدنا ➖➖➖➖➖ أرسل لنا اقتراحاتك وتعليقاتك لنا ➖➖➖ أرسل رسالتك",
                 'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"🔙 رجوع"]
	],
	]
	])
	]);
$user["userjop"]["{$from_id}"]["file"]="sup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
	}
elseif($update->message && $rt && in_array($from_id,$Dev) && $tc == "private"){
	Mostafa('sendmessage',[
        "chat_id"=>$chat_id,
        "text"=>"تم ارسال اقتراحك للمطور✔️"
		]);
	Mostafa('sendmessage',[
        "chat_id"=>$reply,
        "text"=>"👤الجواب الاحتياطي لك

`$textmassage`",
'parse_mode'=>'MarkDown'
		]);
}




if($data=="lockphoto" && $settings2["lock"]["photo"] == "✅ مقفول ✅" or $data=="lockvideo" && $settings2["lock"]["video"] =="✅ مقفول ✅" or $data=="lockgame" && $settings2["lock"]["game"] =="✅ مقفول ✅" or $data=="locksticker" && $settings2["lock"]["sticker"] =="✅ مقفول ✅" or $data=="lockvoice" && $settings2["lock"]["voice"] =="✅ مقفول ✅" or $data=="lockaudio" && $settings2["lock"]["audio"] =="✅ مقفول ✅"  or $data=="lockcontact" && $settings2["lock"]["contact"] =="✅ مقفول ✅" or $data=="locklocation" && $settings2["lock"]["location"] =="✅ مقفول ✅" or $data=="lockdocument" &&  $settings2["lock"]["document"] =="✅ مقفول ✅" or $data=="lockgif" && $settings2["lock"]["gif"] =="✅ مقفول ✅" or $data=="lockself" && $settings2["lock"]["video_msg"] =="✅ مقفول ✅" or $data=="locktext" && $settings2["lock"]["text"] =="✅ مقفول ✅" ){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlock = array("lockphoto","lockvideo","lockgame","locksticker","lockvoice","lockaudio","lockcontact","locklocation","lockdocument","lockgif","lockself","locktext");
$howlock = array("photo","video","game","sticker","voice","audio","contact","location","document","gif","video_msg","text");
$text = array("عکس","ویدیو","بازی","استیکر","ویس","اهنگ","مخاطب","مکان","فایل","گیف","پیام ویدیویی","متن");
$lock = str_replace($getlock,$howlock,$data);
$gettext = str_replace($getlock,$text,$data);
$settings2["lock"]["$lock"]="☑️ معطل ☑️";
$lockdocument = $settings2["lock"]["document"];
$lockgif = $settings2["lock"]["gif"];
$lockvideo_note = $settings2["lock"]["video_msg"];
$locklocation = $settings2["lock"]["location"];
$lockphoto = $settings2["lock"]["photo"];
$lockcontact = $settings2["lock"]["contact"];
$lockaudio = $settings2["lock"]["audio"];
$lockvoice = $settings2["lock"]["voice"];
$locksticker = $settings2["lock"]["sticker"];
$lockgame = $settings2["lock"]["game"];
$lockvideo = $settings2["lock"]["video"];
$locktext = $settings2["lock"]["text"];
          Mostafa('editMessageReplyMarkup',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
 [
['text'=>"📂 الملفات 📂",'callback_data'=>'text'],['text'=>"$lockdocument",'callback_data'=>'lockdocument']
],
[
['text'=>"🏞 المتحركة 🏞",'callback_data'=>'text'],['text'=>"$lockgif",'callback_data'=>'lockgif']
],
[
['text'=>"🔊 البصمات 🔊",'callback_data'=>'text'],['text'=>"$lockvideo_note",'callback_data'=>'lockself']
],
  [
 ['text'=>"🚩 المواقع 🚩",'callback_data'=>'text'],['text'=>"$locklocation",'callback_data'=>'locklocation']
 ],
   [
 ['text'=>"🌄 الصور 🌄",'callback_data'=>'text'],['text'=>"$lockphoto",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"🔢 الارقام 🔢",'callback_data'=>'text'],['text'=>"$lockcontact",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎶 الموسيقى 🎶",'callback_data'=>'text'],['text'=>"$lockaudio",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🔊 البصمات 🔊",'callback_data'=>'text'],['text'=>"$lockvoice",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎭 الملصقات 🎭",'callback_data'=>'text'],['text'=>"$locksticker",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 الألعاب 🎮",'callback_data'=>'text'],['text'=>"$lockgame",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 الفيديو 🎥",'callback_data'=>'text'],['text'=>"$lockvideo",'callback_data'=>'lockvideo']
],
 [
['text'=>"👥 الدردشة 👥",'callback_data'=>'text'],['text'=>"$locktext",'callback_data'=>'locktext']
],
[
['text'=>"🔁 الأعدادات القفل الإضافية 🔁",'callback_data'=>'other']
],
[
['text'=>"🔙 رجوع",'callback_data'=>'settings'],['text'=>"📢 تابع جديدنا 📢",'url'=>"https://t.me/BOTS_Damascus"]
],
	]
	])
	]);
	 Mostafa('answercallbackquery', [
	            'callback_query_id' =>$membercall,
            'text' => "قفل ارسال $gettext غیر فعال شد 🔓",
            'show_alert' =>false
        ]);	
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		 }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
  }
  }
elseif($data=="lockphoto" && $settings2["lock"]["photo"] == "☑️ معطل ☑️" or $data=="lockvideo" && $settings2["lock"]["video"] =="☑️ معطل ☑️" or $data=="lockgame" && $settings2["lock"]["game"] =="☑️ معطل ☑️" or $data=="locksticker" && $settings2["lock"]["sticker"] =="☑️ معطل ☑️" or $data=="lockvoice" && $settings2["lock"]["voice"] =="☑️ معطل ☑️" or $data=="lockaudio" && $settings2["lock"]["audio"] =="☑️ معطل ☑️"  or $data=="lockcontact" && $settings2["lock"]["contact"] =="☑️ معطل ☑️" or $data=="locklocation" && $settings2["lock"]["location"] =="☑️ معطل ☑️" or $data=="lockdocument" &&  $settings2["lock"]["document"] =="☑️ معطل ☑️" or $data=="lockgif" && $settings2["lock"]["gif"] =="☑️ معطل ☑️" or $data=="lockself" && $settings2["lock"]["video_msg"] =="☑️ معطل ☑️" or $data=="locktext" && $settings2["lock"]["text"] =="☑️ معطل ☑️" ){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlock = array("lockphoto","lockvideo","lockgame","locksticker","lockvoice","lockaudio","lockcontact","locklocation","lockdocument","lockgif","lockself","locktext");
$howlock = array("photo","video","game","sticker","voice","audio","contact","location","document","gif","video_msg","text");
$text = array("عکس","ویدیو","بازی","استیکر","ویس","اهنگ","مخاطب","مکان","فایل","گیف","پیام ویدیویی","متن");
$lock = str_replace($getlock,$howlock,$data);
$gettext = str_replace($getlock,$text,$data);
$settings2["lock"]["$lock"]="✅ مقفول ✅";
$lockdocument = $settings2["lock"]["document"];
$lockgif = $settings2["lock"]["gif"];
$lockvideo_note = $settings2["lock"]["video_msg"];
$locklocation = $settings2["lock"]["location"];
$lockphoto = $settings2["lock"]["photo"];
$lockcontact = $settings2["lock"]["contact"];
$lockaudio = $settings2["lock"]["audio"];
$lockvoice = $settings2["lock"]["voice"];
$locksticker = $settings2["lock"]["sticker"];
$lockgame = $settings2["lock"]["game"];
$lockvideo = $settings2["lock"]["video"];
$locktext = $settings2["lock"]["text"];
          Mostafa('editMessageReplyMarkup',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'reply_markup'=>json_encode([
	'inline_keyboard'=>[
 [
['text'=>"📂 الملفات 📂",'callback_data'=>'text'],['text'=>"$lockdocument",'callback_data'=>'lockdocument']
],
[
['text'=>"🏞 المتحركة 🏞",'callback_data'=>'text'],['text'=>"$lockgif",'callback_data'=>'lockgif']
],
[
['text'=>"🔊 البصمات 🔊",'callback_data'=>'text'],['text'=>"$lockvideo_note",'callback_data'=>'lockself']
],
  [
 ['text'=>"🚩 المواقع 🚩",'callback_data'=>'text'],['text'=>"$locklocation",'callback_data'=>'locklocation']
 ],
   [
 ['text'=>"🌄 الصور 🌄",'callback_data'=>'text'],['text'=>"$lockphoto",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"🔢 الارقام 🔢",'callback_data'=>'text'],['text'=>"$lockcontact",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎶 الموسيقى 🎶",'callback_data'=>'text'],['text'=>"$lockaudio",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🔊 البصمات 🔊",'callback_data'=>'text'],['text'=>"$lockvoice",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎭 الملصقات 🎭",'callback_data'=>'text'],['text'=>"$locksticker",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 الألعاب 🎮",'callback_data'=>'text'],['text'=>"$lockgame",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 الفيديو 🎥",'callback_data'=>'text'],['text'=>"$lockvideo",'callback_data'=>'lockvideo']
],
 [
['text'=>"👥 الدردشة 👥",'callback_data'=>'text'],['text'=>"$locktext",'callback_data'=>'locktext']
],
[
['text'=>"🔁 الأعدادات القفل الإضافية 🔁",'callback_data'=>'other']
],
[
['text'=>"🔙 رجوع",'callback_data'=>'settings'],['text'=>"📢 تابع جديدنا 📢",'url'=>"https://t.me/BOTS_Damascus"]
],
	]
	])
	]);
	 Mostafa('answercallbackquery', [
	            'callback_query_id' =>$membercall,
            'text' => "تم قفل {$lock} بنجاح ، ✅",
            'show_alert' =>false
        ]);	
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		 }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"للادمنية فقط",
]);
  }
  }
elseif($data=="lockforward" && $settings2["lock"]["forward"] =="✅ مقفول ✅" or $data=="lockfosh" && $settings2["lock"]["fosh"] =="✅ مقفول ✅" or $data=="lockedit" && $settings2["lock"]["edit"] =="✅ مقفول ✅" or $data=="lockusername" && $settings2["lock"]["username"] =="✅ مقفول ✅" or $data=="locklink" && $settings2["lock"]["link"] == "✅ مقفول ✅" or $data=="lockbot" && $settings2["lock"]["bot"] =="✅ مقفول ✅"  or $data=="locktgservic" && $settings2["lock"]["tgservic"] =="✅ مقفول ✅" or $data=="lockreply" && $settings2["lock"]["reply"] =="✅ مقفول ✅" or $data=="lockcmd" && $settings2["lock"]["cmd"] =="✅ مقفول ✅" or $data=="locktag" && $settings2["lock"]["tag"] =="✅ مقفول ✅"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlock = array("lockforward","lockfosh","lockedit","lockusername","locklink","lockbot","locktgservic","lockreply","lockcmd","locktag");
$howlock = array("forward","fosh","edit","username","link","bot","tgservic","reply","cmd","tag");
$text = array("فوروارد","کلمات رکیک","ویرایش","یوزرنیم","لینک","ورود ربات","خدمت تلگرام","ریپلای","دستورات عمومی","هشتگ");
$lock = str_replace($getlock,$howlock,$data);
$gettext = str_replace($getlock,$text,$data);
$settings2["lock"]["$lock"]="☑️ معطل ☑️";
$locklink = $settings2["lock"]["link"];
$lockusername = $settings2["lock"]["username"];
$locktag = $settings2["lock"]["tag"];
$lockedit = $settings2["lock"]["edit"];
$lockfosh = $settings2["lock"]["fosh"];
$lockbots = $settings2["lock"]["bot"];
$lockforward = $settings2["lock"]["forward"];
$locktg = $settings2["lock"]["tgservic"];
$lockreply = $settings2["lock"]["reply"];
$lockcmd = $settings2["lock"]["cmd"];
          Mostafa('editMessageReplyMarkup',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
              'reply_markup'=>json_encode([
       'inline_keyboard'=>[
 [
 ['text'=>"🔗 الروابط 🔗",'callback_data'=>'text'],['text'=>"$locklink",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"#⃣ التاك #⃣",'callback_data'=>'text'],['text'=>"$locktag",'callback_data'=>'locktag']
 ],
   [
 ['text'=>"🌀 المعرفات 🌀",'callback_data'=>'text'],['text'=>"$lockusername",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 التعديل 📝",'callback_data'=>'text'],['text'=>"$lockedit",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"⚠️ الكلمات السيئات ⚠️",'callback_data'=>'text'],['text'=>"$lockfosh",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 دخول البوتات 🤖",'callback_data'=>'text'],['text'=>"$lockbots",'callback_data'=>'lockbot']
],
  [
 ['text'=>"🔁 التوجيه 🔁",'callback_data'=>'text'],['text'=>"$lockforward",'callback_data'=>'lockforward']
 ],
[
['text'=>"🔰خدمات تيليجرام🔰",'callback_data'=>'text'],['text'=>"$locktg",'callback_data'=>'locktgservic']
],
[
['text'=>"↩️ رد الرسائل ↪️",'callback_data'=>'text'],['text'=>"$lockreply",'callback_data'=>'lockreply']
],
[
['text'=>"🔑 الأوامر العامة 🔑",'callback_data'=>'text'],['text'=>"$lockcmd",'callback_data'=>'lockcmd']
],
[
['text'=>"🔁 الأعدادات القفل الإضافية 🔁",'callback_data'=>'media']
],
[
['text'=>"🔙 رجوع",'callback_data'=>'settings'],['text'=>"📢 تابع جديدنا 📢",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"]
],
	]
	])
	]);
	 Mostafa('answercallbackquery', [
	            'callback_query_id' =>$membercall,
            'text' => "تم قفل {$lock} بنجاح ، ✅",
            'show_alert' =>false
        ]);	
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		 }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"للادمنية فقط",
]);
  }
  }
elseif($data=="lockforward" && $settings2["lock"]["forward"] =="☑️ معطل ☑️" or $data=="lockfosh" && $settings2["lock"]["fosh"] =="☑️ معطل ☑️" or $data=="lockedit" && $settings2["lock"]["edit"] =="☑️ معطل ☑️" or $data=="lockusername" && $settings2["lock"]["username"] =="☑️ معطل ☑️" or $data=="locklink" && $settings2["lock"]["link"] == "☑️ معطل ☑️" or $data=="lockbot" && $settings2["lock"]["bot"] =="☑️ معطل ☑️"  or $data=="locktgservic" && $settings2["lock"]["tgservic"] =="☑️ معطل ☑️" or $data=="lockreply" && $settings2["lock"]["reply"] =="☑️ معطل ☑️" or $data=="lockcmd" && $settings2["lock"]["cmd"] =="☑️ معطل ☑️" or $data=="locktag" && $settings2["lock"]["tag"] =="☑️ معطل ☑️"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlock = array("lockforward","lockfosh","lockedit","lockusername","locklink","lockbot","locktgservic","lockreply","lockcmd","locktag");
$howlock = array("forward","fosh","edit","username","link","bot","tgservic","reply","cmd","tag");
$text = array("فوروارد","کلمات رکیک","ویرایش","یوزرنیم","لینک","ورود ربات","خدمت تلگرام","ریپلای","دستورات عمومی","هشتگ");
$lock = str_replace($getlock,$howlock,$data);
$gettext = str_replace($getlock,$text,$data);
$settings2["lock"]["$lock"]="✅ مقفول ✅";
$locklink = $settings2["lock"]["link"];
$lockusername = $settings2["lock"]["username"];
$locktag = $settings2["lock"]["tag"];
$lockedit = $settings2["lock"]["edit"];
$lockfosh = $settings2["lock"]["fosh"];
$lockbots = $settings2["lock"]["bot"];
$lockforward = $settings2["lock"]["forward"];
$locktg = $settings2["lock"]["tgservic"];
$lockreply = $settings2["lock"]["reply"];
$lockcmd = $settings2["lock"]["cmd"];
          Mostafa('editMessageReplyMarkup',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
              'reply_markup'=>json_encode([
            'inline_keyboard'=>[
 [
 ['text'=>"🔗 الروابط 🔗",'callback_data'=>'text'],['text'=>"$locklink",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"#⃣ التاك #⃣",'callback_data'=>'text'],['text'=>"$locktag",'callback_data'=>'locktag']
 ],
   [
 ['text'=>"🌀 المعرفات 🌀",'callback_data'=>'text'],['text'=>"$lockusername",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 التعديل 📝",'callback_data'=>'text'],['text'=>"$lockedit",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"⚠️ الكلمات السيئات ⚠️",'callback_data'=>'text'],['text'=>"$lockfosh",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 دخول البوتات 🤖",'callback_data'=>'text'],['text'=>"$lockbots",'callback_data'=>'lockbot']
],
  [
 ['text'=>"🔁 التوجيه 🔁",'callback_data'=>'text'],['text'=>"$lockforward",'callback_data'=>'lockforward']
 ],
[
['text'=>"🔰خدمات تيليجرام🔰",'callback_data'=>'text'],['text'=>"$locktg",'callback_data'=>'locktgservic']
],
[
['text'=>"↩️ رد الرسائل ↪️",'callback_data'=>'text'],['text'=>"$lockreply",'callback_data'=>'lockreply']
],
[
['text'=>"🔑 الأوامر العامة 🔑",'callback_data'=>'text'],['text'=>"$lockcmd",'callback_data'=>'lockcmd']
],
[
['text'=>"🔁 الأعدادات القفل الإضافية 🔁",'callback_data'=>'media']
],
[
['text'=>"🔙 رجوع",'callback_data'=>'settings'],['text'=>"📢 تابع جديدنا 📢",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"]
],
	]
	])
	]);
	 Mostafa('answercallbackquery', [
	            'callback_query_id' =>$membercall,
            'text' => "تم قفل {$lock} بنجاح ، ✅",
            'show_alert' =>false
        ]);	
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		 }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"للادمنية فقط",
]);
  }
  }
  elseif($data=="charge"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$locklink = $settings["lock"]["link"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockcmd = $settings["lock"]["cmd"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
$text = str_replace("| فعال |","","⭕️اعدادات المجموعة
➖➖➖➖➖
⚙️حالة الحماية والقفل  
 :

🛠 حالة الادارة والادمنية :

🎗》🔒الروابط : $locklink
🎗》🔒التاك : $locktag
🎗》🔒المعرفات : $lockusername
🎗》🔒التعديل : $lockedit
🎗》🔒السيئات : $lockfosh
🎗》🔒البوتات : $lockbots
🎗》🔒التوجيه : $lockforward
🎗》🔒خدمات التلجرام : $locktg
🎗》🔒الرد : $lockreply
🎗》🔒الاوامر االعامة : $lockcmd
➖➖➖➖
📂قفل الاوامر :

🎗》🔒الملفات : $lockdocument
🎗》🔒المتحركة : $lockgif
🎗》🔒تسجيل الفيديو : $lockvideo_note
🎗》🔒الموقع : $locklocation
🎗》🔒الصور : $lockphoto
🎗》🔒ارسال الارقام : $lockcontact
🎗》🔒الموسيقى / الصوت : $lockaudio
🎗》🔒البصمة : $lockvoice
🎗》🔒الملصقات : $locksticker
🎗》🔒الالعاب : $lockgame
🎗》🔒الفيديو : $lockvideo
🎗》🔒الدردشة : $locktext
➖➖➖
🚦اوامر الاضافية :

♨️كتم الكل :  $mute_all
🔅الترحيب : $welcome
🔱 اضافة الاعضاء : $add
⚠️التحذيرات : $setwarn
قفل الالي : $lockauto
⏲الوقت : $date1
⏰زمان شروع سکوت گروه : $startlock
🕰زمان خاموش شدن سکوت گروه : $endlock
📝قفل کاراکتر : $lockcharacter
🖍حداقل تعداد کاراکتر پیام : $startlockcharacter
🖌حداکثر تعداد کراکتر پیام : $endlockcharacter
➖➖
📌معلومات المجموعة :

🔸اسم المجموعة : $namegroup
🔹ايدي االمجموعة : [$chat_id]
📦عدد الايام المتبقية : $charge
📍 معرفك : @$username
➖➖➖➖➖➖➖");
$text2 = str_replace("| غیر فعال |","","$text");
	            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
 'text'=>"$text2",
'reply_to_message_id'=>$message_id,
   ]);
}
}


if (strpos($textmassage , "/charge ") !== false && in_array($from_id,$Dev) or strpos($textmassage , "تنظیم شارژ ") !== false && in_array($from_id,$Dev)) {
	$num = str_replace(['/charge ','تنظیم شارژ '],'',$textmassage);
	if ($num <= 1000 && $num >= 1){
		date_default_timezone_set('Asia/Damascus');
		$date1 = date('Y-m-d', time());
		$date2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
		$next_date = date('Y-m-d', strtotime($date2 ." +$num day"));
			  Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"شارژ گروه با موفقیت به $num روز دیگر تنظیم شد✅
➖➖➖➖➖➖➖➖
🔹تاریخ امروز : $date1

🔸تاریخ اتمام شارژ : $next_date
➖➖➖➖
🚩اطلاعات گروه :

🔅ایدی گروه : [$chat_id]

💭نام گروه : [$namegroup]
➖➖➖➖
🔖توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["expire"]="$next_date";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }else{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"خطا ⚠️
➖➖➖➖➖➖
💭عدد وارد شده باید بین 1 تا 1000 باشد",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
// check charge
elseif($textmassage == "میزان شارژ" or $textmassage == "/check"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
date_default_timezone_set('Asia/Damascus');
$date3 = date('Y-m-d');
$date2 = date('d');
$date1 = date('m');
$ndate = $settings["information"]["expire"];
$rdate = $settings["information"]["dataadded"];
$gettime2 = date('d', strtotime($ndate));
$gettime1 = date('m', strtotime($ndate));
$gettime = $gettime1 - $date1 ;
$gettime2 = $gettime2 - $date2 ;
$ingettime = $gettime * 30 ;
$endtime = $ingettime + $gettime2 ;
        Mostafa('sendmessage', [
            "chat_id" => $chat_id,
            "text" => "به بخش میزان شارژ گروه خوش امدید💎
➖➖➖➖➖➖➖➖
🔖اطلاعات گروه شما :

🔸ایدی گروه : [$chat_id]

🔹نام گروه : [$namegroup]
➖➖➖➖
اطلاعات تاریخ انقضای گروه🔻",
            'reply_to_message_id'=>$message_id,
        'reply_markup'=>json_encode([
            'resize_keyboard'=>true,
            'inline_keyboard'=>[
                [
                    ['text'=>"🔻تاریخ امروز🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"🔹 $date3 🔸",'callback_data'=>'text']
                ],
                [
                    ['text'=>"🔻تاریخ اتمام شارژ 🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"🔹 $ndate 🔸",'callback_data'=>'text']
                ],
                [
                    ['text'=>"🔻تاریخ ثبت شارژ 🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"🔹 $rdate 🔸",'callback_data'=>'text']
                ],
				                [
                    ['text'=>"🔻میزان شارژ گروه🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"📶 $endtime روز دیگر",'callback_data'=>'text']
                ],

					 [
					 ['text'=>"📦 خرید شارژ",'callback_data'=>'requstcharge']
					 ],
					 									 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"✖️ خروج",'callback_data'=>'exit']
					 ],
            ]
        ])
        ]);
}
}
  elseif($data=="charge"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
date_default_timezone_set('Asia/Damascus');
$date3 = date('Y-m-d');
$date2 = date('d');
$date1 = date('m');
$ndate = $settings2["information"]["expire"];
$rdate = $settings2["information"]["dataadded"];
$gettime2 = date('d', strtotime($ndate));
$gettime1 = date('m', strtotime($ndate));
$gettime = $gettime1 - $date1 ;
$gettime2 = $gettime2 - $date2 ;
$ingettime = $gettime * 30 ;
$endtime = $ingettime + $gettime2 ;
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش میزان شارژ گروه خوش امدید💎
➖➖➖➖➖➖➖➖
🔖اطلاعات گروه شما :

🔸ایدی گروه : [$chatid]

🔹نام گروه : [$gpname]
➖➖➖➖
اطلاعات تاریخ انقضای گروه🔻",
        'reply_markup'=>json_encode([
            'resize_keyboard'=>true,
            'inline_keyboard'=>[
                [
                    ['text'=>"🔻تاریخ امروز🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"🔹 $date3 🔸",'callback_data'=>'text']
                ],
                [
                    ['text'=>"🔻تاریخ اتمام شارژ 🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"🔹 $ndate 🔸",'callback_data'=>'text']
                ],
                [
                    ['text'=>"🔻تاریخ ثبت شارژ 🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"🔹 $rdate 🔸",'callback_data'=>'text']
                ],
				                [
                    ['text'=>"🔻میزان شارژ گروه🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"📶 $endtime روز دیگر",'callback_data'=>'text']
                ],
									 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit'],['text'=>"📦 خرید شارژ",'callback_data'=>'requstcharge']
   ],
            ]
        ])
        ]);
				 }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
}
  }
// panel for sharge
if (strpos($textmassage , "/sendcharge ") !== false && in_array($from_id,$Dev) or strpos($textmassage , "ارسال شارژ ") !== false && in_array($from_id,$Dev)) {
    $panels = str_replace(['/sendcharge ','ارسال شارژ '],'',$textmassage);
	$modified = ltrim($panels);
    $jam = "$modified";
    date_default_timezone_set('Asia/Damascus');
    $date1 = date('Y-m-d', time());
    $date2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
    $next_date = date('Y-m-d', strtotime($date2 ." +30 day"));
			       Mostafa('sendmessage',[
            'chat_id'=>$panels,
            'text'=>"گروه با موفقیت 30 روز شارژ شد✅"
   ]);
        Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"گروه مورد نظر با موفقیت 30 روز شارژ شد✅
➖➖➖➖➖➖
🔖ایدی گروه : [$panels]

🔸تاریخ امروز : [$date1]

🔹تاریخ انقضای شارژ گروه : [$next_date]
➖➖➖
✨توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
@$getsettings = file_get_contents("data/$jam.json");
@$settings = json_decode($getsettings,true);
$settings["information"]["expire"]="$next_date";
$settings = json_encode($settings,true);
file_put_contents("data/$jam.json",$settings);
}
// panel charge in pv
if ($textmassage == "/request" or $textmassage == "درخواست شارژ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$ndate = $settings["information"]["expire"];
$charge = $settings["information"]["charge"];
$rdate = $settings["information"]["dataadded"];
	Mostafa('sendmessage',[
  'chat_id'=>$chat_id,
  'reply_to_message_id'=>$message_id,
        'text'=>"درخواست شما برای شارژ گروه ارسال شد لطفا با پشتیبانی در ارتباط باشید✅",
  ]);
 Mostafa('sendmessage',[
  'chat_id'=>$Dev[0],
        'text'=>"گروه 🔻 $namegroup 🔻تقاظایی شارژ 🔝گروه کرده اند😃✔️
➖➖➖
📍 ثبت ربات در تاریخ : [$rdate]
📍 تاریخ شارژ آخر گروه : [$charge]
📍 مقدار شارژ فعلی : [$ndate]
💥مشخصات فرد ارسال کننده :
➖➖➖➖➖➖➖
📍 ایدی : [ $from_id ]
📍 نام : [ $first_name ]
📍 یوزرنیم : [ @$username ]
➖➖➖➖➖
🎉مشخصات گروه :

📍 ایدی گروه : [ $chat_id ]
📍 لینک گروه : [ $getlinkde  ]",
        ]);
}
}
// lock character
		    elseif($data=="character"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
			   
📍 شما در این قسمت میتوانید حداکثر یا حداقل تعداد حروف پیام را تایین کنید
➖➖➖➖➖➖➖➖
🚩 از دکمه های زیر استفاده کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
						    elseif($data=="lockcharacter" &&  $settings2["lock"]["lockcharacter"] == "☑️ معطل ☑️"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
➖➖➖➖➖➖➖➖
📍 قفل کاراکتر پیام فعال شد",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"✅ مقفول ✅",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["lock"]["lockcharacter"]="✅ مقفول ✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
		    elseif($data=="lockcharacter" &&  $settings2["lock"]["lockcharacter"] == "✅ مقفول ✅"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
➖➖➖➖➖➖➖➖
📍 قفل کاراکتر پیام غیر فعال شد",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"☑️ معطل ☑️",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["lock"]["lockcharacter"]="☑️ معطل ☑️";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
		    elseif($data=="uppluscharacter"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$pluscharacterplus = $pluscharacter + 10 ;
$downcharacter = $settings2["information"]["downcharacter"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
➖➖➖➖➖➖➖➖
🚩 حداکثر تعداد کاراکتر 10 عدد افزایش یافت",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacterplus",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["pluscharacter"]="$pluscharacterplus";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
			    elseif($data=="dempluscharacter"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$pluscharacterplus = $pluscharacter - 10 ;
if($pluscharacterplus >= 0){
$downcharacter = $settings2["information"]["downcharacter"];
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
➖➖➖➖➖➖➖➖
🚩 حداکثر تعداد کاراکتر 10 عدد کاهش یافت",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacterplus",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["pluscharacter"]="$pluscharacterplus";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }
		   else
		   {
			  			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"امکان تغییر به پایین تر از عدد 0 وجود ندارد ⚠️",
]); 
		 }
				}
		   else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
						 elseif($data=="demdowncharacter"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
$downcharacterplus = $downcharacter - 10 ;
if($downcharacterplus >= 0){
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
➖➖➖➖➖➖➖➖
🚩 حداقل تعداد کاراکتر 10 عدد کاهش یافت",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacterplus",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["downcharacter"]="$downcharacterplus";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }
		   else
		   {
			  			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"امکان تغییر به پایین تر از عدد 0 وجود ندارد ⚠️",
]); 
		 }
				}
		   else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
							elseif($data=="updowncharacter"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
$downcharacterplus = $downcharacter + 10 ;
            Mostafa('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
➖➖➖➖➖➖➖➖
🚩 حداقل تعداد کاراکتر 10 عدد افزایش یافت",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacterplus",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"🎉 کانال ما",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["downcharacter"]="$downcharacterplus";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			Mostafa('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}


if($textmassage == '/leave'  or $textmassage == 'leave'  or $textmassage == 'ترک'){
if (in_array($from_id,$Dev)){
Mostafa('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"🔖ربات از گروه با اطلاعات :
➖➖➖➖➖

🔹ایدی گروه : [$chat_id]

🔸نام گروه : [$namegroup]

💥ارسال کننده دستور : [ @$username ]
➖➖➖
در حال خروج است✔️",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
Mostafa('LeaveChat',[
  'chat_id'=>$chat_id,
  ]);
  }
}
  elseif($textmassage == '/rem' or $textmassage == 'rem'  or  $textmassage == 'حذف' ){
	  if (in_array($from_id,$Dev)){
Mostafa('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"گروه از لیست گروه های پشتیبانی ربات حذف شد✅
➖➖➖➖
🔖اطلاعات گروه شما :

🔸ایدی گروه : [$chat_id]

🔹نام گروه : [$namegroup]

🔖دیگر پیام های این گروه برسی نمیشود
➖➖➖➖➖
💥کانال ما :
🚀 @$channel
➖➖➖➖➖➖➖➖
🚩توسط :\n@$username",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
unlink("data/$chat_id.json");
   }  
  }   
 // tools and cmd
 //rules
elseif($textmassage=="القوانين" or $textmassage=="ruرles" or $textmassage=="قورانین"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔖 قوانین الجروب الحالية :
➖➖➖➖➖➖➖➖
$text",
		 
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }   
}
}
else
{
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔖 قوانين الجروب الحالية :
➖➖➖➖➖➖➖➖
$text",
		 
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
elseif (strpos($textmassage , '/setrules ') !== false or strpos($textmassage , 'ضع القوانين ') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setrules ','ضع القوانين '],'',$textmassage);
$plus = mb_strlen("$code");
if($plus < 600) {
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم وضع قوانين جديدة بنجاح

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["rules"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يمكنك ارسال قوانين تتكون من 600 حرف فقط ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);	
}
}
}
//pin
elseif($rt && $textmassage=="تثبيت"  or $rt && $textmassage=="piزززn" or $rt && $textmassage=="سنجاق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
 Mostafa('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم تثبيت الرسالة بنجاح

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
elseif($textmassage=="الغاء تثبيت"  or  $textmassage=="unوpin"  or  $textmassage=="حذف سنجاق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
 Mostafa('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم الغاء تثبيت الرسالة بنجاح

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
// kick
elseif(strpos($textmassage ,"/kick ") !== false or strpos($textmassage ,"طرد ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$text = str_replace(['/kick ',' طرد '],'',$textmassage);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
	Mostafa('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text
      ]);
              Mostafa('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"👨‍✈️¦ العضو ↫ @$username
🐾¦ تم طرده من الجروب ،  ✅ •

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);

   }
}
 elseif($rt && $textmassage=="حظر"  or $rt && $textmassage=="طرد" or $rt && $textmassage== "تت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
	Mostafa('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم حظره من الجروب ،  ✅ •

✓",
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"❌¦ لايمكن طرد الادمنية والمدراء ، 🚫",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
   //del
elseif($rt && $textmassage == "حذف" or $rt && $textmassage == "dرel" or $rt && $textmassage == "حذررف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$re_msgid
    ]);
	 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
 }
}
// rmsg
elseif ( strpos($textmassage , 'مسح ') !== false or strpos($textmassage , 'پاک کردن ') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$num = str_replace(['مسح ','پاک کردن '],'',$textmassage);
if ($num <= 300 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
Mostafa('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"🚸¦ تم حذف $num من الرسائل بنجاح ، ✅",
'reply_markup'=>$inlinebutton,
   ]);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"- لم يتم تفعيل البوت بعد ، ارسل تفعيل لتفعيل البوت ، ✅",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
//  setname
elseif ( strpos($textmassage , '/setname ') !== false or strpos($textmassage , 'ضع الاسم ') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$newname= str_replace(['/setname ','ضع الاسم '],'',$textmassage);
 Mostafa('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم وضع الاسم {$newname} بنجاح

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
}
// description
elseif ( strpos($textmassage , '/setdescription ') !== false or strpos($textmassage , 'ضع الوصف ') !== false  ) {
$newdec= str_replace(['/setdescription ','ضع الوصف '],'',$textmassage);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
 Mostafa('setChatDescription',[
    'chat_id'=>$chat_id,
    'description'=>$newdec
      ]);
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم وضع الوصف {$newdec} بنجاح

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
}
// set photo
elseif($textmassage=="/delphoto" or $textmassage=="delphoto" or $textmassage=="حذف عکس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
Mostafa('deleteChatPhoto',[
   'chat_id'=>$chat_id,
     ]);
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"عکس گروه با موفقیت حذف شد ✅
➖➖➖➖➖➖
🔖توسط : [ @$username ]

💥جهت تنظیم عکس گروه دستور [/setphoto] را ارسال کنید",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
}
elseif($textmassage=="/setpوhoto" or $textmassage=="setphoto" or $textmassage=="تنظیم عکس"){

if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$photo = $update->message->reply_to_message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = Mostafa('getfile',['file_id'=>$file]);
      	  $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
Mostafa('setChatPhoto',[
   'chat_id'=>$chat_id,
   'photo'=>new CURLFile("data/photogp.png")
     ]);
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"عکس گروه با موفقیت تغییر کرد ✅
➖➖➖➖➖➖
🔖توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
unlink("data/photogp.png");
 }
}
// link
 elseif($textmassage=="الرابط" or $textmassage=="liتnk" or $textmassage=="لینوک"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
Mostafa('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"🌿┇رابط المجموعة 👮‍♀
   
🌿┇`$namegroup`
🌿┇$getlinkde",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
 }
 }
else
{
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
Mostafa('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"🌿┇رابط المجموعة 👮‍♀
   
🌿┇`$namegroup`
🌿┇$getlinkde",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
 }
// warn
elseif($textmassage=="/warn" && $rt or $textmassage=="warn" && $rt or $textmassage=="اخطار" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn + 1;	
if ($warnplus >= $setwarn) {
$hardmodewarn = $settings["information"]["hardmodewarn"];
if($hardmodewarn == "🚷 اخراج کاربر"){
Mostafa('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
	]);
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
📮 نام : [$re_name]

🔹 یوزرنیم : [ @$re_user ]

🔸 ایدی : [$re_id]
➖➖
🔹 به خاطر رسیدن اخطار ها به حداکثر اخراج شد",
   ]);
 }
else
{
   Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
		 	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
📮 نام : [$re_name]

🔹 یوزرنیم : [ @$re_user ]

🔸 ایدی : [$re_id]
➖➖
🔹 به خاطر رسیدن اخطار ها به حداکثر سکوت شد",
   ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
📮 نام : [$re_name]

🔹 یوزرنیم : [ @$re_user ]

🔸 ایدی : [$re_id]
➖➖
✅  یک اخطار گرفت
🔹 تعداد اخطار ها : $warnplus
🔸 حداکثر اخطار : $setwarn",
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
 else
 {
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور  `نصب ` یا  `/add ` میتوانید ربات را  رایگان فعال کنید",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
 }
else
{
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 من نمیتوانم ادمین ها , صاحبان و مدیران گروه و خود را اخطار بدهم",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
 elseif($textmassage=="/unwarn" && $rt or $textmassage=="unwarn" && $rt or $textmassage=="حذف اخطار"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn - 1;	
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
📮 نام : [$re_name]

🔹 یوزرنیم : [ @$re_user ]

🔸 ایدی : [$re_id]
➖➖
✅  یک اخطارش حذف شد
🔹 تعداد اخطار ها : $warnplus
🔸 حداکثر اخطار : $setwarn",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
 }
 else
 {
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور  `نصب ` یا  `/add ` میتوانید ربات را  رایگان فعال کنید",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
 }
}
}
elseif ( strpos($textmassage , '/setwarn ') !== false or strpos($textmassage , 'تنظیم اخطار ') !== false  ) {
$newdec = str_replace(['/setwarn ','تنظیم اخطار '],'',$textmassage);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
if ($newdec <= 20 && $newdec >= 1){
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"🔖 تعداد اخطار ها تغییر کرد
➖➖➖➖➖
🔸حداکثر تعداد اخطار : $newdec

➖➖➖➖
🚩توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setwarn"]="$newdec";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }else{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"خطا⚠️
➖➖➖➖➖➖
عدد وارد شده باید بین 1 تا 20 باشد",
'reply_markup'=>$inlinebutton,
   ]);
 }
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور  `نصب ` یا  `/add ` میتوانید ربات را  رایگان فعال کنید",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($textmassage=="/warn info" or $textmassage=="warn info" or $textmassage=="اطلاعات اخطار"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){  
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
📮 نام : [$re_name]

🔹 یوزرنیم : [ @$re_user ]

🔸 ایدی : [$re_id]
➖➖
🔹 تعداد اخطار ها : $warn
🔸 حداکثر اخطار : $setwarn",
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
 }
 }
 }


if($textmassage == "تفعيل مجاني" or $textmassage == "addfree" or $textmassage == " نصب رایگان" or $textmassage == "/start@$usernamebot addfree" or $textmassage == "/addfree@$usernamebot") {
if ( $status == 'creator' or $status == 'administrator'){
$url = file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chat_id");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
$add = $settings["information"]["added"];
$dataadd = $settings["information"]["dataadded"];
if ($add == true) {
Mostafa('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"- تم تفعيل البوت من قبل ، 📛 
        
        - بتاريخ : $dataadd 📆
",
  'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
['text'=>"",'url'=>"https://t.me/joinchat/AAAAAEUrI03tPkDF6ADSbg"],['text'=>"$dataadd",'callback_data'=>"text"]
	  ],
   ]
   ])
     ]); 
}
else
{
if($howmember >= 15){
Mostafa('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم تفعيل البوت في المجموعة ، ✅

- ارسل {الاوامر} لعرض اوامر البوت ، 📜

✓",
'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	  	  	 [
				 ['text'=>"",'callback_data'=>"back"],['text'=>"",'callback_data'=>"help"]
		 ],
		            [
         ['text'=>"- تابعنا ، 📡",'url'=>"https://t.me/tbbots"]
     ],
	 ],
	   ])
 ]); 
		        Mostafa('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>" تم اضافة المجموعة إلى قائمة المجموعات ✅
➖➖➖➖➖
🚩معلومات المجموعة :

🔅ايدي المجموعة : [$chat_id]

💭اسم المجموعة : [$namegroup]

$getlinkde

", 
        ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                "text": "☑️ معطل ☑️",
                "photo": "☑️ معطل ☑️",
                "link": "☑️ معطل ☑️",
                "tag": "☑️ معطل ☑️",
				"username": "☑️ معطل ☑️",
                "sticker": "☑️ معطل ☑️",
                "video": "☑️ معطل ☑️",
                "voice": "☑️ معطل ☑️",
                "audio": "☑️ معطل ☑️",
                "gif": "☑️ معطل ☑️",
                "bot": "☑️ معطل ☑️",
                "forward": "☑️ معطل ☑️",
                "document": "☑️ معطل ☑️",
                "tgservic": "☑️ معطل ☑️",
				"edit": "☑️ معطل ☑️",
				"reply": "☑️ معطل ☑️",
				"contact": "☑️ معطل ☑️",
				"location": "☑️ معطل ☑️",
				"game": "☑️ معطل ☑️",
				"cmd": "☑️ معطل ☑️",
				"mute_all": "☑️ معطل ☑️",
				"mute_all_time": "☑️ معطل ☑️",
				"fosh": "☑️ معطل ☑️",
				"lockauto": "☑️ معطل ☑️",
				"lockcharacter": "☑️ معطل ☑️",
				"video_msg": "☑️ معطل ☑️"
			},
			"information": {
            "added": "true",
			"welcome": "☑️ معطل ☑️",
			"add": "☑️ معطل ☑️",
			"lockchannel": "☑️ معطل ☑️",
			"hardmodebot": "☑️ معطل ☑️",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 روز",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"textwelcome": "مرحبا ياعزيزي",
			"rules": "لايوجد",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
if ($add != true) {
Mostafa('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"📍 عدد الاعضاء قليل جدا
➖➖
📌ليس لديك مايكفي م̷ـــِْن الاعضاء على. الاقل [15]
",
  'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	 	[
['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"]
	  ],
   ]
   ])
     ]); 
}
}
}
}
}
//add
elseif ($textmassage == "/add"  or $textmassage == "add" or $textmassage == "تفعيل") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$add = $settings["information"]["added"];
if ($add != true) {
Mostafa('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"- تم تفعيل المجموعه √

ꪜ",
'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	  	  	 [
				 ['text'=>"",'callback_data'=>"clcc"],['text'=>"",'callback_data'=>"settings"]
		 ],
		            [
         ['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"]
     ],
	 ],
	   ])
 ]);
 
 		        Mostafa('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"تم اضافة مجموعة جديدة بواسطة المشرف ✅
➖➖➖➖➖
🚩معلومات المجموعة  :

🔅ايدي المجموعة : [$chat_id]

💭اسم المجموعة : [$namegroup]

🔖توسط : [ @$username ] 

$getlinkde
", 
        ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                "text": "☑️ معطل ☑️",
                "photo": "☑️ معطل ☑️",
                "link": "☑️ معطل ☑️",
                "tag": "☑️ معطل ☑️",
				"username": "☑️ معطل ☑️",
                "sticker": "☑️ معطل ☑️",
                "video": "☑️ معطل ☑️",
                "voice": "☑️ معطل ☑️",
                "audio": "☑️ معطل ☑️",
                "gif": "☑️ معطل ☑️",
                "bot": "☑️ معطل ☑️",
                "forward": "☑️ معطل ☑️",
                "document": "☑️ معطل ☑️",
                "tgservic": "☑️ معطل ☑️",
				"edit": "☑️ معطل ☑️",
				"reply": "☑️ معطل ☑️",
				"contact": "☑️ معطل ☑️",
				"location": "☑️ معطل ☑️",
				"game": "☑️ معطل ☑️",
				"cmd": "☑️ معطل ☑️",
				"mute_all": "☑️ معطل ☑️",
				"mute_all_time": "☑️ معطل ☑️",
				"fosh": "☑️ معطل ☑️",
				"lockauto": "☑️ معطل ☑️",
				"lockcharacter": "☑️ معطل ☑️",
				"video_msg": "☑️ معطل ☑️"
			},
			"information": {
            "added": "true",
			"welcome": "☑️ معطل ☑️",
			"add": "☑️ معطل ☑️",
			"lockchannel": "☑️ معطل ☑️",
			"hardmodebot": "☑️ معطل ☑️",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 روز",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "مرحبا بك عزيزي",
			"rules": "لايوجد",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
Mostafa('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"- تم تفعيل البوت سابقا 
        
        - بتاريخ : $dataadd 📆
",
  'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
  ['text'=>"",'callback_data'=>"clcc"],['text'=>"",'callback_data'=>"settings"]
  ],
  [
['text'=>"- لمسات برمجيه ✅",'url'=>"https://t.me/C3D3D"],['text'=>"",'callback_data'=>"text"]
	  ],
   ]
   ])
     ]); 
}
}
}
}
//automatic
elseif ($textmassage == "قفل الكل"  or $textmassage == "automatic" or $textmassage == "قفل كل") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم قفل الكل اليا ✅
			
 ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
		$settings["lock"]["link"]="✅ مقفول ✅";
		$settings["lock"]["username"]="✅ مقفول ✅";
		$settings["lock"]["bot"]="✅ مقفول ✅";
		$settings["lock"]["forward"]="✅ مقفول ✅";
		$settings["lock"]["tgservices"]="✅ مقفول ✅";
		$settings["lock"]["contact"]="✅ مقفول ✅";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
// setwelcome
if (strpos($textmassage , "وضع ترحيب ") !== false or strpos($textmassage , "ضع الترحيب") !== false ) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$we = str_replace(['ضع الترحيب ','وضع ترحيب '],'',$textmassage);
$plus = mb_strlen("$we");
if($plus < 600) {
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم وضع الترحيب { $we } بنجاح ✅

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["textwelcome"]="$we";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لقد ارسلت رسالة تحتوي600 حرف لٱ يمكنك ارسال اكثر م̷ـــِْن 600 حرف",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);	
}
}
}
if (strpos($textmassage , "وضع توديع ") !== false or strpos($textmassage , "ضع توديع") !== false ) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$bye = str_replace(['ضع توديع ','وضع توديع '],'',$textmassage);
$pluss = mb_strlen("$bye");
if($pluss < 600) {
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"🍃￤مرحبا عزيزي ، ??‍✈️ •
🍃￤تم وضع التوديع { $bye } بنجاح ✅

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["textbye"]="$bye";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لقد ارسلت رسالة تحتوي600 حرف لٱ يمكنك ارسال اكثر م̷ـــِْن 600 حرف",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);	
}
}
}
// welcome enbale and disable
elseif ($textmassage == "تفعيل الترحيبب"  or $textmassage == "تفعيل ترحيب" or $textmassage == "تفعيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم تفعيل الترحيب بنجاح

✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ($textmassage == "تعطيل الترحيبب"  or $textmassage == "تعطيل ترحيب" or $textmassage == "تعطيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"- تم تعطيل الترحيب ، ✅ •",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// report
elseif ($rt && $textmassage=="/report" or $rt && $textmassage=="report" or $rt && $textmassage=="ارسال گزارش" ) {
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
$result = $up['result'];
        Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"تم العمل بنجاح ✅",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
    }
	        Mostafa('sendmessage',[
            'chat_id'=>$owner,
            'text'=>"یک گزارش برای شما ارسال شد ✅
➖➖➖➖➖➖
🔻 متن پیام گزارش شده در پیام زیر برای شما فوروارد میشود 🔻
➖➖➖➖➖
🔖اطلاعات کابر ارسال کننده گزارش :

📍 ایدی : [ $from_id ]
📍 نام : [ $first_name ]
📍 یوزرنیم : [ @$username ]
➖➖➖➖
🎉مشخصات گروه :

📍 ايدي المجموعة : [ $chat_id ]
📍 اسم المجموعة : [ $namegroup ]
📍 لینک گروه : [ $getlinkde  ]
➖➖➖
🔖اطلاعات کابر خاطی :

📍 ایدی : [ $re_id ]
📍 نام : [ $re_name ]
📍 یوزرنیم : [ @$re_user ]
",
        ]);
        Mostafa('forwardMessage',[
            'chat_id'=>$owner,
            'from_chat_id'=>$chat_id,
            'message_id'=>$replyid,
        ]);
}
}
}
// support 
elseif ($textmassage=="استدعاء المطور" or $textmassage=="support" or $textmassage=="طلب الدعم" ) {
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
            Mostafa('sendmessage', [
                'chat_id' =>$Dev[0],
                'text' => "🔖گروه با نام : [$namegroup]
درخواست پشتیبانی کرده است ✅
➖➖➖➖➖➖➖
💥مشخصات فرد ارسال کننده :

📍 ایدی : [ $from_id ]
📍 نام : [ $first_name ]
📍 یوزرنیم : [ @$username ]
➖➖➖➖➖
🎉مشخصات گروه :

📍 ايدي المجموعة : [ $chat_id ]
📍 لینک گروه : [ $getlinkde  ]",
            ]);
            Mostafa('sendmessage', [
                'chat_id'=>$chat_id,
                'text'=>"درخواست شما به پشتیبانی ارسال شد✅
➖➖➖➖
🔖به زودی پشتیبانی وارد گروه میشود",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
        }
}
// hardmode
elseif($textmassage=="/modebot on" or $textmassage=="سختگیرانه ربات روشن"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》حالت سخت گیرانه اضافه کردن #ربات در گروه فعال شد🔒\n➖➖➖➖➖➖➖\nℹ️از این پس کاربر اضافه کننده ربات حذف خواهد شد \nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["hardmodebot"]="🚷 اخراج کاربر";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور /addfree میتوانید ربات را  رایگان فعال کنید",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="/modebot off" or $textmassage=="سختگیرانه ربات خاموش"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》حالت سخت گیرانه اضافه کردن #ربات در گروه غیر فعال شد🔒\n➖➖➖➖➖➖➖\nℹ️از این پس کاربر اضافه کننده ربات حذف نخواهد شد \nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["hardmodebot"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور /addfree میتوانید ربات را  رایگان فعال کنید",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="/modewarn on" or $textmassage=="سختگیرانه اخطار روشن"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》حالت سخت گیرانه اخراج #کاربر در گروه فعال شد🔒\n➖➖➖➖➖➖➖\nℹ️از این پس کاربر پس از رسیدن به حداکثر اخطار اخراج  میشود \nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["hardmodewarn"]="🚷 اخراج کاربر";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور /addfree میتوانید ربات را  رایگان فعال کنید",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="/modewarn off" or $textmassage=="سختگیرانه اخطار خاموش"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》حالت سخت گیرانه اخراج #کاربر در گروه غیر فعال شد🔒\n➖➖➖➖➖➖➖\nℹ️از این پس کاربر پس از رسیدن به حداکثر اخطار سکوت میشود \nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["hardmodewarn"]="سکوت کاربر ♨️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور /addfree میتوانید ربات را  رایگان فعال کنید",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}


