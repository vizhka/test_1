<?php

$post = (!empty($_POST)) ? true : false;

if($post) {
$phone = trim($_POST['tel']);
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$text = trim($_POST['text']);

$subject ="Новая заявка с сайта outsider-production.ru";


$message ="<b>Имя:</b> ".$name."<br><b>Телефон:</b> " .$phone. "<br><b>Почта:</b> " .$email. "<br><b>Сообщение:</b>" .$text;

$header = "Content-type: text/html; charset=utf-8\n";

$header .= "From: outsider-production.ru <Outsider-production.ru>";	

$mail = mail("piter.seredenko@gmail.com , outsider.projects@gmail.com", $subject, $message, $header);

if($mail)
{
echo 'Ваша заявка отправлена успешно!';
} else {
echo 'Ошибка отправки, попробуйте еще раз!';
}

} else {
echo 'Не заполнены поля все поля!';
}
?>
