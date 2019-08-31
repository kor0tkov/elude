<?php

if ($_POST) {
  $user = $_POST;
  
  $to_Email = 'hello@voynov.co';
  $subject = 'New Elude Request';
  $headers ="From: Elude Today <hello@eludetoday.com>\nReply-to:hello@eludetoday.com\nContent-Type: text/plain;";

  $message = sprintf('Name: %s %s E-mail: %s %s City: %s %s ',
    $user['name'], PHP_EOL, $user['mail'], PHP_EOL, $user['city']
  );

  $isSend = mail($to_Email, $subject, $message, $headers);

  if($isSend)) {
    $message = [
      'text' => 'Hello '.$user['name'] .', your message is send.'
    ];
  } else {
    $message = [
      'text' => 'Error.'
    ];
  }

  return json_encode($message);
}
