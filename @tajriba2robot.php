<?php 
ob_start();

$API_KEY = '772573572:AAHpS2Pzqw1410bDRrhex6cEAxNnm1iMjmQ';
$creator = "807013111";
$mybot = "tajriba2robot";
$kanal = "UzTajriba";
$myusername = "CrossMaker";
$version = "v1.0";

define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
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
$text = $message->text;
$cid = $message->chat->id;
$fadmin = $message->from->id;
$mesid = $message->message_id;
$id = $message->reply_to_message->from->id;
$name = $message->from->first_name;
$edname = $message->from->last_name;
$username = $message->from->username;
$repname = $message->reply_to_message->from->first_name;
$data = $update->callback_query->data;
$calid = $update->callback_query->id;
$mesid2 = $update->callback_query->message->message_id;
$cid2 = $update->callback_query->message->chat->id;
$name2 = $update->callback_query->from->first_name;
$type = $message->chat->type;
$gruppa = file_get_contents("gruppa.db");
$lichka = file_get_contents("lichka.db");
$title = $message->chat->title;

$callfrid = $update->callback_query->from->id;

$data = $update->callback_query->data;
$ccid = $update->callback_query->message->chat->id;
$cmid = $update->callback_query->message->message_id;
$cuser = $update->callback_query->message->chat->username;
$qid = $update->callback_query->id;

$channel = $update->channel_post; 
$channel_text = $channel->text;
$channel_mid = $channel->message_id; 
$channel_id = $channel->chat->id; 
$channel_user = $channel->chat->username;

$chanel_doc = $channel->document;

$repmid = $channel->reply_to_message->message_id;
mkdir("like");

$soat = date('H',strtotime('2 hour'));
$minut = date('i',strtotime('2 hour'));

$String = file_get_contents('http://obhavo.uz/tashkent');

$ex1 = explode("\n",$String);
$bugun = str_replace('<div class="current-day">',' ',$ex1[62]);
$bugun = str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
/*
$gr1=str_replace('<span><strong>',' ',$ex1[78]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);

$gr2=str_replace('<span>',' ',$ex1[79]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);

$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[82]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);

$tongr=str_replace('<p class="forecast">',' ',$ex1[104]);
$tongr=str_replace('</p>',' ',$tongr);
$tongr = trim($tongr);

$kungr=str_replace('<p class="forecast">',' ',$ex1[109]);
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);

$oqgr=str_replace('<p class="forecast">',' ',$ex1[114]);
$oqgr=str_replace('</p>',' ',$oqgr);
$oqgr = trim($oqgr);

$nam=str_replace('<p>',' ',$ex1[86]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);

$bosim=str_replace('<p>',' ',$ex1[88]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);

$shamol=str_replace('<p>',' ',$ex1[87]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol= trim($shamol);

$oy=str_replace('<p>',' ',$ex1[96]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','`',$oy);
$oy= trim($oy);

$qch=str_replace('<p>',' ',$ex1[97]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);

$qb=str_replace('<p>',' ',$ex1[98]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);

$tong=str_replace('<p class="time-of-day">',' ',$ex1[102]);
$tong=str_replace('</p>',' ',$tong);
$tong= trim($tong);

$kun=str_replace('<p class="time-of-day">',' ',$ex1[107]);
$kun=str_replace('</p>',' ',$kun);
$kun= trim($kun);

$oqshom=str_replace('<p class="time-of-day">',' ',$ex1[112]);
$oqshom=str_replace('</p>',' ',$oqshom);
$oqshom= trim($oqshom); ***/
/*
if($soat == "23" and $minut == "22"){
  bot('sendMessage',[
    'chat_id'=>-1001302633608,
    'text'=>"Toshkent \n$bugun\n☀️ $gr1...$gr2, $havo1\n\n$tong: 🌤 +$tongr\n$kun: 🌤 +$kungr\n$oqshom: 🌤 +$oqgr\n\n$nam\n$shamol\n$bosim\n\n$oy\n$qch\n$qb",
    'parse_mode'=>'markdown',
  ]);
}*/

/*if($text == "/id"){
	bot('sendmessage',[
		'chat_id'=>$cid,
  'text'=>"Toshkent \n$bugun\n☀️ $gr1...$gr2, $havo1\n\n$tong: 🌤 +$tongr\n$kun: 🌤 +$kungr\n$oqshom: 🌤 +$oqgr\n\n$nam\n$shamol\n$bosim\n\n$oy\n$qch\n$qb",*/
if($text == "/start"){
	bot('sendmessage',[
		'chat_id'=>$cid,
		'text'=>"Toshkent",
		'parse_mode'=>'html',
	]);
}

