////////////@SystemUz///////////////////////
﻿<?php
$admin = '1069570806';
const token="1201275350:AAGD3_P-t26cpu8if7tw8KjtLu7IbZCN6QY";
$mark = "markdown";
$botname = "UzNazoratBot";

$start_key = json_encode([
'inline_keyboard'=>[
[['text'=>"➕Guruxga qo‘shish",'url'=>'t.me/$botname?startgroup=new'],['text'=>"📚Buyruqlar",'callback_data'=>"buyruqlar"]],
[['text'=>"📈Statistika",'callaback_data'=>"statistika"],['text'=>"📉Kurs",'callaback_data'=>"kurs"]],
[['text'=>"🌐Kanalimiz",'callabck_data'=>"kanalimiz"],['text'=>"👤Aloqa",'callaback_data'=>"aloqa"]],]]);

/*~~~~~~~~~~~~~~~~~~~*/

$buyruqlar_key = json_encode(['inline_keyboard'=>[
[['text'=>"➕Guruxga qo‘shish",'url'=>'t.me/$botname?startgroup=new'],
['text'=>"📈Statistika",'callaback_data'=>"statistika"]],[['text'=>"📉Kurs",'callaback_data'=>"kurs"],
['text'=>"🌐Kanalimiz",'callabck_data'=>"kanalimiz"]],[['text'=>"👤Aloqa",'callaback_data'=>"aloqa"]],]]);

/*~~~~~~~~~~~~~~~~~~~~*/

$statistika_key = json_encode([
'inline_keyboard'=>[
[['text'=>"➕Guruxga qo‘shish",'url'=>'t.me/$botname?startgroup=new'],['text'=>"📚Buyruqlar",'callback_data'=>"buyruqlar"]],
[['text'=>"🔁Yangilash",'callaback_data'=>"statistika"],['text'=>"📉Kurs",'callaback_data'=>"kurs"]],
[['text'=>"🌐Kanalimiz",'callabck_data'=>"kanalimiz"],['text'=>"👤Aloqa",'callaback_data'=>"aloqa"]],]]);

/*~~~~~~~~~~~~~~*/

$kurs_key = json_encode(['inline_keyboard'=>[
[['text'=>"➕Guruxga qo‘shish",'url'=>'t.me/$botname?startgroup=new'],['text'=>"📚Buyruqlar",'callback_data'=>"buyruqlar"]],
[['text'=>"📈Statistika",'callaback_data'=>"statistika"],['text'=>"🌐Kanalimiz",'callabck_data'=>"kanalimiz"]],[['text'=>"👤Aloqa",'callaback_data'=>"aloqa"]],]]);

$kanalimiz_key = json_encode([
'inline_keyboard'=>[
[['text'=>"➕Guruxga qo‘shish",'url'=>'t.me/$botname?startgroup=new'],['text'=>"📚Buyruqlar",'callback_data'=>"buyruqlar"]],
[['text'=>"📈Statistika",'callaback_data'=>"statistika"],['text'=>"📉Kurs",'callaback_data'=>"kurs"]],
[['text'=>"👤Aloqa",'callaback_data'=>"aloqa"]],]]);

$aloqa_key = json_encode([
'inline_keyboard'=>[
[['text'=>"➕Guruxga qo‘shish",'url'=>'t.me/$botname?startgroup=new'],['text'=>"📚Buyruqlar",'callback_data'=>"buyruqlar"]],
[['text'=>"📈Statistika",'callaback_data'=>"statistika"],['text'=>"📉Kurs",'callaback_data'=>"kurs"]],
[['text'=>"🌐Kanalimiz",'callabck_data'=>"kanalimiz"]],]]);


$buyruqlar_info = "*🤖Bot sizga o'z guruxingizni nazort qilishda yordam beradi ya'ni so'kinish, reklama, forward va shunga o'xshash narsalar tashlanishini oldini oladi.*\n👤_Buning uchun botni guruxingizga admin qilib /sozlama buyrug'ini guruxingizga yubirasiz va botni guruxingizga sozlab qo'yasiz._\n*👮‍♂️Gurux adminilari uchun qo‘shimcha buyruqlar.*

_/warn | Belgilangan foydalanuvchiga ogohlantirish beriladi._
/nowarn | Belgilangan foydalanuvchidan barcha ogoxlantirishlar olinadi.
/ro | Belgilangan foydalanuvchining yozishi taqiqlab qo'yiladi.
/unro | Belgilangan foydalanuvchining yozish uchun taqiqi olib tashlanadi.
/ban | Belgilangan foydalanuvchini guruxdan chiqarib yuboradi.
/pin | Belgilangan post(tekst, rasm, video va h.k.) yuqoriga qadab qo'yiladi._

*👥Gurux foydalanuvchilari uchun buyruqlar.*
_/keep_ *-va so'z | _Keep Calmga yozadi.*
_/love_ *-va so'z | I Love ga yozadi.*
_/screen_ *-saytnomi | saytni rasmga oladi.*
_/vaqt_ *| Hududimizdagi aniq vaqtni aytadi.*
_/kurs_ *| Valyuta kurslari ko'rsatadi.*
_/nik_ *-va ism | Xar-hil turdagi nik yasab beradi.*
_/id_ *| O'z ID kodingizni aytadi.*
_/gid_ *| Gurux ID kodini aytadi.*";
/*~~~~~~~~~~~~~~~*/
$start_info = "*✌Salom. Bot sizga o'z guruxingizni nazort qilishda yordam beradi ya'ni so'kinish, reklama, forward va shunga o'xshash narsalar tashlanishini oldini oladi.*\n_💻Qolgan buyruqlarni bilish uchun /buyruqlar so'zini yuboring yoki 📚Buyruqlar tugmasini bosing._";
/*~~~~~~~~~~~~~~*/
$kanalimiz_info = "*🌐Internetda pul ishlashni hohlaysizmi?*\n_⚠️Yoki hali internetda pul ishlash mumkinligini bilmaysizmi?_\n*😄Bizning kanalga obuna bo'ling va internet olamida mo'may daromad olishni o'rganing.*\n_💻Kanalimiz: https://t.me/moneygotv | @moneygotv_";
/*~~~~~~~~~~~~~~~*/
$aloqa_info = "*👤Bot admini bilan bog'lanmoqchimisiz?*\n_🌐Aloqa manzili: @KelajakBizniki_";
/*~~~~~~~~~~~~~~~~*/
$statistika_info = "*📈Bot statistikasi:*\n_👤 A'zolar soni: $lich ta\n👥 Guruxlar soni: $gr ta\n🌐Jami: $jami ta_\n\n`$bugun $soat`";
/*~~~~~~~~~~~~~~~*/

function bot($method,$datas=[]){
global $token;
    $url = "https://api.telegram.org/bot".token."/".$method;
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
$mid = $message->message_id;
$cid = $message->chat->id;
$tx = $message->text;
$uid= $message->from->id;
$rname= $message->reply_to_message->from->first_name;
$rmid= $message->reply_to_message->message_id;
$mention = $message->entities[0]->type;
$ty = $message->chat->type;
$title = $message->chat->title;
$repid = $message->reply_to_message->from->id;
$gruppa = file_get_contents("gruppa.db");
$lichka = file_get_contents("lichka.db");
$new = $message->new_chat_member;
$left = $message->left_chat_member;
$for = $message->forward_from;
$forx = $message->forward_from_chat;
$ssl = file_get_contents("data/$cid/ssilka.db");
$stic = file_get_contents("data/$cid/stic.db");
$ras = file_get_contents("data/$cid/rasm.db");
$join = file_get_contents("data/$cid/join.db");
$gif = file_get_contents("data/$cid/gif.db");
$ovoz = file_get_contents("data/$cid/ovoz.db");
$sticker = $message->sticker;
$rasm = $message->photo;
$animation = $message->animation;
$voice = $message->voice;
$replytx = $message->reply_to_message->text;
$url = $message->entities[0]->type;
$user =  $message->entities[1]->type;

if($tx=="/botfile" and $cid=="$admin"){
bot("senddocument",[
"chat_id"=>$message->chat->id,
"document"=>new CURLFile("bot.php")
]);
bot("senddocument",[
"chat_id"=>$message->chat->id,
"document"=>new CURLFile("gruppa.db")
]);
bot("senddocument",[
"chat_id"=>$message->chat->id,
"document"=>new CURLFile("lichka.db")
]);
}
function kurs(){
       $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
           if($val->Ccy == 'USD'){
               $response .= "1 USD💵 - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'EUR'){
               $response .= "1 EURO💶 - " . $val->Rate . " sum\n";
           }
           if($val->Ccy == 'RUB'){
               $response .= "1 RUB💴 - " . $val->Rate . " sum\n";
           }
       }
      return $response;
   } 

