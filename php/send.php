<?php
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$mess = $_POST['mess'];

	$name = htmlspecialchars($name);
	$mail = htmlspecialchars($mail);
	$mess = htmlspecialchars($mess);

	$name = urldecode($name);
	$mail = urldecode($mail);
	$mess = urldecode($mess);

	$name = trim($name);
	$mail = trim($mail);
	$mess = trim($mess);

	$text = 'Имя: '.$name.'\n'.
	  'Почта: '.$mail.'\n'.
		'Сообщение: '.$mess.'\n';

	$is_sent = mail('klarens.top72@gmail.com', 'Новое письмо', $text, 'From: "no-reply@mydomain.ru \r\n');

	if ($is_sent) {
		echo ('Письмо отправлено');
	}

	else {
		echo ('Есть ошибки');
	}
?>
