<?php
if($_POST) {
  $user = $_POST;
  printf($user);
  printf('test');
  $to_Email = "quanoxy@gmail.com"; 
  $subject = 'Thank you'; 
  $message = 'hello, my name is '.$user.name;
  $response;

  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    $response = json_encode(array('text' => 'Возникла ошибка при отправке данных'));
    die($response);
  }

  if(!mail($to_Email, $subject, $message, "From: your@mom.fuck \r\n")) {
    $response = json_encode(array('text' => 'Не могу отправить почту! Пожалуйста, проверьте ваши настройки PHP почты.'));
    die($response);
    } else {
    $response = json_encode(array('text' => 'Спасибо! '.$user.name .', ваше сообщение отправлено.'));
    die($response);
  }
}
?>