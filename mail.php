<?php 

$name = $_POST['name'];
$phone = $_POST['tell'];
$email = $_POST['mail'];
$age = $_POST['age'];
$answerFirst = $_POST['prof'];
$answerSecond = $_POST['cash'];
$message = 'Имя: ' .$name . '<br>' . 'Возраст: ' .$age . '<br>' . 'Телефон: ' . $phone . '<br>' . 'Почта: ' . $email . '<br>' . 
'Ответ на первый вопрос: ' . $answerFirst . '<br>' . 'Ответ на второй вопрос: ' . $answerSecond;

mail('noare.association@gmail.com', 'Оставлена новая заявка на сайте', $message);

?>