<?php
$to = "skpr19+lead@mail.amocrm.ru"; 
$tema = "Заявка (Р.Е. Кутявин)"; 
$message .= "E-mail: ".$_POST['email']."<br>"; 
$message .= "Номер телефона: ".$_POST['phone']."<br>"; 
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
mail($to, $tema, $message, $headers); 

$to1 = "order@salesgenerator.pro"; 
$tema1 = "Заявка (Р.Е. Кутявин)"; 
$message1 .= "E-mail: ".$_POST['email']."<br>"; 
$message1 .= "Номер телефона: ".$_POST['phone']."<br>"; 
$headers1 .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
mail($to1, $tema1, $message1, $headers1); 
header("Location: http://romanus44.beget.tech/#Btn");
?>