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

if($text == "/start"){
	bot('sendmessage',[
		'chat_id'=>$cid,
		'text'=>"Toshkent",
		'parse_mode'=>'html',
	]);
}
