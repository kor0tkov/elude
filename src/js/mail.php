<?php
if($_POST) {
  $user = $_POST;
  $to_Email = "hello@voynov.co";
  $subject = 'Привет! Перезвоните мне!';
  $message = 'Имя: '.$user['name'].' E-mail: '.$user['mail'].' Город: '.$user['city'];
  $response;

  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    $response = json_encode(array('text' => 'Возникла ошибка при отправке данных'));
    die($response);
  }

  if(!mail($to_Email, $subject, $message, "From: Elude \r\n")) {
    $response = json_encode(array('text' => 'Не могу отправить почту! Пожалуйста, проверьте ваши настройки PHP почты.'));
    die($response);
    } else {
    $response = json_encode(array('text' => 'Спасибо! '.$user['name'] .', ваше сообщение отправлено.'));
    die($response);
  }
}
?>