/*if(stripos($channel_text,"#like") !== false){
  bot('deletemessage',[
    'chat_id'=>$channel_id,
    'message_id'=>$channel_mid,
  ]);
  $tokenn = uniqid("true");
  bot('editMessageReplyMarkup',[
		'chat_id'=>$channel_id,
    'message_id'=>$repmid,
    'inline_query_id'=>$qid, 
    'reply_markup'=>json_encode([ 
    'inline_keyboard'=>[
        [['text'=>"👍", 'callback_data'=>"$tokenn=👍"],['text'=>"👎",'callback_data'=>"$tokenn=👎"]],
		    [['text'=>"Do'stlarga ulashish", "url"=>"https://telegram.me/share/url?url=https://telegram.me/$channel_user/$repmid"]], 
		  ] 
		]) 
  ]);
}

if(mb_stripos($data,"=")!==false){ 
  $ex = explode("=",$data); 
  $calltok = $ex[0]; 
  $emoj = $ex[1]; 
  $mylike = file_get_contents("like/$calltok.dat"); 
  if(mb_stripos($mylike,"$callfrid")!==false){ 
      bot('answerCallbackQuery',[ 
        'callback_query_id'=>$qid, 
        'text'=>"Kechirasiz siz ovoz berib bo'lgansiz!", 
        'show_alert'=>false, 
      ]); 
    }else{ 
  file_put_contents("like/$calltok.dat","$mylike\n$callfrid=$emoj");
  $value = file_get_contents("like/$calltok.dat"); 
  $lik = substr_count($value,"👍"); 
  $des = substr_count($value,"👎"); 
    bot('editMessageReplyMarkup',[ 
      'chat_id'=>$ccid, 
      'message_id'=>$cmid,
      'inline_query_id'=>$qid,
      'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[ 
          [['text'=>"👍 $lik", 'callback_data'=>"$calltok=👍"],['text'=>"👎 $des",'callback_data'=>"$calltok=👎"]], 
          [['text'=>"Do'stlarga ulashish", "url"=>"https://telegram.me/share/url?url=https://telegram.me/$channel_user/$repmid"]], 
        ] 
      ]) 
    ]);
    bot('answerCallbackQuery',[ 
      'callback_query_id'=>$qid, 
      'text'=>"Ovozingiz qabul qilindi!", 
      'show_alert'=>false, 
    ]);  
  }
}*/
/***
if(stripos($channel_text,"#emoji") !== false){
  $ex = explode(" ",$channel_text);
  $emoji = $ex[1];
  $two_emoji = explode("/",$ex[1]);
  $one = $two_emoji[0];
  $two = $two_emoji[1];
  bot('deletemessage',[
    'chat_id'=>$channel_id,
    'message_id'=>$channel_mid,
  ]);
  $tokenn = uniqid("true");
  bot('editMessageReplyMarkup',[
		'chat_id'=>$channel_id,
    'message_id'=>$repmid,
    'inline_query_id'=>$qid, 
    'reply_markup'=>json_encode([ 
    'inline_keyboard'=>[
        [['text'=>"$one", 'callback_data'=>"$tokenn=$one"],['text'=>"$two",'callback_data'=>"$tokenn=$two"]],
		    [['text'=>"Do'stlarga ulashish", "url"=>"https://telegram.me/share/url?url=https://telegram.me/$channel_user/$repmid"]], 
		  ] 
		]) 
  ]);
}

if(mb_stripos($data,"=")!==false){ 
  $ex = explode("=",$data); 
  $calltok = $ex[0]; 
  $emoj = $ex[1]; 
  $mylike = file_get_contents("like/$calltok.dat"); 
  if(mb_stripos($mylike,"$callfrid")!==false){ 
      bot('answerCallbackQuery',[ 
        'callback_query_id'=>$qid, 
        'text'=>"Kechirasiz siz ovoz berib bo'lgansiz!", 
        'show_alert'=>false, 
      ]); 
    }else{ 
  file_put_contents("like/$calltok.dat","$mylike\n$callfrid=$emoj");
  $value = file_get_contents("like/$calltok.dat"); 
  $lik = substr_count($value,"$one"); 
  $des = substr_count($value,"$two"); 
    bot('editMessageReplyMarkup',[ 
      'chat_id'=>$ccid, 
      'message_id'=>$cmid,
      'inline_query_id'=>$qid,
      'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[ 
          [['text'=>"$one $lik", 'callback_data'=>"$calltok=$one"],['text'=>"$two $des",'callback_data'=>"$calltok=$two"]], 
          [['text'=>"Do'stlarga ulashish", "url"=>"https://telegram.me/share/url?url=https://telegram.me/$cuser/$cmid"]], 
        ] 
      ]) 
    ]);
    bot('answerCallbackQuery',[ 
      'callback_query_id'=>$qid, 
      'text'=>"Ovozingiz qabul qilindi!", 
      'show_alert'=>false, 
    ]);  
  }
}
***/