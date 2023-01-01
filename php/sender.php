<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
    $text = $_POST['text'];

	$to = "nikolayputyata@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка з сайту";

	
	$msg="
    Ім'я: $name /n
    Телефон: $phone /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $to ");

?>

<p>Дякуємо за звернення. Спеціаліст з'яжеться з Вами найближчим часом.</p>