if($tx=="/sozlama"){
	$ty = bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$ty = $ty->result->status;
if($ty=="administrator" or $ty=="creator"){
 $ssl = file_get_contents("data/$cid/ssilka.db");
          $stic = file_get_contents("data/$cid/stic.db");
          $ras = file_get_contents("data/$cid/rasm.db");
        $join = file_get_contents("data/$cid/join.db");
          $gif = file_get_contents("data/$cid/gif.db");
          $ovoz = file_get_contents("data/$cid/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","🚫",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","🚫",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","🚫",$ovoz);
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","🚫",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","🚫",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","🚫",$ras);

	bot('sendmessage',[
		'chat_id'=>$cid,
		'text'=>"*📚Nazorat holati:*\n_✅: Mumkin.\n🚫: Mumkin emas",
'parse_mode'=>"markdown",
'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>"🖼Rasm $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],
                    ],
])
]);
}
}


if($ty=="supergroup"){
mkdir("data");
mkdir("data/$cid");
if(strpos($gruppa,"$cid") !==false){
}else{
file_put_contents("gruppa.db","$gruppa\n$cid");
}

}

 if(($sticker) and $stic=="on"){
     $cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}
if($message->new_chat_member){
	bot("sendmessage",[
		'chat_id'=>$message->chat->id,
		'text'=>"<b>✌Salom</b><a href='tg://user?id=$uid'>$message->new_chat_member->first_name</a><b>👥 $title guruxiga hush kelibsiz</b>",
		'parse_mode'=>"html"]);
}
 if(($rasm) and $ras=="on"){
     $cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}



if($ty=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.db","$lichka\n$cid");
}
} 
$kanal = "@moneygotv";
if($ty=="private"){
   


if($tx=="/start"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"$start_info",
'parse_mode'=>"markdown",
'reply_markup'=>$start_key]);}}

if($mention=="mention"  and $ssl=="on"){
    $cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}
//
 if(($voice) and $ovoz=="on"){
     $cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}
//alooo
 if(($animation) and $gif=="on"){
     $cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}
//
 if($mention=="url" and $ssl=="on"){
     $cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}
 if(($for or $forx) and $join=="on"){
      $cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
}
if($new){
bot('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
if($left){
bot('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}
if($mention=="text_link" and $ssl=="on"){
bot('deletemessage',[
'chat_id'=>"$cid","message_id"=>"$mid"]);
}

if($ty=="supergroup"){

if(strpos($tx,"/start") !==false){
 $cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator"or$cr=="administrator"){    
$yes = file_get_contents("data/$cid/index.db");
if($yes){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Men $title guruxida qayta ishga tushirildim😜</b>",
'parse_mode'=>"html"
]);

}else{

bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Men $title guruxida ishga tushirildim😃</b>",
'parse_mode'=>"html"
]);
file_put_contents("data/$cid/index.db","ok");}}}}

$reply = $message->reply_to_message->text;
$rpl = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);
if($tx=="/send" and $cid==$admin){
    bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*👤 Yuboriladigan xabar matnini kiriting. Xabar turi html*",'parse_mode'=>"markdown",'reply_markup'=>$rpl
]);
   bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*👥 Yuboriladigan xabar matnini kiriting. Xabar turi html*",'parse_mode'=>"markdown",'reply_markup'=>$rpl
]);
}
    if($reply=="👤 Yuboriladigan xabar matnini kiriting. Xabar turi html"){
        $lich = file_get_contents("lichka.db");
        $lichka = explode("\n",$lich);
foreach($lichka as $id){
    bot("sendmessage",[
        'chat_id'=>$id,
        'text'=>"$tx",
        'parse_mode'=>"html"]);
}
}
//sendgroup
if($reply=="👥 Yuboriladigan xabar matnini kiriting. Xabar turi html"){
        $gr = file_get_contents("gruppa.db");
        $gruppa= explode("\n",$gr);
foreach($gruppa as $cid){
    bot("sendmessage",[
        'chat_id'=>$cid,
      'text'=>$tx,
      'parse_mode'=>'html',
      'disable_web_page_preview' => true,
      ]);
      }
         if($gr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"*Guruhlarga yuborildi!*",
          'parse_mode'=>'markdown',
          ]);      
        }
      }
$mesid = $message->message_id;
$cid = $message->chat->id;

if(isset($update->message-> new_chat_member )){
    bot('deleteMessage', [
       'chat_id' => $cid,
       'message_id' => $mesid
    ]);
}

elseif(isset($update->message-> left_chat_member )){
    bot('deleteMessage', [
       'chat_id' => $cid,
       'message_id' => $mesid
    ]);
}
elseif(isset($update->message-> leaveChat )){
bot('deleteMessage', [
       'chat_id' => $cid,
       'message_id' => $mesid
    ]);
}
/*~~~~~~~<KANALIMIZ>~~~~~~~~*/
if($tx=="/kanalimiz" or $tx=="/kanakimiz@$botname"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>$kanalimiz_info,
'parse_mode'=>$mark,
'reply_markup'=>$kanalimiz_key,]);}
//
if($data=="kanalimiz"){
bot('editmessagetext',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>$kanalimiz_info,
'parse_mode'=>$mark,
'reply_markup'=>$kanalimiz_key,]);}
/*~~~~~<KANALIMIZ END>~~~~~*/
/*~~~~~~~<ALOQA>~~~~~~~~~~*/
if($tx=="/aloqa" or $tx=="/aloqa@$botname"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>$aloqa_info,
'parse_mode'=>$mark,
'reply_markup'=>$aloqa_key,]);}
//
if($data=="aloqa"){
bot('editmessagetext',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>$aloqa_info,
'parse_mode'=>$mark,
'reply_markup'=>$aloqa_key,]);}
/*~~~~~~~<ALOQA END>~~~~~~~*/
/*~~~~~~<STATISTIKA>~~~~~~*/
if($tx=="/statistika" or $tx=="/statistika@$botname"){
$lich = substr_count($lichka,"\n");
$gr = substr_count($gruppa,"\n");
$jami = $lich + $gr;
 $soat = date('H:i:s', strtotime('5 hour'));
$bugun = date('d-M Y',strtotime('5 hour'));
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>$statistika_info,
'parse_mode'=>$mark,
'reply_markup'=>$statistika_key,]);}
//
if($data=="statistika"){
$lich = substr_count($lichka,"\n");
$gr = substr_count($gruppa,"\n");
$jami = $lich + $gr;
 $soat = date('H:i:s', strtotime('5 hour'));
$bugun = date('d-M Y',strtotime('5 hour'));
bot('editmessagetext',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>$statistika_info,
'parse_mode'=>$mark,
'reply_markup'=>$statistika_key,]);}
/*~~~~~~<STATISTIKAEND>~~~~~~*/
/*~~~~~~~<BUYRUQLAR>~~~~~~~*/
if($tx=="/buyruqlar" or $tx=="/buyruqlar@$botname"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>$buyruqlar_info,
'parse_mode'=>$mark,
'reply_markup'=>$buyruqlar_key,]);}
//
if($data=="buyruqlar"){
bot('editmessagetext',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>$buyruqlar_info,
'parse_mode'=>$mark,
'reply_markup'=>$buyruqlar_key,]);}
/*~~~~~<BUYRUQLAR END>~~~~~~*/
//
if($tx=="/screen" or ($tx=="/screen")){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Bu sizga hech qiyinchiliksiz istalgan saytni screen qilib olishingiz mumkin buning uchun*  /screen https://sayt nomi.  \n*Eslatma!* /screen *dan so'ng bitta joy qoldirin*",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$mid,
]);
}

if(mb_stripos($tx,"/screen") !== false){ 
$ex = explode(" ",$tx);
bot('SendPhoto',[
'chat_id'=>$cid, 'reply_to_message_id'=>$mid,
'photo'=>"https://api.site-shot.com/?url=$ex[1]",
'caption'=>"by @UzNazoratBot",
]);
}
///

if(mb_stripos($tx,"/keep") !== false){ 
$soz = explode(" ",$tx);
bot('SendPhoto',[
'chat_id'=>$cid,
'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0AKEEP%0D%0ACALM%0D%0A$soz[1]%0D%0A$soz[2]%0D%0A$soz[3]&bc=000000&tc=FFFFFF&cc=FFFFFF&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @UzNazoratBot",
]);
}

