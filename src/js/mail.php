<?php
if($_POST) {
  $user = $_POST;
  $userName = filter_var($_POST["name"], FILTER_SANITIZE_STRING)
  $to_Email = "quanoxy@gmail.com"; 
  $subject = 'Thank you'; 
  $message = 'hello, my name is '.$userName;
  $response;

  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    $response = json_encode(array('text' => 'Возникла ошибка при отправке данных'));
    die($response);
  }

  if(!mail($to_Email, $subject, $message, "From: your@mom.fuck \r\n")) {
    $response = json_encode(array('text' => 'Не могу отправить почту! Пожалуйста, проверьте ваши настройки PHP почты.'));
    die($response);
    } else {
    $response = json_encode(array('text' => 'Спасибо! '.$userName .', ваше сообщение отправлено.'));
    die($response);
  }
}
?>