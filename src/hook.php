<?php
require_once(dirname(__FILE__) . '/lib_http.php');
require_once(dirname(__FILE__) . '/lib_telegram.php');

$content = file_get_contents("php://input");
$update = json_decode($content, true);

$message = $update['message'];
$chat_id = $message['chat']['id'];
syslog(LOG_INFO, "Message from chat #" . $chat_id);

telegram_send_message($chat_id, "This bot is temporarily offline, sorry.");