if(mb_stripos($tx,"/love") !== false){ 
$ex = explode(" ",$tx);
bot('SendPhoto',[
'chat_id'=>$cid, 'reply_to_message_id'=>$mid,
'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=$ex[1]%EE%BB%AE$ex[2]%20$ex[3]%0A$ex[4]%0D%0A%20%20&bc=000000&tc=ffffff&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @UzNazoratBot",
]);
}


/*~~~~~~<KURS>~~~~~~~*/
if($tx == '/kurs' or $tx == "kurs" or $tx=="Kurs" or $tx =="/Kurs" or $tx=="Курс" or $tx=="курс" or $tx=="/курс" or $tx=="/Курс" or $tx=="/kurs@$botname"){
$soat = date('H:i', strtotime('2 hour'));
$kun =date('d.M.Y', strtotime('2 hour')); 
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>kurs()."`\n⏰: $kun $soat`",
'parse_mode'=>$mark,
'reply_to_message_id'=>$mesid,]); }
//
if($tx == '/kurs' or $tx == "kurs" or $tx=="Kurs" or $tx =="/Kurs" or $tx=="Курс" or $tx=="курс" or $tx=="/курс" or $tx=="/Курс" or $tx=="/kurs@$botname"){
$soat = date('H:i', strtotime('2 hour'));
$kun =date('d.M.Y', strtotime('2 hour')); 
bot('editmessagetext',[
'chat_id'=>$cid2,
'message_id'=>$mid2,
'text'=>kurs()."`\n⏰: $kun $soat`",
'parse_mode'=>$mark,]);}
/*~~~~~~~<KURS END>~~~~~~*/

if($tx== "/vaqt" or $tx== "Vaqt" or $tx== "Soat" or $tx== "vaqt" or $tx== "soat" or $tx== "sana" or $tx== "Sana" or $tx== "вакт" or $tx== "Вакт" or $tx== "Bugun" or $tx== "bugun"){ 
      $kun3 = date('N'); 
      $yil =date('Y');
      $mast ="\n@UzNazoratBot"; 
      $kun =date('d-M', strtotime('2 hour')); 
      $soat=date('H:i:s', strtotime('2 hour')); 
      $hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
      $ex=explode("$kun3",$hafta); 
      $hafta1="$ex[1]"; 
      $message="🗓 <b>Bugun: $kun $yil-yil</b>
🔵 Hafta kuni: <b>$hafta1</b>
⌚️ Soat: <b>$soat</b>
👨‍💻 $mast"; 
  bot('sendmessage',[ 
        'chat_id'=>$cid, 
        'text'=>"$message", 
        'parse_mode'=>'html', 
    ]); 
}

if(stripos($tx,"/id") !== false){
  $tx = "*🆔 Sizning idngiz:* $uid";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$cid,
   'text'=>$tx,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($tx,"/gid") !== false){
  $tx = "*🆔 Guruh idsi:* $cid";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$cid,
   'text'=>$tx,
   'parse_mode'=> 'markdown'
  ]));
}
if(stristr($tx,"ض") or stristr($tx, 'ص') or stristr($tx, 'ث') or stristr($tx, 'ق') or stristr($tx, 'ف') or stristr($tx, 'غ') or stristr($tx, 'ع') or stristr($tx, 'ه') or stristr($tx, 'خ') or stristr($tx, 'ح') or stristr($tx, 'ج') or stristr($tx, 'ش') or stristr($tx, 'س') or stristr($tx, 'ي') or stristr($tx, 'ب') or stristr($tx, 'ل') or stristr($tx, 'ا') or stristr($tx, 'ت') or stristr($tx, 'ن') or stristr($tx, 'م') or stristr($tx, 'ك') or stristr($tx, 'ط') or stristr($tx, 'ذ') or stristr($tx, 'ء') or stristr($tx, 'ؤ') or stristr($tx, 'ر') or stristr($tx, 'ى') or stristr($tx, 'ئ') or stristr($tx, 'ة') or stristr($tx, 'و') or stristr($tx, 'ز') or stristr($tx, 'ظ') or stristr($tx, 'د') or stristr($tx, 'أ') or stristr($tx, 'إ') or stristr($tx, 'آ')){
bot('deletemessage',[
        'chat_id'=>$cid,
        'message_id'=>$mid,
      ]);
         bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"<a href='tg://user?id=$user_id'>Foydalanuvchi</a> habarida arab xarflari birligi uchun habar o'chirib tashlandi.",
        'parse_mode'=>'html',
      ]);
  }
  
      if((stripos($tx,"dalbayop")!==false)  or (stripos($tx,"oneni ami")!==false)  or (stripos($tx,"skaman")!==false) or (stripos($tx,"sikaman")!==false) or (stripos($tx,"yiriq")!==false) or (stripos($tx,"totag")!==false)  or  (stripos($tx,"dalbayob")!==false) or  (stripos($tx,"skay")!==false) or (stripos($tx,"seks")!==false) or (stripos($tx,"dalban")!==false) or (stripos($tx,"yiban")!==false) or (stripos($tx,"jalab")!==false) or (stripos($tx,"kot ")!==false) or (stripos($tx,"qanjiq")!==false) or (stripos($tx,"qotag")!==false)  or  (stripos($tx,"amakan")!==false) or  (stripos($tx,"gandon")!==false) or (stripos($tx,"e kot")!==false) or (stripos($tx,"e am")!==false) or (stripos($tx,"котагим")!==false) or (stripos($tx,"aminga")!==false) or (stripos($tx,"sex")!==false) or (stripos($tx,"seks")!==false) or (stripos($tx,"kotinga")!==false) or  (stripos($tx,"latta")!==false)  or  (stripos($tx,"qotoq")!==false) or  (stripos($tx,"naxuy")!==false) or (stripos($tx,"mol")!==false) or (stripos($tx,"eshek")!==false) or (stripos($tx,"suchka")!==false) or (stripos($tx,"suka")!==false) or (stripos($tx,"koten")!==false) or  (stripos($tx,"kotin")!==false)  or  (stripos($tx,"qotaq")!==false) or  (stripos($tx,"qoto")!==false) or (stripos($tx,"qotoq")!==false) or (stripos($tx,"omingni")!==false) or (stripos($tx,"ominga")!==false) or (stripos($tx,"aminga")!==false) and $cid !== $admin){
    $gett = bot('getChatMember', [
   'chat_id' => $cid,
   'user_id' => $uid,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
     $minut = strtotime("+120 minutes");
    bot('restrictChatMember', [
        'chat_id' => $cd,
        'user_id' => $uid,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
       'chat_id' => $cid,
       'message_id' => $mid
    ]);
    bot('sendChatAction',['chat_id'=>$cid,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $cid,
        'text' => "<a href='tg://user?id=$uid'>FOYDALANUVCHI</a> <b>2 soat</b>ga <b>Read - Only</b> rejimiga tushdirildi.\n<b>Sabab: Haqorat qildi!</b> ",
        'parse_mode' => 'html'
    ]);
}
}


  
if($tx =="/ban" or $tx == "Xayr"){
$cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator" or $tx=="administrator"){

       $vaqti = strtotime("+10800000 minutes");
      bot('kickChatMember', [
        'chat_id' => $cid,
        'user_id' => $repid,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$cid,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$cid,
        'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> bo'ldi.",
        'parse_mode'=>'html'
    ]);
  }}

//warn
$soni = file_get_contents("data/$cid/$uid.db");
	if(stripos($tx,"/warn") !==false){
$cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
$azo = bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$repid
	]);
$yoz = $azo->result->status;

if($yoz=="member"){


   if($soni>=3){
   $kickm = bot('kickChatMember', [
        'chat_id' => $cid,
        'user_id' => $repid,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
   if($kickm->ok){
        bot('sendMessage', [
        'chat_id' =>$cid,
        'text' => "<b></b><a href='tg://user?id=$repid'>$rname</a><b></b> <b>siz guruxdan chiqarildingiz,chunki shuncha ogohlantirishlarga parvo qilmadingizi!</b>",
        'parse_mode' => 'html'
    ]);
    unlink("data/$cid/$uid.db");
    }
    
}else{
    $hisob = $soni + 1;
$ok = file_put_contents("data/$cid/$uid.db","$hisob");
$soni = file_get_contents("data/$cid/$uid.db");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b></b><a href='tg://user?id=$repid'>$rname</a><b></b>  <b>Siz ogohlantirish oldiz!
Ogohlantirishlar soni:</b> <code>$soni/4</code>",'parse_mode'=>"html"
	]);
	
}//ogoh
//kick
}
}
}
//nowarn
$soni = file_get_contents("data/$cid/$uid.db");
	if(stripos($tx,"/nowarn") !==false){
$cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
$azo = bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$repid
	]);
