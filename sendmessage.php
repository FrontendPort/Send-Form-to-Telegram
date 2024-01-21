<?php
  $content = "";
  foreach ($_POST as $key => $value) {
    if($value) {
      $content .= "<b>$key</b>: <i>$value</i>\n";
    }
  }
  if(trim($content)){
    $content = "<b>Сообщение с сайта:</b>\n".$content;
    // Ваш бот токен из @BotFather
    $apiToken = "";
    $data = [
      // Username чата
      'chat_id' => '',
      'text' => $content,
      'parse_mode' => 'HTML'
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
  }
?>