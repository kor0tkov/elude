<?php
if($_POST) {
  $user = $_POST;
  $to_Email = "hello@voynov.co";
  $subject = 'New Elude Request.';
  $message = 'Name: '.$user['name'].' E-mail: '.$user['mail'].' City: '.$user['city'];
  $response;

  if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
    $response = json_encode(array('text' => 'Возникла ошибка при отправке данных'));
    die($response);
  }

  if(!mail($to_Email, $subject, $message, "From: Elude \r\n")) {
    $response = json_encode(array('text' => 'Не могу отправить почту! Пожалуйста, проверьте ваши настройки PHP почты.'));
    die($response);
    } else {
    $response = json_encode(array('text' => 'Hello '.$user['name'] .', your message is send.'));
    die($response);
  }
}
?>