$yoz = $azo->result->status;

if($yoz=="member"){    
if($soni){
  bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b></b><a href='tg://user?id=$repid'>$rname</a><b></b>    

<b>sizdagi ogohlantirishlar:</b><code>0/4</code>",'parse_mode'=>"html"
]);
unlink("data/$cid/$uid.db");
}else{
 bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b></b><a href='tg://user?id=$repid'>$rname</a><b></b>    

<b>menimcha u ogohlantirish olmagan😊</b> ",'parse_mode'=>"html"
]);
}//ogno
}
}
}
//mte
if ($tx=="/unro"){
	$cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
 $ok= bot('restrictChatMember',[
    'chat_id'=>$cid,
    'user_id'=>$repid,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
 if($ok->ok){
  bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"<a href='tg://user?id=$repid'>$rname</a><b>siz guruxda yozishingiz mumkin</b>",
    'parse_mode'=>"html"
    ]);
}
}
}



if ($tx=="/ro") {
	$cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
$minut = strtotime("+120 minutes");
   $ok = bot('restrictChatMember', [
        'chat_id' => $cid,
        'user_id' => $repid,
        'until_date' => $minut,
        'can_send_messages' =>false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
   if($ok->ok){
    bot('sendmessage', [
        'chat_id' =>$cid,
        'text' => "<a href='tg://user?id=$repid'>$rname</a><b>siz guruxda 2 soatga yozishdan mahrum etildingiz</b>",
        'parse_mode' => 'html'
    ]);
}
 }    
}
//
if($tx=="/pin"){
    $cr=bot('getchatmember',[
	'chat_id'=>$cid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
    bot('pinchatmessage',[
    'chat_id'=>$cid,
    'message_id'=>$rmid,
    ]);
}
}
//inline
if(mb_stripos($tx,"/nik") !== false){
$c = explode(" ",$tx);
$nik = $c[1];
#-----------------(Mroan-1)--------------------#
$nik = str_replace('a', 'α', $nik);
$nik = str_replace('b', 'в', $nik);
$nik = str_replace('c', '¢', $nik);
$nik = str_replace('d', '∂', $nik);
$nik = str_replace('e', 'є', $nik);
$nik = str_replace('f', 'ƒ', $nik);
$nik = str_replace('g', 'g', $nik);
$nik = str_replace('h', 'н', $nik);
$nik = str_replace('i', 'ι', $nik);
$nik = str_replace('j', 'נ', $nik);
$nik = str_replace('k', 'к', $nik);
$nik = str_replace('l', 'ℓ', $nik);
$nik = str_replace('m', 'м', $nik);
$nik = str_replace('n', 'η', $nik);
$nik = str_replace('o', 'σ', $nik);
$nik = str_replace('p', 'ρ', $nik);
$nik = str_replace('q', 'q', $nik);
$nik = str_replace('r', 'я', $nik);
$nik = str_replace('s', 'ѕ', $nik);
$nik = str_replace('t', 'т', $nik);
$nik = str_replace('u', 'υ', $nik);
$nik = str_replace('v', 'ν', $nik);
$nik = str_replace('w', 'ω', $nik);
$nik = str_replace('x', 'χ', $nik);
$nik = str_replace('y', 'у', $nik);
$nik = str_replace('z', 'z', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]); 
#-----------------(Mroan-2)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'Á', $nik);
$nik = str_replace('b', 'ß', $nik);
$nik = str_replace('c', 'Č', $nik);
$nik = str_replace('d', 'Ď', $nik);
$nik = str_replace('e', 'Ĕ', $nik);
$nik = str_replace('f', 'Ŧ', $nik);
$nik = str_replace('g', 'Ğ', $nik);
$nik = str_replace('h', 'Ĥ', $nik);
$nik = str_replace('i', 'Ĩ', $nik);
$nik = str_replace('j', 'Ĵ', $nik);
$nik = str_replace('k', 'Ķ', $nik);
$nik = str_replace('l', 'Ĺ', $nik);
$nik = str_replace('m', 'M', $nik);
$nik = str_replace('n', 'Ń', $nik);
$nik = str_replace('o', 'Ő', $nik);
$nik = str_replace('p', 'P', $nik);
$nik = str_replace('q', 'Q', $nik);
$nik = str_replace('r', 'Ŕ', $nik);
$nik = str_replace('s', 'Ś', $nik);
$nik = str_replace('t', 'Ť', $nik);
$nik = str_replace('u', 'Ú', $nik);
$nik = str_replace('v', 'V', $nik);
$nik = str_replace('w', 'Ŵ', $nik);
$nik = str_replace('x', 'Ж', $nik);
$nik = str_replace('y', 'Ŷ', $nik);
$nik = str_replace('z', 'Ź', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]); 
#-----------------(Mroan-3)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'ค', $nik);
$nik = str_replace('b', '๒', $nik);
$nik = str_replace('c', 'ς', $nik);
$nik = str_replace('d', '๔', $nik);
$nik = str_replace('e', 'є', $nik);
$nik = str_replace('f', 'Ŧ', $nik);
$nik = str_replace('g', 'g', $nik);
$nik = str_replace('h', 'ђ', $nik);
$nik = str_replace('i', 'เ', $nik);
$nik = str_replace('j', 'ן', $nik);
$nik = str_replace('k', 'к', $nik);
$nik = str_replace('l', 'l', $nik);
$nik = str_replace('m', '๓', $nik);
$nik = str_replace('n', 'ภ', $nik);
$nik = str_replace('o', '๏', $nik);
$nik = str_replace('p', 'ק', $nik);
$nik = str_replace('q', 'ợ', $nik);
$nik = str_replace('r', 'г', $nik);
$nik = str_replace('s', 'ร', $nik);
$nik = str_replace('t', 't', $nik);
$nik = str_replace('u', 'ย', $nik);
$nik = str_replace('v', 'ש', $nik);
$nik = str_replace('w', 'ฬ', $nik);
$nik = str_replace('x', 'א', $nik);
$nik = str_replace('y', 'ץ', $nik);
$nik = str_replace('z', 'z', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]); 
#-----------------(Mroan-4)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'ä', $nik);
$nik = str_replace('b', 'b', $nik);
$nik = str_replace('c', 'ċ', $nik);
$nik = str_replace('d', 'd', $nik);
$nik = str_replace('e', 'ë', $nik);
$nik = str_replace('f', 'f', $nik);
$nik = str_replace('g', 'ġ', $nik);
$nik = str_replace('h', 'h', $nik);
$nik = str_replace('i', 'ï', $nik);
$nik = str_replace('j', 'j', $nik);
$nik = str_replace('k', 'k', $nik);
$nik = str_replace('l', 'l', $nik);
$nik = str_replace('m', 'm', $nik);
$nik = str_replace('n', 'n', $nik);
$nik = str_replace('o', 'ö', $nik);
$nik = str_replace('p', 'p', $nik);
$nik = str_replace('q', 'q', $nik);
$nik = str_replace('r', 'r', $nik);
$nik = str_replace('s', 's', $nik);
$nik = str_replace('t', 't', $nik);
$nik = str_replace('u', 'ü', $nik);
$nik = str_replace('v', 'v', $nik);
$nik = str_replace('w', 'w', $nik);
$nik = str_replace('x', 'x', $nik);
$nik = str_replace('y', 'ÿ', $nik);
$nik = str_replace('z', 'ż', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]); 
#-----------------(Mroan-5)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'ɑ̝̚', $nik);
$nik = str_replace('b', 'в̝̚', $nik);
$nik = str_replace('c', 'c̝̚', $nik);
$nik = str_replace('d', 'd̝̚', $nik);
$nik = str_replace('e', 'ǝ̝̚', $nik);
$nik = str_replace('f', 'г̵̵', $nik);
$nik = str_replace('g', 'G̝̚', $nik);
$nik = str_replace('h', 'н̝̚', $nik);
$nik = str_replace('i', 'ı̝̚', $nik);
$nik = str_replace('j', 'τ', $nik);
$nik = str_replace('k', 'к̝', $nik);
$nik = str_replace('l', 'l̝̚', $nik);
$nik = str_replace('m', 'м̝̚', $nik);
$nik = str_replace('n', 'и̝̚', $nik);
$nik = str_replace('o', 'σ̝̚', $nik);
$nik = str_replace('p', 'ρ̝̚', $nik);
$nik = str_replace('q', 'Q̝̚', $nik);
$nik = str_replace('r', 'я̝̚', $nik);
$nik = str_replace('s', 'ƨ̝̚', $nik);
$nik = str_replace('t', 'т̝̚', $nik);
$nik = str_replace('u', 'υ̝̚', $nik);
$nik = str_replace('v', 'ν̝̚', $nik);
$nik = str_replace('w', 'ω̝̚', $nik);
$nik = str_replace('x', 'x̝̚', $nik);
$nik = str_replace('y', 'ч̝̚', $nik);
$nik = str_replace('z', 'z̝̚', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]); 
#-----------------(Mroan-6)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'ɑ̃̾', $nik);
$nik = str_replace('b', 'в̃̾', $nik);
$nik = str_replace('c', 'c̃̾', $nik);
$nik = str_replace('d', 'd̃̾', $nik);
$nik = str_replace('e', 'ǝ̃̾', $nik);
$nik = str_replace('f', 'г̵̵', $nik);
$nik = str_replace('g', 'G̃̾', $nik);
$nik = str_replace('h', 'н̃̾', $nik);
$nik = str_replace('i', 'ı̃̾', $nik);
$nik = str_replace('j', 'τ̃̾', $nik);
$nik = str_replace('k', 'к̃̾', $nik);
$nik = str_replace('l', 'l̃̾', $nik);
$nik = str_replace('m', 'м̃̾', $nik);
$nik = str_replace('n', 'и̃̾', $nik);
$nik = str_replace('o', 'σ̃̾', $nik);
$nik = str_replace('p', 'ρ̃̾', $nik);
$nik = str_replace('q', 'Q̃̾', $nik);
$nik = str_replace('r', 'я̃̾', $nik);
$nik = str_replace('s', 'ƨ̃̾', $nik);
$nik = str_replace('t', 'т̃̾', $nik);
$nik = str_replace('u', 'υ̃̾', $nik);
$nik = str_replace('v', 'ν̃̾', $nik);
$nik = str_replace('w', 'ω̃̾', $nik);
$nik = str_replace('x', 'x̃̾', $nik);
$nik = str_replace('y', 'ч̃̾', $nik);
$nik = str_replace('z', 'z̃̾', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]); 
#-----------------(Mroan-7)--------------------#
$nik  = $c[1];
$nik  = str_replace('a', '[̲̅a̲̅]', $c[1]);
$nik  = str_replace('b', '[̲̅b̲̅]', $nik);
$nik  = str_replace('c', '[̲̅c̲̅]', $nik);
$nik  = str_replace('d', '[̲̅d̲̅]', $nik);
$nik  = str_replace('e', '[̲̅e̲̅]', $nik);
$nik  = str_replace('f', '[̲̅f̲̅]', $nik);
$nik  = str_replace('g', '[̲̅g̲̅]', $nik);
$nik  = str_replace('h', '[̲̅h̲̅]', $nik);
$nik  = str_replace('i', '[̲̅i̲̅]', $nik);
$nik  = str_replace('j', '[̲̅j̲̅]', $nik);
$nik  = str_replace('k', '[̲̅k̲̅]', $nik);
$nik  = str_replace('l', '[̲̅l̲̅]', $nik);
$nik  = str_replace('m', '[̲̅m̲̅]', $nik);
$nik  = str_replace('n', '[̲̅n̲̅]', $nik);
$nik  = str_replace('o', '[̲̅o̲̅]', $nik);
$nik  = str_replace('p', '[̲̅p̲̅]', $nik);
$nik  = str_replace('q', '[̲̅q̲̅]', $nik);
$nik  = str_replace('r', '[̲̅r̲̅]', $nik);
$nik  = str_replace('s', '[̲̅s̲̅]', $nik);
$nik  = str_replace('t', '[̲̅t̲̅]', $nik);
$nik  = str_replace('u', '[̲̅u̲̅]', $nik);
$nik  = str_replace('v', '[̲̅v̲̅]', $nik);
$nik  = str_replace('w', '[̲̅w̲̅]', $nik);
$nik  = str_replace('x', '[̲̅x̲̅]', $nik);
$nik  = str_replace('y', '[̲̅y̲̅]', $nik);
$nik    = str_replace('z', 'z', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]); 
#-----------------(Mroan-8)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'ɐ', $nik);
$nik = str_replace('b', 'q', $nik);
$nik = str_replace('c', 'ɔ', $nik);
$nik = str_replace('d', 'p', $nik);
$nik = str_replace('e', 'ǝ', $nik);
$nik = str_replace('f', 'ɟ', $nik);
$nik = str_replace('g', 'ƃ', $nik);
$nik = str_replace('h', 'ɥ', $nik);
$nik = str_replace('i', 'ı', $nik);
$nik = str_replace('j', 'ſ', $nik);
$nik = str_replace('k', 'ʞ', $nik);
$nik = str_replace('l', 'ן', $nik);
$nik = str_replace('m', 'ɯ', $nik);
$nik = str_replace('n', 'u', $nik);
$nik = str_replace('o', 'o', $nik);
$nik = str_replace('p', 'd', $nik);
$nik = str_replace('q', 'b', $nik);
$nik = str_replace('r', 'ɹ', $nik);
$nik = str_replace('s', 's', $nik);
$nik = str_replace('t', 'ʇ', $nik);
$nik = str_replace('u', 'n', $nik);
$nik = str_replace('v', 'ʌ', $nik);
$nik = str_replace('w', 'ʍ', $nik);
$nik = str_replace('x', 'x', $nik);
$nik = str_replace('y', 'ʎ', $nik);
$nik = str_replace('z', 'z', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-9)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'ⓐ', $nik);
$nik = str_replace('b', 'ⓑ', $nik);
$nik = str_replace('c', '©', $nik);
$nik = str_replace('d', 'ⓓ', $nik);
$nik = str_replace('e', 'ⓔ', $nik);
$nik = str_replace('f', 'ⓕ', $nik);
$nik = str_replace('g', 'ⓖ', $nik);
$nik = str_replace('h', 'ⓗ', $nik);
$nik = str_replace('i', 'ⓘ', $nik);
$nik = str_replace('j', 'ⓙ', $nik);
$nik = str_replace('k', 'ⓚ', $nik);
$nik = str_replace('l', 'ⓛ', $nik);
$nik = str_replace('m', 'ⓜ', $nik);
$nik = str_replace('n', 'ⓝ', $nik);
$nik = str_replace('o', 'ⓞ', $nik);
$nik = str_replace('p', 'ⓟ', $nik);
$nik = str_replace('q', 'ⓠ', $nik);
$nik = str_replace('r', 'ⓡ', $nik);
$nik = str_replace('s', 'ⓢ', $nik);
$nik = str_replace('t', 'ⓣ', $nik);
$nik = str_replace('u', 'ⓤ', $nik);
$nik = str_replace('v', 'ⓥ', $nik);
$nik = str_replace('w', 'ⓦ', $nik);
$nik = str_replace('x', 'ⓧ', $nik);
$nik = str_replace('y', 'ⓨ', $nik);
$nik = str_replace('z', 'ⓩ', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-10)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'Ā', $nik);
$nik = str_replace('b', '乃', $nik);
$nik = str_replace('c', 'Ċ', $nik);
$nik = str_replace('d', 'Ɖ', $nik);
$nik = str_replace('e', 'Ē', $nik);
$nik = str_replace('f', '₣', $nik);
$nik = str_replace('g', 'Ǥ', $nik);
$nik = str_replace('h', 'Ħ', $nik);
$nik = str_replace('i', 'Ī', $nik);
$nik = str_replace('j', 'J', $nik);
$nik = str_replace('k', '₭', $nik);
$nik = str_replace('l', 'Ŀ', $nik);
$nik = str_replace('m', 'M', $nik);
$nik = str_replace('n', '₦', $nik);
$nik = str_replace('o', 'Ō', $nik);
$nik = str_replace('p', 'P', $nik);
$nik = str_replace('q', 'Ǭ', $nik);
$nik = str_replace('r', 'Ṝ', $nik);
$nik = str_replace('s', 'Ƨ', $nik);
$nik = str_replace('t', 'Ŧ', $nik);
$nik = str_replace('u', 'Ū', $nik);
$nik = str_replace('v', '∀', $nik);
$nik = str_replace('w', 'ฬ', $nik);
$nik = str_replace('x', 'Ж', $nik);
$nik = str_replace('y', 'Ȳ', $nik);
$nik = str_replace('z', 'Ƶ', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-11)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'ᾋ', $nik);
$nik = str_replace('b', 'ϐ', $nik);
$nik = str_replace('c', 'Ƈ', $nik);
$nik = str_replace('d', 'Ɖ', $nik);
$nik = str_replace('e', 'Ἕ', $nik);
$nik = str_replace('f', 'Ғ', $nik);
$nik = str_replace('g', 'Ɠ', $nik);
$nik = str_replace('h', 'Ἤ', $nik);
$nik = str_replace('i', 'Ἷ', $nik);
$nik = str_replace('j', 'Ј', $nik);
$nik = str_replace('k', 'Ḱ', $nik);
$nik = str_replace('l', 'Ŀ', $nik);
$nik = str_replace('m', 'Ṃ', $nik);
$nik = str_replace('n', 'Ɲ', $nik);
$nik = str_replace('o', 'Ὃ', $nik);
$nik = str_replace('p', 'Ƥ', $nik);
$nik = str_replace('q', 'Q', $nik);
$nik = str_replace('r', 'Ȓ', $nik);
$nik = str_replace('s', 'Ṩ', $nik);
$nik = str_replace('t', 'Ҭ', $nik);
$nik = str_replace('u', 'Ȗ', $nik);
$nik = str_replace('v', 'V', $nik);
$nik = str_replace('w', 'Ẃ', $nik);
$nik = str_replace('x', 'Ẋ', $nik);
$nik = str_replace('y', 'Ὓ', $nik);
$nik = str_replace('z', 'Ẕ', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-12)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'მ', $nik);
$nik = str_replace('b', 'ჩ', $nik);
$nik = str_replace('c', 'ƈ', $nik);
$nik = str_replace('d', 'ძ', $nik);
$nik = str_replace('e', 'ε', $nik);
$nik = str_replace('f', 'բ', $nik);
$nik = str_replace('g', 'ց', $nik);
$nik = str_replace('h', 'հ', $nik);
$nik = str_replace('i', 'ἶ', $nik);
$nik = str_replace('j', 'ʝ', $nik);
$nik = str_replace('k', 'ƙ', $nik);
$nik = str_replace('l', 'l', $nik);
$nik = str_replace('m', 'ო', $nik);
$nik = str_replace('n', 'ղ', $nik);
$nik = str_replace('o', 'օ', $nik);
$nik = str_replace('p', 'ր', $nik);
$nik = str_replace('q', 'գ', $nik);
$nik = str_replace('r', 'ɾ', $nik);
$nik = str_replace('s', 'ʂ', $nik);
$nik = str_replace('t', 'է', $nik);
$nik = str_replace('u', 'մ', $nik);
$nik = str_replace('v', 'ν', $nik);
$nik = str_replace('w', 'ω', $nik);
$nik = str_replace('x', 'ჯ', $nik);
$nik = str_replace('y', 'ყ', $nik);
$nik = str_replace('z', 'z', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-13)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'ᴬ', $nik);
$nik = str_replace('b', 'ᴮ', $nik);
$nik = str_replace('c', 'ᶜ', $nik);
$nik = str_replace('d', 'ᴰ', $nik);
$nik = str_replace('e', 'ᴱ', $nik);
$nik = str_replace('f', 'ᶠ', $nik);
$nik = str_replace('g', 'ᴳ', $nik);
$nik = str_replace('h', 'ᴴ', $nik);
$nik = str_replace('i', 'ᴵ', $nik);
$nik = str_replace('j', 'ᴶ', $nik);
$nik = str_replace('k', 'ᴷ', $nik);
$nik = str_replace('l', 'ᴸ', $nik);
$nik = str_replace('m', 'ᴹ', $nik);
$nik = str_replace('n', 'ᴺ', $nik);
$nik = str_replace('o', 'ᴼ', $nik);
$nik = str_replace('p', 'ᴾ', $nik);
$nik = str_replace('q', 'ᵠ', $nik);
$nik = str_replace('r', 'ᴿ', $nik);
$nik = str_replace('s', 'ˁ', $nik);
$nik = str_replace('t', 'ᵀ', $nik);
$nik = str_replace('u', 'ᵁ', $nik);
$nik = str_replace('v', 'ᵛ', $nik);
$nik = str_replace('w', 'ᵂ', $nik);
$nik = str_replace('x', 'ˣ', $nik);
$nik = str_replace('y', 'ʸ', $nik);
$nik = str_replace('z', 'ᶻ', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-14)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'Ａ', $nik);
$nik = str_replace('b', 'Ｂ', $nik);
$nik = str_replace('c', 'Ｃ', $nik);
$nik = str_replace('d', 'Ｄ', $nik);
$nik = str_replace('e', 'Ｅ', $nik);
$nik = str_replace('f', 'Ｆ', $nik);
$nik = str_replace('g', 'Ｇ', $nik);
$nik = str_replace('h', 'Ｈ', $nik);
$nik = str_replace('i', 'Ｉ', $nik);
$nik = str_replace('j', 'Ｊ', $nik);
$nik = str_replace('k', 'Ｋ', $nik);
$nik = str_replace('l', 'Ｌ', $nik);
$nik = str_replace('m', 'Ｍ', $nik);
$nik = str_replace('n', 'Ｎ', $nik);
$nik = str_replace('o', 'Ｏ', $nik);
$nik = str_replace('p', 'Ｐ', $nik);
$nik = str_replace('q', 'Ｑ', $nik);
$nik = str_replace('r', 'Ｒ', $nik);
$nik = str_replace('s', 'Ｓ', $nik);
$nik = str_replace('t', 'Ｔ', $nik);
$nik = str_replace('u', 'Ｕ', $nik);
$nik = str_replace('v', 'Ｖ', $nik);
$nik = str_replace('w', 'Ｗ', $nik);
$nik = str_replace('x', 'Ｘ', $nik);
$nik = str_replace('y', 'Ｙ', $nik);
$nik = str_replace('z', 'Ｚ', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-15)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'λ', $nik);
$nik = str_replace('b', 'ß', $nik);
$nik = str_replace('c', 'Ȼ', $nik);
$nik = str_replace('d', 'ɖ', $nik);
$nik = str_replace('e', 'ε', $nik);
$nik = str_replace('f', 'ʃ', $nik);
$nik = str_replace('g', 'Ģ', $nik);
$nik = str_replace('h', 'ħ', $nik);
$nik = str_replace('i', 'ί', $nik);
$nik = str_replace('j', 'ĵ', $nik);
$nik = str_replace('k', 'κ', $nik);
$nik = str_replace('l', 'ι', $nik);
$nik = str_replace('m', 'ɱ', $nik);
$nik = str_replace('n', 'ɴ', $nik);
$nik = str_replace('o', 'Θ', $nik);
$nik = str_replace('p', 'ρ', $nik);
$nik = str_replace('q', 'ƣ', $nik);
$nik = str_replace('r', 'ર', $nik);
$nik = str_replace('s', 'Ș', $nik);
$nik = str_replace('t', 'τ', $nik);
$nik = str_replace('u', 'Ʋ', $nik);
$nik = str_replace('v', 'ν', $nik);
$nik = str_replace('w', 'ώ', $nik);
$nik = str_replace('x', 'Χ', $nik);
$nik = str_replace('y', 'ϓ', $nik);
$nik = str_replace('z', 'Հ', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-16)--------------------#
$nik = $c[1];
$nik = str_replace('a', '🅐', $nik);
$nik = str_replace('b', '🅑', $nik);
$nik = str_replace('c', '🅒', $nik);
$nik = str_replace('d', '🅓', $nik);
$nik = str_replace('e', '🅔', $nik);
$nik = str_replace('f', '🅕', $nik);
$nik = str_replace('g', '🅖', $nik);
$nik = str_replace('h', '🅗', $nik);
$nik = str_replace('i', '🅘', $nik);
$nik = str_replace('j', '🅙', $nik);
$nik = str_replace('k', '🅚', $nik);
$nik = str_replace('l', '🅛', $nik);
$nik = str_replace('m', '🅜', $nik);
$nik = str_replace('n', '🅝', $nik);
$nik = str_replace('o', '🅞', $nik);
$nik = str_replace('p', '🅟', $nik);
$nik = str_replace('q', '🅠', $nik);
$nik = str_replace('r', '🅡', $nik);
$nik = str_replace('s', '🅢', $nik);
$nik = str_replace('t', '🅣', $nik);
$nik = str_replace('u', '🅤', $nik);
$nik = str_replace('v', '🅥', $nik);
$nik = str_replace('w', '🅦', $nik);
$nik = str_replace('x', '🅧', $nik);
$nik = str_replace('y', '🅨', $nik);
$nik = str_replace('z', '🅩', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-17)--------------------#
$nik = $c[1];
$nik = str_replace('a', '۰۪۫A۪۫۰', $nik);
$nik = str_replace('b', '۰۪۫B۪۫۰', $nik);
$nik = str_replace('c', '۰۪۫C۪۫۰', $nik);
$nik = str_replace('d', '۰۪۫D۪۫۰', $nik);
$nik = str_replace('e', '۰۪۫E۪۫۰', $nik);
$nik = str_replace('f', '۰۪۫F۪۫۰', $nik);
$nik = str_replace('g', '۰۪۫G۪۫۰', $nik);
$nik = str_replace('h', '۰۪۫H۪۫۰', $nik);
$nik = str_replace('i', '۰۪۫I۪۫۰', $nik);
$nik = str_replace('j', '۰۪۫J۪۫۰', $nik);
$nik = str_replace('k', '۰۪۫K۪۫۰', $nik);
$nik = str_replace('l', '۰۪۫L۪۫۰', $nik);
$nik = str_replace('m', '۰۪۫M۪۫۰', $nik);
$nik = str_replace('n', '۰۪۫N۪۫۰', $nik);
$nik = str_replace('o', '۰۪۫O۪۫۰', $nik);
$nik = str_replace('p', '۰۪۫P۪۫۰', $nik);
$nik = str_replace('q', '۰۪۫Q۪۫۰', $nik);
$nik = str_replace('r', '۰۪۫R۪۫۰', $nik);
$nik = str_replace('s', '۰۪۫S۪۫۰', $nik);
$nik = str_replace('t', '۰۪۫T۪۫۰', $nik);
$nik = str_replace('u', '۰۪۫U۪۫۰', $nik);
$nik = str_replace('v', '۰۪۫V۪۫۰', $nik);
$nik = str_replace('w', '۰۪۫W۪۫۰', $nik);
$nik = str_replace('x', '۰۪۫X۪۫۰', $nik);
$nik = str_replace('y', '۰۪۫Y۪۫۰', $nik);
$nik = str_replace('z', '۰۪۫Z۪۫۰', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-18)--------------------#
$nik = $c[1];
$nik = str_replace('a', '̅α', $nik);
$nik = str_replace('b', '̅в', $nik);
$nik = str_replace('c', '̅c', $nik);
$nik = str_replace('d', '̅ɒ', $nik);
$nik = str_replace('e', '̅є', $nik);
$nik = str_replace('f', '̅f', $nik);
$nik = str_replace('g', '̅ɢ', $nik);
$nik = str_replace('h', '̅н', $nik);
$nik = str_replace('i', '̅ɪ', $nik);
$nik = str_replace('j', '̅ᴊ', $nik);
$nik = str_replace('k', '̅ĸ', $nik);
$nik = str_replace('l', '̅ℓ', $nik);
$nik = str_replace('m', '̅м', $nik);
$nik = str_replace('n', '̅и', $nik);
$nik = str_replace('o', '̅σ', $nik);
$nik = str_replace('p', '̅ρ', $nik);
$nik = str_replace('q', '̅q', $nik);
$nik = str_replace('r', '̅я', $nik);
$nik = str_replace('s', '̅s', $nik);
$nik = str_replace('t', '̅τ', $nik);
$nik = str_replace('u', '̅υ', $nik);
$nik = str_replace('v', '̅v', $nik);
$nik = str_replace('w', '̅ω', $nik);
$nik = str_replace('x', '̅x', $nik);
$nik = str_replace('y', '̅y', $nik);
$nik = str_replace('z', '̅z', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-19)--------------------#
$nik = $c[1];
$nik = str_replace('a', '🄰', $nik);
$nik = str_replace('b', '🄱', $nik);
$nik = str_replace('c', '🄲', $nik);
$nik = str_replace('d', '🄳', $nik);
$nik = str_replace('e', '🄴', $nik);
$nik = str_replace('f', '🄵', $nik);
$nik = str_replace('g', '🄶', $nik);
$nik = str_replace('h', '🄷', $nik);
$nik = str_replace('i', '🄸', $nik);
$nik = str_replace('j', '🄹', $nik);
$nik = str_replace('k', '🄺', $nik);
$nik = str_replace('l', '🄻', $nik);
$nik = str_replace('m', '🄼', $nik);
$nik = str_replace('n', '🄽', $nik);
$nik = str_replace('o', '🄾', $nik);
$nik = str_replace('p', '🄿', $nik);
$nik = str_replace('q', '🅀', $nik);
$nik = str_replace('r', '🅁', $nik);
$nik = str_replace('s', '🅂', $nik);
$nik = str_replace('t', '🅃', $nik);
$nik = str_replace('u', '🅄', $nik);
$nik = str_replace('v', '🅅', $nik);
$nik = str_replace('w', '🅆', $nik);
$nik = str_replace('x', '🅇', $nik);
$nik = str_replace('y', '🅈', $nik);
$nik = str_replace('z', '🅉', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-20)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'a', $nik);
$nik = str_replace('b', 'b', $nik);
$nik = str_replace('c', '🅲', $nik);
$nik = str_replace('d', '🅳', $nik);
$nik = str_replace('e', '🅴', $nik);
$nik = str_replace('f', '🅵', $nik);
$nik = str_replace('g', '🅶', $nik);
$nik = str_replace('h', '🅷', $nik);
$nik = str_replace('i', '🅸', $nik);
$nik = str_replace('j', '🅹', $nik);
$nik = str_replace('k', '🅺', $nik);
$nik = str_replace('l', '🅻', $nik);
$nik = str_replace('m', '🅼', $nik);
$nik = str_replace('n', '🅽', $nik);
$nik = str_replace('o', 'o', $nik);
$nik = str_replace('p', 'p', $nik);
$nik = str_replace('q', '🆀', $nik);
$nik = str_replace('r', '🆁', $nik);
$nik = str_replace('s', 's', $nik);
$nik = str_replace('t', '🆃', $nik);
$nik = str_replace('u', '🆄', $nik);
$nik = str_replace('v', '🆅', $nik);
$nik = str_replace('w', '🆆', $nik);
$nik = str_replace('x', '🆇', $nik);
$nik = str_replace('y', '🆈', $nik);
$nik = str_replace('z', '🆉', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-21)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'a̷', $nik);
$nik = str_replace('b', 'b̷', $nik);
$nik = str_replace('c', 'c̷', $nik);
$nik = str_replace('d', 'd̷', $nik);
$nik = str_replace('e', 'e̷', $nik);
$nik = str_replace('f', 'f̷', $nik);
$nik = str_replace('g', 'g̷', $nik);
$nik = str_replace('h', 'h̷', $nik);
$nik = str_replace('i', 'i̷', $nik);
$nik = str_replace('j', 'j̷', $nik);
$nik = str_replace('k', 'k̷', $nik);
$nik = str_replace('l', 'l̷', $nik);
$nik = str_replace('m', 'm̷', $nik);
$nik = str_replace('n', 'n̷', $nik);
$nik = str_replace('o', 'o̷', $nik);
$nik = str_replace('p', 'p̷', $nik);
$nik = str_replace('q', 'q̷', $nik);
$nik = str_replace('r', 'r̷', $nik);
$nik = str_replace('s', 's̷', $nik);
$nik = str_replace('t', 't̷', $nik);
$nik = str_replace('u', 'u̷', $nik);
$nik = str_replace('v', 'v̷', $nik);
$nik = str_replace('w', 'w̷', $nik);
$nik = str_replace('x', 'x̷', $nik);
$nik = str_replace('y', 'y̷', $nik);
$nik = str_replace('z', 'z̷', $nik);
MrDG('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$nik
]);
#-----------------(Mroan-22)--------------------#
$nik = $c[1];
$nik = str_replace('a', 'ᴀ', $nik);
$nik = str_replace('b', 'ʙ', $nik);
$nik = str_replace('c', 'ᴄ', $nik);
$nik = str_replace('d', 'ᴅ', $nik);
$nik = str_replace('e', 'ᴇ', $nik);
$nik = str_replace('f', 'ᴈ', $nik);
$nik = str_replace('g', 'ɢ', $nik);
$nik = str_replace('h', 'ʜ', $nik);
$nik = str_replace('i', 'ɪ', $nik);
$nik = str_replace('j', 'ᴊ', $nik);
$nik = str_replace('k', 'ᴋ', $nik);
$nik = str_replace('l', 'ʟ', $nik);
$nik = str_replace('m', 'ᴍ', $nik);
$nik = str_replace('n', 'ɴ', $nik);
$nik = str_replace('o', 'ᴏ', $nik);
$nik = str_replace('p', 'ᴘ', $nik);
$nik = str_replace('q', 'ᴓ', $nik);
$nik = str_replace('r', 'ʀ', $nik);
$nik = str_replace('s', 'ᴤ', $nik);
$nik = str_replace('t', 'ᴛ', $nik);
$nik = str_replace('u', 'ᴜ', $nik);
$nik = str_replace('v', 'ᴠ', $nik);
$nik = str_replace('w', 'ᴡ', $nik);
$nik = str_replace('x', 'ᴥ', $nik);
$nik = str_replace('y', 'ʏ', $nik);
$nik = str_replace('z', 'ᴢ', $nik);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>$nik]);}
//media
$qid = $update->callback_query->id;
$cid2 = $update->callback_query->message->chat->id;
$from2 = $update->callback_query->from->id;
$mid2 = $update->callback_query->message->message_id;

