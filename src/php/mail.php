<?php
 if($_POST)
 {
 $to_Email = "quanoxy@gmail.com"; 
 $subject = 'Thank you'; 

 if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

 $otvet_serv = json_encode(
 array( 
 'text' => 'Возникла ошибка при отправке данных'
 ));

 die($otvet_serv);
 } 

 if(!mail($to_Email, $subject, $message, "From: info@webriz.ru \r\n"))
 {
 $otvet_serv = json_encode(array('text' => 'Не могу отправить почту! Пожалуйста, проверьте ваши настройки PHP почты.'));
 die($otvet_serv);
 }else{
 $otvet_serv = json_encode(array('text' => 'Спасибо! '.$user_Name .', ваше сообщение отправлено.'));
 die($otvet_serv);
 }
 }
 ?>