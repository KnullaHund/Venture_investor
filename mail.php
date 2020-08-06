<?php

$name = $_POST['name'];
$phone = $_POST['tell'];
$email = $_POST['mail'];
$age = $_POST['age'];
$answerFirst = $_POST['prof'];
$answerSecond = $_POST['cash'];
$message = 'Имя: ' .$name . "\n" . 'Возраст: ' .$age . "\n" . 'Телефон: ' . $phone . "\n" . 'Почта: ' . $email . "\n" .
'Имеется ли опыт сдачи недвижимости в долгосрочную аренду?: ' . $answerFirst . "\n" . 'Есть ли возможность совмещения с основной деятельностью?: ' . $answerSecond;

mail('noare.association@gmail.com', 'Оставлена новая заявка на сайте', $message);

?>