$data = $update->callback_query->data;
if($data){
	
$ty = bot('getchatmember',[
	'chat_id'=>$cid2,
	'user_id'=>$from2
	]);
$ty = $ty->result->status;
if($ty=="administrator" or $ty=="creator"){

bot('answercallbackquery',[
	'callback_query_id'=>$qid
	]);	
         if($data=="rasm"){         
              $stic = file_get_contents("data/$cid2/rasm.db");
              if($stic){
              if($stic=="on"){
              	file_put_contents("data/$cid2/rasm.db","off");
              }
              if($stic=="off"){
              	file_put_contents("data/$cid2/rasm.db","on");
              }
          }else{
          	file_put_contents("data/$cid2/rasm.db","on");
          }
        $ssl = file_get_contents("data/$cid2/ssilka.db");
         $stic = file_get_contents("data/$cid2/stic.db");
          $ras = file_get_contents("data/$cid2/rasm.db");
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","🚫",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","🚫",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","🚫",$ras);
$join = file_get_contents("data/$cid2/join.db");
          $gif = file_get_contents("data/$cid2/gif.db");
          $ovoz = file_get_contents("data/$cid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","🚫",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","🚫",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","🚫",$ovoz);
        bot("editMessageReplyMarkup",[
            'chat_id'=>$cid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>"🖼Rasm $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],
             
 ]
                ]),
        ]);
    }
    

     if($data=="ssl"){
  $ssl = file_get_contents("data/$cid2/ssilka.db");
         if($ssl){
         if($ssl=="on"){
         file_put_contents("data/$cid2/ssilka.db","off");
         }
         if($ssl=="off"){
         file_put_contents("data/$cid2/ssilka.db","on");
         }
         }else{
         file_put_contents("data/$cid2/ssilka.db","on");
         } 
          $ssl = file_get_contents("data/$cid2/ssilka.db");
          $stic = file_get_contents("data/$cid2/stic.db");
          $ras = file_get_contents("data/$cid2/rasm.db");
$join = file_get_contents("data/$cid2/join.db");
          $gif = file_get_contents("data/$cid2/gif.db");
          $ovoz = file_get_contents("data/$cid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","🚫",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","🚫",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","🚫",$ovoz);
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","🚫",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","🚫",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","🚫",$ras);
        bot("editMessageReplyMarkup",[
            'chat_id'=>$cid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🖼Rasm $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],

                    ]
        ]),
        ]);
    }


    if($data=="stic"){
  $ssl = file_get_contents("data/$cid2/stic.db");
         if($ssl){
         if($ssl=="on"){
         file_put_contents("data/$cid2/stic.db","off");
         }
         if($ssl=="off"){
         file_put_contents("data/$cid2/stic.db","on");
         }
         }else{
         file_put_contents("data/$cid2/stic.db","on");
         } 
          $ssl = file_get_contents("data/$cid2/ssilka.db");
          $stic = file_get_contents("data/$cid2/stic.db");
          $ras = file_get_contents("data/$cid2/rasm.db");
           $join = file_get_contents("data/$cid2/join.db");
          $gif = file_get_contents("data/$cid2/gif.db");
          $ovoz = file_get_contents("data/$cid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","🚫",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","🚫",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","🚫",$ovoz);
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","🚫",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","🚫",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","🚫",$ras);
        bot("editMessageReplyMarkup",[
            'chat_id'=>$cid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                 [['text'=>"🖼Rasm $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],
                    ]
                    ]),
        ]);
    }

//JOIN
  if($data=="join"){
  $ssl = file_get_contents("data/$cid2/join.db");
         if($ssl){
         if($ssl=="on"){
         file_put_contents("data/$cid2/join.db","off");
         }
         if($ssl=="off"){
         file_put_contents("data/$cid2/join.db","on");
         }
         }else{
         file_put_contents("data/$cid2/join.db","on");
         } 
          $ssl = file_get_contents("data/$cid2/ssilka.db");
          $stic = file_get_contents("data/$cid2/stic.db");
          $ras = file_get_contents("data/$cid2/rasm.db");
           $join = file_get_contents("data/$cid2/join.db");
          $gif = file_get_contents("data/$cid2/gif.db");
          $ovoz = file_get_contents("data/$cid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","🚫",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","🚫",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","🚫",$ovoz);
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","🚫",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","🚫",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","🚫",$ras);
        bot("editMessageReplyMarkup",[
            'chat_id'=>$cid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                  [['text'=>"🖼Rasm $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],
                    ]
                    ]),
        ]);
    }
//ovoz
  if($data=="ovoz"){
  $ssl = file_get_contents("data/$cid2/ovoz.db");
         if($ssl){
         if($ssl=="on"){
         file_put_contents("data/$cid2/ovoz.db","off");
         }
         if($ssl=="off"){
         file_put_contents("data/$cid2/ovoz.db","on");
         }
         }else{
         file_put_contents("data/$cid2/ovoz.db","on");
         } 
          $ssl = file_get_contents("data/$cid2/ssilka.db");
          $stic = file_get_contents("data/$cid2/stic.db");
          $ras = file_get_contents("data/$cid2/rasm.db");
           $join = file_get_contents("data/$cid2/join.db");
          $gif = file_get_contents("data/$cid2/gif.db");
          $ovoz = file_get_contents("data/$cid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","🚫",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","🚫",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","🚫",$ovoz);
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","🚫",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","🚫",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","🚫",$ras);
        bot("editMessageReplyMarkup",[
            'chat_id'=>$cid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                  [['text'=>"🖼Rasm $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],
                    ]
                    ]),
        ]);
    }
//gif
  if($data=="gif"){
  $ssl = file_get_contents("data/$cid2/gif.db");
         if($ssl){
         if($ssl=="on"){
         file_put_contents("data/$cid2/gif.db","off");
         }
         if($ssl=="off"){
         file_put_contents("data/$cid2/gif.db","on");
         }
         }else{
         file_put_contents("data/$cid2/gif.db","on");
         } 
          $ssl = file_get_contents("data/$cid2/ssilka.db");
          $stic = file_get_contents("data/$cid2/stic.db");
          $ras = file_get_contents("data/$cid2/rasm.db");
           $join = file_get_contents("data/$cid2/join.db");
          $gif = file_get_contents("data/$cid2/gif.db");
          $ovoz = file_get_contents("data/$cid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","🚫",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","🚫",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","🚫",$ovoz);
          $ssl =  str_replace("on","✅",$ssl);
          $ssl = str_replace("off","🚫",$ssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","🚫",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","🚫",$ras);
        bot("editMessageReplyMarkup",[
            'chat_id'=>$cid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                  [['text'=>"🖼Rasm $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker $stic",'callback_data'=>'stic'],['text'=>"🎭Gif $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka $ssl",'callback_data'=>'ssl'],['text'=>"👑Forward $join",'callback_data'=>'join']],
                    ]
                    ]),
        ]);
    }


 }else{
bot('answercallbackquery',[
	'callback_query_id'=>$qid
	]);
}
}
///inline
$userID = $update->inline_query->from->id;
$theQuery = $update->inline_query->query;
$cid = $update->inline_query->query;


?>
////////////@SystemUz ////////////////////////